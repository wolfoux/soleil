<?php

/* soleilAgendaBundle:Agenda:Admin/index.html.twig */
class __TwigTemplate_226c8b647ef655de4a704820d2d2f634463f90e88391219f2386276f8286bacd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::SousSite/Admin/baseAdmin.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javaScript' => array($this, 'block_javaScript'),
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
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"> 
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Agenda";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("agenda/css/calendar.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("agenda/css/custom_1.css"), "html", null, true);
        echo "\" /> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("agenda/css/custom_1_ad.css"), "html", null, true);
        echo "\" />
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "
    <div class=\"row\">
        
          <div class=\"col-lg-12\">
            <h1>Agenda</h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("soleil_sous_site_accueil_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
              <li class=\"active\"><i class=\"fa fa-table\"></i> Agenda</li>
            </ol>
          </div>
        
  </div><!-- /.row -->
  
  <!--
  <div class=\"row\">
      <div class=\"col-lg-12\">
        <p><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("soleil_agenda_evenement_ajouter");
        echo "\" class=\"bouton gris small\">Ajouter un évènement</a></p>
      </div>
  </div>
  -->
  
  
  <div class=\"row\">

\t\t<div class=\"container\" id=\"voirEv\">
                        <p><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("soleil_agenda_evenement_ajouter");
        echo "\" class=\"bouton gris small\">Ajouter un évènement</a></p>
\t\t\t<div class=\"custom-calendar-wrap custom-calendar-full\">
\t\t\t\t<div class=\"custom-header clearfix\">

\t\t\t\t\t<h3 class=\"custom-month-year\">
\t\t\t\t\t\t<span id=\"custom-month\" class=\"custom-month\"></span>
\t\t\t\t\t\t<span id=\"custom-year\" class=\"custom-year\"></span>
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<span id=\"custom-prev\" class=\"custom-prev\"></span>
\t\t\t\t\t\t\t<span id=\"custom-next\" class=\"custom-next\"></span>
\t\t\t\t\t\t\t<span id=\"custom-current\" class=\"custom-current\" title=\"Got to current date\"></span>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div id=\"calendar\" class=\"fc-calendar-container\"></div>
\t\t\t</div> 
                    
                    
\t\t</div><!-- /container -->
\t\t
 </div>
";
    }

    // line 67
    public function block_javaScript($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("javaScript", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("agenda/js/modernizr.custom.63321.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("agenda/js/jquery.calendario.js"), "html", null, true);
        echo "\"></script> 
\t\t
\t\t<script type=\"text/javascript\">\t
\t\t\t\$(function() {
\t\t\t
\t\t\t\t\$.ajax({
                                                        type: \"POST\",
                                                        url: \"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("soleil_agenda_evenement_liste_mois");
        echo "\",
                                                        dataType: 'json',
                                                        
                                                        /*cache: false,*/
                                                        success: function(data){
                                                            
                                                            //alert(\"ok\");
                                                            //alert(data);
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
                                                                         connect : true
                                                                 } ),
                                                                 \$month = \$( '#custom-month' ).html( cal.getMonthName() ),
                                                                 \$year = \$( '#custom-year' ).html( cal.getYear() );
                                                                 //\$connect = '1';
                
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
                                                                        
                                                                        var \$events = \$( '<div id=\"custom-content-reveal\" class=\"custom-content-reveal\"><h4>Evènement : ' + dateProperties.day + ' ' + dateProperties.monthname + ' ' + dateProperties.year + '</h4></div>' ),
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
        return "soleilAgendaBundle:Agenda:Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 78,  148 => 71,  143 => 69,  135 => 67,  109 => 44,  97 => 35,  84 => 25,  76 => 19,  73 => 18,  67 => 15,  63 => 14,  59 => 13,  54 => 12,  51 => 11,  44 => 9,  35 => 4,  32 => 3,);
    }
}
