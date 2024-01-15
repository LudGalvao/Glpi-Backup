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

/* @formcreator/components/form/fields_macros.html.twig */
class __TwigTemplate_759b3c16b7d7ff34ac0c4bd136421485 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 30)->unwrap();
        // line 31
        echo "
";
        // line 63
        echo "
";
        // line 86
        echo "
";
        // line 109
        echo "
";
        // line 132
        echo "
";
        // line 155
        echo "
";
        // line 178
        echo "
";
        // line 200
        echo "
";
        // line 222
        echo "
";
        // line 242
        echo "
";
        // line 262
        echo "
";
        // line 284
        echo "
";
        // line 305
        echo "
";
    }

    // line 32
    public function macro_dropdownQuestionType($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "   ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 33)->unwrap();
            // line 34
            echo "
   ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 35)) {
                // line 36
                echo "      ";
                // line 37
                echo "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 38
                echo "      <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["defined_input_name"] ?? null), "html", null, true);
                echo "\" value=\"1\"></input>

      ";
                // line 41
                echo "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 42
                echo "   ";
            }
            // line 43
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 44
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 44), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 44)) {
                // line 45
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 46
                echo "   ";
            }
            // line 47
            echo "
   ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 48)) {
                // line 49
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 50
                echo "   ";
            }
            // line 51
            echo "
   ";
            // line 52
            ob_start(function () { return ''; });
            // line 53
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorQuestion::dropdownQuestionType", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 54
($context["value"] ?? null), "rand" =>             // line 55
($context["rand"] ?? null), "width" => "100%"],             // line 57
($context["options"] ?? null))]);
            // line 58
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "   ";
            if ( !twig_test_empty(twig_trim_filter(($context["field"] ?? null)))) {
                // line 60
                echo "      ";
                echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 60))])], 60, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 64
    public function macro_dropdownDropdownSubType($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 65
            echo "   ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 65)->unwrap();
            // line 66
            echo "
   ";
            // line 67
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 68
            echo "
   ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 69)) {
                // line 70
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 71
                echo "   ";
            }
            // line 72
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 72), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 72)) {
                // line 73
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 74
                echo "   ";
            }
            // line 75
            echo "
   ";
            // line 76
            ob_start(function () { return ''; });
            // line 77
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorQuestion::dropdownDropdownSubType", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 78
($context["value"] ?? null), "rand" =>             // line 79
($context["rand"] ?? null), "width" => "100%"],             // line 81
($context["options"] ?? null))]);
            // line 82
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 83
            echo "
   ";
            // line 84
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 84))])], 84, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 87
    public function macro_dropdownObjectSubType($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 88
            echo "   ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 88)->unwrap();
            // line 89
            echo "
   ";
            // line 90
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 91
            echo "
   ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 92)) {
                // line 93
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 94
                echo "   ";
            }
            // line 95
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 95), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 95)) {
                // line 96
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 97
                echo "   ";
            }
            // line 98
            echo "
   ";
            // line 99
            ob_start(function () { return ''; });
            // line 100
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorQuestion::dropdownObjectSubType", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 101
($context["value"] ?? null), "rand" =>             // line 102
($context["rand"] ?? null), "width" => "100%"],             // line 104
($context["options"] ?? null))]);
            // line 105
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            echo "
   ";
            // line 107
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 107))])], 107, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 110
    public function macro_dropdownEntityRestrict($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 111
            echo "   ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 111)->unwrap();
            // line 112
            echo "
   ";
            // line 113
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 114
            echo "
   ";
            // line 115
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 115)) {
                // line 116
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 117
                echo "   ";
            }
            // line 118
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 118), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 118)) {
                // line 119
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 120
                echo "   ";
            }
            // line 121
            echo "
   ";
            // line 122
            ob_start(function () { return ''; });
            // line 123
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\GlpiPlugin\\Formcreator\\Filter\\EntityFilter::dropdown", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 124
($context["value"] ?? null), "rand" =>             // line 125
($context["rand"] ?? null), "width" => "100%"],             // line 127
($context["options"] ?? null))]);
            // line 128
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 129
            echo "
   ";
            // line 130
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 130))])], 130, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 133
    public function macro_dropdownItilCategoryFilter($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 134
            echo "   ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 134)->unwrap();
            // line 135
            echo "
   ";
            // line 136
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 137
            echo "
   ";
            // line 138
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 138)) {
                // line 139
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 140
                echo "   ";
            }
            // line 141
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 141), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 141)) {
                // line 142
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 143
                echo "   ";
            }
            // line 144
            echo "
   ";
            // line 145
            ob_start(function () { return ''; });
            // line 146
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\GlpiPlugin\\Formcreator\\Filter\\ItilCategoryFilter::dropdown", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 147
($context["value"] ?? null), "rand" =>             // line 148
($context["rand"] ?? null), "width" => "100%"],             // line 150
($context["options"] ?? null))]);
            // line 151
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 152
            echo "
   ";
            // line 153
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 153))])], 153, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 156
    public function macro_rangeField($__name__ = null, $__min__ = null, $__max__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "min" => $__min__,
            "max" => $__max__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 157
            echo "    ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 157)->unwrap();
            // line 158
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 158), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 158)) {
                // line 159
                echo "        ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 160
                echo "    ";
            }
            // line 161
            echo "
    ";
            // line 162
            ob_start(function () { return ''; });
            // line 163
            echo "        <input type=\"number\" id=\"range_min\"
                class=\"form-control\"
                name=\"";
            // line 165
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "[min]\" value=\"";
            echo twig_escape_filter($this->env, ($context["min"] ?? null), "html", null, true);
            echo "\"
            ";
            // line 166
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 166)) ? ("readonly") : (""));
            echo "
            ";
            // line 167
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 167)) ? ("disabled") : (""));
            echo "
            ";
            // line 168
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 168)) ? ("required") : (""));
            echo " />
        <input type=\"number\" id=\"range_max\"
                class=\"form-control\"
                name=\"";
            // line 171
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "[max]\" value=\"";
            echo twig_escape_filter($this->env, ($context["max"] ?? null), "html", null, true);
            echo "\"
            ";
            // line 172
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 172)) ? ("readonly") : (""));
            echo "
            ";
            // line 173
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 173)) ? ("disabled") : (""));
            echo "
            ";
            // line 174
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 174)) ? ("required") : (""));
            echo " />
        ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 176
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 176, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 179
    public function macro_dropdownLanguageField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 180
            echo "   ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 180)->unwrap();
            // line 181
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 182
            echo "
   ";
            // line 183
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 183)) {
                // line 184
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 185
                echo "   ";
            }
            // line 186
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 186), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 186)) {
                // line 187
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 188
                echo "   ";
            }
            // line 189
            echo "
   ";
            // line 190
            ob_start(function () { return ''; });
            // line 191
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showLanguages", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 192
($context["value"] ?? null), "rand" =>             // line 193
($context["rand"] ?? null), "width" => "100%"],             // line 195
($context["options"] ?? null))]);
            // line 196
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 197
            echo "
   ";
            // line 198
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 198))])], 198, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 201
    public function macro_dropdownFontAwesomeIconField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 202
            echo "   ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 202)->unwrap();
            // line 203
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 204
            echo "
   ";
            // line 205
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 205)) {
                // line 206
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 207
                echo "   ";
            }
            // line 208
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 208), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 208)) {
                // line 209
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 210
                echo "   ";
            }
            // line 211
            echo "
   ";
            // line 212
            ob_start(function () { return ''; });
            // line 213
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCommon::showFontAwesomeDropdown", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 214
($context["value"] ?? null), "rand" =>             // line 215
($context["rand"] ?? null), "width" => "100%"],             // line 217
($context["options"] ?? null))]);
            // line 218
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 219
            echo "
   ";
            // line 220
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 220))])], 220, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 223
    public function macro_dropdownValidatorUser($__name__ = null, $__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 224
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 225
            echo "
   ";
            // line 226
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 226)) {
                // line 227
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 228
                echo "   ";
            }
            // line 229
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 229), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 229)) {
                // line 230
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 231
                echo "   ";
            }
            // line 232
            echo "
      ";
            // line 233
            ob_start(function () { return ''; });
            // line 234
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorForm_Validator::dropdownValidatorUser", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 235
($context["value"] ?? null), "rand" =>             // line 236
($context["rand"] ?? null), "width" => "100%"],             // line 238
($context["options"] ?? null))]);
            // line 239
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 240
            echo "   ";
            echo twig_escape_filter($this->env, ($context["field"] ?? null), "html", null, true);
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 243
    public function macro_dropdownValidatorGroup($__name__ = null, $__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 244
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 245
            echo "
   ";
            // line 246
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 246)) {
                // line 247
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 248
                echo "   ";
            }
            // line 249
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 249), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 249)) {
                // line 250
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 251
                echo "   ";
            }
            // line 252
            echo "
   ";
            // line 253
            ob_start(function () { return ''; });
            // line 254
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorForm_Validator::dropdownValidatorGroup", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 255
($context["value"] ?? null), "rand" =>             // line 256
($context["rand"] ?? null), "width" => "100%"],             // line 258
($context["options"] ?? null))]);
            // line 259
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 260
            echo "   ";
            echo twig_escape_filter($this->env, ($context["field"] ?? null), "html", null, true);
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 263
    public function macro_dropdownRequestType($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 264
            echo "   ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 264)->unwrap();
            // line 265
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 266
            echo "
   ";
            // line 267
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 267)) {
                // line 268
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 269
                echo "   ";
            }
            // line 270
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 270), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 270)) {
                // line 271
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 272
                echo "   ";
            }
            // line 273
            echo "
   ";
            // line 274
            ob_start(function () { return ''; });
            // line 275
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket::dropdownType", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 276
($context["value"] ?? null), "rand" =>             // line 277
($context["rand"] ?? null), "width" => "100%", "toadd" => [twig_constant("Dropdown::EMPTY_VALUE")]],             // line 280
($context["options"] ?? null))]);
            // line 281
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 282
            echo "   ";
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 282, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 285
    public function macro_timeField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 286
            echo "   ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 286)->unwrap();
            // line 287
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 288
            echo "
   ";
            // line 289
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 289)) {
                // line 290
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 291
                echo "   ";
            }
            // line 292
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 292), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 292)) {
                // line 293
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 294
                echo "   ";
            }
            // line 295
            echo "
   ";
            // line 296
            ob_start(function () { return ''; });
            // line 297
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showTimeField", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 298
($context["value"] ?? null), "rand" =>             // line 299
($context["rand"] ?? null), "width" => "100%"],             // line 301
($context["options"] ?? null))]);
            // line 302
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 303
            echo "   ";
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 303, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 306
    public function macro_dropdownUrgencyType($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 307
            echo "   ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/components/form/fields_macros.html.twig", 307)->unwrap();
            // line 308
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 309
            echo "
   ";
            // line 310
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 310)) {
                // line 311
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 312
                echo "   ";
            }
            // line 313
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 313), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 313)) {
                // line 314
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 315
                echo "   ";
            }
            // line 316
            echo "
   ";
            // line 317
            ob_start(function () { return ''; });
            // line 318
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket::dropdownUrgency", [twig_array_merge(["name" =>             // line 319
($context["name"] ?? null), "value" =>             // line 320
($context["value"] ?? null), "rand" =>             // line 321
($context["rand"] ?? null), "width" => "100%"],             // line 323
($context["options"] ?? null))]);
            // line 324
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 325
            echo "   ";
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 325, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@formcreator/components/form/fields_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1010 => 325,  1007 => 324,  1005 => 323,  1004 => 321,  1003 => 320,  1002 => 319,  1000 => 318,  998 => 317,  995 => 316,  992 => 315,  989 => 314,  986 => 313,  983 => 312,  980 => 311,  978 => 310,  975 => 309,  972 => 308,  969 => 307,  953 => 306,  941 => 303,  938 => 302,  936 => 301,  935 => 299,  934 => 298,  932 => 297,  930 => 296,  927 => 295,  924 => 294,  921 => 293,  918 => 292,  915 => 291,  912 => 290,  910 => 289,  907 => 288,  904 => 287,  901 => 286,  885 => 285,  873 => 282,  870 => 281,  868 => 280,  867 => 277,  866 => 276,  864 => 275,  862 => 274,  859 => 273,  856 => 272,  853 => 271,  850 => 270,  847 => 269,  844 => 268,  842 => 267,  839 => 266,  836 => 265,  833 => 264,  817 => 263,  805 => 260,  802 => 259,  800 => 258,  799 => 256,  798 => 255,  796 => 254,  794 => 253,  791 => 252,  788 => 251,  785 => 250,  782 => 249,  779 => 248,  776 => 247,  774 => 246,  771 => 245,  768 => 244,  754 => 243,  742 => 240,  739 => 239,  737 => 238,  736 => 236,  735 => 235,  733 => 234,  731 => 233,  728 => 232,  725 => 231,  722 => 230,  719 => 229,  716 => 228,  713 => 227,  711 => 226,  708 => 225,  705 => 224,  691 => 223,  680 => 220,  677 => 219,  674 => 218,  672 => 217,  671 => 215,  670 => 214,  668 => 213,  666 => 212,  663 => 211,  660 => 210,  657 => 209,  654 => 208,  651 => 207,  648 => 206,  646 => 205,  643 => 204,  640 => 203,  637 => 202,  621 => 201,  610 => 198,  607 => 197,  604 => 196,  602 => 195,  601 => 193,  600 => 192,  598 => 191,  596 => 190,  593 => 189,  590 => 188,  587 => 187,  584 => 186,  581 => 185,  578 => 184,  576 => 183,  573 => 182,  570 => 181,  567 => 180,  551 => 179,  539 => 176,  534 => 174,  530 => 173,  526 => 172,  520 => 171,  514 => 168,  510 => 167,  506 => 166,  500 => 165,  496 => 163,  494 => 162,  491 => 161,  488 => 160,  485 => 159,  482 => 158,  479 => 157,  462 => 156,  451 => 153,  448 => 152,  445 => 151,  443 => 150,  442 => 148,  441 => 147,  439 => 146,  437 => 145,  434 => 144,  431 => 143,  428 => 142,  425 => 141,  422 => 140,  419 => 139,  417 => 138,  414 => 137,  412 => 136,  409 => 135,  406 => 134,  390 => 133,  379 => 130,  376 => 129,  373 => 128,  371 => 127,  370 => 125,  369 => 124,  367 => 123,  365 => 122,  362 => 121,  359 => 120,  356 => 119,  353 => 118,  350 => 117,  347 => 116,  345 => 115,  342 => 114,  340 => 113,  337 => 112,  334 => 111,  318 => 110,  307 => 107,  304 => 106,  301 => 105,  299 => 104,  298 => 102,  297 => 101,  295 => 100,  293 => 99,  290 => 98,  287 => 97,  284 => 96,  281 => 95,  278 => 94,  275 => 93,  273 => 92,  270 => 91,  268 => 90,  265 => 89,  262 => 88,  246 => 87,  235 => 84,  232 => 83,  229 => 82,  227 => 81,  226 => 79,  225 => 78,  223 => 77,  221 => 76,  218 => 75,  215 => 74,  212 => 73,  209 => 72,  206 => 71,  203 => 70,  201 => 69,  198 => 68,  196 => 67,  193 => 66,  190 => 65,  174 => 64,  161 => 60,  158 => 59,  155 => 58,  153 => 57,  152 => 55,  151 => 54,  149 => 53,  147 => 52,  144 => 51,  141 => 50,  138 => 49,  136 => 48,  133 => 47,  130 => 46,  127 => 45,  124 => 44,  121 => 43,  118 => 42,  115 => 41,  109 => 38,  106 => 37,  104 => 36,  102 => 35,  99 => 34,  96 => 33,  80 => 32,  75 => 305,  72 => 284,  69 => 262,  66 => 242,  63 => 222,  60 => 200,  57 => 178,  54 => 155,  51 => 132,  48 => 109,  45 => 86,  42 => 63,  39 => 31,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/components/form/fields_macros.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/components/form/fields_macros.html.twig");
    }
}
