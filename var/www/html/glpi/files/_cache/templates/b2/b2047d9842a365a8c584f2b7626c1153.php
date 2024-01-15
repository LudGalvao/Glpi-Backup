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

/* @formcreator/pages/targetticket.html.twig */
class __TwigTemplate_c830f47c2bbea3534d7a82677d236aae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 31
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/pages/targetticket.html.twig", 32)->unwrap();
        // line 31
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "@formcreator/pages/targetticket.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["name",         // line 37
($context["item"] ?? null), __("Name"),         // line 39
($context["withtemplate"] ?? null), ["required" => true, "full_width" => true]], 35, $context, $this->getSourceContext());
        // line 41
        echo "

    ";
        // line 43
        echo twig_call_macro($macros["fields"], "macro_smallTitle", [_n("Target ticket", "Target tickets", 1, "formcreator")], 43, $context, $this->getSourceContext());
        echo "

    ";
        // line 45
        echo twig_call_macro($macros["fields"], "macro_textField", ["target_name", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 47
($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target_name"] ?? null) : null), __("Ticket title", "formcreator"), ["required" => true, "full_width" => true]], 45, $context, $this->getSourceContext());
        // line 50
        echo "

    ";
        // line 52
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["content"] ?? null) : null), __("Description", "formcreator"), ["enable_richtext" => true, "full_width" => true]], 52, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@formcreator/pages/targetticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 52,  70 => 50,  68 => 47,  67 => 45,  62 => 43,  58 => 41,  56 => 39,  55 => 37,  53 => 35,  49 => 34,  44 => 31,  42 => 32,  35 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/pages/targetticket.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/pages/targetticket.html.twig");
    }
}
