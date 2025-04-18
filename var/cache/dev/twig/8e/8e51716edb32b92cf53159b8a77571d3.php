<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Front/footer.html.twig */
class __TwigTemplate_c202557102ed0100e4d303e33ce83bb3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/footer.html.twig"));

        // line 1
        yield "<footer class=\"ftco-footer ftco-bg-dark ftco-section\">
\t<div class=\"container\">
\t\t<div class=\"row mb-5\">
\t\t\t<div class=\"col-md\">
\t\t\t\t<div class=\"ftco-footer-widget mb-4\">
\t\t\t\t\t<h2 class=\"ftco-heading-2\">Eventopia</h2>
\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t<ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<span class=\"icon-twitter\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<span class=\"icon-facebook\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<span class=\"icon-instagram\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md\">
\t\t\t\t<div class=\"ftco-footer-widget mb-4 ml-md-5\">
\t\t\t\t\t<h2 class=\"ftco-heading-2\">Useful Links</h2>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Speakers</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Shcedule</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Events</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md\">
\t\t\t\t<div class=\"ftco-footer-widget mb-4\">
\t\t\t\t\t<h2 class=\"ftco-heading-2\">Privacy</h2>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Career</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">About Us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Contact Us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedback");
        yield "\" class=\"py-2 d-block\">feedback</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md\">
\t\t\t\t<div class=\"ftco-footer-widget mb-4\">
\t\t\t\t\t<h2 class=\"ftco-heading-2\">Have a Questions?</h2>
\t\t\t\t\t<div class=\"block-23 mb-3\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"icon icon-map-marker\"></span>
\t\t\t\t\t\t\t\t<span class=\"text\">8040 CODECATLYST ,Bouargoub ,Nabeul ,Tunis</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon icon-phone\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">+216 90 790 790</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon icon-envelope\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">codecatlyst@esprit.tn</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">

\t\t\t\t<p>
\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\tCopyright &copy;<script>
\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t</script>
\t\t\t\t\tAll rights reserved | This web application by CODECATLYST

\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  109 => 60,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"ftco-footer ftco-bg-dark ftco-section\">
\t<div class=\"container\">
\t\t<div class=\"row mb-5\">
\t\t\t<div class=\"col-md\">
\t\t\t\t<div class=\"ftco-footer-widget mb-4\">
\t\t\t\t\t<h2 class=\"ftco-heading-2\">Eventopia</h2>
\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t<ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<span class=\"icon-twitter\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<span class=\"icon-facebook\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<span class=\"icon-instagram\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md\">
\t\t\t\t<div class=\"ftco-footer-widget mb-4 ml-md-5\">
\t\t\t\t\t<h2 class=\"ftco-heading-2\">Useful Links</h2>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Speakers</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Shcedule</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Events</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md\">
\t\t\t\t<div class=\"ftco-footer-widget mb-4\">
\t\t\t\t\t<h2 class=\"ftco-heading-2\">Privacy</h2>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Career</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">About Us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"py-2 d-block\">Contact Us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('app_feedback')}}\" class=\"py-2 d-block\">feedback</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md\">
\t\t\t\t<div class=\"ftco-footer-widget mb-4\">
\t\t\t\t\t<h2 class=\"ftco-heading-2\">Have a Questions?</h2>
\t\t\t\t\t<div class=\"block-23 mb-3\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"icon icon-map-marker\"></span>
\t\t\t\t\t\t\t\t<span class=\"text\">8040 CODECATLYST ,Bouargoub ,Nabeul ,Tunis</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon icon-phone\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">+216 90 790 790</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon icon-envelope\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">codecatlyst@esprit.tn</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">

\t\t\t\t<p>
\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\tCopyright &copy;<script>
\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t</script>
\t\t\t\t\tAll rights reserved | This web application by CODECATLYST

\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
", "Front/footer.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Front\\footer.html.twig");
    }
}
