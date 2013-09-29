<?php

/* header.html */
class __TwigTemplate_1d749fc203b3e186aa519e185bc9621a extends Twig_Template
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
        echo "<div class=\"navbar navbar-inverse\">
\t<div class=\"navbar-inner\">
\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t</a>
\t\t<a class=\"brand\" href=\"/\">";
        // line 8
        if (isset($context["SITE_NAME"])) { $_SITE_NAME_ = $context["SITE_NAME"]; } else { $_SITE_NAME_ = null; }
        echo twig_escape_filter($this->env, $_SITE_NAME_, "html", null, true);
        echo "</a>
\t\t<div class=\"nav-collapse collapse\">
\t\t\t<ul class=\"nav\">
\t\t\t\t<li class=\"active\">
\t\t\t\t\t<a href=\"/\"><i class=\"icon-white icon-home\"></i> Home</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/admin\"><i class=\"icon-white icon-pencil\"></i> Admin</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/admin/authors\"><i class=\"icon-white icon-user\"></i> Author</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/about\"><i class=\"icon-white icon-info-sign\"></i> About</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/contact\"><i class=\"icon-white icon-envelope\"></i> Contact</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/\"><i class=\"icon-white icon-leaf\"></i> View site</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
