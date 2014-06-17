<?php

namespace soleil\AgendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class AgendaController extends Controller
{
    public function indexAction()
    {
        return $this->render('soleilAgendaBundle:Agenda:index.html.twig');
    }
    
    public function agendaAction()
    {
        return $this->render('soleilAgendaBundle:Agenda:Admin/index.html.twig');
    }
    
    public function agendaMiniAction() 
    {
        return $this->render('soleilAgendaBundle:Agenda:agendaMini.html.twig');
    }
    
    public function connectionAction()
    {
        $request = $this->container->get('request');
        
        if($request->isXmlHttpRequest())
        {

            if($this->get('security.context')->isGranted('ROLE_ADMIN')){               
                return new Response("-1");
            }
            else{
                return new Response("0");
            }

        }

    }
}
