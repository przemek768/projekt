<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mainsite.php.twig */
class __TwigTemplate_6de5931f8b34b4dff36fee3a74b0c557 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mainsite.php.twig"));

        // line 1
        echo twig_include($this->env, $context, "SiteElements/menu.php.twig");
        echo "
<main class=\"page cv-page\">
    <section class=\"portfolio-block block-intro border-bottom\">
        <div class=\"container\">
            <div class=\"avatar\" style=\"background-image: url(&quot;../assets/img/Black%20Monoline%20Real%20Estate%20Logo.png&quot;);width: 300px;height: 200px;filter: blur(0px) brightness(100%);\"></div>
            <div class=\"about-me\">
                <p>Witaj! Jesteśmy biurem nieruchomości które pomoże Ci znaleźć twój wymarzony dom lub mieszkanie!</p><a class=\"btn btn-outline-primary\" role=\"button\" href=\"rejestracja.html\">Zarejestruj się</a></div>
        </div>
    </section>
</main>
";
        // line 11
        echo twig_include($this->env, $context, "SiteElements/footer.php.twig");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mainsite.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include ('SiteElements/menu.php.twig') }}
<main class=\"page cv-page\">
    <section class=\"portfolio-block block-intro border-bottom\">
        <div class=\"container\">
            <div class=\"avatar\" style=\"background-image: url(&quot;../assets/img/Black%20Monoline%20Real%20Estate%20Logo.png&quot;);width: 300px;height: 200px;filter: blur(0px) brightness(100%);\"></div>
            <div class=\"about-me\">
                <p>Witaj! Jesteśmy biurem nieruchomości które pomoże Ci znaleźć twój wymarzony dom lub mieszkanie!</p><a class=\"btn btn-outline-primary\" role=\"button\" href=\"rejestracja.html\">Zarejestruj się</a></div>
        </div>
    </section>
</main>
{{ include ('SiteElements/footer.php.twig') }}", "mainsite.php.twig", "C:\\xampp\\htdocs\\projekt\\templates\\mainsite.php.twig");
    }
}
