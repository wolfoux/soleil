<?php

namespace soleil\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use soleil\ArticleBundle\Entity\Article;
use soleil\ArticleBundle\Form\ArticleType;

use soleil\SiteBundle\Entity\Site;

class ArticleController extends Controller
{

    public function listeAction()
    {
        $articles = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilArticleBundle:Article')
            ->getTroisDernierArticle(0,3);
        
        $articlesVideo = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilArticleBundle:Article')
            ->getTroisDernierArticleVideo(0,3);
        
        return $this->render('soleilArticleBundle:Article:liste.html.twig', array(
            'articles' => $articles,
            'articlesVideo' => $articlesVideo
        ));
    }
    
    public function voirplusAction($voirplus){ 
        
        $site = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getSiteParHost();
        
        $article = $site->getArticles();
    
        return $this->render('soleilArticleBundle:Article:voirplus.html.twig', array(
            'voirplus' => $voirplus,
            'articles' => $article,
        ));
    }
   
    public function articleAction()
    {
        $articles = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilArticleBundle:Article')
            ->getArticleSansVideoParSite();
        
        $articlesVideo = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilArticleBundle:Article')
            ->getArticleVideoParSite(); 
        
        return $this->render('soleilArticleBundle:Article:Admin/index.html.twig', array(
            'articles' => $articles,
            'articlesVideo' => $articlesVideo
        ));
        
        //return $this->render('soleilArticleBundle:Article:Admin/index.html.twig');
    }
    
    public function voirAction(Article $article){
        
        $voirarticle = $this->getDoctrine()
        ->getManager()
        ->getRepository('soleilArticleBundle:Article')
        ->find($article->getId());
        
        return $this->render('soleilArticleBundle:Article:Admin/voir.html.twig', array(
            'article' => $voirarticle
        ));
   
}
    
    public function ajouterAction(){
        
        $article = new Article;
        
        $form = $this->createForm(new ArticleType, $article);
        
        $site = $this->getDoctrine()
            ->getManager()
            ->getRepository('soleilSiteBundle:Site')
            ->getSiteParHost();
        
        $article->setSite($site);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();
                return $this->redirect($this->generateUrl('soleil_article_accueil_admin'));
            }
        }
        return $this->render('soleilArticleBundle:Article:Admin/ajouter.html.twig',
        array(
            'form' => $form->createView(),
        ));
       
    }
    
    public function modifierAction(Article $article){
        
        // On utiliser le ArticleEditType
        $form = $this->createForm(new ArticleType, $article);
        
        // On récupère la requête
        $request = $this->get('request');
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
            $form->bind($request);
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
                // On l'enregistre notre objet $article dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();
                
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Article bien modifié');
                
                // On redirige vers la page de visualisation de l'article nouvellement créé
                return $this->redirect($this->generateUrl('soleil_article_voir_admin',
                array('slug' => $article->getSlug())));
            }
        }
        
        return $this->render('soleilArticleBundle:Article:Admin/modifier.html.twig',array(
        'form' => $form->createView(),
        'article' => $article
        ));
                
    }

    
    // Suppression des catégories d'un article :
    public function supprimerAction(Article $article){
       // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'article contre cette faille
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                // On supprime l'article
                $em = $this->getDoctrine()->getManager();
                $em->remove($article);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Article
                bien supprimé');
                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('soleil_article_accueil_admin'));
            }
        }
        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('soleilArticleBundle:Article:Admin/supprimer.html.twig',
        array(
            'article' => $article,
            'form' => $form->createView()
        ));
    }
}
