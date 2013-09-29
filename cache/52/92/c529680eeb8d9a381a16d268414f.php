<?php

/* article/admin.html */
class __TwigTemplate_5292c529680eeb8d9a381a16d268414f extends Twig_Template
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
        echo "My Blog Administration";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo "\t

\t<section id=\"article\">
\t<h1>My Blog Administration</h1>

\t";
        // line 10
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ($_articles_) {
            // line 11
            echo "\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Title</th>
\t\t\t\t\t<th>Author</th>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th colspan=\"3\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 22
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 23
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 24
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 25
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "nom"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 26
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_article_, "timestamp"), "jS F Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t";
                // line 28
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                if ($this->getAttribute($_article_, "publish")) {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t<img src=\"/images/publish.png\" alt=\"Article public\">
\t\t\t\t\t\t\t";
                } else {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t<img src=\"/images/notpublish.png\" alt=\"Article private\">
\t\t\t\t\t\t\t";
                }
                // line 33
                echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td><a href=\"/admin/publish/";
                // line 35
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id"), "html", null, true);
                echo "\">Publish</a></td>
\t\t\t\t\t\t<td><a href=\"/admin/edit/";
                // line 36
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id"), "html", null, true);
                echo "\">Edit</a></td>
\t\t\t\t\t\t<td><a href=\"/admin/delete/";
                // line 37
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id"), "html", null, true);
                echo "\">Delete</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "\t\t\t</tbody>
\t\t</table>

\t\t<ul class=\"legend\">
\t\t\t<li><strong>Legend</strong></li>
\t\t\t<li><img src=\"/images/publish.png\" alt=\"Legend Public\"> Public</li>
\t\t\t<li><img src=\"/images/notpublish.png\" alt=\"Legend private\"> Private</li>
\t\t</ul>


\t";
        } else {
            // line 51
            echo "\t\t<p>There are currently no articles.</p>
\t";
        }
        // line 53
        echo "
\t</section>

\t<section id=\"author\">

\t\t<h1>My Authors Administration</h1>

\t\t";
        // line 60
        if (isset($context["authors"])) { $_authors_ = $context["authors"]; } else { $_authors_ = null; }
        if ($_authors_) {
            // line 61
            echo "\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Login</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th colspan=\"3\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 72
            if (isset($context["authors"])) { $_authors_ = $context["authors"]; } else { $_authors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_authors_);
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 73
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 74
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "nom"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 75
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "email"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 76
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "login"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t";
                // line 78
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                if ($this->getAttribute($_author_, "statut")) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"/images/publish.png\" alt=\"Author public\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"/images/notpublish.png\" alt=\"Author private\">
\t\t\t\t\t\t\t\t";
                }
                // line 83
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><a href=\"/admin/authorpublish/";
                // line 85
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "id"), "html", null, true);
                echo "\">Statut</a></td>
\t\t\t\t\t\t\t<td><a href=\"/admin/authoredit/";
                // line 86
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "id"), "html", null, true);
                echo "\">Edit</a></td>
\t\t\t\t\t\t\t<td><a href=\"/admin/authordelete/";
                // line 87
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "id"), "html", null, true);
                echo "\">Delete</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 90
            echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<ul class=\"legend\">
\t\t\t\t<li><strong>Legend</strong></li>
\t\t\t\t<li><img src=\"/images/publish.png\" alt=\"Legend Public\"> Public</li>
\t\t\t\t<li><img src=\"/images/notpublish.png\" alt=\"Legend private\"> Private</li>
\t\t\t</ul>


\t\t";
        } else {
            // line 101
            echo "\t\t\t<p>There are currently no authors.</p>
\t\t";
        }
        // line 103
        echo "\t</section>

";
    }

    public function getTemplateName()
    {
        return "article/admin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 103,  233 => 101,  220 => 90,  210 => 87,  205 => 86,  200 => 85,  196 => 83,  192 => 81,  188 => 79,  185 => 78,  179 => 76,  174 => 75,  169 => 74,  166 => 73,  161 => 72,  148 => 61,  145 => 60,  136 => 53,  132 => 51,  119 => 40,  109 => 37,  104 => 36,  99 => 35,  95 => 33,  91 => 31,  87 => 29,  84 => 28,  78 => 26,  73 => 25,  68 => 24,  65 => 23,  60 => 22,  47 => 11,  44 => 10,  35 => 5,  29 => 3,);
    }
}
