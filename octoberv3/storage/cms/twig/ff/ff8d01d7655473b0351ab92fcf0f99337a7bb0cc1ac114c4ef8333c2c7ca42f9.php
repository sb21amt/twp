<?php

/* /var/www/html/october/themes/WillWritingPartnership/layouts/fallback.htm */
class __TwigTemplate_3022877d37278d92ad44f0fc19f62cc5e33eb620cab7de32de3151017d57d4a9 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/var/www/html/october/themes/WillWritingPartnership/layouts/fallback.htm", "");
    }
}
