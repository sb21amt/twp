<?php

/* /var/www/html/october/plugins/shapla/thankyou/components/thankyou/default.htm */
class __TwigTemplate_d6573960e9cc5c86ca6182506035d1ed0b19b590f9b15bd0826467e566949b49 extends Twig_Template
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
<br><br>

<div class=\"alert alert-success\"><br>
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\"></button>
      <img src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/check.png");
        echo "\" class=\"img\" style=\"width:100px;height:100px; border-radius:50%;\">
      <br><br>
      <h4 style=\"text-align: center;\"><strong>Thank you for creating your will with The Willwriting Partnership!</strong></h4>
      <br>
      <p style=\"text-align: center;\"><i>I am delighted to inform you that your will has been successfully created. If you will like to view the will then click the button below.</i></p>
      <br>
    </div><br>


<b><p>Click on the buttons inside the tabbed menu:</p></b><br>

<div class=\"tab\">
  <button class=\"tablinks\" onclick=\"openCity(event, 'Appointment_Executor')\" id=\"defaultOpen\">Appointment Executor</button>
  <button class=\"tablinks\" onclick=\"openCity(event, 'Legacies')\">Legacies</button>
  <button class=\"tablinks\" onclick=\"openCity(event, 'Residual_Estate')\">Residual Estate</button>
  <button class=\"tablinks\" onclick=\"openCity(event, 'Funeral_Arrangements')\">Funeral Arrangements</button>
</div>

<div id=\"Appointment_Executor\" class=\"tabcontent\">
\t<span onclick=\"this.parentElement.style.display='none'\" class=\"topright\">&times</span><br>
\t<h3><u>Appointment of Executor</u></h3><br>
\t<p>Spouse to be executor:&nbsp; <b>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["aoe"] ?? null), "spouse_to_be_executor", array()), "html", null, true);
        echo "</b></p>
\t<p>Mirror Executor:&nbsp; <b>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["aoe"] ?? null), "spouse_to_be_executor", array()), "html", null, true);
        echo "</b></p>
\t<p>Sole or Joint:&nbsp; <b>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["aoe"] ?? null), "sole_or_joint", array()), "html", null, true);
        echo "</b></p><br>

\t<h3><u>Executor</u></h3><br>
\t<p>Relationship to Testator:&nbsp; <b>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "testator_1_relationship", array()), "html", null, true);
        echo "</b>, &nbsp;(Testator 2):&nbsp; <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "testator_2_relationship", array()), "html", null, true);
        echo "</b></p>
\t<p>Title:&nbsp; <b>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "title", array()), "html", null, true);
        echo "</b></p>
\t<p>Firstname:&nbsp; <b>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "firstname", array()), "html", null, true);
        echo "</b></p>
\t<p>Lastname:&nbsp; <b>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "lastname", array()), "html", null, true);
        echo "</b></p>
\t<p>Mobile Number:&nbsp; <b>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "mobile_number", array()), "html", null, true);
        echo "</b></p>
\t<p>Home Number:&nbsp; <b>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "home_number", array()), "html", null, true);
        echo "</b></p>
\t<p>Type:&nbsp; <b>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "type", array()), "html", null, true);
        echo "</b></p>
\t<p>Address Line 1:&nbsp; <b>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "address_line_1", array()), "html", null, true);
        echo "</b></p>
\t<p>Address Line 2:&nbsp; <b>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "address_line_2", array()), "html", null, true);
        echo "</b></p>
\t<p>City:&nbsp; <b>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "city", array()), "html", null, true);
        echo "</b></p>
\t<p>Post Code:&nbsp; <b>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["executor"] ?? null), "postcode", array()), "html", null, true);
        echo "</b></p><br>

\t<h3><u>Professional Executor</u></h3><br>
\t<p>TWP to Act:&nbsp; <b>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["professional_executor"] ?? null), "twp_to_act", array()), "html", null, true);
        echo "</b></p>
\t<p>Firm Name:&nbsp; <b>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["professional_executor"] ?? null), "firmname", array()), "html", null, true);
        echo "</b></p>
\t<p>Address Line 1:&nbsp; <b>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["professional_executor"] ?? null), "address_line_1", array()), "html", null, true);
        echo "</b></p>
\t<p>Address Line 2:&nbsp; <b>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["professional_executor"] ?? null), "address_line_2", array()), "html", null, true);
        echo "</b></p>
\t<p>Post Code:&nbsp; <b>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["professional_executor"] ?? null), "postcode", array()), "html", null, true);
        echo "</b></p>
\t<p>Phone Number:&nbsp; <b>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["professional_executor"] ?? null), "phone_number", array()), "html", null, true);
        echo "</b></p>
\t<p>Option:&nbsp; <b>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["professional_executor"] ?? null), "option", array()), "html", null, true);
        echo "</b></p>
</div>

<div id=\"Legacies\" class=\"tabcontent\">
\t<span onclick=\"this.parentElement.style.display='none'\" class=\"topright\">&times</span><br>
\t<p>Legacies according to memoradum?&nbsp; <b>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies1"] ?? null), "memoradum", array()), "html", null, true);
        echo "</b></p>
\t<p>Have you made any promises of property to anybody, whether written or not?&nbsp; <b>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies1"] ?? null), "promises", array()), "html", null, true);
        echo "</b></p><br>

\t<h3><u>Gifts</u></h3><br>
\t<p>Description Of Gift:&nbsp; <b>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "description_of_gift", array()), "html", null, true);
        echo "</b></p>
\t<p>Owned By:&nbsp; <b>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "owned", array()), "html", null, true);
        echo "</b></p>
\t<p>To (Testator 1):&nbsp; <b>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "testator_1_relationship", array()), "html", null, true);
        echo "</b>, &nbsp;(Testator 2):&nbsp; <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "testator_2_relationship", array()), "html", null, true);
        echo "</b></p>
\t<p>To (Testator 2):&nbsp; <b>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "testator_2_relationship", array()), "html", null, true);
        echo "</b></p>
\t<p>Firstname:&nbsp; <b>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "firstname", array()), "html", null, true);
        echo "</b></p>
\t<p>Lastname:&nbsp; <b>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "lastname", array()), "html", null, true);
        echo "</b></p>
\t<p>Address Line 1:&nbsp; <b>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "address_line_1", array()), "html", null, true);
        echo "</b></p>
\t<p>Address Line 2:&nbsp; <b>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "address_line_2", array()), "html", null, true);
        echo "</b></p>
\t<p>City:&nbsp; <b>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "city", array()), "html", null, true);
        echo "</b></p>
\t<p>Post Code:&nbsp; <b>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "postcode", array()), "html", null, true);
        echo "</b></p>
\t<p>Mobile Number:&nbsp; <b>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "mobile_number", array()), "html", null, true);
        echo "</b></p>
\t<p>Home Number:&nbsp; <b>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["legacies2"] ?? null), "home_number", array()), "html", null, true);
        echo "</b></p><br>
</div>

<div id=\"Residual_Estate\" class=\"tabcontent\">
\t<span onclick=\"this.parentElement.style.display='none'\" class=\"topright\">&times</span><br>
\t<p>Any notes on special requirments that call for a trust?&nbsp; <b>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate1"] ?? null), "notes", array()), "html", null, true);
        echo "</b></p>
\t<p>To pass to spouse on 1st death? &nbsp; <b>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate1"] ?? null), "pass_to_spouse", array()), "html", null, true);
        echo "</b></p>
\t<p>Residue to be distubuted in equal propotions?&nbsp; <b>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate1"] ?? null), "pass_to_spouse", array()), "html", null, true);
        echo "</b></p>
\t<p>NON PROVISION CLAUSE: Has anyone been specifically excluded from the will? if so who? &nbsp; <b>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate1"] ?? null), "who", array()), "html", null, true);
        echo "</b></p><br>

\t<h3><u>Beneficiary</u></h3><br>
\t<p>Relationship to Testator:&nbsp; <b>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "testator_1_relationship", array()), "html", null, true);
        echo "</b>, &nbsp;(Testator 2):&nbsp; <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "testator_2_relationship", array()), "html", null, true);
        echo "</b></p>
\t<p>Firstname:&nbsp; <b>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "firstname", array()), "html", null, true);
        echo "</b></p>
\t<p>Lastname:&nbsp; <b>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "lastname", array()), "html", null, true);
        echo "</b></p>
\t<p>Address Line 1:&nbsp; <b>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "address_line_1", array()), "html", null, true);
        echo "</b></p>
\t<p>Address Line 2:&nbsp; <b>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "address_line_2", array()), "html", null, true);
        echo "</b></p>
\t<p>City:&nbsp; <b>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "city", array()), "html", null, true);
        echo "</b></p>
\t<p>Post Code:&nbsp; <b>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "postcode", array()), "html", null, true);
        echo "</b></p>
\t<p>Mobile Number:&nbsp; <b>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "mobile_number", array()), "html", null, true);
        echo "</b></p>
\t<p>Home Number:&nbsp; <b>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "home_number", array()), "html", null, true);
        echo "</b></p>
\t<p>Share To Beneficiary:&nbsp; <b>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "share_to_beneficiary", array()), "html", null, true);
        echo "</b>, &nbsp;(Age):&nbsp; <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "share_age", array()), "html", null, true);
        echo "</b></p>
\t<p>Or To Issue:&nbsp; <b>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate2"] ?? null), "issue", array()), "html", null, true);
        echo "</b></p><br>


\t<h3><u>Reserved Beneficiary</u></h3><br>
\t<p>Relationship to Testator:&nbsp; <b>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "testator_1_relationship", array()), "html", null, true);
        echo "</b>, &nbsp;(Testator 2):&nbsp; <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "testator_2_relationship", array()), "html", null, true);
        echo "</b></p>
\t<p>Firstname:&nbsp; <b>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "firstname", array()), "html", null, true);
        echo "</b></p>
\t<p>Lastname:&nbsp; <b>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "lastname", array()), "html", null, true);
        echo "</b></p>
\t<p>Address Line 1:&nbsp; <b>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "address_line_1", array()), "html", null, true);
        echo "</b></p>
\t<p>Address Line 2:&nbsp; <b>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "address_line_2", array()), "html", null, true);
        echo "</b></p>
\t<p>City:&nbsp; <b>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "city", array()), "html", null, true);
        echo "</b></p>
\t<p>Post Code:&nbsp; <b>";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "postcode", array()), "html", null, true);
        echo "</b></p>
\t<p>Mobile Number:&nbsp; <b>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "mobile_number", array()), "html", null, true);
        echo "</b></p>
\t<p>Home Number:&nbsp; <b>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "home_number", array()), "html", null, true);
        echo "</b></p>
\t<p>Share To Beneficiary:&nbsp; <b>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "share_to_beneficiary", array()), "html", null, true);
        echo "</b>, &nbsp;(Age):&nbsp; <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "share_age", array()), "html", null, true);
        echo "</b></p>
\t<p>Or To Issue:&nbsp; <b>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["estate3"] ?? null), "issue", array()), "html", null, true);
        echo "</b></p><br>
\t
</div>

<div id=\"Funeral_Arrangements\" class=\"tabcontent\">
\t<span onclick=\"this.parentElement.style.display='none'\" class=\"topright\">&times</span><br>
\t\t<h3><u>Testator 1</u></h3><br>
\t\t<p>Funeral prearranged with:&nbsp; <b>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "arranged_with_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Funeral Plan Ref Number:&nbsp; <b>";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "reference_number_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>How will the funeral be funded:&nbsp; <b>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "funeral_fund_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Donation of body for research:&nbsp; <b>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "donation_of_body_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Donation of organs for transplant:&nbsp; <b>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "donation_of_organs_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Any organs not to be used (e.g. Eyes):&nbsp; <b>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "organs_excluded_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Cremation required?&nbsp; <b>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "cremation_required_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Burial required?&nbsp; <b>";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "burial_required_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Service to take place at:&nbsp; <b>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "service_destination_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Burial/Cremation take place at?&nbsp; <b>";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "burial_destination_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Ashes to be buried or scattered?&nbsp; <b>";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "ashes_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Where will they be buried/scattered?&nbsp; <b>";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "ashes_destination_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Service Requirements (Particular songs/religious traditions/clothing requirements/tone of service etc.)&nbsp; <b>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "service_requirements_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Family flowers only?&nbsp; <b>";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "family_flowers_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Donation to charity in lieu of flowers:&nbsp; <b>";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "donations_to_charity_1", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Notes:&nbsp; <b>";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "notes_1", array()), "html", null, true);
        echo "</b></p><br> 

\t\t<h3><u>Testator 2</u></h3><br>
\t\t<p>Funeral prearranged with:&nbsp; <b>";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "arranged_with_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Funeral Plan Ref Number:&nbsp; <b>";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "reference_number_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>How will the funeral be funded:&nbsp; <b>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "funeral_fund_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Donation of body for research:&nbsp; <b>";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "donation_of_body_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Donation of organs for transplant:&nbsp; <b>";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "donation_of_organs_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Any organs not to be used (e.g. Eyes):&nbsp; <b>";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "organs_excluded_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Cremation required?&nbsp; <b>";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "cremation_required_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Burial required?&nbsp; <b>";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "burial_required_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Service to take place at:&nbsp; <b>";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "service_destination_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Burial/Cremation take place at?&nbsp; <b>";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "burial_destination_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Ashes to be buried or scattered?&nbsp; <b>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "ashes_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Where will they be buried/scattered?&nbsp; <b>";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "ashes_destination_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Service Requirements (Particular songs/religious traditions/clothing requirements/tone of service etc.)&nbsp; <b>";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "service_requirements_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Family flowers only?&nbsp; <b>";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "family_flowers_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Donation to charity in lieu of flowers:&nbsp; <b>";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "donations_to_charity_2", array()), "html", null, true);
        echo "</b></p>
\t\t<p>Notes:&nbsp; <b>";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["funeral"] ?? null), "notes_2", array()), "html", null, true);
        echo "</b></p><br> 
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName(\"tabcontent\");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = \"none\";
    }
    tablinks = document.getElementsByClassName(\"tablinks\");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
    }
    document.getElementById(cityName).style.display = \"block\";
    evt.currentTarget.className += \" active\";
}

// Get the element with id=\"defaultOpen\" and click on it
document.getElementById(\"defaultOpen\").click();
</script>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/shapla/thankyou/components/thankyou/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 146,  455 => 145,  451 => 144,  447 => 143,  443 => 142,  439 => 141,  435 => 140,  431 => 139,  427 => 138,  423 => 137,  419 => 136,  415 => 135,  411 => 134,  407 => 133,  403 => 132,  399 => 131,  393 => 128,  389 => 127,  385 => 126,  381 => 125,  377 => 124,  373 => 123,  369 => 122,  365 => 121,  361 => 120,  357 => 119,  353 => 118,  349 => 117,  345 => 116,  341 => 115,  337 => 114,  333 => 113,  323 => 106,  317 => 105,  313 => 104,  309 => 103,  305 => 102,  301 => 101,  297 => 100,  293 => 99,  289 => 98,  285 => 97,  279 => 96,  272 => 92,  266 => 91,  262 => 90,  258 => 89,  254 => 88,  250 => 87,  246 => 86,  242 => 85,  238 => 84,  234 => 83,  228 => 82,  222 => 79,  218 => 78,  214 => 77,  210 => 76,  202 => 71,  198 => 70,  194 => 69,  190 => 68,  186 => 67,  182 => 66,  178 => 65,  174 => 64,  170 => 63,  164 => 62,  160 => 61,  156 => 60,  150 => 57,  146 => 56,  138 => 51,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  118 => 46,  114 => 45,  108 => 42,  104 => 41,  100 => 40,  96 => 39,  92 => 38,  88 => 37,  84 => 36,  80 => 35,  76 => 34,  72 => 33,  66 => 32,  60 => 29,  56 => 28,  52 => 27,  28 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body background=\"{{ 'assets/images/form-background.png'|theme }}\">
<br><br>

<div class=\"alert alert-success\"><br>
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\"></button>
      <img src=\"{{ 'assets/images/check.png'|theme }}\" class=\"img\" style=\"width:100px;height:100px; border-radius:50%;\">
      <br><br>
      <h4 style=\"text-align: center;\"><strong>Thank you for creating your will with The Willwriting Partnership!</strong></h4>
      <br>
      <p style=\"text-align: center;\"><i>I am delighted to inform you that your will has been successfully created. If you will like to view the will then click the button below.</i></p>
      <br>
    </div><br>


<b><p>Click on the buttons inside the tabbed menu:</p></b><br>

<div class=\"tab\">
  <button class=\"tablinks\" onclick=\"openCity(event, 'Appointment_Executor')\" id=\"defaultOpen\">Appointment Executor</button>
  <button class=\"tablinks\" onclick=\"openCity(event, 'Legacies')\">Legacies</button>
  <button class=\"tablinks\" onclick=\"openCity(event, 'Residual_Estate')\">Residual Estate</button>
  <button class=\"tablinks\" onclick=\"openCity(event, 'Funeral_Arrangements')\">Funeral Arrangements</button>
</div>

<div id=\"Appointment_Executor\" class=\"tabcontent\">
\t<span onclick=\"this.parentElement.style.display='none'\" class=\"topright\">&times</span><br>
\t<h3><u>Appointment of Executor</u></h3><br>
\t<p>Spouse to be executor:&nbsp; <b>{{ aoe.spouse_to_be_executor }}</b></p>
\t<p>Mirror Executor:&nbsp; <b>{{ aoe.spouse_to_be_executor }}</b></p>
\t<p>Sole or Joint:&nbsp; <b>{{ aoe.sole_or_joint }}</b></p><br>

\t<h3><u>Executor</u></h3><br>
\t<p>Relationship to Testator:&nbsp; <b>{{ executor.testator_1_relationship }}</b>, &nbsp;(Testator 2):&nbsp; <b>{{ executor.testator_2_relationship }}</b></p>
\t<p>Title:&nbsp; <b>{{ executor.title }}</b></p>
\t<p>Firstname:&nbsp; <b>{{ executor.firstname }}</b></p>
\t<p>Lastname:&nbsp; <b>{{ executor.lastname }}</b></p>
\t<p>Mobile Number:&nbsp; <b>{{ executor.mobile_number }}</b></p>
\t<p>Home Number:&nbsp; <b>{{ executor.home_number }}</b></p>
\t<p>Type:&nbsp; <b>{{ executor.type }}</b></p>
\t<p>Address Line 1:&nbsp; <b>{{ executor.address_line_1 }}</b></p>
\t<p>Address Line 2:&nbsp; <b>{{ executor.address_line_2 }}</b></p>
\t<p>City:&nbsp; <b>{{ executor.city }}</b></p>
\t<p>Post Code:&nbsp; <b>{{ executor.postcode }}</b></p><br>

\t<h3><u>Professional Executor</u></h3><br>
\t<p>TWP to Act:&nbsp; <b>{{ professional_executor.twp_to_act }}</b></p>
\t<p>Firm Name:&nbsp; <b>{{ professional_executor.firmname }}</b></p>
\t<p>Address Line 1:&nbsp; <b>{{ professional_executor.address_line_1 }}</b></p>
\t<p>Address Line 2:&nbsp; <b>{{ professional_executor.address_line_2 }}</b></p>
\t<p>Post Code:&nbsp; <b>{{ professional_executor.postcode }}</b></p>
\t<p>Phone Number:&nbsp; <b>{{ professional_executor.phone_number }}</b></p>
\t<p>Option:&nbsp; <b>{{ professional_executor.option }}</b></p>
</div>

<div id=\"Legacies\" class=\"tabcontent\">
\t<span onclick=\"this.parentElement.style.display='none'\" class=\"topright\">&times</span><br>
\t<p>Legacies according to memoradum?&nbsp; <b>{{ legacies1.memoradum }}</b></p>
\t<p>Have you made any promises of property to anybody, whether written or not?&nbsp; <b>{{ legacies1.promises }}</b></p><br>

\t<h3><u>Gifts</u></h3><br>
\t<p>Description Of Gift:&nbsp; <b>{{ legacies2.description_of_gift }}</b></p>
\t<p>Owned By:&nbsp; <b>{{ legacies2.owned }}</b></p>
\t<p>To (Testator 1):&nbsp; <b>{{ legacies2.testator_1_relationship }}</b>, &nbsp;(Testator 2):&nbsp; <b>{{ legacies2.testator_2_relationship }}</b></p>
\t<p>To (Testator 2):&nbsp; <b>{{ legacies2.testator_2_relationship }}</b></p>
\t<p>Firstname:&nbsp; <b>{{ legacies2.firstname }}</b></p>
\t<p>Lastname:&nbsp; <b>{{ legacies2.lastname }}</b></p>
\t<p>Address Line 1:&nbsp; <b>{{ legacies2.address_line_1 }}</b></p>
\t<p>Address Line 2:&nbsp; <b>{{ legacies2.address_line_2 }}</b></p>
\t<p>City:&nbsp; <b>{{ legacies2.city }}</b></p>
\t<p>Post Code:&nbsp; <b>{{ legacies2.postcode }}</b></p>
\t<p>Mobile Number:&nbsp; <b>{{ legacies2.mobile_number }}</b></p>
\t<p>Home Number:&nbsp; <b>{{ legacies2.home_number }}</b></p><br>
</div>

<div id=\"Residual_Estate\" class=\"tabcontent\">
\t<span onclick=\"this.parentElement.style.display='none'\" class=\"topright\">&times</span><br>
\t<p>Any notes on special requirments that call for a trust?&nbsp; <b>{{ estate1.notes }}</b></p>
\t<p>To pass to spouse on 1st death? &nbsp; <b>{{ estate1.pass_to_spouse }}</b></p>
\t<p>Residue to be distubuted in equal propotions?&nbsp; <b>{{ estate1.pass_to_spouse }}</b></p>
\t<p>NON PROVISION CLAUSE: Has anyone been specifically excluded from the will? if so who? &nbsp; <b>{{ estate1.who }}</b></p><br>

\t<h3><u>Beneficiary</u></h3><br>
\t<p>Relationship to Testator:&nbsp; <b>{{ estate2.testator_1_relationship }}</b>, &nbsp;(Testator 2):&nbsp; <b>{{ estate2.testator_2_relationship }}</b></p>
\t<p>Firstname:&nbsp; <b>{{ estate2.firstname }}</b></p>
\t<p>Lastname:&nbsp; <b>{{ estate2.lastname }}</b></p>
\t<p>Address Line 1:&nbsp; <b>{{ estate2.address_line_1 }}</b></p>
\t<p>Address Line 2:&nbsp; <b>{{ estate2.address_line_2 }}</b></p>
\t<p>City:&nbsp; <b>{{ estate2.city }}</b></p>
\t<p>Post Code:&nbsp; <b>{{ estate2.postcode }}</b></p>
\t<p>Mobile Number:&nbsp; <b>{{ estate2.mobile_number }}</b></p>
\t<p>Home Number:&nbsp; <b>{{ estate2.home_number }}</b></p>
\t<p>Share To Beneficiary:&nbsp; <b>{{ estate2.share_to_beneficiary }}</b>, &nbsp;(Age):&nbsp; <b>{{ estate2.share_age }}</b></p>
\t<p>Or To Issue:&nbsp; <b>{{ estate2.issue }}</b></p><br>


\t<h3><u>Reserved Beneficiary</u></h3><br>
\t<p>Relationship to Testator:&nbsp; <b>{{ estate3.testator_1_relationship }}</b>, &nbsp;(Testator 2):&nbsp; <b>{{ estate3.testator_2_relationship }}</b></p>
\t<p>Firstname:&nbsp; <b>{{ estate3.firstname }}</b></p>
\t<p>Lastname:&nbsp; <b>{{ estate3.lastname }}</b></p>
\t<p>Address Line 1:&nbsp; <b>{{ estate3.address_line_1 }}</b></p>
\t<p>Address Line 2:&nbsp; <b>{{ estate3.address_line_2 }}</b></p>
\t<p>City:&nbsp; <b>{{ estate3.city }}</b></p>
\t<p>Post Code:&nbsp; <b>{{ estate3.postcode }}</b></p>
\t<p>Mobile Number:&nbsp; <b>{{ estate3.mobile_number }}</b></p>
\t<p>Home Number:&nbsp; <b>{{ estate3.home_number }}</b></p>
\t<p>Share To Beneficiary:&nbsp; <b>{{ estate3.share_to_beneficiary }}</b>, &nbsp;(Age):&nbsp; <b>{{ estate3.share_age }}</b></p>
\t<p>Or To Issue:&nbsp; <b>{{ estate3.issue }}</b></p><br>
\t
</div>

<div id=\"Funeral_Arrangements\" class=\"tabcontent\">
\t<span onclick=\"this.parentElement.style.display='none'\" class=\"topright\">&times</span><br>
\t\t<h3><u>Testator 1</u></h3><br>
\t\t<p>Funeral prearranged with:&nbsp; <b>{{ funeral.arranged_with_1 }}</b></p>
\t\t<p>Funeral Plan Ref Number:&nbsp; <b>{{ funeral.reference_number_1 }}</b></p>
\t\t<p>How will the funeral be funded:&nbsp; <b>{{ funeral.funeral_fund_1 }}</b></p>
\t\t<p>Donation of body for research:&nbsp; <b>{{ funeral.donation_of_body_1 }}</b></p>
\t\t<p>Donation of organs for transplant:&nbsp; <b>{{ funeral.donation_of_organs_1 }}</b></p>
\t\t<p>Any organs not to be used (e.g. Eyes):&nbsp; <b>{{ funeral.organs_excluded_1 }}</b></p>
\t\t<p>Cremation required?&nbsp; <b>{{ funeral.cremation_required_1 }}</b></p>
\t\t<p>Burial required?&nbsp; <b>{{ funeral.burial_required_1 }}</b></p>
\t\t<p>Service to take place at:&nbsp; <b>{{ funeral.service_destination_1 }}</b></p>
\t\t<p>Burial/Cremation take place at?&nbsp; <b>{{ funeral.burial_destination_1 }}</b></p>
\t\t<p>Ashes to be buried or scattered?&nbsp; <b>{{ funeral.ashes_1 }}</b></p>
\t\t<p>Where will they be buried/scattered?&nbsp; <b>{{ funeral.ashes_destination_1 }}</b></p>
\t\t<p>Service Requirements (Particular songs/religious traditions/clothing requirements/tone of service etc.)&nbsp; <b>{{ funeral.service_requirements_1 }}</b></p>
\t\t<p>Family flowers only?&nbsp; <b>{{ funeral.family_flowers_1 }}</b></p>
\t\t<p>Donation to charity in lieu of flowers:&nbsp; <b>{{ funeral.donations_to_charity_1 }}</b></p>
\t\t<p>Notes:&nbsp; <b>{{ funeral.notes_1 }}</b></p><br> 

\t\t<h3><u>Testator 2</u></h3><br>
\t\t<p>Funeral prearranged with:&nbsp; <b>{{ funeral.arranged_with_2 }}</b></p>
\t\t<p>Funeral Plan Ref Number:&nbsp; <b>{{ funeral.reference_number_2 }}</b></p>
\t\t<p>How will the funeral be funded:&nbsp; <b>{{ funeral.funeral_fund_2 }}</b></p>
\t\t<p>Donation of body for research:&nbsp; <b>{{ funeral.donation_of_body_2 }}</b></p>
\t\t<p>Donation of organs for transplant:&nbsp; <b>{{ funeral.donation_of_organs_2 }}</b></p>
\t\t<p>Any organs not to be used (e.g. Eyes):&nbsp; <b>{{ funeral.organs_excluded_2 }}</b></p>
\t\t<p>Cremation required?&nbsp; <b>{{ funeral.cremation_required_2 }}</b></p>
\t\t<p>Burial required?&nbsp; <b>{{ funeral.burial_required_2 }}</b></p>
\t\t<p>Service to take place at:&nbsp; <b>{{ funeral.service_destination_2 }}</b></p>
\t\t<p>Burial/Cremation take place at?&nbsp; <b>{{ funeral.burial_destination_2 }}</b></p>
\t\t<p>Ashes to be buried or scattered?&nbsp; <b>{{ funeral.ashes_2 }}</b></p>
\t\t<p>Where will they be buried/scattered?&nbsp; <b>{{ funeral.ashes_destination_2 }}</b></p>
\t\t<p>Service Requirements (Particular songs/religious traditions/clothing requirements/tone of service etc.)&nbsp; <b>{{ funeral.service_requirements_2 }}</b></p>
\t\t<p>Family flowers only?&nbsp; <b>{{ funeral.family_flowers_2 }}</b></p>
\t\t<p>Donation to charity in lieu of flowers:&nbsp; <b>{{ funeral.donations_to_charity_2 }}</b></p>
\t\t<p>Notes:&nbsp; <b>{{ funeral.notes_2 }}</b></p><br> 
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName(\"tabcontent\");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = \"none\";
    }
    tablinks = document.getElementsByClassName(\"tablinks\");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
    }
    document.getElementById(cityName).style.display = \"block\";
    evt.currentTarget.className += \" active\";
}

// Get the element with id=\"defaultOpen\" and click on it
document.getElementById(\"defaultOpen\").click();
</script>

", "/var/www/html/october/plugins/shapla/thankyou/components/thankyou/default.htm", "");
    }
}
