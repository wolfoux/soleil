<?php

/* soleilSiteBundle:SousSite:footer.html.twig */
class __TwigTemplate_42c0a65fd6291e6218c26da8ba4fbb004b439a800c6b2697116fa4f5a97e983e extends Twig_Template
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
        echo "<section id=\"etage3\">
\t<footer id=\"pied\" class=\"container\">
\t\t<article id=\"faites-un-don\" class=\"grid_3bis alpha omega\">
\t\t\t<h2>Aidez-nous</h2>
\t\t\t<div id=\"boutonResponsive\">
\t\t\t\t<div class=\"box\" style=\"border-radius:8px;\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("soleil_don_accueil");
        echo "\"> 
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" height=\"100%\" style=\"border-radius:5px;\">
\t\t\t\t\t\t\t\t<line class=\"top\" x1=\"0\" y1=\"0\" x2=\"900\" y2=\"0\"/>
\t\t\t\t\t\t\t\t<line class=\"left\" x1=\"0\" y1=\"60\" x2=\"0\" y2=\"-920\"/>
\t\t\t\t\t\t\t\t<line class=\"bottom\" x1=\"220\" y1=\"60\" x2=\"-600\" y2=\"60\"/>
\t\t\t\t\t\t\t\t<line class=\"right\" x1=\"220\" y1=\"0\" x2=\"220\" y2=\"1380\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t
\t\t\t\t\t\tJe fais un don
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"boxResponsive\" style=\"border-radius:8px;\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("soleil_don_accueil");
        echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" height=\"100%\" style=\"border-radius:5px;\">
\t\t\t\t\t\t\t\t<line class=\"top\" x1=\"0\" y1=\"0\" x2=\"900\" y2=\"0\"/>
\t\t\t\t\t\t\t\t<line class=\"left\" x1=\"1\" y1=\"60\" x2=\"0\" y2=\"-920\"/>
\t\t\t\t\t\t\t\t<line class=\"bottom\" x1=\"376\" y1=\"60\" x2=\"-600\" y2=\"60\"/>
\t\t\t\t\t\t\t\t<line class=\"right\" x1=\"376\" y1=\"0\" x2=\"376\" y2=\"1380\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t
\t\t\t\t\t\tJe fais un don
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</article>

\t\t<article id=\"contactez-nous\" class=\"grid_3bis alpha omega push_1bis\">
\t\t\t<h2>Contactez-nous</h2>
\t\t\t<p>
\t\t\t\t<a href=\"mailto:";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mail"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mail"), "html", null, true);
        echo "</a><br/>
\t\t\t\t<a href=\"tel:";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel"), "html", null, true);
        echo "</a><br/>
\t\t\t\t<a href=\"tel:";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "gsm"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "gsm"), "html", null, true);
        echo "</a>
\t\t\t</p>
\t\t</article>

\t\t<article id=\"suivez-nous\" class=\"grid_3bis alpha omega push_3bis\">
\t\t\t<h2>Suivez-nous</h2>

\t\t\t<div>
\t\t\t\t<figure id=\"linkedin\">
\t\t\t\t\t<a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf")), "likedln"), "html", null, true);
        echo "\" target=\"_blank\"
\t\t\t\t\tonMouseOver=\"document.getElementById('logo-linkedin').src='";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/linkedin-hover.png"), "html", null, true);
        echo "';\"
\t\t\t\t\tonMouseOut=\"document.getElementById('logo-linkedin').src='";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/linkedin.png"), "html", null, true);
        echo "';\">
\t\t\t\t\t\t<img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/linkedin.png"), "html", null, true);
        echo "\" alt=\"linkedin\" title=\"linkedin\" id=\"logo-linkedin\" />
\t\t\t\t\t</a>
\t\t\t\t</figure> 

\t\t\t\t<figure class=\"prefix_1bis\">
\t\t\t\t\t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf")), "twitter"), "html", null, true);
        echo "\" target=\"_blank\" 
\t\t\t\t\tonMouseOver=\"document.getElementById('logo-twitter').src='";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/twitter-hover.png"), "html", null, true);
        echo "';\"
\t\t\t\t\tonMouseOut=\"document.getElementById('logo-twitter').src='";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/twitter.png"), "html", null, true);
        echo "';\">
\t\t\t\t\t\t<img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter\" title=\"twitter\" id=\"logo-twitter\" />
\t\t\t\t\t</a>
\t\t\t\t</figure>

\t\t\t\t<figure id=\"facebook\" class=\"prefix_1bis\">  
\t\t\t\t\t<a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf")), "facebook"), "html", null, true);
        echo "\" target=\"_blank\"
\t\t\t\t\tonMouseOver=\"document.getElementById('logo-facebook').src='";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/facebook-hover.png"), "html", null, true);
        echo "';\"
\t\t\t\t\tonMouseOut=\"document.getElementById('logo-facebook').src='";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/facebook.png"), "html", null, true);
        echo "';\">
\t\t\t\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\" title=\"facebook\" id=\"logo-facebook\" /> <!--image par defaut-->
\t\t\t\t\t</a> 
\t\t\t\t</figure>
\t\t\t</div>
\t\t</article>
\t\t
\t\t<div class=\"clear\"></div>
\t</footer>
</section>
\t\t
\t\t<p id=\"copyright\">Document fait en HTML5 et CSS3 - &copy; Design réalisé par <strong><a href=\"http://about.me/acyian.art\">Rey Emilie</a></strong> - Developpement réalisé par <strong><a href=\"#\">Vanessa Verschoren</a></strong> & <strong><a href=\"#\">Patricia Mestdag</a></strong> - 2014</p>

        ";
    }

    public function getTemplateName()
    {
        return "soleilSiteBundle:SousSite:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 71,  141 => 70,  137 => 69,  125 => 63,  117 => 61,  113 => 60,  105 => 55,  101 => 54,  97 => 53,  93 => 52,  73 => 42,  46 => 23,  235 => 46,  217 => 43,  214 => 42,  197 => 41,  194 => 40,  172 => 35,  164 => 34,  161 => 33,  153 => 28,  150 => 27,  133 => 68,  107 => 19,  90 => 18,  53 => 10,  42 => 4,  39 => 3,  67 => 41,  54 => 30,  22 => 2,  36 => 14,  33 => 10,  157 => 38,  149 => 36,  128 => 23,  123 => 31,  106 => 30,  103 => 29,  99 => 28,  79 => 43,  59 => 13,  55 => 12,  35 => 10,  72 => 19,  65 => 12,  61 => 11,  57 => 31,  52 => 11,  47 => 14,  44 => 5,  27 => 7,  19 => 1,  191 => 77,  188 => 76,  182 => 47,  176 => 36,  168 => 39,  162 => 36,  158 => 35,  155 => 29,  152 => 33,  140 => 24,  135 => 22,  131 => 21,  127 => 20,  121 => 62,  110 => 20,  104 => 8,  92 => 25,  87 => 17,  85 => 76,  77 => 71,  69 => 13,  50 => 9,  45 => 32,  43 => 20,  40 => 17,  34 => 9,  32 => 9,  24 => 4,  83 => 45,  63 => 28,  48 => 33,  38 => 11,  31 => 4,  28 => 8,);
    }
}
