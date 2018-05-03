<?php

/* /var/www/html/october/plugins/shapla/legacies1/components/legacies1/default.htm */
class __TwigTemplate_0aa36838c46f511a7143ce14c8fa6fd6668e0e6f6a7348c65b19f5b95a8dbe6c extends Twig_Template
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
  <!-- Part 1 of Legacies -->
  <form data-request=\"onSend\">

    <br>
    <div class=\"form-group row\">
      <label class=\"col-4 col-form-label\">Legacies according to memoradum?</label>
      <div class=\"col-8\">
      <select class=\"form-control\" name=\"memoradum\" style=\"width: 380px\">
        <option></option>
        <option value=\"Yes\">Yes</option>
        <option value=\"No\">No</option>
      </select>
    </div>
    </div>

    <div class=\"form-group row\">
      <label class=\"col-4 col-form-label\">Have you made any promises of property to anybody, whether written or not?</label>
      <div class=\"col-8\">
      <select class=\"form-control\" name=\"promises\" style=\"width: 380px\">
        <option></option>
        <option value=\"Yes\">Yes</option>
        <option value=\"No\">No</option>
      </select>
    </div>
    </div><br>

    <button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Next</button>

  </form>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/shapla/legacies1/components/legacies1/default.htm";
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
  <!-- Part 1 of Legacies -->
  <form data-request=\"onSend\">

    <br>
    <div class=\"form-group row\">
      <label class=\"col-4 col-form-label\">Legacies according to memoradum?</label>
      <div class=\"col-8\">
      <select class=\"form-control\" name=\"memoradum\" style=\"width: 380px\">
        <option></option>
        <option value=\"Yes\">Yes</option>
        <option value=\"No\">No</option>
      </select>
    </div>
    </div>

    <div class=\"form-group row\">
      <label class=\"col-4 col-form-label\">Have you made any promises of property to anybody, whether written or not?</label>
      <div class=\"col-8\">
      <select class=\"form-control\" name=\"promises\" style=\"width: 380px\">
        <option></option>
        <option value=\"Yes\">Yes</option>
        <option value=\"No\">No</option>
      </select>
    </div>
    </div><br>

    <button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Next</button>

  </form>
", "/var/www/html/october/plugins/shapla/legacies1/components/legacies1/default.htm", "");
    }
}
