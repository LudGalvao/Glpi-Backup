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

/* @formcreator/pages/question.html.twig */
class __TwigTemplate_88c3337ae8ea8726f6e84e6e50374728 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
            'questionFields' => [$this, 'block_questionFields'],
            'questionParameters' => [$this, 'block_questionParameters'],
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/pages/question.html.twig", 32)->unwrap();
        // line 33
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/pages/question.html.twig", 33)->unwrap();
        // line 31
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "@formcreator/pages/question.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["name",         // line 38
($context["item"] ?? null), __("Name"),         // line 40
($context["withtemplate"] ?? null), ["value" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 42
($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), "required" => true, "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 36, $context, $this->getSourceContext());
        // line 46
        echo "

   ";
        // line 48
        $context["section"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("PluginFormcreatorSection", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["plugin_formcreator_sections_id"] ?? null) : null));
        // line 49
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["PluginFormcreatorSection", "plugin_formcreator_sections_id", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 52
($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["plugin_formcreator_sections_id"] ?? null) : null), _n("Section", "Sections", 1, "formcreator"), ["display_emptychoice" => false, "condition" => ["plugin_formcreator_forms_id" => (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 56
($context["section"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["plugin_formcreator_forms_id"] ?? null) : null)], "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 49, $context, $this->getSourceContext());
        // line 60
        echo "

   ";
        // line 62
        echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownQuestionType", ["fieldtype", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 64
($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["fieldtype"] ?? null) : null), _n("Type", "Types", 1), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 62, $context, $this->getSourceContext());
        // line 70
        echo "

   ";
        // line 72
        $this->displayBlock('questionFields', $context, $blocks);
        // line 108
        echo "
   ";
        // line 109
        if ( !(null === (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 109)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["fieldtype"] ?? null) : null))) {
            // line 110
            echo "      ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["description", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,             // line 112
($context["item"] ?? null), "fields", [], "any", false, false, false, 112)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["description"] ?? null) : null), __("Description"), ["full_width" => true, "full_width_adapt_column" => false, "label_class" => "col-xxl-2", "input_class" => "col-xxl-10", "enable_richtext" => true]], 110, $context, $this->getSourceContext());
            // line 120
            echo "

      ";
            // line 122
            if ((twig_length_filter($this->env, ($context["question_params"] ?? null)) > 0)) {
                // line 123
                echo "         ";
                $this->displayBlock('questionParameters', $context, $blocks);
                // line 125
                echo "      ";
            }
            // line 126
            echo "
      ";
            // line 127
            echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("Condition to show the question", "formcreator")], 127, $context, $this->getSourceContext());
            echo "

      ";
            // line 129
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["show_rule", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 129)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["show_rule"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEnumShowrule", [], "method", false, false, false, 129), "", ["no_label" => true, "on_change" => "plugin_formcreator_toggleCondition(this);"]], 129, $context, $this->getSourceContext());
            echo "
      ";
            // line 130
            $context["parent"] = ($context["item"] ?? null);
            // line 131
            echo "      ";
            $context["conditions"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCondition::getConditionsFromItem", [($context["item"] ?? null)]);
            // line 132
            echo "      ";
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
                // line 133
                echo "         ";
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
            // line 135
            echo "   ";
        }
    }

    // line 72
    public function block_questionFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "      ";
        echo twig_call_macro($macros["fields"], "macro_nullField", [["add_field_class" => "plugin_formcreator_subtype"]], 73, $context, $this->getSourceContext());
        echo "

      ";
        // line 75
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["required", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,         // line 77
($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["required"] ?? null) : null), __("Required", "formcreator"), ["add_field_class" => "plugin_formcreator_required", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 75, $context, $this->getSourceContext());
        // line 84
        echo "

      ";
        // line 86
        echo twig_call_macro($macros["fields"], "macro_nullField", [["add_field_class" => "plugin_formcreator_empty", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 86, $context, $this->getSourceContext());
        // line 90
        echo "

      ";
        // line 92
        if ((twig_length_filter($this->env, ($context["additions"] ?? null)) == 0)) {
            // line 93
            echo "         ";
            echo twig_call_macro($macros["fields"], "macro_nullField", [["add_field_class" => "plugin_formcreator_additions", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 93, $context, $this->getSourceContext());
            // line 97
            echo "
      ";
        } else {
            // line 99
            echo "         ";
            echo ($context["additions"] ?? null);
            echo "
      ";
        }
        // line 101
        echo "
      ";
        // line 103
        echo "      ";
        echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 103, $context, $this->getSourceContext());
        // line 106
        echo "
   ";
    }

    // line 123
    public function block_questionParameters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "         ";
    }

    public function getTemplateName()
    {
        return "@formcreator/pages/question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 124,  214 => 123,  209 => 106,  206 => 103,  203 => 101,  197 => 99,  193 => 97,  190 => 93,  188 => 92,  184 => 90,  182 => 86,  178 => 84,  176 => 77,  175 => 75,  169 => 73,  165 => 72,  160 => 135,  143 => 133,  125 => 132,  122 => 131,  120 => 130,  116 => 129,  111 => 127,  108 => 126,  105 => 125,  102 => 123,  100 => 122,  96 => 120,  94 => 112,  92 => 110,  90 => 109,  87 => 108,  85 => 72,  81 => 70,  79 => 64,  78 => 62,  74 => 60,  72 => 56,  71 => 52,  69 => 49,  67 => 48,  63 => 46,  61 => 42,  60 => 40,  59 => 38,  57 => 36,  53 => 35,  48 => 31,  46 => 33,  44 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/pages/question.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/pages/question.html.twig");
    }
}
