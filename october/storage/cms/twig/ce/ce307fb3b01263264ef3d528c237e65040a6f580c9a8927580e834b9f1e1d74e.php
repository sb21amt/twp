<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/funeralarrangement.htm */
class __TwigTemplate_d0f2ec06d024fe594db806b2ce333c616e2fb6b25b1fef92c46b2bd62387225e extends Twig_Template
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
        echo "<br>
<div class=\"container\">

    <div class=\"page-header\">
        <h2>Funeral Arrangments Form - Part 4</h2>
    </div><br>
  ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("funeralarrangmentsform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "</div>
<br><br><br><br><br><br>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/funeralarrangement.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}<br>
<div class=\"container\">

    <div class=\"page-header\">
        <h2>Funeral Arrangments Form - Part 4</h2>
    </div><br>
  {% component 'funeralarrangmentsform' %}
</div>
<br><br><br><br><br><br>", "/var/www/html/october/themes/WillWritingPartnership/pages/funeralarrangement.htm", "");
    }
}
