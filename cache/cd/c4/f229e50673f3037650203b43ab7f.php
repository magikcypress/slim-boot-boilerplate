<?php

/* contact/contact_form.html */
class __TwigTemplate_cdc4f229e50673f3037650203b43ab7f extends Twig_Template
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
\t\t<input type=\"submit\" value=\"";
        // line 19
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
        return array (  42 => 19,  19 => 1,);
    }
}
