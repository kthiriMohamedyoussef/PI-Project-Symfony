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

/* Admin/Ajoutevenement.html.twig */
class __TwigTemplate_f6b8332587903ff2d0f04c8c26df6dd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Ajoutevenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Ajoutevenement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/Ajoutevenement.html.twig", 2);
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

        yield "Admin | Ajout d'Événement";
        
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
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4cc9f0;
            --light-bg: #f8f9fa;
            --dark-text: #212529;
        }
        
        .admin-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
        
        .admin-header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--light-bg);
        }
        
        .admin-title {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin: 0;
            display: flex;
            align-items: center;
        }
        
        .admin-title i {
            margin-right: 15px;
            color: var(--accent-color);
        }
        
        .form-card {
            background: var(--light-bg);
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--dark-text);
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(76, 201, 240, 0.2);
        }
        
        .btn-submit {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
        }
        
        .btn-submit:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        .btn-submit i {
            margin-right: 8px;
        }
        
        .image-preview {
            max-width: 200px;
            margin-top: 1rem;
            border-radius: 8px;
            display: none;
        }
        
        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
        
        @media (max-width: 768px) {
            .two-col {
                grid-template-columns: 1fr;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 123
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

        // line 124
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Date picker
            flatpickr('#evenement_date', {
                dateFormat: \"Y-m-d\",
                minDate: \"today\"
            });
            
            // Image preview
            document.getElementById('evenement_image').addEventListener('change', function(e) {
                const preview = document.getElementById('imagePreview');
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
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 152
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

        // line 153
        yield "    <div class=\"admin-container\">
        <div class=\"admin-header\">
            <h1 class=\"admin-title\">
                <i class=\"fas fa-calendar-plus\"></i> Ajouter un Événement
            </h1>
        </div>
        
        ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "flashes", ["success"], "method", false, false, false, 160));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 161
            yield "            <div class=\"alert alert-success alert-dismissible fade show\">
                ";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "        
        <div class=\"form-card\">
            ";
        // line 168
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), 'form_start');
        yield "
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "titre", [], "any", false, false, false, 171), 'label');
        yield "
                        ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "titre", [], "any", false, false, false, 172), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "categorie", [], "any", false, false, false, 176), 'label');
        yield "
                        ";
        // line 177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "categorie", [], "any", false, false, false, 177), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "description", [], "any", false, false, false, 182), 'label');
        yield "
                    ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "description", [], "any", false, false, false, 183), 'widget', ["attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
                </div>
                
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "date", [], "any", false, false, false, 188), 'label');
        yield "
                        ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "date", [], "any", false, false, false, 189), 'widget', ["attr" => ["class" => "form-control", "id" => "evenement_date"]]);
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "prix", [], "any", false, false, false, 193), 'label');
        yield "
                        ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "prix", [], "any", false, false, false, 194), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                </div>
                
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "espace", [], "any", false, false, false, 200), 'label');
        yield "
                        ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "espace", [], "any", false, false, false, 201), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "image", [], "any", false, false, false, 205), 'label');
        yield "
                        ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "image", [], "any", false, false, false, 206), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <img id=\"imagePreview\" class=\"image-preview\" src=\"#\" alt=\"Aperçu de l'image\" />
                    </div>
                </div>
                
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn-submit\">
                        <i class=\"fas fa-save\"></i> Enregistrer
                    </button>
                </div>
            ";
        // line 216
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), 'form_end');
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
        return "Admin/Ajoutevenement.html.twig";
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
        return array (  417 => 216,  404 => 206,  400 => 205,  393 => 201,  389 => 200,  380 => 194,  376 => 193,  369 => 189,  365 => 188,  357 => 183,  353 => 182,  345 => 177,  341 => 176,  334 => 172,  330 => 171,  324 => 168,  320 => 166,  310 => 162,  307 => 161,  303 => 160,  294 => 153,  281 => 152,  242 => 124,  229 => 123,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/evenement/ajouter.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Admin | Ajout d'Événement{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4cc9f0;
            --light-bg: #f8f9fa;
            --dark-text: #212529;
        }
        
        .admin-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
        
        .admin-header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--light-bg);
        }
        
        .admin-title {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin: 0;
            display: flex;
            align-items: center;
        }
        
        .admin-title i {
            margin-right: 15px;
            color: var(--accent-color);
        }
        
        .form-card {
            background: var(--light-bg);
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--dark-text);
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(76, 201, 240, 0.2);
        }
        
        .btn-submit {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
        }
        
        .btn-submit:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        .btn-submit i {
            margin-right: 8px;
        }
        
        .image-preview {
            max-width: 200px;
            margin-top: 1rem;
            border-radius: 8px;
            display: none;
        }
        
        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
        
        @media (max-width: 768px) {
            .two-col {
                grid-template-columns: 1fr;
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
                minDate: \"today\"
            });
            
            // Image preview
            document.getElementById('evenement_image').addEventListener('change', function(e) {
                const preview = document.getElementById('imagePreview');
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
        });
    </script>
{% endblock %}

{% block body %}
    <div class=\"admin-container\">
        <div class=\"admin-header\">
            <h1 class=\"admin-title\">
                <i class=\"fas fa-calendar-plus\"></i> Ajouter un Événement
            </h1>
        </div>
        
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success alert-dismissible fade show\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
        
        <div class=\"form-card\">
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
                    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 4}}) }}
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
                
                <div class=\"two-col\">
                    <div class=\"form-group\">
                        {{ form_label(form.espace) }}
                        {{ form_widget(form.espace, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(form.image) }}
                        {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                        <img id=\"imagePreview\" class=\"image-preview\" src=\"#\" alt=\"Aperçu de l'image\" />
                    </div>
                </div>
                
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn-submit\">
                        <i class=\"fas fa-save\"></i> Enregistrer
                    </button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "Admin/Ajoutevenement.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Ajoutevenement.html.twig");
    }
}
