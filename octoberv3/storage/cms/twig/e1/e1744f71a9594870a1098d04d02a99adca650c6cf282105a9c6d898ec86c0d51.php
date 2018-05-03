<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/user.htm */
class __TwigTemplate_d652a0dbd87436a831afec7a9ddec07c2b4363549901e866709ca0d34de3b7f5 extends Twig_Template
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
        echo "<div class=\"container\">
    ";
        // line 2
        if (($context["user"] ?? null)) {
            // line 3
            echo "    <h1>Hello ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 5
            echo "    <h2>sausages</h2>
    ";
        }
        // line 7
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "    <h3>Welcome To Your User Area</h3>
</div>

<hr>

<div class=\"container\">
    <h3>Account Details</h3>

    <p>This is a demo of the user area, this can contain anything you like.</p>
    <h3>Online Will</h3>
    <p>This is a demo of the user area, this can contain anything you like.</p>
</div>


<div class=\"container\">
    <a data-request=\"onLogout\" data-request-data=\"redirect: '/account'\">Sign out</a>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/user.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    {% if user %}
    <h1>Hello {{ user.name }}</h1>
    {% else %}
    <h2>sausages</h2>
    {% endif %}
    {% component 'account' %}
    <h3>Welcome To Your User Area</h3>
</div>

<hr>

<div class=\"container\">
    <h3>Account Details</h3>

    <p>This is a demo of the user area, this can contain anything you like.</p>
    <h3>Online Will</h3>
    <p>This is a demo of the user area, this can contain anything you like.</p>
</div>


<div class=\"container\">
    <a data-request=\"onLogout\" data-request-data=\"redirect: '/account'\">Sign out</a>
</div>", "/var/www/html/october/themes/WillWritingPartnership/pages/user.htm", "");
    }
}
