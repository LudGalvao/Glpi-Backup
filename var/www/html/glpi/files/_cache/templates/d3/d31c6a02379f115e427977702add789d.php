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

/* pages/admin/events_list.html.twig */
class __TwigTemplate_91ee6cc3b6c1546f165ed595f331ce46 extends Template
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
<div class=\"container-fluid\">
   <div class=\"search_page\">
      <div class=\"search-container\">
         <div class=\"card card-sm search-card\">
            ";
        // line 38
        if ((($context["count"] ?? null) == 0)) {
            // line 39
            echo "               <div class=\"alert alert-info mb-0 rounded-0 border-top-0 border-bottom-0 border-right-0\" role=\"alert\">
                  ";
            // line 40
            echo twig_escape_filter($this->env, __("No item found"), "html", null, true);
            echo "
               </div>
            ";
        } else {
            // line 43
            echo "               <div class=\"card-header search-header pe-0\">
                  ";
            // line 44
            if ((($context["count"] ?? null) > 0)) {
                // line 45
                echo "                     ";
                $context["limitdropdown"] = twig_include($this->env, $context, "components/dropdown/limit.html.twig", ["href" => (                // line 46
($context["target"] ?? null) . "?"), "additional_params" => ((("sort=" .                 // line 47
($context["sort"] ?? null)) . "&order=") . ($context["order"] ?? null))]);
                // line 49
                echo "                     <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block search-limit\">
                        ";
                // line 50
                echo twig_sprintf(__("Show %s entries"), ($context["limitdropdown"] ?? null));
                echo "
                     </div>
               ";
            }
            // line 53
            echo "               </div>
               <div class=\"table-responsive-md\">
                  <table class=\"search-results table table-hover table-card\">
                     <thead>
                        ";
            // line 57
            $context["headings"] = ["type" => __("Source"), "items_id" => __("ID"), "date" => _n("Date", "Dates", 1), "service" => __("Service"), "level" => __("Level"), "message" => __("Message")];
            // line 65
            echo "
                        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headings"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 67
                echo "                           <th>
                              <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "?sort=";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "&amp;order=";
                echo (((($context["order"] ?? null) == "ASC")) ? ("DESC") : ("ASC"));
                echo "\">
                                 ";
                // line 69
                if ((($context["sort"] ?? null) == $context["field"])) {
                    // line 70
                    echo "                                    ";
                    $context["sort_icon"] = (((($context["order"] ?? null) == "ASC")) ? ("fa-sort-up") : ("fa-sort-down"));
                    // line 71
                    echo "                                    <i class=\"fas fa-lg ";
                    echo twig_escape_filter($this->env, ($context["sort_icon"] ?? null), "html", null, true);
                    echo "\"></i>
                                 ";
                }
                // line 73
                echo "                                 ";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "
                              </a>
                           </th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                     </thead>
                     <tbody>
                        ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 80
                echo "                           <tr>
                              <td>
                                 <i class=\"fa-fw text-muted ";
                // line 82
                echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["event"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype_icon"] ?? null) : null), "html", null, true);
                echo "\"></i>
                                 <span>";
                // line 83
                echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["event"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["itemtype_name"] ?? null) : null), "html", null, true);
                echo "</span>
                              </td>
                              <td>";
                // line 85
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Event::displayItemLogID", [(($__internal_compile_2 = $context["event"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["type"] ?? null) : null), (($__internal_compile_3 = $context["event"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["items_id"] ?? null) : null)]);
                echo "</td>
                              <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_4 = $context["event"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["date"] ?? null) : null)), "html", null, true);
                echo "</td>
                              <td>";
                // line 87
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), (($__internal_compile_5 = $context["event"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["service"] ?? null) : null), [], "array", true, true, false, 87) &&  !(null === (($__internal_compile_6 = ($context["services"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[(($__internal_compile_7 = $context["event"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["service"] ?? null) : null)] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["services"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[(($__internal_compile_9 = $context["event"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["service"] ?? null) : null)] ?? null) : null)) : ((($__internal_compile_10 = $context["event"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["service"] ?? null) : null))), "html", null, true);
                echo "</td>
                              <td>";
                // line 88
                echo twig_escape_filter($this->env, (($__internal_compile_11 = $context["event"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["level"] ?? null) : null), "html", null, true);
                echo "</td>
                              <td>";
                // line 89
                echo twig_escape_filter($this->env, (($__internal_compile_12 = $context["event"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["message"] ?? null) : null), "html", null, true);
                echo "</td>
                           </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                     </tbody>
                  </table>
               </div>

               <div class=\"search-footer card-footer\">
                  ";
            // line 97
            echo twig_include($this->env, $context, "components/pager.html.twig", ["href" => (            // line 98
($context["target"] ?? null) . "?"), "additional_params" => ((("sort=" .             // line 99
($context["sort"] ?? null)) . "&order=") . ($context["order"] ?? null)), "count" =>             // line 100
($context["count"] ?? null)]);
            // line 101
            echo "
               </div>
            ";
        }
        // line 104
        echo "         </div>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/events_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 104,  180 => 101,  178 => 100,  177 => 99,  176 => 98,  175 => 97,  168 => 92,  159 => 89,  155 => 88,  151 => 87,  147 => 86,  143 => 85,  138 => 83,  134 => 82,  130 => 80,  126 => 79,  122 => 77,  111 => 73,  105 => 71,  102 => 70,  100 => 69,  92 => 68,  89 => 67,  85 => 66,  82 => 65,  80 => 57,  74 => 53,  68 => 50,  65 => 49,  63 => 47,  62 => 46,  60 => 45,  58 => 44,  55 => 43,  49 => 40,  46 => 39,  44 => 38,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/admin/events_list.html.twig", "/var/www/html/glpi/templates/pages/admin/events_list.html.twig");
    }
}
