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
        return array (  30 => 5,  26 => 4,  19 => 1,  72 => 28,  66 => 24,  60 => 22,  58 => 21,  48 => 14,  44 => 13,  34 => 6,  31 => 5,  28 => 4,);
    }
}
