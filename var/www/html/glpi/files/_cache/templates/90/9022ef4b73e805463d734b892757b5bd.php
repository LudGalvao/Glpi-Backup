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

/* @formcreator/questionparameter/regex.html.twig */
class __TwigTemplate_f98adcfe6d526f00503f5f01364cb062 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'parameters' => [$this, 'block_parameters'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "

";
        // line 32
        $this->displayBlock('parameters', $context, $blocks);
        // line 35
        echo "
";
    }

    // line 32
    public function block_parameters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        echo twig_call_macro($macros["_self"], "macro_regexField", [twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "name", [], "any", false, false, false, 33), ($context["item"] ?? null), ($context["label"] ?? null)], 33, $context, $this->getSourceContext());
        echo "
";
    }

    // line 36
    public function macro_regexField($__name__ = null, $__item__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "item" => $__item__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 37
            echo "    ";
            $macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/questionparameter/regex.html.twig", 37)->unwrap();
            // line 38
            echo "
    ";
            // line 39
            echo twig_call_macro($macros["fields"], "macro_textField", [(            // line 40
($context["name"] ?? null) . "[regex]"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 41
($context["item"] ?? null), "fields", [], "any", false, false, false, 41), "regex", [], "any", false, false, false, 41), __("Regular expression", "formcreator"), ["rand" => "", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 39, $context, $this->getSourceContext());
            // line 48
            echo "

     ";
            // line 50
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 50, $context, $this->getSourceContext());
            // line 53
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@formcreator/questionparameter/regex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 53,  91 => 50,  87 => 48,  85 => 41,  84 => 40,  83 => 39,  80 => 38,  77 => 37,  61 => 36,  54 => 33,  50 => 32,  45 => 35,  43 => 32,  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/questionparameter/regex.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/questionparameter/regex.html.twig");
    }
}
