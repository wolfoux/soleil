<?php

/* soleilAgendaBundle:Agenda:agendaMini.html.twig */
class __TwigTemplate_92780bc4a9f0e753b5e816522243659e37b9d4f216fdf67738c197bb3be0774b extends Twig_Template
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
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("agenda/css/custom_2.css"), "html", null, true);
        echo "\" /> 


                <div id=\"container\">\t

\t\t\t<section class=\"main\">
\t\t\t\t<div class=\"custom-calendar-wrap\">
\t\t\t\t\t<div id=\"custom-inner\" class=\"custom-inner\">
\t\t\t\t\t\t<div class=\"custom-header clearfix\">
\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t<span id=\"custom-prev\" class=\"custom-prev\"></span>
                                                                ";
        // line 14
        echo "\t\t\t\t\t\t\t\t<span id=\"custom-next\" class=\"custom-next\"></span>
\t\t\t\t\t\t\t</nav>
                                                        
\t\t\t\t\t\t\t<h2>
                                                            <span id=\"custom-month\" class=\"custom-month\"></span>
                                                            ";
        // line 20
        echo "\t\t\t\t\t\t\t</h2>
                                                        
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"calendar\" class=\"fc-calendar-container\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div><!-- /container -->
               
                ";
        // line 30
        echo "\t\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("agenda/js/jquery.calendario.js"), "html", null, true);
        echo "\"></script>
                
\t\t<script type=\"text/javascript\">\t
\t\t\t\$(function() {
                            
                                \$.ajax({
                                    type: \"POST\",
                                    url: \"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("soleil_agenda_evenement_liste_mois");
        echo "\",
                                    dataType: 'json',
                                                        
                                    /*cache: false,*/
                                    success: function(data){
                                        //alert(\"ok\");
                                        
                                        //var codropsEvents = {'05-25-2014' : \"<span>ev</span>\"};
                                
                                        var transEndEventNames = {
                                                        'WebkitTransition' : 'webkitTransitionEnd',
                                                        'MozTransition' : 'transitionend',
                                                        'OTransition' : 'oTransitionEnd',
                                                        'msTransition' : 'MSTransitionEnd',
                                                        'transition' : 'transitionend'
                                                },
                                                transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
                                                \$wrapper = \$( '#custom-inner' ),
                                                \$calendar = \$( '#calendar' ),
                                                cal = \$calendar.calendario( {
                                                        onDayClick : function( \$el, \$contentEl, dateProperties ) {

                                                                if( \$contentEl.length > 0 ) {
                                                                        showEvents( \$contentEl, dateProperties );
                                                                }

                                                        },
                                                        caldata : data,
                                                        displayWeekAbbr : true
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
                                        
                                        function showEvents( \$contentEl, dateProperties ) {

                                                hideEvents();

                                                var \$events = \$( '<div id=\"custom-content-reveal\" class=\"custom-content-reveal\"><h4>Evènement <br/>' + dateProperties.day + ' ' + dateProperties.monthname + ', ' + dateProperties.year + '</h4></div>' ),
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
   
\t\t\t});
\t\t</script>
";
    }

    public function getTemplateName()
    {
        return "soleilAgendaBundle:Agenda:agendaMini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 38,  54 => 30,  61 => 20,  57 => 31,  47 => 14,  43 => 20,  36 => 14,  33 => 10,  24 => 4,  176 => 44,  168 => 42,  143 => 40,  137 => 39,  133 => 37,  116 => 36,  113 => 35,  109 => 34,  97 => 24,  89 => 22,  65 => 19,  56 => 18,  53 => 11,  35 => 10,  28 => 8,  19 => 1,  175 => 76,  172 => 75,  160 => 21,  156 => 20,  152 => 19,  146 => 17,  140 => 8,  128 => 80,  123 => 77,  121 => 75,  112 => 70,  110 => 69,  103 => 65,  82 => 47,  76 => 44,  70 => 41,  66 => 40,  59 => 36,  52 => 32,  48 => 31,  44 => 29,  42 => 17,  32 => 9,  30 => 8,  22 => 2,);
    }
}
