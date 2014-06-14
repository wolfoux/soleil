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
        return array (  36 => 11,  33 => 10,  157 => 38,  149 => 36,  128 => 34,  123 => 31,  106 => 30,  103 => 29,  99 => 28,  79 => 16,  59 => 13,  55 => 12,  35 => 10,  72 => 19,  65 => 15,  61 => 20,  57 => 18,  52 => 11,  47 => 14,  44 => 8,  27 => 7,  19 => 1,  191 => 77,  188 => 76,  182 => 47,  176 => 44,  168 => 39,  162 => 36,  158 => 35,  155 => 34,  152 => 33,  140 => 24,  135 => 22,  131 => 21,  127 => 20,  121 => 18,  110 => 11,  104 => 8,  92 => 25,  87 => 18,  85 => 76,  77 => 71,  69 => 66,  50 => 49,  45 => 32,  43 => 13,  40 => 17,  34 => 9,  32 => 9,  24 => 4,  83 => 45,  63 => 28,  48 => 33,  38 => 11,  31 => 4,  28 => 8,);
    }
}
