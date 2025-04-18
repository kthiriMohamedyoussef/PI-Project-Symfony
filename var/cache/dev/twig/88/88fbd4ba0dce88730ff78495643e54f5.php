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

/* Admin/Gestionevenement/programme_pdf.html.twig */
class __TwigTemplate_de2f03f1cb4071809ed036c72cbea3c7 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionevenement/programme_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionevenement/programme_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Programme - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body { 
            font-family: 'Helvetica', 'Arial', sans-serif;
            color: #333;
            line-height: 1.4;
            padding: 20px;
        }
        .header { 
            text-align: center; 
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #0f4c75;
        }
        .title { 
            font-size: 24px; 
            color: #0f4c75; 
            margin-bottom: 5px;
            font-weight: 700;
        }
        .event-date {
            font-size: 16px;
            color: #666;
            margin-top: 5px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px;
        }
        th { 
            background-color: #0f4c75; 
            color: white; 
            padding: 10px 15px;
            text-align: left;
            font-weight: 600;
        }
        td { 
            padding: 10px 15px; 
            border-bottom: 1px solid #e0e0e0;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .time-cell { 
            text-align: center; 
            font-family: 'Courier New', monospace;
            font-weight: bold;
            color: #3282b8;
        }
        .footer { 
            margin-top: 30px; 
            text-align: center; 
            font-size: 12px; 
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1 class=\"title\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 67, $this->source); })()), "titre", [], "any", false, false, false, 67), "html", null, true);
        yield "</h1>
        <div class=\"event-date\">
            ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 69, $this->source); })()), "date", [], "any", false, false, false, 69), "l j F Y"), "html", null, true);
        yield " | 
            ";
        // line 70
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "espace", [], "any", false, true, false, 70), "nom", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 70, $this->source); })()), "espace", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 70, $this->source); })()), "espace", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true)) : ("Lieu non spécifié"));
        yield "
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th width=\"60%\">Activité</th>
                <th width=\"20%\" class=\"time-cell\">Début</th>
                <th width=\"20%\" class=\"time-cell\">Fin</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
            // line 84
            yield "            <tr>
                <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "activite", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>
                <td class=\"time-cell\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "heureDebut", [], "any", false, false, false, 86), "H:i"), "html", null, true);
            yield "</td>
                <td class=\"time-cell\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "heureFin", [], "any", false, false, false, 87), "H:i"), "html", null, true);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['programme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "        </tbody>
    </table>

    <div class=\"footer\">
        Programme généré le ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield " via Eventopia
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/Gestionevenement/programme_pdf.html.twig";
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
        return array (  174 => 94,  168 => 90,  159 => 87,  155 => 86,  151 => 85,  148 => 84,  144 => 83,  128 => 70,  124 => 69,  119 => 67,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Programme - {{ evenement.titre }}</title>
    <style>
        body { 
            font-family: 'Helvetica', 'Arial', sans-serif;
            color: #333;
            line-height: 1.4;
            padding: 20px;
        }
        .header { 
            text-align: center; 
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #0f4c75;
        }
        .title { 
            font-size: 24px; 
            color: #0f4c75; 
            margin-bottom: 5px;
            font-weight: 700;
        }
        .event-date {
            font-size: 16px;
            color: #666;
            margin-top: 5px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px;
        }
        th { 
            background-color: #0f4c75; 
            color: white; 
            padding: 10px 15px;
            text-align: left;
            font-weight: 600;
        }
        td { 
            padding: 10px 15px; 
            border-bottom: 1px solid #e0e0e0;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .time-cell { 
            text-align: center; 
            font-family: 'Courier New', monospace;
            font-weight: bold;
            color: #3282b8;
        }
        .footer { 
            margin-top: 30px; 
            text-align: center; 
            font-size: 12px; 
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1 class=\"title\">{{ evenement.titre }}</h1>
        <div class=\"event-date\">
            {{ evenement.date|date('l j F Y') }} | 
            {{ evenement.espace.nom ?? 'Lieu non spécifié' }}
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th width=\"60%\">Activité</th>
                <th width=\"20%\" class=\"time-cell\">Début</th>
                <th width=\"20%\" class=\"time-cell\">Fin</th>
            </tr>
        </thead>
        <tbody>
            {% for programme in programmes %}
            <tr>
                <td>{{ programme.activite }}</td>
                <td class=\"time-cell\">{{ programme.heureDebut|date('H:i') }}</td>
                <td class=\"time-cell\">{{ programme.heureFin|date('H:i') }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"footer\">
        Programme généré le {{ \"now\"|date(\"d/m/Y à H:i\") }} via Eventopia
    </div>
</body>
</html>", "Admin/Gestionevenement/programme_pdf.html.twig", "C:\\Users\\walid\\Downloads\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Gestionevenement\\programme_pdf.html.twig");
    }
}
