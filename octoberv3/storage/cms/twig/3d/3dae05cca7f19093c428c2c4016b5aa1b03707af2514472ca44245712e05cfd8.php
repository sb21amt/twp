<?php

/* /var/www/html/october/themes/WillWritingPartnership/pages/account.htm */
class __TwigTemplate_6582fbfa79d0929311339da9d5790310ce83917729b2a035c2c894621de90720 extends Twig_Template
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
        echo "<br><br><br>
<div class=\"container\">
    ";
        // line 3
        if ( !($context["user"] ?? null)) {
            // line 4
            echo "
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            ";
            // line 9
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "            <br>
            <p><a class =\"fgt-psswd\" href=\"";
            // line 11
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("forgot-password");
            echo "\">Forgotten your password?</a></p>
        </div>

        <div class=\"col-md-6\">
            <h3>Register</h3>
            ";
            // line 16
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 17
            echo "        </div>

    </div>

";
        } else {
            // line 22
            echo "
    ";
            // line 23
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 24
            echo "
    ";
            // line 25
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "
    ";
            // line 27
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 28
            echo "
";
        }
        // line 30
        echo "</div>

<br><br><br><br><br><br>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  79 => 28,  75 => 27,  72 => 26,  68 => 25,  65 => 24,  61 => 23,  58 => 22,  51 => 17,  47 => 16,  39 => 11,  36 => 10,  32 => 9,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<br><br><br>
<div class=\"container\">
    {% if not user %}

    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            {% partial account ~ '::signin' %}
            <br>
            <p><a class =\"fgt-psswd\" href=\"{{ 'forgot-password'|page }}\">Forgotten your password?</a></p>
        </div>

        <div class=\"col-md-6\">
            <h3>Register</h3>
            {% partial account ~ '::register' %}
        </div>

    </div>

{% else %}

    {% partial account ~ '::activation_check' %}

    {% partial account ~ '::update' %}

    {% partial account ~ '::deactivate_link' %}

{% endif %}
</div>

<br><br><br><br><br><br>", "/var/www/html/october/themes/WillWritingPartnership/pages/account.htm", "");
    }
}
