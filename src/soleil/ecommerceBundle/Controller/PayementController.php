<?php
 
 
namespace soleil\ecommerceBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use soleil\ecommerceBundle\Entity\Client;
use soleil\ecommerceBundle\Form\ClientType;

use soleil\ecommerceBundle\Entity\Realisation;

class PayementController extends Controller
{
  
    /**
     * @Route("/realisation/achat/paiement/details/transaction/{slug_r}")
     *  @ParamConverter("realisation", options={"mapping": {"slug_r": "slug"}})
     */
    public function detailsAction(Realisation $realisation)
    {
        
        $client = new Client($realisation->getPrix());
        $client->setRealisation($realisation);
        
        $form = $this->createForm(new ClientType(), $client);
        
        $request = $this->get('request');                
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) { 
                
                $site = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('soleilSiteBundle:Site')
                    ->getSiteParHost();

                $domaine = 'http://'.$site->getDomaine();
                
                $donnee = array(
                        'dateN' => $form["datenaissance"]->getData(), 
                        'tel' => $form["tel"]->getData(),
                        'mail' => $form["mail"]->getData(),
                        'genre' => $form["genre"]->getData(),
                        'ev'    => $realisation->getId(),
                );                            
                
                $donnee = json_encode($donnee);                
                
                $response = $this->request('SetExpressCheckout',array(
                    'RETURNURL' => $domaine.$this->get('router')->generate('soleil_realisation_paiement_return'),
                    'CANCELURL' => $domaine.$this->get('router')->generate('soleil_realisation_paiement_cancel'),
                    
                    'AMT' => $realisation->getPrix(), //total tva comprise + frais de port si il y en a
                    'CURRENCYCODE' => 'EUR', //Argent dans lekel on pay    
                    'L_PAYMENTREQUEST_0_NAME0' => $realisation->getTitreFr(), //produit commander
                    
                    'PAYMENTREQUEST_0_ITEMAMT' => 'Achat : '.$realisation->getTitreFr(),
                    'PAYMENTACTION' => 'Sale',
                    'L_PAYMENTREQUEST_0_AMT0' => $realisation->getPrix(),
                    'LOCALECODE' => 'FR',
                    
                    'CUSTOM' => $donnee,
                    'DESC' => 'Achat : '.$realisation->getTitreFr(),//." : ".$realisation->getPrix(),
                    'ALLOWNOTE' => '0', //pas de note au vendeur
                ));

                if($response){
                        
                    return $this->redirect("https://www.sandbox.paypal.com/webscr&cmd=_express-checkout&useraction=commit&token=".$response['TOKEN']);
                }
                else{
                
                    //afficher l'erreur.
                     $erreur = "<h4>Votre payement n'a pas été effectué<h4><p>Veuillez nous contacter pour vous inscrire</p>";
                    
                     return $this->render('soleilecommerceBundle:Realisation:Paiement/paiementErreur.html.twig',
                        array(
                            'erreur' => $erreur,
                        ));
                }

            }
        }
        return $this->render('soleilecommerceBundle:Realisation:achat.html.twig',
        array(
            'form' => $form->createView(),
        ));
                
    }
    
    public function returnAction()
    {
         $response = $this->request('GetExpressCheckoutDetails',array(
                    'TOKEN' => $_GET['token'],
                ));
                
                if($response){
                
                    
                    if($response['CHECKOUTSTATUS'] == 'PaymentActionCompleted'){
                        $erreur = '<h4>Votre payement à déja été validé<h4>';
                        
                        return $this->render('soleilecommerceBundle:Realisation:Paiement/paiementErreur.html.twig',
                        array(
                            'erreur' => $erreur,
                        ));
                    }
                    else{
                        
                        //var_dump($response);
                        //echo $response['PAYMENTREQUEST_0_CUSTOM']."<br/>";
                        //echo $response['PAYMENTREQUEST_0_CUSTOM']['tel'];
                        $donnee = json_decode($response['PAYMENTREQUEST_0_CUSTOM'],true);
                        
                        //echo "tel : ".$donnee['dateN']['date'];
                        $dateN = $donnee['dateN']['date'];
                        $dateN = substr($dateN,0,10);  
                        
                        $tel =$donnee['tel'];
                        $mail =$donnee['mail'];
                        $genre =$donnee['genre'];
                        $idev = $donnee['ev'];
                        
                        $nom = $response['PAYMENTREQUEST_0_SHIPTONAME']; //nom
                        $ad = $response['PAYMENTREQUEST_0_SHIPTOSTREET']; //adrsse 
                        $cp = $response['PAYMENTREQUEST_0_SHIPTOZIP']; //cp
                        $ville = $response['PAYMENTREQUEST_0_SHIPTOCITY']; // ville
                        if( isset($response['PAYMENTREQUEST_0_SHIPTOSTATE'])){ // etat-province
                            $etatProv = $response['PAYMENTREQUEST_0_SHIPTOSTATE'];
                        }
                        else{ $etatProv = ''; }
                        
                        $pays = $response['PAYMENTREQUEST_0_SHIPTOCOUNTRYNAME']; // pays
 
                   }
                    
                }
                else{
                    //afficher l'erreur.
                    $erreur = "<h4>Votre payement n'a pas été effectué<h4><p>Veuillez nous contacter pour vous inscrire</p>";
                    
                     return $this->render('soleilecommerceBundle:Realisation:Paiement/paiementErreur.html.twig',
                        array(
                            'erreur' => $erreur,
                        ));
                }
                
                $response = $this->request('DoExpressCheckoutPayment',array(
                    'TOKEN' => $_GET['token'],
                    'PAYERID' => $_GET['PayerID'],
                    'PAYMENTACTION' => 'Sale',
                    'AMT' => $response['AMT'], // ne pas faire confiance a la session
                    'CURRENCYCODE' => 'EUR',
                ));
                
                 if($response){
                     
                     //On recherche l'ev.
                     $realisation = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('soleilecommerceBundle:Realisation')
                        ->find($idev);
 
                     $realisation->setVendu(1);
                     //On créé un inscrit
                     $client = new Client($realisation->getPrix());
                     $client->setRealisation($realisation);
                     
                     $em = $this->getDoctrine()->getManager();
                     $em->persist($client);
                     $em->flush();
                     
                     //On créé un num inscri unique
                     $numClient = date('m').$client->getId();
                     //a stocker.
                     $numTrans = $response['PAYMENTINFO_0_TRANSACTIONID'];
                     $amount = $response['AMT'];
                     $token = $response['TOKEN']; 
                     $statut = $response['PAYMENTINFO_0_PAYMENTSTATUS'];
                     $moyenpayement = 'PayPal';
                      //$dateN $tel $mail $genre $realisation $nom $ad $ville $etatProv $pays 
                      
                     //On complete l'inscri avec les donnée recue.
                     
                     //donneeperso.
                     $client->setDatenaissance( new \DateTime($dateN));
                     $client->setTel($tel);
                     $client->setMail($mail);
                     $client->setGenre($genre);
                     $client->setRealisation($realisation);
                     $client->setNom($nom);
                     $client->setAdresse($ad);
                     $client->setVille($ville);
                     $client->setCp($cp);
                     $client->setEtatprov($etatProv);
                     $client->setPays($pays);
                     
                     //Donnee config
                     $client->setNumInscrit($numClient);
                     $client->setNumTrans($numTrans);
                     $client->setDateIns(new \DateTime());
                     $client->setAmount($amount);
                     $client->setDlToken($token);
                     $client->setStatut($statut);
                     $client->setMoyenpayement($moyenpayement);
                     
                     //Sauvegarde des parametre.
                     $client->setPaypalComplete(json_encode($response));
                     
                     $em = $this->getDoctrine()->getManager();
                     $em->persist($client);
                     $em->flush();
                     
                     $em = $this->getDoctrine()->getManager();
                     $em->persist($realisation);
                     $em->flush();
                     
                    return $this->render('soleilecommerceBundle:Realisation:Paiement/paiementValide.html.twig',
                            array(
                                'inscri' => $client,
                            ));
                }
                else{
                    

                    $erreur = "<h4>Votre payement n'a pas été effectué<h4><p>Veuillez nous contacter pour vous inscrire</p>";
                    
                     return $this->render('soleilecommerceBundle:Realisation:Paiement/paiementErreur.html.twig',
                        array(
                            'erreur' => $erreur,
                        ));
                }
         
    }
    
    function request($methode,$params){
        
        //Récupération des paramètre dans parameter.yml
        $endpoint = $this->container->getParameter('paypal_api_url');
        $version = $this->container->getParameter('paypal_api_version');
        $user = $this->container->getParameter('paypal_user');
        $pass =  $this->container->getParameter('paypal_pass');
        $signature =  $this->container->getParameter('paypal_signature'); 
                
                $error = array();
                
                //fusion des parametre avec les parametre par defaut
                $params = array_merge($params,array(
                    'METHOD' => $methode,
                    'VERSION' => $version,
                    'USER' => $user,
                    'SIGNATURE' => $signature,
                    'PWD' => $pass,
                ));
                
                /************************************************************************************/
                //Pour paypal il faut passer les param sous forme de chaine de caract
                $param = http_build_query($params); 
                
                //On apel cette Url
                $curl = curl_init();
                //On definit des parametre pour cette url
                //Precise tt les param sous form de tb
                curl_setopt_array($curl, array(
                    CURLOPT_URL => $endpoint,//1.on precise quel url appeller
                    CURLOPT_POST => 1, //ensuite preciser les paramettre 1 => vx dire je vx enoyer req de type post
                    CURLOPT_POSTFIELDS => $param,//envoie des différent paramètre.
                    CURLOPT_RETURNTRANSFER => 1, //on ne vx pas afficher les différent resultata mais on vx le retourner.
                    CURLOPT_SSL_VERIFYPEER => false,//empècher l utilisation de ssl (si pas certifica ssl)
                    CURLOPT_SSL_VERIFYHOST => false, // ne px verif c deux info car pas de certif de sécurité
                    //CURLOPT__VERBOSE => 1, // mode verbose pour kil nous dise les erreur
                ));
                
                //Execusion de la requete
                $response = curl_exec($curl);             
                //reponse sous forme de tb pour que se soit lisible
                $responseArray = array();
                parse_str($response,$responseArray); //(mareponse, ds kel tb je vx la stocker)
                
                //verifier curl               
                if(curl_errno($curl)){
                    $error = curl_error($curl);
                    curl_close($curl);
                    //var_dump($responseArray);
                    //echo "<br/>erreur curl<br/>";
                    return false;
                }
                else{
                     if($responseArray['ACK'] == "Success"){
                        curl_close($curl);
                        //var_dump($responseArray);
                        return $responseArray;
                    }
                    else{
                        $error = $responseArray;
                        curl_close($curl);
                        //echo "<br/>erreur ACK<br/>";
                        
                        return false;
                    }                   
                }
    }
  

  public function cancelAction()
    {
        return $this->render('soleilecommerceBundle:Realisation:Paiement/paiementAnnule.html.twig');
    }
  
}