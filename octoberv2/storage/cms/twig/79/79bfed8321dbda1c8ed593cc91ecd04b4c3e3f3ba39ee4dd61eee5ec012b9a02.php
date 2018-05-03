<?php

/* /var/www/html/october/plugins/shapla/residualestate/components/residual_estate_form/default.htm */
class __TwigTemplate_0ab3febcfc1f031a57976d60b24dc6b14c9d5fb27d024f3b0540caefc29f8d7e extends Twig_Template
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

\t<!-- Part 1 of Residual Estate -->
\t<br>
\t<form data-request=\"onSend\">

\t\t<div class=\"form-group row\">
        \t<label class=\"col-3 col-form-label\">Any notes on special requirments that call for a trust?</label>
\t        <div class=\"col-9\">
\t          <select class=\"form-control\" name=\"notes\" style=\"width: 300px\">
\t          <option></option>
\t          <option value=\"Yes\">Yes</option>
\t          <option value=\"No\">No</option>
\t          </select>
\t        </div>
      \t</div>

      \t<div class=\"form-group row\">
        \t<label class=\"col-3 col-form-label\">To pass to spouse on 1st death?</label>
\t        <div class=\"col-9\">
\t          <select class=\"form-control\" name=\"pass_to_spouse\" style=\"width: 300px\">
\t          <option></option>
\t          <option value=\"Yes\">Yes</option>
\t          <option value=\"No\">No</option>
\t          </select>
\t        </div>
      \t</div>

      \t<div class=\"form-group row\">
        \t<label class=\"col-3 col-form-label\">Residue to be distubuted in equal propotions?</label>
\t        <div class=\"col-9\">
\t          <select class=\"form-control\" name=\"residue_distribute\" style=\"width: 300px\">
\t          <option></option>
\t          <option value=\"Yes\">Yes</option>
\t          <option value=\"No\">No</option>
\t          </select>
\t        </div>
      \t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">NON PROVISION CLAUSE: Has anyone been specifically excluded from the will? if so who?</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"who\" placeholder=\"Enter yes or no with details\" style=\"width: 300px\">
\t\t\t</div>
\t\t</div><br>

\t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Next</button>

\t</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/shapla/residualestate/components/residual_estate_form/default.htm";
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

\t<!-- Part 1 of Residual Estate -->
\t<br>
\t<form data-request=\"onSend\">

\t\t<div class=\"form-group row\">
        \t<label class=\"col-3 col-form-label\">Any notes on special requirments that call for a trust?</label>
\t        <div class=\"col-9\">
\t          <select class=\"form-control\" name=\"notes\" style=\"width: 300px\">
\t          <option></option>
\t          <option value=\"Yes\">Yes</option>
\t          <option value=\"No\">No</option>
\t          </select>
\t        </div>
      \t</div>

      \t<div class=\"form-group row\">
        \t<label class=\"col-3 col-form-label\">To pass to spouse on 1st death?</label>
\t        <div class=\"col-9\">
\t          <select class=\"form-control\" name=\"pass_to_spouse\" style=\"width: 300px\">
\t          <option></option>
\t          <option value=\"Yes\">Yes</option>
\t          <option value=\"No\">No</option>
\t          </select>
\t        </div>
      \t</div>

      \t<div class=\"form-group row\">
        \t<label class=\"col-3 col-form-label\">Residue to be distubuted in equal propotions?</label>
\t        <div class=\"col-9\">
\t          <select class=\"form-control\" name=\"residue_distribute\" style=\"width: 300px\">
\t          <option></option>
\t          <option value=\"Yes\">Yes</option>
\t          <option value=\"No\">No</option>
\t          </select>
\t        </div>
      \t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">NON PROVISION CLAUSE: Has anyone been specifically excluded from the will? if so who?</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"who\" placeholder=\"Enter yes or no with details\" style=\"width: 300px\">
\t\t\t</div>
\t\t</div><br>

\t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Next</button>

\t</form>", "/var/www/html/october/plugins/shapla/residualestate/components/residual_estate_form/default.htm", "");
    }
}
