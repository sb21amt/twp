<?php

/* /var/www/html/october/plugins/shapla/reservebeneficiary/components/reservebeneficiaryform/default.htm */
class __TwigTemplate_b4497381c20d6748dd92d5c946d9174d0d99b7aca66c3c105e502bc209c845a4 extends Twig_Template
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
        echo "\"><br>

\t<div class=\"row\">
\t\t<div class=\"span6\">
\t<!-- Part 2 of Residual Estate -->
\t<form data-request=\"onSend\">

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Testator Relationship:</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"testator1\" placeholder=\"Enter testator 1\" style=\"width: 380px\"><br>
\t\t\t<input class=\"form-control\" type=\"text\" name=\"testator2\" placeholder=\"Enter testator 2\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Firstname</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"firstname\" placeholder=\"Enter firstname\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Lastname</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"lastname\" placeholder=\"Enter lastname\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>
\t</div>


\t\t<div class=\"span6\">
\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Address Line 1</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"address1\" placeholder=\"Enter address line 1\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Address Line 2</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"address2\" placeholder=\"Enter address line 2\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">City</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"city\" placeholder=\"Enter city\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\" >
\t\t\t<label class=\"col-3 col-form-label\">Postcode</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"postcode\" placeholder=\"Enter postcode\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Mobile Number</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"mobile\" placeholder=\"Enter mobile number\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Home Number</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"home\" placeholder=\"Enter home number\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Share To Beneficiary:</label>
\t\t\t<div class=\"col-5\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"share_to_beneficiary\" placeholder=\"Enter beneficiary\" style=\"width: 150px\">
\t\t\t</div>
\t\t\t<div class=\"col-4\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"share_age\" placeholder=\"Enter age\" style=\"width: 150px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
        \t<label class=\"col-3 col-form-label\">Or To Issue?</label>
\t        <div class=\"col-5\">
\t          <select class=\"form-control\" name=\"issue\" style=\"width: 150px\">
\t          <option></option>
\t          <option value=\"Yes\">Yes</option>
\t          <option value=\"No\">No</option>
\t          </select>
\t        </div>
\t        <div class=\"col-4\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"issue_age\" placeholder=\"Enter age\" style=\"width: 150px\">
\t\t\t</div>
      \t</div><br>

\t\t<div class=\"form-group row\">
\t\t\t<div class=\"col-3\">
\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-primary\">Add Reserved Beneficiary</button>
\t\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t\t<div class=\"col-6\">
\t\t\t<a href=\"";
        // line 107
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("beneficiary");
        echo "\">Click here to beneficiary!</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>

\t</form>

\t<br><hr><br>

\t

\t<div class=\"form-group row\">
\t<div class=\"col-3\">
\t<a href=\"";
        // line 121
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("funeralarrangement");
        echo "\" class=\"btn btn-lg btn-outline-danger\">Next</a><br><br>
\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/shapla/reservebeneficiary/components/reservebeneficiaryform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 121,  129 => 107,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body background=\"{{ 'assets/images/form-background.png'|theme }}\"><br>

\t<div class=\"row\">
\t\t<div class=\"span6\">
\t<!-- Part 2 of Residual Estate -->
\t<form data-request=\"onSend\">

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Testator Relationship:</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"testator1\" placeholder=\"Enter testator 1\" style=\"width: 380px\"><br>
\t\t\t<input class=\"form-control\" type=\"text\" name=\"testator2\" placeholder=\"Enter testator 2\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Firstname</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"firstname\" placeholder=\"Enter firstname\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Lastname</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"lastname\" placeholder=\"Enter lastname\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>
\t</div>


\t\t<div class=\"span6\">
\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Address Line 1</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"address1\" placeholder=\"Enter address line 1\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Address Line 2</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"address2\" placeholder=\"Enter address line 2\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">City</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"city\" placeholder=\"Enter city\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\" >
\t\t\t<label class=\"col-3 col-form-label\">Postcode</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"postcode\" placeholder=\"Enter postcode\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Mobile Number</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"mobile\" placeholder=\"Enter mobile number\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Home Number</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"home\" placeholder=\"Enter home number\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Share To Beneficiary:</label>
\t\t\t<div class=\"col-5\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"share_to_beneficiary\" placeholder=\"Enter beneficiary\" style=\"width: 150px\">
\t\t\t</div>
\t\t\t<div class=\"col-4\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"share_age\" placeholder=\"Enter age\" style=\"width: 150px\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
        \t<label class=\"col-3 col-form-label\">Or To Issue?</label>
\t        <div class=\"col-5\">
\t          <select class=\"form-control\" name=\"issue\" style=\"width: 150px\">
\t          <option></option>
\t          <option value=\"Yes\">Yes</option>
\t          <option value=\"No\">No</option>
\t          </select>
\t        </div>
\t        <div class=\"col-4\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"issue_age\" placeholder=\"Enter age\" style=\"width: 150px\">
\t\t\t</div>
      \t</div><br>

\t\t<div class=\"form-group row\">
\t\t\t<div class=\"col-3\">
\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-primary\">Add Reserved Beneficiary</button>
\t\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t\t<div class=\"col-6\">
\t\t\t<a href=\"{{ 'beneficiary'|page }}\">Click here to beneficiary!</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>

\t</form>

\t<br><hr><br>

\t

\t<div class=\"form-group row\">
\t<div class=\"col-3\">
\t<a href=\"{{ 'funeralarrangement'|page }}\" class=\"btn btn-lg btn-outline-danger\">Next</a><br><br>
\t</div>
\t</div>
", "/var/www/html/october/plugins/shapla/reservebeneficiary/components/reservebeneficiaryform/default.htm", "");
    }
}
