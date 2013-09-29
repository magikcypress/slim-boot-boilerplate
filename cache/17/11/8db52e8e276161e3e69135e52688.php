<?php

/* article/index.html */
class __TwigTemplate_17118db52e8e276161e3e69135e52688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("page_title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"span12\">
\t\t\t\t<div class=\"hero-unit\">
\t\t\t\t\t<h1>Articles</h1>
\t\t\t\t\t\t";
        // line 13
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_articles_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "\t\t\t\t\t\t\t";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            if ($this->getAttribute($_article_, "publish")) {
                // line 15
                echo "\t\t\t\t\t\t\t\t<h2><a href=\"/view/";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                echo "</a> by ";
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "nom"), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t<p>";
                // line 16
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo $this->getAttribute($_article_, "summary");
                echo "</p>
\t\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo "\t
\t\t\t\t\t\t\t<p>There are currently no articles.</p>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "article/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  77 => 18,  71 => 16,  59 => 15,  55 => 14,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
