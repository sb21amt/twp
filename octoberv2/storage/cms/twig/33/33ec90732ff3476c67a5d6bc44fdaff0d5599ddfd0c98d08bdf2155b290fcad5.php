<?php

/* /var/www/html/october/plugins/shapla/aoe3/components/aoeform3/default.htm */
class __TwigTemplate_2a803ef9ce440a48d99960b8250abf325180f45211d55c38e8100a04ddb3d786 extends Twig_Template
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
  <!-- Part 3 of AOE -->
  <form data-request=\"onSend\">

    <br>
    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">TWP To Act?</label>
      <div class=\"col-9\">
      <select class=\"form-control\" name=\"twp_to_act\" style=\"width: 380px\">
        <option></option>
        <option value=\"Yes\">Yes</option>
        <option value=\"No\">No</option>
      </select>
    </div>
    </div><br>

    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">Firm Name</label>
      <div class=\"col-9\">
      <input class=\"form-control\" type=\"text\" name=\"firmname\" placeholder=\"Enter firm name\" style=\"width: 380px\">
    </div>
    </div>

    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">Address Line 1</label>
      <div class=\"col-9\">
      <input class=\"form-control\" type=\"text\" name=\"address1\" placeholder=\"Enter address line 1\" style=\"width: 380px\">
    </div>
    </div>

    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">Address Line 2</label>
      <div class=\"col-9\">
      <input class=\"form-control\" type=\"text\" name=\"address2\" placeholder=\"Enter address line 2\" style=\"width: 380px\">
    </div>
    </div>

    <div class=\"form-group row\" >
      <label class=\"col-3 col-form-label\">Postcode</label>
      <div class=\"col-9\">
      <input class=\"form-control\" type=\"text\" name=\"postcode\" placeholder=\"Enter postcode\" style=\"width: 380px\">
    </div>
    </div>

    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">Phone Number</label>
      <div class=\"col-9\">
      <input class=\"form-control\" type=\"text\" name=\"phone\" placeholder=\"Enter phone number\" style=\"width: 380px\">
    </div>
    </div>


    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">Option</label>
      <div class=\"col-9\">
      <select class=\"form-control\" name=\"option\" style=\"width: 380px\">
        <option></option>
        <option value=\"Sole\">Sole</option>
        <option value=\"Joint\">Joint</option>
        <option value=\"Alternative\">Alternative</option>
      </select>
    </div>
    </div><br>

    <button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Next</button>

  </form>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/shapla/aoe3/components/aoeform3/default.htm";
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
  <!-- Part 3 of AOE -->
  <form data-request=\"onSend\">

    <br>
    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">TWP To Act?</label>
      <div class=\"col-9\">
      <select class=\"form-control\" name=\"twp_to_act\" style=\"width: 380px\">
        <option></option>
        <option value=\"Yes\">Yes</option>
        <option value=\"No\">No</option>
      </select>
    </div>
    </div><br>

    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">Firm Name</label>
      <div class=\"col-9\">
      <input class=\"form-control\" type=\"text\" name=\"firmname\" placeholder=\"Enter firm name\" style=\"width: 380px\">
    </div>
    </div>

    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">Address Line 1</label>
      <div class=\"col-9\">
      <input class=\"form-control\" type=\"text\" name=\"address1\" placeholder=\"Enter address line 1\" style=\"width: 380px\">
    </div>
    </div>

    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">Address Line 2</label>
      <div class=\"col-9\">
      <input class=\"form-control\" type=\"text\" name=\"address2\" placeholder=\"Enter address line 2\" style=\"width: 380px\">
    </div>
    </div>

    <div class=\"form-group row\" >
      <label class=\"col-3 col-form-label\">Postcode</label>
      <div class=\"col-9\">
      <input class=\"form-control\" type=\"text\" name=\"postcode\" placeholder=\"Enter postcode\" style=\"width: 380px\">
    </div>
    </div>

    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">Phone Number</label>
      <div class=\"col-9\">
      <input class=\"form-control\" type=\"text\" name=\"phone\" placeholder=\"Enter phone number\" style=\"width: 380px\">
    </div>
    </div>


    <div class=\"form-group row\">
      <label class=\"col-3 col-form-label\">Option</label>
      <div class=\"col-9\">
      <select class=\"form-control\" name=\"option\" style=\"width: 380px\">
        <option></option>
        <option value=\"Sole\">Sole</option>
        <option value=\"Joint\">Joint</option>
        <option value=\"Alternative\">Alternative</option>
      </select>
    </div>
    </div><br>

    <button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Next</button>

  </form>
", "/var/www/html/october/plugins/shapla/aoe3/components/aoeform3/default.htm", "");
    }
}
