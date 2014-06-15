<?php

/* soleilSiteBundle:SousSite:Admin/index.html.twig */
class __TwigTemplate_0ac433e7d9425ebcf8ca1ea5f34864cdace16ff352ba7b08087cfe6e96227974 extends Twig_Template
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
            <h1>Administration <small>  - ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "titreFr"), "html", null, true);
        echo "</small></h1>
            <ol class=\"breadcrumb\">
              <li class=\"active\"><i class=\"fa fa-dashboard\"></i> Administration</li>
            </ol>
            
            <div class=\"alert alert-success alert-dismissable\">  
              Welcome to SB Admin by <a class=\"alert-link\" href=\"http://startbootstrap.com\">Start Bootstrap</a>! Feel free to use this template for your admin needs! We are using a few different plugins to handle the dynamic tables and charts, so make sure you check out the necessary documentation links provided.
            </div>
            
          </div>
        
        </div><!-- /.row -->
        
        <div class=\"row\">
        
          <div class=\"col-lg-12\">
            
            <ol class=\"breadcrumb\">
              <li class=\"active\"><i class=\"fa fa-home\"></i> Accueil</li>
            </ol>
              
            
              
          </div>
        
        </div><!-- /.row -->
        
        <div class=\"row\">
            
          <div class=\"col-lg-4\">
            <div class=\"panel panel-info\">
                
              <div class=\"panel-heading\">
                <div class=\"row\">
                  <div class=\"col-xs-3\">
                    <i class=\"fa fa-align-justify fa-5x\"></i>
                  </div>
                  <div class=\"col-xs-9 text-left\">
                      <p class=\"announcement-heading\"><small>Formations</small></p>
                    
                  </div>
                </div>
              </div>
                
              <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("soleil_formation_accueil_admin");
        echo "\">
                <div class=\"panel-footer announcement-bottom\">
                    
                  <div class=\"row\">
                    <div class=\"col-xs-6\">
                      Voir les formations
                    </div>
                    <div class=\"col-xs-6 text-right\">
                      <i class=\"fa fa-arrow-circle-right\"></i>
                    </div>
                  </div>
                    
                </div>
              </a>
                
            </div>
          </div>
            
          <div class=\"col-lg-4\">
            <div class=\"panel panel-info\">
                
              <div class=\"panel-heading\">
                <div class=\"row\">
                  <div class=\"col-xs-3\">
                    <i class=\"fa fa-pencil fa-5x\"></i>
                  </div>
                  <div class=\"col-xs-9 text-left\">
                    <p class=\"announcement-heading\"><small>Articles</small></p>
                    
                  </div>
                </div>
              </div>
                
              <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("soleil_article_accueil_admin");
        echo "\">
                <div class=\"panel-footer announcement-bottom\">
                  <div class=\"row\">
                    <div class=\"col-xs-6\">
                      Voir les articles
                    </div>
                    <div class=\"col-xs-6 text-right\">
                      <i class=\"fa fa-arrow-circle-right\"></i>
                    </div>
                  </div>
                </div>
              </a>
                
            </div>
          </div>
            
        </div>

    
    

";
    }

    public function getTemplateName()
    {
        return "soleilSiteBundle:SousSite:Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 85,  84 => 52,  37 => 8,  31 => 4,  28 => 3,);
    }
}
