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

/* components/logs.html.twig */
class __TwigTemplate_3e55a3b43e5ca921d690aa527250d73a extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/logs.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        if ((($context["total_number"] ?? null) < 1)) {
            // line 37
            echo "   <div class=\"alert alert-info\">
      ";
            // line 38
            echo twig_escape_filter($this->env, __("No historical"), "html", null, true);
            echo "
   </div>
";
        } else {
            // line 41
            echo "
   ";
            // line 42
            echo twig_include($this->env, $context, "components/pager.html.twig", ["count" => ($context["filtered_number"] ?? null)]);
            echo "
   <div class=\"table-responsive\">
   <table class=\"table table-hover\">
      <thead>
         <tr>
            <th>";
            // line 47
            echo twig_escape_filter($this->env, __("ID"), "html", null, true);
            echo "</th>
            <th>";
            // line 48
            echo twig_escape_filter($this->env, _n("Date", "Dates", 1), "html", null, true);
            echo "</th>
            <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            echo "</th>
            <th>";
            // line 50
            echo twig_escape_filter($this->env, _n("Field", "Fields", 1), "html", null, true);
            echo "</th>
            <th>";
            // line 51
            echo twig_escape_filter($this->env, _x("name", "Update"), "html", null, true);
            echo "</th>
            <th>
               <span class=\"float-end log-toolbar mb-0\">
                  <button class=\"btn btn-sm show_log_filters ";
            // line 54
            echo (((twig_length_filter($this->env, ($context["filters"] ?? null)) > 0)) ? ("btn-secondary active") : ("btn-outline-secondary"));
            echo "\">
                     <i class=\"fas fa-filter\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 56
            echo twig_escape_filter($this->env, __("Filter"), "html", null, true);
            echo "</span>
                  </button>
                  <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["csv_url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-sm text-capitalize btn-icon btn-outline-secondary\">
                     <i class=\"fas fa-file-download\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 60
            echo twig_escape_filter($this->env, __("Export"), "html", null, true);
            echo "</span>
                  </a>
               </span>
            </th>
         </tr>

         ";
            // line 66
            if ((twig_length_filter($this->env, ($context["filters"] ?? null)) > 0)) {
                // line 67
                echo "         <tr class=\"log_history_filter_row\">
            <td>
               <input type=\"hidden\" name=\"filters[active]\" value=\"1\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
                // line 70
                echo twig_escape_filter($this->env, ($context["items_id"] ?? null), "html", null, true);
                echo "\" />
            </td>
            <td>
               ";
                // line 73
                echo twig_call_macro($macros["fields"], "macro_dateField", ["filters[date]", (($__internal_compile_0 =                 // line 75
($context["filters"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["date"] ?? null) : null), "", ["no_label" => true, "full_width" => true, "mb" => ""]], 73, $context, $this->getSourceContext());
                // line 82
                echo "
            </td>
            <td>
               <select name=\"filters[users_names][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["user_names"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["username"]) {
                    // line 87
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($context["value"]), "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "users_names", [], "array", true, true, false, 87) && twig_in_filter($context["value"], (($__internal_compile_1 = ($context["filters"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["users_names"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 88
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($context["username"]), "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['username'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "               </select>
            </td>
            <td>
               <select name=\"filters[affected_fields][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["affected_fields"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["field"]) {
                    // line 96
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "affected_fields", [], "array", true, true, false, 96) && twig_in_filter($context["value"], (($__internal_compile_2 = ($context["filters"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["affected_fields"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 97
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "               </select>
            </td>
            <td colspan=\"2\">
               <select name=\"filters[linked_actions][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["linked_actions"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["action"]) {
                    // line 105
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "linked_actions", [], "array", true, true, false, 105) && twig_in_filter($context["value"], (($__internal_compile_3 = ($context["filters"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["linked_actions"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 106
                    echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "               </select>
            </td>
         </tr>
         ";
            }
            // line 113
            echo "
      </thead>
      <tbody>
      ";
            // line 116
            if ((($context["filtered_number"] ?? null) < 1)) {
                // line 117
                echo "         <tr><td colspan=\"6\">";
                echo twig_escape_filter($this->env, __("No historical matching your filters"), "html", null, true);
                echo "</td></tr>
      ";
            } else {
                // line 119
                echo "         ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 120
                    echo "            <tr>
               <td>";
                    // line 121
                    echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["entry"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null), "html", null, true);
                    echo "</td>
               <td>";
                    // line 122
                    echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["entry"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["date_mod"] ?? null) : null), "html", null, true);
                    echo "</td>
               <td>";
                    // line 123
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_6 = $context["entry"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["user_name"] ?? null) : null)), "html", null, true);
                    echo "</td>
               <td>";
                    // line 124
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_7 = $context["entry"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["field"] ?? null) : null)), "html", null, true);
                    echo "</td>
               <td colspan=\"2\" style=\"width: 60%\">";
                    // line 125
                    echo (($__internal_compile_8 = $context["entry"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["change"] ?? null) : null);
                    echo "</td>
            </tr>
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "      ";
            }
            // line 129
            echo "      </tbody>
   </table>
   </div>";
            // line 132
            echo "
   ";
            // line 133
            $context["limitdropdown"] = twig_include($this->env, $context, "components/dropdown/limit.html.twig");
            // line 134
            echo "   <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block mb-2\">
      ";
            // line 135
            echo twig_sprintf(__("Show %s entries"), ($context["limitdropdown"] ?? null));
            echo "
   </div>
";
        }
        // line 138
        echo "


<script type=\"text/javascript\">
\$(function() {
   \$('.logs-filter-select-multiple').select2();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 138,  274 => 135,  271 => 134,  269 => 133,  266 => 132,  262 => 129,  259 => 128,  250 => 125,  246 => 124,  242 => 123,  238 => 122,  234 => 121,  231 => 120,  226 => 119,  220 => 117,  218 => 116,  213 => 113,  207 => 109,  198 => 106,  191 => 105,  187 => 104,  181 => 100,  172 => 97,  165 => 96,  161 => 95,  155 => 91,  146 => 88,  139 => 87,  135 => 86,  129 => 82,  127 => 75,  126 => 73,  120 => 70,  115 => 67,  113 => 66,  104 => 60,  99 => 58,  94 => 56,  89 => 54,  83 => 51,  79 => 50,  75 => 49,  71 => 48,  67 => 47,  59 => 42,  56 => 41,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/logs.html.twig", "/var/www/html/glpi/templates/components/logs.html.twig");
    }
}
