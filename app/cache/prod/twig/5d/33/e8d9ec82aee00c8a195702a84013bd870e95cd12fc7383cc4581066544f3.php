<?php

/* soleilSiteBundle:SousSite:Home/index.html.twig */
class __TwigTemplate_5d33e8d9ec82aee00c8a195702a84013bd870e95cd12fc7383cc4581066544f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::SousSite/base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::SousSite/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<section id=\"etage2\" class=\"alignement_etage2\">
\t<section id=\"contenu\" class=\"container\">

\t\t<section id=\"contenuPrincipal\" class=\"grid_8 alpha\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("soleilFormationBundle:Formation:index"));
        echo "
\t\t</section> <!-- FIN CONTENU PRINCIPALE -->


\t\t<aside id=\"aside\" class=\"grid_3biss push_0 omega alpha\">
\t\t\t<article>
\t\t\t\t\t<h2>Agenda</h2>
                                        ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("soleilAgendaBundle:Agenda:agendaMini"));
        echo " 
\t\t\t</article>

\t\t\t<article>
\t\t\t\t\t<h2>Inscription</h2>
\t\t\t\t\t<p>Les inscriptions ont cours toute l'année.</p>
\t\t\t\t\t<p>Horaires à partir de janvier 2014: le lundi de 13 à 16h et le mercredi de 14 à 17h.</p>
\t\t\t\t\t<p>Tarifs: Abonnement de 10 cours : 140€</p>  
\t\t\t\t\t<p>Le paiement par séance est possible : 15€</p>

\t\t\t\t<div class=\"box\" style=\"border-radius:8px; box-shadow: inset 0 0 0 5px #045604; margin-top:20px;\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("soleil_agenda_accueil");
        echo "\" class=\"grid_3 inscription\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" height=\"100%\" style=\"border-radius:5px;\">
\t\t\t\t\t\t\t\t<line class=\"top\" x1=\"0\" y1=\"0\" x2=\"900\" y2=\"0\"/>
\t\t\t\t\t\t\t\t<line class=\"left\" x1=\"0\" y1=\"60\" x2=\"0\" y2=\"-920\"/>
\t\t\t\t\t\t\t\t<line class=\"bottom\" x1=\"220\" y1=\"60\" x2=\"-600\" y2=\"60\"/>
\t\t\t\t\t\t\t\t<line class=\"right\" x1=\"220\" y1=\"0\" x2=\"220\" y2=\"1380\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\tJe m'inscris
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</article>
\t\t</aside>
\t\t
\t\t<div class=\"clear\"></div>

\t\t<section id=\"articles_avec-videos\" class=\"container\">
\t\t\t";
        // line 45
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("soleilArticleBundle:Article:liste"));
        echo "  
\t\t</section> <!-- FIN VIDEO -->
                
\t</section> <!-- FIN CONTENU -->
</section> <!-- FIN BODY -->
";
    }

    public function getTemplateName()
    {
        return "soleilSiteBundle:SousSite:Home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 45,  63 => 28,  48 => 16,  38 => 9,  31 => 4,  28 => 3,);
    }
}
