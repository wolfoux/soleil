<?php

namespace soleil\AgendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use soleil\AgendaBundle\Entity\EvenementAgenda;
use soleil\AgendaBundle\Form\EvenementAgendaType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class EvenementAgendaController extends Controller
{
    
   /**
    * @Route("/agenda/{slug_ev}/evenement/voir")
    * @ParamConverter("ev", options={"mapping": {"slug_ev": "slug"}})
    */
    public function voirSiteAction(EvenementAgenda $ev){
        
        $evenement = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('soleilAgendaBundle:EvenementAgenda')
                        ->find($ev);
        
         return $this->render('soleilAgendaBundle:Agenda:voir.html.twig',
        array(
            'ev' => $evenement,
        ));
        
    }
    
    /**
    * @Route("/admin/agenda/{slug_ev}/evenement/voir")
    * @ParamConverter("ev", options={"mapping": {"slug_ev": "slug"}})
    */
    public function voirAction(EvenementAgenda $ev){
        
        $evenement = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('soleilAgendaBundle:EvenementAgenda')
                        ->find($ev);
        
         return $this->render('soleilAgendaBundle:Agenda:Admin/voir.html.twig',
        array(
            'ev' => $evenement,
        ));
        
    }
    
    public function afficherAction(){
        
        $request = $this->container->get('request');
        
        if($request->isXmlHttpRequest())
        {
            
            $liste = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('soleilAgendaBundle:EvenementAgenda')
                        ->getEvenementParSite();
             
            return new Response(json_encode($liste));
        }
    }
    
    public function ajouterAction()
    {
        
        $formation = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilFormationBundle:Formation')
            ->getFormationParSite(); 
        
        $row = 0;

        foreach ($formation as $value){
           $row = 1;
        }
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $site = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getSiteParHost(); 
        
        $evenement = new EvenementAgenda;
        
        $date = date("d-m-Y").' 00:00:00';
        
        $evenement->setDateDeb(new \Datetime($date));
        $evenement->setDateFin(new \Datetime($date));
        $evenement->setSite($site);
        
        $form = $this->createForm(new EvenementAgendaType(), $evenement);
        
        $request = $this->get('request');                
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                
                $dateDeb = $form["dateDeb"]->getData();
                $dateFin = $form["dateFin"]->getData();
                
                $dateDeb = $dateDeb->format("Y-m-d");
                $dateFin = $dateFin->format("Y-m-d");
                
                //Calcule de la duréé de l'évènement.
                
                $nbSecondes= 60*60*24;

                $debut_ts = strtotime($dateDeb);                
                $fin_ts = strtotime($dateFin);
                $diff = $fin_ts - $debut_ts;
                
                $nbJour = round($diff / $nbSecondes);
                $nbJour = $nbJour + 1;
                
                $evenement->setNbJour($nbJour);               
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($evenement);
                $em->flush();
                
                return $this->redirect($this->generateUrl('soleil_agenda_accueil_admin'));
            }
        }
        return $this->render('soleilAgendaBundle:Agenda:Admin/ajouter.html.twig',
        array(
            'form' => $form->createView(),
            'raw' =>$row,
        ));
        
    }
    
    /**
    * @Route("/admin/agenda/{slug_ev}/evenement/voir")
    * @ParamConverter("ev", options={"mapping": {"slug_ev": "slug"}})
    */
    public function modifierAction(EvenementAgenda $ev){
        
        // On utiliser le ContactEditType
        $form = $this->createForm(new EvenementAgendaType, $ev);
        
        // On récupère la requête
        $request = $this->get('request');
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $ev contient les valeurs entrées dans le formulaire par le visiteur
            $form->bind($request);
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
                // On l'enregistre notre objet $ev dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($ev);
                $em->flush();
                
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Evenement bien modifié');

                // On redirige vers la page de visualisation de l'contact nouvellement créé
                return $this->redirect($this->generateUrl('soleil_agenda_evenement_voir',
                array('slug_ev' => $ev->getSlug())));
            }
        }
        
        return $this->render('soleilAgendaBundle:Agenda:Admin/modifier.html.twig',array(
                'form' => $form->createView(),
                'ev' => $ev
                ));
                
    }
    
    /**
    * @Route("/admin/agenda/{slug_ev}/evenement/voir")
    * @ParamConverter("ev", options={"mapping": {"slug_ev": "slug"}})
    */
    public function supprimerAction(EvenementAgenda $ev){
       // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'contact contre cette faille
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                // On supprime l'contact
                $em = $this->getDoctrine()->getManager();
                $em->remove($ev);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Evenement
                bien supprimé');
                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('soleil_agenda_accueil_admin'));
            }
        }
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('soleilAgendaBundle:Agenda:Admin/supprimer.html.twig',
        array(
            'ev' => $ev,
            'form' => $form->createView()
        ));
    }
    
}
