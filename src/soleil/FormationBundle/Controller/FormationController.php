<?php

namespace soleil\FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use soleil\FormationBundle\Entity\Formation;
use soleil\FormationBundle\Form\FormationType;

class FormationController extends Controller
{
    public function indexAction()
    {
        $site = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getSiteParHost();
        
        $formations = $site->getFormations();
        
        return $this->render('soleilFormationBundle:Formation:index.html.twig',
        array(
            'formations' => $formations,
            
        ));
    }
    
    public function formationAction()
    {
        $site = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getSiteParHost();
        
        $formations = $site->getFormations();
        
        return $this->render('soleilFormationBundle:Formation:Admin/index.html.twig',
        array(
            'formations' => $formations,
        ));
    }
    
    public function voirAction(Formation $formation){
        
        $voirformartion = $this->getDoctrine()
        ->getManager()
        ->getRepository('soleilFormationBundle:Formation')
        ->find($formation->getId());
        
        return $this->render('soleilFormationBundle:Formation:Admin/voir.html.twig', array(
            'formation' => $voirformartion,
        ));
    }
    
    public function ajouterAction(){
        
        $formation = new Formation;
        $form = $this->createForm(new FormationType, $formation);
        
        $site = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getSiteParHost();
        
        $formation->setSite($site);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($formation);
                $em->flush();
                return $this->redirect($this->generateUrl('soleil_formation_accueil_admin'));
            }
        }
        return $this->render('soleilFormationBundle:Formation:Admin/ajouter.html.twig',
        array(
            'form' => $form->createView(),
        ));
       
    }
    
    public function modifierAction(Formation $formation){
        
        // On utiliser le ContactEditType
        $form = $this->createForm(new FormationType, $formation);
        
        $formation->setDateEdition(new \Datetime());
        // On récupère la requête
        $request = $this->get('request');
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $formation contient les valeurs entrées dans le formulaire par le visiteur
            $form->bind($request);
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
                // On l'enregistre notre objet $formation dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($formation);
                $em->flush();
                echo "s : ".$formation->getSlug();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Formation bien modifié');
                
                // On redirige vers la page de visualisation de l'contact nouvellement créé
                
                return $this->redirect($this->generateUrl('soleil_formation_voir_admin',
                array('slug' => $formation->getSlug())));
            }
        }
        
        return $this->render('soleilFormationBundle:Formation:Admin/modifier.html.twig',array(
        'form' => $form->createView(),
        'formation' => $formation
        ));
                
    }
    
    // Suppression des catégories d'un contact :
    public function supprimerAction(Formation $formation){
       // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'contact contre cette faille
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                // On supprime l'contact
                $em = $this->getDoctrine()->getManager();
                $em->remove($formation);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Formation
                bien supprimé');
                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('soleil_formation_accueil_admin'));
            }
        }
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('soleilFormationBundle:Formation:Admin/supprimer.html.twig',
        array(
            'formation' => $formation,
            'form' => $form->createView()
        ));
    }
}
