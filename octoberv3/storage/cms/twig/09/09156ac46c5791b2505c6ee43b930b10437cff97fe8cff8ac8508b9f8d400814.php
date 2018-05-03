<?php

/* /var/www/html/october/themes/WillWritingPartnership/partials/header.htm */
class __TwigTemplate_39af2e026fdc4e2152526083b6b429fa3860069c7f7fd5a7ec6c2957b9430314 extends Twig_Template
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
        echo "<div class=\"navigation\">
    <ul>
        <div class=\"\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("index");
        echo "\"><img class=\"img-fluid menu-logo\" src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/twp-logo.png");
        echo "\"></a>
            <li><a class=\"company-name\" ></a></li>
        </div>

        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("index");
        echo "\">Homepage</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("wills");
        echo "\">Will Writing</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("trusts");
        echo "\">Trust Formation</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("powerofattorney");
        echo "\">Power of Attorney</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("funeral");
        echo "\">Funeral Plans</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("businesswills");
        echo "\">Business Plans</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("probate");
        echo "\">Probate</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact Us</a></li>
        <!-- Change the name from Login to My profile once logged in.-->
        <!-- (October CMS, 2018) -->
        <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "login")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
        echo "\">
        ";
        // line 19
        if ( !($context["user"] ?? null)) {
            echo " 

        Login 

        ";
        } else {
            // line 24
            echo "
        ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "

        ";
        }
        // line 28
        echo "
        </a></li>
        <!-- Show the sign out option if the user is logged in.-->
        ";
        // line 31
        if (($context["user"] ?? null)) {
            // line 32
            echo "        <li><a style=\"color: white;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
        ";
        }
        // line 34
        echo "
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  99 => 32,  97 => 31,  92 => 28,  86 => 25,  83 => 24,  75 => 19,  67 => 18,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navigation\">
    <ul>
        <div class=\"\">
            <a href=\"{{ 'index'|page }}\"><img class=\"img-fluid menu-logo\" src=\"{{ 'assets/images/twp-logo.png'|theme }}\"></a>
            <li><a class=\"company-name\" ></a></li>
        </div>

        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'index'|page }}\">Homepage</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'wills'|page }}\">Will Writing</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'trusts'|page }}\">Trust Formation</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'powerofattorney'|page }}\">Power of Attorney</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'funeral'|page }}\">Funeral Plans</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'businesswills'|page }}\">Business Plans</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'probate'|page }}\">Probate</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact Us</a></li>
        <!-- Change the name from Login to My profile once logged in.-->
        <!-- (October CMS, 2018) -->
        <li class=\"{% if this.page.id == 'login' %}active{% endif %}\"><a href=\"{{ 'account'|page }}\">
        {% if not user %} 

        Login 

        {% else %}

        {{ user.name }}

        {% endif %}

        </a></li>
        <!-- Show the sign out option if the user is logged in.-->
        {% if user %}
        <li><a style=\"color: white;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
        {% endif %}

    </ul>
</div>", "/var/www/html/october/themes/WillWritingPartnership/partials/header.htm", "");
    }
}
