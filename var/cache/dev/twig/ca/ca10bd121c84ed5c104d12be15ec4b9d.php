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

/* books/index.html.twig */
class __TwigTemplate_5ca6dd8b237d527c954b26e207651d9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "books/index.html.twig", 1);
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

        echo "Книги";
        
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
        echo "    <div ";
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("search-preview", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books")]);
        echo " >
        <div class=\"h-content\">
            <div>
                <form>
                    <div class=\"input-group\">
                        <input
                                name=\"q\"
                                ";
        // line 14
        echo "                                placeholder=\"Наименование...\"
                                type=\"search\"
                                class=\"form-control\"
                                data-action=\"search-preview#onSearchInput\"
                        >
                    </div>
                </form>
            </div>

            <div class=\"caption\">
                Книги
            </div>
            <div class=\"operations\">
                <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newbook");
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
                    <div class=\"cell_thead_div\">Издатель</div>
                    <div class=\"cell_thead_div\">Год издания</div>
                    <div class=\"cell_thead_div\">Автор</div>
                    <div class=\"cell_thead_div_oper\">Операции</div>
                </div>
            </div>

            <div
                    class=\"search-preview\"
                    data-search-preview-target=\"rez\"
            >

                <div class=\"tbody_div\">
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 52
            echo "                        <div class=\"row_div\" id=\"row_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\">
                            <div class=\"cell_thead_div_id\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</div>
                            <div class=\"cell_thead_div\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</div>
                            <div class=\"cell_thead_div\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "pn", [], "any", false, false, false, 55), "html", null, true);
            echo "</div>
                            <div class=\"cell_thead_div\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "year", [], "any", false, false, false, 56), "html", null, true);
            echo "</div>
                            <div class=\"cell_thead_div\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "lastname", [], "any", false, false, false, 57), "html", null, true);
            echo "</div>
                            <div class=\"cell_div_oper\">
                                <div>
                                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">
                                        <button class=\"btn btn-secondary btn-sm button_edit\">Изменить</button>
                                    </a>
                                </div>
                                <div ";
            // line 64
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("submit-confirm-jq", ["title" => "Удалить книгу?", "text" => twig_get_attribute($this->env, $this->source,             // line 66
$context["book"], "name", [], "any", false, false, false, 66), "formUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 67
$context["book"], "id", [], "any", false, false, false, 67)])]);
            // line 68
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
            // line 78
            echo "                        <div class=\"row_empty\">
                            Записи не найдены
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </div>

            </div>

        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "books/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 82,  198 => 78,  184 => 68,  182 => 67,  181 => 66,  180 => 64,  173 => 60,  167 => 57,  163 => 56,  159 => 55,  155 => 54,  151 => 53,  146 => 52,  141 => 51,  114 => 27,  99 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Книги{% endblock %}

{% block body %}
    <div {{ stimulus_controller('search-preview', { url: path('app_books') }) }} >
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
                Книги
            </div>
            <div class=\"operations\">
                <a href=\"{{ path('app_newbook') }}\">
                    <button class=\"button btn btn-sm\">Добавить</button>
                </a>
            </div>
        </div>

        <div class=\"table_div\">
            <div class=\"thead_div\">
                <div class=\"row_div\">
                    <div class=\"cell_thead_div_id\">Id</div>
                    <div class=\"cell_thead_div\">Наименование</div>
                    <div class=\"cell_thead_div\">Издатель</div>
                    <div class=\"cell_thead_div\">Год издания</div>
                    <div class=\"cell_thead_div\">Автор</div>
                    <div class=\"cell_thead_div_oper\">Операции</div>
                </div>
            </div>

            <div
                    class=\"search-preview\"
                    data-search-preview-target=\"rez\"
            >

                <div class=\"tbody_div\">
                    {% for book in books %}
                        <div class=\"row_div\" id=\"row_{{ book.id }}\">
                            <div class=\"cell_thead_div_id\">{{ book.id }}</div>
                            <div class=\"cell_thead_div\">{{ book.name }}</div>
                            <div class=\"cell_thead_div\">{{ book.pn }}</div>
                            <div class=\"cell_thead_div\">{{ book.year }}</div>
                            <div class=\"cell_thead_div\">{{ book.lastname }}</div>
                            <div class=\"cell_div_oper\">
                                <div>
                                    <a href=\"{{ path('app_book_edit', {'id': book.id}) }}\">
                                        <button class=\"btn btn-secondary btn-sm button_edit\">Изменить</button>
                                    </a>
                                </div>
                                <div {{ stimulus_controller('submit-confirm-jq', {
                                    title: \"Удалить книгу?\",
                                    text: book.name,
                                    formUrl: path('app_book_delete', {'id': book.id})
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
", "books/index.html.twig", "/home/goodvin/sites/testwebapp/templates/books/index.html.twig");
    }
}
