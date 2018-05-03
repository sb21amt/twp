<?php

/* /var/www/html/october/plugins/shapla/legacies2/components/legacies2/default.htm */
class __TwigTemplate_10cfcc1f05a40841b47fb87485f056110f0f3598b2cb3a6b0ab599a08eec7e03 extends Twig_Template
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

\t<div class=\"row\">
    <div class=\"span6\">
\t<br><p>If yes, please make full notes of who has been promised what property.</p><br>

\t<!-- Part 1 of Legacies -->
\t<form data-request=\"onSend\">

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Description Of Gift:</label>
\t\t\t<div class=\"col-9\">
\t\t\t<textarea class=\"form-control\" name=\"description_of_gift\" placeholder=\"Enter the description\" style=\"width: 380px\"></textarea>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Owned By:</label>
        <div class=\"col-9\">
          <select class=\"form-control\" name=\"owned\" style=\"width: 380px\">
          <option></option>
          <option value=\"Testator 1: Own Death\">Testator 1: Own Death</option>
          <option value=\"Testator 2: Own Death\"\">Testator 2: Own Death\"</option>
          <option value=\"Jointly: 2nd Death\">Jointly: 2nd Death</option>
          </select>
        </div>
      </div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">To:</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"testator1\" placeholder=\"Enter testator 1\" style=\"width: 380px\"><br>
\t\t\t<input class=\"form-control\" type=\"text\" name=\"testator2\" placeholder=\"Enter testator 2\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>
\t</div>


    <div class=\"span6\"><br><br><br><br>
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
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t\t<div class=\"col-3\">
\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-primary\">Add</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>

\t</form>

\t<a href=\"";
        // line 106
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("residual-estate");
        echo " \" class=\"btn btn-lg btn-outline-danger\">Next</a>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/shapla/legacies2/components/legacies2/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 106,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body background=\"{{ 'assets/images/form-background.png'|theme }}\">

\t<div class=\"row\">
    <div class=\"span6\">
\t<br><p>If yes, please make full notes of who has been promised what property.</p><br>

\t<!-- Part 1 of Legacies -->
\t<form data-request=\"onSend\">

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">Description Of Gift:</label>
\t\t\t<div class=\"col-9\">
\t\t\t<textarea class=\"form-control\" name=\"description_of_gift\" placeholder=\"Enter the description\" style=\"width: 380px\"></textarea>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Owned By:</label>
        <div class=\"col-9\">
          <select class=\"form-control\" name=\"owned\" style=\"width: 380px\">
          <option></option>
          <option value=\"Testator 1: Own Death\">Testator 1: Own Death</option>
          <option value=\"Testator 2: Own Death\"\">Testator 2: Own Death\"</option>
          <option value=\"Jointly: 2nd Death\">Jointly: 2nd Death</option>
          </select>
        </div>
      </div>

\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-3 col-form-label\">To:</label>
\t\t\t<div class=\"col-9\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"testator1\" placeholder=\"Enter testator 1\" style=\"width: 380px\"><br>
\t\t\t<input class=\"form-control\" type=\"text\" name=\"testator2\" placeholder=\"Enter testator 2\" style=\"width: 380px\">
\t\t\t</div>
\t\t</div>
\t</div>


    <div class=\"span6\"><br><br><br><br>
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
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t\t<div class=\"col-3\">
\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-primary\">Add</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>

\t</form>

\t<a href=\"{{ 'residual-estate'|page }} \" class=\"btn btn-lg btn-outline-danger\">Next</a>

", "/var/www/html/october/plugins/shapla/legacies2/components/legacies2/default.htm", "");
    }
}
