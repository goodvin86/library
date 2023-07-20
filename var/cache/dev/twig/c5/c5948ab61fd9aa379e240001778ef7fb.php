<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* publisher/index.html.twig */
class __TwigTemplate_a6e008c6691afa59b8bd5280ce735250 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publisher/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publisher/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "publisher/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Издатели";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3>Список издателей</h3>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Наименование</th>
            <th>Адрес</th>
            <th>Операции</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publishers"]) || array_key_exists("publishers", $context) ? $context["publishers"] : (function () { throw new RuntimeError('Variable "publishers" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["publisher"]) {
            // line 18
            echo "            <tr id=\"tr_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\" >
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "address", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publisher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["publisher"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">Изменить</a>
                    <div ";
            // line 24
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("submit-confirm-jq", ["title" => "Удалить издателя?", "text" => twig_get_attribute($this->env, $this->source,             // line 26
$context["publisher"], "name", [], "any", false, false, false, 26), "formUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publisher_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 27
$context["publisher"], "id", [], "any", false, false, false, 27)])]);
            // line 28
            echo ">
                        <button
                                class=\"btn btn-secondary btn-sm\"
                                data-action=\"submit-confirm-jq#onSubmit\">
                            Удалить через preConfirm
                        </button>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <tr>
                <td colspan=\"10\">записи не найдены</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publisher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "publisher/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 42,  146 => 38,  132 => 28,  130 => 27,  129 => 26,  128 => 24,  124 => 23,  119 => 21,  115 => 20,  111 => 19,  106 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Издатели{% endblock %}

{% block body %}
    <h3>Список издателей</h3>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Наименование</th>
            <th>Адрес</th>
            <th>Операции</th>
        </tr>
        </thead>
        <tbody>
        {% for publisher in publishers %}
            <tr id=\"tr_{{ publisher.id }}\" >
                <td>{{ publisher.id }}</td>
                <td>{{ publisher.name }}</td>
                <td>{{ publisher.address }}</td>
                <td>
                    <a href=\"{{ path('app_publisher_edit', {'id': publisher.id}) }}\">Изменить</a>
                    <div {{ stimulus_controller('submit-confirm-jq', {
                        title: \"Удалить издателя?\",
                        text: publisher.name,
                        formUrl: path('app_publisher_delete', {'id': publisher.id})
                    }) }}>
                        <button
                                class=\"btn btn-secondary btn-sm\"
                                data-action=\"submit-confirm-jq#onSubmit\">
                            Удалить через preConfirm
                        </button>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">записи не найдены</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
{% endblock %}
", "publisher/index.html.twig", "/home/goodvin/sites/testwebapp/templates/publisher/index.html.twig");
    }
}
