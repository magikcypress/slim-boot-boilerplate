<?php

/* author/admin_author_form.html */
class __TwigTemplate_a96134364c7c6ddbf0a1fba124632efd extends Twig_Template
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
        echo "
\t<form action=\"";
        // line 2
        if (isset($context["action_url"])) { $_action_url_ = $context["action_url"]; } else { $_action_url_ = null; }
        echo twig_escape_filter($this->env, $_action_url_, "html", null, true);
        echo "\" method=\"post\">
\t\t<h1>";
        // line 3
        if (isset($context["action_name"])) { $_action_name_ = $context["action_name"]; } else { $_action_name_ = null; }
        echo twig_escape_filter($this->env, $_action_name_, "html", null, true);
        echo " author</h1>
\t\t
\t\t<p>
\t\t\t<label for=\"nom\">Nom: </label>
\t\t\t<input type=\"text\" name=\"nom\" value=\"";
        // line 7
        if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_author_, "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_author_, "nom"), "")) : ("")), "html", null, true);
        echo "\" id=\"nom\" />
\t\t</p>
\t\t
\t\t<p>
\t\t\t<label for=\"email\">Email: </label>
\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 12
        if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_author_, "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_author_, "email"), "")) : ("")), "html", null, true);
        echo "\" id=\"email\" />
\t\t</p>
\t\t
\t\t<p>
\t\t\t<label for=\"login\">Login: </label>
\t\t\t<input type=\"text\" name=\"login\" value=\"";
        // line 17
        if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_author_, "login", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_author_, "login"), "")) : ("")), "html", null, true);
        echo "\" id=\"login\" />
\t\t</p>\t
\t\t
\t\t<p>
\t\t\t<label for=\"pass\">Password: </label>
\t\t\t<input type=\"password\" name=\"pass\" value=\"";
        // line 22
        if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_author_, "pass", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_author_, "pass"), "")) : ("")), "html", null, true);
        echo "\" id=\"pass\" />
\t\t</p>
\t\t
\t\t<p>
\t\t\t<input type=\"hidden\" name=\"";
        // line 26
        if (isset($context["csrf_key"])) { $_csrf_key_ = $context["csrf_key"]; } else { $_csrf_key_ = null; }
        echo twig_escape_filter($this->env, $_csrf_key_, "html", null, true);
        echo "\" value=\"";
        if (isset($context["csrf_token"])) { $_csrf_token_ = $context["csrf_token"]; } else { $_csrf_token_ = null; }
        echo $_csrf_token_;
        echo "\">
\t\t\t<input type=\"submit\" value=\"";
        // line 27
        if (isset($context["action_name"])) { $_action_name_ = $context["action_name"]; } else { $_action_name_ = null; }
        echo twig_escape_filter($this->env, $_action_name_, "html", null, true);
        echo " Author\" />
\t\t</p>
\t</form>";
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
        return array (  78 => 27,  70 => 26,  62 => 22,  53 => 17,  44 => 12,  35 => 7,  27 => 3,  22 => 2,  19 => 1,);
    }
}
