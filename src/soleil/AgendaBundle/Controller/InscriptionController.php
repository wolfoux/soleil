<?php

namespace soleil\AgendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use soleil\AgendaBundle\Form\InscriType;
use soleil\AgendaBundle\Entity\Inscri;

use soleil\AgendaBundle\Entity\EvenementAgenda;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class InscriptionController extends Controller
{
    /**
    * @Route("/agenda/inscription/{slug_ev}")
    * @ParamConverter("ev", options={"mapping": {"slug_ev": "slug"}})
    */
    public function indexAction(EvenementAgenda $ev)
    {
        
        
        $inscri = new Inscri($ev->getPrix());
        
        $inscri->setEvenementAgenda($ev);
        
        $form = $this->createForm(new InscriType(), $inscri);
        
        $request = $this->get('request');                
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {      
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($inscri);
                $em->flush();
                
                return $this->redirect($this->generateUrl('soleil_inscription_paiement_confirmation',array(
                    'slug_ev' => $ev->getSlug(),
                    'slug_insc' => $inscri->getSlug(),
                )));
            }
        }
        return $this->render('soleilAgendaBundle:Agenda:inscription.html.twig',
        array(
            'form' => $form->createView(),
            'ev' =>$ev,
            
        ));

    }
    
    public function inscriptionAction(){
        
        $ev = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('soleilAgendaBundle:EvenementAgenda')
                    ->getEvenementParSiteAvecInscri();
        
        return $this->render('soleilAgendaBundle:Agenda:Admin/Inscription/index.html.twig', array(
            'ev' => $ev,
        ));
    }
    
    public function voiradminAction(Inscri $insc){
        
        $insc->setLu(1);
        
        $em = $this->getDoctrine()->getManager();
                $em->persist($insc);
                $em->flush();
                
        return $this->render('soleilAgendaBundle:Agenda:Admin/Inscription/voir.html.twig', array(
            'i' => $insc,
        ));
    }
    
    public function supprimerAction(Inscri $insc){
        
         // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'contact contre cette faille
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                // On supprime l'contact
                $em = $this->getDoctrine()->getManager();
                $em->remove($insc);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Inscription
                bien supprimé');
                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('soleil_agenda_inscription_admin'));
            }
        }
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('soleilAgendaBundle:Agenda:Admin/Inscription/supprimer.html.twig',
        array(
            'i' => $insc,
            'form' => $form->createView()
        ));

    }
}
