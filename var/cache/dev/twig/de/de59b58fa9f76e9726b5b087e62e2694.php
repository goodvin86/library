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
class __TwigTemplate_31802d0e34aa5d29291fb461a67fb8dd extends Template
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
        echo "<div ";
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("search-preview", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publisher")]);
        echo " >
    <div class=\"h-content\">
        <div>
            <form>
                <div class=\"input-group\">
                    <input
                        name=\"q\"
                        ";
        // line 14
        echo "                        placeholder=\"Наименование...\"
                        type=\"search\"
                        class=\"form-control\"
                        data-action=\"search-preview#onSearchInput\"
                    >
                </div>
            </form>
        </div>
        <div class=\"caption\">
            Издатели
        </div>
        <div class=\"operations\">
            <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newpublisher");
        echo "\">
                <button class=\"button btn btn-sm\">Добавить</button>
            </a>
        </div>
    </div>

    <div class=\"table_div\">
        <div class=\"thead_div\">
            <div class=\"row_div\">
                <div class=\"cell_thead_div_id\">Id</div>
                <div class=\"cell_thead_div\">Наименование</div>
                <div class=\"cell_thead_div\">Адрес</div>
                <div class=\"cell_thead_div_oper\">Операции</div>
            </div>
        </div>

        <div
            class=\"search-preview\"
            data-search-preview-target=\"rez\"
        >

        <div class=\"tbody_div\">
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publishers"]) || array_key_exists("publishers", $context) ? $context["publishers"] : (function () { throw new RuntimeError('Variable "publishers" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["publisher"]) {
            // line 49
            echo "            <div class=\"row_div\" id=\"row_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
                <div class=\"cell_thead_div_id\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</div>
                <div class=\"cell_thead_div\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</div>
                <div class=\"cell_thead_div\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "address", [], "any", false, false, false, 52), "html", null, true);
            echo "</div>
                <div class=\"cell_div_oper\">
                    <div>
                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publisher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["publisher"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">
                            <button class=\"btn btn-secondary btn-sm button_edit\">Изменить</button>
                        </a>
                    </div>
                    <div ";
            // line 59
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("submit-confirm-jq", ["title" => "Удалить издателя?", "text" => twig_get_attribute($this->env, $this->source,             // line 61
$context["publisher"], "name", [], "any", false, false, false, 61), "formUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publisher_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 62
$context["publisher"], "id", [], "any", false, false, false, 62)])]);
            // line 63
            echo ">
                        <button
                                class=\"btn btn-secondary btn-sm button_delete\"
                                data-action=\"submit-confirm-jq#onSubmit\">
                            Удалить
                        </button>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "            <div class=\"row_empty\">
                Записи не найдены
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publisher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </div>

        </div>

    </div>
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
        return array (  196 => 77,  187 => 73,  173 => 63,  171 => 62,  170 => 61,  169 => 59,  162 => 55,  156 => 52,  152 => 51,  148 => 50,  143 => 49,  138 => 48,  113 => 26,  99 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Издатели{% endblock %}

{% block body %}
<div {{ stimulus_controller('search-preview', { url: path('app_publisher') }) }} >
    <div class=\"h-content\">
        <div>
            <form>
                <div class=\"input-group\">
                    <input
                        name=\"q\"
                        {# value=\"{{ searchTerm }}\"#}
                        placeholder=\"Наименование...\"
                        type=\"search\"
                        class=\"form-control\"
                        data-action=\"search-preview#onSearchInput\"
                    >
                </div>
            </form>
        </div>
        <div class=\"caption\">
            Издатели
        </div>
        <div class=\"operations\">
            <a href=\"{{ path('app_newpublisher') }}\">
                <button class=\"button btn btn-sm\">Добавить</button>
            </a>
        </div>
    </div>

    <div class=\"table_div\">
        <div class=\"thead_div\">
            <div class=\"row_div\">
                <div class=\"cell_thead_div_id\">Id</div>
                <div class=\"cell_thead_div\">Наименование</div>
                <div class=\"cell_thead_div\">Адрес</div>
                <div class=\"cell_thead_div_oper\">Операции</div>
            </div>
        </div>

        <div
            class=\"search-preview\"
            data-search-preview-target=\"rez\"
        >

        <div class=\"tbody_div\">
            {% for publisher in publishers %}
            <div class=\"row_div\" id=\"row_{{ publisher.id }}\">
                <div class=\"cell_thead_div_id\">{{ publisher.id }}</div>
                <div class=\"cell_thead_div\">{{ publisher.name }}</div>
                <div class=\"cell_thead_div\">{{ publisher.address }}</div>
                <div class=\"cell_div_oper\">
                    <div>
                        <a href=\"{{ path('app_publisher_edit', {'id': publisher.id}) }}\">
                            <button class=\"btn btn-secondary btn-sm button_edit\">Изменить</button>
                        </a>
                    </div>
                    <div {{ stimulus_controller('submit-confirm-jq', {
                        title: \"Удалить издателя?\",
                        text: publisher.name,
                        formUrl: path('app_publisher_delete', {'id': publisher.id})
                    }) }}>
                        <button
                                class=\"btn btn-secondary btn-sm button_delete\"
                                data-action=\"submit-confirm-jq#onSubmit\">
                            Удалить
                        </button>
                    </div>
                </div>
            </div>
            {% else %}
            <div class=\"row_empty\">
                Записи не найдены
            </div>
            {% endfor %}
        </div>

        </div>

    </div>
</div>
{% endblock %}
", "publisher/index.html.twig", "/home/goodvin/sites/testwebapp/templates/publisher/index.html.twig");
    }
}
