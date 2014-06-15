<?php

/* soleilArticleBundle:Article:Admin/ajouter.html.twig */
class __TwigTemplate_16490a42a8691f2a5ec0345f4b969c537ec8adae479ce21d260b0da53e2494fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::SousSite/Admin/baseAdmin.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::SousSite/Admin/baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row\">

              <div class=\"col-lg-12\">
                <h1>Agenda</h1>
                <ol class=\"breadcrumb\">
                  <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("soleil_sous_site_accueil_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
                  <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("soleil_article_accueil_admin");
        echo "\"><i class=\"fa fa-pencil\"></i></i> Article</a></li>
                  <li class=\"active\">AJouter un Article</li>
                </ol>
              </div>

      </div><!-- /.row -->
    
    ";
        // line 18
        $this->env->loadTemplate("soleilArticleBundle:Article:Admin/formulaire.html.twig")->display($context);
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "soleilArticleBundle:Article:Admin/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 19,  53 => 18,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
