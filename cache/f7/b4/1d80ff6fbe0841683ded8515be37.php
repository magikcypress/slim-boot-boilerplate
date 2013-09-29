<?php

/* layout.html */
class __TwigTemplate_f7b41d80ff6fbe0841683ded8515be37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "\t</head>
\t<body>
\t\t<div class=\"page-wrapper\">
\t\t\t<header class=\"navbar-wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
        // line 18
        $this->env->loadTemplate("header.html")->display($context);
        echo "\t
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "\t\t\t</div>
\t\t\t<footer class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 26
        $this->env->loadTemplate("footer.html")->display($context);
        echo "\t
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t\t<!-- JavaScript at the bottom for fast page loading -->

\t\t<!--script src=\"/javascripts/jquery.min.js\"></script-->
\t\t<!--script src=\"/javascripts/bootstrap.min.js\"></script-->
\t\t<!--script src=\"/javascripts/script.js\"></script-->
\t\t
\t\t";
        // line 36
        if (array_key_exists("GOOGLE_UA_ID", $context)) {
            // line 37
            echo "\t\t<script>
\t\t\tvar _gaq = [['_setAccount', '";
            // line 38
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
        // line 47
        echo "\t
\t</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"keywords\" content=\"";
        // line 6
        if (isset($context["page_keywords"])) { $_page_keywords_ = $context["page_keywords"]; } else { $_page_keywords_ = null; }
        echo twig_escape_filter($this->env, $_page_keywords_, "html", null, true);
        echo "\">
\t\t<meta name=\"description\" content=\"";
        // line 7
        if (isset($context["page_desc"])) { $_page_desc_ = $context["page_desc"]; } else { $_page_desc_ = null; }
        echo twig_escape_filter($this->env, $_page_desc_, "html", null, true);
        echo "\">
\t\t<meta name=\"author\" content=\"";
        // line 8
        if (isset($context["SITE_AUTHOR"])) { $_SITE_AUTHOR_ = $context["SITE_AUTHOR"]; } else { $_SITE_AUTHOR_ = null; }
        echo twig_escape_filter($this->env, $_SITE_AUTHOR_, "html", null, true);
        echo "\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
      \t<link href=\"/bootstrap/screen.css\" media=\"screen, projection\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<title>";
        // line 11
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>
\t\t";
    }

    public function block_page_title($context, array $blocks = array())
    {
        if (isset($context["SITE_NAME"])) { $_SITE_NAME_ = $context["SITE_NAME"]; } else { $_SITE_NAME_ = null; }
        echo twig_escape_filter($this->env, $_SITE_NAME_, "html", null, true);
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
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
        return array (  122 => 22,  110 => 11,  103 => 8,  98 => 7,  93 => 6,  90 => 5,  87 => 4,  81 => 47,  68 => 38,  65 => 37,  63 => 36,  50 => 26,  45 => 23,  43 => 22,  36 => 18,  29 => 13,  27 => 4,  22 => 1,);
    }
}
