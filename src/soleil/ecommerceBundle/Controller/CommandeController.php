<?php

namespace soleil\ecommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use soleil\ecommerceBundle\Entity\Client;

class CommandeController extends Controller
{
    public function indexAction()
    {
        
        $commande = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('soleilecommerceBundle:Client')
                    ->getCommande();
        
        return $this->render('soleilecommerceBundle:Realisation:Admin/Commande/index.html.twig',array(
            'commande' => $commande,
        ));
    }
    
    public function voirAction(Client $cli){
        
        $cli->setLu(1);
        
        $em = $this->getDoctrine()->getManager();
                $em->persist($cli);
                $em->flush();
                
         return $this->render('soleilecommerceBundle:Realisation:Admin/Commande/voir.html.twig',array(
            'cli' => $cli,
        ));
    }

    public function supprimerAction(Client $cli){
        
        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'contact contre cette faille
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                // On supprime l'contact
                $em = $this->getDoctrine()->getManager();
                $em->remove($cli);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Commande
                bien supprimé');
                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('soleil_commande_accueil_admin'));
            }
        }
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('soleilecommerceBundle:Realisation:Admin/Commande/supprimer.html.twig',
        array(
            'c' => $cli,
            'form' => $form->createView()
        ));

    }
    
}
