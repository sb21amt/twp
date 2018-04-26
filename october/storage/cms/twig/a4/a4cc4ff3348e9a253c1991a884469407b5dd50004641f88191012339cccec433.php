<?php

/* /var/www/html/october/plugins/shapla/aoe/components/aoeform/default.htm */
class __TwigTemplate_5ff43414d3e757b0ffb63dbdc8614ecdf5c28f20c9d27085620e6054b8a519a5 extends Twig_Template
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
        echo "<body background=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/form-background.png");
        echo "\">
\t<h3>Terms and Conditions</h3><br>

\t<!-- Part 1 of AOE -->
\t<form data-request=\"onSend\">

\t\t<br>
\t\t<div class=\"form-group\">
\t\t<label class=\"font-size\">Spouse to be executor</label>
\t\t\t<select class=\"form-control\" name=\"spouse_to_be_executor\" style=\"width: 80px\">
\t\t\t\t<option></option>
\t\t\t\t<option value=\"Yes\">Yes</option>
\t\t\t\t<option value=\"No\">No</option>
\t\t\t</select>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t<label class=\"font-size\">Sole or joint</label>
\t\t\t<select class=\"form-control\" name=\"sole_or_joint\" style=\"width: 80px\">
\t\t\t\t<option></option>
\t\t\t\t<option value=\"Sole\">Sole</option>
\t\t\t\t<option value=\"Joint\">Joint</option>
\t\t\t</select>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t<label class=\"font-size\">Mirror executor</label>
\t\t\t<select class=\"form-control\" name=\"mirror_executor\" style=\"width: 80px\">
\t\t\t\t<option></option>
\t\t\t\t<option value=\"Yes\">Yes</option>
\t\t\t\t<option value=\"No\">No</option>
\t\t\t</select>
\t\t</div>


\t\t<div>
\t\t\t<br>
\t  \t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Next</button>
\t\t</div>

\t</form>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/shapla/aoe/components/aoeform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body background=\"{{ 'assets/images/form-background.png'|theme }}\">
\t<h3>Terms and Conditions</h3><br>

\t<!-- Part 1 of AOE -->
\t<form data-request=\"onSend\">

\t\t<br>
\t\t<div class=\"form-group\">
\t\t<label class=\"font-size\">Spouse to be executor</label>
\t\t\t<select class=\"form-control\" name=\"spouse_to_be_executor\" style=\"width: 80px\">
\t\t\t\t<option></option>
\t\t\t\t<option value=\"Yes\">Yes</option>
\t\t\t\t<option value=\"No\">No</option>
\t\t\t</select>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t<label class=\"font-size\">Sole or joint</label>
\t\t\t<select class=\"form-control\" name=\"sole_or_joint\" style=\"width: 80px\">
\t\t\t\t<option></option>
\t\t\t\t<option value=\"Sole\">Sole</option>
\t\t\t\t<option value=\"Joint\">Joint</option>
\t\t\t</select>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t<label class=\"font-size\">Mirror executor</label>
\t\t\t<select class=\"form-control\" name=\"mirror_executor\" style=\"width: 80px\">
\t\t\t\t<option></option>
\t\t\t\t<option value=\"Yes\">Yes</option>
\t\t\t\t<option value=\"No\">No</option>
\t\t\t</select>
\t\t</div>


\t\t<div>
\t\t\t<br>
\t  \t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Next</button>
\t\t</div>

\t</form>

", "/var/www/html/october/plugins/shapla/aoe/components/aoeform/default.htm", "");
    }
}
