<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/legacies-2.htm */
class __TwigTemplate_feeab642f2ca4ad0af1dc57688e6f989dfe133d05b0504c2e5df5b57f7a5f852 extends Twig_Template
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
        <h2>Legacies Form - Part 1</h2>
    </div>
  ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("legacies2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/legacies-2.htm";
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
        <h2>Legacies Form - Part 1</h2>
    </div>
  {% component 'legacies2' %}
</div>", "/var/www/html/october/themes/WillWritingPartnership/pages/legacies-2.htm", "");
    }
}
