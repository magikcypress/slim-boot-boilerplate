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
\t\t<!--script src=\"javascripts/bootstrap.min.js\"></script-->
\t\t<!--script src=\"javascripts/script.js\"></script-->
\t\t
\t\t
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
      \t<link href=\"/stylesheets/screen.css\" media=\"screen, projection\" rel=\"stylesheet\" type=\"text/css\" />
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
        return array (  102 => 22,  90 => 11,  83 => 8,  78 => 7,  73 => 6,  70 => 5,  67 => 4,  50 => 26,  45 => 23,  43 => 22,  36 => 18,  27 => 4,  22 => 1,  89 => 21,  77 => 18,  71 => 16,  59 => 15,  55 => 14,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 13,);
    }
}
