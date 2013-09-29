<?php

/* contact/contact_form.html */
class __TwigTemplate_388b2d819ff7811e1810fd719436e81c extends Twig_Template
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
        echo "<form action=\"";
        if (isset($context["action_url"])) { $_action_url_ = $context["action_url"]; } else { $_action_url_ = null; }
        echo twig_escape_filter($this->env, $_action_url_, "html", null, true);
        echo "\" method=\"post\">
\t
\t<p>
\t\t<label for=\"email\">Email: </label>
\t\t<input type=\"text\" name=\"email\" value=\"\" id=\"email\" />
\t</p>

\t<p>
\t\t<label for=\"subject\">Subject: </label>
\t\t<input type=\"text\" name=\"subject\" value=\"\" id=\"subject\" />
\t</p>
\t
\t<p>
\t\t<label for=\"message\">Message: </label>
\t\t<textarea name=\"message\" id=\"message\" class=\"editable\"></textarea>
\t</p>
\t
\t<p>
\t\t<input type=\"hidden\" name=\"";
        // line 19
        if (isset($context["csrf_key"])) { $_csrf_key_ = $context["csrf_key"]; } else { $_csrf_key_ = null; }
        echo twig_escape_filter($this->env, $_csrf_key_, "html", null, true);
        echo "\" value=\"";
        if (isset($context["csrf_token"])) { $_csrf_token_ = $context["csrf_token"]; } else { $_csrf_token_ = null; }
        echo $_csrf_token_;
        echo "\">
\t\t<input type=\"submit\" value=\"";
        // line 20
        if (isset($context["action_name"])) { $_action_name_ = $context["action_name"]; } else { $_action_name_ = null; }
        echo twig_escape_filter($this->env, $_action_name_, "html", null, true);
        echo "\" />
\t</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "contact/contact_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 20,  42 => 19,  19 => 1,);
    }
}
