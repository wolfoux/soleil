<?php

/* soleilSiteBundle:SousSite:Admin/menuSousSite.html.twig */
class __TwigTemplate_1f01c56c98e57a7d6d95a328a08272f3a7724b8297627fe6af5fa2f8a5f024e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"nav navbar-nav side-nav\" id=\"changeActive\">
              
    ";
        // line 14
        echo "                                     
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 16
            echo "       
                    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "rubriques"));
            foreach ($context['_seq'] as $context["_key"] => $context["rub"]) {
                echo "      
                         
                          ";
                // line 19
                if (($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "asouscat") == 0)) {
                    echo "           
                                ";
                    // line 20
                    if ((($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url") . "_admin") == (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                        // line 21
                        echo "                                    <li class=\"active\"> 
                                 ";
                    } else {
                        // line 23
                        echo "                                     <li> 
                                ";
                    }
                    // line 25
                    echo "
                               <a href=\"";
                    // line 26
                    echo $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url") . "_admin"));
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "icone"), "html", null, true);
                    echo "\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "nomFr"), "html", null, true);
                    echo " </a></li>
                                         
                          ";
                } else {
                    // line 29
                    echo "                                ";
                    $context["open"] = false;
                    // line 30
                    echo "                                         
                                ";
                    // line 31
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "sousrubriques"));
                    foreach ($context['_seq'] as $context["_key"] => $context["rubS"]) {
                        // line 32
                        echo "                                    ";
                        if (($this->getAttribute((isset($context["rubS"]) ? $context["rubS"] : $this->getContext($context, "rubS")), "url") == (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                            // line 33
                            echo "                                         ";
                            $context["open"] = true;
                            // line 34
                            echo "                                    ";
                        }
                        // line 35
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubS'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "                                
                                ";
                    // line 37
                    if (((isset($context["open"]) ? $context["open"] : $this->getContext($context, "open")) == true)) {
                        // line 38
                        echo "                                         <li class=\"dropdown open\">
                                ";
                    } else {
                        // line 40
                        echo "                                <li class=\"dropdown\"> ";
                        // line 41
                        echo "                                ";
                    }
                    // line 42
                    echo "                                        
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-caret-square-o-down\"></i> ";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "nomFr"), "html", null, true);
                    echo " <b class=\"caret\"></b></a>
                                    
                                        <ul class=\"dropdown-menu\">

                                            ";
                    // line 47
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "sousrubriques"));
                    foreach ($context['_seq'] as $context["_key"] => $context["rubS"]) {
                        echo " 
                                                
                                                ";
                        // line 49
                        if (($this->getAttribute((isset($context["rubS"]) ? $context["rubS"] : $this->getContext($context, "rubS")), "url") == (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                            // line 50
                            echo "                                                <li class=\"active\"> 
                                                ";
                        } else {
                            // line 52
                            echo "                                                    <li> 
                                               ";
                        }
                        // line 54
                        echo "                                                         
                                                <a href=\"";
                        // line 55
                        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["rubS"]) ? $context["rubS"] : $this->getContext($context, "rubS")), "url"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubS"]) ? $context["rubS"] : $this->getContext($context, "rubS")), "nomFr"), "html", null, true);
                        echo "</a></li>

                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubS'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                                                
                                        </ul>
                                 </li>
                         ";
                }
                // line 62
                echo "                         
                         
                                     
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                     
                           
</ul>
";
        // line 87
        echo "
";
    }

    public function getTemplateName()
    {
        return "soleilSiteBundle:SousSite:Admin/menuSousSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 87,  168 => 67,  153 => 62,  136 => 55,  133 => 54,  129 => 52,  123 => 49,  116 => 47,  109 => 43,  106 => 42,  103 => 41,  101 => 40,  97 => 38,  95 => 37,  92 => 36,  86 => 35,  80 => 33,  77 => 32,  67 => 29,  57 => 26,  54 => 25,  50 => 23,  46 => 21,  44 => 20,  40 => 19,  33 => 17,  26 => 15,  23 => 14,  19 => 1,  201 => 88,  197 => 87,  193 => 86,  185 => 81,  178 => 77,  174 => 76,  169 => 74,  165 => 72,  162 => 66,  158 => 63,  155 => 62,  147 => 58,  143 => 20,  137 => 17,  134 => 16,  131 => 15,  125 => 50,  117 => 6,  114 => 5,  107 => 91,  105 => 71,  99 => 67,  96 => 64,  94 => 62,  83 => 34,  79 => 53,  73 => 31,  70 => 30,  68 => 48,  43 => 25,  41 => 15,  35 => 12,  32 => 11,  30 => 16,  24 => 1,  120 => 85,  84 => 52,  37 => 8,  31 => 4,  28 => 3,);
    }
}
