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

/* @fields/forms/status_override.html.twig */
class __TwigTemplate_7b0f74c16a93a956777149b1c87c67e5 extends Template
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
        // line 28
        echo "
";
        // line 29
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/forms/status_override.html.twig", 29)->unwrap();
        // line 30
        $context["rand"] = twig_random($this->env);
        // line 31
        echo "
<form id=\"form";
        // line 32
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("PluginFieldsStatusOverride"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" data-submit-once>
   <input type=\"hidden\" name=\"container_id\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["container_id"] ?? null), "html", null, true);
        echo "\" />
   <div class=\"card-body pe-1 d-flex flex-wrap\">
      <div class=\"col-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  ";
        // line 39
        $context["itemtype"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 39), "itemtype", [], "array", true, true, false, 39)) ? (_twig_default_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), twig_first($this->env, twig_get_array_keys_filter(($context["container_itemtypes"] ?? null))))) : (twig_first($this->env, twig_get_array_keys_filter(($context["container_itemtypes"] ?? null)))));
        // line 40
        echo "
                  ";
        // line 41
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["itemtype", ($context["itemtype"] ?? null), ($context["container_itemtypes"] ?? null), __("Item type")], 41, $context, $this->getSourceContext());
        echo "
                  ";
        // line 42
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["plugin_fields_fields_id", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["plugin_fields_fields_id"] ?? null) : null), ($context["container_fields"] ?? null), __("Field", "fields")], 42, $context, $this->getSourceContext());
        echo "

                  ";
        // line 44
        ob_start(function () { return ''; });
        // line 45
        echo "                     <div id=\"status_inner_container";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 46
        echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsStatusOverride::getStatusDropdownForItemtype", [($context["itemtype"] ?? null), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 46), "states", [], "array", true, true, false, 46)) ? (_twig_default_filter((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 46)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["states"] ?? null) : null), [])) : ([]))]);
        echo "
                     </div>
                  ";
        $context["status_field_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                  ";
        echo twig_call_macro($macros["fields"], "macro_field", ["status_inner_container", ($context["status_field_html"] ?? null), __("Status")], 49, $context, $this->getSourceContext());
        echo "

                  ";
        // line 51
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["mandatory", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 51), "mandatory", [], "array", true, true, false, 51)) ? (_twig_default_filter((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 51)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["mandatory"] ?? null) : null), null)) : (null)), __("Mandatory field")], 51, $context, $this->getSourceContext());
        echo "
                  ";
        // line 52
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_readonly", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 52), "is_readonly", [], "array", true, true, false, 52)) ? (_twig_default_filter((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 52)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["is_readonly"] ?? null) : null), null)) : (null)), __("Read only", "fields")], 52, $context, $this->getSourceContext());
        echo "
               </div> ";
        // line 54
        echo "               <div class=\"mx-n2 d-flex flex-row-reverse align-items-start\">
                  ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "isNewItem", [], "method", false, false, false, 55)) {
            // line 56
            echo "                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\" value=\"1\">
                        <i class=\"far fa-plus\"></i>
                        <span>";
            // line 58
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "</span>
                     </button>
                  ";
        } else {
            // line 61
            echo "                     <input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), "html", null, true);
            echo "\" />
                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                        <i class=\"far fa-save\"></i>
                        <span>";
            // line 64
            echo twig_escape_filter($this->env, _x("button", "Update"), "html", null, true);
            echo "</span>
                     </button>
                  ";
        }
        // line 67
        echo "                  <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
               </div>
            </div> ";
        // line 70
        echo "         </div> ";
        // line 71
        echo "      </div>
   </div> ";
        // line 73
        echo "</form>
<script>
   \$(document).ready(() => {
      const refresh_status_dropdown = () => {
         const itemtype = \$('#form";
        // line 77
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').find('select[name=\"itemtype\"]').val();
         \$.ajax({
            url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/status_override.php',
            method: 'GET',
            data: {
                action: 'get_status_dropdown',
                itemtype: itemtype
            }
         }).then((result) => {
            \$('#status_inner_container";
        // line 86
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').html(result);
         });
      }

      \$('#form";
        // line 90
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('change', 'select[name=\"itemtype\"]', () => {
         refresh_status_dropdown();
      });
   });
</script>
";
    }

    public function getTemplateName()
    {
        return "@fields/forms/status_override.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 90,  160 => 86,  148 => 77,  142 => 73,  139 => 71,  137 => 70,  131 => 67,  125 => 64,  118 => 61,  112 => 58,  108 => 56,  106 => 55,  103 => 54,  99 => 52,  95 => 51,  89 => 49,  83 => 46,  78 => 45,  76 => 44,  71 => 42,  67 => 41,  64 => 40,  62 => 39,  53 => 33,  47 => 32,  44 => 31,  42 => 30,  40 => 29,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@fields/forms/status_override.html.twig", "/var/www/html/glpi/marketplace/fields/templates/forms/status_override.html.twig");
    }
}
