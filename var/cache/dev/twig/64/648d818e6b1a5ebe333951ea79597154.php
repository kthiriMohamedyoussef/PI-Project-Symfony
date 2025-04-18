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
class __TwigTemplate_4aa0af225233b011157f19f1e69bc99e extends Template
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

        yield "Admin - Événements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <style>
        :root {
            --primary: #6C4DF6;
            --secondary: #FF7E5F;
            --light: #F8F9FF;
            --dark: #1E1E2C;
            --success: #4FD69C;
            --warning: #FFC107;
            --radius: 16px;
            --shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
        
        .admin-dashboard {
            background: linear-gradient(135deg, #F8F9FF 0%, #E6F0FF 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }
        
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
            position: relative;
        }
        
        .page-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .page-title i {
            color: var(--primary);
        }
        
        .btn-add {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: var(--radius);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }
        
        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(108, 77, 246, 0.2);
        }
        
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .event-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .event-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .card-image {
            height: 220px;
            overflow: hidden;
            position: relative;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .event-card:hover .card-image img {
            transform: scale(1.05);
        }
        
        .card-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .badge-published {
            background: var(--success);
            color: white;
        }
        
        .badge-draft {
            background: var(--warning);
            color: var(--dark);
        }
        
        .card-body {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .card-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
            color: var(--dark);
        }
        
        .card-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            color: #6B7280;
            font-size: 0.9rem;
        }
        
        .card-meta i {
            color: var(--primary);
            width: 16px;
            text-align: center;
        }
        
        .card-text {
            color: #6B7280;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }
        
        .card-footer {
            padding: 1.5rem;
            background: white;
            border-top: 1px dashed #E5E7EB;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .card-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        .card-actions {
            display: flex;
            gap: 0.5rem;
        }
        
        .btn-action {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .btn-edit {
            background: rgba(108, 77, 246, 0.1);
            color: var(--primary);
            border: none;
        }
        
        .btn-edit:hover {
            background: var(--primary);
            color: white;
        }
        
        .btn-delete {
            background: rgba(255, 59, 48, 0.1);
            color: #FF3B30;
            border: none;
        }
        
        .btn-delete:hover {
            background: #FF3B30;
            color: white;
        }
        
        .empty-state {
            background: white;
            border-radius: var(--radius);
            padding: 3rem;
            text-align: center;
            box-shadow: var(--shadow);
            grid-column: 1 / -1;
        }
        
        .empty-icon {
            font-size: 4rem;
            color: #E5E7EB;
            margin-bottom: 1.5rem;
        }
        
        .empty-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .empty-text {
            color: #6B7280;
            margin-bottom: 1.5rem;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .events-grid {
                grid-template-columns: 1fr;
            }
            
            .empty-state {
                padding: 2rem 1.5rem;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 261
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

        // line 262
        yield "<div class=\"admin-dashboard\">
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">
                <i class=\"fas fa-calendar-alt\"></i> Gestion des Événements
            </h1>
            <a href=\"";
        // line 268
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_ajouter");
        yield "\" class=\"btn-add\">
                <i class=\"fas fa-plus\"></i> Nouvel Événement
            </a>
        </div>

        ";
        // line 273
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 273, $this->source); })())) > 0)) {
            // line 274
            yield "        <div class=\"events-grid\">
            ";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 275, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 276
                yield "            <div class=\"event-card\">
                <div class=\"card-image\">
                    ";
                // line 278
                if (CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 278)) {
                    // line 279
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 279))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 279), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 281
                    yield "                        <div class=\"h-100 d-flex align-items-center justify-content-center\" style=\"background: #F3F4F6;\">
                            <i class=\"fas fa-calendar-day fa-3x\" style=\"color: #D1D5DB;\"></i>
                        </div>
                    ";
                }
                // line 285
                yield "                    <span class=\"card-badge ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 285) == "publié")) {
                    yield "badge-published";
                } else {
                    yield "badge-draft";
                }
                yield "\">
                        ";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 286), "html", null, true);
                yield "
                    </span>
                </div>

                <div class=\"card-body\">
                    <h3 class=\"card-title\">";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 291), "html", null, true);
                yield "</h3>
                    
                    <div class=\"card-meta\">
                        <span><i class=\"far fa-calendar\"></i> ";
                // line 294
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 294), "d/m/Y"), "html", null, true);
                yield "</span>
                        <span><i class=\"fas fa-tag\"></i> ";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "categorie", [], "any", false, false, false, 295), "value", [], "any", false, false, false, 295), "html", null, true);
                yield "</span>
                    </div>
                    
                    <p class=\"card-text\">
                        ";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 299), 0, 120)), "html", null, true);
                yield "...
                    </p>
                </div>

                <div class=\"card-footer\">
                    <span class=\"card-price\">";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "prix", [], "any", false, false, false, 304), "html", null, true);
                yield " TND</span>
                    
                    <div class=\"card-actions\">
                        <a href=\"";
                // line 307
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 307)]), "html", null, true);
                yield "\" 
                           class=\"btn-action btn-edit\"
                           title=\"Modifier\">
                            <i class=\"fas fa-pencil-alt\"></i>
                        </a>
                        
                        <form action=\"";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 313)]), "html", null, true);
                yield "\" 
                              method=\"POST\" 
                              class=\"d-inline\"
                              onsubmit=\"return confirm('Supprimer définitivement cet événement ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 317))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn-action btn-delete\" title=\"Supprimer\">
                                <i class=\"far fa-trash-alt\"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            yield "        </div>
        ";
        } else {
            // line 328
            yield "        <div class=\"empty-state\">
            <div class=\"empty-icon\">
                <i class=\"far fa-calendar-times\"></i>
            </div>
            <h3 class=\"empty-title\">Aucun événement trouvé</h3>
            <p class=\"empty-text\">Commencez par créer un nouvel événement pour l'afficher ici</p>
            <a href=\"";
            // line 334
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_ajouter");
            yield "\" class=\"btn-add\">
                <i class=\"fas fa-plus\"></i> Créer un événement
            </a>
        </div>
        ";
        }
        // line 339
        yield "    </div>
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
        return array (  523 => 339,  515 => 334,  507 => 328,  503 => 326,  488 => 317,  481 => 313,  472 => 307,  466 => 304,  458 => 299,  451 => 295,  447 => 294,  441 => 291,  433 => 286,  424 => 285,  418 => 281,  410 => 279,  408 => 278,  404 => 276,  400 => 275,  397 => 274,  395 => 273,  387 => 268,  379 => 262,  366 => 261,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/Admin/Listevenement.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Admin - Événements{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <style>
        :root {
            --primary: #6C4DF6;
            --secondary: #FF7E5F;
            --light: #F8F9FF;
            --dark: #1E1E2C;
            --success: #4FD69C;
            --warning: #FFC107;
            --radius: 16px;
            --shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
        
        .admin-dashboard {
            background: linear-gradient(135deg, #F8F9FF 0%, #E6F0FF 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }
        
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
            position: relative;
        }
        
        .page-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .page-title i {
            color: var(--primary);
        }
        
        .btn-add {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: var(--radius);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }
        
        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(108, 77, 246, 0.2);
        }
        
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .event-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .event-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .card-image {
            height: 220px;
            overflow: hidden;
            position: relative;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .event-card:hover .card-image img {
            transform: scale(1.05);
        }
        
        .card-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .badge-published {
            background: var(--success);
            color: white;
        }
        
        .badge-draft {
            background: var(--warning);
            color: var(--dark);
        }
        
        .card-body {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .card-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
            color: var(--dark);
        }
        
        .card-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            color: #6B7280;
            font-size: 0.9rem;
        }
        
        .card-meta i {
            color: var(--primary);
            width: 16px;
            text-align: center;
        }
        
        .card-text {
            color: #6B7280;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }
        
        .card-footer {
            padding: 1.5rem;
            background: white;
            border-top: 1px dashed #E5E7EB;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .card-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        .card-actions {
            display: flex;
            gap: 0.5rem;
        }
        
        .btn-action {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .btn-edit {
            background: rgba(108, 77, 246, 0.1);
            color: var(--primary);
            border: none;
        }
        
        .btn-edit:hover {
            background: var(--primary);
            color: white;
        }
        
        .btn-delete {
            background: rgba(255, 59, 48, 0.1);
            color: #FF3B30;
            border: none;
        }
        
        .btn-delete:hover {
            background: #FF3B30;
            color: white;
        }
        
        .empty-state {
            background: white;
            border-radius: var(--radius);
            padding: 3rem;
            text-align: center;
            box-shadow: var(--shadow);
            grid-column: 1 / -1;
        }
        
        .empty-icon {
            font-size: 4rem;
            color: #E5E7EB;
            margin-bottom: 1.5rem;
        }
        
        .empty-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .empty-text {
            color: #6B7280;
            margin-bottom: 1.5rem;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .events-grid {
                grid-template-columns: 1fr;
            }
            
            .empty-state {
                padding: 2rem 1.5rem;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"admin-dashboard\">
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"page-title\">
                <i class=\"fas fa-calendar-alt\"></i> Gestion des Événements
            </h1>
            <a href=\"{{ path('admin_evenement_ajouter') }}\" class=\"btn-add\">
                <i class=\"fas fa-plus\"></i> Nouvel Événement
            </a>
        </div>

        {% if evenements|length > 0 %}
        <div class=\"events-grid\">
            {% for evenement in evenements %}
            <div class=\"event-card\">
                <div class=\"card-image\">
                    {% if evenement.image %}
                        <img src=\"{{ asset('uploads/images/' ~ evenement.image) }}\" alt=\"{{ evenement.titre }}\">
                    {% else %}
                        <div class=\"h-100 d-flex align-items-center justify-content-center\" style=\"background: #F3F4F6;\">
                            <i class=\"fas fa-calendar-day fa-3x\" style=\"color: #D1D5DB;\"></i>
                        </div>
                    {% endif %}
                    <span class=\"card-badge {% if evenement.statut == 'publié' %}badge-published{% else %}badge-draft{% endif %}\">
                        {{ evenement.statut }}
                    </span>
                </div>

                <div class=\"card-body\">
                    <h3 class=\"card-title\">{{ evenement.titre }}</h3>
                    
                    <div class=\"card-meta\">
                        <span><i class=\"far fa-calendar\"></i> {{ evenement.date|date('d/m/Y') }}</span>
                        <span><i class=\"fas fa-tag\"></i> {{ evenement.categorie.value }}</span>
                    </div>
                    
                    <p class=\"card-text\">
                        {{ evenement.description|slice(0, 120)|trim }}...
                    </p>
                </div>

                <div class=\"card-footer\">
                    <span class=\"card-price\">{{ evenement.prix }} TND</span>
                    
                    <div class=\"card-actions\">
                        <a href=\"{{ path('admin_evenement_edit', {'id': evenement.id}) }}\" 
                           class=\"btn-action btn-edit\"
                           title=\"Modifier\">
                            <i class=\"fas fa-pencil-alt\"></i>
                        </a>
                        
                        <form action=\"{{ path('admin_evenement_delete', {'id': evenement.id}) }}\" 
                              method=\"POST\" 
                              class=\"d-inline\"
                              onsubmit=\"return confirm('Supprimer définitivement cet événement ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evenement.id) }}\">
                            <button type=\"submit\" class=\"btn-action btn-delete\" title=\"Supprimer\">
                                <i class=\"far fa-trash-alt\"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
        {% else %}
        <div class=\"empty-state\">
            <div class=\"empty-icon\">
                <i class=\"far fa-calendar-times\"></i>
            </div>
            <h3 class=\"empty-title\">Aucun événement trouvé</h3>
            <p class=\"empty-text\">Commencez par créer un nouvel événement pour l'afficher ici</p>
            <a href=\"{{ path('admin_evenement_ajouter') }}\" class=\"btn-add\">
                <i class=\"fas fa-plus\"></i> Créer un événement
            </a>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}", "Admin/Listevenement.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Listevenement.html.twig");
    }
}
