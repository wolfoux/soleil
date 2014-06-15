<?php

/* soleilAgendaBundle:Agenda:Admin/Inscription/supprimer.html.twig */
class __TwigTemplate_5b8e516e1dacf050fda6fb1a18b5db5d317be6aa7d133dc7e387d22404473587 extends Twig_Template
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
            <h1>Inscription - supprimer</h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("soleil_sous_site_accueil_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
              <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("soleil_agenda_inscription_admin");
        echo "\"><i class=\"fa fa-table\"></i> Inscription</a></li>
              <li class=\"active\"></i> Supprimer</li>
            </ol>
          </div>
        
  </div><!-- /.row -->

  <div class=\"row\">
      
    <div class=\"col-lg-12\">
        
        <h4>Numéro Inscription : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "numInscrit"), "html", null, true);
        echo " </h4>
        
         <p>
         Etes-vous certain de vouloir supprimer cette inscription ?
         </p>
         
         <p>
             <strong>ATTENTION lorsque vous supprimer une inscription celle-ci s'éface juste de la litse</strong><br/>
             Le nombre d'inscris a l'évènement reste inchanger.
         </p>

         <form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_agenda_inscription_supprimer_admin", array("slug" => $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "slug"))), "html", null, true);
        echo "\" method=\"post\">

         <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
         ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
         </form>
    </div>
      
  </div><!-- /.row -->


";
    }

    public function getTemplateName()
    {
        return "soleilAgendaBundle:Agenda:Admin/Inscription/supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 36,  71 => 33,  57 => 22,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
