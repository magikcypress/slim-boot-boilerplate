<?php

/* author/admin_author_form.html */
class __TwigTemplate_04c5095a0ad97ea9b9f1d2db72a7126d extends Twig_Template
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
\t
\t<form action=\"";
        // line 3
        if (isset($context["action_url"])) { $_action_url_ = $context["action_url"]; } else { $_action_url_ = null; }
        echo twig_escape_filter($this->env, $_action_url_, "html", null, true);
        echo "\" method=\"post\">
\t\t<h1>";
        // line 4
        if (isset($context["action_name"])) { $_action_name_ = $context["action_name"]; } else { $_action_name_ = null; }
        echo twig_escape_filter($this->env, $_action_name_, "html", null, true);
        echo " author</h1>
\t\t
\t\t<p>
\t\t\t<label for=\"nom\">Nom: </label>
\t\t\t<input type=\"text\" name=\"nom\" value=\"";
        // line 8
        if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_author_, "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_author_, "nom"), "")) : ("")), "html", null, true);
        echo "\" id=\"nom\" />
\t\t</p>
\t\t
\t\t<p>
\t\t\t<label for=\"email\">Email: </label>
\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 13
        if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_author_, "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_author_, "email"), "")) : ("")), "html", null, true);
        echo "\" id=\"email\" />
\t\t</p>
\t\t
\t\t<p>
\t\t\t<label for=\"login\">Login: </label>
\t\t\t<input type=\"text\" name=\"login\" value=\"";
        // line 18
        if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_author_, "login", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_author_, "login"), "")) : ("")), "html", null, true);
        echo "\" id=\"login\" />
\t\t</p>\t
\t\t
\t\t<p>
\t\t\t<label for=\"pass\">Password: </label>
\t\t\t<input type=\"password\" name=\"pass\" value=\"";
        // line 23
        if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_author_, "pass", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_author_, "pass"), "")) : ("")), "html", null, true);
        echo "\" id=\"pass\" />
\t\t</p>
\t\t
\t\t<p>
\t\t\t<input type=\"submit\" value=\"";
        // line 27
        if (isset($context["action_name"])) { $_action_name_ = $context["action_name"]; } else { $_action_name_ = null; }
        echo twig_escape_filter($this->env, $_action_name_, "html", null, true);
        echo " Author\" />
\t\t</p>
\t</form>

</div>";
    }

    public function getTemplateName()
    {
        return "author/admin_author_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  63 => 23,  54 => 18,  45 => 13,  36 => 8,  28 => 4,  23 => 3,  19 => 1,);
    }
}
