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

/* /Admin/Gestionevenement/Listevenement.html.twig */
class __TwigTemplate_ba28756304b78de281424b2487884a31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/Admin/Gestionevenement/Listevenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/Admin/Gestionevenement/Listevenement.html.twig"));

        $this->parent = $this->loadTemplate("Admin/Gestionevenement/admin_base.html.twig", "/Admin/Gestionevenement/Listevenement.html.twig", 1);
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

        yield "Eventopia | Admin - Événements";
        
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
            --primary-light: #3282b8;
            --primary-lighter: #bbe1fa;
            --light: #f8f9fc;
            --border: #e0e3e8;
            --text: #2d3748;
            --text-light: #718096;
            --sidebar-width: 280px;
            --success: #4fd69c;
            --warning: #ffc107;
            --danger: #ff6b6b;
        }

        /* Structure principale améliorée */
        .admin-content-container {
            padding: 1.5rem 1.5rem 1.5rem 1rem;
            margin-left: 100px;
            background: var(--light);
            min-height: 100vh;
            width: calc(100% - 285px);
        }

        /* En-tête modernisé */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--primary-lighter);
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .page-title i {
            color: var(--primary-light);
        }

        /* Nouveau design de tableau */
        .events-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 8px;
            background: transparent;
        }

        .events-table thead {
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .events-table th {
            background-color: var(--primary);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
        }

        .events-table th:first-child {
            border-radius: 8px 0 0 8px;
        }

        .events-table th:last-child {
            border-radius: 0 8px 8px 0;
        }

        .events-table tbody tr {
            background: white;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .events-table tbody tr:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .events-table td {
            padding: 15px;
            vertical-align: middle;
            position: relative;
        }

        .events-table td:not(:last-child)::after {
            content: \"\";
            position: absolute;
            right: 0;
            top: 15%;
            height: 70%;
            width: 1px;
            background: rgba(0,0,0,0.05);
        }

        /* Cellule image améliorée */
        .event-image-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .event-image {
            width: 70px;
            height: 50px;
            border-radius: 6px;
            object-fit: cover;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .event-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .event-image i {
            color: var(--primary-light);
            font-size: 1.2rem;
        }

        /* Informations événement */
        .event-info {
            display: flex;
            flex-direction: column;
        }

        .event-title {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 4px;
            font-size: 0.95rem;
        }

        .event-meta {
            display: flex;
            gap: 10px;
            font-size: 0.8rem;
            color: var(--text-light);
        }

        .event-meta span {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        /* Statut amélioré */
        .event-status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-active {
            background-color: rgba(79, 214, 156, 0.15);
            color: var(--success);
        }

        .status-inactive {
            background-color: rgba(255, 107, 107, 0.15);
            color: var(--danger);
        }

        .status-pending {
            background-color: rgba(255, 193, 7, 0.15);
            color: var(--warning);
        }

        /* Actions modernisées */
        .event-actions {
            display: flex;
            gap: 8px;
        }

        .action-btn {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: none;
            color: var(--text-light);
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .action-btn.edit {
            color: var(--primary-light);
        }

        .action-btn.edit:hover {
            background: var(--primary-light);
            color: white;
        }

        .action-btn.delete {
            color: var(--danger);
        }

        .action-btn.delete:hover {
            background: var(--danger);
            color: white;
        }

        .action-btn.program {
            color: var(--success);
        }

        .action-btn.program:hover {
            background: var(--success);
            color: white;
        }

        /* État vide amélioré */
        .empty-state {
            background: white;
            border-radius: 12px;
            padding: 3rem 2rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            margin-top: 20px;
        }

        .empty-icon {
            font-size: 3rem;
            color: var(--primary-lighter);
            margin-bottom: 1.5rem;
        }

        .empty-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.75rem;
        }

        .empty-text {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .empty-action {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .empty-action:hover {
            background: var(--primary-light);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(15, 76, 117, 0.2);
        }

        /* Barre de recherche/filtres */
        .table-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .search-box {
            position: relative;
            width: 300px;
        }

        .search-input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(50, 130, 184, 0.2);
            outline: none;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }

        .search-clear {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            cursor: pointer;
            display: none;
        }

        .search-clear.active {
            display: block;
        }

        .table-filters {
            display: flex;
            gap: 10px;
        }

        .filter-btn {
            padding: 8px 15px;
            border-radius: 8px;
            background: white;
            border: 1px solid var(--border);
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-light);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .table-controls {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .search-box {
                width: 100%;
            }
        }

        @media (max-width: 992px) {
            .admin-content-container {
                margin-left: 100px;
                width: calc(100% - 100px);
                padding: 1.5rem 1.5rem 1.5rem 1.2rem;
            }
            
            .events-table {
                display: block;
                overflow-x: auto;
            }
            
            .event-image-container {
                min-width: 200px;
            }
        }

        @media (max-width: 768px) {
            .event-actions {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .action-btn {
                width: 30px;
                height: 30px;
                font-size: 0.8rem;
            }
            
            .empty-state {
                padding: 2rem 1rem;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 420
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

        // line 421
        yield "<div class=\"admin-content-container\">
    <div class=\"page-header\">
        <h1 class=\"page-title\">
            <i class=\"fas fa-calendar-alt\"></i> Liste des événements
        </h1>
       
    </div>

    <!-- Barre de recherche -->
    <form method=\"get\" action=\"";
        // line 430
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_liste");
        yield "\" class=\"table-controls\">
        <div class=\"search-box\">
            <i class=\"fas fa-search search-icon\"></i>
            <input type=\"text\" 
                   name=\"q\" 
                   class=\"search-input\" 
                   placeholder=\"Rechercher un événement...\"
                   value=\"";
        // line 437
        yield (((array_key_exists("searchTerm", $context) &&  !(null === $context["searchTerm"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["searchTerm"], "html", null, true)) : (""));
        yield "\">
            ";
        // line 438
        if ((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 438, $this->source); })())) {
            // line 439
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_liste");
            yield "\" 
                   class=\"search-clear active\"
                   title=\"Effacer la recherche\">
                    <i class=\"fas fa-times\"></i>
                </a>
            ";
        }
        // line 445
        yield "        </div>
        <div class=\"table-filters\">
            <button type=\"button\" class=\"filter-btn active\">Tous</button>
            <button type=\"button\" class=\"filter-btn\">Actifs</button>
            <button type=\"button\" class=\"filter-btn\">Inactifs</button>
            <button type=\"button\" class=\"filter-btn\">À venir</button>
        </div>
    </form>

    ";
        // line 454
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 454, $this->source); })())) > 0)) {
            // line 455
            yield "    <div class=\"table-responsive\">
        <table class=\"events-table\">
            <thead>
                <tr>
                    <th>Événements</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Prix</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 468
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 468, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 469
                yield "                <tr>
                    <td>
                        <div class=\"event-image-container\">
                            <div class=\"event-image\">
                                ";
                // line 473
                if (CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 473)) {
                    // line 474
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 474))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 474), "html", null, true);
                    yield "\">
                                ";
                } else {
                    // line 476
                    yield "                                    <i class=\"fas fa-calendar-day\"></i>
                                ";
                }
                // line 478
                yield "                            </div>
                            <div class=\"event-info\">
                                <div class=\"event-title\">";
                // line 480
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 480), "html", null, true);
                yield "</div>
                                <div class=\"event-meta\">
                                    <span><i class=\"fas fa-tag\"></i> ";
                // line 482
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "categorie", [], "any", false, false, false, 482), "value", [], "any", false, false, false, 482), "html", null, true);
                yield "</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"event-date\">
                            <div>";
                // line 489
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 489), "d/m/Y"), "html", null, true);
                yield "</div>
                            <div style=\"font-size: 0.8rem; color: var(--text-light);\">
                                ";
                // line 491
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 491), "H:i"), "html", null, true);
                yield "
                            </div>
                        </div>
                    </td>
                    <td>";
                // line 495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "espace", [], "any", false, false, false, 495), "html", null, true);
                yield "</td>
                    <td>";
                // line 496
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "prix", [], "any", false, false, false, 496), "html", null, true);
                yield " <small>TND</small></td>
                    <td>
                        <span class=\"event-status ";
                // line 498
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 498) == "actif")) ? ("status-active") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 498) == "inactif")) ? ("status-inactive") : ("status-pending"))));
                yield "\">
                            ";
                // line 499
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 499), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td>
                        <div class=\"event-actions\">
                            <a href=\"";
                // line 504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_liste", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 504)]), "html", null, true);
                yield "\" 
                               class=\"action-btn program\"
                               title=\"Programme\">
                                <i class=\"fas fa-list-ol\"></i>
                            </a>
                            <a href=\"";
                // line 509
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_new", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 509)]), "html", null, true);
                yield "\" 
                               class=\"action-btn program\"
                               title=\"Ajouter programme\">
                                <i class=\"fas fa-plus\"></i>
                            </a>
                            <a href=\"";
                // line 514
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 514)]), "html", null, true);
                yield "\" 
                               class=\"action-btn edit\"
                               title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form action=\"";
                // line 519
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 519)]), "html", null, true);
                yield "\" 
                                  method=\"POST\" 
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Confirmer la suppression ?')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 523
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 523))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 532
            yield "            </tbody>
        </table>
    </div>
    ";
        } else {
            // line 536
            yield "    <div class=\"empty-state\">
        <div class=\"empty-icon\">
            <i class=\"far fa-calendar-times\"></i>
        </div>
        <h3 class=\"empty-title\">
            ";
            // line 541
            if ((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 541, $this->source); })())) {
                // line 542
                yield "                Aucun événement trouvé pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 542, $this->source); })()), "html", null, true);
                yield "\"
            ";
            } else {
                // line 544
                yield "                Aucun événement disponible
            ";
            }
            // line 546
            yield "        </h3>
        <p class=\"empty-text\">
            ";
            // line 548
            if ((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 548, $this->source); })())) {
                // line 549
                yield "                Essayez avec un autre terme de recherche
            ";
            } else {
                // line 551
                yield "                Vous n'avez pas encore créé d'événements. Commencez par ajouter votre premier événement.
            ";
            }
            // line 553
            yield "        </p>
        <a href=\"";
            // line 554
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_ajouter");
            yield "\" class=\"empty-action\">
            <i class=\"fas fa-plus\"></i> Créer un événement
        </a>
    </div>
    ";
        }
        // line 559
        yield "</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Recherche automatique après délai
    const searchInput = document.querySelector('.search-input');
    let searchTimer;
    
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimer);
        searchTimer = setTimeout(() => {
            this.closest('form').submit();
        }, 500);
    });

    // Effacer la recherche
    const searchClear = document.querySelector('.search-clear');
    if (searchClear) {
        searchClear.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = this.href;
        });
    }

    // Afficher/masquer le bouton clear
    searchInput.addEventListener('input', function() {
        const searchClear = document.querySelector('.search-clear');
        if (this.value.length > 0) {
            searchClear?.classList.add('active');
        } else {
            searchClear?.classList.remove('active');
        }
    });

    // Filtres interactifs (pour une future implémentation)
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            // Ici vous pourriez ajouter la logique de filtrage plus tard
        });
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
        return "/Admin/Gestionevenement/Listevenement.html.twig";
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
        return array (  776 => 559,  768 => 554,  765 => 553,  761 => 551,  757 => 549,  755 => 548,  751 => 546,  747 => 544,  741 => 542,  739 => 541,  732 => 536,  726 => 532,  711 => 523,  704 => 519,  696 => 514,  688 => 509,  680 => 504,  672 => 499,  668 => 498,  663 => 496,  659 => 495,  652 => 491,  647 => 489,  637 => 482,  632 => 480,  628 => 478,  624 => 476,  616 => 474,  614 => 473,  608 => 469,  604 => 468,  589 => 455,  587 => 454,  576 => 445,  566 => 439,  564 => 438,  560 => 437,  550 => 430,  539 => 421,  526 => 420,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Admin/Gestionevenement/admin_base.html.twig' %}

{% block title %}Eventopia | Admin - Événements{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <style>
        :root {
            --primary: #0f4c75;
            --primary-light: #3282b8;
            --primary-lighter: #bbe1fa;
            --light: #f8f9fc;
            --border: #e0e3e8;
            --text: #2d3748;
            --text-light: #718096;
            --sidebar-width: 280px;
            --success: #4fd69c;
            --warning: #ffc107;
            --danger: #ff6b6b;
        }

        /* Structure principale améliorée */
        .admin-content-container {
            padding: 1.5rem 1.5rem 1.5rem 1rem;
            margin-left: 100px;
            background: var(--light);
            min-height: 100vh;
            width: calc(100% - 285px);
        }

        /* En-tête modernisé */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--primary-lighter);
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .page-title i {
            color: var(--primary-light);
        }

        /* Nouveau design de tableau */
        .events-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 8px;
            background: transparent;
        }

        .events-table thead {
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .events-table th {
            background-color: var(--primary);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
        }

        .events-table th:first-child {
            border-radius: 8px 0 0 8px;
        }

        .events-table th:last-child {
            border-radius: 0 8px 8px 0;
        }

        .events-table tbody tr {
            background: white;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .events-table tbody tr:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .events-table td {
            padding: 15px;
            vertical-align: middle;
            position: relative;
        }

        .events-table td:not(:last-child)::after {
            content: \"\";
            position: absolute;
            right: 0;
            top: 15%;
            height: 70%;
            width: 1px;
            background: rgba(0,0,0,0.05);
        }

        /* Cellule image améliorée */
        .event-image-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .event-image {
            width: 70px;
            height: 50px;
            border-radius: 6px;
            object-fit: cover;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .event-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .event-image i {
            color: var(--primary-light);
            font-size: 1.2rem;
        }

        /* Informations événement */
        .event-info {
            display: flex;
            flex-direction: column;
        }

        .event-title {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 4px;
            font-size: 0.95rem;
        }

        .event-meta {
            display: flex;
            gap: 10px;
            font-size: 0.8rem;
            color: var(--text-light);
        }

        .event-meta span {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        /* Statut amélioré */
        .event-status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-active {
            background-color: rgba(79, 214, 156, 0.15);
            color: var(--success);
        }

        .status-inactive {
            background-color: rgba(255, 107, 107, 0.15);
            color: var(--danger);
        }

        .status-pending {
            background-color: rgba(255, 193, 7, 0.15);
            color: var(--warning);
        }

        /* Actions modernisées */
        .event-actions {
            display: flex;
            gap: 8px;
        }

        .action-btn {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: none;
            color: var(--text-light);
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .action-btn.edit {
            color: var(--primary-light);
        }

        .action-btn.edit:hover {
            background: var(--primary-light);
            color: white;
        }

        .action-btn.delete {
            color: var(--danger);
        }

        .action-btn.delete:hover {
            background: var(--danger);
            color: white;
        }

        .action-btn.program {
            color: var(--success);
        }

        .action-btn.program:hover {
            background: var(--success);
            color: white;
        }

        /* État vide amélioré */
        .empty-state {
            background: white;
            border-radius: 12px;
            padding: 3rem 2rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            margin-top: 20px;
        }

        .empty-icon {
            font-size: 3rem;
            color: var(--primary-lighter);
            margin-bottom: 1.5rem;
        }

        .empty-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.75rem;
        }

        .empty-text {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .empty-action {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .empty-action:hover {
            background: var(--primary-light);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(15, 76, 117, 0.2);
        }

        /* Barre de recherche/filtres */
        .table-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .search-box {
            position: relative;
            width: 300px;
        }

        .search-input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(50, 130, 184, 0.2);
            outline: none;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }

        .search-clear {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            cursor: pointer;
            display: none;
        }

        .search-clear.active {
            display: block;
        }

        .table-filters {
            display: flex;
            gap: 10px;
        }

        .filter-btn {
            padding: 8px 15px;
            border-radius: 8px;
            background: white;
            border: 1px solid var(--border);
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-light);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .table-controls {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .search-box {
                width: 100%;
            }
        }

        @media (max-width: 992px) {
            .admin-content-container {
                margin-left: 100px;
                width: calc(100% - 100px);
                padding: 1.5rem 1.5rem 1.5rem 1.2rem;
            }
            
            .events-table {
                display: block;
                overflow-x: auto;
            }
            
            .event-image-container {
                min-width: 200px;
            }
        }

        @media (max-width: 768px) {
            .event-actions {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .action-btn {
                width: 30px;
                height: 30px;
                font-size: 0.8rem;
            }
            
            .empty-state {
                padding: 2rem 1rem;
            }
        }
    </style>
{% endblock %}

{% block admin_content %}
<div class=\"admin-content-container\">
    <div class=\"page-header\">
        <h1 class=\"page-title\">
            <i class=\"fas fa-calendar-alt\"></i> Liste des événements
        </h1>
       
    </div>

    <!-- Barre de recherche -->
    <form method=\"get\" action=\"{{ path('admin_evenement_liste') }}\" class=\"table-controls\">
        <div class=\"search-box\">
            <i class=\"fas fa-search search-icon\"></i>
            <input type=\"text\" 
                   name=\"q\" 
                   class=\"search-input\" 
                   placeholder=\"Rechercher un événement...\"
                   value=\"{{ searchTerm ?? '' }}\">
            {% if searchTerm %}
                <a href=\"{{ path('admin_evenement_liste') }}\" 
                   class=\"search-clear active\"
                   title=\"Effacer la recherche\">
                    <i class=\"fas fa-times\"></i>
                </a>
            {% endif %}
        </div>
        <div class=\"table-filters\">
            <button type=\"button\" class=\"filter-btn active\">Tous</button>
            <button type=\"button\" class=\"filter-btn\">Actifs</button>
            <button type=\"button\" class=\"filter-btn\">Inactifs</button>
            <button type=\"button\" class=\"filter-btn\">À venir</button>
        </div>
    </form>

    {% if evenements|length > 0 %}
    <div class=\"table-responsive\">
        <table class=\"events-table\">
            <thead>
                <tr>
                    <th>Événements</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Prix</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for evenement in evenements %}
                <tr>
                    <td>
                        <div class=\"event-image-container\">
                            <div class=\"event-image\">
                                {% if evenement.image %}
                                    <img src=\"{{ asset('uploads/images/' ~ evenement.image) }}\" alt=\"{{ evenement.titre }}\">
                                {% else %}
                                    <i class=\"fas fa-calendar-day\"></i>
                                {% endif %}
                            </div>
                            <div class=\"event-info\">
                                <div class=\"event-title\">{{ evenement.titre }}</div>
                                <div class=\"event-meta\">
                                    <span><i class=\"fas fa-tag\"></i> {{ evenement.categorie.value }}</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"event-date\">
                            <div>{{ evenement.date|date('d/m/Y') }}</div>
                            <div style=\"font-size: 0.8rem; color: var(--text-light);\">
                                {{ evenement.date|date('H:i') }}
                            </div>
                        </div>
                    </td>
                    <td>{{ evenement.espace }}</td>
                    <td>{{ evenement.prix }} <small>TND</small></td>
                    <td>
                        <span class=\"event-status {{ evenement.statut == 'actif' ? 'status-active' : (evenement.statut == 'inactif' ? 'status-inactive' : 'status-pending') }}\">
                            {{ evenement.statut }}
                        </span>
                    </td>
                    <td>
                        <div class=\"event-actions\">
                            <a href=\"{{ path('admin_programme_liste', {'id': evenement.id}) }}\" 
                               class=\"action-btn program\"
                               title=\"Programme\">
                                <i class=\"fas fa-list-ol\"></i>
                            </a>
                            <a href=\"{{ path('admin_programme_new', {'eventId': evenement.id}) }}\" 
                               class=\"action-btn program\"
                               title=\"Ajouter programme\">
                                <i class=\"fas fa-plus\"></i>
                            </a>
                            <a href=\"{{ path('admin_evenement_edit', {'id': evenement.id}) }}\" 
                               class=\"action-btn edit\"
                               title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form action=\"{{ path('admin_evenement_delete', {'id': evenement.id}) }}\" 
                                  method=\"POST\" 
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Confirmer la suppression ?')\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evenement.id) }}\">
                                <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    {% else %}
    <div class=\"empty-state\">
        <div class=\"empty-icon\">
            <i class=\"far fa-calendar-times\"></i>
        </div>
        <h3 class=\"empty-title\">
            {% if searchTerm %}
                Aucun événement trouvé pour \"{{ searchTerm }}\"
            {% else %}
                Aucun événement disponible
            {% endif %}
        </h3>
        <p class=\"empty-text\">
            {% if searchTerm %}
                Essayez avec un autre terme de recherche
            {% else %}
                Vous n'avez pas encore créé d'événements. Commencez par ajouter votre premier événement.
            {% endif %}
        </p>
        <a href=\"{{ path('admin_evenement_ajouter') }}\" class=\"empty-action\">
            <i class=\"fas fa-plus\"></i> Créer un événement
        </a>
    </div>
    {% endif %}
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Recherche automatique après délai
    const searchInput = document.querySelector('.search-input');
    let searchTimer;
    
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimer);
        searchTimer = setTimeout(() => {
            this.closest('form').submit();
        }, 500);
    });

    // Effacer la recherche
    const searchClear = document.querySelector('.search-clear');
    if (searchClear) {
        searchClear.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = this.href;
        });
    }

    // Afficher/masquer le bouton clear
    searchInput.addEventListener('input', function() {
        const searchClear = document.querySelector('.search-clear');
        if (this.value.length > 0) {
            searchClear?.classList.add('active');
        } else {
            searchClear?.classList.remove('active');
        }
    });

    // Filtres interactifs (pour une future implémentation)
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            // Ici vous pourriez ajouter la logique de filtrage plus tard
        });
    });
});
</script>
{% endblock %}", "/Admin/Gestionevenement/Listevenement.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Gestionevenement\\Listevenement.html.twig");
    }
}
