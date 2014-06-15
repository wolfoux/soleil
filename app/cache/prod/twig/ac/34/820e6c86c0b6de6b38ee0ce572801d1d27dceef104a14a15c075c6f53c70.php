<?php

/* soleilFormationBundle:Formation:Admin/index.html.twig */
class __TwigTemplate_ac34820e6c86c0b6de6b38ee0ce572801d1d27dceef104a14a15c075c6f53c70 extends Twig_Template
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
              <li class=\"active\"><i class=\"fa fa-align-justify\"></i> Formation</li>
            </ol>
          </div>
        
  </div><!-- /.row --> 
       
  <div class=\"row\">
        <div class=\"col-lg-6\">
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("soleil_formation_ajouter_admin");
        echo "\">Ajouter une formation</a>
            <h2>Listes des formations</h2>
                      
            <div class=\"table-responsive\">
              <table class=\"table table-hover table-striped \">
                  
                <thead>
                  <tr>
                    <th>Formations</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>

                   ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 38
            echo "                  
                        <tr>
                            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_formation_voir_admin", array("slug" => $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "titreFr"), "html", null, true);
            echo "</a></td>
                            <td></td>
                            <td></td>
                            <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_formation_modifier_admin", array("slug" => $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "slug"))), "html", null, true);
            echo "\">Modifier</a> - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_formation_supprimer_admin", array("slug" => $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "slug"))), "html", null, true);
            echo "\">supprimer</a></td>
                        </tr>
                        
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                  
                </tbody>
                
              </table>
            </div>
          </div>
        </div><!-- /.row -->

";
    }

    public function getTemplateName()
    {
        return "soleilFormationBundle:Formation:Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 47,  88 => 43,  80 => 40,  76 => 38,  72 => 37,  51 => 19,  39 => 10,  31 => 4,  28 => 3,);
    }
}
