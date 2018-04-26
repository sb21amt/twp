<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/aoe.htm */
class __TwigTemplate_e168b501319cc1de9cf8d65eff50ac3b74407e5a000756b896cb243f9e5f1735 extends Twig_Template
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
        echo "<br><br>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Appointment of Executor Form - Part 1</h2>
    </div>
   ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("aoeform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "</div>
<br><br><br><br><br><br>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/aoe.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  32 => 9,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}
<br><br>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Appointment of Executor Form - Part 1</h2>
    </div>
   {% component 'aoeform' %}
</div>
<br><br><br><br><br><br>", "/var/www/html/october/themes/WillWritingPartnership/pages/aoe.htm", "");
    }
}
