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

/* author/_searchPreview.html.twig */
class __TwigTemplate_a24c92b1fd80bcbce1e49729743ffb66 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/_searchPreview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/_searchPreview.html.twig"));

        // line 1
        echo "<div class=\"tbody_div\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 2, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 3
            echo "        <div class=\"row_div\" id=\"row_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
            <div class=\"cell_thead_div_id\">";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "</div>
            <div class=\"cell_thead_div\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "lastname", [], "any", false, false, false, 5), "html", null, true);
            echo "</div>
            <div class=\"cell_thead_div\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "firstname", [], "any", false, false, false, 6), "html", null, true);
            echo "</div>

            <div class=\"cell_div_oper\">
                <div>
                    <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_author_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\">
                        <button class=\"btn btn-sm btn-secondary button_edit\">Изменить</button>
                    </a>
                </div>
                <div ";
            // line 14
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("submit-confirm-jq", ["title" => "Удалить автора?", "text" => ((twig_get_attribute($this->env, $this->source,             // line 16
$context["author"], "lastname", [], "any", false, false, false, 16) . " ") . twig_get_attribute($this->env, $this->source, $context["author"], "firstname", [], "any", false, false, false, 16)), "formUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_author_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 17
$context["author"], "id", [], "any", false, false, false, 17)])]);
            // line 18
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
            // line 29
            echo "        <div class=\"row_empty\">
            Записи не найдены
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "author/_searchPreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 33,  97 => 29,  82 => 18,  80 => 17,  79 => 16,  78 => 14,  71 => 10,  64 => 6,  60 => 5,  56 => 4,  51 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tbody_div\">
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
</div>", "author/_searchPreview.html.twig", "/var/www/templates/author/_searchPreview.html.twig");
    }
}
