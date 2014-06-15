<?php

/* soleilArticleBundle:Article:Admin/formulaire.html.twig */
class __TwigTemplate_3b2d44e6de2896fee53da55fb1c5b0228753fb8b954ca8ffc6fc9cf6a2343cea extends Twig_Template
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
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<div class=\"well\">
<form method=\"post\" ";
        // line 5
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
        return "soleilArticleBundle:Article:Admin/formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  22 => 2,  19 => 1,  55 => 19,  53 => 18,  43 => 11,  39 => 10,  31 => 4,  28 => 5,);
    }
}
