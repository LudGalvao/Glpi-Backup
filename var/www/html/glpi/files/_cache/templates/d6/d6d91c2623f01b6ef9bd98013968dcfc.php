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

/* @formcreator/field/selectfield.html.twig */
class __TwigTemplate_9cb6878a72c6af91ec0cd4c04616a2c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'questionFields' => [$this, 'block_questionFields'],
            'questionParameters' => [$this, 'block_questionParameters'],
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/field/selectfield.html.twig", 31)->unwrap();
        // line 32
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/field/selectfield.html.twig", 32)->unwrap();
        // line 30
        $this->parent = $this->loadTemplate("@formcreator/pages/question.html.twig", "@formcreator/field/selectfield.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_questionFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 35, $context, $this->getSourceContext());
        // line 38
        echo "

    ";
        // line 40
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["required", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 42
($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["required"] ?? null) : null), __("Required", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 40, $context, $this->getSourceContext());
        // line 47
        echo "

    ";
        // line 49
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["show_empty", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["show_empty"] ?? null) : null), __("Show empty", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 49, $context, $this->getSourceContext());
        // line 56
        echo "

    ";
        // line 58
        echo twig_call_macro($macros["fields"], "macro_textField", ["default_values", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 60
($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["default_values"] ?? null) : null), __("Default values"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 58, $context, $this->getSourceContext());
        // line 65
        echo "

    ";
        // line 67
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["values", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["values"] ?? null) : null), __("Values"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 67, $context, $this->getSourceContext());
        // line 74
        echo "
";
    }

    // line 77
    public function block_questionParameters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["question_params"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
            // line 79
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, $context["parameter"], "getParameterForm", [($context["item"] ?? null)], "method", false, false, false, 79);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@formcreator/field/selectfield.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 79,  96 => 78,  92 => 77,  87 => 74,  85 => 69,  84 => 67,  80 => 65,  78 => 60,  77 => 58,  73 => 56,  71 => 51,  70 => 49,  66 => 47,  64 => 42,  63 => 40,  59 => 38,  56 => 35,  52 => 34,  47 => 30,  45 => 32,  43 => 31,  36 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/field/selectfield.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/field/selectfield.html.twig");
    }
}
