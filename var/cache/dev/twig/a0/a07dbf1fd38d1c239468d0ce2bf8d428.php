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

/* Front/AddEvent.html.twig */
class __TwigTemplate_069e7d5ad8af0f923b36228ecf4ee418 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/AddEvent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/AddEvent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/AddEvent.html.twig", 1);
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

        yield "Eventopia | Create an Event";
        
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
        yield from $this->loadTemplate("Front/navbar.html.twig", "Front/AddEvent.html.twig", 7)->unwrap()->yield($context);
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
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        /* Elegant color palette */
        :root {
            --primary: #2C3E50;
            --secondary: #E74C3C;
            --accent: #3498DB;
            --light-bg: #F9F9F9;
            --text-dark: #333333;
            --text-light: #7F8C8D;
            --border: #ECF0F1;
        }

        /* Hero Section with background image */
        .hero-section {
            width: 100%;
            padding: 100px 20px;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1531058020387-3be344556be6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle {
            font-size: 1.4rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        /* Minimalist style */
        .event-creation-flow {
            background: var(--light-bg);
            padding: 3rem 0;
        }
        
        .creation-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 2rem;
            padding: 0 1rem;
        }
        
        /* Publication Guide - Modern style without icons */
        .creation-guide {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 120px;
            height: fit-content;
            border-top: 4px solid var(--accent);
        }
        
        .guide-header {
            margin-bottom: 1.5rem;
        }
        
        .guide-header h2 {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }
        
        .guide-header h2::before {
            content: \"\";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
            height: 8px;
            background: var(--accent);
            border-radius: 50%;
        }
        
        .guide-step {
            padding: 1.2rem 0;
            border-bottom: 1px solid var(--border);
            position: relative;
            padding-left: 1.8rem;
        }
        
        .guide-step::before {
            content: attr(data-step);
            position: absolute;
            left: 0;
            top: 1.2rem;
            font-weight: bold;
            color: var(--accent);
            font-size: 1.1rem;
        }
        
        .guide-step h4 {
            color: var(--primary);
            margin-bottom: 0.4rem;
            font-size: 1.1rem;
        }
        
        /* Minimalist form */
        .creation-form {
            background: white;
            border-radius: 8px;
            padding: 2.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .form-section {
            margin-bottom: 3rem;
        }
        
        .section-header {
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--border);
            position: relative;
        }
        
        .section-header::after {
            content: \"\";
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 80px;
            height: 2px;
            background: var(--accent);
        }
        
        .section-title {
            color: var(--primary);
            font-weight: 700;
            margin: 0;
            font-size: 1.4rem;
        }
        
        .form-group {
            margin-bottom: 1.8rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.6rem;
            font-weight: 600;
            color: var(--text-dark);
            font-size: 0.95rem;
        }
        
        .form-input {
            width: 100%;
            padding: 0.9rem 1rem;
            border: 1px solid var(--border);
            border-radius: 6px;
            transition: all 0.2s;
            font-size: 1rem;
            background: white;
        }
        
        .form-input:focus {
            border-color: var(--accent);
            outline: none;
            box-shadow: 0 0 0 2px rgba(52,152,219,0.1);
        }
        
        /* Improved upload zone */
        .upload-container {
            position: relative;
            height: 200px;
            width: 100%;
        }

        .upload-zone {
            height: 100%;
            width: 100%;
            border: 2px dashed var(--border);
            border-radius: 6px;
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

        .upload-zone:hover {
            border-color: var(--accent);
            background: var(--light-bg);
        }

        .upload-icon {
            font-size: 2rem;
            color: var(--accent);
            margin-bottom: 0.75rem;
        }

        .upload-text {
            font-size: 0.9rem;
            margin: 0.25rem 0;
            color: var(--text-dark);
        }

        .upload-hint {
            font-size: 0.8rem;
            color: var(--text-light);
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
        
        /* Modern buttons */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1.2rem;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border);
        }
        
        .btn-outline {
            border: 1px solid var(--text-light);
            color: var(--text-dark);
            padding: 0.8rem 1.8rem;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.2s;
            text-decoration: none;
            background: white;
        }
        
        .btn-outline:hover {
            background: var(--light-bg);
            border-color: var(--primary);
        }
        
        .btn-primary {
            background: var(--accent);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.2s;
        }
        
        .btn-primary:hover {
            background: #2980B9;
            transform: translateY(-1px);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .creation-container {
                grid-template-columns: 1fr;
            }
            
            .creation-guide {
                position: static;
                margin-bottom: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .creation-form {
                padding: 1.5rem;
            }
            
            .form-actions {
                flex-direction: column;
            }
            
            .btn-outline,
            .btn-primary {
                width: 100%;
                text-align: center;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 332
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

        // line 333
        yield "<!-- Hero Section with image -->
<section class=\"hero-section\">
    <div class=\"hero-content\">
        <h1 class=\"hero-title\" style=\"color: white;\">Create a Memorable Event</h1>
        <p style=\"color: white; font-size: 1.5rem; margin-bottom: 30px;\">
            Share your passion with the world on
            <span style=\"color:rgb(21, 52, 228); font-weight: bold;\">Eventopia</span>
        </p>
    </div>
</section>

<!-- Main content -->
<section class=\"event-creation-flow\">
    <div class=\"creation-container\">
        <!-- Publication Guide - Minimalist version -->
        <aside class=\"creation-guide\">
            <div class=\"guide-header\">
                <h2>Publication Guide</h2>
                <p style=\"color: var(--text-light); font-size: 0.9rem;\">Create a successful event by following these steps</p>
            </div>
            
            <div class=\"guide-step\" data-step=\"1\">
                <h4>Basic Information</h4>
                <p style=\"color: var(--text-light); font-size: 0.85rem; line-height: 1.5;\">A clear title and complete description increase visibility.</p>
            </div>
            
            <div class=\"guide-step\" data-step=\"2\">
                <h4>Impactful Visual</h4>
                <p style=\"color: var(--text-light); font-size: 0.85rem; line-height: 1.5;\">Choose a high-quality image that represents your event.</p>
            </div>
            
            <div class=\"guide-step\" data-step=\"3\">
                <h4>Practical Details</h4>
                <p style=\"color: var(--text-light); font-size: 0.85rem; line-height: 1.5;\">Specify the date, location and price to facilitate decision making.</p>
            </div>
            
            <div class=\"guide-step\" data-step=\"4\">
                <h4>Final Validation</h4>
                <p style=\"color: var(--text-light); font-size: 0.85rem; line-height: 1.5;\">Review carefully before publishing.</p>
            </div>
            
            <div style=\"margin-top: 2rem; padding: 1rem; background: var(--light-bg); border-radius: 6px;\">
                <h5 style=\"color: var(--accent); margin-bottom: 0.5rem; font-size: 0.95rem;\">Pro Tip</h5>
                <p style=\"color: var(--text-light); font-size: 0.85rem; line-height: 1.5;\">Publish at least 3 weeks in advance to maximize registrations.</p>
            </div>
        </aside>
        
        <!-- Creation form -->
        <div class=\"creation-form\">
            ";
        // line 382
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 382, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
                <!-- Section 1: Basic Information -->
                <div class=\"form-section\">
                    <div class=\"section-header\">
                        <h2 class=\"section-title\">Basic Information</h2>
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 390
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "titre", [], "any", false, false, false, 390), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Event Title*"]);
        yield "
                        ";
        // line 391
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "titre", [], "any", false, false, false, 391), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "Ex: Jazz Under the Stars Concert"]]);
        // line 394
        yield "
                        <small style=\"display: block; margin-top: 0.5rem; color: var(--text-light); font-size: 0.85rem;\">50-70 characters recommended</small>
                        ";
        // line 396
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "titre", [], "any", false, false, false, 396), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 400
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "description", [], "any", false, false, false, 400), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Complete Description*"]);
        yield "
                        ";
        // line 401
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "description", [], "any", false, false, false, 401), 'widget', ["attr" => ["class" => "form-input", "rows" => 6, "placeholder" => "Describe your event in detail...

Ex: An exceptional evening with international artists in an enchanting setting."]]);
        // line 405
        yield "
                        ";
        // line 406
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), "description", [], "any", false, false, false, 406), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 410
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), "categorie", [], "any", false, false, false, 410), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Category*"]);
        yield "
                        ";
        // line 411
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "categorie", [], "any", false, false, false, 411), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                        ";
        // line 412
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "categorie", [], "any", false, false, false, 412), 'errors');
        yield "
                    </div>
                </div>
                
                <!-- Section 2: Visual -->
                <div class=\"form-section\">
                    <div class=\"section-header\">
                        <h2 class=\"section-title\">Visual</h2>
                    </div>
                    
                    <div class=\"form-group\">
                        <label class=\"form-label\">Main Image*</label>
                        <p style=\"color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.5rem;\">This image will be the main visual element of your page</p>
                        
                        <div class=\"upload-container\">
                            <div class=\"upload-zone\" id=\"uploadWrapper\">
                                <i class=\"fas fa-cloud-upload-alt upload-icon\"></i>
                                <div class=\"upload-text\">Click to upload an image</div>
                                <div class=\"upload-hint\">Formats: JPG, PNG (max 5MB)</div>
                            </div>
                            ";
        // line 432
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 432, $this->source); })()), "image", [], "any", false, false, false, 432), 'widget', ["attr" => ["style" => "display:none;", "id" => "evenement_image", "accept" => "image/*"]]);
        // line 436
        yield "
                            <img id=\"imagePreview\" class=\"image-preview\">
                        </div>
                        ";
        // line 439
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 439, $this->source); })()), "image", [], "any", false, false, false, 439), 'errors');
        yield "
                    </div>
                </div>
                
                <!-- Section 3: Practical Details -->
                <div class=\"form-section\">
                    <div class=\"section-header\">
                        <h2 class=\"section-title\">Practical Details</h2>
                    </div>
                    
                    <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 1.5rem;\">
                        <div class=\"form-group\">
                            ";
        // line 451
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 451, $this->source); })()), "date", [], "any", false, false, false, 451), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date and Time*"]);
        yield "
                            ";
        // line 452
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "date", [], "any", false, false, false, 452), 'widget', ["attr" => ["class" => "form-input", "id" => "evenement_date"]]);
        // line 455
        yield "
                            ";
        // line 456
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 456, $this->source); })()), "date", [], "any", false, false, false, 456), 'errors');
        yield "
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 460
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 460, $this->source); })()), "prix", [], "any", false, false, false, 460), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Price*"]);
        yield "
                            <div style=\"display: flex;\">
                                ";
        // line 462
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 462, $this->source); })()), "prix", [], "any", false, false, false, 462), 'widget', ["attr" => ["class" => "form-input", "style" => "border-radius: 6px 0 0 6px;"]]);
        // line 465
        yield "
                                <span style=\"padding: 0.9rem 1rem; background: var(--light-bg); border: 1px solid var(--border); border-left: none; border-radius: 0 6px 6px 0; color: var(--text-light);\">TND</span>
                            </div>
                            <small style=\"display: block; margin-top: 0.5rem; color: var(--text-light); font-size: 0.85rem;\">0 for a free event</small>
                            ";
        // line 469
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 469, $this->source); })()), "prix", [], "any", false, false, false, 469), 'errors');
        yield "
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 474
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 474, $this->source); })()), "espace", [], "any", false, false, false, 474), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Location*"]);
        yield "
                        ";
        // line 475
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 475, $this->source); })()), "espace", [], "any", false, false, false, 475), 'widget', ["attr" => ["class" => "form-input"]]);
        // line 477
        yield "
                        ";
        // line 478
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 478, $this->source); })()), "espace", [], "any", false, false, false, 478), 'errors');
        yield "
                    </div>
                </div>
                
                <!-- Actions -->
                <div class=\"form-actions\">
                    <a href=\"";
        // line 484
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn-outline\">
                        Cancel
                    </a>
                    <button type=\"submit\" class=\"btn-primary\">
                        Publish Event
                    </button>
                </div>
            ";
        // line 491
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 491, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 497
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

        // line 498
        yield "    ";
        yield from $this->loadTemplate("Front/footer.html.twig", "Front/AddEvent.html.twig", 498)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 501
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

        // line 502
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Datepicker configuration
            flatpickr('#evenement_date', {
                enableTime: true,
                dateFormat: \"Y-m-d H:i\",
                minDate: \"today\",
                locale: \"fr\",
                time_24hr: true,
                minuteIncrement: 15
            });
            
            // Image upload handling
            const imageInput = document.getElementById('evenement_image');
            const preview = document.getElementById('imagePreview');
            const uploadWrapper = document.getElementById('uploadWrapper');
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

            // Drag and drop handling
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                uploadWrapper.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                uploadWrapper.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                uploadWrapper.addEventListener(eventName, unhighlight, false);
            });

            function highlight() {
                uploadWrapper.style.borderColor = 'var(--accent)';
                uploadWrapper.style.backgroundColor = 'var(--light-bg)';
            }

            function unhighlight() {
                uploadWrapper.style.borderColor = 'var(--border)';
                uploadWrapper.style.backgroundColor = '#f9fafb';
            }

            // Handle dropped files
            uploadWrapper.addEventListener('drop', function(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                
                if (files.length) {
                    imageInput.files = files;
                    const event = new Event('change');
                    imageInput.dispatchEvent(event);
                }
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
        return "Front/AddEvent.html.twig";
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
        return array (  747 => 502,  734 => 501,  722 => 498,  709 => 497,  693 => 491,  683 => 484,  674 => 478,  671 => 477,  669 => 475,  665 => 474,  657 => 469,  651 => 465,  649 => 462,  644 => 460,  637 => 456,  634 => 455,  632 => 452,  628 => 451,  613 => 439,  608 => 436,  606 => 432,  583 => 412,  579 => 411,  575 => 410,  568 => 406,  565 => 405,  561 => 401,  557 => 400,  550 => 396,  546 => 394,  544 => 391,  540 => 390,  529 => 382,  478 => 333,  465 => 332,  134 => 12,  121 => 11,  109 => 8,  107 => 7,  104 => 6,  91 => 5,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eventopia | Create an Event{% endblock %}

{% block navbar %}
    <div style=\"background-color:white; margin-bottom:95px;\">
        {% include 'Front/navbar.html.twig' %}
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        /* Elegant color palette */
        :root {
            --primary: #2C3E50;
            --secondary: #E74C3C;
            --accent: #3498DB;
            --light-bg: #F9F9F9;
            --text-dark: #333333;
            --text-light: #7F8C8D;
            --border: #ECF0F1;
        }

        /* Hero Section with background image */
        .hero-section {
            width: 100%;
            padding: 100px 20px;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1531058020387-3be344556be6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle {
            font-size: 1.4rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        /* Minimalist style */
        .event-creation-flow {
            background: var(--light-bg);
            padding: 3rem 0;
        }
        
        .creation-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 2rem;
            padding: 0 1rem;
        }
        
        /* Publication Guide - Modern style without icons */
        .creation-guide {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 120px;
            height: fit-content;
            border-top: 4px solid var(--accent);
        }
        
        .guide-header {
            margin-bottom: 1.5rem;
        }
        
        .guide-header h2 {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }
        
        .guide-header h2::before {
            content: \"\";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
            height: 8px;
            background: var(--accent);
            border-radius: 50%;
        }
        
        .guide-step {
            padding: 1.2rem 0;
            border-bottom: 1px solid var(--border);
            position: relative;
            padding-left: 1.8rem;
        }
        
        .guide-step::before {
            content: attr(data-step);
            position: absolute;
            left: 0;
            top: 1.2rem;
            font-weight: bold;
            color: var(--accent);
            font-size: 1.1rem;
        }
        
        .guide-step h4 {
            color: var(--primary);
            margin-bottom: 0.4rem;
            font-size: 1.1rem;
        }
        
        /* Minimalist form */
        .creation-form {
            background: white;
            border-radius: 8px;
            padding: 2.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .form-section {
            margin-bottom: 3rem;
        }
        
        .section-header {
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--border);
            position: relative;
        }
        
        .section-header::after {
            content: \"\";
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 80px;
            height: 2px;
            background: var(--accent);
        }
        
        .section-title {
            color: var(--primary);
            font-weight: 700;
            margin: 0;
            font-size: 1.4rem;
        }
        
        .form-group {
            margin-bottom: 1.8rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.6rem;
            font-weight: 600;
            color: var(--text-dark);
            font-size: 0.95rem;
        }
        
        .form-input {
            width: 100%;
            padding: 0.9rem 1rem;
            border: 1px solid var(--border);
            border-radius: 6px;
            transition: all 0.2s;
            font-size: 1rem;
            background: white;
        }
        
        .form-input:focus {
            border-color: var(--accent);
            outline: none;
            box-shadow: 0 0 0 2px rgba(52,152,219,0.1);
        }
        
        /* Improved upload zone */
        .upload-container {
            position: relative;
            height: 200px;
            width: 100%;
        }

        .upload-zone {
            height: 100%;
            width: 100%;
            border: 2px dashed var(--border);
            border-radius: 6px;
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

        .upload-zone:hover {
            border-color: var(--accent);
            background: var(--light-bg);
        }

        .upload-icon {
            font-size: 2rem;
            color: var(--accent);
            margin-bottom: 0.75rem;
        }

        .upload-text {
            font-size: 0.9rem;
            margin: 0.25rem 0;
            color: var(--text-dark);
        }

        .upload-hint {
            font-size: 0.8rem;
            color: var(--text-light);
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
        
        /* Modern buttons */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1.2rem;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border);
        }
        
        .btn-outline {
            border: 1px solid var(--text-light);
            color: var(--text-dark);
            padding: 0.8rem 1.8rem;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.2s;
            text-decoration: none;
            background: white;
        }
        
        .btn-outline:hover {
            background: var(--light-bg);
            border-color: var(--primary);
        }
        
        .btn-primary {
            background: var(--accent);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.2s;
        }
        
        .btn-primary:hover {
            background: #2980B9;
            transform: translateY(-1px);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .creation-container {
                grid-template-columns: 1fr;
            }
            
            .creation-guide {
                position: static;
                margin-bottom: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .creation-form {
                padding: 1.5rem;
            }
            
            .form-actions {
                flex-direction: column;
            }
            
            .btn-outline,
            .btn-primary {
                width: 100%;
                text-align: center;
            }
        }
    </style>
{% endblock %}

{% block body %}
<!-- Hero Section with image -->
<section class=\"hero-section\">
    <div class=\"hero-content\">
        <h1 class=\"hero-title\" style=\"color: white;\">Create a Memorable Event</h1>
        <p style=\"color: white; font-size: 1.5rem; margin-bottom: 30px;\">
            Share your passion with the world on
            <span style=\"color:rgb(21, 52, 228); font-weight: bold;\">Eventopia</span>
        </p>
    </div>
</section>

<!-- Main content -->
<section class=\"event-creation-flow\">
    <div class=\"creation-container\">
        <!-- Publication Guide - Minimalist version -->
        <aside class=\"creation-guide\">
            <div class=\"guide-header\">
                <h2>Publication Guide</h2>
                <p style=\"color: var(--text-light); font-size: 0.9rem;\">Create a successful event by following these steps</p>
            </div>
            
            <div class=\"guide-step\" data-step=\"1\">
                <h4>Basic Information</h4>
                <p style=\"color: var(--text-light); font-size: 0.85rem; line-height: 1.5;\">A clear title and complete description increase visibility.</p>
            </div>
            
            <div class=\"guide-step\" data-step=\"2\">
                <h4>Impactful Visual</h4>
                <p style=\"color: var(--text-light); font-size: 0.85rem; line-height: 1.5;\">Choose a high-quality image that represents your event.</p>
            </div>
            
            <div class=\"guide-step\" data-step=\"3\">
                <h4>Practical Details</h4>
                <p style=\"color: var(--text-light); font-size: 0.85rem; line-height: 1.5;\">Specify the date, location and price to facilitate decision making.</p>
            </div>
            
            <div class=\"guide-step\" data-step=\"4\">
                <h4>Final Validation</h4>
                <p style=\"color: var(--text-light); font-size: 0.85rem; line-height: 1.5;\">Review carefully before publishing.</p>
            </div>
            
            <div style=\"margin-top: 2rem; padding: 1rem; background: var(--light-bg); border-radius: 6px;\">
                <h5 style=\"color: var(--accent); margin-bottom: 0.5rem; font-size: 0.95rem;\">Pro Tip</h5>
                <p style=\"color: var(--text-light); font-size: 0.85rem; line-height: 1.5;\">Publish at least 3 weeks in advance to maximize registrations.</p>
            </div>
        </aside>
        
        <!-- Creation form -->
        <div class=\"creation-form\">
            {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}
                <!-- Section 1: Basic Information -->
                <div class=\"form-section\">
                    <div class=\"section-header\">
                        <h2 class=\"section-title\">Basic Information</h2>
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(form.titre, \"Event Title*\", {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.titre, {'attr': {
                            'class': 'form-input',
                            'placeholder': 'Ex: Jazz Under the Stars Concert'
                        }}) }}
                        <small style=\"display: block; margin-top: 0.5rem; color: var(--text-light); font-size: 0.85rem;\">50-70 characters recommended</small>
                        {{ form_errors(form.titre) }}
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(form.description, \"Complete Description*\", {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.description, {'attr': {
                            'class': 'form-input',
                            'rows': 6,
                            'placeholder': 'Describe your event in detail...\\n\\nEx: An exceptional evening with international artists in an enchanting setting.'
                        }}) }}
                        {{ form_errors(form.description) }}
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(form.categorie, \"Category*\", {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.categorie, {'attr': {'class': 'form-input'}}) }}
                        {{ form_errors(form.categorie) }}
                    </div>
                </div>
                
                <!-- Section 2: Visual -->
                <div class=\"form-section\">
                    <div class=\"section-header\">
                        <h2 class=\"section-title\">Visual</h2>
                    </div>
                    
                    <div class=\"form-group\">
                        <label class=\"form-label\">Main Image*</label>
                        <p style=\"color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.5rem;\">This image will be the main visual element of your page</p>
                        
                        <div class=\"upload-container\">
                            <div class=\"upload-zone\" id=\"uploadWrapper\">
                                <i class=\"fas fa-cloud-upload-alt upload-icon\"></i>
                                <div class=\"upload-text\">Click to upload an image</div>
                                <div class=\"upload-hint\">Formats: JPG, PNG (max 5MB)</div>
                            </div>
                            {{ form_widget(form.image, {'attr': {
                                'style': 'display:none;',
                                'id': 'evenement_image',
                                'accept': 'image/*'
                            }}) }}
                            <img id=\"imagePreview\" class=\"image-preview\">
                        </div>
                        {{ form_errors(form.image) }}
                    </div>
                </div>
                
                <!-- Section 3: Practical Details -->
                <div class=\"form-section\">
                    <div class=\"section-header\">
                        <h2 class=\"section-title\">Practical Details</h2>
                    </div>
                    
                    <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 1.5rem;\">
                        <div class=\"form-group\">
                            {{ form_label(form.date, \"Date and Time*\", {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.date, {'attr': {
                                'class': 'form-input',
                                'id': 'evenement_date'
                            }}) }}
                            {{ form_errors(form.date) }}
                        </div>
                        
                        <div class=\"form-group\">
                            {{ form_label(form.prix, \"Price*\", {'label_attr': {'class': 'form-label'}}) }}
                            <div style=\"display: flex;\">
                                {{ form_widget(form.prix, {'attr': {
                                    'class': 'form-input',
                                    'style': 'border-radius: 6px 0 0 6px;'
                                }}) }}
                                <span style=\"padding: 0.9rem 1rem; background: var(--light-bg); border: 1px solid var(--border); border-left: none; border-radius: 0 6px 6px 0; color: var(--text-light);\">TND</span>
                            </div>
                            <small style=\"display: block; margin-top: 0.5rem; color: var(--text-light); font-size: 0.85rem;\">0 for a free event</small>
                            {{ form_errors(form.prix) }}
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(form.espace, \"Location*\", {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.espace, {'attr': {
                            'class': 'form-input'
                        }}) }}
                        {{ form_errors(form.espace) }}
                    </div>
                </div>
                
                <!-- Actions -->
                <div class=\"form-actions\">
                    <a href=\"{{ path('app_home') }}\" class=\"btn-outline\">
                        Cancel
                    </a>
                    <button type=\"submit\" class=\"btn-primary\">
                        Publish Event
                    </button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
</section>
{% endblock %}

{% block footer %}
    {% include 'Front/footer.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Datepicker configuration
            flatpickr('#evenement_date', {
                enableTime: true,
                dateFormat: \"Y-m-d H:i\",
                minDate: \"today\",
                locale: \"fr\",
                time_24hr: true,
                minuteIncrement: 15
            });
            
            // Image upload handling
            const imageInput = document.getElementById('evenement_image');
            const preview = document.getElementById('imagePreview');
            const uploadWrapper = document.getElementById('uploadWrapper');
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

            // Drag and drop handling
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                uploadWrapper.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                uploadWrapper.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                uploadWrapper.addEventListener(eventName, unhighlight, false);
            });

            function highlight() {
                uploadWrapper.style.borderColor = 'var(--accent)';
                uploadWrapper.style.backgroundColor = 'var(--light-bg)';
            }

            function unhighlight() {
                uploadWrapper.style.borderColor = 'var(--border)';
                uploadWrapper.style.backgroundColor = '#f9fafb';
            }

            // Handle dropped files
            uploadWrapper.addEventListener('drop', function(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                
                if (files.length) {
                    imageInput.files = files;
                    const event = new Event('change');
                    imageInput.dispatchEvent(event);
                }
            });
        });
    </script>
{% endblock %}", "Front/AddEvent.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Front\\AddEvent.html.twig");
    }
}
