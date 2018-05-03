<?php

/* /var/www/html/october/plugins/rainlab/user/components/resetpassword/reset.htm */
class __TwigTemplate_52ec4a7f04dfb0530f31641ea6848d2505b0b4175e75d9e027b7b4e002bc78ae extends Twig_Template
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
        echo "<p class=\"lead\">
    Please check your email for the activation code.
</p>

<form
    data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onResetPassword\"
    data-request-update=\"'";
        // line 7
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::complete': '#partialUserResetForm'\">
    <div class=\"form-group\">
        <label for=\"resetCode\">Activation Code</label>
        <input name=\"code\" type=\"text\" class=\"form-control\" id=\"resetCode\" placeholder=\"Enter the activation code\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "code", array()), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"resetPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"resetPassword\" placeholder=\"Enter a new password\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Reset password</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/rainlab/user/components/resetpassword/reset.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p class=\"lead\">
    Please check your email for the activation code.
</p>

<form
    data-request=\"{{ __SELF__ }}::onResetPassword\"
    data-request-update=\"'{{ __SELF__ }}::complete': '#partialUserResetForm'\">
    <div class=\"form-group\">
        <label for=\"resetCode\">Activation Code</label>
        <input name=\"code\" type=\"text\" class=\"form-control\" id=\"resetCode\" placeholder=\"Enter the activation code\" value=\"{{ __SELF__.code }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"resetPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"resetPassword\" placeholder=\"Enter a new password\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Reset password</button>
</form>
", "/var/www/html/october/plugins/rainlab/user/components/resetpassword/reset.htm", "");
    }
}
