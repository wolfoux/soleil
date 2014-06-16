<?php

/* soleilAgendaBundle:Agenda:index.html.twig */
class __TwigTemplate_a65585ca15703f95bc816494d1327a3854b4a57c72eb7f796896d8bc705a94ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::SousSite/base.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"> 
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Agenda";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 15
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("agenda/css/custom_1.css"), "html", null, true);
        echo "\" /> 
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "

    <section id=\"etage2\" class=\"alignement_etage2\">
\t<section id=\"contenu\" class=\"container\">
\t\t<section class=\"grid_12 alpha omega agendaInscriptionResponsive\">
\t\t\t\t<h2 class=\"alignement_h2_etage2\">Agenda et inscription</h2>

\t\t\t\t<p class=\"alignement_1erP_etage2\">Consulter l'agenda ci-dessous pour voir nos événements indiqués par une couleur orangée. Cliquez sur l'évènement qui vous intéresse pour en savoir plus et vous y inscrire.</p>
                                
\t\t\t\t\t<div>\t
\t\t\t\t\t\t<section class=\"main\">
\t\t\t\t\t\t\t<div class=\"custom-calendar-wrap\">
\t\t\t\t\t\t\t\t<div id=\"custom-inner\" class=\"custom-inner\">
\t\t\t\t\t\t\t\t\t<div class=\"custom-header clearfix\">
\t\t\t\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"custom-prev\" class=\"custom-prev\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"custom-next\" class=\"custom-next\"></span>
\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t<h2 id=\"custom-month\" class=\"custom-month\"></h2>
\t\t\t\t\t\t\t\t\t\t";
        // line 39
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"calendar\" class=\"fc-calendar-container\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div><!-- /container -->
                                        
\t\t</section>
\t</section>

</section> <!-- /content --> 
                
                ";
        // line 52
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("agenda/js/jquery.calendario.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 55
        echo "                
\t\t<script type=\"text/javascript\">\t
\t\t\t\$(function() {
\t\t\t
\t\t\t\t\$.ajax({
                                                        type: \"POST\",
                                                        url: \"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("soleil_agenda_evenement_liste_mois");
        echo "\",
                                                        dataType: 'json',
                                                        
                                                        /*cache: false,*/
                                                        success: function(data){

                                                            //alert(\"ok\");
                                                                var transEndEventNames = {
                                                                        'WebkitTransition' : 'webkitTransitionEnd',
                                                                        'MozTransition' : 'transitionend',
                                                                        'OTransition' : 'oTransitionEnd',
                                                                        'msTransition' : 'MSTransitionEnd',
                                                                        'transition' : 'transitionend'
                                                                },
                                                                transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
                                                                \$wrapper = \$( '.custom-header' ),
                                                                \$calendar = \$( '#calendar' ),
                                                                 cal = \$calendar.calendario( {
                                                                         onDayClick : function( \$el, \$contentEl, dateProperties ) {

                                                                                    if( \$contentEl.length > 0 ) {
                                                                                            showEvents( \$contentEl, dateProperties );
                                                                                    }

                                                                            },
                                                                         caldata : data,
                                                                         displayWeekAbbr : false,
                                                                         connect : false
                                                                 } ),
                                                                 \$month = \$( '#custom-month' ).html( cal.getMonthName() ),
                                                                 \$year = \$( '#custom-year' ).html( cal.getYear() );
                
                                                                \$( '#custom-next' ).on( 'click', function() {
                                                                        cal.gotoNextMonth( updateMonthYear );
                                                                } );
                                                                \$( '#custom-prev' ).on( 'click', function() {
                                                                        cal.gotoPreviousMonth( updateMonthYear );
                                                                } );
                                                                \$( '#custom-current' ).on( 'click', function() {
                                                                        cal.gotoNow( updateMonthYear );
                                                                } );

                                                                function updateMonthYear() {\t\t\t\t
                                                                        \$month.html( cal.getMonthName() );
                                                                        \$year.html( cal.getYear() );
                                                                }
                                                                
                                                                // just an example..
                                                                function showEvents( \$contentEl, dateProperties ) {

                                                                        hideEvents(); 

                                                                        var \$events = \$( '<div id=\"custom-content-reveal\" class=\"custom-content-reveal\"><h4>Evènement ' + dateProperties.day + ' ' + dateProperties.monthname + ', ' + dateProperties.year + '</h4></div>' ),
                                                        \$close = \$( '<span class=\"custom-content-close\"></span>' ).on( 'click', hideEvents );

                                                                        \$events.append( \$contentEl.html() , \$close ).insertAfter( \$wrapper );

                                                                        setTimeout( function() {
                                                                                \$events.css( 'top', '0%' );
                                                                        }, 25 );

                                                                }
                                                                function hideEvents() {

                                                                        var \$events = \$( '#custom-content-reveal' );
                                                                        if( \$events.length > 0 ) {

                                                                                \$events.css( 'top', '100%' );
                                                                                Modernizr.csstransitions ? \$events.on( transEndEventName, function() { \$( this ).remove(); } ) : \$events.remove();

                                                                        }

                                                                }
                                                                
                                                        }
                      
                                                        
                               });
\t\t\t
\t\t\t});
\t\t</script>

";
    }

    public function getTemplateName()
    {
        return "soleilAgendaBundle:Agenda:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 61,  112 => 55,  108 => 53,  103 => 52,  89 => 39,  68 => 19,  65 => 18,  58 => 15,  53 => 13,  50 => 12,  43 => 10,  34 => 5,  31 => 4,);
    }
}
