<?php

/* layout.html */
class __TwigTemplate_b85fe7d0680541fa5ec30868592ac125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>";
        // line 4
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>
\t\t<meta charset=\"utf8\" />

\t    <meta name=\"author\" content=\"@__cyp\">
\t  
\t    <link rel=\"stylesheet\" media=\"all\" href=\"/simple/bootstrap.min.css\"/>
\t    <link rel=\"stylesheet\" media=\"all\" href=\"/simple/bootstrap-responsive.min.css\"/>
\t    <link rel=\"stylesheet\" media=\"all\" href=\"/simple/screen.css\"/>

\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<ul class=\"menu\">
\t\t\t\t<li><a href=\"/admin/\">Return Admin</a></li>
\t\t\t\t<li><a href=\"/admin/add\">Add Article</a></li>
\t\t\t\t<li><a href=\"/admin/addauthor\">Add Author</a></li>
\t\t\t\t<li><a href=\"/contact\">Contact</a></li>
\t\t\t\t<li><a href=\"/about\">About</a></li>
\t\t\t\t<li><a href=\"/\">View Website</a></li>
\t\t\t\t<li><a href=\"/logout\">Logout</a></li>
\t\t\t</ul>

\t\t\t";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "\t\t</div>

\t\t<div class=\"container\">
\t\t\t\t<ul class=\"inline\">
\t\t\t\t\t<li>2013</li>
\t\t\t\t\t<li>&minus;</li>
\t\t\t\t\t<li><a href=\"\">";
        // line 33
        if (isset($context["SITE_NAME"])) { $_SITE_NAME_ = $context["SITE_NAME"]; } else { $_SITE_NAME_ = null; }
        echo twig_escape_filter($this->env, $_SITE_NAME_, "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li>&minus;</li>
\t\t\t\t\t<li><a href=\"";
        // line 35
        if (isset($context["LICENCE_URL"])) { $_LICENCE_URL_ = $context["LICENCE_URL"]; } else { $_LICENCE_URL_ = null; }
        echo twig_escape_filter($this->env, $_LICENCE_URL_, "html", null, true);
        echo "\">";
        if (isset($context["LICENCE"])) { $_LICENCE_ = $context["LICENCE"]; } else { $_LICENCE_ = null; }
        echo twig_escape_filter($this->env, $_LICENCE_, "html", null, true);
        echo "</a></li>
\t\t\t\t</ul>
\t\t</div>
\t\t";
        // line 38
        if (array_key_exists("GOOGLE_UA_ID", $context)) {
            // line 39
            echo "\t\t<script>
\t\t\tvar _gaq = [['_setAccount', '";
            // line 40
            if (isset($context["GOOGLE_UA_ID"])) { $_GOOGLE_UA_ID_ = $context["GOOGLE_UA_ID"]; } else { $_GOOGLE_UA_ID_ = null; }
            echo twig_escape_filter($this->env, $_GOOGLE_UA_ID_, "html", null, true);
            echo "'], ['_trackPageview'], ['_trackPageLoadTime']];
\t\t\t( function(d, t) {
\t\t\t\t\tvar g = d.createElement(t), s = d.getElementsByTagName(t)[0];
\t\t\t\t\tg.async = 1;
\t\t\t\t\tg.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
\t\t\t\t\ts.parentNode.insertBefore(g, s)
\t\t\t\t}(document, 'script'));
\t\t</script>
\t\t";
        }
        // line 49
        echo "
\t</body>
</html>";
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 26,  101 => 4,  95 => 49,  82 => 40,  79 => 39,  77 => 38,  67 => 35,  61 => 33,  53 => 27,  51 => 26,  26 => 4,  21 => 1,);
    }
}
