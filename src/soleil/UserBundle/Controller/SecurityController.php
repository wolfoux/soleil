<?php

namespace soleil\UserBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseController;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;

use Symfony\Component\HttpFoundation\RedirectResponse;

class SecurityController extends BaseController
{
    public function loginAction(Request $request)
    {
        
        if($this->container->get('security.context')->isGranted('ROLE_ADMIN')){
            
            return new RedirectResponse($this->container->get('router')->generate('soleil_sous_site_accueil_admin'));

        }
        else{
            $response = parent::loginAction($request);
            return $response;
        }
        
    }
    
    /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array $data
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    
    protected function renderLogin(array $data)
    {
        //echo "surcharge login<br/>";
        
        $response = parent::renderLogin($data);
        return $response;

    }
    
}