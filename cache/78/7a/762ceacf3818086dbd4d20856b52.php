<?php

/* about/index.html */
class __TwigTemplate_787a762ceacf3818086dbd4d20856b52 extends Twig_Template
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
\t\t\t\t\t<h1>About</h1>
\t\t\t\t\t</p>Blah Blah<p>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "about/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
