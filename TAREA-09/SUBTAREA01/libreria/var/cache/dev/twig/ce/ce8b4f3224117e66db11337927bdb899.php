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

/* libro/_form.html.twig */
class __TwigTemplate_2bfccca9aa7dd5e44051d50ed4acfefc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "libro/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "libro/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "

<div class=\"mb-4\">
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "titulo", [], "any", false, false, false, 4), 'row', ["attr" => ["class" => "form-control form-control-lg", "style" => "padding: 14px; border-radius: 8px;"]]);
        // line 9
        yield "
</div>

<div class=\"mb-4\">
    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "autor", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control form-control-lg", "style" => "padding: 14px; border-radius: 8px;"]]);
        // line 18
        yield "
</div>

<div class=\"mb-4\">
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "descripcion", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control form-control-lg", "style" => "padding: 14px; border-radius: 8px; height: 160px;"]]);
        // line 27
        yield "
</div>

<div class=\"mb-5\">
    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "precio", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control form-control-lg", "style" => "padding: 14px; border-radius: 8px; max-width: 300px;"]]);
        // line 36
        yield "
</div>

<div class=\"mt-4\">
    <button class=\"btn btn-primary btn-lg w-100\" style=\"padding: 12px 0;\">
        ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 41, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        yield "
    </button>
</div>

";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "libro/_form.html.twig";
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
        return array (  94 => 45,  87 => 41,  80 => 36,  78 => 31,  72 => 27,  70 => 22,  64 => 18,  62 => 13,  56 => 9,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}

<div class=\"mb-4\">
    {{ form_row(form.titulo, {
        attr: {
            class: 'form-control form-control-lg',
            style: 'padding: 14px; border-radius: 8px;'
        }
    }) }}
</div>

<div class=\"mb-4\">
    {{ form_row(form.autor, {
        attr: {
            class: 'form-control form-control-lg',
            style: 'padding: 14px; border-radius: 8px;'
        }
    }) }}
</div>

<div class=\"mb-4\">
    {{ form_row(form.descripcion, {
        attr: {
            class: 'form-control form-control-lg',
            style: 'padding: 14px; border-radius: 8px; height: 160px;'
        }
    }) }}
</div>

<div class=\"mb-5\">
    {{ form_row(form.precio, {
        attr: {
            class: 'form-control form-control-lg',
            style: 'padding: 14px; border-radius: 8px; max-width: 300px;'
        }
    }) }}
</div>

<div class=\"mt-4\">
    <button class=\"btn btn-primary btn-lg w-100\" style=\"padding: 12px 0;\">
        {{ button_label|default('Guardar') }}
    </button>
</div>

{{ form_end(form) }}
", "libro/_form.html.twig", "C:\\xampp\\htdocs\\EMPRESA-DWCS\\TAREA-09\\SUBTAREA01\\libreria\\templates\\libro\\_form.html.twig");
    }
}
