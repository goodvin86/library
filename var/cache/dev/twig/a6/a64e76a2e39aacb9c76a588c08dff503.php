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

/* books/_searchPreview.html.twig */
class __TwigTemplate_703dbd4c4ce8266e581deef6ef3ae1a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/_searchPreview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/_searchPreview.html.twig"));

        // line 1
        echo "<div class=\"tbody_div\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 2, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 3
            echo "        <div class=\"row_div\" id=\"row_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
            <div class=\"cell_thead_div_id\">";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "</div>
            <div class=\"cell_thead_div\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</div>
            <div class=\"cell_thead_div\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "pn", [], "any", false, false, false, 6), "html", null, true);
            echo "</div>
            <div class=\"cell_thead_div\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "year", [], "any", false, false, false, 7), "html", null, true);
            echo "</div>
            <div class=\"cell_thead_div\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "lastname", [], "any", false, false, false, 8), "html", null, true);
            echo "</div>
            <div class=\"cell_div_oper\">
                <div>
                    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">
                        <button class=\"btn btn-secondary btn-sm button_edit\">Изменить</button>
                    </a>
                </div>
                <div ";
            // line 15
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("submit-confirm-jq", ["title" => "Удалить книгу?", "text" => twig_get_attribute($this->env, $this->source,             // line 17
$context["book"], "name", [], "any", false, false, false, 17), "formUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 18
$context["book"], "id", [], "any", false, false, false, 18)])]);
            // line 19
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
            // line 29
            echo "        <div class=\"row_empty\">
            Записи не найдены
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "books/_searchPreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  103 => 29,  89 => 19,  87 => 18,  86 => 17,  85 => 15,  78 => 11,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  51 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tbody_div\">
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
</div>", "books/_searchPreview.html.twig", "/home/goodvin/sites/testwebapp/templates/books/_searchPreview.html.twig");
    }
}
