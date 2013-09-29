<?php

/* footer.html */
class __TwigTemplate_5abbeba6812d820d5b1665e5fb617c1e extends Twig_Template
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
        echo "<div id=\"copyright\" class=\"row\">
\t<div class=\"container\">
\t\t<ul class=\"inline\">
\t\t\t<li>&copy; 2012</li>
\t\t\t<li>&minus;</li>
\t\t\t<li><a href=\"\">";
        // line 6
        if (isset($context["SITE_NAME"])) { $_SITE_NAME_ = $context["SITE_NAME"]; } else { $_SITE_NAME_ = null; }
        echo twig_escape_filter($this->env, $_SITE_NAME_, "html", null, true);
        echo "</a></li>
\t\t\t<li>&minus;</li>
\t\t\t<li>All Rights Reserved</li>
\t\t</ul>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  28 => 8,  19 => 1,  102 => 22,  90 => 11,  83 => 8,  78 => 7,  73 => 6,  70 => 5,  67 => 4,  50 => 26,  45 => 23,  43 => 22,  36 => 18,  29 => 13,  27 => 4,  22 => 1,);
    }
}
