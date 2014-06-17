<?php

namespace soleil\ecommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use soleil\ecommerceBundle\Entity\Realisation;
use soleil\ecommerceBundle\Form\RealisationType;

class RealisationController extends Controller
{
    public function indexAction()
    {
        $realisations = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilecommerceBundle:Realisation')
            ->findall();
        
        //$realisations = $site->getRealisations();
        
        return $this->render('soleilecommerceBundle:Realisation:index.html.twig',
        array(
            'realisation' => $realisations,
        ));
    }
    
    public function realisationAction()
    {
        $site = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getSiteParHost();
        
        $realisations = $site->getRealisations();
        
        return $this->render('soleilecommerceBundle:Realisation:Admin/index.html.twig',
        array(
            'realisation' => $realisations,
        ));
    }
    
    public function voirAction(Realisation $realisation){
        
        $voirreal = $this->getDoctrine()
        ->getManager()
        ->getRepository('soleilecommerceBundle:Realisation')
        ->find($realisation->getId());
        
        return $this->render('soleilecommerceBundle:Realisation:Admin/voir.html.twig', array(
            'realisation' => $voirreal
        ));
   
    }
    
    public function ajouterAction(){
        
        $realisation = new Realisation;
        $form = $this->createForm(new RealisationType, $realisation);
        
        $site = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getSiteParHost();
        
        $realisation->setSite($site);
        $realisation->setVendu(0);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($realisation);
                $em->flush();
                return $this->redirect($this->generateUrl('soleil_realisation_accueil_admin'));
            }
        }
        return $this->render('soleilecommerceBundle:Realisation:Admin/ajouter.html.twig',
        array(
            'form' => $form->createView(),
        ));
       
    }
    
    public function modifierAction(Realisation $realisation){
        
        // On utiliser le ContactEditType
        $form = $this->createForm(new RealisationType, $realisation);
        
        // On récupère la requête
        $request = $this->get('request');
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $realisation contient les valeurs entrées dans le formulaire par le visiteur
            $form->bind($request);
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
                // On l'enregistre notre objet $realisation dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($realisation);
                $em->flush();
                
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Réalisation bien modifié');
                
                // On redirige vers la page de visualisation de l'contact nouvellement créé
                return $this->redirect($this->generateUrl('soleil_realisation_voir_admin',
                array('slug' => $realisation->getSlug())));
            }
        }
        
        return $this->render('soleilecommerceBundle:Realisation:Admin/modifier.html.twig',array(
        'form' => $form->createView(),
        'realisation' => $realisation
        ));
                
    }
    
    public function supprimerAction(Realisation $realisation){
       // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'contact contre cette faille
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                // On supprime l'contact
                $em = $this->getDoctrine()->getManager();
                $em->remove($realisation);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Réalisation
                bien supprimé');
                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('soleil_realisation_accueil_admin'));
            }
        }
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('soleilecommerceBundle:Realisation:Admin/supprimer.html.twig',
        array(
            'realisation' => $realisation,
            'form' => $form->createView()
        ));
    }
    
}
