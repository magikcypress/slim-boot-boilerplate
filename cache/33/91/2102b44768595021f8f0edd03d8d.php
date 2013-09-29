<?php

/* article/detail.html */
class __TwigTemplate_33912102b44768595021f8f0edd03d8d extends Twig_Template
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
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<h1>";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
        echo "</h1>
\t<p>Published: ";
        // line 7
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_article_, "timestamp"), "jS F Y"), "html", null, true);
        echo " by ";
        if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
        echo twig_escape_filter($this->env, $_author_, "html", null, true);
        echo "</p>
\t<p>";
        // line 8
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->getAttribute($_article_, "content");
        echo "</p>
\t<p><a href=\"/\">Back to Homepage</a></p>
";
    }

    public function getTemplateName()
    {
        return "article/detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  45 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
