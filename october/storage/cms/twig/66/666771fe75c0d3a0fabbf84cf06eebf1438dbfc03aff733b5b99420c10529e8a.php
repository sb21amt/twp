<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/tc.htm */
class __TwigTemplate_ede7642f561aa8de0e69e793fd0e0fe223e12d0f5e354bebcc55e7615b893042 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<br><br>
<div class=\"container\">
\t";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("tcform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "</div>
<br><br><br><br><br><br>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/tc.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 5,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}

<br><br>
<div class=\"container\">
\t{% component 'tcform' %}
</div>
<br><br><br><br><br><br>", "/var/www/html/october/themes/WillWritingPartnership/pages/tc.htm", "");
    }
}
