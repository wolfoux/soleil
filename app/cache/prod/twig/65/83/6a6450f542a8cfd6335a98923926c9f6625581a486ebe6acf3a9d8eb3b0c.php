<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_65836a6450f542a8cfd6335a98923926c9f6625581a486ebe6acf3a9d8eb3b0c extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 5,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  133 => 55,  123 => 47,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  36 => 7,  54 => 21,  43 => 8,  40 => 8,  33 => 10,  92 => 21,  72 => 16,  65 => 15,  61 => 14,  57 => 16,  47 => 9,  27 => 4,  19 => 1,  173 => 74,  170 => 75,  158 => 67,  154 => 20,  150 => 19,  144 => 17,  138 => 57,  126 => 80,  121 => 46,  119 => 75,  111 => 70,  103 => 65,  82 => 47,  76 => 44,  70 => 41,  66 => 15,  59 => 36,  52 => 11,  44 => 10,  42 => 14,  32 => 12,  30 => 3,  22 => 2,  83 => 45,  63 => 28,  48 => 31,  38 => 13,  31 => 5,  28 => 3,);
    }
}
