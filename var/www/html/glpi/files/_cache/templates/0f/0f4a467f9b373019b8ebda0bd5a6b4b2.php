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

/* @formcreator/components/form/condition.html.twig */
class __TwigTemplate_f6d58907db88035b445d8d85cdda599c extends Template
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
        // line 30
        echo "
";
        // line 31
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/condition.html.twig", 31)->unwrap();
        // line 32
        echo "<div class=\"col-12 col-xxl-12 flex-column\" data-itemtype=\"PluginFormcreatorCondition\">
    <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
        <div class=\"row flex-row align-items-start flex-grow-1\">
            <div class=\"row flex-row\">

                ";
        // line 38
        echo "                ";
        $context["elements"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCondition::getEnumShowLogic");
        // line 39
        echo "                ";
        $context["options"] = ["value" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 40
($context["condition"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["show_logic"] ?? null) : null)), "width" => "100%", "display_emptychoice" => false, "field_class" => "col-12 col-sm-1", "no_label" => true];
        // line 46
        echo "                ";
        ob_start(function () { return ''; });
        // line 47
        echo "                    ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", ["_conditions[show_logic][]", ($context["elements"] ?? null), ($context["options"] ?? null)]);
        // line 48
        echo "                ";
        $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                ";
        echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 49))])], 49, $context, $this->getSourceContext());
        echo "

                ";
        // line 52
        echo "                ";
        $context["options"] = ["field_class" => "col-12 col-sm-5", "no_label" => true, "rand" => twig_random($this->env), "width" => "100%"];
        // line 58
        echo "                ";
        $context["excludeQuestions"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCondition::getQuestionsExclusion", [($context["parent"] ?? null)]);
        // line 59
        echo "                ";
        $context["form"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorForm::getByItem", [($context["parent"] ?? null)]);
        // line 60
        echo "                ";
        ob_start(function () { return ''; });
        // line 61
        echo "                    ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorQuestion::dropdownForForm", [($context["form"] ?? null), ($context["excludeQuestions"] ?? null), "_conditions[plugin_formcreator_questions_id][]", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["plugin_formcreator_questions_id"] ?? null) : null), ($context["options"] ?? null)]);
        // line 62
        echo "                ";
        $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                ";
        echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 63))])], 63, $context, $this->getSourceContext());
        echo "

                ";
        // line 66
        echo "                ";
        $context["elements"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCondition::getEnumShowCondition");
        // line 67
        echo "                ";
        $context["options"] = ["value" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 68
($context["condition"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["show_condition"] ?? null) : null)), "width" => "100%", "display_emptychoice" => false, "field_class" => "col-12 col-sm-1", "no_label" => true];
        // line 74
        echo "                ";
        ob_start(function () { return ''; });
        // line 75
        echo "                    ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", ["_conditions[show_condition][]", ($context["elements"] ?? null), ($context["options"] ?? null)]);
        // line 76
        echo "                ";
        $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                ";
        echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 77))])], 77, $context, $this->getSourceContext());
        echo "

                ";
        // line 80
        echo "                ";
        $context["options"] = ["width" => "100%", "display_emptychoice" => false, "field_class" => "col-12 col-sm-3", "no_label" => true];
        // line 86
        echo "                ";
        echo twig_call_macro($macros["fields"], "macro_textField", ["_conditions[show_value][]", $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["show_value"] ?? null) : null)), "", ($context["options"] ?? null)], 86, $context, $this->getSourceContext());
        echo "

                <div class=\"col-12 col-sm-1 mb-3\">
                    <button class=\"btn btn-primary me-2\" type=\"button\" name=\"add\" onclick=\"plugin_formcreator_addEmptyCondition(this, '', '')\">
                        <i class=\"fas fa-plus-circle\" style=\"cursor: pointer;\"></i>
                    </button>
                </div>
                <div class=\"col-12 col-sm-1 mb-3\">
                    <button class=\"btn btn-primary me-2\" type=\"button\" name=\"add\" onclick=\"plugin_formcreator_removeNextCondition(this, '', '')\">
                        <i class=\"fas fa-minus-circle\" style=\"cursor: pointer;\"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@formcreator/components/form/condition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 86,  117 => 80,  111 => 77,  108 => 76,  105 => 75,  102 => 74,  100 => 68,  98 => 67,  95 => 66,  89 => 63,  86 => 62,  83 => 61,  80 => 60,  77 => 59,  74 => 58,  71 => 52,  65 => 49,  62 => 48,  59 => 47,  56 => 46,  54 => 40,  52 => 39,  49 => 38,  42 => 32,  40 => 31,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/components/form/condition.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/components/form/condition.html.twig");
    }
}
