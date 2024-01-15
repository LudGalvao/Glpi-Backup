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

/* dropdown_form.html.twig */
class __TwigTemplate_425d9beb54f849d8a3bd4c5d0cde481d extends Template
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
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "dropdown_form.html.twig", 34)->unwrap();
        // line 35
        echo "
<div class=\"asset\">
    ";
        // line 37
        echo twig_include($this->env, $context, "components/form/header.html.twig");
        echo "
    ";
        // line 38
        $context["rand"] = twig_random($this->env);
        // line 39
        echo "    ";
        $context["base_fields_params"] = (($context["fields_params"]) ?? ([]));
        // line 40
        echo "    ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 41
        echo "    ";
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 41) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 41)));
        // line 42
        echo "    ";
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 42) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 43
        echo "
    <div class=\"card-body row\">
        ";
        // line 45
        $context["picture_fields"] = ["picture_front", "picture_rear", "pictures"];
        // line 46
        echo "        ";
        $context["has_picture_field"] = false;
        // line 47
        echo "
        ";
        // line 49
        echo "        ";
        echo twig_call_macro($macros["fields"], "macro_autoNameField", [((twig_get_attribute($this->env, $this->source,         // line 50
($context["item"] ?? null), "isField", ["designation"], "method", false, false, false, 50)) ? ("designation") : ("name")),         // line 51
($context["item"] ?? null), __("Name"),         // line 53
($context["withtemplate"] ?? null)], 49, $context, $this->getSourceContext());
        // line 54
        echo "

        ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["comment"], "method", false, false, false, 56)) {
            // line 57
            echo "            ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 59
($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber())], 57, $context, $this->getSourceContext());
            // line 61
            echo "
        ";
        }
        // line 63
        echo "
        ";
        // line 65
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 66
            echo "            ";
            $context["fields_params"] = ($context["base_fields_params"] ?? null);
            // line 67
            echo "            ";
            $context["type"] = ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 67)) ? (_twig_default_filter((($__internal_compile_5 = $context["field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["type"] ?? null) : null), "")) : (""));
            // line 68
            echo "            ";
            $context["show_field"] = true;
            // line 69
            echo "            ";
            if ((((($__internal_compile_6 = $context["field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null) == "entities_id") && ((($context["type"] ?? null) != "parent") || ((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null) == 0)))) {
                // line 70
                echo "                ";
                // line 71
                echo "                ";
                $context["show_field"] = false;
                // line 72
                echo "            ";
            }
            // line 73
            echo "            ";
            if (twig_in_filter((($__internal_compile_8 = $context["field"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 74
                echo "                ";
                $context["show_field"] = false;
                // line 75
                echo "            ";
            }
            // line 76
            echo "            ";
            if (($context["show_field"] ?? null)) {
                // line 77
                echo "
                ";
                // line 78
                if (((($__internal_compile_9 = $context["field"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null) == "header")) {
                    // line 79
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_largeTitle", [(($__internal_compile_10 = $context["field"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["label"] ?? null) : null)], 79, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif (((($__internal_compile_11 =                 // line 80
$context["field"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null) == "content")) {
                    // line 81
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,                     // line 83
($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["content"] ?? null) : null), (($__internal_compile_13 =                     // line 84
$context["field"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["label"] ?? null) : null), ["full_width" => true, "full_width_adapt_column" => false, "is_horizontal" => false, "enable_richtext" => ((twig_get_attribute($this->env, $this->source,                     // line 89
$context["field"], "enable_richtext", [], "array", true, true, false, 89)) ? ((($__internal_compile_14 = $context["field"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["enable_richtext"] ?? null) : null)) : (true))]], 81, $context, $this->getSourceContext());
                    // line 91
                    echo "
                ";
                } elseif ((                // line 92
($context["type"] ?? null) == "UserDropdown")) {
                    // line 93
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", (($__internal_compile_15 =                     // line 95
$context["field"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["name"] ?? null) : null), (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,                     // line 96
($context["item"] ?? null), "fields", [], "any", false, false, false, 96)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[(($__internal_compile_17 = $context["field"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_18 =                     // line 97
$context["field"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["label"] ?? null) : null), ["entity" => (($__internal_compile_19 = twig_get_attribute($this->env, $this->source,                     // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["entities_id"] ?? null) : null), "right" => ((twig_get_attribute($this->env, $this->source,                     // line 100
$context["field"], "right", [], "array", true, true, false, 100)) ? (_twig_default_filter((($__internal_compile_20 = $context["field"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["right"] ?? null) : null), "interface")) : ("interface")), "rand" =>                     // line 101
($context["rand"] ?? null)]], 93, $context, $this->getSourceContext());
                    // line 103
                    echo "
                ";
                } elseif ((                // line 104
($context["type"] ?? null) == "dropdownValue")) {
                    // line 105
                    echo "                    ";
                    $context["dropdown_params"] = ["entity" => (($__internal_compile_21 = twig_get_attribute($this->env, $this->source,                     // line 106
($context["item"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["entities_id"] ?? null) : null)];
                    // line 108
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "condition", [], "array", true, true, false, 108)) {
                        // line 109
                        echo "                        ";
                        $context["dropdown_params"] = twig_array_merge(($context["dropdown_params"] ?? null), ["condition" => (($__internal_compile_22 = $context["field"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["condition"] ?? null) : null)]);
                        // line 110
                        echo "                    ";
                    }
                    // line 111
                    echo "                    ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [(($__internal_compile_23 = $context["field"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["name"] ?? null) : null)]);
                    // line 112
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", [($context["dropdown_itemtype"] ?? null), (($__internal_compile_24 = $context["field"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["name"] ?? null) : null), (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 112)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[(($__internal_compile_26 = $context["field"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_27 = $context["field"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["label"] ?? null) : null), ($context["dropdown_params"] ?? null)], 112, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 113
($context["type"] ?? null) == "text")) {
                    // line 114
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_autoNameField", [(($__internal_compile_28 = $context["field"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["name"] ?? null) : null), ($context["item"] ?? null), (($__internal_compile_29 = $context["field"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["label"] ?? null) : null), ($context["withtemplate"] ?? null), ($context["fields_params"] ?? null)], 114, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 115
($context["type"] ?? null) == "textarea")) {
                    // line 116
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [(($__internal_compile_30 = $context["field"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["name"] ?? null) : null), (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[(($__internal_compile_32 = $context["field"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_33 = $context["field"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["label"] ?? null) : null), ($context["fields_params"] ?? null)], 116, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 117
($context["type"] ?? null) == "integer")) {
                    // line 118
                    echo "                    ";
                    $context["fields_params"] = ["value" => (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,                     // line 119
($context["item"] ?? null), "fields", [], "any", false, false, false, 119)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[(($__internal_compile_35 = $context["field"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["name"] ?? null) : null)] ?? null) : null)];
                    // line 121
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 121)) {
                        // line 122
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["min" => (($__internal_compile_36 = $context["field"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["min"] ?? null) : null)]);
                        // line 123
                        echo "                    ";
                    }
                    // line 124
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 124)) {
                        // line 125
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["step" => (($__internal_compile_37 = $context["field"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["step"] ?? null) : null)]);
                        // line 126
                        echo "                    ";
                    }
                    // line 127
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 127)) {
                        // line 128
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["max" => (($__internal_compile_38 = $context["field"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["max"] ?? null) : null)]);
                        // line 129
                        echo "                    ";
                    }
                    // line 130
                    echo "
                    ";
                    // line 131
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["type" => "number"]);
                    // line 132
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_numberField", [(($__internal_compile_39 = $context["field"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["name"] ?? null) : null), (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[(($__internal_compile_41 = $context["field"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_42 = $context["field"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["label"] ?? null) : null), ($context["fields_params"] ?? null)], 132, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 133
($context["type"] ?? null) == "timestamp")) {
                    // line 134
                    echo "                    ";
                    $context["fields_params"] = ["value" => (($__internal_compile_43 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 134)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[(($__internal_compile_44 = $context["field"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["name"] ?? null) : null)] ?? null) : null)];
                    // line 135
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 135)) {
                        // line 136
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["min" => (($__internal_compile_45 = $context["field"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["min"] ?? null) : null)]);
                        // line 137
                        echo "                    ";
                    }
                    // line 138
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 138)) {
                        // line 139
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["step" => (($__internal_compile_46 = $context["field"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["step"] ?? null) : null)]);
                        // line 140
                        echo "                    ";
                    }
                    // line 141
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 141)) {
                        // line 142
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["max" => (($__internal_compile_47 = $context["field"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["max"] ?? null) : null)]);
                        // line 143
                        echo "                    ";
                    }
                    // line 144
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", [(($__internal_compile_48 = $context["field"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["name"] ?? null) : null), (($__internal_compile_49 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 144)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[(($__internal_compile_50 = $context["field"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_51 = $context["field"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["label"] ?? null) : null), ($context["fields_params"] ?? null)], 144, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 145
($context["type"] ?? null) == "parent")) {
                    // line 146
                    echo "                    ";
                    $context["restrict"] = ((((($__internal_compile_52 = $context["field"]) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["name"] ?? null) : null) == "entities_id")) ? ( -1) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 146)));
                    // line 147
                    echo "                    ";
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["entity" => ($context["restrict"] ?? null)]);
                    // line 148
                    echo "                    ";
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["used" => ((((($__internal_compile_53 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 148)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["id"] ?? null) : null) > 0)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getSonsOf", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTable", [], "method", false, false, false, 148), (($__internal_compile_54 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 148)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["id"] ?? null) : null)])) : ([]))]);
                    // line 149
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", [($context["item"] ?? null), (($__internal_compile_55 = $context["field"]) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["name"] ?? null) : null), (($__internal_compile_56 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[(($__internal_compile_57 = $context["field"]) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_58 = $context["field"]) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["label"] ?? null) : null), ($context["fields_params"] ?? null)], 149, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 150
($context["type"] ?? null) == "icon")) {
                    // line 151
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownIcons", [(($__internal_compile_59 = $context["field"]) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["name"] ?? null) : null), (($__internal_compile_60 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 151)) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60[(($__internal_compile_61 = $context["field"]) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_62 = $context["field"]) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["label"] ?? null) : null), ($context["fields_params"] ?? null)], 151, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 152
($context["type"] ?? null) == "bool")) {
                    // line 153
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", [(($__internal_compile_63 = $context["field"]) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["name"] ?? null) : null), (($__internal_compile_64 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64[(($__internal_compile_65 = $context["field"]) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_66 = $context["field"]) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["label"] ?? null) : null), ($context["fields_params"] ?? null)], 153, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 154
($context["type"] ?? null) == "color")) {
                    // line 155
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_colorField", [(($__internal_compile_67 = $context["field"]) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67["name"] ?? null) : null), (($__internal_compile_68 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 155)) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68[(($__internal_compile_69 = $context["field"]) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_70 = $context["field"]) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["label"] ?? null) : null), ($context["fields_params"] ?? null)], 155, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 156
($context["type"] ?? null) == "date")) {
                    // line 157
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dateField", [(($__internal_compile_71 = $context["field"]) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71["name"] ?? null) : null), (($__internal_compile_72 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72[(($__internal_compile_73 = $context["field"]) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_74 = $context["field"]) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74["label"] ?? null) : null), ($context["fields_params"] ?? null)], 157, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 158
($context["type"] ?? null) == "datetime")) {
                    // line 159
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_datetimeField", [(($__internal_compile_75 = $context["field"]) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75["name"] ?? null) : null), (($__internal_compile_76 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 159)) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76[(($__internal_compile_77 = $context["field"]) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_78 = $context["field"]) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78["label"] ?? null) : null), ($context["fields_params"] ?? null)], 159, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 160
($context["type"] ?? null) == "picture")) {
                    // line 161
                    echo "                    ";
                    if ( !twig_test_empty((($__internal_compile_79 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 161)) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79[(($__internal_compile_80 = $context["field"]) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["name"] ?? null) : null)] ?? null) : null))) {
                        // line 162
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_imageField", [(($__internal_compile_81 = $context["field"]) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["name"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl((($__internal_compile_82 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 162)) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82[(($__internal_compile_83 = $context["field"]) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83["name"] ?? null) : null)] ?? null) : null)), (($__internal_compile_84 = $context["field"]) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["label"] ?? null) : null), twig_array_merge(($context["fields_params"] ?? null), ["clearable" => ( !twig_get_attribute($this->env, $this->source,                         // line 163
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 163) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 163))])], 162, $context, $this->getSourceContext());
                        // line 164
                        echo "
                    ";
                    } else {
                        // line 166
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_fileField", [(($__internal_compile_85 = $context["field"]) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85["name"] ?? null) : null), null, (($__internal_compile_86 = $context["field"]) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["label"] ?? null) : null), ["onlyimages" => true]], 166, $context, $this->getSourceContext());
                        // line 168
                        echo "
                    ";
                    }
                    // line 170
                    echo "                ";
                } elseif ((($context["type"] ?? null) == "picture_gallery")) {
                    // line 171
                    echo "                    ";
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [(($__internal_compile_87 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87[(($__internal_compile_88 = $context["field"]) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88["name"] ?? null) : null)] ?? null) : null)]);
                    // line 172
                    echo "                    ";
                    $context["picture_urls"] = [];
                    // line 173
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["pictures"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 174
                        echo "                        ";
                        $context["picture_urls"] = twig_array_merge(($context["picture_urls"] ?? null), [$this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 175
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_imageGalleryField", [(($__internal_compile_89 = $context["field"]) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["name"] ?? null) : null), ($context["picture_urls"] ?? null), (($__internal_compile_90 = $context["field"]) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90["label"] ?? null) : null), twig_array_merge(($context["fields_params"] ?? null), ["clearable" => ( !twig_get_attribute($this->env, $this->source,                     // line 177
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 177) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 177))])], 176, $context, $this->getSourceContext());
                    // line 178
                    echo "
                ";
                } elseif ((                // line 179
($context["type"] ?? null) == "password")) {
                    // line 180
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_passwordField", [(($__internal_compile_91 = $context["field"]) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91["name"] ?? null) : null), (($__internal_compile_92 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92[(($__internal_compile_93 = $context["field"]) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_94 = $context["field"]) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["label"] ?? null) : null), ($context["fields_params"] ?? null)], 180, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 181
($context["type"] ?? null) == "tinymce")) {
                    // line 182
                    echo "                    ";
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["enable_richtext" => true]);
                    // line 183
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [(($__internal_compile_95 = $context["field"]) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95["name"] ?? null) : null), (($__internal_compile_96 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 183)) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96[(($__internal_compile_97 = $context["field"]) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_98 = $context["field"]) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98["label"] ?? null) : null), ($context["fields_params"] ?? null)], 183, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 184
($context["type"] ?? null) == "duration")) {
                    // line 185
                    echo "                    ";
                    $context["toadd"] = [];
                    // line 186
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(9, 100));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 187
                        echo "                        ";
                        $context["toadd"] = twig_array_merge(($context["toadd"] ?? null), [($context["i"] * twig_constant("HOUR_TIMESTAMP"))]);
                        // line 188
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 189
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", [(($__internal_compile_99 = $context["field"]) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99["name"] ?? null) : null), (($__internal_compile_100 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 189)) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100[(($__internal_compile_101 = $context["field"]) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_102 = $context["field"]) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["label"] ?? null) : null), ($context["fields_params"] ?? null)], 189, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 190
($context["type"] ?? null) == "itemtypename")) {
                    // line 191
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "itemtype_list", [], "array", true, true, false, 191)) {
                        // line 192
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config((($__internal_compile_103 = $context["field"]) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103["itemtype_list"] ?? null) : null))]);
                        // line 193
                        echo "                    ";
                    }
                    // line 194
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownItemTypes", [(($__internal_compile_104 = $context["field"]) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104["name"] ?? null) : null), (($__internal_compile_105 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105[(($__internal_compile_106 = $context["field"]) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_107 = $context["field"]) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107["label"] ?? null) : null), ($context["fields_params"] ?? null)], 194, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 196
                    echo "                    ";
                    ob_start(function () { return ''; });
                    // line 197
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displaySpecificTypeField", [(($__internal_compile_108 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 197)) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108["id"] ?? null) : null), $context["field"], ($context["fields_params"] ?? null)], "method", false, false, false, 197), "html", null, true);
                    echo "
                    ";
                    $context["field_value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 199
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_field", [(($__internal_compile_109 = $context["field"]) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["name"] ?? null) : null), ($context["field_value"] ?? null), (($__internal_compile_110 = $context["field"]) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110["label"] ?? null) : null)], 199, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 201
                echo "            ";
            } elseif (twig_in_filter((($__internal_compile_111 = $context["field"]) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 202
                echo "                ";
                $context["has_picture_field"] = true;
                // line 203
                echo "            ";
            }
            // line 204
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "
        ";
        // line 206
        if (($context["has_picture_field"] ?? null)) {
            // line 207
            echo "            ";
            echo twig_call_macro($macros["fields"], "macro_largeTitle", [_n("Picture", "Pictures", Session::getPluralNumber()), "fas fa-image"], 207, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 209
        echo "        ";
        // line 210
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 211
            echo "            ";
            $context["type"] = ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 211)) ? (_twig_default_filter((($__internal_compile_112 = $context["field"]) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["type"] ?? null) : null), "")) : (""));
            // line 212
            echo "            ";
            if (twig_in_filter((($__internal_compile_113 = $context["field"]) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 213
                echo "                ";
                if ((($context["type"] ?? null) == "picture")) {
                    // line 214
                    echo "                    ";
                    if (((($__internal_compile_114 = $context["field"]) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114["name"] ?? null) : null) == "picture_front")) {
                        // line 215
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("Rack pictures"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Rack")], 215, $context, $this->getSourceContext());
                        echo "
                    ";
                    }
                    // line 217
                    echo "                    ";
                    if ( !twig_test_empty((($__internal_compile_115 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 217)) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115[(($__internal_compile_116 = $context["field"]) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116["name"] ?? null) : null)] ?? null) : null))) {
                        // line 218
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_imageField", [(($__internal_compile_117 = $context["field"]) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["name"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl((($__internal_compile_118 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 218)) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118[(($__internal_compile_119 = $context["field"]) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119["name"] ?? null) : null)] ?? null) : null)), (($__internal_compile_120 = $context["field"]) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["label"] ?? null) : null), twig_array_merge(($context["base_fields_params"] ?? null), ["clearable" => twig_get_attribute($this->env, $this->source,                         // line 219
($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 219)])], 218, $context, $this->getSourceContext());
                        // line 220
                        echo "
                    ";
                    } else {
                        // line 222
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_fileField", [(($__internal_compile_121 = $context["field"]) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121["name"] ?? null) : null), null, (($__internal_compile_122 = $context["field"]) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["label"] ?? null) : null), ["onlyimages" => true]], 222, $context, $this->getSourceContext());
                        // line 224
                        echo "
                    ";
                    }
                    // line 226
                    echo "                ";
                } elseif ((($context["type"] ?? null) == "picture_gallery")) {
                    // line 227
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("Other pictures"), "fas fa-images"], 227, $context, $this->getSourceContext());
                    echo "
                    ";
                    // line 228
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [(($__internal_compile_123 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 228)) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123[(($__internal_compile_124 = $context["field"]) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["name"] ?? null) : null)] ?? null) : null)]);
                    // line 229
                    echo "                    ";
                    $context["picture_urls"] = [];
                    // line 230
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["pictures"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 231
                        echo "                        ";
                        $context["picture_urls"] = twig_array_merge(($context["picture_urls"] ?? null), [$this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 232
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 233
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_imageGalleryField", [(($__internal_compile_125 = $context["field"]) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125["name"] ?? null) : null), ($context["picture_urls"] ?? null), "", twig_array_merge(($context["base_fields_params"] ?? null), ["clearable" => twig_get_attribute($this->env, $this->source,                     // line 234
($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 234), "no_label" => true])], 233, $context, $this->getSourceContext());
                    // line 236
                    echo "
                ";
                }
                // line 238
                echo "            ";
            }
            // line 239
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "    </div>
    ";
        // line 241
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "dropdown_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 241,  575 => 240,  569 => 239,  566 => 238,  562 => 236,  560 => 234,  558 => 233,  552 => 232,  549 => 231,  544 => 230,  541 => 229,  539 => 228,  534 => 227,  531 => 226,  527 => 224,  524 => 222,  520 => 220,  518 => 219,  516 => 218,  513 => 217,  507 => 215,  504 => 214,  501 => 213,  498 => 212,  495 => 211,  490 => 210,  488 => 209,  482 => 207,  480 => 206,  477 => 205,  471 => 204,  468 => 203,  465 => 202,  462 => 201,  456 => 199,  450 => 197,  447 => 196,  441 => 194,  438 => 193,  435 => 192,  432 => 191,  430 => 190,  425 => 189,  419 => 188,  416 => 187,  411 => 186,  408 => 185,  406 => 184,  401 => 183,  398 => 182,  396 => 181,  391 => 180,  389 => 179,  386 => 178,  384 => 177,  382 => 176,  376 => 175,  373 => 174,  368 => 173,  365 => 172,  362 => 171,  359 => 170,  355 => 168,  352 => 166,  348 => 164,  346 => 163,  344 => 162,  341 => 161,  339 => 160,  334 => 159,  332 => 158,  327 => 157,  325 => 156,  320 => 155,  318 => 154,  313 => 153,  311 => 152,  306 => 151,  304 => 150,  299 => 149,  296 => 148,  293 => 147,  290 => 146,  288 => 145,  283 => 144,  280 => 143,  277 => 142,  274 => 141,  271 => 140,  268 => 139,  265 => 138,  262 => 137,  259 => 136,  256 => 135,  253 => 134,  251 => 133,  246 => 132,  244 => 131,  241 => 130,  238 => 129,  235 => 128,  232 => 127,  229 => 126,  226 => 125,  223 => 124,  220 => 123,  217 => 122,  214 => 121,  212 => 119,  210 => 118,  208 => 117,  203 => 116,  201 => 115,  196 => 114,  194 => 113,  189 => 112,  186 => 111,  183 => 110,  180 => 109,  177 => 108,  175 => 106,  173 => 105,  171 => 104,  168 => 103,  166 => 101,  165 => 100,  164 => 99,  163 => 97,  162 => 96,  161 => 95,  159 => 93,  157 => 92,  154 => 91,  152 => 89,  151 => 84,  150 => 83,  148 => 81,  146 => 80,  141 => 79,  139 => 78,  136 => 77,  133 => 76,  130 => 75,  127 => 74,  124 => 73,  121 => 72,  118 => 71,  116 => 70,  113 => 69,  110 => 68,  107 => 67,  104 => 66,  99 => 65,  96 => 63,  92 => 61,  90 => 59,  88 => 57,  86 => 56,  82 => 54,  80 => 53,  79 => 51,  78 => 50,  76 => 49,  73 => 47,  70 => 46,  68 => 45,  64 => 43,  61 => 42,  58 => 41,  55 => 40,  52 => 39,  50 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "dropdown_form.html.twig", "/var/www/html/glpi/templates/dropdown_form.html.twig");
    }
}
