<?php

/* soleilAgendaBundle:Agenda:voir.html.twig */
class __TwigTemplate_510d467e907e98df7734379e2c47defeb9dcf1664eb9873ff56b7e624537480d extends Twig_Template
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
<section id=\"etage2\" class=\"alignement_etage2\">
\t<section id=\"contenu\" class=\"container\">

\t\t\t<section id=\"don\" class=\"grid_12 alpha omega\">

                                <h2 class=\"alignement_h2_etage2\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "nomFr"), "html", null, true);
        echo "</h2>

                                <p> 
                                    <strong>Nombre max de participants :</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "nbMax"), "html", null, true);
        echo "<br/>
                                </p>

                                <p>
                                    <strong>Formation :</strong> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "formation"), "titreFr"), "html", null, true);
        echo "<br/>
                                    <strong>Prix :</strong> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "prix"), "html", null, true);
        echo " EUR
                                </p>

                                <p>
                                    <strong>Date de début :</strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "dateDeb"), "d/m/Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "dateDeb"), "H:i:s"), "html", null, true);
        echo "<br/>
                                    <strong>Date de fin :</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "dateFin"), "d/m/Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "dateFin"), "H:i:s"), "html", null, true);
        echo "<br/>  
                                </p>


                                <h3> Description </h3>

                                ";
        // line 31
        echo $this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "descriptionFr");
        echo " 
                                
                                <p>
                                    
                                    ";
        // line 35
        if ((twig_date_format_filter($this->env, "now", "Ymd") >= twig_date_format_filter($this->env, $this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "dateDeb"), "Ymd"))) {
            // line 36
            echo "                                       <strong>Inscription :</strong> close
                                    ";
        } elseif (($this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "nbMax") == $this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "nbInsc"))) {
            // line 37
            echo "                  
                                       <strong>Inscription :</strong> complet
                                     ";
        } else {
            // line 40
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_inscription_paiement_details", array("slug_ev" => $this->getAttribute((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")), "slug"))), "html", null, true);
            echo "\">S'inscrire</a>
                                    ";
        }
        // line 42
        echo "
                                </p>

\t\t\t</section>
\t</section>
</section>   
</section>
";
    }

    public function getTemplateName()
    {
        return "soleilAgendaBundle:Agenda:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 42,  100 => 40,  95 => 37,  91 => 36,  89 => 35,  82 => 31,  71 => 25,  65 => 24,  58 => 20,  54 => 19,  47 => 15,  41 => 12,  31 => 4,  28 => 3,);
    }
}
