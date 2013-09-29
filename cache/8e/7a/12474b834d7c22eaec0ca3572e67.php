<?php

/* footer.html */
class __TwigTemplate_8e7a12474b834d7c22eaec0ca3572e67 extends Twig_Template
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
\t\t\t<li>&copy; 2013</li>
\t\t\t<li>&minus;</li>
\t\t\t<li><a href=\"\">";
        // line 6
        if (isset($context["SITE_NAME"])) { $_SITE_NAME_ = $context["SITE_NAME"]; } else { $_SITE_NAME_ = null; }
        echo twig_escape_filter($this->env, $_SITE_NAME_, "html", null, true);
        echo "</a></li>
\t\t\t<li>&minus;</li>
\t\t\t<li><a href=\"";
        // line 8
        if (isset($context["LICENCE_URL"])) { $_LICENCE_URL_ = $context["LICENCE_URL"]; } else { $_LICENCE_URL_ = null; }
        echo twig_escape_filter($this->env, $_LICENCE_URL_, "html", null, true);
        echo "\">";
        if (isset($context["LICENCE"])) { $_LICENCE_ = $context["LICENCE"]; } else { $_LICENCE_ = null; }
        echo twig_escape_filter($this->env, $_LICENCE_, "html", null, true);
        echo "</a></li>
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
        return array (  32 => 8,  26 => 6,  19 => 1,  245 => 111,  241 => 109,  228 => 98,  218 => 95,  213 => 94,  208 => 93,  204 => 91,  200 => 89,  196 => 87,  193 => 86,  187 => 84,  182 => 83,  177 => 82,  174 => 81,  169 => 80,  156 => 69,  153 => 68,  141 => 58,  137 => 56,  124 => 45,  114 => 42,  109 => 41,  104 => 40,  100 => 38,  96 => 36,  92 => 34,  89 => 33,  83 => 31,  78 => 30,  73 => 29,  70 => 28,  65 => 27,  52 => 16,  49 => 15,  35 => 5,  29 => 3,);
    }
}
