<?php

/* soleilContactBundle:Contact:Admin/formulaire.html.twig */
class __TwigTemplate_1f26f1c1d88692b04c70bf209bbef1cc47446b898785994ba4ca88509bd1b27b extends Twig_Template
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

<div class=\"well\">
    <form method=\"post\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        
    <input type=\"submit\" class=\"btn btn-primary\" />
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "soleilContactBundle:Contact:Admin/formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  24 => 4,  19 => 1,  55 => 19,  53 => 18,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
