<?php

/* article/admin.html */
class __TwigTemplate_39a79480ca0569c4854ee8170e7d7e37 extends Twig_Template
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

\t<section id=\"qcm\">

\t\t<h1>My QCM Administration</h1>

\t\t<ul class=\"menu\">
\t\t\t<li><a href=\"/admin/add\">Add Article</a></li>
\t\t</ul>

\t\t";
        // line 15
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ($_articles_) {
            // line 16
            echo "\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Author</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th colspan=\"3\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 27
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 28
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 29
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 30
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                echo twig_escape_filter($this->env, $_users_, "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 31
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_article_, "timestamp"), "jS F Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t";
                // line 33
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                if ($this->getAttribute($_article_, "publish")) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"/images/publish.png\" alt=\"Article public\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"/images/notpublish.png\" alt=\"Article private\">
\t\t\t\t\t\t\t\t";
                }
                // line 38
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><a href=\"/admin/publish/";
                // line 40
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id"), "html", null, true);
                echo "\">Publish</a></td>
\t\t\t\t\t\t\t<td><a href=\"/admin/edit/";
                // line 41
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id"), "html", null, true);
                echo "\">Edit</a></td>
\t\t\t\t\t\t\t<td><a href=\"/admin/delete/";
                // line 42
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id"), "html", null, true);
                echo "\">Delete</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 45
            echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<ul class=\"legend\">
\t\t\t\t<li><strong>Legend</strong></li>
\t\t\t\t<li><img src=\"/images/publish.png\" alt=\"Legend Publish\"> Publish</li>
\t\t\t\t<li><img src=\"/images/notpublish.png\" alt=\"Legend Don't Publish\"> Don't Publish</li>
\t\t\t</ul>


\t\t";
        } else {
            // line 56
            echo "\t\t\t<p>There are currently no author.</p>
\t\t";
        }
        // line 58
        echo "\t</section>

\t<section id=\"author\">

\t\t<h1>My Authors Administration</h1>

\t\t<ul class=\"menu\">
\t\t\t<li><a href=\"/admin/addauthor\">Add Author</a></li>
\t\t</ul>

\t\t";
        // line 68
        if (isset($context["authors"])) { $_authors_ = $context["authors"]; } else { $_authors_ = null; }
        if ($_authors_) {
            // line 69
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
            // line 80
            if (isset($context["authors"])) { $_authors_ = $context["authors"]; } else { $_authors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_authors_);
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 81
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 82
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "nom"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 83
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "email"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 84
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "login"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t";
                // line 86
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                if ($this->getAttribute($_author_, "statut")) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"/images/publish.png\" alt=\"Author public\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"/images/notpublish.png\" alt=\"Author private\">
\t\t\t\t\t\t\t\t";
                }
                // line 91
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><a href=\"/admin/authorpublish/";
                // line 93
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "id"), "html", null, true);
                echo "\">Statut</a></td>
\t\t\t\t\t\t\t<td><a href=\"/admin/authoredit/";
                // line 94
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "id"), "html", null, true);
                echo "\">Edit</a></td>
\t\t\t\t\t\t\t<td><a href=\"/admin/authordelete/";
                // line 95
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "id"), "html", null, true);
                echo "\">Delete</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 98
            echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<ul class=\"legend\">
\t\t\t\t<li><strong>Legend</strong></li>
\t\t\t\t<li><img src=\"/images/publish.png\" alt=\"Legend Public\"> Public</li>
\t\t\t\t<li><img src=\"/images/notpublish.png\" alt=\"Legend private\"> Private</li>
\t\t\t</ul>


\t\t";
        } else {
            // line 109
            echo "\t\t\t<p>There are currently no authors.</p>
\t\t";
        }
        // line 111
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
        return array (  245 => 111,  241 => 109,  228 => 98,  218 => 95,  213 => 94,  208 => 93,  204 => 91,  200 => 89,  196 => 87,  193 => 86,  187 => 84,  182 => 83,  177 => 82,  174 => 81,  169 => 80,  156 => 69,  153 => 68,  141 => 58,  137 => 56,  124 => 45,  114 => 42,  109 => 41,  104 => 40,  100 => 38,  96 => 36,  92 => 34,  89 => 33,  83 => 31,  78 => 30,  73 => 29,  70 => 28,  65 => 27,  52 => 16,  49 => 15,  35 => 5,  29 => 3,);
    }
}
