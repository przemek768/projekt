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

/* SiteElements/menu.php.twig */
class __TwigTemplate_48d155fede4cee68bab346c14d7d09dd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteElements/menu.php.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>CV - Brand</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/ionicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/Article-List.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/Login-Form-Clean.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/NavBar-Notifications-Panel-1.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/NavBar-Notifications-Panel.css"), "html", null, true);
        echo "\">
</head>

<body>
<nav class=\"navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient\">
    <div class=\"container\"><a class=\"navbar-brand logo\" href=\"strona_glowna.html\">System Zarządzania Biurem Nieruchomości</a><button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarNav\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
        <div
                class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"nav navbar-nav ml-auto\">
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"panel_kupujacy.html\">Panel kupującego</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"panel_sprzedajacy.html\">Panel sprzedającego</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"hire-me.html\">Cześć, {imie}</a></li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "SiteElements/menu.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  68 => 15,  64 => 14,  59 => 12,  54 => 10,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>CV - Brand</title>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/ionicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/Article-List.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/Login-Form-Clean.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/NavBar-Notifications-Panel-1.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/NavBar-Notifications-Panel.css') }}\">
</head>

<body>
<nav class=\"navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient\">
    <div class=\"container\"><a class=\"navbar-brand logo\" href=\"strona_glowna.html\">System Zarządzania Biurem Nieruchomości</a><button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarNav\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
        <div
                class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"nav navbar-nav ml-auto\">
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"panel_kupujacy.html\">Panel kupującego</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"panel_sprzedajacy.html\">Panel sprzedającego</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"hire-me.html\">Cześć, {imie}</a></li>
            </ul>
        </div>
    </div>
</nav>", "SiteElements/menu.php.twig", "C:\\xampp\\htdocs\\projekt\\templates\\SiteElements\\menu.php.twig");
    }
}
