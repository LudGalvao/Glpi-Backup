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

/* @formcreator/pages/section.html.twig */
class __TwigTemplate_7449f4c93539686313aed399a1e5a090 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/pages/section.html.twig", 31)->unwrap();
        // line 32
        echo "
";
        // line 33
        $context["bg"] = "";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 34)) {
            // line 35
            echo "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 37
        echo "
<div class=\"asset ";
        // line 38
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">
   ";
        // line 39
        echo twig_include($this->env, $context, "components/form/header.html.twig");
        echo "

   ";
        // line 41
        $context["rand"] = twig_random($this->env);
        // line 42
        echo "   ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 43
        echo "   ";
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 43) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 43)));
        // line 44
        echo "   ";
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 44) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 45
        echo "   ";
        $context["item_type"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 45);
        // line 46
        echo "   ";
        $context["item_has_pictures"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasItemtypeOrModelPictures", [], "method", false, false, false, 46);
        // line 47
        echo "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-";
        // line 49
        echo ((($context["item_has_pictures"] ?? null)) ? ("9") : ("12"));
        echo " flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">

                    ";
        // line 54
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["name",         // line 56
($context["item"] ?? null), __("Name"),         // line 58
($context["withtemplate"] ?? null), ["required" => true]], 54, $context, $this->getSourceContext());
        // line 60
        echo "

                    ";
        // line 62
        echo twig_call_macro($macros["fields"], "macro_hiddenField", ["plugin_formcreator_forms_id", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 62)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["plugin_formcreator_forms_id"] ?? null) : null), "", ["include_field" => false]], 62, $context, $this->getSourceContext());
        echo "

                    ";
        // line 64
        echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("Condition to show the section", "formcreator")], 64, $context, $this->getSourceContext());
        echo "

                    ";
        // line 66
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["show_rule", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["show_rule"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEnumShowrule", [], "method", false, false, false, 66), "", ["no_label" => true, "on_change" => "plugin_formcreator_toggleCondition(this);"]], 66, $context, $this->getSourceContext());
        echo "
                    ";
        // line 67
        $context["parent"] = ($context["item"] ?? null);
        // line 68
        echo "                    ";
        $context["conditions"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCondition::getConditionsFromItem", [($context["item"] ?? null)]);
        // line 69
        echo "                    ";
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
            // line 70
            echo "                        ";
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
        // line 72
        echo "               </div> ";
        // line 73
        echo "            </div> ";
        // line 74
        echo "         </div> ";
        // line 75
        echo "      </div>

      ";
        // line 77
        if (($context["item_has_pictures"] ?? null)) {
            // line 78
            echo "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 80
            echo twig_include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            echo "
            </div>
         </div>
      ";
        }
        // line 84
        echo "   </div> ";
        // line 85
        echo "
   ";
        // line 86
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "

   ";
        // line 88
        if (((($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["formfooter"] ?? null) : null) == null)) {
            // line 89
            echo "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 90
            echo twig_include($this->env, $context, "components/form/dates.html.twig");
            echo "
      </div>
   ";
        }
        // line 93
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@formcreator/pages/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 93,  194 => 90,  191 => 89,  189 => 88,  184 => 86,  181 => 85,  179 => 84,  172 => 80,  168 => 78,  166 => 77,  162 => 75,  160 => 74,  158 => 73,  156 => 72,  139 => 70,  121 => 69,  118 => 68,  116 => 67,  112 => 66,  107 => 64,  102 => 62,  98 => 60,  96 => 58,  95 => 56,  94 => 54,  86 => 49,  82 => 47,  79 => 46,  76 => 45,  73 => 44,  70 => 43,  67 => 42,  65 => 41,  60 => 39,  56 => 38,  53 => 37,  49 => 35,  47 => 34,  45 => 33,  42 => 32,  40 => 31,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/pages/section.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/pages/section.html.twig");
    }
}
