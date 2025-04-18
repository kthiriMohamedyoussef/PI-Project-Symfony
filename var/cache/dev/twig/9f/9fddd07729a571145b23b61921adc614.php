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

/* Front/events.html.twig */
class __TwigTemplate_5152e435498191dbc552d414fc328fd7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/events.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/events.html.twig", 1);
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

        yield "Eventopia - Events";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div style=\"background-color:white; margin-bottom:95px;\">
        ";
        // line 7
        yield from $this->loadTemplate("Front/navbar.html.twig", "Front/events.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "    <!-- Hero Banner for Booking Events -->
    <div class=\"container-fluid mt-5 mb-5\" style=\"padding-left:4%; padding-right:4%;\">
        <div style=\"width: 100%; text-align: center; margin-bottom: 50px;
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url('https://images.unsplash.com/photo-1478147427282-58a87a120781?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8ZXZlbnRzfGVufDB8fDB8fHww');
        background-size: cover;
        background-position: center;
        padding: 100px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
            <h1 style=\"color: white; font-weight: bold; font-size: 3rem; margin-bottom: 20px;\">Discover Amazing Events</h1>
            <p style=\"color: white; font-size: 1.5rem; margin-bottom: 30px;\">
                Book your next unforgettable experience with
                <span style=\"color: #ffc107; font-weight: bold;\">Eventopia</span>
            </p>
        </div>
    </div>

    <!-- Events List -->
    <div class=\"container-fluid mb-5\" style=\"padding-left:8%; padding-right:8%;\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 33
            yield "            <!-- Event Card -->
            <div class=\"card mb-4\" style=\"border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                <div class=\"row g-0\">
                    <!-- Event Image (Left Side) -->
                    <div class=\"col-md-5\">
                        <img src=\"";
            // line 38
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 38)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 38)), "html", null, true)) : ("https://via.placeholder.com/500x300?text=Event+Image"));
            yield "\" 
                             class=\"img-fluid h-100\" 
                             style=\"object-fit: cover; min-height: 300px;\" 
                             alt=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 41), "html", null, true);
            yield "\">
                    </div>

                    <!-- Event Content (Right Side) -->
                    <div class=\"col-md-7\">
                        <div class=\"card-body h-100 d-flex flex-column\" style=\"padding: 2rem;\">
                            <h3 class=\"card-title\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 47), "html", null, true);
            yield "</h3>
                            <p class=\"card-text text-muted mb-3\">
                                <i class=\"far fa-calendar-alt me-2\"></i>
                                ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 50), "F j, Y"), "html", null, true);
            yield "
                                <span class=\"mx-2\">•</span>
                                <i class=\"fas fa-map-marker-alt me-2\"></i>
                                ";
            // line 53
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "espace", [], "any", false, true, false, 53), "nom", [], "any", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "espace", [], "any", false, false, false, 53), "nom", [], "any", false, false, false, 53)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "espace", [], "any", false, false, false, 53), "nom", [], "any", false, false, false, 53), "html", null, true)) : ("Location not specified"));
            yield "
                            </p>

                            <p class=\"card-text mb-4\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 56), "No description available")) : ("No description available")), "html", null, true);
            yield "</p>

                            <div class=\"mt-auto d-flex justify-content-between align-items-center\">
                                <h4 class=\"mb-0 text-primary\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "prix", [], "any", false, false, false, 59), "html", null, true);
            yield " TND</h4>
                                <a href=\"#\" class=\"btn btn-primary px-4 py-2\" style=\"font-weight: 600;\">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 66
        if (!$context['_iterated']) {
            // line 67
            yield "            <div class=\"alert alert-info\">
                No events found. Check back later!
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "    ";
        yield from $this->loadTemplate("Front/footer.html.twig", "Front/events.html.twig", 75)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/events.html.twig";
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
        return array (  253 => 75,  240 => 74,  228 => 71,  219 => 67,  217 => 66,  205 => 59,  199 => 56,  193 => 53,  187 => 50,  181 => 47,  172 => 41,  166 => 38,  159 => 33,  154 => 32,  132 => 12,  119 => 11,  107 => 8,  105 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eventopia - Events{% endblock %}

{% block navbar %}
    <div style=\"background-color:white; margin-bottom:95px;\">
        {% include 'Front/navbar.html.twig' %}
    </div>
{% endblock %}

{% block body %}
    <!-- Hero Banner for Booking Events -->
    <div class=\"container-fluid mt-5 mb-5\" style=\"padding-left:4%; padding-right:4%;\">
        <div style=\"width: 100%; text-align: center; margin-bottom: 50px;
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url('https://images.unsplash.com/photo-1478147427282-58a87a120781?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8ZXZlbnRzfGVufDB8fDB8fHww');
        background-size: cover;
        background-position: center;
        padding: 100px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
            <h1 style=\"color: white; font-weight: bold; font-size: 3rem; margin-bottom: 20px;\">Discover Amazing Events</h1>
            <p style=\"color: white; font-size: 1.5rem; margin-bottom: 30px;\">
                Book your next unforgettable experience with
                <span style=\"color: #ffc107; font-weight: bold;\">Eventopia</span>
            </p>
        </div>
    </div>

    <!-- Events List -->
    <div class=\"container-fluid mb-5\" style=\"padding-left:8%; padding-right:8%;\">
        {% for event in events %}
            <!-- Event Card -->
            <div class=\"card mb-4\" style=\"border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                <div class=\"row g-0\">
                    <!-- Event Image (Left Side) -->
                    <div class=\"col-md-5\">
                        <img src=\"{{ event.image ? '/uploads/images/' ~ event.image : 'https://via.placeholder.com/500x300?text=Event+Image' }}\" 
                             class=\"img-fluid h-100\" 
                             style=\"object-fit: cover; min-height: 300px;\" 
                             alt=\"{{ event.titre }}\">
                    </div>

                    <!-- Event Content (Right Side) -->
                    <div class=\"col-md-7\">
                        <div class=\"card-body h-100 d-flex flex-column\" style=\"padding: 2rem;\">
                            <h3 class=\"card-title\">{{ event.titre }}</h3>
                            <p class=\"card-text text-muted mb-3\">
                                <i class=\"far fa-calendar-alt me-2\"></i>
                                {{ event.date|date('F j, Y') }}
                                <span class=\"mx-2\">•</span>
                                <i class=\"fas fa-map-marker-alt me-2\"></i>
                                {{ event.espace.nom ?? 'Location not specified' }}
                            </p>

                            <p class=\"card-text mb-4\">{{ event.description|default('No description available') }}</p>

                            <div class=\"mt-auto d-flex justify-content-between align-items-center\">
                                <h4 class=\"mb-0 text-primary\">{{ event.prix }} TND</h4>
                                <a href=\"#\" class=\"btn btn-primary px-4 py-2\" style=\"font-weight: 600;\">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"alert alert-info\">
                No events found. Check back later!
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block footer %}
    {% include 'Front/footer.html.twig' %}
{% endblock %}", "Front/events.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Front\\events.html.twig");
    }
}
