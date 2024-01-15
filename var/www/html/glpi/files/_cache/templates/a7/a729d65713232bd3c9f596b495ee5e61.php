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

/* pages/setup/general/general_setup.html.twig */
class __TwigTemplate_a17e92063e19c90375199b51a9cddfbf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'config_fields' => [$this, 'block_config_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "pages/setup/general/base_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/setup/general/general_setup.html.twig", 35)->unwrap();
        // line 39
        $context["field_options"] = ["field_class" => "col-12 col-xxl-6 col-sm-6", "label_class" => "col-xxl-8", "input_class" => "col-xxl-4"];
        // line 45
        $context["field_options"] = ["field_class" => "col-12 col-xxl-6 col-sm-6", "full_width" => true];
        // line 50
        $context["inline_field_options"] = twig_array_merge(($context["field_options"] ?? null), ["input_addclass" => "w-auto"]);
        // line 34
        $this->parent = $this->loadTemplate("pages/setup/general/base_form.html.twig", "pages/setup/general/general_setup.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 54
    public function block_config_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "
<div class=\"row ps-4\">

    ";
        // line 58
        echo twig_call_macro($macros["fields"], "macro_textField", ["url_base", (($__internal_compile_0 =         // line 60
($context["config"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["url_base"] ?? null) : null), __("URL of the application"),         // line 62
($context["field_options"] ?? null)], 58, $context, $this->getSourceContext());
        // line 63
        echo "

    ";
        // line 65
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["text_login", (($__internal_compile_1 =         // line 67
($context["config"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text_login"] ?? null) : null), __("Text in the login box"), twig_array_merge(        // line 69
($context["field_options"] ?? null), ["enable_richtext" => true, "enable_images" => false])], 65, $context, $this->getSourceContext());
        // line 73
        echo "

    ";
        // line 75
        echo twig_call_macro($macros["fields"], "macro_textField", ["helpdesk_doc_url", (($__internal_compile_2 =         // line 77
($context["config"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["helpdesk_doc_url"] ?? null) : null), __("Simplified interface help link"),         // line 79
($context["field_options"] ?? null)], 75, $context, $this->getSourceContext());
        // line 80
        echo "

    ";
        // line 82
        echo twig_call_macro($macros["fields"], "macro_textField", ["central_doc_url", (($__internal_compile_3 =         // line 84
($context["config"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["central_doc_url"] ?? null) : null), __("Standard interface help link"),         // line 86
($context["field_options"] ?? null)], 82, $context, $this->getSourceContext());
        // line 87
        echo "

    ";
        // line 89
        echo twig_call_macro($macros["fields"], "macro_numberField", ["decimal_number", (($__internal_compile_4 =         // line 91
($context["config"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["decimal_number"] ?? null) : null), __("Default decimals limit"), twig_array_merge(        // line 93
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 4])], 89, $context, $this->getSourceContext());
        // line 97
        echo "

    ";
        // line 99
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["use_public_faq", (($__internal_compile_5 =         // line 101
($context["config"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["use_public_faq"] ?? null) : null), __("Allow FAQ anonymous access"),         // line 103
($context["field_options"] ?? null)], 99, $context, $this->getSourceContext());
        // line 104
        echo "

</div>

<div class=\"hr-text\">
    <i class=\"ti ti-language\"></i>
    <span>";
        // line 110
        echo twig_escape_filter($this->env, __("Translations"), "html", null, true);
        echo "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 115
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["translate_dropdowns", (($__internal_compile_6 =         // line 117
($context["config"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["translate_dropdowns"] ?? null) : null), __("Translation of dropdowns"),         // line 119
($context["field_options"] ?? null)], 115, $context, $this->getSourceContext());
        // line 120
        echo "

    ";
        // line 122
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["translate_kb", (($__internal_compile_7 =         // line 124
($context["config"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["translate_kb"] ?? null) : null), __("Knowledge base translation"),         // line 126
($context["field_options"] ?? null)], 122, $context, $this->getSourceContext());
        // line 127
        echo "

    ";
        // line 129
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["translate_reminders", (($__internal_compile_8 =         // line 131
($context["config"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["translate_reminders"] ?? null) : null), __("Translation of reminders"),         // line 133
($context["field_options"] ?? null)], 129, $context, $this->getSourceContext());
        // line 134
        echo "

</div>

<div class=\"hr-text\">
    <i class=\"ti ti-list\"></i>
    <span>";
        // line 140
        echo twig_escape_filter($this->env, __("Dynamic display"), "html", null, true);
        echo "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 145
        echo twig_call_macro($macros["fields"], "macro_numberField", ["dropdown_max", (($__internal_compile_9 =         // line 147
($context["config"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["dropdown_max"] ?? null) : null), __("Page size for dropdown (paging using scroll)"), twig_array_merge(        // line 149
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 200])], 145, $context, $this->getSourceContext());
        // line 153
        echo "

    ";
        // line 155
        echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["ajax_limit_count", (($__internal_compile_10 =         // line 157
($context["config"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["ajax_limit_count"] ?? null) : null), __("Don't show search engine in dropdowns if the number of items is less than"), twig_array_merge(        // line 159
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 200, "toadd" => ["0" => __("Never")], "width" => "auto"])], 155, $context, $this->getSourceContext());
        // line 165
        echo "
</div>

<div class=\"hr-text\">
    <i class=\"ti ti-search\"></i>
    <span>";
        // line 170
        echo twig_escape_filter($this->env, __("Search engine"), "html", null, true);
        echo "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 175
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["allow_search_view", (($__internal_compile_11 =         // line 177
($context["config"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["allow_search_view"] ?? null) : null), [__("No"), twig_sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("last criterion")), twig_sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("default criterion"))], __("Items seen"), twig_array_merge(        // line 184
($context["inline_field_options"] ?? null), ["width" => "auto"])], 175, $context, $this->getSourceContext());
        // line 187
        echo "

    ";
        // line 189
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["allow_search_global", (($__internal_compile_12 =         // line 191
($context["config"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["allow_search_global"] ?? null) : null), __("Global search"), twig_array_merge(        // line 193
($context["inline_field_options"] ?? null), ["width" => "auto"])], 189, $context, $this->getSourceContext());
        // line 196
        echo "

    ";
        // line 198
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["allow_search_all", (($__internal_compile_13 =         // line 200
($context["config"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["allow_search_all"] ?? null) : null), [__("No"), twig_sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("last criterion"))], __("All"), twig_array_merge(        // line 206
($context["inline_field_options"] ?? null), ["width" => "auto"])], 198, $context, $this->getSourceContext());
        // line 209
        echo "

    ";
        // line 211
        echo twig_call_macro($macros["fields"], "macro_numberField", ["list_limit_max", (($__internal_compile_14 =         // line 213
($context["config"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["list_limit_max"] ?? null) : null), __("Default search results limit (page)"), twig_array_merge(        // line 215
($context["inline_field_options"] ?? null), ["min" => 5, "max" => 200, "step" => 5])], 211, $context, $this->getSourceContext());
        // line 220
        echo "

    ";
        // line 222
        echo twig_call_macro($macros["fields"], "macro_numberField", ["cut", (($__internal_compile_15 =         // line 224
($context["config"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["cut"] ?? null) : null), __("Default characters limit (summary text boxes)"), twig_array_merge(        // line 226
($context["inline_field_options"] ?? null), ["step" => 50])], 222, $context, $this->getSourceContext());
        // line 229
        echo "

    ";
        // line 231
        echo twig_call_macro($macros["fields"], "macro_numberField", ["url_maxlength", (($__internal_compile_16 =         // line 233
($context["config"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["url_maxlength"] ?? null) : null), __("Default url length limit"), twig_array_merge(        // line 235
($context["inline_field_options"] ?? null), ["min" => 20, "max" => 80, "step" => 5])], 231, $context, $this->getSourceContext());
        // line 240
        echo "

</div>

<div class=\"hr-text\">
    <i class=\"ti ti-lock\"></i>
    <span>";
        // line 246
        echo twig_escape_filter($this->env, __("Item locks"), "html", null, true);
        echo "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 251
        $context["locks_rand"] = twig_random($this->env);
        // line 252
        echo "    ";
        $context["id_lock_use_lock_item"] = ("lock_use_lock_item_" . ($context["locks_rand"] ?? null));
        // line 253
        echo "    ";
        $context["id_lock_lockprofile_id"] = ("dropdown_lock_lockprofile_id" . ($context["locks_rand"] ?? null));
        // line 254
        echo "    ";
        $context["id_lock_item_list_id"] = ("dropdown_lock_item_list" . ($context["locks_rand"] ?? null));
        // line 255
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["lock_use_lock_item", (($__internal_compile_17 =         // line 257
($context["config"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["lock_use_lock_item"] ?? null) : null), __("Use locks"), twig_array_merge(        // line 259
($context["inline_field_options"] ?? null), ["id" =>         // line 260
($context["id_lock_use_lock_item"] ?? null)])], 255, $context, $this->getSourceContext());
        // line 262
        echo "

    ";
        // line 264
        $context["lock_options"] = ($context["field_options"] ?? null);
        // line 265
        echo "    ";
        if ( !(($__internal_compile_18 = ($context["config"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["lock_use_lock_item"] ?? null) : null)) {
            // line 266
            echo "        ";
            $context["lock_options"] = twig_array_merge(($context["lock_options"] ?? null), ["disabled" => true]);
            // line 269
            echo "    ";
        }
        // line 270
        echo "
    ";
        // line 271
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Profile", "lock_lockprofile_id", (($__internal_compile_19 =         // line 274
($context["config"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["lock_lockprofile_id"] ?? null) : null), __("Profile to be used when locking items"), twig_array_merge(twig_array_merge(        // line 276
($context["inline_field_options"] ?? null), ($context["lock_options"] ?? null)), ["width" => "auto", "rand" =>         // line 278
($context["locks_rand"] ?? null)])], 271, $context, $this->getSourceContext());
        // line 280
        echo "

    ";
        // line 282
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["lock_item_list", "", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("ObjectLock::getLockableObjects"), __("List of items to lock"), twig_array_merge(        // line 287
($context["lock_options"] ?? null), ["multiple" => true, "values" => (($__internal_compile_20 =         // line 289
($context["config"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["lock_item_list"] ?? null) : null), "rand" =>         // line 290
($context["locks_rand"] ?? null)])], 282, $context, $this->getSourceContext());
        // line 292
        echo "

    <script>
    \$(function(ready){
        \$('#";
        // line 296
        echo twig_escape_filter($this->env, ($context["id_lock_use_lock_item"] ?? null), "html", null, true);
        echo "').change(function(){
            var enabled = this.checked;
            \$('#";
        // line 298
        echo twig_escape_filter($this->env, ($context["id_lock_lockprofile_id"] ?? null), "html", null, true);
        echo "').prop('disabled', !enabled);
            \$('#";
        // line 299
        echo twig_escape_filter($this->env, ($context["id_lock_item_list_id"] ?? null), "html", null, true);
        echo "').prop('disabled', !enabled);
        });
    });
    </script>
</div>

<div class=\"hr-text\">
    <i class=\"ti ti-login\"></i>
    <span>";
        // line 307
        echo twig_escape_filter($this->env, __("Auto Login"), "html", null, true);
        echo "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 312
        echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["login_remember_time", (($__internal_compile_21 =         // line 314
($context["config"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["login_remember_time"] ?? null) : null), __("Time to allow \"Remember Me\""), twig_array_merge(        // line 316
($context["inline_field_options"] ?? null), ["emptylabel" => __("Disabled"), "min" => 0, "max" => (twig_constant("MONTH_TIMESTAMP") * 2), "step" => twig_constant("DAY_TIMESTAMP"), "toadd" => [twig_constant("HOUR_TIMESTAMP"), (twig_constant("HOUR_TIMESTAMP") * 2), (twig_constant("HOUR_TIMESTAMP") * 6), (twig_constant("HOUR_TIMESTAMP") * 12)], "width" => "auto"])], 312, $context, $this->getSourceContext());
        // line 329
        echo "

    ";
        // line 331
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["login_remember_default", (($__internal_compile_22 =         // line 333
($context["config"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["login_remember_default"] ?? null) : null), __("Default state of checkbox"),         // line 335
($context["inline_field_options"] ?? null)], 331, $context, $this->getSourceContext());
        // line 336
        echo "

    ";
        // line 338
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["display_login_source", (($__internal_compile_23 =         // line 340
($context["config"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["display_login_source"] ?? null) : null), __("Display source dropdown on login page"),         // line 342
($context["inline_field_options"] ?? null)], 338, $context, $this->getSourceContext());
        // line 343
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "pages/setup/general/general_setup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 343,  348 => 342,  347 => 340,  346 => 338,  342 => 336,  340 => 335,  339 => 333,  338 => 331,  334 => 329,  332 => 316,  331 => 314,  330 => 312,  322 => 307,  311 => 299,  307 => 298,  302 => 296,  296 => 292,  294 => 290,  293 => 289,  292 => 287,  291 => 282,  287 => 280,  285 => 278,  284 => 276,  283 => 274,  282 => 271,  279 => 270,  276 => 269,  273 => 266,  270 => 265,  268 => 264,  264 => 262,  262 => 260,  261 => 259,  260 => 257,  258 => 255,  255 => 254,  252 => 253,  249 => 252,  247 => 251,  239 => 246,  231 => 240,  229 => 235,  228 => 233,  227 => 231,  223 => 229,  221 => 226,  220 => 224,  219 => 222,  215 => 220,  213 => 215,  212 => 213,  211 => 211,  207 => 209,  205 => 206,  204 => 200,  203 => 198,  199 => 196,  197 => 193,  196 => 191,  195 => 189,  191 => 187,  189 => 184,  188 => 177,  187 => 175,  179 => 170,  172 => 165,  170 => 159,  169 => 157,  168 => 155,  164 => 153,  162 => 149,  161 => 147,  160 => 145,  152 => 140,  144 => 134,  142 => 133,  141 => 131,  140 => 129,  136 => 127,  134 => 126,  133 => 124,  132 => 122,  128 => 120,  126 => 119,  125 => 117,  124 => 115,  116 => 110,  108 => 104,  106 => 103,  105 => 101,  104 => 99,  100 => 97,  98 => 93,  97 => 91,  96 => 89,  92 => 87,  90 => 86,  89 => 84,  88 => 82,  84 => 80,  82 => 79,  81 => 77,  80 => 75,  76 => 73,  74 => 69,  73 => 67,  72 => 65,  68 => 63,  66 => 62,  65 => 60,  64 => 58,  59 => 55,  55 => 54,  50 => 34,  48 => 50,  46 => 45,  44 => 39,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/setup/general/general_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/general_setup.html.twig");
    }
}
