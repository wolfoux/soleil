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
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
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
    
    ";
        // line 11
        $this->displayBlock('meta', $context, $blocks);
        // line 17
        echo "    
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "        
        ";
        // line 33
        $this->displayBlock('javascript', $context, $blocks);
        // line 49
        echo "
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
        // line 66
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("soleilSiteBundle:Site:menuChangerSite"));
        echo "
            
            </section>


                   ";
        // line 71
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("soleilSiteBundle:Site:menuSousSite"));
        echo "
   
        
        </header>
    
        ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "        
        <div class=\"clear\"></div>
        
        ";
        // line 81
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

    // line 11
    public function block_meta($context, array $blocks = array())
    {
        echo " 
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <!--960 GRID et RESPONSIVE et AGENDA -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
        <!--FEUILLE DE STYLE-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/style-safari.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/style-ie.css"), "html", null, true);
        echo "\" />
        <!--960 GRID et RESPONSIVE-->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/css/grid.css"), "html", null, true);
        echo "\">
\t<!--POLICES-->
\t<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>\t
\t<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
    ";
    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        // line 34
        echo "        <!--POUR METTRE LE NOM DES ROUTE DANS LE JAVASCRIPTE -->
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        
        <!--960 GRID et RESPONSIVE-->
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
        
        
        
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
    ";
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
        // line 77
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
        return array (  191 => 77,  188 => 76,  182 => 47,  176 => 44,  168 => 39,  162 => 36,  158 => 35,  155 => 34,  152 => 33,  140 => 24,  135 => 22,  131 => 21,  127 => 20,  121 => 18,  110 => 11,  104 => 8,  92 => 81,  87 => 78,  85 => 76,  77 => 71,  69 => 66,  50 => 49,  45 => 32,  43 => 18,  40 => 17,  34 => 9,  32 => 8,  24 => 2,  83 => 45,  63 => 28,  48 => 33,  38 => 11,  31 => 4,  28 => 3,);
    }
}
