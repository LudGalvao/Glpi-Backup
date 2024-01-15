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

/* @fields/status_overrides.html.twig */
class __TwigTemplate_c443f3a7fab34d73b8cb2610138ac037 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/status_overrides.html.twig", 29)->unwrap();
        // line 30
        $context["rand"] = twig_random($this->env);
        // line 31
        echo "
<div id=\"container";
        // line 32
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" class=\"asset ";
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">

   ";
        // line 34
        if (($context["has_fields"] ?? null)) {
            // line 35
            echo "      <div class=\"d-flex align-items-start mb-3\">
         <button class=\"btn btn-primary me-2\"
                 type=\"button\"
                 name=\"switch_add\"
                 data-container-id=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["container_id"] ?? null), "html", null, true);
            echo "\">
            <i class=\"far fa-plus\"></i>
            <span>";
            // line 41
            echo twig_escape_filter($this->env, __("Add new status override", "fields"), "html", null, true);
            echo "</span>
         </button>
      </div>
   ";
        }
        // line 45
        echo "
   ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_largeTitle", [__("Status overrides", "fields"), "", false], 46, $context, $this->getSourceContext());
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
        // line 55
        echo twig_escape_filter($this->env, __("Item type"), "html", null, true);
        echo "</th>
                           <th>";
        // line 56
        echo twig_escape_filter($this->env, __("Field"), "html", null, true);
        echo "</th>
                           <th>";
        // line 57
        echo twig_escape_filter($this->env, __("Status"), "html", null, true);
        echo "</th>
                           <th>";
        // line 58
        echo twig_escape_filter($this->env, __("Mandatory"), "html", null, true);
        echo "</th>
                           <th>";
        // line 59
        echo twig_escape_filter($this->env, __("Read only"), "html", null, true);
        echo "</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        ";
        // line 64
        if ((twig_length_filter($this->env, ($context["overrides"] ?? null)) > 0)) {
            // line 65
            echo "                           ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["overrides"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["override"]) {
                // line 66
                echo "                              <tr>
                                 <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["override"], "itemtype", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                                 <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["override"], "field_name", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                                 <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["override"], "status_names", [], "any", false, false, false, 69), ", "), "html", null, true);
                echo "</td>
                                 <td>";
                // line 70
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["override"], "mandatory", [], "any", false, false, false, 70)) ? (__("Yes")) : (__("No"))), "html", null, true);
                echo "</td>
                                 <td>";
                // line 71
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["override"], "is_readonly", [], "any", false, false, false, 71)) ? (__("Yes")) : (__("No"))), "html", null, true);
                echo "</td>
                                 <td>
                                    <form class=\"d-inline\" method=\"post\" action=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("PluginFieldsStatusOverride"), "html", null, true);
                echo "\">
                                       <input type=\"hidden\" name=\"id\" value=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["override"], "id", [], "any", false, false, false, 74), "html", null, true);
                echo "\" />
                                       <input type=\"hidden\" name=\"container_id\" value=\"";
                // line 75
                echo twig_escape_filter($this->env, ($context["container_id"] ?? null), "html", null, true);
                echo "\" />
                                       <button type=\"button\" class=\"btn btn-sm btn-primary\" name=\"edit\"
                                               title=\"";
                // line 77
                echo twig_escape_filter($this->env, _x("button", "Edit"), "html", null, true);
                echo "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-pencil\"></i>
                                       </button>
                                       <button type=\"submit\" class=\"btn btn-sm btn-danger\" name=\"delete\"
                                               title=\"";
                // line 82
                echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                echo "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-trash\"></i>
                                       </button>
                                       <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 86
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
                                    </form>
                                 </td>
                              </tr>
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['override'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                        ";
        } else {
            // line 92
            echo "                           <tr>
                              <td colspan=\"6\">";
            // line 93
            echo twig_escape_filter($this->env, __("No item found", "fields"), "html", null, true);
            echo "</td>
                           </tr>
                        ";
        }
        // line 96
        echo "                     </tbody>
                  </table>
               </div> ";
        // line 99
        echo "            </div> ";
        // line 100
        echo "         </div> ";
        // line 101
        echo "      </div>
   </div> ";
        // line 103
        echo "   <script>
      \$(document).ready(() => {
         \$('#container";
        // line 105
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('click', 'button[name=\"edit\"]', (e) => {
            const button = \$(e.currentTarget);
            const row = button.closest('tr');
            const id = row.find('input[name=\"id\"]').val();
            const container_id = row.find('input[name=\"container_id\"]').val();

            glpi_ajax_dialog(
               {
                  title: __('Edit status override', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/status_override.php',
                  method: 'get',
                  params: {
                     action: 'get_edit_form',
                     id: id,
                     container_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });

         \$('#container";
        // line 126
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('click', 'button[name=\"switch_add\"]', (e) => {
            const button = \$(e.currentTarget);
            const container_id = button.attr('data-container-id');

            glpi_ajax_dialog(
               {
                  title: __('Add new status override', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/status_override.php',
                  method: 'get',
                  params: {
                     action: 'get_add_form',
                     container_id: container_id
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
        return "@fields/status_overrides.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 126,  210 => 105,  206 => 103,  203 => 101,  201 => 100,  199 => 99,  195 => 96,  189 => 93,  186 => 92,  183 => 91,  172 => 86,  165 => 82,  157 => 77,  152 => 75,  148 => 74,  144 => 73,  139 => 71,  135 => 70,  131 => 69,  127 => 68,  123 => 67,  120 => 66,  115 => 65,  113 => 64,  105 => 59,  101 => 58,  97 => 57,  93 => 56,  89 => 55,  77 => 46,  74 => 45,  67 => 41,  62 => 39,  56 => 35,  54 => 34,  47 => 32,  44 => 31,  42 => 30,  40 => 29,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@fields/status_overrides.html.twig", "/var/www/html/glpi/marketplace/fields/templates/status_overrides.html.twig");
    }
}
