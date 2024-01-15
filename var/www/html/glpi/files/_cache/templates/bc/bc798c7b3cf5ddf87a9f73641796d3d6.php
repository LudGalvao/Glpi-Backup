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

/* @formcreator/field/dropdownfield.html.twig */
class __TwigTemplate_24323468e492d6ba053309b02648c0d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'questionFields' => [$this, 'block_questionFields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return "@formcreator/pages/question.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/field/dropdownfield.html.twig", 31)->unwrap();
        // line 32
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/field/dropdownfield.html.twig", 32)->unwrap();
        // line 30
        $this->parent = $this->loadTemplate("@formcreator/pages/question.html.twig", "@formcreator/field/dropdownfield.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_questionFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
        echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownDropdownSubType", ["itemtype", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 37
($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), _n("Dropdown", "Dropdowns", 1), ["on_change" => "plugin_formcreator.changeQuestionType(this)", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 35, $context, $this->getSourceContext());
        // line 44
        echo "

    ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["required", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["required"] ?? null) : null), __("Required", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 46, $context, $this->getSourceContext());
        // line 53
        echo "

    ";
        // line 55
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["show_empty", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 57
($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["show_empty"] ?? null) : null), __("Show empty", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 55, $context, $this->getSourceContext());
        // line 62
        echo "

    ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 64), "itemtype", [], "array", true, true, false, 64) && ((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["itemtype"] ?? null) : null) != "0"))) {
            // line 65
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [(($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 66
($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["itemtype"] ?? null) : null), "default_values", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 68
($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["default_values"] ?? null) : null), __("Default values"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 65, $context, $this->getSourceContext());
            // line 73
            echo "
    ";
        } else {
            // line 75
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 75, $context, $this->getSourceContext());
            // line 78
            echo "
    ";
        }
        // line 80
        echo "
     ";
        // line 81
        echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 81, $context, $this->getSourceContext());
        // line 84
        echo "

    ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 86), "itemtype", [], "array", true, true, false, 86) && ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["itemtype"] ?? null) : null) == "ITILCategory"))) {
            // line 87
            echo "        ";
            echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownItilCategoryFilter", ["show_ticket_categories", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 89
($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["_show_ticket_categories"] ?? null) : null), __("Show ticket categories", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 87, $context, $this->getSourceContext());
            // line 94
            echo "

     ";
            // line 96
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 96, $context, $this->getSourceContext());
            // line 99
            echo "
    ";
        }
        // line 101
        echo "
    ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 102), "itemtype", [], "array", true, true, false, 102) && (((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["itemtype"] ?? null) : null) == "SLA") || ((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["itemtype"] ?? null) : null) == "OLA")))) {
            // line 103
            echo "        ";
            // line 104
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["_show_service_level_types", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 106
($context["item"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["_show_service_level_types"] ?? null) : null), [__("Time to resolve", "formcreator"), __("Time to own", "formcreator")], __("Type", "formcreator")], 104, $context, $this->getSourceContext());
            // line 112
            echo "

     ";
            // line 114
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 114, $context, $this->getSourceContext());
            // line 117
            echo "
    ";
        }
        // line 119
        echo "

    ";
        // line 122
        echo "    ";
        if (((($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 122)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_is_tree"] ?? null) : null) == "1")) {
            // line 123
            echo "
        ";
            // line 124
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [(($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 125
($context["item"] ?? null), "fields", [], "any", false, false, false, 125)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["itemtype"] ?? null) : null), "show_tree_root", (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 127
($context["item"] ?? null), "fields", [], "any", false, false, false, 127)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_tree_root"] ?? null) : null), __("Subtree root", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 124, $context, $this->getSourceContext());
            // line 132
            echo "

        ";
            // line 134
            echo twig_call_macro($macros["fields"], "macro_numberField", ["show_tree_depth", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 136
($context["item"] ?? null), "fields", [], "any", false, false, false, 136)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["_tree_max_depth"] ?? null) : null), __("Limit subtree depth", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 134, $context, $this->getSourceContext());
            // line 141
            echo "

        ";
            // line 143
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["selectable_tree_root", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,             // line 145
($context["item"] ?? null), "fields", [], "any", false, false, false, 145)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_tree_root_selectable"] ?? null) : null), __("Selectable root", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 143, $context, $this->getSourceContext());
            // line 150
            echo "

        ";
            // line 152
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 152, $context, $this->getSourceContext());
            // line 155
            echo "
    ";
        }
        // line 157
        echo "
    ";
        // line 158
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 158), "itemtype", [], "array", true, true, false, 158) && ((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 158)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["_is_entity_restrict"] ?? null) : null) == "1"))) {
            // line 159
            echo "        ";
            echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownEntityRestrict", ["entity_restrict", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 161
($context["item"] ?? null), "fields", [], "any", false, false, false, 161)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["_entity_restrict"] ?? null) : null), __("Entity restriction", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 159, $context, $this->getSourceContext());
            // line 167
            echo "

        ";
            // line 169
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 169, $context, $this->getSourceContext());
            // line 172
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@formcreator/field/dropdownfield.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 172,  192 => 169,  188 => 167,  186 => 161,  184 => 159,  182 => 158,  179 => 157,  175 => 155,  173 => 152,  169 => 150,  167 => 145,  166 => 143,  162 => 141,  160 => 136,  159 => 134,  155 => 132,  153 => 127,  152 => 125,  151 => 124,  148 => 123,  145 => 122,  141 => 119,  137 => 117,  135 => 114,  131 => 112,  129 => 106,  127 => 104,  125 => 103,  123 => 102,  120 => 101,  116 => 99,  114 => 96,  110 => 94,  108 => 89,  106 => 87,  104 => 86,  100 => 84,  98 => 81,  95 => 80,  91 => 78,  88 => 75,  84 => 73,  82 => 68,  81 => 66,  79 => 65,  77 => 64,  73 => 62,  71 => 57,  70 => 55,  66 => 53,  64 => 48,  63 => 46,  59 => 44,  57 => 37,  55 => 35,  51 => 34,  46 => 30,  44 => 32,  42 => 31,  35 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/field/dropdownfield.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/field/dropdownfield.html.twig");
    }
}
