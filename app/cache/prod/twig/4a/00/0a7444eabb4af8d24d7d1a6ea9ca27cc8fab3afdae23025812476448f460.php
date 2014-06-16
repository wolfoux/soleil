<?php

/* soleilArticleBundle:Article:voirplus.html.twig */
class __TwigTemplate_4a000a7444eabb4af8d24d7d1a6ea9ca27cc8fab3afdae23025812476448f460 extends Twig_Template
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
<section id=\"articles_avec-videos\" class=\"container\">
    
";
        // line 7
        if (((isset($context["voirplus"]) ? $context["voirplus"] : $this->getContext($context, "voirplus")) == "article")) {
            // line 8
            echo "
    <h3>Article</h3>
    
    ";
            // line 11
            $context["i"] = 1;
            // line 12
            echo "    
    ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 14
                echo "        
        ";
                // line 15
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 4)) {
                    echo " ";
                    $context["i"] = 1;
                    echo " ";
                }
                // line 16
                echo "    
        <article id=\"article";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" class=\"grid_4bis alpha";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " omega";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\">
            <h3>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "titreFr"), "html", null, true);
                echo "</h3> 
            ";
                // line 19
                echo $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "textFr");
                echo "
        </article>

        ";
                // line 22
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 23
                echo "    
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        
";
        } else {
            // line 27
            echo "    
    <h3>Article vidéo</h3>
    
    ";
            // line 30
            $context["i"] = 1;
            // line 31
            echo "    
    ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                echo " 

        ";
                // line 34
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 4)) {
                    echo " ";
                    $context["i"] = 1;
                    echo " ";
                }
                // line 35
                echo "    
        ";
                // line 36
                if ((!(null === $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "video")))) {
                    // line 37
                    echo "            <article id=\"article";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\" class=\"grid_4bis alpha";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo " omega";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\">
                <h3>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "titreFr"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "</h3> 
                <iframe width=\"298\" height=\"200\" src=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "video"), "html", null, true);
                    echo "\" allowfullscreen class=\"grid_4bis alpha omega\"></iframe>
                ";
                    // line 40
                    echo $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "textFr");
                    echo " 
            </article>
        ";
                }
                // line 43
                echo "        
        ";
                // line 44
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 45
                echo "    
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        
";
        }
        // line 49
        echo "
</section>

";
    }

    public function getTemplateName()
    {
        return "soleilArticleBundle:Article:voirplus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 49,  160 => 47,  153 => 45,  151 => 44,  148 => 43,  142 => 40,  138 => 39,  132 => 38,  123 => 37,  121 => 36,  118 => 35,  112 => 34,  105 => 32,  102 => 31,  100 => 30,  95 => 27,  91 => 25,  84 => 23,  82 => 22,  76 => 19,  72 => 18,  64 => 17,  61 => 16,  55 => 15,  52 => 14,  48 => 13,  45 => 12,  43 => 11,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
