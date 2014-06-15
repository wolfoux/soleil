<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'soleil_formation_accueil_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\FormationBundle\\Controller\\FormationController::formationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/formation',    ),  ),  4 =>   array (  ),),
        'soleil_formation_voir_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\FormationBundle\\Controller\\FormationController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/voir',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/formation',    ),  ),  4 =>   array (  ),),
        'soleil_formation_ajouter_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\FormationBundle\\Controller\\FormationController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/formation/ajouter',    ),  ),  4 =>   array (  ),),
        'soleil_formation_modifier_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\FormationBundle\\Controller\\FormationController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifier',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/formation',    ),  ),  4 =>   array (  ),),
        'soleil_formation_supprimer_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\FormationBundle\\Controller\\FormationController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/formation',    ),  ),  4 =>   array (  ),),
        'soleil_article_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),),
        'soleil_article_voir_plus' => array (  0 =>   array (    0 => 'voirplus',  ),  1 =>   array (    '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::voirplusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'voirplus',    ),    1 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),),
        'soleil_article_accueil_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::articleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article',    ),  ),  4 =>   array (  ),),
        'soleil_article_voir_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/voir',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/article',    ),  ),  4 =>   array (  ),),
        'soleil_article_ajouter_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/ajouter',    ),  ),  4 =>   array (  ),),
        'soleil_article_modifier_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifier',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/article',    ),  ),  4 =>   array (  ),),
        'soleil_article_supprimer_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\ArticleBundle\\Controller\\ArticleController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/article',    ),  ),  4 =>   array (  ),),
        'soleil_contact_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),),
        'soleil_contact_accueil_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/contact',    ),  ),  4 =>   array (  ),),
        'soleil_contact_voir_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/voir',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/contact',    ),  ),  4 =>   array (  ),),
        'soleil_contact_ajouter_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/contact/ajouter',    ),  ),  4 =>   array (  ),),
        'soleil_contact_modifier_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifier',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/contact',    ),  ),  4 =>   array (  ),),
        'soleil_contact_supprimer_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\ContactBundle\\Controller\\ContactController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/contact',    ),  ),  4 =>   array (  ),),
        'soleil_don_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\DonBundle\\Controller\\DonController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/don',    ),  ),  4 =>   array (  ),),
        'soleil_don_accueil_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\DonBundle\\Controller\\DonController::donAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/don',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\AgendaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agenda/',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_evenement_site' => array (  0 =>   array (    0 => 'slug_ev',  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::voirSiteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/voir',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug_ev',    ),    2 =>     array (      0 => 'text',      1 => '/agenda/agenda',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_connection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\AgendaController::connectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agenda/agenda/connection',    ),  ),  4 =>   array (  ),),
        'soleil_inscription_accueil' => array (  0 =>   array (    0 => 'slug_ev',  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\InscriptionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug_ev',    ),    1 =>     array (      0 => 'text',      1 => '/agenda/agenda/inscription',    ),  ),  4 =>   array (  ),),
        'soleil_inscription_paiement_details' => array (  0 =>   array (    0 => 'slug_ev',  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\PayementController::detailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug_ev',    ),    1 =>     array (      0 => 'text',      1 => '/agenda/agenda/inscription/paiement/details/transaction',    ),  ),  4 =>   array (  ),),
        'soleil_inscription_paiement_cancel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\PayementController::cancelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agenda/agenda/inscription/paiement/cancel',    ),  ),  4 =>   array (  ),),
        'soleil_inscription_paiement_return' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\PayementController::returnAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agenda/agenda/inscription/paiement/return',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_accueil_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\AgendaController::agendaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agenda/admin/agenda',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_evenement_liste_mois' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::afficherAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agenda/admin/agenda/liste/evenement',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_evenement_voir' => array (  0 =>   array (    0 => 'slug_ev',  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/voir',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug_ev',    ),    2 =>     array (      0 => 'text',      1 => '/agenda/admin/agenda',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_evenement_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agenda/admin/agenda/evenement/ajouter',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_evenement_modifier' => array (  0 =>   array (    0 => 'slug_ev',  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/modifier',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug_ev',    ),    2 =>     array (      0 => 'text',      1 => '/agenda/admin/agenda',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_evenement_supprimer' => array (  0 =>   array (    0 => 'slug_ev',  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\EvenementAgendaController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug_ev',    ),    2 =>     array (      0 => 'text',      1 => '/agenda/admin/agenda',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_inscription_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\InscriptionController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/agenda/admin/inscription',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_inscription_voir_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\InscriptionController::voiradminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/agenda/admin/inscription/voir',    ),  ),  4 =>   array (  ),),
        'soleil_agenda_inscription_supprimer_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\AgendaBundle\\Controller\\InscriptionController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/agenda/admin/inscription/supprimer',    ),  ),  4 =>   array (  ),),
        'soleil_realisation_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/realisation',    ),  ),  4 =>   array (  ),),
        'soleil_realisation_paiement_details' => array (  0 =>   array (    0 => 'slug_r',  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\PayementController::detailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug_r',    ),    1 =>     array (      0 => 'text',      1 => '/realisation/achat/paiement/details/transaction',    ),  ),  4 =>   array (  ),),
        'soleil_realisation_paiement_cancel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\PayementController::cancelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/realisation/achat/paiement/cancel',    ),  ),  4 =>   array (  ),),
        'soleil_realisation_paiement_return' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\PayementController::returnAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/realisation/achat/paiement/return',    ),  ),  4 =>   array (  ),),
        'soleil_realisation_accueil_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::realisationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/realisation',    ),  ),  4 =>   array (  ),),
        'soleil_realisation_voir_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/voir',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/realisation',    ),  ),  4 =>   array (  ),),
        'soleil_realisation_ajouter_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/realisation/ajouter',    ),  ),  4 =>   array (  ),),
        'soleil_realisation_modifier_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifier',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/realisation',    ),  ),  4 =>   array (  ),),
        'soleil_realisation_supprimer_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\RealisationController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/admin/realisation',    ),  ),  4 =>   array (  ),),
        'soleil_commande_accueil_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\CommandeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/commande',    ),  ),  4 =>   array (  ),),
        'soleil_commande_voir_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\CommandeController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/admin/commande/voir',    ),  ),  4 =>   array (  ),),
        'soleil_commande_supprimer_admin' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'soleil\\ecommerceBundle\\Controller\\CommandeController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/admin/commande/supprimer',    ),  ),  4 =>   array (  ),),
        'soleil_sous_site_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\SiteBundle\\Controller\\SiteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'soleil_sous_site_accueil_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\SiteBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'soleil_sous_site_change_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\SiteBundle\\Controller\\AdminController::changeAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'soleil_config_accueil_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\SiteBundle\\Controller\\ConfigurationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/donnee-personel',    ),  ),  4 =>   array (  ),),
        'soleil_config_modifier_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\SiteBundle\\Controller\\ConfigurationController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/donnee-personel/modifier',    ),  ),  4 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'soleil\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
