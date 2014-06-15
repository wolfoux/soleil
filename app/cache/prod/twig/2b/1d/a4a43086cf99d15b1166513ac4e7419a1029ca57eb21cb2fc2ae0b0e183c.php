<?php

/* soleilAgendaBundle:Agenda:Admin/ajouter.html.twig */
class __TwigTemplate_2b1da4a43086cf99d15b1166513ac4e7419a1029ca57eb21cb2fc2ae0b0e183c extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    
        <div class=\"row\">

              <div class=\"col-lg-12\">
                <h1>Agenda</h1>
                <ol class=\"breadcrumb\">
                  <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("soleil_sous_site_accueil_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
                  <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("soleil_agenda_accueil_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Agenda</a></li>
                  <li class=\"active\">AJouter un évènement</li>
                </ol>
              </div>

      </div><!-- /.row -->
  
    ";
        // line 19
        if (((isset($context["raw"]) ? $context["raw"] : $this->getContext($context, "raw")) == 1)) {
            // line 20
            echo "     ";
            $this->env->loadTemplate("soleilAgendaBundle:Agenda:Admin/formulaire.html.twig")->display($context);
            echo " 
    ";
        } else {
            // line 22
            echo "    <p>
        vous devez d abord ajouter une formation avant de pouvoir ajouter un evenement
    </p>
    ";
        }
        // line 26
        echo "
";
    }

    public function getTemplateName()
    {
        return "soleilAgendaBundle:Agenda:Admin/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  61 => 22,  55 => 20,  53 => 19,  43 => 12,  39 => 11,  31 => 5,  28 => 4,);
    }
}
