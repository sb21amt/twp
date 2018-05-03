<?php

/* /var/www/html/october/plugins/shapla/payment/components/paymentform/default.htm */
class __TwigTemplate_75f34c9af09f699ed8b8cbcb1d436a9f8b0cab9bb202e93a05982538005fcc4d extends Twig_Template
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
\t<div class=\"center font-size\">
\t\t<div class=\"page-header\"><h2>Payment</h2></div><br>
\t\t<form data-request=\"onSend\">

\t\t\t<div class=\"form-group\">
\t\t\t\t<label>Card Name</label>
\t\t\t\t<input name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Enter card name\">
\t\t\t</div><br>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label>Card Number</label>
\t\t\t\t<input name=\"number\" type=\"text\" class=\"form-control\" placeholder=\"Enter card number\">
\t\t\t</div><br>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label>CVV</label>
\t\t\t\t<input name=\"cvv\" type=\"text\" class=\"form-control\" placeholder=\"Enter cvv\">
\t\t\t</div><br>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label>Expiry Date</label>
\t\t\t\t<input name=\"expiry\" type=\"date\" class=\"form-control\" placeholder=\"Enter expiry date\">
\t\t\t</div><br>

\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Pay</button>
\t\t</form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/shapla/payment/components/paymentform/default.htm";
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
\t<div class=\"center font-size\">
\t\t<div class=\"page-header\"><h2>Payment</h2></div><br>
\t\t<form data-request=\"onSend\">

\t\t\t<div class=\"form-group\">
\t\t\t\t<label>Card Name</label>
\t\t\t\t<input name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Enter card name\">
\t\t\t</div><br>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label>Card Number</label>
\t\t\t\t<input name=\"number\" type=\"text\" class=\"form-control\" placeholder=\"Enter card number\">
\t\t\t</div><br>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label>CVV</label>
\t\t\t\t<input name=\"cvv\" type=\"text\" class=\"form-control\" placeholder=\"Enter cvv\">
\t\t\t</div><br>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label>Expiry Date</label>
\t\t\t\t<input name=\"expiry\" type=\"date\" class=\"form-control\" placeholder=\"Enter expiry date\">
\t\t\t</div><br>

\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Pay</button>
\t\t</form>
\t</div>
", "/var/www/html/october/plugins/shapla/payment/components/paymentform/default.htm", "");
    }
}
