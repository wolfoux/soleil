<?php

/* soleilFormationBundle:Formation:Admin/formulaire.html.twig */
class __TwigTemplate_3f2c55d3d41d42716b67f9400ab5c1f217aa19fa96d4467112ea200056516fc4 extends Twig_Template
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
        return "soleilFormationBundle:Formation:Admin/formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  26 => 4,  19 => 1,  55 => 19,  53 => 18,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
