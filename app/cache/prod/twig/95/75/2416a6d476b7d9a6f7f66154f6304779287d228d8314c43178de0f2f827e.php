<?php

/* soleilSiteBundle::menuchanger.html.twig */
class __TwigTemplate_95752416a6d476b7d9a6f7f66154f6304779287d228d8314c43178de0f2f827e extends Twig_Template
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

<nav id=\"menuPrincipal\">
    
    <ul>
        
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 8
            echo "       
        <li id=\"decalage-haut";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), "html", null, true);
            echo "\" class=\"grid_2\">
\t\t<div class=\"shape\">
                    <p class=\"overlay\" id=\"forme";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\"></p>
                    <div class=\"details\">
\t\t\t<span class=\"heading\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "titreFr"), "html", null, true);
            echo "</span><hr />
\t\t\t<p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "descFr"), "html", null, true);
            echo "</p>\t\t
\t\t\t<a href=\"http://";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "domaine"), "html", null, true);
            echo "\" class=\"button\">VOIR</a>
                    </div>
                    <div class=\"bg\"></div>
\t\t\t<figure>
                            <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("site/img/" . $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "image"))), "html", null, true);
            echo "\" alt=\"EFT avec le soleil asbl\" />
\t\t\t</figure> 
\t\t</div>\t\t
        </li>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "     
    </ul>
        
</nav>";
    }

    public function getTemplateName()
    {
        return "soleilSiteBundle::menuchanger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  72 => 19,  65 => 15,  61 => 14,  57 => 13,  47 => 9,  27 => 7,  19 => 1,  175 => 76,  172 => 75,  160 => 21,  156 => 20,  152 => 19,  146 => 17,  140 => 8,  128 => 80,  123 => 77,  121 => 75,  112 => 70,  110 => 69,  103 => 65,  82 => 47,  76 => 44,  70 => 41,  66 => 40,  59 => 36,  52 => 11,  44 => 8,  42 => 17,  32 => 9,  30 => 8,  22 => 2,  83 => 45,  63 => 28,  48 => 31,  38 => 9,  31 => 4,  28 => 3,);
    }
}
