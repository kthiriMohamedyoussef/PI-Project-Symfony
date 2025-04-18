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
class __TwigTemplate_f74de411f38df9ec6cda90a7e1ff852e extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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

    <!-- Modern Search Bar -->
    <div class=\"container mb-5\" style=\"max-width: 800px;\">
        <div class=\"search-container\">
            <span class=\"search-icon-left\">
                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z\" stroke=\"#6e8efb\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    <path d=\"M21 21L16.65 16.65\" stroke=\"#6e8efb\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                </svg>
            </span>
            <input type=\"text\" 
                   id=\"eventSearch\" 
                   class=\"search-input\" 
                   placeholder=\"Find concerts, festivals, and more...\" 
                   aria-label=\"Search events\">
            <span class=\"search-clear\" id=\"searchClear\" style=\"display: none;\">
                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M18 6L6 18\" stroke=\"#6e8efb\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    <path d=\"M6 6L18 18\" stroke=\"#6e8efb\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                </svg>
            </span>
        </div>
    </div>

    <!-- Events List -->
    <div class=\"container-fluid mb-5\" style=\"padding-left:8%; padding-right:8%;\">
        <div id=\"eventsContainer\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 57
            yield "                <!-- Event Card -->
                <div class=\"card mb-4 event-card\" style=\"border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                    <div class=\"row g-0\">
                        <!-- Event Image (Left Side) -->
                        <div class=\"col-md-5\">
                            <img src=\"";
            // line 62
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 62)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 62)), "html", null, true)) : ("https://via.placeholder.com/500x300?text=Event+Image"));
            yield "\" 
                                 class=\"img-fluid h-100\" 
                                 style=\"object-fit: cover; min-height: 300px;\" 
                                 alt=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 65), "html", null, true);
            yield "\">
                        </div>

                        <!-- Event Content (Right Side) -->
                        <div class=\"col-md-7\">
                            <div class=\"card-body h-100 d-flex flex-column\" style=\"padding: 2rem;\">
                                <h3 class=\"card-title\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 71), "html", null, true);
            yield "</h3>
                                <p class=\"card-text text-muted mb-3\">
                                    <i class=\"far fa-calendar-alt me-2\"></i>
                                    ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 74), "F j, Y"), "html", null, true);
            yield "
                                    <span class=\"mx-2\">•</span>
                                    <i class=\"fas fa-map-marker-alt me-2\"></i>
                                    ";
            // line 77
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "espace", [], "any", false, true, false, 77), "nom", [], "any", true, true, false, 77) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "espace", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "espace", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77), "html", null, true)) : ("Location not specified"));
            yield "
                                </p>

                                <p class=\"card-text mb-4\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", true, true, false, 80)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 80), "No description available")) : ("No description available")), "html", null, true);
            yield "</p>

                                <div class=\"mt-auto d-flex justify-content-between align-items-center\">
                                <h4 class=\"mb-0 text-primary\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "prix", [], "any", false, false, false, 83), "html", null, true);
            yield " TND</h4>
                                <a href=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" class=\"btn btn-primary px-4 py-2\" style=\"font-weight: 600;\">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 90
        if (!$context['_iterated']) {
            // line 91
            yield "                <div class=\"alert alert-info\">
                    No events found. Check back later!
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "        </div>
        <div id=\"noResults\" class=\"alert alert-info\" style=\"display: none;\">
            No events found matching your search
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
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

        // line 103
        yield "    ";
        yield from $this->loadTemplate("Front/footer.html.twig", "Front/events.html.twig", 103)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 107
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* Modern Search Bar Styles */
        .search-container {
            position: relative;
            display: flex;
            align-items: center;
            background: white;
            border-radius: 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #e0e0e0;
            padding: 0.8rem 1.5rem;
        }
        
        .search-container:focus-within {
            box-shadow: 0 2px 20px rgba(0,0,0,0.12);
            border-color: #a777e3;
        }
        
        .search-icon-left {
            margin-right: 12px;
            display: flex;
            align-items: center;
        }
        
        .search-input {
            flex: 1;
            border: none;
            padding: 0.2rem 0;
            font-size: 1.05rem;
            outline: none;
            background: transparent;
            color: #333;
            font-weight: 400;
        }
        
        .search-input::placeholder {
            color: #aaa;
            font-weight: 400;
        }
        
        .search-clear {
            margin-left: 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: all 0.2s ease;
        }
        
        .search-clear:hover {
            transform: scale(1.1);
        }

        /* Event Cards */
        .event-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
        }
        
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        /* No results message */
        #noResults {
            border-radius: 10px;
            background: #f8f9fa;
            border: 1px solid #e0e0e0;
            color: #6c757d;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
        }
        
        /* Price styling */
        .text-primary {
            color: #6e8efb !important;
            font-weight: 600;
        }
        
        /* Book Now button */
        .btn-primary {
            background-color: #6e8efb;
            border-color: #6e8efb;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #5d7de8;
            border-color: #5d7de8;
            transform: translateY(-2px);
        }

        /* Calendar and location icons */
        .fa-calendar-alt, .fa-map-marker-alt {
            color: #6e8efb;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 210
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 211
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('eventSearch');
            const searchClear = document.getElementById('searchClear');
            const eventsContainer = document.getElementById('eventsContainer');
            const noResults = document.getElementById('noResults');
            const originalEvents = eventsContainer.innerHTML;
            
            // Toggle clear button visibility
            searchInput.addEventListener('input', function() {
                searchClear.style.display = this.value.trim() ? 'flex' : 'none';
                if (this.value.trim().length < 2) {
                    eventsContainer.innerHTML = originalEvents;
                    noResults.style.display = 'none';
                } 
            });
            
            // Clear search functionality
            searchClear.addEventListener('click', function() {
                searchInput.value = '';
                searchClear.style.display = 'none';
                eventsContainer.innerHTML = originalEvents;
                noResults.style.display = 'none';
                searchInput.focus();
            });
            
            // Debounce function to limit how often the search executes
            function debounce(func, wait) {
                let timeout;
                return function() {
                    const context = this, args = arguments;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => {
                        func.apply(context, args);
                    }, wait);
                };
            }
            
            const performSearch = debounce(function(searchTerm) {
                if (searchTerm.length < 2) {
                    return;
                }
                
                fetch(`/events/search?q=\${encodeURIComponent(searchTerm)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.length > 0) {
                            eventsContainer.innerHTML = data.map(event => `
                                <div class=\"card mb-4 event-card\" style=\"border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                                    <div class=\"row g-0\">
                                        <div class=\"col-md-5\">
                                            <img src=\"\${event.image ? '/uploads/images/' + event.image : 'https://via.placeholder.com/500x300?text=Event+Image'}\" 
                                                 class=\"img-fluid h-100\" 
                                                 style=\"object-fit: cover; min-height: 300px;\" 
                                                 alt=\"\${event.titre}\">
                                        </div>
                                        <div class=\"col-md-7\">
                                            <div class=\"card-body h-100 d-flex flex-column\" style=\"padding: 2rem;\">
                                                <h3 class=\"card-title\">\${event.titre}</h3>
                                                <p class=\"card-text text-muted mb-3\">
                                                    <i class=\"far fa-calendar-alt me-2\"></i>
                                                    \${new Date(event.date).toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' })}
                                                    <span class=\"mx-2\">•</span>
                                                    <i class=\"fas fa-map-marker-alt me-2\"></i>
                                                    \${event.espace?.nom || 'Location not specified'}
                                                </p>
                                                <p class=\"card-text mb-4\">\${event.description || 'No description available'}</p>
                                                <div class=\"mt-auto d-flex justify-content-between align-items-center\">
                                                    <h4 class=\"mb-0 text-primary\">\${event.prix} TND</h4>
                                                    <a href=\"/event/\${event.id}\" class=\"btn btn-primary px-4 py-2\" style=\"font-weight: 600;\">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `).join('');
                            noResults.style.display = 'none';
                        } else {
                            eventsContainer.innerHTML = '';
                            noResults.style.display = 'block';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        eventsContainer.innerHTML = originalEvents;
                    });
            }, 300);
            
            searchInput.addEventListener('input', function() {
                performSearch(this.value.trim());
            });
        });
    </script>
";
        
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
        return array (  438 => 211,  425 => 210,  311 => 107,  298 => 106,  286 => 103,  273 => 102,  257 => 95,  248 => 91,  246 => 90,  235 => 84,  231 => 83,  225 => 80,  219 => 77,  213 => 74,  207 => 71,  198 => 65,  192 => 62,  185 => 57,  180 => 56,  134 => 12,  121 => 11,  109 => 8,  107 => 7,  104 => 6,  91 => 5,  68 => 3,  45 => 1,);
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

    <!-- Modern Search Bar -->
    <div class=\"container mb-5\" style=\"max-width: 800px;\">
        <div class=\"search-container\">
            <span class=\"search-icon-left\">
                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z\" stroke=\"#6e8efb\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    <path d=\"M21 21L16.65 16.65\" stroke=\"#6e8efb\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                </svg>
            </span>
            <input type=\"text\" 
                   id=\"eventSearch\" 
                   class=\"search-input\" 
                   placeholder=\"Find concerts, festivals, and more...\" 
                   aria-label=\"Search events\">
            <span class=\"search-clear\" id=\"searchClear\" style=\"display: none;\">
                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M18 6L6 18\" stroke=\"#6e8efb\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    <path d=\"M6 6L18 18\" stroke=\"#6e8efb\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                </svg>
            </span>
        </div>
    </div>

    <!-- Events List -->
    <div class=\"container-fluid mb-5\" style=\"padding-left:8%; padding-right:8%;\">
        <div id=\"eventsContainer\">
            {% for event in events %}
                <!-- Event Card -->
                <div class=\"card mb-4 event-card\" style=\"border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
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
                                <a href=\"{{ path('event_show', {'id': event.id}) }}\" class=\"btn btn-primary px-4 py-2\" style=\"font-weight: 600;\">Book Now</a>
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
        <div id=\"noResults\" class=\"alert alert-info\" style=\"display: none;\">
            No events found matching your search
        </div>
    </div>
{% endblock %}

{% block footer %}
    {% include 'Front/footer.html.twig' %}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Modern Search Bar Styles */
        .search-container {
            position: relative;
            display: flex;
            align-items: center;
            background: white;
            border-radius: 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #e0e0e0;
            padding: 0.8rem 1.5rem;
        }
        
        .search-container:focus-within {
            box-shadow: 0 2px 20px rgba(0,0,0,0.12);
            border-color: #a777e3;
        }
        
        .search-icon-left {
            margin-right: 12px;
            display: flex;
            align-items: center;
        }
        
        .search-input {
            flex: 1;
            border: none;
            padding: 0.2rem 0;
            font-size: 1.05rem;
            outline: none;
            background: transparent;
            color: #333;
            font-weight: 400;
        }
        
        .search-input::placeholder {
            color: #aaa;
            font-weight: 400;
        }
        
        .search-clear {
            margin-left: 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: all 0.2s ease;
        }
        
        .search-clear:hover {
            transform: scale(1.1);
        }

        /* Event Cards */
        .event-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
        }
        
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        /* No results message */
        #noResults {
            border-radius: 10px;
            background: #f8f9fa;
            border: 1px solid #e0e0e0;
            color: #6c757d;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
        }
        
        /* Price styling */
        .text-primary {
            color: #6e8efb !important;
            font-weight: 600;
        }
        
        /* Book Now button */
        .btn-primary {
            background-color: #6e8efb;
            border-color: #6e8efb;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #5d7de8;
            border-color: #5d7de8;
            transform: translateY(-2px);
        }

        /* Calendar and location icons */
        .fa-calendar-alt, .fa-map-marker-alt {
            color: #6e8efb;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('eventSearch');
            const searchClear = document.getElementById('searchClear');
            const eventsContainer = document.getElementById('eventsContainer');
            const noResults = document.getElementById('noResults');
            const originalEvents = eventsContainer.innerHTML;
            
            // Toggle clear button visibility
            searchInput.addEventListener('input', function() {
                searchClear.style.display = this.value.trim() ? 'flex' : 'none';
                if (this.value.trim().length < 2) {
                    eventsContainer.innerHTML = originalEvents;
                    noResults.style.display = 'none';
                } 
            });
            
            // Clear search functionality
            searchClear.addEventListener('click', function() {
                searchInput.value = '';
                searchClear.style.display = 'none';
                eventsContainer.innerHTML = originalEvents;
                noResults.style.display = 'none';
                searchInput.focus();
            });
            
            // Debounce function to limit how often the search executes
            function debounce(func, wait) {
                let timeout;
                return function() {
                    const context = this, args = arguments;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => {
                        func.apply(context, args);
                    }, wait);
                };
            }
            
            const performSearch = debounce(function(searchTerm) {
                if (searchTerm.length < 2) {
                    return;
                }
                
                fetch(`/events/search?q=\${encodeURIComponent(searchTerm)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.length > 0) {
                            eventsContainer.innerHTML = data.map(event => `
                                <div class=\"card mb-4 event-card\" style=\"border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                                    <div class=\"row g-0\">
                                        <div class=\"col-md-5\">
                                            <img src=\"\${event.image ? '/uploads/images/' + event.image : 'https://via.placeholder.com/500x300?text=Event+Image'}\" 
                                                 class=\"img-fluid h-100\" 
                                                 style=\"object-fit: cover; min-height: 300px;\" 
                                                 alt=\"\${event.titre}\">
                                        </div>
                                        <div class=\"col-md-7\">
                                            <div class=\"card-body h-100 d-flex flex-column\" style=\"padding: 2rem;\">
                                                <h3 class=\"card-title\">\${event.titre}</h3>
                                                <p class=\"card-text text-muted mb-3\">
                                                    <i class=\"far fa-calendar-alt me-2\"></i>
                                                    \${new Date(event.date).toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' })}
                                                    <span class=\"mx-2\">•</span>
                                                    <i class=\"fas fa-map-marker-alt me-2\"></i>
                                                    \${event.espace?.nom || 'Location not specified'}
                                                </p>
                                                <p class=\"card-text mb-4\">\${event.description || 'No description available'}</p>
                                                <div class=\"mt-auto d-flex justify-content-between align-items-center\">
                                                    <h4 class=\"mb-0 text-primary\">\${event.prix} TND</h4>
                                                    <a href=\"/event/\${event.id}\" class=\"btn btn-primary px-4 py-2\" style=\"font-weight: 600;\">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `).join('');
                            noResults.style.display = 'none';
                        } else {
                            eventsContainer.innerHTML = '';
                            noResults.style.display = 'block';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        eventsContainer.innerHTML = originalEvents;
                    });
            }, 300);
            
            searchInput.addEventListener('input', function() {
                performSearch(this.value.trim());
            });
        });
    </script>
{% endblock %}", "Front/events.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Front\\events.html.twig");
    }
}
