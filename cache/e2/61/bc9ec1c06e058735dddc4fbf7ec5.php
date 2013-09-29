<?php

/* article/article_form.html */
class __TwigTemplate_e261bc9ec1c06e058735dddc4fbf7ec5 extends Twig_Template
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
        echo "<div class=\"hero-unit\">

<form action=\"";
        // line 3
        if (isset($context["action_url"])) { $_action_url_ = $context["action_url"]; } else { $_action_url_ = null; }
        echo twig_escape_filter($this->env, $_action_url_, "html", null, true);
        echo "\" method=\"post\">
\t<h1>";
        // line 4
        if (isset($context["action_name"])) { $_action_name_ = $context["action_name"]; } else { $_action_name_ = null; }
        echo twig_escape_filter($this->env, $_action_name_, "html", null, true);
        echo " QCM</h1>
\t
\t<p>
\t\t<label for=\"title\">Title: </label>
\t\t<input type=\"text\" name=\"title\" value=\"";
        // line 8
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_article_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_article_, "title"), "")) : ("")), "html", null, true);
        echo "\" id=\"title\" />
\t</p>
\t
\t<p>
\t\t<label for=\"author\">Author: </label>
\t\t<select name=\"author\">
\t\t\t";
        // line 14
        if (isset($context["authors"])) { $_authors_ = $context["authors"]; } else { $_authors_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_authors_);
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 15
            echo "\t\t\t\t";
            if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
            if ($this->getAttribute($_author_, "statut")) {
                // line 16
                echo "\t\t\t\t<option value=\"";
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_author_, "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_author_, "nom"), "")) : ("")), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "\t\t</select>
\t</p>
\t
\t<p>
\t\t<label for=\"summary\">Summary: </label>
\t\t<textarea name=\"summary\" id=\"summary\" class=\"editable summary\">";
        // line 24
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_article_, "summary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_article_, "summary"), "")) : ("")), "html", null, true);
        echo "</textarea>
\t</p>\t
\t
\t<p>
\t\t<label for=\"content\">Content: </label>
\t\t<textarea name=\"content\" id=\"content\" class=\"editable\">";
        // line 29
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_article_, "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_article_, "content"), "")) : ("")), "html", null, true);
        echo "</textarea>
\t</p>
\t
\t<p>
\t\t<input type=\"submit\" value=\"";
        // line 33
        if (isset($context["action_name"])) { $_action_name_ = $context["action_name"]; } else { $_action_name_ = null; }
        echo twig_escape_filter($this->env, $_action_name_, "html", null, true);
        echo " QCM\" />
\t</p>
</form>

</div>

<!--script type=\"text/javascript\" src=\"/templates/assets/bootstrap/js/tinymce/tinymce.min.js\"></script>
<script type=\"text/javascript\">
tinymce.init({
    selector: \"textarea\"
 });
</script-->

<!-- load the jQuery and require.js libraries -->
<script type=\"text/javascript\" src=\"http://cdn.aloha-editor.org/latest/lib/require.js\"></script>

<!-- load the Aloha Editor core and some plugins -->
<script src=\"http://cdn.aloha-editor.org/latest/lib/aloha.js\"
                   data-aloha-plugins=\"common/ui,
                                        common/format,
                                        common/list,
                                        common/link,
                                        common/highlighteditables\">
</script>

<!-- load the Aloha Editor CSS styles -->
<link href=\"http://cdn.aloha-editor.org/latest/css/aloha.css\" rel=\"stylesheet\" type=\"text/css\" />

<!-- make all elements with class=\"editable\" editable with Aloha Editor -->
<script type=\"text/javascript\">
     Aloha.ready( function() {
            var \$ = Aloha.jQuery;
            \$('.editable').aloha();
     });
</script>

";
    }

    public function getTemplateName()
    {
        return "article/article_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  87 => 29,  78 => 24,  71 => 19,  65 => 18,  55 => 16,  51 => 15,  46 => 14,  36 => 8,  28 => 4,  23 => 3,  19 => 1,);
    }
}
