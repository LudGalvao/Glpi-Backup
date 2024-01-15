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

/* @fields/container_display_conditions.html.twig */
class __TwigTemplate_f14f59d01d9d6a0da02ab0637022e011 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/container_display_conditions.html.twig", 29)->unwrap();
        // line 30
        $context["rand"] = twig_random($this->env);
        // line 31
        echo "
<div id=\"container";
        // line 32
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" class=\"asset\">
   <div class=\"flash-messages\">
      <div class=\"alert alert-info\">
         ";
        // line 35
        echo twig_escape_filter($this->env, __("The engine is used for hide block when main object meets condition"), "html", null, true);
        echo "
      </div>
   </div>
   <div class=\"d-flex align-items-start mb-3\">
      ";
        // line 39
        if (($context["has_fields"] ?? null)) {
            // line 40
            echo "         <button class=\"btn btn-primary me-2\"
                 type=\"button\"
                 name=\"switch_add\"
                 value=\"1\"
                 data-container-id=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["container_id"] ?? null), "html", null, true);
            echo "\">
            <i class=\"far fa-plus\"></i>
            <span>";
            // line 46
            echo twig_escape_filter($this->env, __("Add condition to hide block", "fields"), "html", null, true);
            echo "</span>
         </button>
      ";
        }
        // line 49
        echo "   </div>

   ";
        // line 51
        echo twig_call_macro($macros["fields"], "macro_largeTitle", [_n("Condition to hide block", "Conditions to hide block", Session::getPluralNumber(), "fields"), "", false], 51, $context, $this->getSourceContext());
        echo "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  <table class=\"table\">
                     <thead>
                        <tr>
                           <th>";
        // line 60
        echo twig_escape_filter($this->env, __("Item type"), "html", null, true);
        echo "</th>
                           <th>";
        // line 61
        echo twig_escape_filter($this->env, __("Field"), "html", null, true);
        echo "</th>
                           <th>";
        // line 62
        echo twig_escape_filter($this->env, __("Condition"), "html", null, true);
        echo "</th>
                           <th>";
        // line 63
        echo twig_escape_filter($this->env, __("Value"), "html", null, true);
        echo "</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        ";
        // line 68
        if ((twig_length_filter($this->env, ($context["container_display_conditions"] ?? null)) > 0)) {
            // line 69
            echo "                           ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["container_display_conditions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["container_display_condition"]) {
                // line 70
                echo "                              <tr>
                                 <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(twig_get_attribute($this->env, $this->source, $context["container_display_condition"], "itemtype", [], "any", false, false, false, 71)), "html", null, true);
                echo "</td>
                                 <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsContainerDisplayCondition::getFieldName", [twig_get_attribute($this->env, $this->source, $context["container_display_condition"], "search_option", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, $context["container_display_condition"], "itemtype", [], "any", false, false, false, 72)]), "html", null, true);
                echo "</td>
                                 <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsContainerDisplayCondition::getConditionName", [twig_get_attribute($this->env, $this->source, $context["container_display_condition"], "condition", [], "any", false, false, false, 73)]), "html", null, true);
                echo "</td>
                                 <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsContainerDisplayCondition::getRawValue", [twig_get_attribute($this->env, $this->source, $context["container_display_condition"], "search_option", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, $context["container_display_condition"], "itemtype", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, $context["container_display_condition"], "value", [], "any", false, false, false, 74)]), "html", null, true);
                echo "</td>
                                 <td>
                                    <form class=\"d-inline\" method=\"post\" action=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("PluginFieldsContainerDisplayCondition"), "html", null, true);
                echo "\">
                                       <input type=\"hidden\" name=\"id\" value=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["container_display_condition"], "id", [], "any", false, false, false, 77), "html", null, true);
                echo "\" />
                                       <input type=\"hidden\" name=\"plugin_fields_containers_id\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, ($context["container_id"] ?? null), "html", null, true);
                echo "\" />
                                       <button type=\"button\" class=\"btn btn-sm btn-primary\" name=\"edit\"
                                               title=\"";
                // line 80
                echo twig_escape_filter($this->env, _x("button", "Edit"), "html", null, true);
                echo "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-pencil\"></i>
                                       </button>
                                       <button type=\"submit\" class=\"btn btn-sm btn-danger\" name=\"delete\"
                                               title=\"";
                // line 85
                echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                echo "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-trash\"></i>
                                       </button>
                                       <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 89
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
                                    </form>
                                 </td>
                              </tr>
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container_display_condition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                        ";
        } else {
            // line 95
            echo "                           <tr>
                              <td colspan=\"6\">";
            // line 96
            echo twig_escape_filter($this->env, __("No item found"), "html", null, true);
            echo "</td>
                           </tr>
                        ";
        }
        // line 99
        echo "                     </tbody>
                  </table>
               </div> ";
        // line 102
        echo "            </div> ";
        // line 103
        echo "         </div> ";
        // line 104
        echo "      </div>
   </div> ";
        // line 106
        echo "   <script>
      \$(document).ready(() => {
         \$('#container";
        // line 108
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('click', 'button[name=\"edit\"]', (e) => {
            const button = \$(e.currentTarget);
            const row = button.closest('tr');
            const id = row.find('input[name=\"id\"]').val();
            const container_id = row.find('input[name=\"plugin_fields_containers_id\"]').val();

            glpi_ajax_dialog(
               {
                  title: __('Edit condition to hide block', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/container_display_condition.php',
                  method: 'get',
                  params: {
                      action: 'get_edit_form',
                      id: id,
                      plugin_fields_containers_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });

         \$('#container";
        // line 129
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('click', 'button[name=\"switch_add\"]', (e) => {
            const button = \$(e.currentTarget);
            const container_id = button.attr('data-container-id');

            glpi_ajax_dialog(
               {
                  title: __('Add condition to hide block', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/container_display_condition.php',
                  method: 'get',
                  params: {
                     action: 'get_add_form',
                     plugin_fields_containers_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });
      });
   </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "@fields/container_display_conditions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 129,  208 => 108,  204 => 106,  201 => 104,  199 => 103,  197 => 102,  193 => 99,  187 => 96,  184 => 95,  181 => 94,  170 => 89,  163 => 85,  155 => 80,  150 => 78,  146 => 77,  142 => 76,  137 => 74,  133 => 73,  129 => 72,  125 => 71,  122 => 70,  117 => 69,  115 => 68,  107 => 63,  103 => 62,  99 => 61,  95 => 60,  83 => 51,  79 => 49,  73 => 46,  68 => 44,  62 => 40,  60 => 39,  53 => 35,  47 => 32,  44 => 31,  42 => 30,  40 => 29,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@fields/container_display_conditions.html.twig", "/var/www/html/glpi/marketplace/fields/templates/container_display_conditions.html.twig");
    }
}
