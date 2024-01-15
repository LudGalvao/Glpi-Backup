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

/* pages/setup/apiclient.html.twig */
class __TwigTemplate_1e17813660d1915be4eb365bbf7fbb18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/setup/apiclient.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/setup/apiclient.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["dolog_method", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 41
($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["dolog_method"] ?? null) : null),         // line 42
($context["log_methods"] ?? null), __("Log connections")], 39, $context, $this->getSourceContext());
        // line 44
        echo "

    <div class=\"hr-text\">
        <i class=\"ti ti-filter\"></i>
        <span>";
        // line 48
        echo twig_escape_filter($this->env, __("Filter access"), "html", null, true);
        echo "</span>
    </div>
    <p><em>";
        // line 50
        echo twig_escape_filter($this->env, __("Leave these parameters empty to disable API access restriction"), "html", null, true);
        echo "</em></p>


    ";
        // line 53
        echo twig_call_macro($macros["fields"], "macro_textField", ["ipv4_range_start", (( !twig_test_empty((($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 55
($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["ipv4_range_start"] ?? null) : null))) ? (long2ip((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["ipv4_range_start"] ?? null) : null))) : ("")), __("IPv4 address range start")], 53, $context, $this->getSourceContext());
        // line 57
        echo "

    ";
        // line 59
        echo twig_call_macro($macros["fields"], "macro_textField", ["ipv4_range_end", (( !twig_test_empty((($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 61
($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["ipv4_range_end"] ?? null) : null))) ? (long2ip((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["ipv4_range_end"] ?? null) : null))) : ("")), __("IPv4 address range end")], 59, $context, $this->getSourceContext());
        // line 63
        echo "

    ";
        // line 65
        echo twig_call_macro($macros["fields"], "macro_textField", ["ipv6", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 67
($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["ipv6"] ?? null) : null), __("IPv6 address")], 65, $context, $this->getSourceContext());
        // line 69
        echo "

    ";
        // line 71
        ob_start(function () { return ''; });
        // line 72
        echo "        ";
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["_reset_app_token", ((twig_get_attribute($this->env, $this->source,         // line 74
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 74)) ? (1) : (0)), __("Regenerate"), ["full_width" => true]], 72, $context, $this->getSourceContext());
        // line 79
        echo "
    ";
        $context["reset_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "
    ";
        // line 82
        echo twig_call_macro($macros["fields"], "macro_textField", ["app_token", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 84
($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["app_token"] ?? null) : null), twig_sprintf(__("%1\$s (%2\$s)"), __("Application token"), "app_token"), ["add_field_html" =>         // line 87
($context["reset_btn"] ?? null)]], 82, $context, $this->getSourceContext());
        // line 89
        echo "

";
    }

    public function getTemplateName()
    {
        return "pages/setup/apiclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 89,  113 => 87,  112 => 84,  111 => 82,  108 => 81,  104 => 79,  102 => 74,  100 => 72,  98 => 71,  94 => 69,  92 => 67,  91 => 65,  87 => 63,  85 => 61,  84 => 59,  80 => 57,  78 => 55,  77 => 53,  71 => 50,  66 => 48,  60 => 44,  58 => 42,  57 => 41,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/setup/apiclient.html.twig", "/var/www/html/glpi/templates/pages/setup/apiclient.html.twig");
    }
}
