<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/forgot-password.htm */
class __TwigTemplate_c751b16257b9875f292cb4a4a9c63517f83286586418afcca7b9db798e6ac8c6 extends Twig_Template
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
        echo "<br><br>
<div class=\"container\">

";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resetPassword"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "
<hr />

<p><a href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
        echo "\">Go back to Sign in</a></p>
</div>
<br><br><br><br><br><br>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/forgot-password.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<br><br>
<div class=\"container\">

{% component 'resetPassword' %}

<hr />

<p><a href=\"{{ 'account'|page }}\">Go back to Sign in</a></p>
</div>
<br><br><br><br><br><br>", "/var/www/html/october/themes/WillWritingPartnership/pages/forgot-password.htm", "");
    }
}
