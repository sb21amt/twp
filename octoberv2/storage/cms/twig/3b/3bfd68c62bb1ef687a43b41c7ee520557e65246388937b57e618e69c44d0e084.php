<?php

/* /var/www/html/october/plugins/shapla/tc/components/tcform/default.htm */
class __TwigTemplate_c4918dd9f2ac17d5295142d9c6b3b5baf2c11857e561b73c7ea6c2ed0f2dc25b extends Twig_Template
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
\t<form data-request=\"onSend\">

\t\t<p>Firstly, you should understand a few things.</p>
\t\t<p>A Will is a legal document. It is potentially a very powerful legal document and whilst we are going to ensure that the Will produced by this procedure is legally valid, we want to remind you that there is no substitute for professional, personal legal advice. If at any point in this procedure you feel like you need to speak to someone, just pick up the phone and we will help.</p>

\t\t<p>Before we continue, I just want to make sure you understand what this Basic Last Will and Testament will and will not do.</p> 
\t\t<p>This is a Basic Will. It will contain your executors (definition) and it will distribute your entire estate equally to your chosen beneficiaries (definition). Finally, it will give you a couple of simple choices about your funeral directions.</p>
\t\t<p>It will not:
\t\tDistribute any specific gifts
\t\tMake provision for your pets
\t\tDistribute the estate unequally</p>
\t\t<p>Also, you will need the facility to print the Will once it is complete.</p>

\t\t<br>
\t\t<p><b>Do you accept the terms and conditions?</b></p>
\t\t
\t\t<input name=\"accept\" type=\"checkbox\" class=\"form-radio\">

\t\t<br><br>
\t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Send</button>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/plugins/shapla/tc/components/tcform/default.htm";
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
\t<form data-request=\"onSend\">

\t\t<p>Firstly, you should understand a few things.</p>
\t\t<p>A Will is a legal document. It is potentially a very powerful legal document and whilst we are going to ensure that the Will produced by this procedure is legally valid, we want to remind you that there is no substitute for professional, personal legal advice. If at any point in this procedure you feel like you need to speak to someone, just pick up the phone and we will help.</p>

\t\t<p>Before we continue, I just want to make sure you understand what this Basic Last Will and Testament will and will not do.</p> 
\t\t<p>This is a Basic Will. It will contain your executors (definition) and it will distribute your entire estate equally to your chosen beneficiaries (definition). Finally, it will give you a couple of simple choices about your funeral directions.</p>
\t\t<p>It will not:
\t\tDistribute any specific gifts
\t\tMake provision for your pets
\t\tDistribute the estate unequally</p>
\t\t<p>Also, you will need the facility to print the Will once it is complete.</p>

\t\t<br>
\t\t<p><b>Do you accept the terms and conditions?</b></p>
\t\t
\t\t<input name=\"accept\" type=\"checkbox\" class=\"form-radio\">

\t\t<br><br>
\t\t<button type=\"submit\" class=\"btn btn-lg btn-outline-danger\">Send</button>
\t</form>
", "/var/www/html/october/plugins/shapla/tc/components/tcform/default.htm", "");
    }
}
