<?php

namespace soleil\DonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//use soleil\DonBundle\Entity\Don;
//use soleil\DonBundle\Form\Data\DonType;

class DonController extends Controller
{
    public function indexAction()
    {
        /*
        $don = new Don;
        $form = $this->createForm(new DonType, $don);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                return $this->redirect($this->generateUrl('soleil_don_coordonnees_admin'));
            }
        }
        */
        
        return $this->render('soleilDonBundle:Don:index.html.twig');
    }
    
    public function donAction() 
    {
        return $this->render('soleilDonBundle:Don:Admin/index.html.twig');
    } 

}
