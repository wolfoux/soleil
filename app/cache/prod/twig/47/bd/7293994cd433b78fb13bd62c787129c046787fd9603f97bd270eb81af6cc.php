<?php

/* soleilSiteBundle:Chapeaux:index.html.twig */
class __TwigTemplate_47bd7293994cd433b78fb13bd62c787129c046787fd9603f97bd270eb81af6cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"fr\">
<head>
\t<title>Avec le soleil - EFT - Céramique - Analphabétisation</title>
\t<meta charset=\"UTF-8\">
\t<!--<meta name=\"viewport\" content=\"width=device-width; intitial-scale=1.0\" />-->
\t<!--FEUILLE DE STYLE-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/chapeaux/style.css"), "html", null, true);
        echo "\" /> 
\t<!--POLICES-->
\t<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>\t
\t<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
\t<!--960 GRID et RESPONSIVE-->
\t<meta name=\"viewport\" content=\"width=device-width\">
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/chapeaux/css/grid.css"), "html", null, true);
        echo "\"> 

\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/chapeaux/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
</head>


<body>

<section id=\"principale\" class=\"container\">
\t
\t
\t<header class=\"container\">
\t\t<a id=\"lienChapeau\" href=\"#\" title=\"Page d'accueil de Avec le Soleil a.s.b.l\">
\t\t\t<h1>Avec le soleil - EFT - Céramique - Analphabétisation</h1>
\t\t</a>
\t</header>
\t
<div class=\"clear\"></div>

\t<section class=\"containerBis\">
\t\t<nav id=\"menuPrincipal\">
\t\t\t<ul>
\t\t\t\t<li id=\"li1\" class=\"grid_2 alpha omega\">
\t\t\t\t\t<div class=\"shape\">
\t\t\t\t\t\t<p class=\"overlay\" id=\"forme1\"></p>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<span class=\"heading\">EFT</span><hr />
\t\t\t\t\t\t\t<p>Entrez en harmonie</p>\t\t
\t\t\t\t\t\t\t<a href=\"http://www.eft.com\" class=\"button\">VOIR</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg\"></div>
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/chapeaux/img/eft_avec-le-soleil.jpg"), "html", null, true);
        echo "\" alt=\"EFT avec le soleil asbl\" />
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>\t\t
\t\t\t\t</li>

\t\t\t\t<li id=\"li2\" class=\"grid_2 alpha omega\">
\t\t\t\t\t<div class=\"shape\">
\t\t\t\t\t\t<p class=\"overlay\" id=\"forme2\"></p>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<span class=\"heading\">CERAMIQUE</span><hr />
\t\t\t\t\t\t\t<p>Augmentez votre créativité</p>\t\t
\t\t\t\t\t\t\t<a href=\"http://www.ceramique.com\" class=\"button\">VOIR</a>\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg\"></div>\t
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/chapeaux/img/ceramique_avec-le-soleil.jpg"), "html", null, true);
        echo "\" alt=\"ceramique avec le soleil asbl\" />
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>\t
\t\t\t\t</li>

\t\t\t\t<li id=\"li3\" class=\"grid_2 alpha omega\">
\t\t\t\t\t<div class=\"shape\">
\t\t\t\t\t\t<p class=\"overlay\" id=\"forme3\"></p>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<span class=\"heading\">ANALPHABETISATION</span><hr />
\t\t\t\t\t\t\t<p>Apprenez à lire et à écrire</p>\t\t
\t\t\t\t\t\t\t<a href=\"http://www.alpha.com\" class=\"button\">VOIR</a>\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bg\"></div>
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/chapeaux/img/analphabetisation_avec-le-soleil.jpg"), "html", null, true);
        echo "\" alt=\"analphabetisation avec le soleil asbl\" />
\t\t\t\t\t\t</figure>  
\t\t\t\t\t</div>\t
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</section>



\t\t
\t<footer id=\"pied\" class=\"container\">
\t\t<p>Document fait en HTML5 et CSS3 - &copy; Design réalisé par <strong><a href=\"http://about.me/acyian.art\">Rey Emilie</a></strong> - Developpement réalisé par <strong><a href=\"#\">Vanessa Verschoren</a></strong> & <strong><a href=\"#\">Patricia Mestdag</a></strong> - 2014</p>
\t</footer>

</section>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "soleilSiteBundle:Chapeaux:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 79,  96 => 64,  78 => 49,  45 => 19,  40 => 17,  28 => 8,  19 => 1,);
    }
}
