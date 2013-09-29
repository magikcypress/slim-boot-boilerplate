<?php

/* article/index.html */
class __TwigTemplate_de77ec2882826e58c0490f2977db4c30 extends Twig_Template
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
        echo "My Blog";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo "\t
\t";
        // line 6
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_articles_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "\t\t";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            if ($this->getAttribute($_article_, "publish")) {
                // line 8
                echo "\t\t\t<h1><a href=\"/view/";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                echo "</a> by ";
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "nom"), "html", null, true);
                echo "</h1>
\t\t\t<p>";
                // line 9
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo $this->getAttribute($_article_, "summary");
                echo "</p>
\t\t";
            }
            // line 11
            echo "\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo "\t
\t\t<p>There are currently no articles.</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
        return array (  68 => 11,  62 => 9,  50 => 8,  46 => 7,  40 => 6,  35 => 5,  29 => 3,);
    }
}
