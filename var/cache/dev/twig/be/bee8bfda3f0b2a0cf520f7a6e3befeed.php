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

/* Front/feedbacks.html.twig */
class __TwigTemplate_205e7495cb05d2a31c318ef2b43b6181 extends Template
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
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/feedbacks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/feedbacks.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/feedbacks.html.twig", 1);
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

        yield "Eventopia - feedback
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t<div style=\"background-color:white; margin-bottom:95px;\">
\t\t";
        // line 8
        yield from $this->loadTemplate("Front/navbar.html.twig", "Front/feedbacks.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "\t<style>
\t\t.send:hover {
\t\t\tcolor: blue;
\t\t}
\t\t.update:hover {
\t\t\tbackground-color: rgba(136, 157, 242, 0.58);
\t\t\tpadding: 4px;
\t\t\tborder-radius: 4px;
\t\t}
\t\t.trash:hover {
\t\t\tbackground-color: rgba(244, 95, 58, 0.58);
\t\t\tpadding: 4px;
\t\t\tborder-radius: 4px;
\t\t}
\t\t.modal-dialog.modal-lg {
\t\t\tmax-height: 90vh;
\t\t\theight: 90%;
\t\t\tmargin: 30px auto;
\t\t}
\t\t.reply-section {
\t\t\tdisplay: none;
\t\t\ttransition: all 0.3s ease;
\t\t}
\t\t.toggle-replies-btn {
\t\t\tcursor: pointer;
\t\t\ttransition: all 0.2s ease;
\t\t}
\t\t.toggle-replies-btn:hover {
\t\t\tcolor: #007bff !important;
\t\t}
\t\t.toggle-replies-btn.collapsed .fa-chevron-down {
\t\t\ttransform: rotate(-90deg);
\t\t}
\t\t.toggle-replies-btn .fa-chevron-down {
\t\t\ttransition: transform 0.3s ease;
\t\t}
\t\t/* Added margin for comments section */
\t\t.commented-section {
\t\t\tmargin: 20px 0;
\t\t\tpadding: 15px;
\t\t\tbackground-color: #fff;
\t\t\tborder-radius: 8px;
\t\t\tbox-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
\t\t}
\t\t/* Added spacing for nested replies */
\t\t.reply-container {
\t\t\tmargin-left: 40px;
\t\t\tborder-left: 2px solid #eee;
\t\t\tpadding-left: 20px;
\t\t}
\t</style>

\t<div class=\"container-fluid mt-5 mb-5\" style=\"padding-left:4%; padding-right:4%;\">
\t\t<div style=\"width: 100%; text-align: center; margin-bottom: 50px; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1572377200231-6525599ecaa4?q=80&w=2004&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center; padding: 100px 20px; border-radius: 8px;\">
\t\t\t<h1 style=\"color: white; font-weight: bold; font-size: 2.5rem;\">What's your feedback</h1>
\t\t\t<p style=\"color: white; font-size: 1.2rem;\">
\t\t\t\tabout
\t\t\t\t<span style=\"color:white; font-weight: bold;\">Eventopia</span>
\t\t\t</p>
\t\t</div>

\t\t<div class=\"d-flex justify-content-center row\">
\t\t\t<div
\t\t\t\tclass=\"d-flex flex-column \">
\t\t\t\t<!-- Added column width constraint -->
\t\t\t\t<div
\t\t\t\t\tclass=\"coment-bottom bg-white p-4 px-4 rounded shadow-sm\">
\t\t\t\t\t<!-- Added rounded corners and shadow -->
\t\t\t\t\t<form action=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedback_add");
        yield "\" method=\"POST\">
\t\t\t\t\t\t<div class=\"d-flex flex-row add-comment-section mt-4 mb-4\">
\t\t\t\t\t\t\t<img class=\"img-fluid img-responsive rounded-circle mr-3\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjDGMp734S91sDuUFqL51_xRTXS15iiRoHew&s\" width=\"50px\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Your feedback please...\" required>
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary send-btn\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paper-plane send\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t\t\t<hr
\t\t\t\t\tclass=\"mt-5 mb-4\">
\t\t\t\t\t<!-- Added margin -->

\t\t\t\t\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 99, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
            // line 100
            yield "\t\t\t\t\t\t<div class=\"commented-section\">
\t\t\t\t\t\t\t<div class=\"d-flex flex-row align-items-center commented-user\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid img-responsive rounded-circle mr-3\" src=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "user", [], "any", false, false, false, 102), "imageurl", [], "any", false, false, false, 102), "html", null, true);
            yield "\" width=\"40px\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t<!-- Wrapped text content -->
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "user", [], "any", false, false, false, 106), "prenom", [], "any", false, false, false, 106), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "user", [], "any", false, false, false, 107), "nom", [], "any", false, false, false, 107), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "createdAt", [], "any", false, false, false, 108), "d/m/Y H:i"), "html", null, true);
            yield "</small>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
            // line 111
            if (true) {
                // line 112
                yield "\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"ml-auto d-flex\">
\t\t\t\t\t\t\t\t\t\t<!-- Added flex to button container -->
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link text-primary p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 115), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit update\" style=\"font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feedback_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                yield "\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this feedback?');\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-link text-danger p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash trash\" style=\"font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 126
            yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"comment-text-sm mt-3\">
\t\t\t\t\t\t\t\t<!-- Added margin top -->
\t\t\t\t\t\t\t\t<p>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "comment", [], "any", false, false, false, 131), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Replies section with proper container -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"reply-container mt-3\">
\t\t\t\t\t\t\t\t<!-- Added margin top and container class -->
\t\t\t\t\t\t\t\t<h6 class=\"toggle-replies-btn text-muted mb-3 collapsed d-flex align-items-center\" style=\"font-weight: 600; letter-spacing: 0.5px;\" data-toggle=\"collapse\" data-target=\"#replies-";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 138), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-reply mr-2\"></i>
\t\t\t\t\t\t\t\t\t<span>Replies (";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "replies", [], "any", false, false, false, 140)), "html", null, true);
            yield ")</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down ml-2\" style=\"font-size: 0.8rem;\"></i>
\t\t\t\t\t\t\t\t</h6>

\t\t\t\t\t\t\t\t<div id=\"replies-";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 144), "html", null, true);
            yield "\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "replies", [], "any", false, false, false, 145));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                // line 146
                yield "\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mb-3 p-3\" style=\"background-color: #f8f9fa; border-radius: 8px;\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid img-responsive rounded-circle mr-3\" src=\"";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "utilisateur", [], "any", false, false, false, 147), "imageurl", [], "any", false, false, false, 147), "html", null, true);
                yield "\" width=\"36px\" style=\"align-self: flex-start;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold mr-2\">";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "utilisateur", [], "any", false, false, false, 150), "prenom", [], "any", false, false, false, 150), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "utilisateur", [], "any", false, false, false, 151), "nom", [], "any", false, false, false, 151), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "createdAt", [], "any", false, false, false, 152), "M d, Y h:i A"), "html", null, true);
                yield "</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "comment", [], "any", false, false, false, 154), "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            // line 157
            if (!$context['_iterated']) {
                // line 158
                yield "\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-3\">No replies yet. Be the first to respond!</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reply'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            yield "
\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reply_create", ["feedbackId" => CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 161)]), "html", null, true);
            yield "\" method=\"POST\" class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"reply_comment\" placeholder=\"Write your reply...\" required style=\"border-radius: 20px 0 0 20px; border-right: none;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 0 20px 20px 0; padding-left: 20px; padding-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paper-plane mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tSend
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Modal (properly closed div) -->
\t\t\t\t\t\t<div class=\"modal fade\" id=\"updateModal";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 177), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"updateModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 177), "html", null, true);
            yield "\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog modal-lg\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"updateModalLabel";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 181), "html", null, true);
            yield "\">Update your feedback</h5>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("feedback_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 185)]), "html", null, true);
            yield "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"comment";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 187), "html", null, true);
            yield "\" class=\"form-label\">Feedback</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"comment";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 188), "html", null, true);
            yield "\" name=\"comment\" class=\"form-control\" rows=\"3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "comment", [], "any", false, false, false, 188), "html", null, true);
            yield "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Update feedback</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 196
        if (!$context['_iterated']) {
            // line 197
            yield "\t\t\t\t\t\t<p class=\"text-center text-muted py-4\">No comments yet.</p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feedback'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () { // Handle reply section toggling
document.querySelectorAll('.toggle-replies-btn').forEach(button => {
button.addEventListener('click', function () {
this.classList.toggle('collapsed');

// Close other open reply sections when opening a new one
if (!this.classList.contains('collapsed')) {
document.querySelectorAll('.toggle-replies-btn:not(.collapsed)').forEach(otherBtn => {
if (otherBtn !== this) {
otherBtn.classList.add('collapsed');
const target = document.querySelector(otherBtn.dataset.target);
if (target) {
\$(target).collapse('hide');
}
}
});
}
});
});
});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 228
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

        // line 229
        yield "\t";
        yield from $this->loadTemplate("Front/footer.html.twig", "Front/feedbacks.html.twig", 229)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/feedbacks.html.twig";
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
        return array (  477 => 229,  464 => 228,  426 => 199,  419 => 197,  417 => 196,  402 => 188,  398 => 187,  393 => 185,  386 => 181,  377 => 177,  358 => 161,  355 => 160,  348 => 158,  346 => 157,  338 => 154,  333 => 152,  329 => 151,  325 => 150,  319 => 147,  316 => 146,  311 => 145,  307 => 144,  300 => 140,  295 => 138,  285 => 131,  278 => 126,  268 => 119,  261 => 115,  256 => 112,  254 => 111,  248 => 108,  244 => 107,  240 => 106,  233 => 102,  229 => 100,  224 => 99,  203 => 81,  133 => 13,  120 => 12,  108 => 9,  106 => 8,  103 => 7,  90 => 6,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eventopia - feedback
{% endblock %}

{% block navbar %}
\t<div style=\"background-color:white; margin-bottom:95px;\">
\t\t{% include 'Front/navbar.html.twig' %}
\t</div>
{% endblock %}

{% block body %}
\t<style>
\t\t.send:hover {
\t\t\tcolor: blue;
\t\t}
\t\t.update:hover {
\t\t\tbackground-color: rgba(136, 157, 242, 0.58);
\t\t\tpadding: 4px;
\t\t\tborder-radius: 4px;
\t\t}
\t\t.trash:hover {
\t\t\tbackground-color: rgba(244, 95, 58, 0.58);
\t\t\tpadding: 4px;
\t\t\tborder-radius: 4px;
\t\t}
\t\t.modal-dialog.modal-lg {
\t\t\tmax-height: 90vh;
\t\t\theight: 90%;
\t\t\tmargin: 30px auto;
\t\t}
\t\t.reply-section {
\t\t\tdisplay: none;
\t\t\ttransition: all 0.3s ease;
\t\t}
\t\t.toggle-replies-btn {
\t\t\tcursor: pointer;
\t\t\ttransition: all 0.2s ease;
\t\t}
\t\t.toggle-replies-btn:hover {
\t\t\tcolor: #007bff !important;
\t\t}
\t\t.toggle-replies-btn.collapsed .fa-chevron-down {
\t\t\ttransform: rotate(-90deg);
\t\t}
\t\t.toggle-replies-btn .fa-chevron-down {
\t\t\ttransition: transform 0.3s ease;
\t\t}
\t\t/* Added margin for comments section */
\t\t.commented-section {
\t\t\tmargin: 20px 0;
\t\t\tpadding: 15px;
\t\t\tbackground-color: #fff;
\t\t\tborder-radius: 8px;
\t\t\tbox-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
\t\t}
\t\t/* Added spacing for nested replies */
\t\t.reply-container {
\t\t\tmargin-left: 40px;
\t\t\tborder-left: 2px solid #eee;
\t\t\tpadding-left: 20px;
\t\t}
\t</style>

\t<div class=\"container-fluid mt-5 mb-5\" style=\"padding-left:4%; padding-right:4%;\">
\t\t<div style=\"width: 100%; text-align: center; margin-bottom: 50px; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1572377200231-6525599ecaa4?q=80&w=2004&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center; padding: 100px 20px; border-radius: 8px;\">
\t\t\t<h1 style=\"color: white; font-weight: bold; font-size: 2.5rem;\">What's your feedback</h1>
\t\t\t<p style=\"color: white; font-size: 1.2rem;\">
\t\t\t\tabout
\t\t\t\t<span style=\"color:white; font-weight: bold;\">Eventopia</span>
\t\t\t</p>
\t\t</div>

\t\t<div class=\"d-flex justify-content-center row\">
\t\t\t<div
\t\t\t\tclass=\"d-flex flex-column \">
\t\t\t\t<!-- Added column width constraint -->
\t\t\t\t<div
\t\t\t\t\tclass=\"coment-bottom bg-white p-4 px-4 rounded shadow-sm\">
\t\t\t\t\t<!-- Added rounded corners and shadow -->
\t\t\t\t\t<form action=\"{{ path('app_feedback_add') }}\" method=\"POST\">
\t\t\t\t\t\t<div class=\"d-flex flex-row add-comment-section mt-4 mb-4\">
\t\t\t\t\t\t\t<img class=\"img-fluid img-responsive rounded-circle mr-3\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjDGMp734S91sDuUFqL51_xRTXS15iiRoHew&s\" width=\"50px\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Your feedback please...\" required>
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary send-btn\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paper-plane send\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t\t\t<hr
\t\t\t\t\tclass=\"mt-5 mb-4\">
\t\t\t\t\t<!-- Added margin -->

\t\t\t\t\t{% for feedback in feedbacks %}
\t\t\t\t\t\t<div class=\"commented-section\">
\t\t\t\t\t\t\t<div class=\"d-flex flex-row align-items-center commented-user\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid img-responsive rounded-circle mr-3\" src=\"{{feedback.user.imageurl}}\" width=\"40px\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t<!-- Wrapped text content -->
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">{{feedback.user.prenom}}
\t\t\t\t\t\t\t\t\t\t{{feedback.user.nom}}</h5>
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">{{ feedback.createdAt|date(\"d/m/Y H:i\") }}</small>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t{% if true %}
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"ml-auto d-flex\">
\t\t\t\t\t\t\t\t\t\t<!-- Added flex to button container -->
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link text-primary p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal{{ feedback.id }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit update\" style=\"font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('feedback_delete', {'id': feedback.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this feedback?');\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-link text-danger p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash trash\" style=\"font-size: 25px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"comment-text-sm mt-3\">
\t\t\t\t\t\t\t\t<!-- Added margin top -->
\t\t\t\t\t\t\t\t<p>{{ feedback.comment }}</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Replies section with proper container -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"reply-container mt-3\">
\t\t\t\t\t\t\t\t<!-- Added margin top and container class -->
\t\t\t\t\t\t\t\t<h6 class=\"toggle-replies-btn text-muted mb-3 collapsed d-flex align-items-center\" style=\"font-weight: 600; letter-spacing: 0.5px;\" data-toggle=\"collapse\" data-target=\"#replies-{{ feedback.id }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-reply mr-2\"></i>
\t\t\t\t\t\t\t\t\t<span>Replies ({{ feedback.replies|length }})</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down ml-2\" style=\"font-size: 0.8rem;\"></i>
\t\t\t\t\t\t\t\t</h6>

\t\t\t\t\t\t\t\t<div id=\"replies-{{ feedback.id }}\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t{% for reply in feedback.replies %}
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mb-3 p-3\" style=\"background-color: #f8f9fa; border-radius: 8px;\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid img-responsive rounded-circle mr-3\" src=\"{{reply.utilisateur.imageurl}}\" width=\"36px\" style=\"align-self: flex-start;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold mr-2\">{{reply.utilisateur.prenom}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{reply.utilisateur.nom}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">{{ reply.createdAt|date('M d, Y h:i A') }}</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">{{ reply.comment }}</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-3\">No replies yet. Be the first to respond!</p>
\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t<form action=\"{{ path('reply_create', {'feedbackId': feedback.id}) }}\" method=\"POST\" class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"reply_comment\" placeholder=\"Write your reply...\" required style=\"border-radius: 20px 0 0 20px; border-right: none;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 0 20px 20px 0; padding-left: 20px; padding-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paper-plane mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tSend
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Modal (properly closed div) -->
\t\t\t\t\t\t<div class=\"modal fade\" id=\"updateModal{{ feedback.id }}\" tabindex=\"-1\" aria-labelledby=\"updateModalLabel{{ feedback.id }}\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog modal-lg\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"updateModalLabel{{ feedback.id }}\">Update your feedback</h5>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('feedback_update', {'id': feedback.id}) }}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"comment{{ feedback.id }}\" class=\"form-label\">Feedback</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"comment{{ feedback.id }}\" name=\"comment\" class=\"form-control\" rows=\"3\">{{ feedback.comment }}</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Update feedback</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p class=\"text-center text-muted py-4\">No comments yet.</p>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () { // Handle reply section toggling
document.querySelectorAll('.toggle-replies-btn').forEach(button => {
button.addEventListener('click', function () {
this.classList.toggle('collapsed');

// Close other open reply sections when opening a new one
if (!this.classList.contains('collapsed')) {
document.querySelectorAll('.toggle-replies-btn:not(.collapsed)').forEach(otherBtn => {
if (otherBtn !== this) {
otherBtn.classList.add('collapsed');
const target = document.querySelector(otherBtn.dataset.target);
if (target) {
\$(target).collapse('hide');
}
}
});
}
});
});
});
\t</script>
{% endblock %}

{% block footer %}
\t{% include 'Front/footer.html.twig' %}
{% endblock %}
", "Front/feedbacks.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Front\\feedbacks.html.twig");
    }
}
