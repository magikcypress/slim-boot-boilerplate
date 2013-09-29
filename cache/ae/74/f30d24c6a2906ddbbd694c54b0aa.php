<?php

/* about/index.html */
class __TwigTemplate_ae74f30d24c6a2906ddbbd694c54b0aa extends Twig_Template
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
\t<h1>About</h1>
\t</p>Blah Blah<p>
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
        return array (  35 => 5,  29 => 3,);
    }
}
