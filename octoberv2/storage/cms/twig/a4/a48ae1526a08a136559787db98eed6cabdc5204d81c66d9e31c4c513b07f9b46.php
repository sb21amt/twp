<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/aoe2.htm */
class __TwigTemplate_9b934b3cef59c86809fca8f3a37319d36e8acae5f285e27a379c14f5b6d17fc3 extends Twig_Template
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
        <h2>Appointment of Executor Form - Part 2</h2>
    </div>
   ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("aoeform2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "</div>
<br><br><br><br><br><br>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/aoe2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 7,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}
<br><br>
<div class=\"container\">
    <div class=\"page-header\">
        <h2>Appointment of Executor Form - Part 2</h2>
    </div>
   {% component 'aoeform2' %}
</div>
<br><br><br><br><br><br>", "/var/www/html/october/themes/WillWritingPartnership/pages/aoe2.htm", "");
    }
}
