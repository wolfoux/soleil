<?php

/* soleilAgendaBundle:Agenda:Admin/formulaire.html.twig */
class __TwigTemplate_66e7a69db0c24281ddce5b590ef559822ad965433064482caad943a437f8138d extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<div class=\"well\">
    <form method=\"post\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" />
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "soleilAgendaBundle:Agenda:Admin/formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 87,  168 => 67,  153 => 62,  136 => 55,  133 => 54,  129 => 52,  123 => 49,  116 => 47,  109 => 43,  106 => 42,  103 => 41,  101 => 40,  97 => 38,  95 => 37,  92 => 36,  86 => 35,  80 => 33,  77 => 32,  57 => 26,  54 => 25,  50 => 23,  46 => 21,  44 => 20,  40 => 19,  33 => 17,  26 => 4,  23 => 14,  19 => 1,  201 => 88,  197 => 87,  193 => 86,  185 => 81,  178 => 77,  174 => 76,  169 => 74,  165 => 72,  162 => 66,  158 => 63,  155 => 62,  147 => 58,  143 => 20,  137 => 17,  134 => 16,  131 => 15,  125 => 50,  117 => 6,  114 => 5,  107 => 91,  105 => 71,  99 => 67,  96 => 64,  94 => 62,  83 => 34,  79 => 53,  73 => 31,  70 => 30,  68 => 48,  41 => 15,  35 => 12,  32 => 11,  30 => 5,  24 => 1,  67 => 29,  61 => 22,  55 => 20,  53 => 19,  43 => 25,  39 => 11,  31 => 5,  28 => 4,);
    }
}
