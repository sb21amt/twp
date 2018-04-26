<?php

/* /var/www/html/october/themes/WillWritingPartnership/layouts/default.htm */
class __TwigTemplate_6ae0047f67d3b93ba95e925bdd76c0f20ac84d3675fc0cde72c437a801d48d7b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>The Will Writing Partnership - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Will Writing Partnership\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
        ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 13
        echo "        <link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
    </head>
    <body>

        <!-- Header -->

        <header id=\"layout-header\">
            ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "        </header>

        <div class=\"float-sm\">
            <div class=\"fl-fl float-fb\">
                <i class=\"fa fa-facebook-square fa-2x\"></i>
                <a href=\"https://www.facebook.com/thewillwritingpartnership/\" target=\"_blank\"> Like us!</a>
            </div>
            <div class=\"fl-fl float-tw\">
                <i class=\"fa fa-twitter-square fa-2x\"></i>
                <a href=\"\" target=\"_blank\">Follow us!</a>
            </div>
            <div class=\"fl-fl float-gp\">
                <i class=\"fa fa-youtube-square fa-2x\"></i>
                <a href=\"https://www.youtube.com/channel/UCFlMdIX-VaAiikzcWXeK5JA\" target=\"_blank\">Recommend us!</a>
            </div>
            <div class=\"fl-fl float-rs\">
                <i class=\"fa fa-linkedin-square fa-2x\"></i>
                <a href=\"https://www.linkedin.com/in/antony-brinkman-6614443b/\" target=\"_blank\">Connect us!</a>
            </div>
        </div>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 46
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "        </footer>

        <!-- Scripts -->

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
        <script src=\"https://use.fontawesome.com/9996439db5.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js\"></script>
        <script src=\"";
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/custom.js");
        echo "\"></script>
        <script src=\"";
        // line 61
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>


        ";
        // line 64
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 65
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 66
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/WillWritingPartnership/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 66,  131 => 65,  124 => 64,  118 => 61,  114 => 60,  103 => 51,  99 => 50,  93 => 46,  91 => 45,  66 => 22,  62 => 21,  52 => 14,  47 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>The Will Writing Partnership - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Will Writing Partnership\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"{{ 'assets/images/favicon.ico'|theme }}\" type=\"image/x-icon\">
        {% styles %}
        <link href=\"{{ 'assets/css/bootstrap.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
    </head>
    <body>

        <!-- Header -->

        <header id=\"layout-header\">
            {% partial \"header\" %}
        </header>

        <div class=\"float-sm\">
            <div class=\"fl-fl float-fb\">
                <i class=\"fa fa-facebook-square fa-2x\"></i>
                <a href=\"https://www.facebook.com/thewillwritingpartnership/\" target=\"_blank\"> Like us!</a>
            </div>
            <div class=\"fl-fl float-tw\">
                <i class=\"fa fa-twitter-square fa-2x\"></i>
                <a href=\"\" target=\"_blank\">Follow us!</a>
            </div>
            <div class=\"fl-fl float-gp\">
                <i class=\"fa fa-youtube-square fa-2x\"></i>
                <a href=\"https://www.youtube.com/channel/UCFlMdIX-VaAiikzcWXeK5JA\" target=\"_blank\">Recommend us!</a>
            </div>
            <div class=\"fl-fl float-rs\">
                <i class=\"fa fa-linkedin-square fa-2x\"></i>
                <a href=\"https://www.linkedin.com/in/antony-brinkman-6614443b/\" target=\"_blank\">Connect us!</a>
            </div>
        </div>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial \"footer\" %}
        </footer>

        <!-- Scripts -->

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
        <script src=\"https://use.fontawesome.com/9996439db5.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js\"></script>
        <script src=\"{{ 'assets/javascript/custom.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>


        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/var/www/html/october/themes/WillWritingPartnership/layouts/default.htm", "");
    }
}
