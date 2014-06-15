<?php

/* soleilContactBundle:Contact:index.html.twig */
class __TwigTemplate_f5f215178d6565d475387e46b85793bb4060a00e00b33873f91aedefbaa3f254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::SousSite/base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::SousSite/base.html.twig";
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
<section id=\"etage2\" class=\"alignement_etage2\">
\t<section id=\"contenu\" class=\"container\">

\t\t\t<section id=\"contact\" class=\"grid_12 alpha omega\">

                <section id=\"formulaire\" class=\"grid_7 alpha\">
                    <h2 class=\"alignement_h2_etage2\">Contact</h2>
                                                
                            
";
        // line 38
        echo "                            <div class=\"well\">
                                <form method=\"post\" ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

                                   ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                                    <p>
                                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label');
        echo "<br/>
                                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'errors');
        echo "
                                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
                                    </p>
                                    
                                    <p>
                                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail"), 'label');
        echo "<br/>
                                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail"), 'errors');
        echo "
                                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail"), 'widget');
        echo "
                                    </p>
                                    
                                     <p>
                                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujet"), 'label');
        echo "<br/>
                                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujet"), 'errors');
        echo "
                                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujet"), 'widget');
        echo "
                                    </p>
                                    
                                    <p>
                                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'label');
        echo "<br/>
                                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'errors');
        echo "
                                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'widget');
        echo "
                                    </p>
                                    
                                     ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 
                                    
                                    <p><input class=\"grid_6\" type=\"submit\" value=\"Envoyer\" id=\"envoyer\" /></p>
                                </form>
                            </div>
\t            </section>


                <section id=\"itineraire\" class=\"grid_5\">
                    <h2>Avec le soleil</h2>
            \t\t<div id=\"plan\">
\t                    <div id=\"carte-interactive\"></div>
\t                    
\t                    <address><p><strong>Adresse: </strong><br/> 
\t                        ";
        // line 81
        echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "adresse");
        echo "</p>
\t                    </address>
\t                    <p><strong>Tel:</strong> <a href=\"tel:0495187608\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "gsm"), "html", null, true);
        echo "</a></p>
\t                    <p><strong>Email:</strong> <a href=\"mailto:paulette.debeur@aveclesoleil.be\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mail"), "html", null, true);
        echo "</a></p>
                    </div>
                </section>

\t\t\t</section>
\t</section>
</section>

<!-- Plan map pour acces -->
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\">
      function initialize() {
        var myLatLng = new google.maps.LatLng(50.631759, 5.627702);

        var mapOptions = {
          center: myLatLng,
          zoom: 11,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById(\"carte-interactive\"),
            mapOptions);

        var marker= new google.maps.Marker({
            position: myLatLng,
            title: 'Avec le soleil - asbl',
        });
        marker.setMap(map);

      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

";
    }

    public function getTemplateName()
    {
        return "soleilContactBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 84,  138 => 83,  133 => 81,  116 => 67,  110 => 64,  106 => 63,  102 => 62,  95 => 58,  91 => 57,  87 => 56,  80 => 52,  76 => 51,  72 => 50,  65 => 46,  61 => 45,  57 => 44,  51 => 41,  46 => 39,  43 => 38,  31 => 4,  28 => 3,);
    }
}
