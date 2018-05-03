<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/login.htm */
class __TwigTemplate_7b257ec3fe9e8e9ba719b9b547d9669afa07c644fe2e8c0988afdf7e50a6a157 extends Twig_Template
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
        echo "<br><br><br>
<div class=\"container\">
    ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "</div>
<br><br><br><br><br><br>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<br><br><br>
<div class=\"container\">
    {% component 'account' %}
</div>
<br><br><br><br><br><br>", "/var/www/html/october/themes/WillWritingPartnership/pages/login.htm", "");
    }
}
