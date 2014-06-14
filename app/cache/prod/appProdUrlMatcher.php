<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // soleil_payement_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_payement_homepage')), array (  '_controller' => 'soleilPayementBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin/formation')) {
                // soleil_formation_accueil_admin
                if ($pathinfo === '/admin/formation') {
                    return array (  '_controller' => 'soleil\\FormationBundle\\Controller\\FormationController::formationAction',  '_route' => 'soleil_formation_accueil_admin',);
                }

                // soleil_formation_voir_admin
                if (preg_match('#^/admin/formation/(?P<slug>[^/]++)/voir$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_formation_voir_admin')), array (  '_controller' => 'soleil\\FormationBundle\\Controller\\FormationController::voirAction',));
                }

                // soleil_formation_ajouter_admin
                if ($pathinfo === '/admin/formation/ajouter') {
                    return array (  '_controller' => 'soleil\\FormationBundle\\Controller\\FormationController::ajouterAction',  '_route' => 'soleil_formation_ajouter_admin',);
                }

                // soleil_formation_modifier_admin
                if (preg_match('#^/admin/formation/(?P<slug>[^/]++)/modifier$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_formation_modifier_admin')), array (  '_controller' => 'soleil\\FormationBundle\\Controller\\FormationController::modifierAction',));
                }

                // soleil_formation_supprimer_admin
                if (preg_match('#^/admin/formation/(?P<slug>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_formation_supprimer_admin')), array (  '_controller' => 'soleil\\FormationBundle\\Controller\\FormationController::supprimerAction',));
                }

            }

            if (0 === strpos($pathinfo, '/article')) {
                // soleil_article_accueil
                if ($pathinfo === '/article') {
                    return array (  '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::listeAction',  '_route' => 'soleil_article_accueil',);
                }

                // soleil_article_voir_plus
                if (preg_match('#^/article/(?P<voirplus>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_article_voir_plus')), array (  '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::voirplusAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/article')) {
                // soleil_article_accueil_admin
                if ($pathinfo === '/admin/article') {
                    return array (  '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::articleAction',  '_route' => 'soleil_article_accueil_admin',);
                }

                // soleil_article_voir_admin
                if (preg_match('#^/admin/article/(?P<slug>[^/]++)/voir$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_article_voir_admin')), array (  '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::voirAction',));
                }

                // soleil_article_ajouter_admin
                if ($pathinfo === '/admin/article/ajouter') {
                    return array (  '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::ajouterAction',  '_route' => 'soleil_article_ajouter_admin',);
                }

                // soleil_article_modifier_admin
                if (preg_match('#^/admin/article/(?P<slug>[^/]++)/modifier$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_article_modifier_admin')), array (  '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::modifierAction',));
                }

                // soleil_article_supprimer_admin
                if (preg_match('#^/admin/article/(?P<slug>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_article_supprimer_admin')), array (  '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::supprimerAction',));
                }

            }

        }

        // soleil_contact_accueil
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::indexAction',  '_route' => 'soleil_contact_accueil',);
        }

        if (0 === strpos($pathinfo, '/admin/contact')) {
            // soleil_contact_accueil_admin
            if ($pathinfo === '/admin/contact') {
                return array (  '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::contactAction',  '_route' => 'soleil_contact_accueil_admin',);
            }

            // soleil_contact_voir_admin
            if (preg_match('#^/admin/contact/(?P<slug>[^/]++)/voir$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_contact_voir_admin')), array (  '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::voirAction',));
            }

            // soleil_contact_ajouter_admin
            if ($pathinfo === '/admin/contact/ajouter') {
                return array (  '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::ajouterAction',  '_route' => 'soleil_contact_ajouter_admin',);
            }

            // soleil_contact_modifier_admin
            if (preg_match('#^/admin/contact/(?P<slug>[^/]++)/modifier$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_contact_modifier_admin')), array (  '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::modifierAction',));
            }

            // soleil_contact_supprimer_admin
            if (preg_match('#^/admin/contact/(?P<slug>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_contact_supprimer_admin')), array (  '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::supprimerAction',));
            }

        }

        // soleil_don_accueil
        if ($pathinfo === '/don') {
            return array (  '_controller' => 'soleil\\DonBundle\\Controller\\DonController::indexAction',  '_route' => 'soleil_don_accueil',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // soleil_don_accueil_admin
            if ($pathinfo === '/admin/don') {
                return array (  '_controller' => 'soleil\\DonBundle\\Controller\\DonController::donAction',  '_route' => 'soleil_don_accueil_admin',);
            }

            if (0 === strpos($pathinfo, '/agenda')) {
                // soleil_agenda_accueil
                if (rtrim($pathinfo, '/') === '/agenda') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'soleil_agenda_accueil');
                    }

                    return array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\AgendaController::indexAction',  '_route' => 'soleil_agenda_accueil',);
                }

                if (0 === strpos($pathinfo, '/agenda/a')) {
                    if (0 === strpos($pathinfo, '/agenda/agenda')) {
                        // soleil_agenda_evenement_site
                        if (preg_match('#^/agenda/agenda/(?P<slug_ev>[^/]++)/evenement/voir$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_agenda_evenement_site')), array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::voirSiteAction',));
                        }

                        // soleil_agenda_connection
                        if ($pathinfo === '/agenda/agenda/connection') {
                            return array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\AgendaController::connectionAction',  '_route' => 'soleil_agenda_connection',);
                        }

                        if (0 === strpos($pathinfo, '/agenda/agenda/inscription')) {
                            // soleil_inscription_accueil
                            if (preg_match('#^/agenda/agenda/inscription/(?P<slug_ev>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_inscription_accueil')), array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\InscriptionController::indexAction',));
                            }

                            if (0 === strpos($pathinfo, '/agenda/agenda/inscription/paiement')) {
                                // soleil_inscription_paiement_details
                                if (0 === strpos($pathinfo, '/agenda/agenda/inscription/paiement/details/transaction') && preg_match('#^/agenda/agenda/inscription/paiement/details/transaction/(?P<slug_ev>[^/]++)$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_inscription_paiement_details')), array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\PayementController::detailsAction',));
                                }

                                // soleil_inscription_paiement_cancel
                                if ($pathinfo === '/agenda/agenda/inscription/paiement/cancel') {
                                    return array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\PayementController::cancelAction',  '_route' => 'soleil_inscription_paiement_cancel',);
                                }

                                // soleil_inscription_paiement_return
                                if ($pathinfo === '/agenda/agenda/inscription/paiement/return') {
                                    return array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\PayementController::returnAction',  '_route' => 'soleil_inscription_paiement_return',);
                                }

                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/agenda/admin')) {
                        if (0 === strpos($pathinfo, '/agenda/admin/agenda')) {
                            // soleil_agenda_accueil_admin
                            if ($pathinfo === '/agenda/admin/agenda') {
                                return array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\AgendaController::agendaAction',  '_route' => 'soleil_agenda_accueil_admin',);
                            }

                            // soleil_agenda_evenement_liste_mois
                            if ($pathinfo === '/agenda/admin/agenda/liste/evenement') {
                                return array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::afficherAction',  '_route' => 'soleil_agenda_evenement_liste_mois',);
                            }

                            // soleil_agenda_evenement_voir
                            if (preg_match('#^/agenda/admin/agenda/(?P<slug_ev>[^/]++)/evenement/voir$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_agenda_evenement_voir')), array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::voirAction',));
                            }

                            // soleil_agenda_evenement_ajouter
                            if ($pathinfo === '/agenda/admin/agenda/evenement/ajouter') {
                                return array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::ajouterAction',  '_route' => 'soleil_agenda_evenement_ajouter',);
                            }

                            // soleil_agenda_evenement_modifier
                            if (preg_match('#^/agenda/admin/agenda/(?P<slug_ev>[^/]++)/evenement/modifier$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_agenda_evenement_modifier')), array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::modifierAction',));
                            }

                            // soleil_agenda_evenement_supprimer
                            if (preg_match('#^/agenda/admin/agenda/(?P<slug_ev>[^/]++)/evenement/supprimer$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_agenda_evenement_supprimer')), array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::supprimerAction',));
                            }

                        }

                        if (0 === strpos($pathinfo, '/agenda/admin/inscription')) {
                            // soleil_agenda_inscription_admin
                            if ($pathinfo === '/agenda/admin/inscription') {
                                return array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\InscriptionController::inscriptionAction',  '_route' => 'soleil_agenda_inscription_admin',);
                            }

                            // soleil_agenda_inscription_voir_admin
                            if (0 === strpos($pathinfo, '/agenda/admin/inscription/voir') && preg_match('#^/agenda/admin/inscription/voir/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_agenda_inscription_voir_admin')), array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\InscriptionController::voiradminAction',));
                            }

                            // soleil_agenda_inscription_supprimer_admin
                            if (0 === strpos($pathinfo, '/agenda/admin/inscription/supprimer') && preg_match('#^/agenda/admin/inscription/supprimer/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_agenda_inscription_supprimer_admin')), array (  '_controller' => 'soleil\\AgendaBundle\\Controller\\InscriptionController::supprimerAction',));
                            }

                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/realisation')) {
            // soleil_realisation_accueil
            if ($pathinfo === '/realisation') {
                return array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::indexAction',  '_route' => 'soleil_realisation_accueil',);
            }

            if (0 === strpos($pathinfo, '/realisation/achat/paiement')) {
                // soleil_realisation_paiement_details
                if (0 === strpos($pathinfo, '/realisation/achat/paiement/details/transaction') && preg_match('#^/realisation/achat/paiement/details/transaction/(?P<slug_r>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_realisation_paiement_details')), array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\PayementController::detailsAction',));
                }

                // soleil_realisation_paiement_cancel
                if ($pathinfo === '/realisation/achat/paiement/cancel') {
                    return array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\PayementController::cancelAction',  '_route' => 'soleil_realisation_paiement_cancel',);
                }

                // soleil_realisation_paiement_return
                if ($pathinfo === '/realisation/achat/paiement/return') {
                    return array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\PayementController::returnAction',  '_route' => 'soleil_realisation_paiement_return',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/realisation')) {
                // soleil_realisation_accueil_admin
                if ($pathinfo === '/admin/realisation') {
                    return array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::realisationAction',  '_route' => 'soleil_realisation_accueil_admin',);
                }

                // soleil_realisation_voir_admin
                if (preg_match('#^/admin/realisation/(?P<slug>[^/]++)/voir$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_realisation_voir_admin')), array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::voirAction',));
                }

                // soleil_realisation_ajouter_admin
                if ($pathinfo === '/admin/realisation/ajouter') {
                    return array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::ajouterAction',  '_route' => 'soleil_realisation_ajouter_admin',);
                }

                // soleil_realisation_modifier_admin
                if (preg_match('#^/admin/realisation/(?P<slug>[^/]++)/modifier$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_realisation_modifier_admin')), array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::modifierAction',));
                }

                // soleil_realisation_supprimer_admin
                if (preg_match('#^/admin/realisation/(?P<slug>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_realisation_supprimer_admin')), array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::supprimerAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/commande')) {
                // soleil_commande_accueil_admin
                if ($pathinfo === '/admin/commande') {
                    return array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\CommandeController::indexAction',  '_route' => 'soleil_commande_accueil_admin',);
                }

                // soleil_commande_voir_admin
                if (0 === strpos($pathinfo, '/admin/commande/voir') && preg_match('#^/admin/commande/voir/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_commande_voir_admin')), array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\CommandeController::voirAction',));
                }

                // soleil_commande_supprimer_admin
                if (0 === strpos($pathinfo, '/admin/commande/supprimer') && preg_match('#^/admin/commande/supprimer/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soleil_commande_supprimer_admin')), array (  '_controller' => 'soleil\\ecommerceBundle\\Controller\\CommandeController::supprimerAction',));
                }

            }

        }

        // soleil_sous_site_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'soleil_sous_site_accueil');
            }

            return array (  '_controller' => 'soleil\\SiteBundle\\Controller\\SiteController::indexAction',  '_route' => 'soleil_sous_site_accueil',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // soleil_sous_site_accueil_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'soleil\\SiteBundle\\Controller\\AdminController::indexAction',  '_route' => 'soleil_sous_site_accueil_admin',);
            }

            // soleil_sous_site_change_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'soleil\\SiteBundle\\Controller\\AdminController::changeAdminAction',  '_route' => 'soleil_sous_site_change_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/donnee-personel')) {
                // soleil_config_accueil_admin
                if ($pathinfo === '/admin/donnee-personel') {
                    return array (  '_controller' => 'soleil\\SiteBundle\\Controller\\ConfigurationController::indexAction',  '_route' => 'soleil_config_accueil_admin',);
                }

                // soleil_config_modifier_admin
                if ($pathinfo === '/admin/donnee-personel/modifier') {
                    return array (  '_controller' => 'soleil\\SiteBundle\\Controller\\ConfigurationController::modifierAction',  '_route' => 'soleil_config_modifier_admin',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'soleil\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'soleil\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'soleil\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
