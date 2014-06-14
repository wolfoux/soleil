<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_53b5dc0d33cb80985e2d5a75537fe67aa68ff406e3311f9ea7e1644f667a33b3 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  87 => 20,  55 => 13,  25 => 4,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  133 => 55,  123 => 47,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  62 => 23,  51 => 12,  49 => 19,  39 => 6,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  36 => 7,  54 => 21,  43 => 8,  40 => 8,  33 => 5,  92 => 21,  72 => 16,  65 => 15,  61 => 14,  57 => 14,  47 => 9,  27 => 4,  19 => 1,  173 => 74,  170 => 75,  158 => 67,  154 => 20,  150 => 19,  144 => 17,  138 => 57,  126 => 80,  121 => 46,  119 => 75,  111 => 70,  103 => 65,  82 => 47,  76 => 44,  70 => 41,  66 => 15,  59 => 36,  52 => 11,  44 => 10,  42 => 17,  32 => 12,  30 => 3,  22 => 2,  83 => 45,  63 => 28,  48 => 31,  38 => 9,  31 => 5,  28 => 3,);
    }
}
