<?php

/* soleilAgendaBundle:Agenda:Admin/Inscription/index.html.twig */
class __TwigTemplate_43f932a2b7b05e006798e87e297a926f4037a15fda99e7f0ab97437a532f1c90 extends Twig_Template
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
            <h1>Inscription</h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("soleil_sous_site_accueil_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
              <li class=\"active\"><i class=\"fa fa-table\"></i> Insciption</li>
            </ol>
          </div>
        
  </div><!-- /.row -->

  <div class=\"row\">
      <div class=\"col-lg-12\">
        <a href=\"#\">Ajouter une inscription manuellement</a>
      </div>
  </div>
  
  
  <div class=\"row\">
      
        <div class=\"col-lg-12\">
            
            <h2>Listes des Inscription</h2>
            
            ";
        // line 30
        echo "   
            
            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ev"]) ? $context["ev"] : $this->getContext($context, "ev")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 33
            echo "            <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nomFR"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "dateDeb"), "d-m-Y"), "html", null, true);
            echo ")</h3>
            <div class=\"table-responsive\">
              <table class=\"table table-hover tablesorter \">
                  
                <thead>
                  <tr>
                    <th>Date inscription</th>
                    <th>Nom</th>
                    <th>Evènement</th>
                    <th>Numero unique</th>
                    <th></th>
                  </tr>
                </thead>
                
                <tbody>

                   ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "inscris"));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 50
                echo "                                                    
                            ";
                // line 51
                if (($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "lu") == 0)) {
                    // line 52
                    echo "                                <tr class=\"active\">
                              
                                    <td><strong>";
                    // line 54
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "dateIns"), "d-m-Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "dateIns"), "H:i:s"), "html", null, true);
                    echo "</strong></td> 
                                    <td><a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_agenda_inscription_voir_admin", array("slug" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "slug"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "genre"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nom"), "html", null, true);
                    echo "</a></td>
                                    <td>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "evenementAgenda"), "nomFr"), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "numInscrit"), "html", null, true);
                    echo "</td>
                                    <td><a href=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_agenda_inscription_supprimer_admin", array("slug" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "slug"))), "html", null, true);
                    echo "\">Supprimer</a></td>
                                </tr>

                            ";
                }
                // line 62
                echo "                        
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                        
                    ";
            // line 65
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "inscris"));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 66
                echo "                            
                        
                            ";
                // line 68
                if (($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "lu") == 1)) {
                    // line 69
                    echo "
                                <tr> 
                                    <td>";
                    // line 71
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "dateIns"), "d-m-Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "dateIns"), "H:i:s"), "html", null, true);
                    echo "</td> 
                                    <td><a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_agenda_inscription_voir_admin", array("slug" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "slug"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "genre"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nom"), "html", null, true);
                    echo "</a></td>
                                    <td>";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "evenementAgenda"), "nomFr"), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "numInscrit"), "html", null, true);
                    echo "</td>
                                    <td><a href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_agenda_inscription_supprimer_admin", array("slug" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "slug"))), "html", null, true);
                    echo "\">Supprimer</a></td>
                                </tr>
                            ";
                }
                // line 78
                echo "                        
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                  
                </tbody>
                
              </table>
            </div>   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            ";
        // line 87
        echo "            
          </div>
      
        </div><!-- /.row -->

 ";
    }

    public function getTemplateName()
    {
        return "soleilAgendaBundle:Agenda:Admin/Inscription/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 87,  204 => 86,  193 => 80,  186 => 78,  180 => 75,  176 => 74,  172 => 73,  164 => 72,  158 => 71,  154 => 69,  152 => 68,  148 => 66,  144 => 65,  141 => 64,  134 => 62,  127 => 58,  123 => 57,  119 => 56,  111 => 55,  105 => 54,  101 => 52,  99 => 51,  96 => 50,  92 => 49,  70 => 33,  66 => 32,  62 => 30,  39 => 10,  31 => 4,  28 => 3,);
    }
}
