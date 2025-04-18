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

/* Admin/Gestionevenement/sidebar.html.twig */
class __TwigTemplate_c0a7789f529e14b1bfa2ab1cb38ea08f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionevenement/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionevenement/sidebar.html.twig"));

        // line 1
        yield "<aside class=\"admin-sidebar\" style=\"
    width: var(--sidebar-width);
    background: var(--sidebar-bg);
    color: white;
    position: fixed;
    height: 100vh;
    left: 0;
    top: 0;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    border-right: 1px solid rgba(255,255,255,0.1);
\">

    <!-- Header -->
    <div style=\"padding: 25px; border-bottom: 1px solid rgba(255,255,255,0.1); text-align: center;\">
        <h3 style=\"margin: 0; font-weight: 600; letter-spacing: 1px;\">EVENTOPIA</h3>
    </div>

    <!-- Menu principal -->
    <nav style=\"flex: 1; padding: 20px 0; display: flex; flex-direction: column;\">
        <!-- Events Dropdown -->
        <div style=\"position: relative;\">
            <div id=\"events-dropdown-btn\" 
                 style=\"color: white; 
                        padding: 14px 25px; 
                        margin: 5px 15px; 
                        display: flex; 
                        align-items: center; 
                        text-decoration: none; 
                        border-radius: 6px;
                        transition: all 0.3s;
                        cursor: pointer;
                        ";
        // line 34
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "attributes", [], "any", false, false, false, 34), "get", ["_route"], "method", false, false, false, 34)) && is_string($_v1 = "admin_evenement_") && str_starts_with($_v0, $_v1))) {
            yield "background: rgba(255,255,255,0.15);";
        }
        yield "\">
                <i class=\"fas fa-calendar\" style=\"margin-right: 15px; font-size: 1.1rem;\"></i>
                <span>Events</span>
                <i class=\"fas fa-chevron-down\" id=\"dropdown-chevron\" style=\"margin-left: auto; font-size: 0.9rem; transition: transform 0.3s;\"></i>
            </div>

            <!-- Dropdown Content -->
            <div id=\"events-dropdown-content\" 
                 style=\"display: none; 
                        margin-left: 30px;
                        margin-right: 15px;
                        background: rgba(0,0,0,0.2); 
                        border-radius: 0 0 6px 6px;
                        overflow: hidden;\">
                <!-- List View -->
                <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_liste");
        yield "\" 
                   style=\"color: white; 
                          padding: 12px 25px; 
                          display: flex; 
                          align-items: center; 
                          text-decoration: none; 
                          transition: all 0.3s;
                          ";
        // line 56
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", ["_route"], "method", false, false, false, 56)) && is_string($_v3 = "admin_evenement_liste") && str_starts_with($_v2, $_v3))) {
            yield "background: rgba(255,255,255,0.15);";
        }
        yield "\">
                   <i class=\"fas fa-list\" style=\"margin-right: 15px; font-size: 1rem;\"></i>
                   <span>List Events</span>
                </a>

                <!-- Calendar -->
                <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_calendar");
        yield "\" 
                   style=\"color: white; 
                          padding: 12px 25px; 
                          display: flex; 
                          align-items: center; 
                          text-decoration: none; 
                          transition: all 0.3s;
                          ";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "attributes", [], "any", false, false, false, 69), "get", ["_route"], "method", false, false, false, 69) == "admin_evenement_calendar")) {
            yield "background: rgba(255,255,255,0.15);";
        }
        yield "\">
                   <i class=\"fas fa-calendar-alt\" style=\"margin-right: 15px; font-size: 1rem;\"></i>
                   <span>Calendar</span>
                </a>

                <!-- Add Event -->
                <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_ajouter");
        yield "\" 
                   style=\"color: white; 
                          padding: 12px 25px; 
                          display: flex; 
                          align-items: center; 
                          text-decoration: none; 
                          transition: all 0.3s;
                          ";
        // line 82
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "attributes", [], "any", false, false, false, 82), "get", ["_route"], "method", false, false, false, 82) == "admin_evenement_ajouter")) {
            yield "background: rgba(255,255,255,0.15);";
        }
        yield "\">
                   <i class=\"fas fa-plus-circle\" style=\"margin-right: 15px; font-size: 1rem;\"></i>
                   <span>Add Event</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Section utilisateur -->
    <div style=\"padding: 20px; border-top: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.1);\">
        <div style=\"display: flex; align-items: center;\">
            <div style=\"width: 45px; height: 45px; border-radius: 50%; background: rgba(255,255,255,0.1); 
                     display: flex; align-items: center; justify-content: center; margin-right: 15px;
                     border: 2px solid #bbe1fa;\">
                <i class=\"fas fa-user\"></i>
            </div>
            <div>
                <div style=\"font-weight: 500;\">Administrator</div>
            </div>
        </div>
    </div>
</aside>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownBtn = document.getElementById('events-dropdown-btn');
    const dropdownContent = document.getElementById('events-dropdown-content');
    const chevron = document.getElementById('dropdown-chevron');
    
    // Toggle dropdown on click
    dropdownBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        const isOpen = dropdownContent.style.display === 'block';
        dropdownContent.style.display = isOpen ? 'none' : 'block';
        chevron.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
    });
    
    // Close dropdown when clicking anywhere else
    document.addEventListener('click', function() {
        dropdownContent.style.display = 'none';
        chevron.style.transform = 'rotate(0deg)';
    });
    
    // Prevent dropdown from closing when clicking inside it
    dropdownContent.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});
</script>

<style>
#events-dropdown-content a:hover {
    background: rgba(255,255,255,0.1) !important;
}

#events-dropdown-btn:hover {
    background: rgba(255,255,255,0.1) !important;
}

#events-dropdown-content {
    animation: fadeIn 0.2s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/Gestionevenement/sidebar.html.twig";
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
        return array (  155 => 82,  145 => 75,  134 => 69,  124 => 62,  113 => 56,  103 => 49,  83 => 34,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\"admin-sidebar\" style=\"
    width: var(--sidebar-width);
    background: var(--sidebar-bg);
    color: white;
    position: fixed;
    height: 100vh;
    left: 0;
    top: 0;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    border-right: 1px solid rgba(255,255,255,0.1);
\">

    <!-- Header -->
    <div style=\"padding: 25px; border-bottom: 1px solid rgba(255,255,255,0.1); text-align: center;\">
        <h3 style=\"margin: 0; font-weight: 600; letter-spacing: 1px;\">EVENTOPIA</h3>
    </div>

    <!-- Menu principal -->
    <nav style=\"flex: 1; padding: 20px 0; display: flex; flex-direction: column;\">
        <!-- Events Dropdown -->
        <div style=\"position: relative;\">
            <div id=\"events-dropdown-btn\" 
                 style=\"color: white; 
                        padding: 14px 25px; 
                        margin: 5px 15px; 
                        display: flex; 
                        align-items: center; 
                        text-decoration: none; 
                        border-radius: 6px;
                        transition: all 0.3s;
                        cursor: pointer;
                        {% if app.request.attributes.get('_route') starts with 'admin_evenement_' %}background: rgba(255,255,255,0.15);{% endif %}\">
                <i class=\"fas fa-calendar\" style=\"margin-right: 15px; font-size: 1.1rem;\"></i>
                <span>Events</span>
                <i class=\"fas fa-chevron-down\" id=\"dropdown-chevron\" style=\"margin-left: auto; font-size: 0.9rem; transition: transform 0.3s;\"></i>
            </div>

            <!-- Dropdown Content -->
            <div id=\"events-dropdown-content\" 
                 style=\"display: none; 
                        margin-left: 30px;
                        margin-right: 15px;
                        background: rgba(0,0,0,0.2); 
                        border-radius: 0 0 6px 6px;
                        overflow: hidden;\">
                <!-- List View -->
                <a href=\"{{ path('admin_evenement_liste') }}\" 
                   style=\"color: white; 
                          padding: 12px 25px; 
                          display: flex; 
                          align-items: center; 
                          text-decoration: none; 
                          transition: all 0.3s;
                          {% if app.request.attributes.get('_route') starts with 'admin_evenement_liste' %}background: rgba(255,255,255,0.15);{% endif %}\">
                   <i class=\"fas fa-list\" style=\"margin-right: 15px; font-size: 1rem;\"></i>
                   <span>List Events</span>
                </a>

                <!-- Calendar -->
                <a href=\"{{ path('admin_evenement_calendar') }}\" 
                   style=\"color: white; 
                          padding: 12px 25px; 
                          display: flex; 
                          align-items: center; 
                          text-decoration: none; 
                          transition: all 0.3s;
                          {% if app.request.attributes.get('_route') == 'admin_evenement_calendar' %}background: rgba(255,255,255,0.15);{% endif %}\">
                   <i class=\"fas fa-calendar-alt\" style=\"margin-right: 15px; font-size: 1rem;\"></i>
                   <span>Calendar</span>
                </a>

                <!-- Add Event -->
                <a href=\"{{ path('admin_evenement_ajouter') }}\" 
                   style=\"color: white; 
                          padding: 12px 25px; 
                          display: flex; 
                          align-items: center; 
                          text-decoration: none; 
                          transition: all 0.3s;
                          {% if app.request.attributes.get('_route') == 'admin_evenement_ajouter' %}background: rgba(255,255,255,0.15);{% endif %}\">
                   <i class=\"fas fa-plus-circle\" style=\"margin-right: 15px; font-size: 1rem;\"></i>
                   <span>Add Event</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Section utilisateur -->
    <div style=\"padding: 20px; border-top: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.1);\">
        <div style=\"display: flex; align-items: center;\">
            <div style=\"width: 45px; height: 45px; border-radius: 50%; background: rgba(255,255,255,0.1); 
                     display: flex; align-items: center; justify-content: center; margin-right: 15px;
                     border: 2px solid #bbe1fa;\">
                <i class=\"fas fa-user\"></i>
            </div>
            <div>
                <div style=\"font-weight: 500;\">Administrator</div>
            </div>
        </div>
    </div>
</aside>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownBtn = document.getElementById('events-dropdown-btn');
    const dropdownContent = document.getElementById('events-dropdown-content');
    const chevron = document.getElementById('dropdown-chevron');
    
    // Toggle dropdown on click
    dropdownBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        const isOpen = dropdownContent.style.display === 'block';
        dropdownContent.style.display = isOpen ? 'none' : 'block';
        chevron.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
    });
    
    // Close dropdown when clicking anywhere else
    document.addEventListener('click', function() {
        dropdownContent.style.display = 'none';
        chevron.style.transform = 'rotate(0deg)';
    });
    
    // Prevent dropdown from closing when clicking inside it
    dropdownContent.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});
</script>

<style>
#events-dropdown-content a:hover {
    background: rgba(255,255,255,0.1) !important;
}

#events-dropdown-btn:hover {
    background: rgba(255,255,255,0.1) !important;
}

#events-dropdown-content {
    animation: fadeIn 0.2s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>", "Admin/Gestionevenement/sidebar.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Gestionevenement\\sidebar.html.twig");
    }
}
