<?php

/* soleilArticleBundle:Article:liste.html.twig */
class __TwigTemplate_93fa1e9f8fdb8e3127600ede7e388c853c0da31b2631a0add07e8f99ea27e5d6 extends Twig_Template
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
        echo "<section>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articlesVideo"]) ? $context["articlesVideo"] : $this->getContext($context, "articlesVideo")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["av"]) {
            // line 3
            echo "    
     ";
            // line 4
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 5
                echo "
        <h2>Vidéos</h2>

      ";
            }
            // line 9
            echo "  
    <article id=\"article";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" class=\"grid_4bis alpha";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo " omega";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\">
        <h3>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["av"]) ? $context["av"] : $this->getContext($context, "av")), "titreFr"), "html", null, true);
            echo "</h3> 
        <iframe width=\"298\" height=\"200\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["av"]) ? $context["av"] : $this->getContext($context, "av")), "video"), "html", null, true);
            echo "\" allowfullscreen class=\"grid_4bis alpha omega\"></iframe>
        ";
            // line 13
            echo $this->getAttribute((isset($context["av"]) ? $context["av"] : $this->getContext($context, "av")), "textFr");
            echo " 
    </article>
    
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['av'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articlesVideo"]) ? $context["articlesVideo"] : $this->getContext($context, "articlesVideo")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["av"]) {
            // line 19
            echo "        ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 20
                echo " <p class=\"toutes-videos\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("soleil_article_voir_plus", array("voirplus" => "articleVideo"));
                echo "\">voir + de vidéos</a></p>
 ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['av'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</section>

<section>
";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 27
            echo "
    ";
            // line 28
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 29
                echo "
        <h2>Articles</h2>

      ";
            }
            // line 33
            echo "        
    <article id=\"article";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" class=\"grid_4bis alpha";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo " omega";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\">
        <h3>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "titreFr"), "html", null, true);
            echo "</h3> 
        ";
            // line 36
            echo $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "textFr");
            echo "
    </article>
        
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 42
            echo "        ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 43
                echo " <p class=\"toutes-videos\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("soleil_article_voir_plus", array("voirplus" => "article"));
                echo "\">voir + d'article</a></p>
 ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</section>



";
    }

    public function getTemplateName()
    {
        return "soleilArticleBundle:Article:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 46,  217 => 43,  214 => 42,  197 => 41,  194 => 40,  172 => 35,  164 => 34,  161 => 33,  153 => 28,  150 => 27,  133 => 26,  107 => 19,  90 => 18,  53 => 10,  42 => 4,  39 => 3,  67 => 38,  54 => 30,  22 => 2,  36 => 14,  33 => 10,  157 => 38,  149 => 36,  128 => 23,  123 => 31,  106 => 30,  103 => 29,  99 => 28,  79 => 16,  59 => 13,  55 => 12,  35 => 10,  72 => 19,  65 => 12,  61 => 11,  57 => 31,  52 => 11,  47 => 14,  44 => 5,  27 => 7,  19 => 1,  191 => 77,  188 => 76,  182 => 47,  176 => 36,  168 => 39,  162 => 36,  158 => 35,  155 => 29,  152 => 33,  140 => 24,  135 => 22,  131 => 21,  127 => 20,  121 => 18,  110 => 20,  104 => 8,  92 => 25,  87 => 17,  85 => 76,  77 => 71,  69 => 13,  50 => 9,  45 => 32,  43 => 20,  40 => 17,  34 => 9,  32 => 9,  24 => 4,  83 => 45,  63 => 28,  48 => 33,  38 => 11,  31 => 4,  28 => 8,);
    }
}
