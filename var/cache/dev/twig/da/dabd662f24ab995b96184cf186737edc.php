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

/* _modal.html.twig */
class __TwigTemplate_b59c7b27d3191830ea5fe1d62d7cb4ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_modal.html.twig"));

        // line 1
        echo "<div
        class=\"modal fade\"
        tabindex=\"-1\"
        aria-hidden=\"true\"

        data-modal-form-target=\"modal\"
>
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" style=\"align-content: center\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new RuntimeError('Variable "modalTitle" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"btn-close\"
                        data-bs-dismiss=\"modal\"
                        aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\" data-modal-form-target=\"modalBody\">
                ";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("modalContent", $context)) ? (_twig_default_filter((isset($context["modalContent"]) || array_key_exists("modalContent", $context) ? $context["modalContent"] : (function () { throw new RuntimeError('Variable "modalContent" does not exist.', 17, $this->source); })()), "Loading...")) : ("Loading...")), "html", null, true);
        echo "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\"
                        data-bs-dismiss=\"modal\">Отмена
                </button>
                <button type=\"button\" class=\"btn btn-primary\">
                    Удалить
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
        class=\"modal fade\"
        tabindex=\"-1\"
        aria-hidden=\"true\"

        data-modal-form-target=\"modal\"
>
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" style=\"align-content: center\">{{ modalTitle }}</h5>
                <button type=\"button\" class=\"btn-close\"
                        data-bs-dismiss=\"modal\"
                        aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\" data-modal-form-target=\"modalBody\">
                {{ modalContent|default('Loading...') }}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\"
                        data-bs-dismiss=\"modal\">Отмена
                </button>
                <button type=\"button\" class=\"btn btn-primary\">
                    Удалить
                </button>
            </div>
        </div>
    </div>
</div>
", "_modal.html.twig", "/home/goodvin/sites/testwebapp/templates/_modal.html.twig");
    }
}
