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

/* @formcreator/pages/condition_for_item.html.twig */
class __TwigTemplate_e54bdb502eb710f84d3f286911a3e433 extends Template
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
        echo "
";
        // line 31
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/pages/condition_for_item.html.twig", 31)->unwrap();
        // line 32
        echo "
<div id=\"plugin_formcreator_form\" class=\"asset plugin_formcreator_form_design\" data-itemtype=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "any", false, false, false, 33), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 33)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        echo "\">
   ";
        // line 34
        echo twig_include($this->env, $context, "components/form/header.html.twig");
        echo "
    <div class=\"card-body d-flex flex-wrap\">
        <div class=\"col-12 col-xxl-";
        // line 36
        echo ((($context["item_has_pictures"] ?? null)) ? ("9") : ("12"));
        echo " flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                <div class=\"row flex-row align-items-start flex-grow-1\">
                    <div class=\"row flex-row\">
                        ";
        // line 40
        echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("Condition to generate the target", "formcreator")], 40, $context, $this->getSourceContext());
        echo "

                        ";
        // line 42
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["show_rule", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["show_rule"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEnumShowrule", [], "method", false, false, false, 42), "", ["no_label" => true, "on_change" => "plugin_formcreator_toggleCondition(this);"]], 42, $context, $this->getSourceContext());
        echo "
                        ";
        // line 43
        $context["conditions"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCondition::getConditionsFromItem", [($context["item"] ?? null)]);
        // line 44
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conditions"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
            // line 45
            echo "                            ";
            echo twig_include($this->env, $context, "@formcreator/components/form/condition.html.twig");
            echo "
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </div> ";
        // line 48
        echo "                </div> ";
        // line 49
        echo "            </div> ";
        // line 50
        echo "        </div>
    </div>
    ";
        // line 52
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@formcreator/pages/condition_for_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 52,  115 => 50,  113 => 49,  111 => 48,  109 => 47,  92 => 45,  74 => 44,  72 => 43,  68 => 42,  63 => 40,  56 => 36,  51 => 34,  45 => 33,  42 => 32,  40 => 31,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/pages/condition_for_item.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/pages/condition_for_item.html.twig");
    }
}
