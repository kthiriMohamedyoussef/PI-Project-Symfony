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

/* /Admin/Gestionevenement/Modifprogramme.html.twig */
class __TwigTemplate_a8c250d27bcac812f1d06878827522b9 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/Admin/Gestionevenement/Modifprogramme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/Admin/Gestionevenement/Modifprogramme.html.twig"));

        $this->parent = $this->loadTemplate("Admin/Gestionevenement/admin_base.html.twig", "/Admin/Gestionevenement/Modifprogramme.html.twig", 1);
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

        yield "Eventopia | Modification de Programme";
        
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
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
            --sidebar-width: 280px;
        }

        /* Structure full-page */
        html, body, .admin-wrapper, .admin-main {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .admin-main {
            margin-left: var(--sidebar-width);
            background: #f5f9fc;
            display: flex;
        }

        /* Conteneur formulaire */
        .form-container {
            flex: 1;
            padding: 2rem;
            display: flex;
            overflow: hidden;
        }

        /* Carte de formulaire */
        .form-card {
            background: white;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            padding: 2.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            border-top: 4px solid var(--primary);
        }

        /* En-tête aligné à gauche avec style amélioré */
        .admin-header {
            text-align: left;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .admin-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            border-radius: 2px;
        }

        .admin-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin: 0 0 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .admin-title i {
            color: var(--accent);
            font-size: 1.8rem;
        }

        .admin-subtitle {
            color: #6B7280;
            font-size: 1.05rem;
            margin: 0;
            font-weight: 400;
        }

        /* Style amélioré pour les labels */
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--primary);
            font-size: 0.95rem;
        }

        /* Style amélioré pour les champs */
        .form-control {
            width: 100%;
            padding: 0.85rem 1.25rem;
            font-size: 1rem;
            border: 1px solid #d1d5db;
            border-radius: var(--radius);
            transition: all 0.3s ease;
            background-color: #f9fafb;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px var(--accent-light);
        }

        /* Style pour les champs time */
        .time-input-group {
            position: relative;
        }

        .time-input-group::after {
            content: '\\f017';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--accent);
            pointer-events: none;
        }

        /* Layout amélioré */
        .two-col {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        /* Actions du formulaire */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e5e7eb;
        }

        .btn {
            padding: 0.9rem 1.75rem;
            font-size: 1rem;
            border-radius: var(--radius);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-submit {
            background: var(--primary);
            color: white;
            border: none;
        }

        .btn-submit:hover {
            background: var(--secondary);
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .btn-return {
            background: white;
            color: var(--primary);
            border: 1px solid #d1d5db;
            text-decoration: none;
        }

        .btn-return:hover {
            background: #f9fafb;
            border-color: var(--accent);
            color: var(--secondary);
        }

        /* Alertes */
        .alert {
            padding: 1rem 1.5rem;
            border-radius: var(--radius);
            margin-bottom: 2rem;
            background: var(--success);
            color: white;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            box-shadow: var(--shadow);
        }

        .alert i {
            font-size: 1.2rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 223
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

        // line 224
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Configuration des time pickers
            flatpickr('#programme_heureDebut', {
                enableTime: true,
                noCalendar: true,
                dateFormat: \"H:i\",
                time_24hr: true,
                locale: \"fr\"
            });
            
            flatpickr('#programme_heureFin', {
                enableTime: true,
                noCalendar: true,
                dateFormat: \"H:i\",
                time_24hr: true,
                locale: \"fr\",
                minTime: document.getElementById('programme_heureDebut').value
            });

            // Validation des heures
            document.getElementById('programme_heureDebut').addEventListener('change', function() {
                const finInput = document.getElementById('programme_heureFin');
                finInput._flatpickr.set('minTime', this.value);
                if (finInput.value && finInput.value < this.value) {
                    finInput.value = '';
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 259
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

        // line 260
        yield "    <div class=\"form-container\">
        <div class=\"form-card\">
            <div class=\"admin-header\">
                <h1 class=\"admin-title\"><i class=\"fas fa-edit\"></i> Modifier le Programme</h1>
                <p class=\"admin-subtitle\">Mettez à jour l'activité pour \"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 264, $this->source); })()), "evenement", [], "any", false, false, false, 264), "titre", [], "any", false, false, false, 264), "html", null, true);
        yield "\"</p>
            </div>
            
            ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "flashes", ["success"], "method", false, false, false, 267));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 268
            yield "                <div class=\"alert\">
                    <i class=\"fas fa-check-circle\"></i> ";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        yield "            
            ";
        // line 273
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), 'form_start');
        yield "
                <div class=\"form-group\">
                    ";
        // line 275
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "activite", [], "any", false, false, false, 275), 'label', ["label" => "Activité"]);
        yield "
                    ";
        // line 276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "activite", [], "any", false, false, false, 276), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom ou description de l'activité"]]);
        // line 279
        yield "
                </div>
                
                <div class=\"two-col\">
                    <div class=\"form-group time-input-group\">
                        ";
        // line 284
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "heureDebut", [], "any", false, false, false, 284), 'label', ["label" => "Heure de début"]);
        yield "
                        ";
        // line 285
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "heureDebut", [], "any", false, false, false, 285), 'widget', ["attr" => ["class" => "form-control", "id" => "programme_heureDebut", "placeholder" => "Sélectionnez une heure"]]);
        // line 289
        yield "
                    </div>
                    
                    <div class=\"form-group time-input-group\">
                        ";
        // line 293
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "heureFin", [], "any", false, false, false, 293), 'label', ["label" => "Heure de fin"]);
        yield "
                        ";
        // line 294
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "heureFin", [], "any", false, false, false, 294), 'widget', ["attr" => ["class" => "form-control", "id" => "programme_heureFin", "placeholder" => "Sélectionnez une heure"]]);
        // line 298
        yield "
                    </div>
                </div>
                
                <div class=\"form-actions\">
                    <a href=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_liste", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 303, $this->source); })()), "evenement", [], "any", false, false, false, 303), "id", [], "any", false, false, false, 303)]), "html", null, true);
        yield "\" class=\"btn btn-return\">
                        <i class=\"fas fa-arrow-left\"></i> Retour
                    </a>
                    <button type=\"submit\" class=\"btn btn-submit\">
                        <i class=\"fas fa-save\"></i> Enregistrer
                    </button>
                </div>
            ";
        // line 310
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), 'form_end');
        yield "
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
        return "/Admin/Gestionevenement/Modifprogramme.html.twig";
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
        return array (  486 => 310,  476 => 303,  469 => 298,  467 => 294,  463 => 293,  457 => 289,  455 => 285,  451 => 284,  444 => 279,  442 => 276,  438 => 275,  433 => 273,  430 => 272,  421 => 269,  418 => 268,  414 => 267,  408 => 264,  402 => 260,  389 => 259,  343 => 224,  330 => 223,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Admin/Gestionevenement/admin_base.html.twig' %}

{% block title %}Eventopia | Modification de Programme{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
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
            --sidebar-width: 280px;
        }

        /* Structure full-page */
        html, body, .admin-wrapper, .admin-main {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .admin-main {
            margin-left: var(--sidebar-width);
            background: #f5f9fc;
            display: flex;
        }

        /* Conteneur formulaire */
        .form-container {
            flex: 1;
            padding: 2rem;
            display: flex;
            overflow: hidden;
        }

        /* Carte de formulaire */
        .form-card {
            background: white;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            padding: 2.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            border-top: 4px solid var(--primary);
        }

        /* En-tête aligné à gauche avec style amélioré */
        .admin-header {
            text-align: left;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .admin-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            border-radius: 2px;
        }

        .admin-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin: 0 0 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .admin-title i {
            color: var(--accent);
            font-size: 1.8rem;
        }

        .admin-subtitle {
            color: #6B7280;
            font-size: 1.05rem;
            margin: 0;
            font-weight: 400;
        }

        /* Style amélioré pour les labels */
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--primary);
            font-size: 0.95rem;
        }

        /* Style amélioré pour les champs */
        .form-control {
            width: 100%;
            padding: 0.85rem 1.25rem;
            font-size: 1rem;
            border: 1px solid #d1d5db;
            border-radius: var(--radius);
            transition: all 0.3s ease;
            background-color: #f9fafb;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px var(--accent-light);
        }

        /* Style pour les champs time */
        .time-input-group {
            position: relative;
        }

        .time-input-group::after {
            content: '\\f017';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--accent);
            pointer-events: none;
        }

        /* Layout amélioré */
        .two-col {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        /* Actions du formulaire */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e5e7eb;
        }

        .btn {
            padding: 0.9rem 1.75rem;
            font-size: 1rem;
            border-radius: var(--radius);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-submit {
            background: var(--primary);
            color: white;
            border: none;
        }

        .btn-submit:hover {
            background: var(--secondary);
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .btn-return {
            background: white;
            color: var(--primary);
            border: 1px solid #d1d5db;
            text-decoration: none;
        }

        .btn-return:hover {
            background: #f9fafb;
            border-color: var(--accent);
            color: var(--secondary);
        }

        /* Alertes */
        .alert {
            padding: 1rem 1.5rem;
            border-radius: var(--radius);
            margin-bottom: 2rem;
            background: var(--success);
            color: white;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            box-shadow: var(--shadow);
        }

        .alert i {
            font-size: 1.2rem;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Configuration des time pickers
            flatpickr('#programme_heureDebut', {
                enableTime: true,
                noCalendar: true,
                dateFormat: \"H:i\",
                time_24hr: true,
                locale: \"fr\"
            });
            
            flatpickr('#programme_heureFin', {
                enableTime: true,
                noCalendar: true,
                dateFormat: \"H:i\",
                time_24hr: true,
                locale: \"fr\",
                minTime: document.getElementById('programme_heureDebut').value
            });

            // Validation des heures
            document.getElementById('programme_heureDebut').addEventListener('change', function() {
                const finInput = document.getElementById('programme_heureFin');
                finInput._flatpickr.set('minTime', this.value);
                if (finInput.value && finInput.value < this.value) {
                    finInput.value = '';
                }
            });
        });
    </script>
{% endblock %}

{% block admin_content %}
    <div class=\"form-container\">
        <div class=\"form-card\">
            <div class=\"admin-header\">
                <h1 class=\"admin-title\"><i class=\"fas fa-edit\"></i> Modifier le Programme</h1>
                <p class=\"admin-subtitle\">Mettez à jour l'activité pour \"{{ programme.evenement.titre }}\"</p>
            </div>
            
            {% for message in app.flashes('success') %}
                <div class=\"alert\">
                    <i class=\"fas fa-check-circle\"></i> {{ message }}
                </div>
            {% endfor %}
            
            {{ form_start(form) }}
                <div class=\"form-group\">
                    {{ form_label(form.activite, 'Activité') }}
                    {{ form_widget(form.activite, {'attr': {
                        'class': 'form-control',
                        'placeholder': 'Nom ou description de l\\'activité'
                    }}) }}
                </div>
                
                <div class=\"two-col\">
                    <div class=\"form-group time-input-group\">
                        {{ form_label(form.heureDebut, 'Heure de début') }}
                        {{ form_widget(form.heureDebut, {'attr': {
                            'class': 'form-control',
                            'id': 'programme_heureDebut',
                            'placeholder': 'Sélectionnez une heure'
                        }}) }}
                    </div>
                    
                    <div class=\"form-group time-input-group\">
                        {{ form_label(form.heureFin, 'Heure de fin') }}
                        {{ form_widget(form.heureFin, {'attr': {
                            'class': 'form-control',
                            'id': 'programme_heureFin',
                            'placeholder': 'Sélectionnez une heure'
                        }}) }}
                    </div>
                </div>
                
                <div class=\"form-actions\">
                    <a href=\"{{ path('admin_programme_liste', {'id': programme.evenement.id}) }}\" class=\"btn btn-return\">
                        <i class=\"fas fa-arrow-left\"></i> Retour
                    </a>
                    <button type=\"submit\" class=\"btn btn-submit\">
                        <i class=\"fas fa-save\"></i> Enregistrer
                    </button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "/Admin/Gestionevenement/Modifprogramme.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Gestionevenement\\Modifprogramme.html.twig");
    }
}
