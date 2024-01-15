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

/* @formcreator/field/emailfield.html.twig */
class __TwigTemplate_a3f07b3529c9623c8ad67f27ec3d9598 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/field/emailfield.html.twig", 31)->unwrap();
        // line 32
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/field/emailfield.html.twig", 32)->unwrap();
        // line 30
        $this->parent = $this->loadTemplate("@formcreator/pages/question.html.twig", "@formcreator/field/emailfield.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_questionFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "     ";
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
        echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 49, $context, $this->getSourceContext());
        // line 52
        echo "

    ";
        // line 54
        echo twig_call_macro($macros["fields"], "macro_textField", ["default_values", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 56
($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["default_values"] ?? null) : null), __("Default values"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 54, $context, $this->getSourceContext());
        // line 61
        echo "

";
    }

    public function getTemplateName()
    {
        return "@formcreator/field/emailfield.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 61,  76 => 56,  75 => 54,  71 => 52,  69 => 49,  65 => 47,  63 => 42,  62 => 40,  58 => 38,  55 => 35,  51 => 34,  46 => 30,  44 => 32,  42 => 31,  35 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/field/emailfield.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/field/emailfield.html.twig");
    }
}
