<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/aoe3.htm */
class __TwigTemplate_f7a1f311c2b1d567100d69d84b53e981364b8fa0a7ecaa9df30458cf6ff984ad extends Twig_Template
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
        <h2>Professional Executor Form - Part 3</h2>
    </div>
   ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("aoeform3"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "</div>
<br><br><br><br><br><br>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/aoe3.htm";
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
        <h2>Professional Executor Form - Part 3</h2>
    </div>
   {% component 'aoeform3' %}
</div>
<br><br><br><br><br><br>", "/var/www/html/october/themes/WillWritingPartnership/pages/aoe3.htm", "");
    }
}
