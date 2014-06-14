<?php

/* soleilSiteBundle:SousSite:menuSousSite.html.twig */
class __TwigTemplate_95f407acab821ae815857955a007b3c20170cb84eba535fca188d369027a7547 extends Twig_Template
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
        echo "
<section id=\"etage1\">

\t\t<div></div>  
                
                <nav id=\"menuSecondaire\" class=\"container\"> 
                    <ul>
                ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 9
            echo "       
                        ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "rubriques"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["rub"]) {
                // line 11
                echo "
                               <li class=\"grid_2 animationLi push_li Li";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\">
\t\t\t\t\t<a href=\"";
                // line 13
                echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url"));
                echo "\" class=\"menu";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\"></a>
\t\t\t\t</li>

                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo " 

                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo " 
                            \t</ul>
\t\t</nav>
\t\t
                
                

\t<!--=================Pour que l'on puisse cliquer===================-->
<nav id=\"menuSecondaireBis\" class=\"container\"> 
\t\t\t<ul>
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 29
            echo "       
                        ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "rubriques"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["rub"]) {
                // line 31
                echo "
                               
                               <li class=\"grid_2 animationLi push_li\">
\t\t\t\t\t<a href=\"";
                // line 34
                echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url"));
                echo "\" class=\"menu";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "nomFr"), "html", null, true);
                echo "</a>
\t\t\t\t</li>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo " 

                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo " 
                        \t</ul>
\t\t</nav>       

\t\t
</section>

";
    }

    public function getTemplateName()
    {
        return "soleilSiteBundle:SousSite:menuSousSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 38,  149 => 36,  128 => 34,  123 => 31,  106 => 30,  103 => 29,  99 => 28,  79 => 16,  59 => 13,  55 => 12,  35 => 10,  72 => 19,  65 => 15,  61 => 14,  57 => 13,  52 => 11,  47 => 9,  44 => 8,  27 => 7,  19 => 1,  191 => 77,  188 => 76,  182 => 47,  176 => 44,  168 => 39,  162 => 36,  158 => 35,  155 => 34,  152 => 33,  140 => 24,  135 => 22,  131 => 21,  127 => 20,  121 => 18,  110 => 11,  104 => 8,  92 => 25,  87 => 18,  85 => 76,  77 => 71,  69 => 66,  50 => 49,  45 => 32,  43 => 18,  40 => 17,  34 => 9,  32 => 9,  24 => 2,  83 => 45,  63 => 28,  48 => 33,  38 => 11,  31 => 4,  28 => 8,);
    }
}
