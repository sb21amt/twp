<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/beneficiary.htm */
class __TwigTemplate_a8860cf105b41888399b636ff64bcdebda7dca7da7c9eecccb3dc2ed44e1c56f extends Twig_Template
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
        <h2>Residual Estate Form - Part 2</h2>
    </div>
     ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("beneficiaryform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/beneficiary.htm";
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
        <h2>Residual Estate Form - Part 2</h2>
    </div>
     {% component 'beneficiaryform' %}
</div>", "/var/www/html/october/themes/WillWritingPartnership/pages/beneficiary.htm", "");
    }
}
