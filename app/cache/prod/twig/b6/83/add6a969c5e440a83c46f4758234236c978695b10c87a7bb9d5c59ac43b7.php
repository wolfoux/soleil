<?php

/* soleilContactBundle:Contact:Admin/modifier.html.twig */
class __TwigTemplate_b683add6a969c5e440a83c46f4758234236c978695b10c87a7bb9d5c59ac43b7 extends Twig_Template
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
            <h1>Contact</h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("soleil_sous_site_accueil_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
              <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("soleil_contact_accueil_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Contact</a></li>
              <li class=\"active\"></i> Modifier un contact</li>
            </ol>
          </div>
        
  </div><!-- /.row -->
    
    ";
        // line 18
        $this->env->loadTemplate("soleilContactBundle:Contact:Admin/formulaire.html.twig")->display($context);
        // line 19
        echo "    
";
    }

    public function getTemplateName()
    {
        return "soleilContactBundle:Contact:Admin/modifier.html.twig";
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
