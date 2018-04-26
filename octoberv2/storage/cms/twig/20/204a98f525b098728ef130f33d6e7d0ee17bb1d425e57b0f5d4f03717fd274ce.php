<?php

/* /var/www/html/october/plugins/shapla/funeralarrangments/components/funeralarrangmentsform/default.htm */
class __TwigTemplate_88891e47cf4b9c89948747f51b2c5e98f5d9bb977d7b3b1400a5ca4bf2f26084 extends Twig_Template
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
\t<div class=\"col-6\">
\t<!-- Part 1 of Funeral Arrangement -->
\t<form data-request=\"onSend\">

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Funeral prearranged with:</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"arranged_with_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Funeral Plan Ref Number:</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"reference_number_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">How will the funeral be funded:</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"funeral_fund_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Donation of body for research</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"donation_of_body_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Donation of organs for transplant</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"donation_of_organs_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Any organs not to be used (e.g. Eyes):</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"organs_excluded_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Cremation required?</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"cremation_required_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Burial required?</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"burial_required_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Service to take place at:</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"service_destination_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Burial/Cremation take place at?</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"burial_destination_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Ashes to be buried or scattered?</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"ashes_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Buried\">Buried</option>
\t\t<option value=\"Scattered\">Scattered</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Where will they be buried/scattered?</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"ashes_destination_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Service Requirements (Particular songs/religious traditions/clothing requirements/tone of service etc.)</label>
\t\t<div class=\"col-8\">
\t\t<textarea class=\"form-control\" name=\"service_requirements_1\" placeholder=\"Testator 1\" style=\"width: 200px\"></textarea>
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Family flowers only?</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"family_flowers_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Donation to charity in lieu of flowers:</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"donations_to_charity_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Notes</label>
\t\t<div class=\"col-8\">
\t\t<textarea class=\"form-control\" name=\"notes_1\" placeholder=\"Testator 1\" style=\"width: 200px\"></textarea>
\t\t</div>
\t\t</div>
\t</div>

\t<!-- Testator 2 -->

\t<div class=\"col-6\">
\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"arranged_with_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"reference_number_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"funeral_fund_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"donation_of_body_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"donation_of_organs_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"organs_excluded_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"cremation_required_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"burial_required_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"service_destination_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"burial_destination_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"ashes_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Buried\">Buried</option>
\t\t<option value=\"Scattered\">Scattered</option>
\t\t</select>
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"ashes_destination_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<textarea class=\"form-control\" name=\"service_requirements_2\" placeholder=\"Testator 2\" style=\"width: 200px\"></textarea>
\t\t</div>
\t\t</div><br><br><br><br><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"family_flowers_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"donations_to_charity_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<textarea row=class=\"form-control\" name=\"notes_2\" placeholder=\"Testator 2\" style=\"width: 200px\"></textarea>
\t\t</div>
\t\t</div><br>

\t</div>
\t</div>

\t<button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Next</button>

\t</form>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/shapla/funeralarrangments/components/funeralarrangmentsform/default.htm";
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
        return new Twig_Source("<body background=\"{{ 'assets/images/form-background.png'|theme }}\"><br>

\t<div class=\"row\">
\t<div class=\"col-6\">
\t<!-- Part 1 of Funeral Arrangement -->
\t<form data-request=\"onSend\">

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Funeral prearranged with:</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"arranged_with_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Funeral Plan Ref Number:</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"reference_number_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">How will the funeral be funded:</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"funeral_fund_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Donation of body for research</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"donation_of_body_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Donation of organs for transplant</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"donation_of_organs_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Any organs not to be used (e.g. Eyes):</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"organs_excluded_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Cremation required?</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"cremation_required_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Burial required?</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"burial_required_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Service to take place at:</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"service_destination_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Burial/Cremation take place at?</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"burial_destination_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Ashes to be buried or scattered?</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"ashes_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Buried\">Buried</option>
\t\t<option value=\"Scattered\">Scattered</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Where will they be buried/scattered?</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"ashes_destination_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Service Requirements (Particular songs/religious traditions/clothing requirements/tone of service etc.)</label>
\t\t<div class=\"col-8\">
\t\t<textarea class=\"form-control\" name=\"service_requirements_1\" placeholder=\"Testator 1\" style=\"width: 200px\"></textarea>
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Family flowers only?</label>
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"family_flowers_1\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Donation to charity in lieu of flowers:</label>
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"donations_to_charity_1\" placeholder=\"Testator 1\" style=\"width: 200px\">
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<label class=\"col-4 col-form-label\">Notes</label>
\t\t<div class=\"col-8\">
\t\t<textarea class=\"form-control\" name=\"notes_1\" placeholder=\"Testator 1\" style=\"width: 200px\"></textarea>
\t\t</div>
\t\t</div>
\t</div>

\t<!-- Testator 2 -->

\t<div class=\"col-6\">
\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"arranged_with_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"reference_number_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"funeral_fund_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"donation_of_body_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"donation_of_organs_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"organs_excluded_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"cremation_required_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"burial_required_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"service_destination_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"burial_destination_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"ashes_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Buried\">Buried</option>
\t\t<option value=\"Scattered\">Scattered</option>
\t\t</select>
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"ashes_destination_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<textarea class=\"form-control\" name=\"service_requirements_2\" placeholder=\"Testator 2\" style=\"width: 200px\"></textarea>
\t\t</div>
\t\t</div><br><br><br><br><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<select class=\"form-control\" name=\"family_flowers_2\" style=\"width: 200px\">
\t\t<option></option>
\t\t<option value=\"Yes\">Yes</option>
\t\t<option value=\"No\">No</option>
\t\t</select>
\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<input class=\"form-control\" type=\"text\" name=\"donations_to_charity_2\" placeholder=\"Testator 2\" style=\"width: 200px\">
\t\t</div>
\t\t</div><br>

\t\t<div class=\"form-group row\">
\t\t<div class=\"col-8\">
\t\t<textarea row=class=\"form-control\" name=\"notes_2\" placeholder=\"Testator 2\" style=\"width: 200px\"></textarea>
\t\t</div>
\t\t</div><br>

\t</div>
\t</div>

\t<button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Next</button>

\t</form>
", "/var/www/html/october/plugins/shapla/funeralarrangments/components/funeralarrangmentsform/default.htm", "");
    }
}
