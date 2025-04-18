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

/* Admin/Listevenement.html.twig */
class __TwigTemplate_13568a992edefb1dd91bef1cc1be692b extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Listevenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Listevenement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/Listevenement.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Admin - Liste des Événements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Gestion des Événements</h1>

        <div class=\"d-flex justify-content-between mb-4\">
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_ajouter");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter un événement
            </a>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>Catégorie</th>
                        <th>Prix</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 30
            yield "                        <tr>
                            <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                            <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
            yield "</td>
                            <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "categorie", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                            <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "prix", [], "any", false, false, false, 34), "html", null, true);
            yield " TND</td>
                            <td>
                                <span class=\"badge 
                                    ";
            // line 37
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 37) == "publié")) {
                yield "bg-success
                                    ";
            } else {
                // line 38
                yield "bg-warning
                                    ";
            }
            // line 39
            yield "\">
                                    ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 40), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <div class=\"btn-group\" role=\"group\">
                                    ";
            // line 46
            yield "                                    <button class=\"btn btn-sm btn-outline-primary\" disabled>
                                        <i class=\"fas fa-eye\"></i>
                                    </button>
                                    <button class=\"btn btn-sm btn-outline-secondary\" disabled>
                                        <i class=\"fas fa-edit\"></i>
                                    </button>
                                    <button class=\"btn btn-sm btn-outline-danger\" disabled>
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 58
        if (!$context['_iterated']) {
            // line 59
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center\">Aucun événement trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                </tbody>
            </table>
        </div>
    </div>
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
        return "Admin/Listevenement.html.twig";
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
        return array (  200 => 63,  191 => 59,  189 => 58,  173 => 46,  165 => 40,  162 => 39,  158 => 38,  153 => 37,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  132 => 30,  127 => 29,  106 => 11,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/Admin/Evenement/liste.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Admin - Liste des Événements{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Gestion des Événements</h1>

        <div class=\"d-flex justify-content-between mb-4\">
            <a href=\"{{ path('admin_evenement_ajouter') }}\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter un événement
            </a>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>Catégorie</th>
                        <th>Prix</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for evenement in evenements %}
                        <tr>
                            <td>{{ evenement.titre }}</td>
                            <td>{{ evenement.date|date('d/m/Y') }}</td>
                            <td>{{ evenement.categorie }}</td>
                            <td>{{ evenement.prix }} TND</td>
                            <td>
                                <span class=\"badge 
                                    {% if evenement.statut == 'publié' %}bg-success
                                    {% else %}bg-warning
                                    {% endif %}\">
                                    {{ evenement.statut }}
                                </span>
                            </td>
                            <td>
                                <div class=\"btn-group\" role=\"group\">
                                    {# Boutons d'action à ajouter plus tard #}
                                    <button class=\"btn btn-sm btn-outline-primary\" disabled>
                                        <i class=\"fas fa-eye\"></i>
                                    </button>
                                    <button class=\"btn btn-sm btn-outline-secondary\" disabled>
                                        <i class=\"fas fa-edit\"></i>
                                    </button>
                                    <button class=\"btn btn-sm btn-outline-danger\" disabled>
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center\">Aucun événement trouvé</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}", "Admin/Listevenement.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Listevenement.html.twig");
    }
}
