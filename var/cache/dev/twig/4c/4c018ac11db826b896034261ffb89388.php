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

/* /Admin/Gestionevenement/Listeprogramme.html.twig */
class __TwigTemplate_4ba65b7c8793d95044a37a9bbb571399 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'admin_content' => [$this, 'block_admin_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "Admin/Gestionevenement/admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/Admin/Gestionevenement/Listeprogramme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/Admin/Gestionevenement/Listeprogramme.html.twig"));

        $this->parent = $this->loadTemplate("Admin/Gestionevenement/admin_base.html.twig", "/Admin/Gestionevenement/Listeprogramme.html.twig", 1);
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

        yield "Programmes - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <style>
        :root {
            --primary: #0f4c75;
            --primary-light: rgba(15, 76, 117, 0.1);
            --secondary: #3282b8;
            --accent: #00B4D8;
            --accent-light: rgba(0, 180, 216, 0.2);
            --light: #F8F9FF;
            --dark: #1E1E2C;
            --success: #4FD69C;
            --error: #FF6B6B;
            --radius: 8px;
            --radius-lg: 12px;
            --shadow: 0 4px 12px rgba(15, 76, 117, 0.1);
        }

        /* Structure de la carte */
        .admin-card {
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            border: none;
            overflow: hidden;
        }

        /* En-tête de carte */
        .card-header {
            background: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 1.5rem 2rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary);
            margin: 0;
            display: flex;
            align-items: center;
        }

        .card-title i {
            margin-right: 0.75rem;
            color: var(--accent);
        }

        .card-subtitle {
            color: #6B7280;
            font-size: 0.9rem;
            margin: 0.25rem 0 0;
        }

        /* Boutons */
        .btn {
            padding: 0.5rem 1.25rem;
            border-radius: var(--radius);
            font-weight: 500;
            font-size: 0.875rem;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--primary);
            border: none;
        }

        .btn-primary:hover {
            background: var(--secondary);
            transform: translateY(-1px);
            box-shadow: var(--shadow);
        }

        .btn-light {
            background: white;
            border: 1px solid #d1d5db;
            color: var(--primary);
        }

        .btn-light:hover {
            background: #f9fafb;
            border-color: var(--accent);
        }

        /* Tableau */
        .table-responsive {
            border-radius: var(--radius);
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            font-weight: 600;
            color: var(--primary);
            padding: 1rem 1.5rem;
            vertical-align: middle;
        }

        .table tbody td {
            padding: 1rem 1.5rem;
            vertical-align: middle;
            border-top: 1px solid #e9ecef;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 180, 216, 0.05);
        }

        /* Badges pour les heures */
        .badge-time {
            padding: 0.35rem 0.75rem;
            font-weight: 500;
            background: rgba(15, 76, 117, 0.1);
            color: var(--primary);
            border-radius: 50px;
        }

        /* Actions */
        .action-btns {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-end;
        }

        .btn-action {
            padding: 0.375rem 0.75rem;
            font-size: 0.8125rem;
            border-radius: var(--radius);
        }

        .btn-edit {
            background: rgba(0, 180, 216, 0.1);
            color: var(--accent);
            border: 1px solid rgba(0, 180, 216, 0.2);
        }

        .btn-edit:hover {
            background: rgba(0, 180, 216, 0.2);
        }

        .btn-delete {
            background: rgba(255, 107, 107, 0.1);
            color: var(--error);
            border: 1px solid rgba(255, 107, 107, 0.2);
        }

        .btn-delete:hover {
            background: rgba(255, 107, 107, 0.2);
        }

        /* Message vide */
        .empty-state {
            padding: 3rem 1rem;
            text-align: center;
            background: #f8f9fa;
        }

        .empty-icon {
            width: 80px;
            height: 80px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(15, 76, 117, 0.1);
            border-radius: 50%;
            margin-bottom: 1.5rem;
        }

        .empty-icon i {
            font-size: 2rem;
            color: var(--primary);
        }

        .empty-title {
            font-size: 1.25rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .empty-text {
            color: #6B7280;
            margin-bottom: 1.5rem;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Pied de page */
        .card-footer {
            background: white;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            padding: 1rem 2rem;
            font-size: 0.875rem;
            color: #6B7280;
        }

        /* Alertes */
        .alert {
            border-radius: var(--radius);
            padding: 1rem 1.5rem;
            margin: 1.5rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 218
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        // line 219
        yield "<div class=\"container-fluid\">
    <div class=\"admin-card\">
        <!-- En-tête -->
        <div class=\"card-header\">
            <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center\">
                <div class=\"mb-3 mb-md-0\">
                    <h2 class=\"card-title\">
                        <i class=\"far fa-calendar-alt\"></i>
                        Programme : ";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 227, $this->source); })()), "titre", [], "any", false, false, false, 227), "html", null, true);
        yield "
                    </h2>
                    <p class=\"card-subtitle\">
                        <i class=\"far fa-clock me-1\"></i>
                        ";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 231, $this->source); })()), "date", [], "any", false, false, false, 231), "d F Y"), "html", null, true);
        yield "
                    </p>
                </div>
                <div class=\"d-flex flex-wrap gap-2\">
                    <a href=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_new", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 235, $this->source); })()), "id", [], "any", false, false, false, 235)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i> 
                        <span>Nouvelle activité</span>
                    </a>
                    <a href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_liste");
        yield "\" class=\"btn btn-light\">
                        <i class=\"fas fa-arrow-left me-2\"></i>
                        <span>Retour aux événements</span>
                    </a>
                </div>
            </div>
        </div>

        <div class=\"card-body p-0\">
            <!-- Messages flash -->
            ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 250, $this->source); })()), "flashes", ["success"], "method", false, false, false, 250));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 251
            yield "                <div class=\"alert alert-success alert-dismissible fade show m-3 rounded\">
                    <div class=\"d-flex align-items-center\">
                        <i class=\"fas fa-check-circle me-2\"></i>
                        <span>";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                        <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        yield "
            ";
        // line 260
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 260, $this->source); })())) > 0)) {
            // line 261
            yield "            <!-- Tableau amélioré -->
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"ps-4 py-3\">Activité</th>
                            <th class=\"text-center py-3\">Heure Début</th>
                            <th class=\"text-center py-3\">Heure Fin</th>
                            <th class=\"text-end pe-4 py-3\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 273, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
                // line 274
                yield "                        <tr>
                            <td class=\"ps-4\">
                                <strong>";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "activite", [], "any", false, false, false, 276), "html", null, true);
                yield "</strong>
                            </td>
                            <td class=\"text-center\">
                                <span class=\"badge-time\">
                                    ";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "heureDebut", [], "any", false, false, false, 280), "H:i"), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td class=\"text-center\">
                                <span class=\"badge-time\">
                                    ";
                // line 285
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "heureFin", [], "any", false, false, false, 285), "H:i"), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td class=\"text-end pe-4\">
                                <div class=\"action-btns\">
                                    <a href=\"";
                // line 290
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 290)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-action btn-edit\"
                                       data-bs-toggle=\"tooltip\"
                                       title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" 
                                          action=\"";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 297)]), "html", null, true);
                yield "\" 
                                          class=\"d-inline\"
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette activité ?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 301
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 301))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" 
                                                class=\"btn btn-action btn-delete\"
                                                data-bs-toggle=\"tooltip\"
                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        ";
                $context['_iterated'] = true;
            }
            // line 312
            if (!$context['_iterated']) {
                // line 313
                yield "                        <tr>
                            <td colspan=\"4\" class=\"empty-state\">
                                <div class=\"empty-icon\">
                                    <i class=\"fas fa-calendar-times\"></i>
                                </div>
                                <h5 class=\"empty-title\">Aucune activité programmée</h5>
                                <p class=\"empty-text\">Commencez par ajouter des activités à votre programme</p>
                                <a href=\"";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_new", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 320, $this->source); })()), "id", [], "any", false, false, false, 320)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-primary\">
                                    <i class=\"fas fa-plus me-2\"></i> Ajouter une activité
                                </a>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['programme'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            yield "                    </tbody>
                </table>
            </div>
            ";
        }
        // line 331
        yield "        </div>

        ";
        // line 333
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 333, $this->source); })())) > 0)) {
            // line 334
            yield "        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"text-muted small\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    ";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 338, $this->source); })())), "html", null, true);
            yield " activité(s) programmée(s)
                </div>
                <div>
                    ";
            // line 342
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 342, $this->source); })()), "id", [], "any", false, false, false, 342)]), "html", null, true);
            yield "\" 
                    class=\"btn btn-sm btn-outline-secondary\"
                    target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        // line 351
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 355
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

        // line 356
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    \$(document).ready(function() {
        // Initialisation des tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Effet de survol sur les lignes
        \$('tbody tr').hover(
            function() {
                \$(this).css('background-color', 'rgba(0, 0, 0, 0.02)');
            }, 
            function() {
                \$(this).css('background-color', '');
            }
        );
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
        return "/Admin/Gestionevenement/Listeprogramme.html.twig";
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
        return array (  575 => 356,  562 => 355,  549 => 351,  536 => 342,  530 => 338,  524 => 334,  522 => 333,  518 => 331,  512 => 327,  499 => 320,  490 => 313,  488 => 312,  472 => 301,  465 => 297,  455 => 290,  447 => 285,  439 => 280,  432 => 276,  428 => 274,  423 => 273,  409 => 261,  407 => 260,  404 => 259,  393 => 254,  388 => 251,  384 => 250,  371 => 240,  363 => 235,  356 => 231,  349 => 227,  339 => 219,  326 => 218,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Admin/Gestionevenement/admin_base.html.twig' %}

{% block title %}Programmes - {{ evenement.titre }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <style>
        :root {
            --primary: #0f4c75;
            --primary-light: rgba(15, 76, 117, 0.1);
            --secondary: #3282b8;
            --accent: #00B4D8;
            --accent-light: rgba(0, 180, 216, 0.2);
            --light: #F8F9FF;
            --dark: #1E1E2C;
            --success: #4FD69C;
            --error: #FF6B6B;
            --radius: 8px;
            --radius-lg: 12px;
            --shadow: 0 4px 12px rgba(15, 76, 117, 0.1);
        }

        /* Structure de la carte */
        .admin-card {
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            border: none;
            overflow: hidden;
        }

        /* En-tête de carte */
        .card-header {
            background: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 1.5rem 2rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary);
            margin: 0;
            display: flex;
            align-items: center;
        }

        .card-title i {
            margin-right: 0.75rem;
            color: var(--accent);
        }

        .card-subtitle {
            color: #6B7280;
            font-size: 0.9rem;
            margin: 0.25rem 0 0;
        }

        /* Boutons */
        .btn {
            padding: 0.5rem 1.25rem;
            border-radius: var(--radius);
            font-weight: 500;
            font-size: 0.875rem;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--primary);
            border: none;
        }

        .btn-primary:hover {
            background: var(--secondary);
            transform: translateY(-1px);
            box-shadow: var(--shadow);
        }

        .btn-light {
            background: white;
            border: 1px solid #d1d5db;
            color: var(--primary);
        }

        .btn-light:hover {
            background: #f9fafb;
            border-color: var(--accent);
        }

        /* Tableau */
        .table-responsive {
            border-radius: var(--radius);
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            font-weight: 600;
            color: var(--primary);
            padding: 1rem 1.5rem;
            vertical-align: middle;
        }

        .table tbody td {
            padding: 1rem 1.5rem;
            vertical-align: middle;
            border-top: 1px solid #e9ecef;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 180, 216, 0.05);
        }

        /* Badges pour les heures */
        .badge-time {
            padding: 0.35rem 0.75rem;
            font-weight: 500;
            background: rgba(15, 76, 117, 0.1);
            color: var(--primary);
            border-radius: 50px;
        }

        /* Actions */
        .action-btns {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-end;
        }

        .btn-action {
            padding: 0.375rem 0.75rem;
            font-size: 0.8125rem;
            border-radius: var(--radius);
        }

        .btn-edit {
            background: rgba(0, 180, 216, 0.1);
            color: var(--accent);
            border: 1px solid rgba(0, 180, 216, 0.2);
        }

        .btn-edit:hover {
            background: rgba(0, 180, 216, 0.2);
        }

        .btn-delete {
            background: rgba(255, 107, 107, 0.1);
            color: var(--error);
            border: 1px solid rgba(255, 107, 107, 0.2);
        }

        .btn-delete:hover {
            background: rgba(255, 107, 107, 0.2);
        }

        /* Message vide */
        .empty-state {
            padding: 3rem 1rem;
            text-align: center;
            background: #f8f9fa;
        }

        .empty-icon {
            width: 80px;
            height: 80px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(15, 76, 117, 0.1);
            border-radius: 50%;
            margin-bottom: 1.5rem;
        }

        .empty-icon i {
            font-size: 2rem;
            color: var(--primary);
        }

        .empty-title {
            font-size: 1.25rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .empty-text {
            color: #6B7280;
            margin-bottom: 1.5rem;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Pied de page */
        .card-footer {
            background: white;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            padding: 1rem 2rem;
            font-size: 0.875rem;
            color: #6B7280;
        }

        /* Alertes */
        .alert {
            border-radius: var(--radius);
            padding: 1rem 1.5rem;
            margin: 1.5rem;
        }
    </style>
{% endblock %}

{% block admin_content %}
<div class=\"container-fluid\">
    <div class=\"admin-card\">
        <!-- En-tête -->
        <div class=\"card-header\">
            <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center\">
                <div class=\"mb-3 mb-md-0\">
                    <h2 class=\"card-title\">
                        <i class=\"far fa-calendar-alt\"></i>
                        Programme : {{ evenement.titre }}
                    </h2>
                    <p class=\"card-subtitle\">
                        <i class=\"far fa-clock me-1\"></i>
                        {{ evenement.date|date('d F Y') }}
                    </p>
                </div>
                <div class=\"d-flex flex-wrap gap-2\">
                    <a href=\"{{ path('admin_programme_new', {'eventId': evenement.id}) }}\" 
                       class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i> 
                        <span>Nouvelle activité</span>
                    </a>
                    <a href=\"{{ path('admin_evenement_liste') }}\" class=\"btn btn-light\">
                        <i class=\"fas fa-arrow-left me-2\"></i>
                        <span>Retour aux événements</span>
                    </a>
                </div>
            </div>
        </div>

        <div class=\"card-body p-0\">
            <!-- Messages flash -->
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success alert-dismissible fade show m-3 rounded\">
                    <div class=\"d-flex align-items-center\">
                        <i class=\"fas fa-check-circle me-2\"></i>
                        <span>{{ message }}</span>
                        <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                </div>
            {% endfor %}

            {% if programmes|length > 0 %}
            <!-- Tableau amélioré -->
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"ps-4 py-3\">Activité</th>
                            <th class=\"text-center py-3\">Heure Début</th>
                            <th class=\"text-center py-3\">Heure Fin</th>
                            <th class=\"text-end pe-4 py-3\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for programme in programmes %}
                        <tr>
                            <td class=\"ps-4\">
                                <strong>{{ programme.activite }}</strong>
                            </td>
                            <td class=\"text-center\">
                                <span class=\"badge-time\">
                                    {{ programme.heureDebut|date('H:i') }}
                                </span>
                            </td>
                            <td class=\"text-center\">
                                <span class=\"badge-time\">
                                    {{ programme.heureFin|date('H:i') }}
                                </span>
                            </td>
                            <td class=\"text-end pe-4\">
                                <div class=\"action-btns\">
                                    <a href=\"{{ path('admin_programme_edit', {'id': programme.id}) }}\" 
                                       class=\"btn btn-action btn-edit\"
                                       data-bs-toggle=\"tooltip\"
                                       title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" 
                                          action=\"{{ path('admin_programme_delete', {'id': programme.id}) }}\" 
                                          class=\"d-inline\"
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette activité ?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ programme.id) }}\">
                                        <button type=\"submit\" 
                                                class=\"btn btn-action btn-delete\"
                                                data-bs-toggle=\"tooltip\"
                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"empty-state\">
                                <div class=\"empty-icon\">
                                    <i class=\"fas fa-calendar-times\"></i>
                                </div>
                                <h5 class=\"empty-title\">Aucune activité programmée</h5>
                                <p class=\"empty-text\">Commencez par ajouter des activités à votre programme</p>
                                <a href=\"{{ path('admin_programme_new', {'eventId': evenement.id}) }}\" 
                                   class=\"btn btn-primary\">
                                    <i class=\"fas fa-plus me-2\"></i> Ajouter une activité
                                </a>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            {% endif %}
        </div>

        {% if programmes|length > 0 %}
        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"text-muted small\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    {{ programmes|length }} activité(s) programmée(s)
                </div>
                <div>
                    {# Replace the existing print button with this #}
                    <a href=\"{{ path('admin_programme_pdf', {'id': evenement.id}) }}\" 
                    class=\"btn btn-sm btn-outline-secondary\"
                    target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                    </a>
                </div>
            </div>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    \$(document).ready(function() {
        // Initialisation des tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Effet de survol sur les lignes
        \$('tbody tr').hover(
            function() {
                \$(this).css('background-color', 'rgba(0, 0, 0, 0.02)');
            }, 
            function() {
                \$(this).css('background-color', '');
            }
        );
    });
</script>
{% endblock %}", "/Admin/Gestionevenement/Listeprogramme.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Gestionevenement\\Listeprogramme.html.twig");
    }
}
