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

/* home/index.html.twig */
class __TwigTemplate_2bb165bf038b0e6d47611acad431d244 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Inicio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "
<div class=\"text-center mt-5\">

    <h1 class=\"display-4 fw-bold mb-4\">
        📚 Sistema de Gestión de Librería
    </h1>

    <p class=\"lead text-muted mb-5\">
        Una plataforma moderna para administrar, consultar y organizar colecciones de libros de forma eficiente.
    </p>

    <div class=\"row justify-content-center mb-5\">
        <div class=\"col-md-8\">
            <div class=\"card shadow border-0\">
                <div class=\"card-body p-4\">
                    <h4 class=\"fw-semibold mb-3\">¿Qué puedes hacer aquí?</h4>

                    <ul class=\"list-group list-group-flush text-start\">
                        <li class=\"list-group-item\">
                            ✔ Consultar el catálogo completo de libros
                        </li>
                        <li class=\"list-group-item\">
                            ✔ Añadir nuevos libros a la colección
                        </li>
                        <li class=\"list-group-item\">
                            ✔ Editar información existente
                        </li>
                        <li class=\"list-group-item\">
                            ✔ Eliminar registros obsoletos
                        </li>
                        <li class=\"list-group-item\">
                            ✔ Acceder mediante autenticación segura
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"d-flex justify-content-center gap-3\">

        <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_libro_index");
        yield "\" class=\"btn btn-primary btn-lg px-4\">
            Ver catálogo
        </a>

        ";
        // line 51
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-outline-secondary btn-lg px-4\">
                Acceso
            </a>

            <a href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-outline-success btn-lg px-4\">
                Registro
            </a>
        ";
        }
        // line 60
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
        return "home/index.html.twig";
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
        return array (  167 => 60,  160 => 56,  152 => 52,  150 => 51,  143 => 47,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inicio{% endblock %}

{% block body %}

<div class=\"text-center mt-5\">

    <h1 class=\"display-4 fw-bold mb-4\">
        📚 Sistema de Gestión de Librería
    </h1>

    <p class=\"lead text-muted mb-5\">
        Una plataforma moderna para administrar, consultar y organizar colecciones de libros de forma eficiente.
    </p>

    <div class=\"row justify-content-center mb-5\">
        <div class=\"col-md-8\">
            <div class=\"card shadow border-0\">
                <div class=\"card-body p-4\">
                    <h4 class=\"fw-semibold mb-3\">¿Qué puedes hacer aquí?</h4>

                    <ul class=\"list-group list-group-flush text-start\">
                        <li class=\"list-group-item\">
                            ✔ Consultar el catálogo completo de libros
                        </li>
                        <li class=\"list-group-item\">
                            ✔ Añadir nuevos libros a la colección
                        </li>
                        <li class=\"list-group-item\">
                            ✔ Editar información existente
                        </li>
                        <li class=\"list-group-item\">
                            ✔ Eliminar registros obsoletos
                        </li>
                        <li class=\"list-group-item\">
                            ✔ Acceder mediante autenticación segura
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"d-flex justify-content-center gap-3\">

        <a href=\"{{ path('app_libro_index') }}\" class=\"btn btn-primary btn-lg px-4\">
            Ver catálogo
        </a>

        {% if not app.user %}
            <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-secondary btn-lg px-4\">
                Acceso
            </a>

            <a href=\"{{ path('app_register') }}\" class=\"btn btn-outline-success btn-lg px-4\">
                Registro
            </a>
        {% endif %}

    </div>

</div>

{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\EMPRESA-DWCS\\TAREA-09\\SUBTAREA01\\libreria\\templates\\home\\index.html.twig");
    }
}
