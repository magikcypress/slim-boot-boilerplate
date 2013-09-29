<?php

/* author/admin_author.html */
class __TwigTemplate_3ed642c9674c05438a2040f2191c0043 extends Twig_Template
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
        if (isset($context["action_name"])) { $_action_name_ = $context["action_name"]; } else { $_action_name_ = null; }
        echo twig_escape_filter($this->env, $_action_name_, "html", null, true);
        echo " Article";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
        // line 7
        $this->env->loadTemplate("author/admin_author_form.html")->display($context);
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "author/admin_author.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  43 => 7,  40 => 6,  37 => 5,  29 => 3,);
    }
}
