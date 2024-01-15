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

/* @fields/fields.html.twig */
class __TwigTemplate_4c60af2ab2c643ea610acbc5b7b6f302 extends Template
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
        // line 28
        echo "
";
        // line 29
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/fields.html.twig", 29)->unwrap();
        // line 30
        echo "
";
        // line 31
        $context["already_wrapped"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonITILObject") && ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) == "dom"));
        // line 32
        echo "
";
        // line 33
        if ( !($context["already_wrapped"] ?? null)) {
            // line 34
            echo "    <div class=\"card-body d-flex flex-wrap\">
        <div class=\"col-12 col-xxl-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                <div class=\"row flex-row align-items-start flex-grow-1\">
                    <div class=\"row flex-row\">
";
        }
        // line 40
        echo "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 42
            echo "
    ";
            // line 43
            $context["type"] = (($__internal_compile_1 = $context["field"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null);
            // line 44
            echo "    ";
            $context["name"] = (($__internal_compile_2 = $context["field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
            // line 45
            echo "    ";
            $context["label"] = (($__internal_compile_3 = $context["field"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["label"] ?? null) : null);
            // line 46
            echo "    ";
            $context["value"] = (((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 46)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["name"] ?? null)] ?? null) : null)) ? ((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 46)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["name"] ?? null)] ?? null) : null)) : ((($__internal_compile_6 = $context["field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["value"] ?? null) : null)));
            // line 47
            echo "    ";
            $context["readonly"] = (($__internal_compile_7 = $context["field"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["is_readonly"] ?? null) : null);
            // line 48
            echo "    ";
            $context["rand"] = twig_random($this->env);
            // line 49
            echo "
    ";
            // line 50
            $context["field_options"] = twig_array_merge(($context["field_options"] ?? null), ["readonly" => (            // line 51
($context["readonly"] ?? null) ||  !($context["canedit"] ?? null)), "required" => (($__internal_compile_8 =             // line 52
$context["field"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["mandatory"] ?? null) : null), "full_width" =>             // line 53
($context["already_wrapped"] ?? null)]);
            // line 55
            echo "
    ";
            // line 56
            if ((($context["type"] ?? null) == "header")) {
                // line 57
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_largeTitle", [($context["label"] ?? null)], 57, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 59
($context["type"] ?? null) == "text")) {
                // line 60
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 60, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 62
($context["type"] ?? null) == "number")) {
                // line 63
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_numberField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["step" => "any", "min" => ""])], 63, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 65
($context["type"] ?? null) == "url")) {
                // line 66
                echo "            ";
                ob_start(function () { return ''; });
                // line 67
                echo "            ";
                if (twig_length_filter($this->env, ($context["value"] ?? null))) {
                    // line 68
                    echo "                <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                    echo "\">
                    <i class=\"ti ti-external-link\"></i>
                    ";
                    // line 70
                    echo twig_escape_filter($this->env, __("show", "fields"), "html", null, true);
                    echo "
                </a>
            ";
                }
                // line 73
                echo "            ";
                $context["ext_link"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 74
                echo "            ";
                echo twig_call_macro($macros["macros"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["type" => "url", "add_field_html" =>                 // line 76
($context["ext_link"] ?? null)])], 74, $context, $this->getSourceContext());
                // line 77
                echo "

    ";
            } elseif ((            // line 79
($context["type"] ?? null) == "textarea")) {
                // line 80
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_textareaField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 80, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 82
($context["type"] ?? null) == "richtext")) {
                // line 83
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_textareaField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["enable_richtext" => true, "field_class" => "col-12", "label_class" => "", "input_class" => "", "align_label_right" => false, "mb" => "m-2"])], 83, $context, $this->getSourceContext());
                // line 90
                echo "

    ";
            } elseif ((            // line 92
($context["type"] ?? null) == "yesno")) {
                // line 93
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_dropdownYesNo", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 93, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 95
($context["type"] ?? null) == "date")) {
                // line 96
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_dateField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 96, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 98
($context["type"] ?? null) == "datetime")) {
                // line 99
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_datetimeField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 99, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 101
($context["type"] ?? null) == "dropdown")) {
                // line 102
                echo "        ";
                $context["dropdown_options"] = ["entity" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 102)];
                // line 103
                echo "        ";
                if ((($__internal_compile_9 = $context["field"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["multiple"] ?? null) : null)) {
                    // line 104
                    echo "            ";
                    $context["dropdown_options"] = twig_array_merge(($context["dropdown_options"] ?? null), ["multiple" => true]);
                    // line 105
                    echo "        ";
                }
                // line 106
                echo "        ";
                if (twig_in_filter("dropdowns_id", ($context["name"] ?? null))) {
                    // line 107
                    echo "            ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [($context["name"] ?? null)]);
                    // line 108
                    echo "        ";
                } else {
                    // line 109
                    echo "            ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsDropdown::getClassname", [($context["name"] ?? null)]);
                    // line 110
                    echo "        ";
                }
                // line 111
                echo "        ";
                $context["name_fk"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getForeignKeyFieldForItemType", [($context["dropdown_itemtype"] ?? null)]);
                // line 112
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_dropdownField", [($context["dropdown_itemtype"] ?? null), ($context["name_fk"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ($context["dropdown_options"] ?? null))], 112, $context, $this->getSourceContext());
                echo "

    ";
            } elseif (twig_matches("/^dropdown-.+/i",             // line 114
($context["type"] ?? null))) {
                // line 115
                echo "        ";
                if ( !($context["massiveaction"] ?? null)) {
                    // line 116
                    echo "            ";
                    $context["dropdown_options"] = ["condition" => (($__internal_compile_10 = $context["field"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["dropdown_condition"] ?? null) : null), "entity" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 116)];
                    // line 117
                    echo "            ";
                    if (((($__internal_compile_11 = $context["field"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["dropdown_class"] ?? null) : null) == "User")) {
                        // line 118
                        echo "                ";
                        $context["dropdown_options"] = twig_array_merge(($context["dropdown_options"] ?? null), ["entity" =>  -1, "right" => "all"]);
                        // line 119
                        echo "            ";
                    } elseif (((($__internal_compile_12 = $context["field"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["dropdown_class"] ?? null) : null) == "Entity")) {
                        // line 120
                        echo "                ";
                        $context["dropdown_options"] = twig_array_merge(($context["dropdown_options"] ?? null), ["entity_sons" => true]);
                        // line 121
                        echo "            ";
                    }
                    // line 122
                    echo "            ";
                    if ((($__internal_compile_13 = $context["field"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["multiple"] ?? null) : null)) {
                        // line 123
                        echo "                ";
                        $context["dropdown_options"] = twig_array_merge(($context["dropdown_options"] ?? null), ["multiple" => true]);
                        // line 124
                        echo "            ";
                    }
                    // line 125
                    echo "            ";
                    echo twig_call_macro($macros["macros"], "macro_dropdownField", [(($__internal_compile_14 = $context["field"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["dropdown_class"] ?? null) : null), ($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ($context["dropdown_options"] ?? null))], 125, $context, $this->getSourceContext());
                    echo "
        ";
                }
                // line 127
                echo "
    ";
            } elseif ((            // line 128
($context["type"] ?? null) == "glpi_item")) {
                // line 129
                echo "        ";
                if ( !($context["massiveaction"] ?? null)) {
                    // line 130
                    echo "            ";
                    $context["itemtype_prefix"] = "itemtype_";
                    // line 131
                    echo "            ";
                    $context["items_id_prefix"] = "items_id_";
                    // line 132
                    echo "
            ";
                    // line 133
                    if (((($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["type"] ?? null) : null) == "tab")) {
                        // line 134
                        echo "                ";
                        // line 135
                        echo "                <div class=\"w-100\"></div>
            ";
                    }
                    // line 137
                    echo "
            ";
                    // line 138
                    echo twig_call_macro($macros["macros"], "macro_dropdownArrayField", [(($context["itemtype_prefix"] ?? null) . ($context["name"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 138), (($__internal_compile_16 = $context["field"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["allowed_values"] ?? null) : null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["rand" =>                     // line 139
($context["rand"] ?? null), "display_emptychoice" => true])], 138, $context, $this->getSourceContext());
                    // line 141
                    echo "
            <div class='form-field row col-12 ";
                    // line 142
                    echo ((((($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["type"] ?? null) : null) == "tab")) ? ("col-sm-6") : (""));
                    echo " mb-2'>
                ";
                    // line 143
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [((("dropdown_" .                     // line 145
($context["itemtype_prefix"] ?? null)) . ($context["name"] ?? null)) . ($context["rand"] ?? null)), ("results_items_id" .                     // line 146
($context["rand"] ?? null)), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dropdownAllItems.php"), ["idtable" => "__VALUE__", "name" => (                    // line 150
($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), "entity_restrict" => twig_get_attribute($this->env, $this->source,                     // line 151
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 151), "dom_name" => (                    // line 152
($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), "display_emptychoice" => false, "action" => "get_items_from_itemtype", "dom_rand" =>                     // line 155
($context["rand"] ?? null), "width" => "100%"]]);
                    // line 159
                    echo "
                ";
                    // line 161
                    echo "                <label class=\"col-form-label col-xxl-4 text-xxl-end\" for=\"dropdown_items_id_testfield";
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\">
                </label>

                <div class=\"col-xxl-8 field-container\">
                    <span id='results_items_id";
                    // line 165
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "' class='col-lg-14'>
                        ";
                    // line 166
                    if ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 166) != "")) {
                        // line 167
                        echo "                            ";
                        echo twig_call_macro($macros["macros"], "macro_dropdownField", [twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 167), (($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "items_id", [], "any", false, false, false, 167), " ", twig_array_merge(($context["field_options"] ?? null), ["entity" => (((twig_get_attribute($this->env, $this->source,                         // line 168
($context["value"] ?? null), "itemtype", [], "any", false, false, false, 168) == "User")) ? ( -1) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 168))), "rand" =>                         // line 169
($context["rand"] ?? null), "right" => "all", "displaywith" => ["otherserial", "serial"], "display_emptychoice" => false, "no_label" => true])], 167, $context, $this->getSourceContext());
                        // line 174
                        echo "
                        ";
                    }
                    // line 176
                    echo "                    </span>
                </div>
            </div>
        ";
                }
                // line 180
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "
";
        // line 183
        if ( !($context["already_wrapped"] ?? null)) {
            // line 184
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@fields/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 184,  358 => 183,  355 => 182,  348 => 180,  342 => 176,  338 => 174,  336 => 169,  335 => 168,  333 => 167,  331 => 166,  327 => 165,  319 => 161,  316 => 159,  314 => 155,  313 => 152,  312 => 151,  311 => 150,  310 => 146,  309 => 145,  308 => 143,  304 => 142,  301 => 141,  299 => 139,  298 => 138,  295 => 137,  291 => 135,  289 => 134,  287 => 133,  284 => 132,  281 => 131,  278 => 130,  275 => 129,  273 => 128,  270 => 127,  264 => 125,  261 => 124,  258 => 123,  255 => 122,  252 => 121,  249 => 120,  246 => 119,  243 => 118,  240 => 117,  237 => 116,  234 => 115,  232 => 114,  226 => 112,  223 => 111,  220 => 110,  217 => 109,  214 => 108,  211 => 107,  208 => 106,  205 => 105,  202 => 104,  199 => 103,  196 => 102,  194 => 101,  188 => 99,  186 => 98,  180 => 96,  178 => 95,  172 => 93,  170 => 92,  166 => 90,  163 => 83,  161 => 82,  155 => 80,  153 => 79,  149 => 77,  147 => 76,  145 => 74,  142 => 73,  136 => 70,  130 => 68,  127 => 67,  124 => 66,  122 => 65,  116 => 63,  114 => 62,  108 => 60,  106 => 59,  100 => 57,  98 => 56,  95 => 55,  93 => 53,  92 => 52,  91 => 51,  90 => 50,  87 => 49,  84 => 48,  81 => 47,  78 => 46,  75 => 45,  72 => 44,  70 => 43,  67 => 42,  63 => 41,  60 => 40,  52 => 34,  50 => 33,  47 => 32,  45 => 31,  42 => 30,  40 => 29,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@fields/fields.html.twig", "/var/www/html/glpi/marketplace/fields/templates/fields.html.twig");
    }
}
