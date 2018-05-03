<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/thank-you.htm */
class __TwigTemplate_391432f978e87e089f56b5c67b1e0a0ffa3eb0d86403c92dae266db5f504dd37 extends Twig_Template
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

   ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("thankyou"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo " <br>

</div>

<br><br><br><br><br><br>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/thank-you.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}
<br><br>
<div class=\"container\">

   {% component 'thankyou' %} <br>

</div>

<br><br><br><br><br><br>", "/var/www/html/october/themes/WillWritingPartnership/pages/thank-you.htm", "");
    }
}
