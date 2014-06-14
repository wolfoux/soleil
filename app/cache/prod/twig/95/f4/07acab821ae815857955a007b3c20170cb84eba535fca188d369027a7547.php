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
                echo " ";
                // line 11
                echo "                            
                            ";
                // line 18
                echo "                               <li class=\"grid_2 animationLi push_li Li";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo " ";
                if (($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url") == (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                    echo "actif";
                }
                echo "\">
\t\t\t\t\t<a href=\"";
                // line 19
                echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url"));
                echo "\" class=\"menu";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo " ";
                if (($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url") == (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                    echo "active";
                }
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
            // line 22
            echo " 

                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo " 
                            \t</ul>
\t\t</nav>
\t\t
                
                

\t<!--=================Pour que l'on puisse cliquer===================-->
<nav id=\"menuSecondaireBis\" class=\"container\"> 
\t\t\t<ul>
        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 35
            echo "       
                        ";
            // line 36
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
                // line 37
                echo "
                               
                               <li class=\"grid_2 animationLi push_li ";
                // line 39
                if (($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url") == (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                    echo "actif";
                }
                echo "\">
\t\t\t\t\t<a href=\"";
                // line 40
                echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url"));
                echo "\" class=\"menu";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo " ";
                if (($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url") == (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                    echo "active";
                }
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
            // line 42
            echo " 

                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        return array (  176 => 44,  168 => 42,  143 => 40,  137 => 39,  133 => 37,  116 => 36,  113 => 35,  109 => 34,  97 => 24,  89 => 22,  65 => 19,  56 => 18,  53 => 11,  35 => 10,  28 => 8,  19 => 1,  175 => 76,  172 => 75,  160 => 21,  156 => 20,  152 => 19,  146 => 17,  140 => 8,  128 => 80,  123 => 77,  121 => 75,  112 => 70,  110 => 69,  103 => 65,  82 => 47,  76 => 44,  70 => 41,  66 => 40,  59 => 36,  52 => 32,  48 => 31,  44 => 29,  42 => 17,  32 => 9,  30 => 8,  22 => 2,);
    }
}
