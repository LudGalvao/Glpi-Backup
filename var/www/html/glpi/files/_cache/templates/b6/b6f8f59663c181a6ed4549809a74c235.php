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

/* components/dashboard/widget_form.html.twig */
class __TwigTemplate_3df02bd563e2d365be1b6347f1d536f9 extends Template
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
        // line 33
        echo "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/dashboard/widget_form.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["field_options"] = ["full_width" => true];
        // line 39
        echo "
";
        // line 40
        $context["rand"] = twig_random($this->env);
        // line 41
        echo "
<form class=\"display-widget-form\">

   <input type=\"hidden\" name=\"gridstack_id\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["gridstack_id"] ?? null), "html", null, true);
        echo "\" />
   <input type=\"hidden\" name=\"old_id\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["old_id"] ?? null), "html", null, true);
        echo "\" />
   <input type=\"hidden\" name=\"x\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["x"] ?? null), "html", null, true);
        echo "\" />
   <input type=\"hidden\" name=\"y\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["y"] ?? null), "html", null, true);
        echo "\" />
   <input type=\"hidden\" name=\"width\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo "\" />
   <input type=\"hidden\" name=\"height\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo "\" />
   <input type=\"hidden\" name=\"card_options\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, json_encode(($context["card_options"] ?? null), twig_constant("JSON_HEX_QUOT")), "html", null, true);
        echo "\" />

   ";
        // line 52
        echo twig_call_macro($macros["fields"], "macro_colorField", ["color",         // line 54
($context["color"] ?? null), __("Background color"),         // line 56
($context["field_options"] ?? null)], 52, $context, $this->getSourceContext());
        // line 57
        echo "

   ";
        // line 59
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["card_id",         // line 61
($context["card_id"] ?? null),         // line 62
($context["list_cards"] ?? null), __("Data"), twig_array_merge(        // line 64
($context["field_options"] ?? null), ["display_emptychoice" =>  !        // line 65
($context["edit"] ?? null)])], 59, $context, $this->getSourceContext());
        // line 67
        echo "

   ";
        // line 70
        echo "   ";
        ob_start(function () { return ''; });
        // line 71
        echo "      <div class=\"widget-list\">
         ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["widget_types"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["current"]) {
            // line 73
            echo "            ";
            $context["selected"] = ($context["key"] == ($context["widgettype"] ?? null));
            // line 74
            echo "            ";
            $context["w_displayed"] = ((($context["edit"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["card"] ?? null), "widgettype", [], "array", true, true, false, 74)) && twig_in_filter($context["key"], (($__internal_compile_0 = ($context["card"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["widgettype"] ?? null) : null)));
            // line 75
            echo "
            <input type=\"radio\"
                  ";
            // line 77
            if (($context["selected"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 78
            echo "                  class=\"widget-select\" id=\"widgettype_";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                  name=\"widgettype\"
                  value=\"";
            // line 80
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" />
               <label for=\"widgettype_";
            // line 81
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                      ";
            // line 82
            if (($context["w_displayed"] ?? null)) {
                echo "style=\"display: inline-block;\"";
            }
            echo ">
                  <div>";
            // line 83
            echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["current"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["label"] ?? null) : null), "html", null, true);
            echo "</div>
                  <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["current"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["image"] ?? null) : null), "html", null, true);
            echo "\" />
               </label>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['current'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "      </div>
   ";
        $context["widgets_list"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "
   ";
        // line 90
        $context["displayed"] = ($context["edit"] ?? null);
        // line 91
        echo "   <div class=\"widgettype_field\" ";
        if ( !($context["displayed"] ?? null)) {
            echo "style=\"display: none;\"";
        }
        echo ">
      ";
        // line 92
        echo twig_call_macro($macros["fields"], "macro_field", ["",         // line 94
($context["widgets_list"] ?? null), __("Widget"),         // line 96
($context["field_options"] ?? null)], 92, $context, $this->getSourceContext());
        // line 97
        echo "
   </div>

   ";
        // line 101
        echo "   ";
        $context["gradient_displayed"] = (($context["edit"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["widget_def"] ?? null), "gradient", [], "array", true, true, false, 101)) ? (_twig_default_filter((($__internal_compile_3 = ($context["widget_def"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["gradient"] ?? null) : null), false)) : (false)));
        // line 102
        echo "   <div class=\"gradient_field\" ";
        if ( !($context["gradient_displayed"] ?? null)) {
            echo "style=\"display: none;\"";
        }
        echo ">
      ";
        // line 103
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["use_gradient",         // line 105
($context["use_gradient"] ?? null), __("Use gradient palette"),         // line 107
($context["field_options"] ?? null)], 103, $context, $this->getSourceContext());
        // line 108
        echo "
   </div>

   ";
        // line 112
        echo "   ";
        $context["point_labels_displayed"] = (($context["edit"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["widget_def"] ?? null), "pointlbl", [], "array", true, true, false, 112)) ? (_twig_default_filter((($__internal_compile_4 = ($context["widget_def"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["pointlbl"] ?? null) : null), false)) : (false)));
        // line 113
        echo "   <div class=\"pointlbl_field\" ";
        if ( !($context["point_labels_displayed"] ?? null)) {
            echo "style=\"display: none;\"";
        }
        echo ">
      ";
        // line 114
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["point_labels",         // line 116
($context["point_labels"] ?? null), __("Display value labels on points/bars"),         // line 118
($context["field_options"] ?? null)], 114, $context, $this->getSourceContext());
        // line 119
        echo "
   </div>

   ";
        // line 123
        echo "   ";
        $context["limit_displayed"] = (($context["edit"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["widget_def"] ?? null), "limit", [], "array", true, true, false, 123)) ? (_twig_default_filter((($__internal_compile_5 = ($context["widget_def"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["limit"] ?? null) : null), false)) : (false)));
        // line 124
        echo "   <div class=\"limit_field\" ";
        if ( !($context["limit_displayed"] ?? null)) {
            echo "style=\"display: none;\"";
        }
        echo ">
      ";
        // line 125
        echo twig_call_macro($macros["fields"], "macro_numberField", ["limit",         // line 127
($context["limit"] ?? null), __("Limit number of data"),         // line 129
($context["field_options"] ?? null)], 125, $context, $this->getSourceContext());
        // line 130
        echo "
   </div>

   <div class=\"modal-footer\">
      <button type=\"submit\" class=\"btn btn-primary ";
        // line 134
        echo ((($context["edit"] ?? null)) ? ("edit-widget") : ("add-widget"));
        echo "\">
         ";
        // line 135
        if (($context["edit"] ?? null)) {
            // line 136
            echo "            <i class=\"far fa-save\"></i>
            <span>";
            // line 137
            echo twig_escape_filter($this->env, _x("button", "Update"), "html", null, true);
            echo "</span>
         ";
        } else {
            // line 139
            echo "            <i class=\"fas fa-plus\"></i>
            <span>";
            // line 140
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "</span>
         ";
        }
        // line 142
        echo "      </button>
   </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "components/dashboard/widget_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 142,  265 => 140,  262 => 139,  257 => 137,  254 => 136,  252 => 135,  248 => 134,  242 => 130,  240 => 129,  239 => 127,  238 => 125,  231 => 124,  228 => 123,  223 => 119,  221 => 118,  220 => 116,  219 => 114,  212 => 113,  209 => 112,  204 => 108,  202 => 107,  201 => 105,  200 => 103,  193 => 102,  190 => 101,  185 => 97,  183 => 96,  182 => 94,  181 => 92,  174 => 91,  172 => 90,  169 => 89,  165 => 87,  156 => 84,  152 => 83,  146 => 82,  140 => 81,  136 => 80,  128 => 78,  124 => 77,  120 => 75,  117 => 74,  114 => 73,  110 => 72,  107 => 71,  104 => 70,  100 => 67,  98 => 65,  97 => 64,  96 => 62,  95 => 61,  94 => 59,  90 => 57,  88 => 56,  87 => 54,  86 => 52,  81 => 50,  77 => 49,  73 => 48,  69 => 47,  65 => 46,  61 => 45,  57 => 44,  52 => 41,  50 => 40,  47 => 39,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/dashboard/widget_form.html.twig", "/var/www/html/glpi/templates/components/dashboard/widget_form.html.twig");
    }
}
