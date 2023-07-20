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

/* author/index.html.twig */
class __TwigTemplate_1b1e7b6bb0fa085551b29947347b4cc8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "author/index.html.twig", 1);
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

        echo "Авторы";
        
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
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("search-preview", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_author")]);
        echo " >
    <div class=\"h-content\">
        <div>
            <form>
                <div class=\"input-group\">
                    <input
                            name=\"q\"
                            ";
        // line 14
        echo "                            placeholder=\"Фамилия...\"
                            type=\"search\"
                            class=\"form-control\"
                            data-action=\"search-preview#onSearchInput\"
                    >
                </div>
            </form>
        </div>
        <div class=\"caption\">
            Авторы
        </div>
        <div class=\"operations\">
            <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newauthor");
        echo "\">
                <button class=\"button btn btn-sm\">Добавить</button>
            </a>
        </div>
    </div>

    <div class=\"table_div\">
        <div class=\"thead_div\">
            <div class=\"row_div\">
                <div class=\"cell_thead_div_id\">Id</div>
                <div class=\"cell_thead_div\">Фамилия</div>
                <div class=\"cell_thead_div\">Имя</div>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 49
            echo "                <div class=\"row_div\" id=\"row_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
                    <div class=\"cell_thead_div_id\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</div>
                    <div class=\"cell_thead_div\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "lastname", [], "any", false, false, false, 51), "html", null, true);
            echo "</div>
                    <div class=\"cell_thead_div\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "firstname", [], "any", false, false, false, 52), "html", null, true);
            echo "</div>

                    <div class=\"cell_div_oper\">
                        <div>
                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_author_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">
                                <button class=\"btn btn-sm btn-secondary button_edit\">Изменить</button>
                            </a>
                        </div>
                        <div ";
            // line 60
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("submit-confirm-jq", ["title" => "Удалить автора?", "text" => ((twig_get_attribute($this->env, $this->source,             // line 62
$context["author"], "lastname", [], "any", false, false, false, 62) . " ") . twig_get_attribute($this->env, $this->source, $context["author"], "firstname", [], "any", false, false, false, 62)), "formUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_author_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 63
$context["author"], "id", [], "any", false, false, false, 63)])]);
            // line 64
            echo ">
                            <button
                                    class=\"btn btn-sm btn-secondary button_delete\"
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
            // line 75
            echo "                <div class=\"row_empty\">
                    Записи не найдены
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "author/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 79,  189 => 75,  174 => 64,  172 => 63,  171 => 62,  170 => 60,  163 => 56,  156 => 52,  152 => 51,  148 => 50,  143 => 49,  138 => 48,  113 => 26,  99 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Авторы{% endblock %}

{% block body %}
<div {{ stimulus_controller('search-preview', { url: path('app_author') }) }} >
    <div class=\"h-content\">
        <div>
            <form>
                <div class=\"input-group\">
                    <input
                            name=\"q\"
                            {# value=\"{{ searchTerm }}\"#}
                            placeholder=\"Фамилия...\"
                            type=\"search\"
                            class=\"form-control\"
                            data-action=\"search-preview#onSearchInput\"
                    >
                </div>
            </form>
        </div>
        <div class=\"caption\">
            Авторы
        </div>
        <div class=\"operations\">
            <a href=\"{{ path('app_newauthor') }}\">
                <button class=\"button btn btn-sm\">Добавить</button>
            </a>
        </div>
    </div>

    <div class=\"table_div\">
        <div class=\"thead_div\">
            <div class=\"row_div\">
                <div class=\"cell_thead_div_id\">Id</div>
                <div class=\"cell_thead_div\">Фамилия</div>
                <div class=\"cell_thead_div\">Имя</div>
                <div class=\"cell_thead_div_oper\">Операции</div>
            </div>
        </div>

        <div
                class=\"search-preview\"
                data-search-preview-target=\"rez\"
        >

        <div class=\"tbody_div\">
            {% for author in authors %}
                <div class=\"row_div\" id=\"row_{{ author.id }}\">
                    <div class=\"cell_thead_div_id\">{{ author.id }}</div>
                    <div class=\"cell_thead_div\">{{ author.lastname }}</div>
                    <div class=\"cell_thead_div\">{{ author.firstname }}</div>

                    <div class=\"cell_div_oper\">
                        <div>
                            <a href=\"{{ path('app_author_edit', {'id': author.id}) }}\">
                                <button class=\"btn btn-sm btn-secondary button_edit\">Изменить</button>
                            </a>
                        </div>
                        <div {{ stimulus_controller('submit-confirm-jq', {
                            title: \"Удалить автора?\",
                            text: author.lastname~' '~author.firstname,
                            formUrl: path('app_author_delete', {'id': author.id})
                        }) }}>
                            <button
                                    class=\"btn btn-sm btn-secondary button_delete\"
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

{% endblock %}
", "author/index.html.twig", "/var/www/templates/author/index.html.twig");
    }
}
