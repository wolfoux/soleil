<?php

/* soleilContactBundle:Contact:Admin/index.html.twig */
class __TwigTemplate_e0414f5f2965179295f217a98cce15d76e2b6739a91d775d3a6059a855a4f53f extends Twig_Template
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
              <li class=\"active\"><i class=\"fa fa-envelope-o\"></i> Contact</li>
            </ol>
          </div>
        
  </div><!-- /.row -->
    
    ";
        // line 18
        echo "    
    
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_contact_modifier_admin", array("slug" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "slug"))), "html", null, true);
        echo "\">Modifier</a> 
   ";
        // line 22
        echo "    
    <br/><br/>
    
    ";
        // line 26
        echo "    
    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "prenom"), "html", null, true);
        echo " <br/>
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nom"), "html", null, true);
        echo " <br/>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel"), "html", null, true);
        echo " <br/>
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "gsm"), "html", null, true);
        echo " <br/>
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mail"), "html", null, true);
        echo " <br/>
    ";
        // line 32
        echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "adresse");
        echo " <br/>
            


";
    }

    public function getTemplateName()
    {
        return "soleilContactBundle:Contact:Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  81 => 31,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  62 => 26,  57 => 22,  53 => 20,  49 => 18,  39 => 10,  31 => 4,  28 => 3,);
    }
}
