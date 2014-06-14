<?php

namespace soleil\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Session\Session;

use soleil\SiteBundle\Entity\Site;
use soleil\SiteBundle\Form\SiteType;


class AdminController extends Controller
{
    
    //Envoi sur la page d'accueil de l'administration.
    public function indexAction(){
        
        //echo "<br/>inde action : admin<br/>";
        
       $host = $_SERVER['HTTP_HOST'];
        $session = new Session();

        // définit et récupère des attributs de session
        $session->set('domaine', $host);
        $domaine = $session->get('domaine');
        
        $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('soleilSiteBundle:Site');

        $site = $repository->findOneBy(array('domaine' => $host));
        
        return $this->render('soleilSiteBundle:SousSite:Admin/index.html.twig',
        array(
            'site' => $site,
            //'rubrique' => $rubrique,
        ));
        
    }
    
    public function changeAdminAction(){
        
        echo "<br/>change action<br/>";
        $user = $this->container->get('security.context')->getToken()->getUser();
        //http://www.ceramique.com/admin 
        
        
        
        return $this->redirect($this->generateUrl('soleil_sous_site_accueil_admin'));
        
        //return $this->redirect($this->generateUrl('http://www.ceramique.com'));
    }
    
    //Menu de l'administration.
    public function menuSousSiteAction($route)
    {
        //$url = $this->get('request')->headers->get('referer'); 
        
        //$url = $this->get('request')->headers->get('_route');
        //$url = $this->getRefererRoute();
        //$url = $this->get('request')->attributes->get('_route');
        
        //echo "<br/>menu : ".$route." ---- ".$url."<br/>";
        
        $rubriques = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getmenuSousSiteAdmin();
        
        return $this->render('soleilSiteBundle:SousSite:Admin/menuSousSite.html.twig', array(
            'rubriques' => $rubriques,
            'route' => $route,
            
        ));                     

    }
    
    //Pour changer d'administration
    public function changeAction(){
        
        $site = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getSiteParHost();
        
         // On utiliser le ContactEditType
        $form = $this->createForm(new SiteType(),  $site);
        
        // On récupère la requête
        $request = $this->get('request');
        
        //echo "<br/>Je suis ds change : ".$request."<br/>";
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            //echo "<br/>Post Methode ok <br/>";
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable  $site contient les valeurs entrées dans le formulaire par le visiteur
            //$form->bind($request);
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
                // On l'enregistre notre objet  $site dans la base de données
                //$em = $this->getDoctrine()->getManager();
                //$em->persist( $site);
                //$em->flush();
                
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', "Vous avez changer d'administration");
                
                // On redirige vers la page de visualisation de l'contact nouvellement créé
                return $this->redirect($this->generateUrl('soleil_sous_site_accueil_admin'));
            }
        }
        
        return $this->render('soleilSiteBundle:SousSite:Admin/change.html.twig',array(
            'form' => $form->createView(),
            'site' =>  $site
        ));

    }
     

}
