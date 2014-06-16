<?php

/* soleilecommerceBundle:Realisation:achat.html.twig */
class __TwigTemplate_9fdacc69b20d7421671030be8b1ec130fe40ff57134a57fdb9dfd1e512747d2e extends Twig_Template
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

\t\t\t<section id=\"don\" class=\"grid_12 alpha omega\">

               <h2 class=\"alignement_h2_etage2\">Achat réalisation</h2>
               
               <form method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " id=\"formulaire-don-coordonnees\" class=\"grid_12 omega alpha\">
\t\t\t\t
\t            \t<fieldset id=\"don-coordonnees\">
\t\t\t\t\t\t<h3>Coordonnées</h3>
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                                ";
        // line 27
        echo "                                                          ";
        // line 43
        echo "\t\t\t\t\t";
        // line 110
        echo "                                                <input id=\"validation-coordonnees\" type=\"submit\" value=\"Je valide mes coordonnées\">
\t\t\t\t\t</fieldset>
\t\t\t\t</form>\t 
               
\t\t\t</section>
\t</section>
</section>
";
        // line 140
        echo "  
";
    }

    public function getTemplateName()
    {
        return "soleilecommerceBundle:Realisation:achat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 140,  56 => 110,  54 => 43,  52 => 27,  48 => 16,  41 => 12,  31 => 4,  28 => 3,);
    }
}
