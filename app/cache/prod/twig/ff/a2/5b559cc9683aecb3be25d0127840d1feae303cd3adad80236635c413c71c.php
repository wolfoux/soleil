<?php

/* ::SousSite/base.html.twig */
class __TwigTemplate_ffa25b559cc9683aecb3be25d0127840d1feae303cd3adad80236635c413c71c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    
<head>
    
    <title>
        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    </title>
    
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    
        <!--POUR LE CALENDRIER -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "        
        <!--POUR METTRE LE NOM DES ROUTES DANS LE JAVASCRIPT -->
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        
        <!-- POUR PETITS ECRANS REALISATIONS -->
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/js/realisations.js"), "html", null, true);
        echo "\"></script>
        
        <!--960 GRID et RESPONSIVE-->
        <meta name=\"viewport\" content=\"width=device-width\">
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/css/grid.css"), "html", null, true);
        echo "\">
       
        <!--POUR LE MENU-->
\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/js/resize-menu.js"), "html", null, true);
        echo "\"></script>
        
\t<!-- POUR METTRE DU CODE SPECIFIQUE A CHAQUE NAVIGATEUR-->
\t<script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/js/code-navigateur.js"), "html", null, true);
        echo "\"></script>

</head>

<body>
    <section id=\"principale\" class=\"container_12\">
        
        <header>
            
            <section class=\"container\">
                
                <a href=\"http://www.soleil.com\" title=\"Retour à la page d'accueil de Avec le Soleil a.s.b.l\">
\t\t\t<h1>Avec le soleil</h1>
                        
\t\t</a>
                
                <p id='langues'><a href='#' class=\"presente\">FR</a> - <a href=\"#\">EN</a></p>
                
                ";
        // line 65
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("soleilSiteBundle:Site:menuChangerSite"));
        echo "
            
            </section>

                    ";
        // line 69
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 70
        echo "                   ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("soleilSiteBundle:Site:menuSousSite", array("route" => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))));
        echo "
   
        
        </header>
    
        ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "        
        <div class=\"clear\"></div>
        
        ";
        // line 80
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("soleilSiteBundle:Site:footer"));
        echo "
        
    </section> <!-- FIN SECTION PRINCIPALE -->

        
</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Avec le soleil";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
        <!--FEUILLE DE STYLE-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/style-safari.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/style-ie.css"), "html", null, true);
        echo "\" />
\t<!--POLICES-->
\t<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>\t
\t<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
    ";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        // line 76
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::SousSite/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 76,  172 => 75,  160 => 21,  156 => 20,  152 => 19,  146 => 17,  140 => 8,  128 => 80,  123 => 77,  121 => 75,  112 => 70,  110 => 69,  103 => 65,  82 => 47,  76 => 44,  70 => 41,  66 => 40,  59 => 36,  52 => 32,  44 => 29,  42 => 17,  32 => 9,  30 => 8,  22 => 2,  83 => 45,  63 => 28,  48 => 31,  38 => 9,  31 => 4,  28 => 3,);
    }
}
