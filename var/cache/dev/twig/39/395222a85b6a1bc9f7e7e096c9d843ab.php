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

/* Front/home.html.twig */
class __TwigTemplate_74800cc63fdc0f6cfe74e6c9f882e8c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/home.html.twig", 1);
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

        yield "Eventopia - Home
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
        yield from $this->loadTemplate("Front/navbar.html.twig", "Front/home.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        // line 15
        yield "\t<div style=\"width: 100%; padding: 80px 20px; background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1607869861980-da5f9b8b4969?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center; text-align: center; margin-bottom: 40px;\">
\t\t<div style=\"max-width: 800px; margin: 0 auto;\">
\t\t\t<h2 style=\"color: white; font-size: 2.8rem; font-weight: 700; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);\">
\t\t\t\tEventopia Where Dreams Become Unforgettable Events
\t\t\t</h2>
\t\t\t<p style=\"color: white; font-size: 1.4rem; margin-bottom: 30px; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);\">
\t\t\t\tThe ultimate platform for perfect event planning
\t\t\t</p>

\t\t</div>
\t</div>


\t<!-- Feature Sections -->
\t<div
\t\tclass=\"container my-5\">
\t\t<!-- Section 1: Image Right / Text Left -->
\t\t<div class=\"row align-items-center mb-5 py-4\">
\t\t\t<div
\t\t\t\tclass=\"col-md-6 pe-md-5\">
\t\t\t\t";
        // line 36
        yield "\t\t\t\t<h2 style=\"color: #03045F; font-weight: bold;\">Reserve Space and Materials</h2>
\t\t\t\t<p class=\"lead\" style=\"font-size: 1.1rem;\">
\t\t\t\t\tEventopia provides a seamless platform to book venues and event materials for your perfect occasion. 
\t\t\t\t\t                    From conference halls to wedding decorations, we've got everything covered in one place.
\t\t\t\t</p>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary mt-3\" style=\"background-color: #03045F; border: none;\">Explore Venues</a>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-md-6 ps-md-5\">
\t\t\t\t";
        // line 46
        yield "\t\t\t\t<img src=\"https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80\" alt=\"Event Venues\" class=\"img-fluid rounded shadow\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Section 2: Image Left / Text Right -->
\t\t<div class=\"row align-items-center mb-5 py-4\">
\t\t\t<div
\t\t\t\tclass=\"col-md-6 order-md-2 ps-md-5\">
\t\t\t\t";
        // line 55
        yield "\t\t\t\t<h2 style=\"color: #03045F; font-weight: bold;\">Create Your Own Event</h2>
\t\t\t\t<p class=\"lead\" style=\"font-size: 1.1rem;\">
\t\t\t\t\tOur intuitive event creation tools make planning effortless. Customize every detail, 
\t\t\t\t\t                    manage invitations, and coordinate with vendors - all from your Eventopia dashboard.
\t\t\t\t</p>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary mt-3\" style=\"background-color: #03045F; border: none;\">Start Creating</a>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-md-6 order-md-1 pe-md-5\">
\t\t\t\t";
        // line 65
        yield "\t\t\t\t<img src=\"https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80\" alt=\"Create Events\" class=\"img-fluid rounded shadow\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Section 3: Image Left / Text Right -->
\t\t<div class=\"row align-items-center mb-5 py-4\">
\t\t\t<div
\t\t\t\tclass=\"col-md-6 pe-md-5\">
\t\t\t\t";
        // line 74
        yield "\t\t\t\t<h2 style=\"color: #03045F; font-weight: bold;\">The Best Event Planning Platform</h2>
\t\t\t\t<p class=\"lead\" style=\"font-size: 1.1rem;\">
\t\t\t\t\tJoin thousands of satisfied users who trust Eventopia for their most important occasions. 
\t\t\t\t\t                    Our award-winning platform and dedicated support team ensure your event will be unforgettable.
\t\t\t\t</p>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary mt-3\" style=\"background-color: #03045F; border: none;\">Why Choose Us</a>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-md-6 ps-md-5\">
\t\t\t\t";
        // line 84
        yield "\t\t\t\t<img src=\"https://images.unsplash.com/photo-1494972308805-463bc619d34e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1173&q=80\" alt=\"Best Event Planner\" class=\"img-fluid rounded shadow\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
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

        // line 92
        yield "\t";
        yield from $this->loadTemplate("Front/footer.html.twig", "Front/home.html.twig", 92)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/home.html.twig";
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
        return array (  236 => 92,  223 => 91,  208 => 84,  197 => 74,  187 => 65,  176 => 55,  166 => 46,  155 => 36,  133 => 15,  120 => 14,  108 => 9,  106 => 8,  103 => 7,  90 => 6,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eventopia - Home
{% endblock %}
{# ______________________________________navbar__________________________________ #}
{% block navbar %}
\t<div style=\"background-color:white; margin-bottom:95px;\">
\t\t{% include 'Front/navbar.html.twig' %}
\t</div>
{% endblock %}
{# _______________________________________________________________________________ #}


{% block body %}
\t<div style=\"width: 100%; padding: 80px 20px; background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1607869861980-da5f9b8b4969?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center; text-align: center; margin-bottom: 40px;\">
\t\t<div style=\"max-width: 800px; margin: 0 auto;\">
\t\t\t<h2 style=\"color: white; font-size: 2.8rem; font-weight: 700; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);\">
\t\t\t\tEventopia Where Dreams Become Unforgettable Events
\t\t\t</h2>
\t\t\t<p style=\"color: white; font-size: 1.4rem; margin-bottom: 30px; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);\">
\t\t\t\tThe ultimate platform for perfect event planning
\t\t\t</p>

\t\t</div>
\t</div>


\t<!-- Feature Sections -->
\t<div
\t\tclass=\"container my-5\">
\t\t<!-- Section 1: Image Right / Text Left -->
\t\t<div class=\"row align-items-center mb-5 py-4\">
\t\t\t<div
\t\t\t\tclass=\"col-md-6 pe-md-5\">
\t\t\t\t{# Added right padding #}
\t\t\t\t<h2 style=\"color: #03045F; font-weight: bold;\">Reserve Space and Materials</h2>
\t\t\t\t<p class=\"lead\" style=\"font-size: 1.1rem;\">
\t\t\t\t\tEventopia provides a seamless platform to book venues and event materials for your perfect occasion. 
\t\t\t\t\t                    From conference halls to wedding decorations, we've got everything covered in one place.
\t\t\t\t</p>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary mt-3\" style=\"background-color: #03045F; border: none;\">Explore Venues</a>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-md-6 ps-md-5\">
\t\t\t\t{# Added left padding #}
\t\t\t\t<img src=\"https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80\" alt=\"Event Venues\" class=\"img-fluid rounded shadow\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Section 2: Image Left / Text Right -->
\t\t<div class=\"row align-items-center mb-5 py-4\">
\t\t\t<div
\t\t\t\tclass=\"col-md-6 order-md-2 ps-md-5\">
\t\t\t\t{# Added left padding #}
\t\t\t\t<h2 style=\"color: #03045F; font-weight: bold;\">Create Your Own Event</h2>
\t\t\t\t<p class=\"lead\" style=\"font-size: 1.1rem;\">
\t\t\t\t\tOur intuitive event creation tools make planning effortless. Customize every detail, 
\t\t\t\t\t                    manage invitations, and coordinate with vendors - all from your Eventopia dashboard.
\t\t\t\t</p>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary mt-3\" style=\"background-color: #03045F; border: none;\">Start Creating</a>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-md-6 order-md-1 pe-md-5\">
\t\t\t\t{# Added right padding #}
\t\t\t\t<img src=\"https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80\" alt=\"Create Events\" class=\"img-fluid rounded shadow\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Section 3: Image Left / Text Right -->
\t\t<div class=\"row align-items-center mb-5 py-4\">
\t\t\t<div
\t\t\t\tclass=\"col-md-6 pe-md-5\">
\t\t\t\t{# Added right padding #}
\t\t\t\t<h2 style=\"color: #03045F; font-weight: bold;\">The Best Event Planning Platform</h2>
\t\t\t\t<p class=\"lead\" style=\"font-size: 1.1rem;\">
\t\t\t\t\tJoin thousands of satisfied users who trust Eventopia for their most important occasions. 
\t\t\t\t\t                    Our award-winning platform and dedicated support team ensure your event will be unforgettable.
\t\t\t\t</p>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary mt-3\" style=\"background-color: #03045F; border: none;\">Why Choose Us</a>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-md-6 ps-md-5\">
\t\t\t\t{# Added left padding #}
\t\t\t\t<img src=\"https://images.unsplash.com/photo-1494972308805-463bc619d34e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1173&q=80\" alt=\"Best Event Planner\" class=\"img-fluid rounded shadow\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}


{% block footer %}
\t{% include 'Front/footer.html.twig' %}
{% endblock %}
", "Front/home.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Front\\home.html.twig");
    }
}
