<?php
// src/soleil/SiteBundle/Controller/aveclesoleilController.php

namespace soleil\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Session\Session;

class SiteController extends Controller{
    
    public function indexAction(){
        
        $host = $_SERVER['HTTP_HOST'];
        $session = new Session();

        // définit et récupère des attributs de session
        $session->set('domaine', $host);
        $domaine = $session->get('domaine');
        
        $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('soleilSiteBundle:Site');

        $site = $repository->findOneBy(array('domaine' => $domaine));
        
        if($domaine == "www.soleil.com"){
            return $this->render('soleilSiteBundle:Chapeaux:index.html.twig',
            array(
                'site' => $site,
            ));
        }
        else{
            return $this->render('soleilSiteBundle:SousSite:Home/index.html.twig',
            array(
                'site' => $site,
            ));
        }
        
    }

    public function menuChangerSiteAction()
    {
        $sites = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->menuChangerSiteAction();
  
        return $this->render('soleilSiteBundle::menuchanger.html.twig', array(
            'sites' => $sites
        )); 

    }
    
    public function menuSousSiteAction($route)
    {
        
        $rubriques = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getmenuSousSite();
        
        return $this->render('soleilSiteBundle:SousSite:menuSousSite.html.twig', array(
            'rubriques' => $rubriques,
            'route' => $route,
        ));                     

    }
    
    public function footerAction(){
        
        $contact = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilContactBundle:Contact')
            ->find(2);
        
        $conf = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Configuration')
            ->find(1);
        
        return $this->render('soleilSiteBundle:SousSite:footer.html.twig', array(
            'contact' => $contact,
            'conf' => $conf,
        ));   
    }

}