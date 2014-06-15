<?php

/* soleilArticleBundle:Article:Admin/index.html.twig */
class __TwigTemplate_9ea4bcd2ea5fcf46493349bff93b1cbf06747426beb717dc98d3bff1d48f847d extends Twig_Template
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
            <h1>Article</h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("soleil_sous_site_accueil_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
              <li class=\"active\"><i class=\"fa fa-pencil\"></i> Article</li>
            </ol>
          </div>
        
  </div><!-- /.row --> 
  
  <div class=\"row\">
      <div class=\"col-lg-12\">
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("soleil_article_ajouter_admin");
        echo "\">Ajouter un article</a>
      </div>
  </div>
  
  <div class=\"row\">
      
        <div class=\"col-lg-6\">
            
            <h2>Listes des Articles</h2>
                      
            <div class=\"table-responsive\">
              <table class=\"table table-hover table-striped \">
                  
                <thead>
                  <tr>
                    <th>Articles</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>

                   ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 45
            echo "                  
                        <tr>
                            <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_article_voir_admin", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titreFr"), "html", null, true);
            echo "</a></td>
                            <td></td>
                            <td></td>
                            <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_article_modifier_admin", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
            echo "\">Modifier</a> - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_article_supprimer_admin", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
            echo "\">Supprimer</a></td>
                        </tr>
                        
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                  
                </tbody>
                
              </table>
            </div>   
            
          </div>
      
          <div class=\"col-lg-6\">

            <h2>Listes des Articles vidéo</h2>
                      
            <div class=\"table-responsive\">
              <table class=\"table table-hover table-striped \">
                  
                <thead>
                  <tr>
                    <th>Articles Vidéo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>

                   ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articlesVideo"]) ? $context["articlesVideo"] : $this->getContext($context, "articlesVideo")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 82
            echo "                  
                        <tr>
                            <td><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_article_voir_admin", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titreFr"), "html", null, true);
            echo "</a></td>
                            <td></td>
                            <td></td>
                            <td><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_article_modifier_admin", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
            echo "\">Modifier</a> - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_article_supprimer_admin", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
            echo "\">Supprimer</a></td>
                        </tr>
                        
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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
        return "soleilArticleBundle:Article:Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 91,  152 => 87,  144 => 84,  140 => 82,  136 => 81,  107 => 54,  95 => 50,  87 => 47,  83 => 45,  79 => 44,  51 => 19,  39 => 10,  31 => 4,  28 => 3,);
    }
}
