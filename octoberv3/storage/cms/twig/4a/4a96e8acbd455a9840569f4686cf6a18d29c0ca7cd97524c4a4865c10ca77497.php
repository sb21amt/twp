<?php

/* /var/www/html/october/plugins/rainlab/user/components/account/update.htm */
class __TwigTemplate_478899f872f602257b3f5eb2c0ef4c49c888a141f522fd063bc869f51daf703a extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onUpdate", array("model" => ($context["user"] ?? null))));
        echo "

    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 5
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "name"));
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 10
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "email"));
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPasswordConfirm\">Confirm New Password</label>
        <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Save</button>

";
        // line 25
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/rainlab/user/components/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 25,  34 => 10,  26 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_ajax('onUpdate', { model: user }) }}

    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ form_value('name') }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ form_value('email') }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPasswordConfirm\">Confirm New Password</label>
        <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Save</button>

{{ form_close() }}", "/var/www/html/october/plugins/rainlab/user/components/account/update.htm", "");
    }
}
