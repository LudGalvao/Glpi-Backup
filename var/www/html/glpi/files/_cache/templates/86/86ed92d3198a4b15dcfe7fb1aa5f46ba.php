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

/* @formcreator/field/radiosfield.html.twig */
class __TwigTemplate_61253be40eae161585ce6338ab7c4ec1 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/field/radiosfield.html.twig", 31)->unwrap();
        // line 32
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/field/radiosfield.html.twig", 32)->unwrap();
        // line 30
        $this->parent = $this->loadTemplate("@formcreator/pages/question.html.twig", "@formcreator/field/radiosfield.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_questionFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
        $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/field/radiosfield.html.twig", 35)->unwrap();
        // line 36
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 36, $context, $this->getSourceContext());
        // line 39
        echo "

    ";
        // line 41
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["required", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 43
($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["required"] ?? null) : null), __("Required", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 41, $context, $this->getSourceContext());
        // line 48
        echo "

    ";
        // line 51
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 51, $context, $this->getSourceContext());
        // line 54
        echo "

    ";
        // line 56
        echo twig_call_macro($macros["fields"], "macro_textField", ["default_values", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 58
($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["default_values"] ?? null) : null), __("Default values"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 56, $context, $this->getSourceContext());
        // line 63
        echo "

    ";
        // line 65
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["values", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 67
($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["values"] ?? null) : null), __("Values"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 65, $context, $this->getSourceContext());
        // line 72
        echo "
";
    }

    // line 75
    public function block_questionParameters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["question_params"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
            // line 77
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, $context["parameter"], "getParameterForm", [($context["item"] ?? null)], "method", false, false, false, 77);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@formcreator/field/radiosfield.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 77,  99 => 76,  95 => 75,  90 => 72,  88 => 67,  87 => 65,  83 => 63,  81 => 58,  80 => 56,  76 => 54,  73 => 51,  69 => 48,  67 => 43,  66 => 41,  62 => 39,  59 => 36,  56 => 35,  52 => 34,  47 => 30,  45 => 32,  43 => 31,  36 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/field/radiosfield.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/field/radiosfield.html.twig");
    }
}
