<?php

/* soleilAgendaBundle:Agenda:Admin/Inscription/voir.html.twig */
class __TwigTemplate_6f8015145331b09124d0bf43fff9a0b3a80415d9ec2d2b6e34505ec4d3352c2f extends Twig_Template
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
            <h1>Inscription - voir</h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("soleil_sous_site_accueil_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
              <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("soleil_agenda_inscription_admin");
        echo "\"><i class=\"fa fa-table\"></i> Inscription</a></li>
              <li class=\"active\"></i> Voir</li>
            </ol>
          </div>
        
  </div><!-- /.row -->

  <div class=\"row\">
      
          <div>
            
            <h3>Informations inscription</h3>
                      
            <div class=\"table-responsive\">
              <table class=\"table table-hover table-striped \">
                  
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Evenement</th>
                    <th>Prix</th>
                    <th>Date début</th>
                    <th>Date fin</th>
                    
                  </tr>
                </thead>
                
                <tbody>
                        <tr>
                            <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "dateIns"), "d-m-Y"), "html", null, true);
        echo "</td>
                            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "evenementAgenda"), "nomFr"), "html", null, true);
        echo "</td>
                            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "evenementAgenda"), "prix"), "html", null, true);
        echo " EUR</td>
                            <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "evenementAgenda"), "dateDeb"), "d-m-Y"), "html", null, true);
        echo "</td>
                            <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "evenementAgenda"), "dateFin"), "d-m-Y"), "html", null, true);
        echo "</td>
                        </tr> 
                </tbody>
                
              </table>
            </div>   
            
          </div>
      
        </div><!-- /.row -->
        
        <div class=\"row\">
      
          <div>
            
            <h3>Informations client</h3>
                      
            <div class=\"table-responsive\">
              <table class=\"table table-hover table-striped \">
                  
                <thead>
                  <tr>
                    <th>Numéro unique</th>
                    <th>Nom</th>
                    <th>Tel</th>
                    <th>Mail</th>
                    <th>Date de Naissance</th>
                    <th>Moyen de payement</th>
                    
                    ";
        // line 73
        if (($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "moyenpayement") == "PayPal")) {
            // line 74
            echo "                        <th>Numero de transaction</th>
                    ";
        }
        // line 76
        echo "                            
                  </tr>
                </thead>
                
                <tbody>
                        <tr>
                            <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "numInscrit"), "html", null, true);
        echo "</td>
                            <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "genre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "nom"), "html", null, true);
        echo "</td>
                            <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "tel"), "html", null, true);
        echo "</td>
                            <td>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "mail"), "html", null, true);
        echo " EUR</td>
                            <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "datenaissance"), "d-m-Y"), "html", null, true);
        echo "</td>
                            <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "moyenpayement"), "html", null, true);
        echo "</td>
                            
                            ";
        // line 89
        if (($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "moyenpayement") == "PayPal")) {
            // line 90
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "numTrans"), "html", null, true);
            echo "</td>
                            ";
        }
        // line 92
        echo "                            
                        </tr> 
                </tbody>
                
              </table>
            </div>   
            
          </div>
      
        </div><!-- /.row -->
      
        <div class=\"row\">
          <div>
              
            <h3>Addresses</h3>
            <address>
              <strong>";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "genre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "nom"), "html", null, true);
        echo "</strong><br>
              ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "adresse"), "html", null, true);
        echo "<br>
              ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "cp"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "ville"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "etatprov"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "pays"), "html", null, true);
        echo "<br/>

            </address>
           
          </div>
         </div><!-- /.row -->


";
    }

    public function getTemplateName()
    {
        return "soleilAgendaBundle:Agenda:Admin/Inscription/voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 110,  196 => 109,  190 => 108,  172 => 92,  166 => 90,  164 => 89,  159 => 87,  155 => 86,  151 => 85,  147 => 84,  141 => 83,  137 => 82,  129 => 76,  125 => 74,  123 => 73,  91 => 44,  87 => 43,  83 => 42,  79 => 41,  75 => 40,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
