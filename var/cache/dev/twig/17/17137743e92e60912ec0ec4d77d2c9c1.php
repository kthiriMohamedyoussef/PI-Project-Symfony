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

/* Admin/Gestionevenement/Ajoutevenement.html.twig */
class __TwigTemplate_1c5aa8b11963edea337d8fc4c51adcb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionevenement/Ajoutevenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionevenement/Ajoutevenement.html.twig"));

        $this->parent = $this->loadTemplate("Admin/Gestionevenement/admin_base.html.twig", "Admin/Gestionevenement/Ajoutevenement.html.twig", 1);
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

        yield "Eventopia | Ajout d'Événement";
        
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

        /* Messages d'erreur */
        .form-error {
            color: var(--error);
            font-size: 0.85rem;
            margin-top: 0.5rem;
            display: block;
        }

        /* Champ de statut stylé */
        .status-toggle {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .status-label {
            font-weight: 600;
            color: var(--primary);
            font-size: 0.95rem;
            min-width: 100px;
        }

        .status-options {
            display: flex;
            gap: 0.5rem;
        }

        .status-option {
            padding: 0.5rem 1rem;
            border-radius: var(--radius);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #d1d5db;
            background: white;
            font-weight: 500;
        }

        .status-option.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        /* Zone d'upload */
        .upload-container {
            position: relative;
            height: 200px;
            width: 100%;
        }

        .image-upload-wrapper {
            height: 100%;
            width: 100%;
            border: 2px dashed #d1d5db;
            border-radius: var(--radius);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            cursor: pointer;
            background: #f9fafb;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .image-upload-wrapper:hover {
            border-color: var(--accent);
            background: var(--accent-light);
        }

        .upload-icon {
            font-size: 2rem;
            color: var(--accent);
            margin-bottom: 0.75rem;
        }

        .upload-text {
            font-size: 0.9rem;
            margin: 0.25rem 0;
            color: var(--dark);
        }

        .upload-hint {
            font-size: 0.8rem;
            color: #6B7280;
        }

        .image-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
            position: absolute;
            top: 0;
            left: 0;
        }

        .image-input {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        /* Style amélioré pour les selects */
        select.form-control {
            appearance: none;
            background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1em;
            padding-right: 2.5rem;
        }

        /* Style pour les champs plus clairs */
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

        textarea.form-control {
            min-height: 180px;
            resize: vertical;
        }

        /* Layout amélioré */
        .two-col {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .media-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        /* Style pour le prix */
        .price-container {
            display: flex;
            align-items: center;
        }

        .price-currency {
            padding: 0.85rem 1rem;
            background: #f1f5f9;
            border: 1px solid #d1d5db;
            border-left: none;
            border-radius: 0 var(--radius) var(--radius) 0;
            color: var(--primary);
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
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: var(--radius);
        }

        .alert-success {
            background-color: var(--success);
            color: white;
        }

        .alert-error {
            background-color: var(--error);
            color: white;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 352
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

        // line 353
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Date picker
            flatpickr('#evenement_date', {
                dateFormat: \"Y-m-d\",
                minDate: \"today\",
                locale: \"fr\"
            });
            
            // Gestion de l'image
            const imageInput = document.getElementById('evenement_image');
            const preview = document.getElementById('imagePreview');
            const uploadWrapper = document.querySelector('.image-upload-wrapper');
            
            const originalContent = uploadWrapper.innerHTML;
            
            uploadWrapper.addEventListener('click', function(e) {
                e.preventDefault();
                imageInput.click();
            });
            
            imageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                        uploadWrapper.innerHTML = '';
                        uploadWrapper.appendChild(preview);
                    }
                    reader.readAsDataURL(file);
                } else {
                    preview.style.display = 'none';
                    uploadWrapper.innerHTML = originalContent;
                }
            });

            // Gestion du statut
            const statusOptions = document.querySelectorAll('.status-option');
            statusOptions.forEach(option => {
                option.addEventListener('click', function() {
                    statusOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                    document.getElementById('evenement_statut').value = this.dataset.value;
                });
            });

            // Focus sur le premier champ
            document.querySelector('input').focus();
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 410
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

        // line 411
        yield "    <div class=\"form-container\">
        <div class=\"form-card\">
            <div class=\"admin-header\">
                <h1 class=\"admin-title\"><i class=\"fas fa-calendar-plus\"></i> Créer un Événement</h1>
                <p class=\"admin-subtitle\">Remplissez les détails de votre nouvel événement</p>
            </div>
            
            ";
        // line 419
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 419, $this->source); })()), "flashes", [], "any", false, false, false, 419));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 420
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 421
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">
                        ";
                // line 422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        yield "            
            ";
        // line 427
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 427, $this->source); })()), 'form_start');
        yield "
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        ";
        // line 430
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 430, $this->source); })()), "titre", [], "any", false, false, false, 430), 'label', ["label" => "Titre de l'événement"]);
        yield "
                        ";
        // line 431
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 431, $this->source); })()), "titre", [], "any", false, false, false, 431), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Donnez un titre percutant"]]);
        // line 434
        yield "
                        ";
        // line 435
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "titre", [], "any", false, false, false, 435), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 439
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 439, $this->source); })()), "categorie", [], "any", false, false, false, 439), 'label', ["label" => "Catégorie"]);
        yield "
                        ";
        // line 440
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 440, $this->source); })()), "categorie", [], "any", false, false, false, 440), 'widget', ["attr" => ["class" => "form-control", "data-placeholder" => "Sélectionnez une catégorie"]]);
        // line 443
        yield "
                        ";
        // line 444
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 444, $this->source); })()), "categorie", [], "any", false, false, false, 444), 'errors');
        yield "
                    </div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 449
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 449, $this->source); })()), "statut", [], "any", false, false, false, 449), 'label', ["label" => "Statut"]);
        yield "
                    ";
        // line 450
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 450, $this->source); })()), "statut", [], "any", false, false, false, 450), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 452
        yield "
                    ";
        // line 453
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "statut", [], "any", false, false, false, 453), 'errors');
        yield "
                </div>
                
                <div class=\"media-section\">
                    <div class=\"form-group\">
                        ";
        // line 458
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 458, $this->source); })()), "description", [], "any", false, false, false, 458), 'label', ["label" => "Description"]);
        yield "
                        ";
        // line 459
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 459, $this->source); })()), "description", [], "any", false, false, false, 459), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Décrivez votre événement en détail..."]]);
        // line 462
        yield "
                        ";
        // line 463
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 463, $this->source); })()), "description", [], "any", false, false, false, 463), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        <label>Image principale</label>
                        <div class=\"upload-container\">
                            <div class=\"image-upload-wrapper\">
                                <i class=\"fas fa-cloud-upload-alt upload-icon\"></i>
                                <div class=\"upload-text\">Cliquez pour téléverser une image</div>
                                <div class=\"upload-hint\">Formats acceptés: JPG, PNG (max 5MB)</div>
                            </div>
                            ";
        // line 474
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 474, $this->source); })()), "image", [], "any", false, false, false, 474), 'widget', ["attr" => ["class" => "image-input", "accept" => "image/*", "id" => "evenement_image"]]);
        // line 478
        yield "
                            <img id=\"imagePreview\" class=\"image-preview\">
                        </div>
                        ";
        // line 481
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 481, $this->source); })()), "image", [], "any", false, false, false, 481), 'errors');
        yield "
                    </div>
                </div>
                
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        ";
        // line 487
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 487, $this->source); })()), "date", [], "any", false, false, false, 487), 'label', ["label" => "Date"]);
        yield "
                        ";
        // line 488
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 488, $this->source); })()), "date", [], "any", false, false, false, 488), 'widget', ["attr" => ["class" => "form-control", "id" => "evenement_date", "placeholder" => "Sélectionnez une date"]]);
        // line 492
        yield "
                        ";
        // line 493
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 493, $this->source); })()), "date", [], "any", false, false, false, 493), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 497
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 497, $this->source); })()), "prix", [], "any", false, false, false, 497), 'label', ["label" => "Prix"]);
        yield "
                        <div class=\"price-container\">
                            ";
        // line 499
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 499, $this->source); })()), "prix", [], "any", false, false, false, 499), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0.00", "style" => "border-top-right-radius: 0; border-bottom-right-radius: 0;"]]);
        // line 503
        yield "
                            <span class=\"price-currency\">TND</span>
                        </div>
                        ";
        // line 506
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 506, $this->source); })()), "prix", [], "any", false, false, false, 506), 'errors');
        yield "
                    </div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 511
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 511, $this->source); })()), "espace", [], "any", false, false, false, 511), 'label', ["label" => "Lieu"]);
        yield "
                    ";
        // line 512
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 512, $this->source); })()), "espace", [], "any", false, false, false, 512), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Sélectionnez un lieu"]]);
        // line 515
        yield "
                    ";
        // line 516
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 516, $this->source); })()), "espace", [], "any", false, false, false, 516), 'errors');
        yield "
                </div>
                <div class=\"form-actions\">
                    <a href=\"";
        // line 519
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_liste");
        yield "\" class=\"btn btn-return\">
                        <i class=\"fas fa-arrow-left\"></i> Retour
                    </a>
                    <button type=\"submit\" class=\"btn btn-submit\">
                        <i class=\"fas fa-check\"></i> Publier
                    </button>
                </div>
            ";
        // line 526
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 526, $this->source); })()), 'form_end');
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
        return "Admin/Gestionevenement/Ajoutevenement.html.twig";
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
        return array (  751 => 526,  741 => 519,  735 => 516,  732 => 515,  730 => 512,  726 => 511,  718 => 506,  713 => 503,  711 => 499,  706 => 497,  699 => 493,  696 => 492,  694 => 488,  690 => 487,  681 => 481,  676 => 478,  674 => 474,  660 => 463,  657 => 462,  655 => 459,  651 => 458,  643 => 453,  640 => 452,  638 => 450,  634 => 449,  626 => 444,  623 => 443,  621 => 440,  617 => 439,  610 => 435,  607 => 434,  605 => 431,  601 => 430,  595 => 427,  592 => 426,  586 => 425,  577 => 422,  572 => 421,  567 => 420,  562 => 419,  553 => 411,  540 => 410,  472 => 353,  459 => 352,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Admin/Gestionevenement/admin_base.html.twig' %}

{% block title %}Eventopia | Ajout d'Événement{% endblock %}

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

        /* Messages d'erreur */
        .form-error {
            color: var(--error);
            font-size: 0.85rem;
            margin-top: 0.5rem;
            display: block;
        }

        /* Champ de statut stylé */
        .status-toggle {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .status-label {
            font-weight: 600;
            color: var(--primary);
            font-size: 0.95rem;
            min-width: 100px;
        }

        .status-options {
            display: flex;
            gap: 0.5rem;
        }

        .status-option {
            padding: 0.5rem 1rem;
            border-radius: var(--radius);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #d1d5db;
            background: white;
            font-weight: 500;
        }

        .status-option.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        /* Zone d'upload */
        .upload-container {
            position: relative;
            height: 200px;
            width: 100%;
        }

        .image-upload-wrapper {
            height: 100%;
            width: 100%;
            border: 2px dashed #d1d5db;
            border-radius: var(--radius);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            cursor: pointer;
            background: #f9fafb;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .image-upload-wrapper:hover {
            border-color: var(--accent);
            background: var(--accent-light);
        }

        .upload-icon {
            font-size: 2rem;
            color: var(--accent);
            margin-bottom: 0.75rem;
        }

        .upload-text {
            font-size: 0.9rem;
            margin: 0.25rem 0;
            color: var(--dark);
        }

        .upload-hint {
            font-size: 0.8rem;
            color: #6B7280;
        }

        .image-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
            position: absolute;
            top: 0;
            left: 0;
        }

        .image-input {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        /* Style amélioré pour les selects */
        select.form-control {
            appearance: none;
            background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1em;
            padding-right: 2.5rem;
        }

        /* Style pour les champs plus clairs */
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

        textarea.form-control {
            min-height: 180px;
            resize: vertical;
        }

        /* Layout amélioré */
        .two-col {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .media-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        /* Style pour le prix */
        .price-container {
            display: flex;
            align-items: center;
        }

        .price-currency {
            padding: 0.85rem 1rem;
            background: #f1f5f9;
            border: 1px solid #d1d5db;
            border-left: none;
            border-radius: 0 var(--radius) var(--radius) 0;
            color: var(--primary);
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
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: var(--radius);
        }

        .alert-success {
            background-color: var(--success);
            color: white;
        }

        .alert-error {
            background-color: var(--error);
            color: white;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Date picker
            flatpickr('#evenement_date', {
                dateFormat: \"Y-m-d\",
                minDate: \"today\",
                locale: \"fr\"
            });
            
            // Gestion de l'image
            const imageInput = document.getElementById('evenement_image');
            const preview = document.getElementById('imagePreview');
            const uploadWrapper = document.querySelector('.image-upload-wrapper');
            
            const originalContent = uploadWrapper.innerHTML;
            
            uploadWrapper.addEventListener('click', function(e) {
                e.preventDefault();
                imageInput.click();
            });
            
            imageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                        uploadWrapper.innerHTML = '';
                        uploadWrapper.appendChild(preview);
                    }
                    reader.readAsDataURL(file);
                } else {
                    preview.style.display = 'none';
                    uploadWrapper.innerHTML = originalContent;
                }
            });

            // Gestion du statut
            const statusOptions = document.querySelectorAll('.status-option');
            statusOptions.forEach(option => {
                option.addEventListener('click', function() {
                    statusOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                    document.getElementById('evenement_statut').value = this.dataset.value;
                });
            });

            // Focus sur le premier champ
            document.querySelector('input').focus();
        });
    </script>
{% endblock %}

{% block admin_content %}
    <div class=\"form-container\">
        <div class=\"form-card\">
            <div class=\"admin-header\">
                <h1 class=\"admin-title\"><i class=\"fas fa-calendar-plus\"></i> Créer un Événement</h1>
                <p class=\"admin-subtitle\">Remplissez les détails de votre nouvel événement</p>
            </div>
            
            {# Affichage des messages flash #}
            {% for type, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
            
            {{ form_start(form) }}
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        {{ form_label(form.titre, 'Titre de l\\'événement') }}
                        {{ form_widget(form.titre, {'attr': {
                            'class': 'form-control',
                            'placeholder': 'Donnez un titre percutant'
                        }}) }}
                        {{ form_errors(form.titre) }}
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(form.categorie, 'Catégorie') }}
                        {{ form_widget(form.categorie, {'attr': {
                            'class': 'form-control',
                            'data-placeholder': 'Sélectionnez une catégorie'
                        }}) }}
                        {{ form_errors(form.categorie) }}
                    </div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.statut, 'Statut') }}
                    {{ form_widget(form.statut, {'attr': {
                        'class': 'form-control'
                    }}) }}
                    {{ form_errors(form.statut) }}
                </div>
                
                <div class=\"media-section\">
                    <div class=\"form-group\">
                        {{ form_label(form.description, 'Description') }}
                        {{ form_widget(form.description, {'attr': {
                            'class': 'form-control',
                            'placeholder': 'Décrivez votre événement en détail...'
                        }}) }}
                        {{ form_errors(form.description) }}
                    </div>
                    
                    <div class=\"form-group\">
                        <label>Image principale</label>
                        <div class=\"upload-container\">
                            <div class=\"image-upload-wrapper\">
                                <i class=\"fas fa-cloud-upload-alt upload-icon\"></i>
                                <div class=\"upload-text\">Cliquez pour téléverser une image</div>
                                <div class=\"upload-hint\">Formats acceptés: JPG, PNG (max 5MB)</div>
                            </div>
                            {{ form_widget(form.image, {'attr': {
                                'class': 'image-input',
                                'accept': 'image/*',
                                'id': 'evenement_image'
                            }}) }}
                            <img id=\"imagePreview\" class=\"image-preview\">
                        </div>
                        {{ form_errors(form.image) }}
                    </div>
                </div>
                
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        {{ form_label(form.date, 'Date') }}
                        {{ form_widget(form.date, {'attr': {
                            'class': 'form-control',
                            'id': 'evenement_date',
                            'placeholder': 'Sélectionnez une date'
                        }}) }}
                        {{ form_errors(form.date) }}
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(form.prix, 'Prix') }}
                        <div class=\"price-container\">
                            {{ form_widget(form.prix, {'attr': {
                                'class': 'form-control',
                                'placeholder': '0.00',
                                'style': 'border-top-right-radius: 0; border-bottom-right-radius: 0;'
                            }}) }}
                            <span class=\"price-currency\">TND</span>
                        </div>
                        {{ form_errors(form.prix) }}
                    </div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.espace, 'Lieu') }}
                    {{ form_widget(form.espace, {'attr': {
                        'class': 'form-control',
                        'placeholder': 'Sélectionnez un lieu'
                    }}) }}
                    {{ form_errors(form.espace) }}
                </div>
                <div class=\"form-actions\">
                    <a href=\"{{ path('admin_evenement_liste') }}\" class=\"btn btn-return\">
                        <i class=\"fas fa-arrow-left\"></i> Retour
                    </a>
                    <button type=\"submit\" class=\"btn btn-submit\">
                        <i class=\"fas fa-check\"></i> Publier
                    </button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "Admin/Gestionevenement/Ajoutevenement.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Gestionevenement\\Ajoutevenement.html.twig");
    }
}
