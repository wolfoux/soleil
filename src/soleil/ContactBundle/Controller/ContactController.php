<?php

namespace soleil\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use soleil\ContactBundle\Entity\Contact;
use soleil\ContactBundle\Form\ContactType;

use soleil\ContactBundle\Entity\Mailcontact;
use soleil\ContactBundle\Form\Data\MailcontactType;

class ContactController extends Controller
{
    public function indexAction()
    {
        $contacts = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilContactBundle:Contact')
            ->find(2); 

        $mailContact = $contacts->getMail();
        
        $don = new Mailcontact;
        $form = $this->createForm(new MailcontactType, $don);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                
                // Récupération du service
                $mailer = $this->get('mailer');
              
                
                // Création de l'e-mail : le service mailer utilise
                //SwiftMailer, donc nous créons une instance de Swift_Message
                $message = \Swift_Message::newInstance()
                ->setSubject( $form["sujet"]->getData())
                ->setFrom($form["mail"]->getData())
                ->setTo($mailContact)
                ->setBody($form["message"]->getData());
                
                // Retour au service mailer, nous utilisons sa méthode « send()» pour envoyer notre $message
                $mailer->send($message);
                // N'oublions pas de retourner une réponse, par exemple une
                //page qui afficherait « L'e-mail a bien été envoyé »

                return $this->render('soleilContactBundle:Contact:confirmMail.html.twig');
            }
        }
        return $this->render('soleilContactBundle:Contact:index.html.twig', array(
            'contact' => $contacts,
            'form' => $form->createView(),
        ));
    }
    
    public function contactAction()
    {
        $contacts = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilContactBundle:Contact')
            ->find(2);
        
        return $this->render('soleilContactBundle:Contact:Admin/index.html.twig', array(
            'contact' => $contacts
        ));
        
    }
    
     public function voirAction(Contact $contact){
        
        $voircontact = $this->getDoctrine()
        ->getManager()
        ->getRepository('soleilContactBundle:Contact')
        ->find(2);
        
        return $this->render('soleilContactBundle:Contact:Admin/voir.html.twig', array(
            'contact' => $voircontact
        ));
   
    }

/*
    public function ajouterAction(){
        
        $contact = new Contact;
        $form = $this->createForm(new ContactType, $contact);
        
        $site = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getSiteParHost();
        
        $contact->setSite($site);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();
                return $this->redirect($this->generateUrl('soleil_contact_accueil_admin'));
            }
        }
        return $this->render('soleilContactBundle:Contact:Admin/ajouter.html.twig',
        array(
            'form' => $form->createView(),
        ));
       
    }
 */   
    public function modifierAction(Contact $contact){
        
        // On utiliser le ContactEditType
        $form = $this->createForm(new ContactType, $contact);
        
        // On récupère la requête
        $request = $this->get('request');
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $contact contient les valeurs entrées dans le formulaire par le visiteur
            $form->bind($request);
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
                // On l'enregistre notre objet $contact dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();
                
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Contact bien modifié');
                
                // On redirige vers la page de visualisation de l'contact nouvellement créé
                return $this->redirect($this->generateUrl('soleil_contact_accueil_admin'));
            }
        }
        
        return $this->render('soleilContactBundle:Contact:Admin/modifier.html.twig',array(
        'form' => $form->createView(),
        'contact' => $contact
        ));
                
    }

 /*   
    // Suppression des catégories d'un contact :
    public function supprimerAction(Contact $contact){
       // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'contact contre cette faille
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                // On supprime l'contact
                $em = $this->getDoctrine()->getManager();
                $em->remove($contact);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Contact
                bien supprimé');
                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('soleil_contact_accueil_admin'));
            }
        }
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('soleilContactBundle:Contact:Admin/supprimer.html.twig',
        array(
            'contact' => $contact,
            'form' => $form->createView()
        ));
    }
  */
    
}
