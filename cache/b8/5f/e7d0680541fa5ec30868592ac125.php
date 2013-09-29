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
\t\t\t</ul>

\t\t\t";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "\t\t</div>

\t</body>
</html>";
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  59 => 4,  52 => 26,  50 => 25,  26 => 4,  21 => 1,  45 => 8,  43 => 7,  40 => 6,  37 => 5,  29 => 3,);
    }
}
