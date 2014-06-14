<?php
// src/soleil/SiteBundle/Controller/aveclesoleilController.php

namespace soleil\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use soleil\SiteBundle\Form\ConfigurationType;

class ConfigurationController extends Controller{
    
    public function indexAction(){
        
        $configuration = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('soleilSiteBundle:Configuration')
                        ->find(1);
        
        return $this->render('soleilSiteBundle:SousSite:Admin/Config/index.html.twig',array(
            'conf' => $configuration,
        ));
    }

    public function modifierAction(){
        
        $conf = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('soleilSiteBundle:Configuration')
                        ->find(1);
        
        // On utiliser le ContactEditType
        $form = $this->createForm(new ConfigurationType, $conf);
        
        // On récupère la requête
        $request = $this->get('request');
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $conf contient les valeurs entrées dans le formulaire par le visiteur
            $form->bind($request);
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
                // On l'enregistre notre objet $conf dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($conf);
                $em->flush();
                
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Configuration bien modifié');

                // On redirige vers la page de visualisation de l'contact nouvellement créé
                return $this->redirect($this->generateUrl('soleil_config_accueil_admin'));
            }
        }
        
        return $this->render('soleilSiteBundle:SousSite:Admin/Config/modifier.html.twig',array(
                'form' => $form->createView(),
                'conf' => $conf
                ));
                
    }
}