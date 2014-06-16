<?php

/* soleilDonBundle:Don:index.html.twig */
class __TwigTemplate_cc3411ecab2779045152b07f47432a4ab0c16ed2220896178fe45cd550e17167 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<section id=\"etage2\" class=\"alignement_etage2\">
\t<section id=\"contenu\" class=\"container\">

\t\t\t<section id=\"don\" class=\"grid_12 alpha omega\">

               <h2 class=\"alignement_h2_etage2\">Don</h2>
                    
\t\t\t\t<p class=\"alignement_1erP_etage2\">Votre adhésion nous aide à maintenir le bon fonctionnement de l'association et nous permet de poursuivre l'objet social qui est de pouvoir offrir un service d'éducation lié à l'art pour des personnes en difficultés.</p>
\t\t\t\t<p>Elle sert de support aux activités annoncées et elle vous permet d'être informé de tous les événements, coaching, stages, ateliers, cours.</p>
\t\t\t\t<p>Elle vous donne accès à l'interactivité du site.</p>
\t\t\t\t<p>Elle vous permet d'assister à l'Assemblée Générale et vous offre la possibilité de prendre part aux décisions de l'AG.</p>

\t\t\t\t<p>Vous pouvez soutenir l'asbl Avec le Soleil en versant un don.</p>

\t\t\t\t<figure>
\t\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/don_etape_1_avec-le-soleil.png"), "html", null, true);
        echo "\" alt=\"faire un don\">
\t\t\t\t</figure> 
                                
                                
                                
\t\t\t\t<ul class=\"colo_info\">
\t\t\t\t\t<li>
\t\t\t\t\t\tDevenez adhérent de l'asbl.<br/>
\t\t\t\t\t\tPour ce faire, il vous suffit de verser votre cotisation annuelle de 10 € sur le compte : 363-1107344-32<br/>
\t\t\t\t\t\tIBAN: BE35 3631 1073 4432<br/>
\t\t\t\t\t\tBIC: BBRUBEBB
\t\t\t\t\t</li>
\t\t\t\t\t<li>Participez aux différentes activités qui seront organisées par l'asbl.</li>
\t\t\t\t\t<li>Parlez de \" Avec le Soleil\"  autour de vous afin de trouver des bénévoles qui viendront encore renforcer l'équipe.</li>
\t\t\t\t\t<li>Proposez à vos connaissances qui se marient de remplacer les fleurs par un don en faveur de l'asbl.</li>
\t\t\t\t\t<li>Proposez-nous des dons en nature : bureaux, chaises, matériel de dessin, des tissus, de la toile, de la terre, un four, des émaux...</li>
\t\t\t\t\t<li>Lors d'un testament, faites un legs en faveur de notre association.</li>
\t\t\t\t</ul>\t            

\t\t\t</section>
\t</section>
</section>


";
    }

    public function getTemplateName()
    {
        return "soleilDonBundle:Don:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  31 => 5,  28 => 4,);
    }
}
