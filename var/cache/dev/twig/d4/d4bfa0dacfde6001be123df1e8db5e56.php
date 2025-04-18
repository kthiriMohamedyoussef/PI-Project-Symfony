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

/* /Admin/Gestionevenement/Modifevenement.html.twig */
class __TwigTemplate_3ae9a7b7663ff259f29985543ce6f362 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/Admin/Gestionevenement/Modifevenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/Admin/Gestionevenement/Modifevenement.html.twig"));

        $this->parent = $this->loadTemplate("Admin/Gestionevenement/admin_base.html.twig", "/Admin/Gestionevenement/Modifevenement.html.twig", 1);
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

        yield "Eventopia | Modifier Événement";
        
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

        /* Structure principale */
        .admin-main {
            margin-left: var(--sidebar-width);
            background: #f5f9fc;
            display: flex;
            min-height: 100vh;
        }

        .form-container {
            flex: 1;
            padding: 2rem;
            display: flex;
        }

        .form-card {
            background: white;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            padding: 2.5rem;
            width: 100%;
            border-top: 4px solid var(--primary);
        }

        /* En-tête */
        .admin-header {
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--primary-light);
        }

        .admin-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .admin-title i {
            color: var(--accent);
        }

        .admin-subtitle {
            color: #6B7280;
            font-size: 1.05rem;
        }

        /* Formulaires */
        .two-col {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--primary);
        }

        .form-control {
            width: 100%;
            padding: 0.85rem 1.25rem;
            border: 1px solid #d1d5db;
            border-radius: var(--radius);
            background-color: #f9fafb;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px var(--accent-light);
            outline: none;
        }

        textarea.form-control {
            min-height: 180px;
            resize: vertical;
        }

        /* Upload image */
        .upload-container {
            position: relative;
            height: 200px;
        }

        .image-upload-wrapper {
            height: 100%;
            border: 2px dashed #d1d5db;
            border-radius: var(--radius);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #f9fafb;
            cursor: pointer;
            transition: all 0.3s ease;
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

        .current-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        /* Actions */
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
            border-radius: var(--radius);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
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

        .btn-delete {
            background: var(--error);
            color: white;
            border: none;
        }

        .btn-delete:hover {
            background: #e04b4b;
        }

        .btn-return {
            background: white;
            color: var(--primary);
            border: 1px solid #d1d5db;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 206
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

        // line 207
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

            // Image upload
            const imageInput = document.getElementById('evenement_image');
            const preview = document.getElementById('imagePreview');
            const uploadWrapper = document.querySelector('.image-upload-wrapper');
            
            if (imageInput) {
                uploadWrapper.addEventListener('click', function() {
                    imageInput.click();
                });

                imageInput.addEventListener('change', function(e) {
                    if (e.target.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(event) {
                            preview.src = event.target.result;
                            preview.style.display = 'block';
                        };
                        reader.readAsDataURL(e.target.files[0]);
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

    // line 244
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

        // line 245
        yield "    <div class=\"admin-main\">
        <div class=\"form-container\">
            <div class=\"form-card\">
                <div class=\"admin-header\">
                    <h1 class=\"admin-title\"><i class=\"fas fa-edit\"></i> Modifier l'Événement</h1>
                    <p class=\"admin-subtitle\">Mettez à jour les détails de \"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 250, $this->source); })()), "titre", [], "any", false, false, false, 250), "html", null, true);
        yield "\"</p>
                </div>

                ";
        // line 253
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), 'form_start');
        yield "
                    <div class=\"two-col\">
                        <div class=\"form-group\">
                            ";
        // line 256
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "titre", [], "any", false, false, false, 256), 'label');
        yield "
                            ";
        // line 257
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "titre", [], "any", false, false, false, 257), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 261
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "categorie", [], "any", false, false, false, 261), 'label');
        yield "
                            ";
        // line 262
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "categorie", [], "any", false, false, false, 262), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 267
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "description", [], "any", false, false, false, 267), 'label');
        yield "
                        ";
        // line 268
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "description", [], "any", false, false, false, 268), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <div class=\"two-col\">
                        <div class=\"form-group\">
                            ";
        // line 273
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "date", [], "any", false, false, false, 273), 'label');
        yield "
                            ";
        // line 274
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "date", [], "any", false, false, false, 274), 'widget', ["attr" => ["class" => "form-control", "id" => "evenement_date"]]);
        yield "
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 278
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "prix", [], "any", false, false, false, 278), 'label');
        yield "
                            ";
        // line 279
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 279, $this->source); })()), "prix", [], "any", false, false, false, 279), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 284
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "espace", [], "any", false, false, false, 284), 'label');
        yield "
                        ";
        // line 285
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "espace", [], "any", false, false, false, 285), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 289
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "image", [], "any", false, false, false, 289), 'label');
        yield "
                        <div class=\"upload-container\">
                            <div class=\"image-upload-wrapper\">
                                ";
        // line 292
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 292, $this->source); })()), "image", [], "any", false, false, false, 292)) {
            // line 293
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 293, $this->source); })()), "image", [], "any", false, false, false, 293))), "html", null, true);
            yield "\" class=\"current-image\" alt=\"Image actuelle\">
                                ";
        } else {
            // line 295
            yield "                                    <i class=\"fas fa-cloud-upload-alt upload-icon\"></i>
                                    <p>Cliquez pour téléverser une image</p>
                                ";
        }
        // line 298
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 298, $this->source); })()), "image", [], "any", false, false, false, 298), 'widget', ["attr" => ["style" => "display: none;", "id" => "evenement_image"]]);
        yield "
                                <img id=\"imagePreview\" class=\"image-preview\">
                            </div>
                        </div>
                        ";
        // line 302
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 302, $this->source); })()), "image", [], "any", false, false, false, 302)) {
            // line 303
            yield "                            <div style=\"margin-top: 0.5rem;\">
                                <input type=\"checkbox\" id=\"remove_image\" name=\"remove_image\">
                                <label for=\"remove_image\">Supprimer l'image actuelle</label>
                            </div>
                        ";
        }
        // line 308
        yield "                    </div>

                    <div class=\"form-actions\">
                        <a href=\"";
        // line 311
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_liste");
        yield "\" class=\"btn btn-return\">
                            <i class=\"fas fa-arrow-left\"></i> Annuler
                        </a>
                        <button type=\"button\" class=\"btn btn-delete\" onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')) { document.getElementById('delete-form').submit(); }\">
                            <i class=\"fas fa-trash\"></i> Supprimer
                        </button>
                        <button type=\"submit\" class=\"btn btn-submit\">
                            <i class=\"fas fa-save\"></i> Enregistrer
                        </button>
                    </div>
                ";
        // line 321
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), 'form_end');
        yield "

                <form id=\"delete-form\" action=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 323, $this->source); })()), "id", [], "any", false, false, false, 323)]), "html", null, true);
        yield "\" method=\"POST\" style=\"display: none;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 324, $this->source); })()), "id", [], "any", false, false, false, 324))), "html", null, true);
        yield "\">
                </form>
            </div>
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
        return "/Admin/Gestionevenement/Modifevenement.html.twig";
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
        return array (  538 => 324,  534 => 323,  529 => 321,  516 => 311,  511 => 308,  504 => 303,  502 => 302,  494 => 298,  489 => 295,  483 => 293,  481 => 292,  475 => 289,  468 => 285,  464 => 284,  456 => 279,  452 => 278,  445 => 274,  441 => 273,  433 => 268,  429 => 267,  421 => 262,  417 => 261,  410 => 257,  406 => 256,  400 => 253,  394 => 250,  387 => 245,  374 => 244,  326 => 207,  313 => 206,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Admin/Gestionevenement/admin_base.html.twig' %}

{% block title %}Eventopia | Modifier Événement{% endblock %}

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

        /* Structure principale */
        .admin-main {
            margin-left: var(--sidebar-width);
            background: #f5f9fc;
            display: flex;
            min-height: 100vh;
        }

        .form-container {
            flex: 1;
            padding: 2rem;
            display: flex;
        }

        .form-card {
            background: white;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            padding: 2.5rem;
            width: 100%;
            border-top: 4px solid var(--primary);
        }

        /* En-tête */
        .admin-header {
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--primary-light);
        }

        .admin-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .admin-title i {
            color: var(--accent);
        }

        .admin-subtitle {
            color: #6B7280;
            font-size: 1.05rem;
        }

        /* Formulaires */
        .two-col {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--primary);
        }

        .form-control {
            width: 100%;
            padding: 0.85rem 1.25rem;
            border: 1px solid #d1d5db;
            border-radius: var(--radius);
            background-color: #f9fafb;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px var(--accent-light);
            outline: none;
        }

        textarea.form-control {
            min-height: 180px;
            resize: vertical;
        }

        /* Upload image */
        .upload-container {
            position: relative;
            height: 200px;
        }

        .image-upload-wrapper {
            height: 100%;
            border: 2px dashed #d1d5db;
            border-radius: var(--radius);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #f9fafb;
            cursor: pointer;
            transition: all 0.3s ease;
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

        .current-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        /* Actions */
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
            border-radius: var(--radius);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
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

        .btn-delete {
            background: var(--error);
            color: white;
            border: none;
        }

        .btn-delete:hover {
            background: #e04b4b;
        }

        .btn-return {
            background: white;
            color: var(--primary);
            border: 1px solid #d1d5db;
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

            // Image upload
            const imageInput = document.getElementById('evenement_image');
            const preview = document.getElementById('imagePreview');
            const uploadWrapper = document.querySelector('.image-upload-wrapper');
            
            if (imageInput) {
                uploadWrapper.addEventListener('click', function() {
                    imageInput.click();
                });

                imageInput.addEventListener('change', function(e) {
                    if (e.target.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(event) {
                            preview.src = event.target.result;
                            preview.style.display = 'block';
                        };
                        reader.readAsDataURL(e.target.files[0]);
                    }
                });
            }
        });
    </script>
{% endblock %}

{% block admin_content %}
    <div class=\"admin-main\">
        <div class=\"form-container\">
            <div class=\"form-card\">
                <div class=\"admin-header\">
                    <h1 class=\"admin-title\"><i class=\"fas fa-edit\"></i> Modifier l'Événement</h1>
                    <p class=\"admin-subtitle\">Mettez à jour les détails de \"{{ evenement.titre }}\"</p>
                </div>

                {{ form_start(form) }}
                    <div class=\"two-col\">
                        <div class=\"form-group\">
                            {{ form_label(form.titre) }}
                            {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        
                        <div class=\"form-group\">
                            {{ form_label(form.categorie) }}
                            {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.description) }}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class=\"two-col\">
                        <div class=\"form-group\">
                            {{ form_label(form.date) }}
                            {{ form_widget(form.date, {'attr': {'class': 'form-control', 'id': 'evenement_date'}}) }}
                        </div>
                        
                        <div class=\"form-group\">
                            {{ form_label(form.prix) }}
                            {{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.espace) }}
                        {{ form_widget(form.espace, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.image) }}
                        <div class=\"upload-container\">
                            <div class=\"image-upload-wrapper\">
                                {% if evenement.image %}
                                    <img src=\"{{ asset('uploads/images/' ~ evenement.image) }}\" class=\"current-image\" alt=\"Image actuelle\">
                                {% else %}
                                    <i class=\"fas fa-cloud-upload-alt upload-icon\"></i>
                                    <p>Cliquez pour téléverser une image</p>
                                {% endif %}
                                {{ form_widget(form.image, {'attr': {'style': 'display: none;', 'id': 'evenement_image'}}) }}
                                <img id=\"imagePreview\" class=\"image-preview\">
                            </div>
                        </div>
                        {% if evenement.image %}
                            <div style=\"margin-top: 0.5rem;\">
                                <input type=\"checkbox\" id=\"remove_image\" name=\"remove_image\">
                                <label for=\"remove_image\">Supprimer l'image actuelle</label>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"form-actions\">
                        <a href=\"{{ path('admin_evenement_liste') }}\" class=\"btn btn-return\">
                            <i class=\"fas fa-arrow-left\"></i> Annuler
                        </a>
                        <button type=\"button\" class=\"btn btn-delete\" onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')) { document.getElementById('delete-form').submit(); }\">
                            <i class=\"fas fa-trash\"></i> Supprimer
                        </button>
                        <button type=\"submit\" class=\"btn btn-submit\">
                            <i class=\"fas fa-save\"></i> Enregistrer
                        </button>
                    </div>
                {{ form_end(form) }}

                <form id=\"delete-form\" action=\"{{ path('admin_evenement_delete', {'id': evenement.id}) }}\" method=\"POST\" style=\"display: none;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evenement.id) }}\">
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "/Admin/Gestionevenement/Modifevenement.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Gestionevenement\\Modifevenement.html.twig");
    }
}
