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

/* SiteElements/footer.php.twig */
class __TwigTemplate_28a2ad7ce845d6c0db3684980b763cb2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteElements/footer.php.twig"));

        // line 1
        echo "<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"links\"><a href=\"#\">O firmie</a><a href=\"#\">Kontakt</a><a href=\"#\">Autorzy</a></div>
        <div class=\"social-icons\"><a href=\"#\"><i class=\"icon ion-social-facebook\"></i></a><a href=\"#\"><i class=\"icon ion-social-instagram-outline\"></i></a><a href=\"#\"><i class=\"icon ion-social-twitter\"></i></a></div>
    </div>
</footer>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "SiteElements/footer.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 8,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"links\"><a href=\"#\">O firmie</a><a href=\"#\">Kontakt</a><a href=\"#\">Autorzy</a></div>
        <div class=\"social-icons\"><a href=\"#\"><i class=\"icon ion-social-facebook\"></i></a><a href=\"#\"><i class=\"icon ion-social-instagram-outline\"></i></a><a href=\"#\"><i class=\"icon ion-social-twitter\"></i></a></div>
    </div>
</footer>
<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js\"></script>
<script src=\"{{ asset('assets/js/theme.js') }}\"></script>
</body>

</html>", "SiteElements/footer.php.twig", "C:\\xampp\\htdocs\\projekt\\templates\\SiteElements\\footer.php.twig");
    }
}
