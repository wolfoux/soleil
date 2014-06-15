<?php

/* ::SousSite/Admin/baseAdmin.html.twig */
class __TwigTemplate_334f9a97b91abe1d684cea21f1e09c410263ada90ca9946b65fc2cbfb50dfc21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javaScript' => array($this, 'block_javaScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 11
        echo "
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

 
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "  </head>

  <body>

    <div id=\"wrapper\">

      <!-- Sidebar -->
      <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
          
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"index.html\">PM Admin</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                
                ";
        // line 48
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 49
        echo "                
              ";
        // line 50
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("soleilSiteBundle:Admin:menuSousSite", array("route" => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))));
        echo "

              <ul class=\"nav navbar-nav navbar-right navbar-user\">
                <li><a href=\"#\"><i class=\"fa fa-user\"></i> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo " </a></li>
                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-power-off\"></i> Déconnection</a></li>
              </ul>

            </div><!-- /.navbar-collapse -->
        
      </nav> 

      <div id=\"page-wrapper\">
          ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "              
          ";
        // line 67
        echo "      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    ";
        // line 71
        $this->displayBlock('javaScript', $context, $blocks);
        // line 91
        echo "
  </body>
</html>
";
    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Soleil - Admin";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 

        <!-- Add custom CSS here --> 
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Page Specific CSS -->
        <link rel=\"stylesheet\" href=\"http://cdn.oesmith.co.uk/morris-0.4.3.min.css\">
    ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "          ";
    }

    // line 71
    public function block_javaScript($context, array $blocks = array())
    {
        // line 72
        echo "    
        
        <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

        <!-- JavaScript --> 

        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

        <!-- Page Specific Plugins -->
        <script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
        <script src=\"http://cdn.oesmith.co.uk/morris-0.4.3.min.js\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/morris/chart-data-morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/tablesorter/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/tablesorter/tables.js"), "html", null, true);
        echo "\"></script> 
        
    ";
    }

    public function getTemplateName()
    {
        return "::SousSite/Admin/baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 88,  197 => 87,  193 => 86,  185 => 81,  178 => 77,  174 => 76,  169 => 74,  165 => 72,  162 => 71,  158 => 63,  155 => 62,  147 => 21,  143 => 20,  137 => 17,  134 => 16,  131 => 15,  125 => 12,  117 => 6,  114 => 5,  107 => 91,  105 => 71,  99 => 67,  96 => 64,  94 => 62,  83 => 54,  79 => 53,  73 => 50,  70 => 49,  68 => 48,  41 => 15,  35 => 12,  32 => 11,  30 => 5,  24 => 1,  67 => 26,  61 => 22,  55 => 20,  53 => 19,  43 => 25,  39 => 11,  31 => 5,  28 => 4,);
    }
}
