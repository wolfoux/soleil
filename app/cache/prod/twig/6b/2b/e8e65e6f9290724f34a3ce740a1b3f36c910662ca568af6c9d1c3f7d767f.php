<?php

/* soleilFormationBundle:Formation:Admin/ajouter.html.twig */
class __TwigTemplate_6b2be8e65e6f9290724f34a3ce740a1b3f36c910662ca568af6c9d1c3f7d767f extends Twig_Template
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
            <h1>Formation</h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("soleil_sous_site_accueil_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
              <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("soleil_formation_accueil_admin");
        echo "\"><i class=\"fa fa-align-justify\"></i> Formation</a></li>
              <li class=\"active\">Ajouter une formation</li>
            </ol>
          </div>
        
  </div><!-- /.row --> 
    
    ";
        // line 18
        $this->env->loadTemplate("soleilFormationBundle:Formation:Admin/formulaire.html.twig")->display($context);
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "soleilFormationBundle:Formation:Admin/ajouter.html.twig";
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
