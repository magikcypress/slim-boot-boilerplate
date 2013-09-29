<?php

/* contact/index.html */
class __TwigTemplate_2f6de3c3483b7a7bfca75468bec4e9ac extends Twig_Template
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
\t<h1>Contact</h1>
\t";
        // line 7
        $this->env->loadTemplate("contact/contact_form.html")->display($context);
    }

    public function getTemplateName()
    {
        return "contact/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  35 => 5,  29 => 3,);
    }
}
