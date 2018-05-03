<?php

/* /var/www/html/october/plugins/shapla/aoe2/components/aoeform2/default.htm */
class __TwigTemplate_a115978d751c35e3bce7413a71a2bff95927028369bf0f80225a09c83d6249fc extends Twig_Template
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
  <br><h5>You can only add up to 4 testators.</h5><br><br>

  <div class=\"row\">
    <div class=\"span6\">
      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Relationship to Testator:</label>
        <div class=\"col-9\">
          <input class=\"form-control\" type=\"text\" name=\"testator1\" placeholder=\"Enter testator 1\" style=\"width: 380px\"><br>
          <input class=\"form-control\" type=\"text\" name=\"testator2\" placeholder=\"Enter testator 2\" style=\"width: 380px\">
        </div>
      </div><br>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Title</label>
        <div class=\"col-9\">
          <select class=\"form-control\" name=\"title\" style=\"width: 380px\">
          <option></option>
          <option value=\"Mr\">Mr</option>
          <option value=\"Mrs\">Mrs</option>
          <option value=\"Miss\">Miss</option>
          <option value=\"Ms\">Ms</option>
          <option value=\"Other\">Other</option>
          </select>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Firstname</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"firstname\" placeholder=\"Enter firstname\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Lastname</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"lastname\" placeholder=\"Enter lastname\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Mobile Number</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"mobile\" placeholder=\"Enter mobile number\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Home Number</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"home\" placeholder=\"Enter home number\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Type</label>
        <div class=\"col-9\">
        <select class=\"form-control\" name=\"type\" style=\"width: 380px\">
          <option></option>
          <option value=\"Sole\">Sole</option>
          <option value=\"Joint\">Joint</option>
          <option value=\"Alternative\">Alternative</option>
        </select>
      </div>
      </div>
    </div>

    <div class=\"span6\">
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

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">City</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"city\" placeholder=\"Enter city\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\" >
        <label class=\"col-3 col-form-label\">Postcode</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"postcode\" placeholder=\"Enter postcode\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\">
        <div class=\"col-4\">
        <button type=\"submit\" class=\"btn btn-lg btn-outline-primary\">Add</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Part 2 of AOE -->
    <form data-request=\"onSend\">

    </form>

    <br><hr><br>

    <a href=\"";
        // line 113
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("aoe3");
        echo "\" class=\"btn btn-lg btn-outline-danger\">Next</a><br><br>
    
    </div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/shapla/aoe2/components/aoeform2/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 113,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body background=\"{{ 'assets/images/form-background.png'|theme }}\">
  <br><h5>You can only add up to 4 testators.</h5><br><br>

  <div class=\"row\">
    <div class=\"span6\">
      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Relationship to Testator:</label>
        <div class=\"col-9\">
          <input class=\"form-control\" type=\"text\" name=\"testator1\" placeholder=\"Enter testator 1\" style=\"width: 380px\"><br>
          <input class=\"form-control\" type=\"text\" name=\"testator2\" placeholder=\"Enter testator 2\" style=\"width: 380px\">
        </div>
      </div><br>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Title</label>
        <div class=\"col-9\">
          <select class=\"form-control\" name=\"title\" style=\"width: 380px\">
          <option></option>
          <option value=\"Mr\">Mr</option>
          <option value=\"Mrs\">Mrs</option>
          <option value=\"Miss\">Miss</option>
          <option value=\"Ms\">Ms</option>
          <option value=\"Other\">Other</option>
          </select>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Firstname</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"firstname\" placeholder=\"Enter firstname\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Lastname</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"lastname\" placeholder=\"Enter lastname\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Mobile Number</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"mobile\" placeholder=\"Enter mobile number\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Home Number</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"home\" placeholder=\"Enter home number\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">Type</label>
        <div class=\"col-9\">
        <select class=\"form-control\" name=\"type\" style=\"width: 380px\">
          <option></option>
          <option value=\"Sole\">Sole</option>
          <option value=\"Joint\">Joint</option>
          <option value=\"Alternative\">Alternative</option>
        </select>
      </div>
      </div>
    </div>

    <div class=\"span6\">
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

      <div class=\"form-group row\">
        <label class=\"col-3 col-form-label\">City</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"city\" placeholder=\"Enter city\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\" >
        <label class=\"col-3 col-form-label\">Postcode</label>
        <div class=\"col-9\">
        <input class=\"form-control\" type=\"text\" name=\"postcode\" placeholder=\"Enter postcode\" style=\"width: 380px\">
      </div>
      </div>

      <div class=\"form-group row\">
        <div class=\"col-4\">
        <button type=\"submit\" class=\"btn btn-lg btn-outline-primary\">Add</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Part 2 of AOE -->
    <form data-request=\"onSend\">

    </form>

    <br><hr><br>

    <a href=\"{{ 'aoe3'|page }}\" class=\"btn btn-lg btn-outline-danger\">Next</a><br><br>
    
    </div>
", "/var/www/html/october/plugins/shapla/aoe2/components/aoeform2/default.htm", "");
    }
}
