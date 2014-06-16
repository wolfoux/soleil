<?php

/* soleilFormationBundle:Formation:index.html.twig */
class __TwigTemplate_f31ecd41cfabc24c992a9330de116a1ff696c93d792a4a14becad5b250595a59 extends Twig_Template
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
<article class='colo_info'>
    
    ";
        // line 4
        if (twig_test_empty((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")))) {
            echo "   
    
        <h2>Formations</h2>
        <p>Aucune formation disponible pour le moment</p>
        
    ";
        } else {
            // line 10
            echo "        
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                echo " 
               <article class='colo_info'>
                    <h2>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "titreFr"), "html", null, true);
                echo "</h2>
                    ";
                // line 14
                echo $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "textFr");
                echo " 
               </article>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "           
    ";
        }
        // line 20
        echo "   
</article>";
    }

    public function getTemplateName()
    {
        return "soleilFormationBundle:Formation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  36 => 11,  33 => 10,  24 => 4,  176 => 44,  168 => 42,  143 => 40,  137 => 39,  133 => 37,  116 => 36,  113 => 35,  109 => 34,  97 => 24,  89 => 22,  56 => 18,  53 => 11,  35 => 10,  92 => 25,  72 => 19,  65 => 19,  61 => 20,  57 => 18,  47 => 14,  27 => 7,  19 => 1,  175 => 76,  172 => 75,  160 => 21,  156 => 20,  152 => 19,  146 => 17,  140 => 8,  128 => 80,  123 => 77,  121 => 75,  112 => 70,  110 => 69,  103 => 65,  82 => 47,  76 => 44,  70 => 41,  66 => 40,  59 => 36,  52 => 11,  44 => 8,  42 => 17,  32 => 9,  30 => 8,  22 => 2,  83 => 45,  63 => 28,  48 => 31,  38 => 9,  31 => 4,  28 => 8,);
    }
}
