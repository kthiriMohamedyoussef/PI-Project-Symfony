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

/* Front/about.html.twig */
class __TwigTemplate_755d20fa24fd80c2b4c9689cf237eb27 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/about.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Eventopia - AboutUs
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 7
        yield "\t<div style=\"background-color:white; margin-bottom:95px;\">
\t\t";
        // line 8
        yield from $this->loadTemplate("Front/navbar.html.twig", "Front/about.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        yield "\t<div class=\"container-fluid mt-5 mb-5\" style=\"padding-left:0%; padding-right:0%;\">
\t\t<div style=\"width: 100%; text-align: center; margin-bottom: 50px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t url('https://images.unsplash.com/photo-1531058020387-3be344556be6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t background-size: cover;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t background-position: center;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t padding: 120px 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t box-shadow: 0 8px 24px rgba(0,0,0,0.15);\">

\t\t\t<h1 style=\"color: white; font-weight: 800; font-size: 3.5rem; margin-bottom: 25px; text-shadow: 0 2px 4px rgba(0,0,0,0.3);\">
\t\t\t\tMore Than Just Events
\t\t\t</h1>
\t\t</div>
\t</div>

\t<!-- Team Members Section -->
\t<div class=\"container py-5\">
\t\t<h2 class=\"text-center mb-5\" style=\"font-weight: 700; color: #2c3e50;\">Meet Our Team</h2>
\t\t<div
\t\t\tclass=\"row justify-content-center\">
\t\t\t<!-- Team Member 1 -->
\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-sm\">
\t\t\t\t\t<img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/omar.jfif"), "html", null, true);
        yield "\" class=\"card-img-top rounded-circle mx-auto mt-3\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Team Member\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t<h5 class=\"card-title\" style=\"font-weight: 600;\">Omar Aguil</h5>
\t\t\t\t\t\t<p class=\"text-muted\">CEO & Founder</p>
\t\t\t\t\t\t<p class=\"card-text small\">With 15 years in event management, Sarah brings unparalleled expertise to Eventopia.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Team Member 2 -->
\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-sm\">
\t\t\t\t\t<img src=\"https://randomuser.me/api/portraits/men/32.jpg\" class=\"card-img-top rounded-circle mx-auto mt-3\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Team Member\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t<h5 class=\"card-title\" style=\"font-weight: 600;\">said leffat</h5>
\t\t\t\t\t\t<p class=\"text-muted\">CTO</p>
\t\t\t\t\t\t<p class=\"card-text small\">Tech visionary ensuring our platform delivers seamless experiences.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Team Member 3 -->
\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-sm\">
\t\t\t\t\t<img src=\"https://randomuser.me/api/portraits/women/68.jpg\" class=\"card-img-top rounded-circle mx-auto mt-3\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Team Member\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t<h5 class=\"card-title\" style=\"font-weight: 600;\">Youssef kthiri</h5>
\t\t\t\t\t\t<p class=\"text-muted\">Marketing Director</p>
\t\t\t\t\t\t<p class=\"card-text small\">Creative strategist connecting events with their perfect audiences.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Team Member 4 -->
\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-sm\">
\t\t\t\t\t<img src=\"https://randomuser.me/api/portraits/men/75.jpg\" class=\"card-img-top rounded-circle mx-auto mt-3\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Team Member\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t<h5 class=\"card-title\" style=\"font-weight: 600;\">Sarra Mrabet</h5>
\t\t\t\t\t\t<p class=\"text-muted\">Head of Operations</p>
\t\t\t\t\t\t<p class=\"card-text small\">Ensures every event on our platform runs smoothly.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Team Member 5 -->
\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-sm\">
\t\t\t\t\t<img src=\"https://randomuser.me/api/portraits/women/90.jpg\" class=\"card-img-top rounded-circle mx-auto mt-3\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Team Member\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t<h5 class=\"card-title\" style=\"font-weight: 600;\">Skander ayari</h5>
\t\t\t\t\t\t<p class=\"text-muted\">UX Designer</p>
\t\t\t\t\t\t<p class=\"card-text small\">Crafts intuitive experiences for both organizers and attendees.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Platform Features -->
\t<div class=\"container py-5\">
\t\t<h2 class=\"text-center mb-5\" style=\"font-weight: 700; color: #2c3e50;\">Why Choose Eventopia?</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t<div style=\"width: 80px; height: 80px; background-color: #e74c3c; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;\">
\t\t\t\t\t\t<i class=\"fa fa-calendar-check fa-2x text-white\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h4 style=\"font-weight: 600;\">Easy Event Creation</h4>
\t\t\t\t\t<p>Simple tools to create and manage events of any size in minutes.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t<div style=\"width: 80px; height: 80px; background-color: #e74c3c; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;\">
\t\t\t\t\t\t<i class=\"fa fa-search fa-2x text-white\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h4 style=\"font-weight: 600;\">Smart Discovery</h4>
\t\t\t\t\t<p>Personalized recommendations to find events you'll love.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t<div style=\"width: 80px; height: 80px; background-color: #e74c3c; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;\">
\t\t\t\t\t\t<i class=\"fa fa-shield-alt fa-2x text-white\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h4 style=\"font-weight: 600;\">Secure Platform</h4>
\t\t\t\t\t<p>Advanced security measures to protect your data and transactions.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 129
        yield from $this->loadTemplate("Front/footer.html.twig", "Front/about.html.twig", 129)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/about.html.twig";
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
        return array (  275 => 129,  262 => 128,  158 => 36,  133 => 13,  120 => 12,  108 => 9,  106 => 8,  103 => 7,  90 => 6,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eventopia - AboutUs
{% endblock %}

{% block navbar %}
\t<div style=\"background-color:white; margin-bottom:95px;\">
\t\t{% include 'Front/navbar.html.twig' %}
\t</div>
{% endblock %}

{% block body %}
\t<div class=\"container-fluid mt-5 mb-5\" style=\"padding-left:0%; padding-right:0%;\">
\t\t<div style=\"width: 100%; text-align: center; margin-bottom: 50px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t url('https://images.unsplash.com/photo-1531058020387-3be344556be6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t background-size: cover;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t background-position: center;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t padding: 120px 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t box-shadow: 0 8px 24px rgba(0,0,0,0.15);\">

\t\t\t<h1 style=\"color: white; font-weight: 800; font-size: 3.5rem; margin-bottom: 25px; text-shadow: 0 2px 4px rgba(0,0,0,0.3);\">
\t\t\t\tMore Than Just Events
\t\t\t</h1>
\t\t</div>
\t</div>

\t<!-- Team Members Section -->
\t<div class=\"container py-5\">
\t\t<h2 class=\"text-center mb-5\" style=\"font-weight: 700; color: #2c3e50;\">Meet Our Team</h2>
\t\t<div
\t\t\tclass=\"row justify-content-center\">
\t\t\t<!-- Team Member 1 -->
\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-sm\">
\t\t\t\t\t<img src=\"{{ asset('assets/images/omar.jfif') }}\" class=\"card-img-top rounded-circle mx-auto mt-3\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Team Member\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t<h5 class=\"card-title\" style=\"font-weight: 600;\">Omar Aguil</h5>
\t\t\t\t\t\t<p class=\"text-muted\">CEO & Founder</p>
\t\t\t\t\t\t<p class=\"card-text small\">With 15 years in event management, Sarah brings unparalleled expertise to Eventopia.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Team Member 2 -->
\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-sm\">
\t\t\t\t\t<img src=\"https://randomuser.me/api/portraits/men/32.jpg\" class=\"card-img-top rounded-circle mx-auto mt-3\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Team Member\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t<h5 class=\"card-title\" style=\"font-weight: 600;\">said leffat</h5>
\t\t\t\t\t\t<p class=\"text-muted\">CTO</p>
\t\t\t\t\t\t<p class=\"card-text small\">Tech visionary ensuring our platform delivers seamless experiences.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Team Member 3 -->
\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-sm\">
\t\t\t\t\t<img src=\"https://randomuser.me/api/portraits/women/68.jpg\" class=\"card-img-top rounded-circle mx-auto mt-3\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Team Member\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t<h5 class=\"card-title\" style=\"font-weight: 600;\">Youssef kthiri</h5>
\t\t\t\t\t\t<p class=\"text-muted\">Marketing Director</p>
\t\t\t\t\t\t<p class=\"card-text small\">Creative strategist connecting events with their perfect audiences.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Team Member 4 -->
\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-sm\">
\t\t\t\t\t<img src=\"https://randomuser.me/api/portraits/men/75.jpg\" class=\"card-img-top rounded-circle mx-auto mt-3\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Team Member\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t<h5 class=\"card-title\" style=\"font-weight: 600;\">Sarra Mrabet</h5>
\t\t\t\t\t\t<p class=\"text-muted\">Head of Operations</p>
\t\t\t\t\t\t<p class=\"card-text small\">Ensures every event on our platform runs smoothly.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Team Member 5 -->
\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-sm\">
\t\t\t\t\t<img src=\"https://randomuser.me/api/portraits/women/90.jpg\" class=\"card-img-top rounded-circle mx-auto mt-3\" style=\"width: 120px; height: 120px; object-fit: cover;\" alt=\"Team Member\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t<h5 class=\"card-title\" style=\"font-weight: 600;\">Skander ayari</h5>
\t\t\t\t\t\t<p class=\"text-muted\">UX Designer</p>
\t\t\t\t\t\t<p class=\"card-text small\">Crafts intuitive experiences for both organizers and attendees.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Platform Features -->
\t<div class=\"container py-5\">
\t\t<h2 class=\"text-center mb-5\" style=\"font-weight: 700; color: #2c3e50;\">Why Choose Eventopia?</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t<div style=\"width: 80px; height: 80px; background-color: #e74c3c; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;\">
\t\t\t\t\t\t<i class=\"fa fa-calendar-check fa-2x text-white\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h4 style=\"font-weight: 600;\">Easy Event Creation</h4>
\t\t\t\t\t<p>Simple tools to create and manage events of any size in minutes.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t<div style=\"width: 80px; height: 80px; background-color: #e74c3c; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;\">
\t\t\t\t\t\t<i class=\"fa fa-search fa-2x text-white\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h4 style=\"font-weight: 600;\">Smart Discovery</h4>
\t\t\t\t\t<p>Personalized recommendations to find events you'll love.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t<div class=\"text-center p-4\">
\t\t\t\t\t<div style=\"width: 80px; height: 80px; background-color: #e74c3c; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;\">
\t\t\t\t\t\t<i class=\"fa fa-shield-alt fa-2x text-white\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h4 style=\"font-weight: 600;\">Secure Platform</h4>
\t\t\t\t\t<p>Advanced security measures to protect your data and transactions.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>{% endblock %}{% block footer %}
{% include 'Front/footer.html.twig' %}{% endblock %}
", "Front/about.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Front\\about.html.twig");
    }
}
