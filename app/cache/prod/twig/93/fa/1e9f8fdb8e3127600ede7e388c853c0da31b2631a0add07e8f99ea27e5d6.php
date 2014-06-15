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
        echo "
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
        echo "
 
";
        // line 25
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
            // line 26
            echo "
    ";
            // line 27
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 28
                echo "
        <h2>Articles</h2>

      ";
            }
            // line 32
            echo "        
    <article id=\"article";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" class=\"grid_4bis alpha";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo " omega";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\">
        <h3>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "titreFr"), "html", null, true);
            echo "</h3> 
        ";
            // line 35
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
        // line 39
        echo "
";
        // line 40
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
            // line 41
            echo "        ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 42
                echo " <p class=\"toutes-videos\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("soleil_article_voir_plus", array("voirplus" => "article"));
                echo "\">voir + d'articles</a></p>
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
        // line 45
        echo "


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
        return array (  234 => 45,  216 => 42,  213 => 41,  196 => 40,  193 => 39,  171 => 34,  163 => 33,  154 => 28,  149 => 26,  132 => 25,  107 => 19,  90 => 18,  87 => 17,  69 => 13,  50 => 9,  39 => 3,  67 => 38,  54 => 30,  43 => 20,  36 => 14,  33 => 10,  24 => 4,  176 => 44,  168 => 42,  143 => 40,  137 => 39,  133 => 37,  116 => 36,  113 => 35,  109 => 34,  97 => 24,  89 => 22,  56 => 18,  53 => 10,  35 => 10,  92 => 25,  72 => 19,  65 => 12,  61 => 11,  57 => 31,  47 => 14,  27 => 7,  19 => 1,  175 => 35,  172 => 75,  160 => 32,  156 => 20,  152 => 27,  146 => 17,  140 => 8,  128 => 23,  123 => 77,  121 => 75,  112 => 70,  110 => 20,  103 => 65,  82 => 47,  76 => 44,  70 => 41,  66 => 40,  59 => 36,  52 => 11,  44 => 5,  42 => 4,  32 => 9,  30 => 8,  22 => 2,  83 => 45,  63 => 28,  48 => 31,  38 => 9,  31 => 4,  28 => 8,);
    }
}
