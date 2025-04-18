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

/* Admin/Modifevenement.html.twig */
class __TwigTemplate_82e7fe1be7de20da006edb5a7d68a4f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Modifevenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Modifevenement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/Modifevenement.html.twig", 2);
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

        yield "Admin | Modifier Événement";
        
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        /* Design créatif moderne - Identique à ajouter.html.twig */
        :root {
            --primary: #6C4DF6;
            --secondary: #FF7E5F;
            --light: #F8F9FF;
            --dark: #1E1E2C;
            --accent: #A3D8FF;
            --success: #4FD69C;
            --radius: 16px;
            --shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
        
        body {
            background: linear-gradient(135deg, #F8F9FF 0%, #E6F0FF 100%);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: var(--dark);
            min-height: 100vh;
            padding: 0;
            margin: 0;
        }
        
        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .admin-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .admin-title {
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin: 0;
            line-height: 1.2;
        }
        
        .admin-subtitle {
            color: #6B7280;
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }
        
        .form-card {
            background: white;
            border-radius: var(--radius);
            padding: 3rem;
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
            margin-bottom: 2rem;
        }
        
        .form-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 8px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
        }
        
        .form-group {
            margin-bottom: 2rem;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 600;
            color: var(--dark);
            font-size: 1rem;
            position: relative;
            padding-left: 15px;
        }
        
        .form-group label::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
            height: 8px;
            background: var(--secondary);
            border-radius: 50%;
        }
        
        .form-control {
            width: 100%;
            padding: 1rem 1.5rem;
            border: 2px solid #E5E7EB;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-size: 1rem;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.03);
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(108, 77, 246, 0.1);
            outline: none;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .btn-submit {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border: none;
            padding: 1.2rem 3rem;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(108, 77, 246, 0.3);
            width: 100%;
            max-width: 300px;
            margin: 1rem auto;
        }
        
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(108, 77, 246, 0.4);
        }
        
        .btn-submit i {
            margin-right: 10px;
        }
        
        .btn-return {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            background: rgba(108, 77, 246, 0.1);
        }
        
        .btn-return:hover {
            background: rgba(108, 77, 246, 0.2);
            transform: translateX(-5px);
        }
        
        .btn-return i {
            margin-right: 8px;
        }
        
        .btn-delete {
            background: #FF3B30;
            color: white;
            border: none;
            padding: 1.2rem 3rem;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(255, 59, 48, 0.3);
            width: 100%;
            max-width: 300px;
            margin: 1rem auto;
        }
        
        .btn-delete:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 59, 48, 0.4);
        }
        
        .image-upload-wrapper {
            position: relative;
            border: 2px dashed #E5E7EB;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            background: white;
            cursor: pointer;
            margin-top: 1rem;
        }
        
        .image-upload-wrapper:hover {
            border-color: var(--primary);
            background: rgba(108, 77, 246, 0.05);
        }
        
        .image-upload-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .current-image {
            max-width: 100%;
            max-height: 300px;
            border-radius: 12px;
            margin: 1rem auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 2px solid white;
        }
        
        .image-preview {
            max-width: 100%;
            max-height: 300px;
            border-radius: 12px;
            display: none;
            margin: 1rem auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 2px solid white;
        }
        
        .remove-image-check {
            margin-top: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .two-col {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .form-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px dashed #E5E7EB;
        }
        
        .actions-container {
            display: flex;
            gap: 1.5rem;
            width: 100%;
            max-width: 650px;
            justify-content: center;
        }
        
        .input-group {
            display: flex;
            align-items: center;
            background: white;
            border-radius: 12px;
            border: 2px solid #E5E7EB;
            overflow: hidden;
        }
        
        .input-group .form-control {
            border: none;
            box-shadow: none;
        }
        
        .input-group-text {
            padding: 1rem;
            background: #F9FAFB;
            color: #6B7280;
            font-weight: 600;
        }
        
        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-card {
            animation: fadeIn 0.6s ease-out forwards;
        }
        
        /* Alert style */
        .alert {
            padding: 1.2rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            background: var(--success);
            color: white;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(79, 214, 156, 0.3);
        }
        
        .alert i {
            margin-right: 10px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .admin-container {
                padding: 1.5rem;
            }
            
            .form-card {
                padding: 2rem 1.5rem;
            }
            
            .admin-title {
                font-size: 2rem;
            }
            
            .actions-container {
                flex-direction: column;
                gap: 1rem;
            }
            
            .btn-submit, .btn-delete {
                max-width: 100%;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 351
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

        // line 352
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Date picker
            flatpickr('#evenement_date', {
                dateFormat: \"Y-m-d\",
                minDate: \"today\",
                locale: \"fr\"
            });
            
            // Image preview for new upload
            const imageInput = document.getElementById('evenement_image');
            const preview = document.getElementById('imagePreview');
            
            if (imageInput) {
                imageInput.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            preview.src = e.target.result;
                            preview.style.display = 'block';
                        }
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 384
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

        // line 385
        yield "    <div class=\"admin-container\">
        <div class=\"admin-header\">
            <h1 class=\"admin-title\">Modifier l'Événement</h1>
            <p class=\"admin-subtitle\">Mettez à jour les détails de votre événement</p>
        </div>
        
        ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "flashes", ["success"], "method", false, false, false, 391));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 392
            yield "            <div class=\"alert\">
                <i class=\"fas fa-check-circle\"></i> ";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        yield "        
        <div class=\"form-card\">
            ";
        // line 398
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), 'form_start');
        yield "
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        ";
        // line 401
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "titre", [], "any", false, false, false, 401), 'label', ["label" => "Titre de l'événement"]);
        yield "
                        ";
        // line 402
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "titre", [], "any", false, false, false, 402), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Donnez un titre attractif"]]);
        // line 405
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 409
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 409, $this->source); })()), "categorie", [], "any", false, false, false, 409), 'label', ["label" => "Catégorie"]);
        yield "
                        ";
        // line 410
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), "categorie", [], "any", false, false, false, 410), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 415
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 415, $this->source); })()), "description", [], "any", false, false, false, 415), 'label', ["label" => "Description"]);
        yield "
                    ";
        // line 416
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 416, $this->source); })()), "description", [], "any", false, false, false, 416), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Décrivez votre événement en détail..."]]);
        // line 419
        yield "
                </div>
                
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        ";
        // line 424
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "date", [], "any", false, false, false, 424), 'label', ["label" => "Date"]);
        yield "
                        ";
        // line 425
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "date", [], "any", false, false, false, 425), 'widget', ["attr" => ["class" => "form-control", "id" => "evenement_date"]]);
        // line 428
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 432
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 432, $this->source); })()), "prix", [], "any", false, false, false, 432), 'label', ["label" => "Prix"]);
        yield "
                        <div class=\"input-group\">
                            ";
        // line 434
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 434, $this->source); })()), "prix", [], "any", false, false, false, 434), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0.00"]]);
        // line 437
        yield "
                            <span class=\"input-group-text\">TND</span>
                        </div>
                    </div>
                </div>
                
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        ";
        // line 445
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 445, $this->source); })()), "espace", [], "any", false, false, false, 445), 'label', ["label" => "Lieu"]);
        yield "
                        ";
        // line 446
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), "espace", [], "any", false, false, false, 446), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 450
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 450, $this->source); })()), "image", [], "any", false, false, false, 450), 'label', ["label" => "Image principale"]);
        yield "
                        <div class=\"image-upload-wrapper\">
                            ";
        // line 452
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 452, $this->source); })()), "image", [], "any", false, false, false, 452)) {
            // line 453
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 453, $this->source); })()), "image", [], "any", false, false, false, 453))), "html", null, true);
            yield "\" 
                                     class=\"current-image\" 
                                     alt=\"Image actuelle\">
                                <div class=\"remove-image-check\">
                                    <input type=\"checkbox\" 
                                           id=\"remove_image\" 
                                           name=\"remove_image\" 
                                           class=\"form-check-input\">
                                    <label for=\"remove_image\" class=\"form-check-label\">
                                        Supprimer l'image actuelle
                                    </label>
                                </div>
                            ";
        } else {
            // line 466
            yield "                                <div class=\"image-upload-icon\">
                                    <i class=\"fas fa-cloud-upload-alt\"></i>
                                </div>
                                <h4>Glissez-déposez votre image</h4>
                                <p>ou cliquez pour sélectionner</p>
                            ";
        }
        // line 472
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 472, $this->source); })()), "image", [], "any", false, false, false, 472), 'widget', ["attr" => ["accept" => "image/*"]]);
        // line 474
        yield "
                        </div>
                        <small class=\"text-muted\">Formats acceptés: JPG, PNG (max 5MB)</small>
                        <img id=\"imagePreview\" class=\"image-preview\" src=\"#\" alt=\"Aperçu de la nouvelle image\" />
                    </div>
                </div>
                
                <div class=\"form-actions\">
                    <div class=\"actions-container\">
                        <button type=\"submit\" class=\"btn-submit\">
                            <i class=\"fas fa-save\"></i> Enregistrer
                        </button>
                        
                        <button type=\"button\" 
                                class=\"btn-delete\"
                                onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')) { document.getElementById('delete-form').submit() }\">
                            <i class=\"fas fa-trash-alt\"></i> Supprimer
                        </button>
                        
                        <a href=\"";
        // line 493
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_liste");
        yield "\" class=\"btn-return\">
                            <i class=\"fas fa-arrow-left\"></i> Annuler
                        </a>
                    </div>
                </div>
            ";
        // line 498
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 498, $this->source); })()), 'form_end');
        yield "
            
            <form id=\"delete-form\" 
                  action=\"";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 501, $this->source); })()), "id", [], "any", false, false, false, 501)]), "html", null, true);
        yield "\" 
                  method=\"POST\" 
                  class=\"d-none\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 504, $this->source); })()), "id", [], "any", false, false, false, 504))), "html", null, true);
        yield "\">
            </form>
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
        return "Admin/Modifevenement.html.twig";
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
        return array (  713 => 504,  707 => 501,  701 => 498,  693 => 493,  672 => 474,  669 => 472,  661 => 466,  644 => 453,  642 => 452,  637 => 450,  630 => 446,  626 => 445,  616 => 437,  614 => 434,  609 => 432,  603 => 428,  601 => 425,  597 => 424,  590 => 419,  588 => 416,  584 => 415,  576 => 410,  572 => 409,  566 => 405,  564 => 402,  560 => 401,  554 => 398,  550 => 396,  541 => 393,  538 => 392,  534 => 391,  526 => 385,  513 => 384,  470 => 352,  457 => 351,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/evenement/modifier.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Admin | Modifier Événement{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        /* Design créatif moderne - Identique à ajouter.html.twig */
        :root {
            --primary: #6C4DF6;
            --secondary: #FF7E5F;
            --light: #F8F9FF;
            --dark: #1E1E2C;
            --accent: #A3D8FF;
            --success: #4FD69C;
            --radius: 16px;
            --shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
        
        body {
            background: linear-gradient(135deg, #F8F9FF 0%, #E6F0FF 100%);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: var(--dark);
            min-height: 100vh;
            padding: 0;
            margin: 0;
        }
        
        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .admin-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .admin-title {
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin: 0;
            line-height: 1.2;
        }
        
        .admin-subtitle {
            color: #6B7280;
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }
        
        .form-card {
            background: white;
            border-radius: var(--radius);
            padding: 3rem;
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
            margin-bottom: 2rem;
        }
        
        .form-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 8px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
        }
        
        .form-group {
            margin-bottom: 2rem;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 600;
            color: var(--dark);
            font-size: 1rem;
            position: relative;
            padding-left: 15px;
        }
        
        .form-group label::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
            height: 8px;
            background: var(--secondary);
            border-radius: 50%;
        }
        
        .form-control {
            width: 100%;
            padding: 1rem 1.5rem;
            border: 2px solid #E5E7EB;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-size: 1rem;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.03);
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(108, 77, 246, 0.1);
            outline: none;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .btn-submit {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border: none;
            padding: 1.2rem 3rem;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(108, 77, 246, 0.3);
            width: 100%;
            max-width: 300px;
            margin: 1rem auto;
        }
        
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(108, 77, 246, 0.4);
        }
        
        .btn-submit i {
            margin-right: 10px;
        }
        
        .btn-return {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            background: rgba(108, 77, 246, 0.1);
        }
        
        .btn-return:hover {
            background: rgba(108, 77, 246, 0.2);
            transform: translateX(-5px);
        }
        
        .btn-return i {
            margin-right: 8px;
        }
        
        .btn-delete {
            background: #FF3B30;
            color: white;
            border: none;
            padding: 1.2rem 3rem;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(255, 59, 48, 0.3);
            width: 100%;
            max-width: 300px;
            margin: 1rem auto;
        }
        
        .btn-delete:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 59, 48, 0.4);
        }
        
        .image-upload-wrapper {
            position: relative;
            border: 2px dashed #E5E7EB;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            background: white;
            cursor: pointer;
            margin-top: 1rem;
        }
        
        .image-upload-wrapper:hover {
            border-color: var(--primary);
            background: rgba(108, 77, 246, 0.05);
        }
        
        .image-upload-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .current-image {
            max-width: 100%;
            max-height: 300px;
            border-radius: 12px;
            margin: 1rem auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 2px solid white;
        }
        
        .image-preview {
            max-width: 100%;
            max-height: 300px;
            border-radius: 12px;
            display: none;
            margin: 1rem auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 2px solid white;
        }
        
        .remove-image-check {
            margin-top: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .two-col {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .form-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px dashed #E5E7EB;
        }
        
        .actions-container {
            display: flex;
            gap: 1.5rem;
            width: 100%;
            max-width: 650px;
            justify-content: center;
        }
        
        .input-group {
            display: flex;
            align-items: center;
            background: white;
            border-radius: 12px;
            border: 2px solid #E5E7EB;
            overflow: hidden;
        }
        
        .input-group .form-control {
            border: none;
            box-shadow: none;
        }
        
        .input-group-text {
            padding: 1rem;
            background: #F9FAFB;
            color: #6B7280;
            font-weight: 600;
        }
        
        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-card {
            animation: fadeIn 0.6s ease-out forwards;
        }
        
        /* Alert style */
        .alert {
            padding: 1.2rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            background: var(--success);
            color: white;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(79, 214, 156, 0.3);
        }
        
        .alert i {
            margin-right: 10px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .admin-container {
                padding: 1.5rem;
            }
            
            .form-card {
                padding: 2rem 1.5rem;
            }
            
            .admin-title {
                font-size: 2rem;
            }
            
            .actions-container {
                flex-direction: column;
                gap: 1rem;
            }
            
            .btn-submit, .btn-delete {
                max-width: 100%;
            }
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Date picker
            flatpickr('#evenement_date', {
                dateFormat: \"Y-m-d\",
                minDate: \"today\",
                locale: \"fr\"
            });
            
            // Image preview for new upload
            const imageInput = document.getElementById('evenement_image');
            const preview = document.getElementById('imagePreview');
            
            if (imageInput) {
                imageInput.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            preview.src = e.target.result;
                            preview.style.display = 'block';
                        }
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>
{% endblock %}

{% block body %}
    <div class=\"admin-container\">
        <div class=\"admin-header\">
            <h1 class=\"admin-title\">Modifier l'Événement</h1>
            <p class=\"admin-subtitle\">Mettez à jour les détails de votre événement</p>
        </div>
        
        {% for message in app.flashes('success') %}
            <div class=\"alert\">
                <i class=\"fas fa-check-circle\"></i> {{ message }}
            </div>
        {% endfor %}
        
        <div class=\"form-card\">
            {{ form_start(form) }}
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        {{ form_label(form.titre, 'Titre de l\\'événement') }}
                        {{ form_widget(form.titre, {'attr': {
                            'class': 'form-control',
                            'placeholder': 'Donnez un titre attractif'
                        }}) }}
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(form.categorie, 'Catégorie') }}
                        {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.description, 'Description') }}
                    {{ form_widget(form.description, {'attr': {
                        'class': 'form-control',
                        'placeholder': 'Décrivez votre événement en détail...'
                    }}) }}
                </div>
                
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        {{ form_label(form.date, 'Date') }}
                        {{ form_widget(form.date, {'attr': {
                            'class': 'form-control',
                            'id': 'evenement_date'
                        }}) }}
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(form.prix, 'Prix') }}
                        <div class=\"input-group\">
                            {{ form_widget(form.prix, {'attr': {
                                'class': 'form-control',
                                'placeholder': '0.00'
                            }}) }}
                            <span class=\"input-group-text\">TND</span>
                        </div>
                    </div>
                </div>
                
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        {{ form_label(form.espace, 'Lieu') }}
                        {{ form_widget(form.espace, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(form.image, 'Image principale') }}
                        <div class=\"image-upload-wrapper\">
                            {% if evenement.image %}
                                <img src=\"{{ asset('uploads/images/' ~ evenement.image) }}\" 
                                     class=\"current-image\" 
                                     alt=\"Image actuelle\">
                                <div class=\"remove-image-check\">
                                    <input type=\"checkbox\" 
                                           id=\"remove_image\" 
                                           name=\"remove_image\" 
                                           class=\"form-check-input\">
                                    <label for=\"remove_image\" class=\"form-check-label\">
                                        Supprimer l'image actuelle
                                    </label>
                                </div>
                            {% else %}
                                <div class=\"image-upload-icon\">
                                    <i class=\"fas fa-cloud-upload-alt\"></i>
                                </div>
                                <h4>Glissez-déposez votre image</h4>
                                <p>ou cliquez pour sélectionner</p>
                            {% endif %}
                            {{ form_widget(form.image, {'attr': {
                                'accept': 'image/*'
                            }}) }}
                        </div>
                        <small class=\"text-muted\">Formats acceptés: JPG, PNG (max 5MB)</small>
                        <img id=\"imagePreview\" class=\"image-preview\" src=\"#\" alt=\"Aperçu de la nouvelle image\" />
                    </div>
                </div>
                
                <div class=\"form-actions\">
                    <div class=\"actions-container\">
                        <button type=\"submit\" class=\"btn-submit\">
                            <i class=\"fas fa-save\"></i> Enregistrer
                        </button>
                        
                        <button type=\"button\" 
                                class=\"btn-delete\"
                                onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')) { document.getElementById('delete-form').submit() }\">
                            <i class=\"fas fa-trash-alt\"></i> Supprimer
                        </button>
                        
                        <a href=\"{{ path('admin_evenement_liste') }}\" class=\"btn-return\">
                            <i class=\"fas fa-arrow-left\"></i> Annuler
                        </a>
                    </div>
                </div>
            {{ form_end(form) }}
            
            <form id=\"delete-form\" 
                  action=\"{{ path('admin_evenement_delete', {'id': evenement.id}) }}\" 
                  method=\"POST\" 
                  class=\"d-none\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evenement.id) }}\">
            </form>
        </div>
    </div>
{% endblock %}", "Admin/Modifevenement.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Modifevenement.html.twig");
    }
}
