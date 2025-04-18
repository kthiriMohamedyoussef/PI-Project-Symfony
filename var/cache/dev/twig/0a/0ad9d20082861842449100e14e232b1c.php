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

/* Admin/sidebar.html.twig */
class __TwigTemplate_24d3612fcc8a18d5a5e91378fd753ca4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/sidebar.html.twig"));

        // line 1
        yield "<aside class=\"admin-sidebar\">
\t<div class=\"sidebar-header\">
\t\t<h3 class=\"brand\">
\t\t\t<i class=\"ti-unlink\"></i>
\t\t\t<span>Eventopia</span>
\t\t</h3>
\t</div>

\t<nav class=\"sidebar-nav\">
\t\t<ul>
\t\t\t<li class=\"";
        // line 11
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", ["_route"], "method", false, false, false, 11) == "admin_dashboard")) ? ("active") : (""));
        yield "\">
\t\t\t\t<a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
\t\t\t\t\t<i class=\"ti-home\"></i>
\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"";
        // line 17
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17)) && is_string($_v1 = "admin_events") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"ti-calendar\"></i>
\t\t\t\t\t<span>Events</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<!-- Add other menu items similarly -->
\t\t</ul>
\t</nav>
</aside>
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
        return "Admin/sidebar.html.twig";
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
        return array (  72 => 17,  64 => 12,  60 => 11,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\"admin-sidebar\">
\t<div class=\"sidebar-header\">
\t\t<h3 class=\"brand\">
\t\t\t<i class=\"ti-unlink\"></i>
\t\t\t<span>Eventopia</span>
\t\t</h3>
\t</div>

\t<nav class=\"sidebar-nav\">
\t\t<ul>
\t\t\t<li class=\"{{ app.request.get('_route') == 'admin_dashboard' ? 'active' }}\">
\t\t\t\t<a href=\"{{ path('admin_dashboard') }}\">
\t\t\t\t\t<i class=\"ti-home\"></i>
\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"{{ app.request.get('_route') starts with 'admin_events' ? 'active' }}\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"ti-calendar\"></i>
\t\t\t\t\t<span>Events</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<!-- Add other menu items similarly -->
\t\t</ul>
\t</nav>
</aside>
", "Admin/sidebar.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\sidebar.html.twig");
    }
}
