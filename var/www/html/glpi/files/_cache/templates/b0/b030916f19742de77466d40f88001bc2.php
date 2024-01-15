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

/* components/plugin_uninstall_modal.html.twig */
class __TwigTemplate_77dfecdf5cd8333593ac1560e501f913 extends Template
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
        // line 33
        echo "
<!-- Button trigger modal -->
";
        // line 35
        echo ($context["open_btn"] ?? null);
        echo "

<!-- Modal -->
<div class=\"modal fade\" id=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["modal_id"] ?? null), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <a type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></a>
            <div class=\"modal-status bg-danger\"></div>
            <div
                class=\"modal-body text-center py-4\">
                <i class=\"fa-2x ti ti-alert-triangle mb-2 text-danger\"></i>
                <h3>";
        // line 46
        echo twig_escape_filter($this->env, _x("uninstall_plugin", "Are you sure?"), "html", null, true);
        echo "</h3>
                <div class=\"text-muted\">";
        // line 47
        echo twig_escape_filter($this->env, twig_sprintf(__("By uninstalling the \"%s\" plugin you will lose all the data of the plugin."), ($context["plugin_name"] ?? null)), "html", null, true);
        echo "</div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"w-100\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <a class=\"btn w-100\" data-bs-dismiss=\"modal\">
                                ";
        // line 54
        echo twig_escape_filter($this->env, __("Cancel"), "html", null, true);
        echo "
                            </a>
                        </div>
                        <div class=\"col\">
                            ";
        // line 58
        echo ($context["uninstall_btn"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/plugin_uninstall_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 58,  72 => 54,  62 => 47,  58 => 46,  47 => 38,  41 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/plugin_uninstall_modal.html.twig", "/var/www/html/glpi/templates/components/plugin_uninstall_modal.html.twig");
    }
}
