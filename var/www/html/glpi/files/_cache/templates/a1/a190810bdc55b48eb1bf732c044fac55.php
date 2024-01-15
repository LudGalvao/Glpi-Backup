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

/* @formcreator/pages/form_formanswerproperties.html.twig */
class __TwigTemplate_cd8f0c3fa0ed40b887262f26dd0ba1fb extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/pages/form_formanswerproperties.html.twig", 32)->unwrap();
        // line 33
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/pages/form_formanswerproperties.html.twig", 33)->unwrap();
        // line 31
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "@formcreator/pages/form_formanswerproperties.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_textField", ["formanswer_name", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["formanswer_name"] ?? null) : null), __("Answers title", "formcreator")], 36, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@formcreator/pages/form_formanswerproperties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 36,  51 => 35,  46 => 31,  44 => 33,  42 => 32,  35 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/pages/form_formanswerproperties.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/pages/form_formanswerproperties.html.twig");
    }
}
