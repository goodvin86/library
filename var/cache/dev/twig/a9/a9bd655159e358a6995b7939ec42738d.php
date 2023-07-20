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

/* publisher/_searchPreview.html.twig */
class __TwigTemplate_9e3ce9758925aaab2080a3ed57d24b2a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publisher/_searchPreview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publisher/_searchPreview.html.twig"));

        // line 1
        echo "<div class=\"tbody_div\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publishers"]) || array_key_exists("publishers", $context) ? $context["publishers"] : (function () { throw new RuntimeError('Variable "publishers" does not exist.', 2, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["publisher"]) {
            // line 3
            echo "        <div class=\"row_div\" id=\"row_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
            <div class=\"cell_thead_div_id\">";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "</div>
            <div class=\"cell_thead_div\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</div>
            <div class=\"cell_thead_div\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publisher"], "address", [], "any", false, false, false, 6), "html", null, true);
            echo "</div>
            <div class=\"cell_div_oper\">
                <div>
                    <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publisher_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["publisher"], "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\">
                        <button class=\"btn btn-secondary btn-sm button_edit\">Изменить</button>
                    </a>
                </div>
                <div ";
            // line 13
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("submit-confirm-jq", ["title" => "Удалить издателя?", "text" => twig_get_attribute($this->env, $this->source,             // line 15
$context["publisher"], "name", [], "any", false, false, false, 15), "formUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publisher_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 16
$context["publisher"], "id", [], "any", false, false, false, 16)])]);
            // line 17
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
            // line 27
            echo "        <div class=\"row_empty\">
            Записи не найдены
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publisher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "publisher/_searchPreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  95 => 27,  81 => 17,  79 => 16,  78 => 15,  77 => 13,  70 => 9,  64 => 6,  60 => 5,  56 => 4,  51 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tbody_div\">
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
</div>", "publisher/_searchPreview.html.twig", "/home/goodvin/sites/testwebapp/templates/publisher/_searchPreview.html.twig");
    }
}
