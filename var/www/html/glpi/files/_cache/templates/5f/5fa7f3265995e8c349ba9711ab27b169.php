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

/* components/checkbox_matrix.html.twig */
class __TwigTemplate_a06003ea4fa2c99b2b387ea6719ceded extends Template
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
<div class=\"mx-n2 mb-4\">
   <table class=\"table table-hover card-table\">
      <thead>
         <tr class=\"border-top\">
            <th colspan=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["number_columns"] ?? null), "html", null, true);
        echo "\">
               <h4>";
        // line 39
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h4>
            </th>
         </tr>
         <tr>
            <th>";
        // line 43
        echo (($__internal_compile_0 = ($context["param"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["first_cell"] ?? null) : null);
        echo "</th>
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["col_name"] => $context["column"]) {
            // line 45
            echo "               ";
            $context["col_id"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [((("col_label_" . $context["col_name"]) . "_") . (($__internal_compile_1 = ($context["param"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["rand"] ?? null) : null))]);
            // line 46
            echo "               <th id=\"";
            echo twig_escape_filter($this->env, ($context["col_id"] ?? null), "html", null, true);
            echo "\">
                  ";
            // line 47
            if ( !twig_test_iterable($context["column"])) {
                // line 48
                echo "                     ";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "
                  ";
            } else {
                // line 50
                echo "                     ";
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "short", [], "array", true, true, false, 50) && twig_get_attribute($this->env, $this->source, $context["column"], "long", [], "array", true, true, false, 50))) {
                    // line 51
                    echo "                        ";
                    echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["column"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["short"] ?? null) : null), "html", null, true);
                    echo "
                        ";
                    // line 52
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [(($__internal_compile_3 = $context["column"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["long"] ?? null) : null), ["applyto" => ($context["col_id"] ?? null)]]);
                    // line 53
                    echo "                     ";
                } else {
                    // line 54
                    echo "                        ";
                    echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["column"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["label"] ?? null) : null), "html", null, true);
                    echo "
                     ";
                }
                // line 56
                echo "                  ";
            }
            // line 57
            echo "               </th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['col_name'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
            ";
        // line 60
        if ((($__internal_compile_5 = ($context["param"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["row_check_all"] ?? null) : null)) {
            // line 61
            echo "               ";
            $context["col_id"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [("col_of_table_" . (($__internal_compile_6 = ($context["param"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["rand"] ?? null) : null))]);
            // line 62
            echo "               <th id=\"";
            echo twig_escape_filter($this->env, ($context["col_id"] ?? null), "html", null, true);
            echo "\">
                  ";
            // line 63
            echo twig_escape_filter($this->env, __("Select/unselect all"), "html", null, true);
            echo "
               </th>
            ";
        }
        // line 66
        echo "         </tr>
      </thead>
      <tbody>
         ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["row_name"] => $context["row"]) {
            // line 70
            echo "            <tr>
               ";
            // line 71
            if ( !twig_test_iterable($context["row"])) {
                // line 72
                echo "                  <td colspan=\"";
                echo twig_escape_filter($this->env, ($context["number_columns"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["row"], "html", null, true);
                echo "</td>
               ";
            } else {
                // line 74
                echo "                  ";
                $context["row_id"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [((("row_label_" . $context["row_name"]) . "_") . (($__internal_compile_7 = ($context["param"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["rand"] ?? null) : null))]);
                // line 75
                echo "                  <td class=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_8 = $context["row"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["class"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "\">
                     ";
                // line 76
                (((twig_get_attribute($this->env, $this->source, $context["row"], "label", [], "array", true, true, false, 76) &&  !(null === (($__internal_compile_9 = $context["row"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["label"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_10 = $context["row"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["label"] ?? null) : null), "html", null, true))) : (print ("&nbsp;")));
                echo "
                  </td>

                  ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
                foreach ($context['_seq'] as $context["col_name"] => $context["column"]) {
                    // line 80
                    echo "                     ";
                    $context["content"] = (($__internal_compile_11 = (($__internal_compile_12 = $context["row"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["columns"] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["col_name"]] ?? null) : null);
                    // line 81
                    echo "                     <td>
                        ";
                    // line 82
                    if ((twig_test_iterable(($context["content"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "checked", [], "array", true, true, false, 82))) {
                        // line 83
                        echo "                           ";
                        if ( !twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "readonly", [], "array", true, true, false, 83)) {
                            // line 84
                            echo "                              ";
                            $context["content"] = twig_array_merge(($context["content"] ?? null), ["readonly" => false]);
                            // line 85
                            echo "                           ";
                        }
                        // line 86
                        echo "                           ";
                        $context["content"] = twig_array_merge(($context["content"] ?? null), ["name" => (((                        // line 87
$context["row_name"] . "[") . $context["col_name"]) . "]"), "id" => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [((((("cb_" .                         // line 88
$context["row_name"]) . "_") . $context["col_name"]) . "_") . (($__internal_compile_13 = ($context["param"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["rand"] ?? null) : null))])]);
                        // line 90
                        echo "                           ";
                        $context["massive_tags"] = [];
                        // line 91
                        echo "                           ";
                        if ((($__internal_compile_14 = ($context["param"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["row_check_all"] ?? null) : null)) {
                            // line 92
                            echo "                              ";
                            $context["massive_tags"] = twig_array_merge(($context["massive_tags"] ?? null), [((("row_" .                             // line 93
$context["row_name"]) . "_") . (($__internal_compile_15 = ($context["param"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["rand"] ?? null) : null))]);
                            // line 95
                            echo "                           ";
                        }
                        // line 96
                        echo "                           ";
                        if ((($__internal_compile_16 = ($context["param"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["col_check_all"] ?? null) : null)) {
                            // line 97
                            echo "                              ";
                            $context["massive_tags"] = twig_array_merge(($context["massive_tags"] ?? null), [((("col_" .                             // line 98
$context["col_name"]) . "_") . (($__internal_compile_17 = ($context["param"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["rand"] ?? null) : null))]);
                            // line 100
                            echo "                           ";
                        }
                        // line 101
                        echo "                           ";
                        if (((($__internal_compile_18 = ($context["param"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["row_check_all"] ?? null) : null) && (($__internal_compile_19 = ($context["param"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["col_check_all"] ?? null) : null))) {
                            // line 102
                            echo "                              ";
                            $context["massive_tags"] = twig_array_merge(($context["massive_tags"] ?? null), [("table_" . (($__internal_compile_20 =                             // line 103
($context["param"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["rand"] ?? null) : null))]);
                            // line 105
                            echo "                           ";
                        }
                        // line 106
                        echo "                           ";
                        $context["content"] = twig_array_merge(($context["content"] ?? null), ["massive_tags" =>                         // line 107
($context["massive_tags"] ?? null)]);
                        // line 109
                        echo "                           ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showCheckbox", [($context["content"] ?? null)]);
                        // line 110
                        echo "
                        ";
                    } else {
                        // line 112
                        echo "                           ";
                        if ( !twig_test_iterable(($context["content"] ?? null))) {
                            // line 113
                            echo "                              ";
                            echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
                            echo "
                           ";
                        }
                        // line 115
                        echo "                        ";
                    }
                    // line 116
                    echo "                     </td>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['col_name'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "
                  ";
                // line 119
                if ((($__internal_compile_21 = ($context["param"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["row_check_all"] ?? null) : null)) {
                    // line 120
                    echo "                     <td>
                        ";
                    // line 121
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showCheckbox", [["title" => __("Check/uncheck all"), "criterion" => ["tag_for_massive" => ((("row_" .                     // line 124
$context["row_name"]) . "_") . (($__internal_compile_22 = ($context["param"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["rand"] ?? null) : null))], "massive_tags" => ("table_" . (($__internal_compile_23 =                     // line 126
($context["param"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["rand"] ?? null) : null)), "id" => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [((("cb_checkall_row_" .                     // line 127
$context["row_name"]) . "_") . (($__internal_compile_24 = ($context["param"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["rand"] ?? null) : null))]), "checked" => ((($__internal_compile_25 = (($__internal_compile_26 =                     // line 128
($context["nb_cb_per_row"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[$context["row_name"]] ?? null) : null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["checked"] ?? null) : null) >= (($__internal_compile_27 = (($__internal_compile_28 = ($context["nb_cb_per_row"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[$context["row_name"]] ?? null) : null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["total"] ?? null) : null))]]);
                    // line 130
                    echo "                     </td>
                  ";
                }
                // line 132
                echo "               ";
            }
            // line 133
            echo "            </tr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row_name'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "
         ";
        // line 136
        if ((($__internal_compile_29 = ($context["param"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["col_check_all"] ?? null) : null)) {
            // line 137
            echo "            <tr>
               <td>";
            // line 138
            echo twig_escape_filter($this->env, __("Select/unselect all"), "html", null, true);
            echo "</td>
               ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["col_name"] => $context["column"]) {
                // line 140
                echo "                  <td>
                     ";
                // line 141
                if (((($__internal_compile_30 = (($__internal_compile_31 = ($context["nb_cb_per_col"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["col_name"]] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["total"] ?? null) : null) >= 2)) {
                    // line 142
                    echo "                        ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showCheckbox", [["title" => __("Check/uncheck all"), "criterion" => ["tag_for_massive" => ((("col_" .                     // line 145
$context["col_name"]) . "_") . (($__internal_compile_32 = ($context["param"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["rand"] ?? null) : null))], "massive_tags" => ("table_" . (($__internal_compile_33 =                     // line 147
($context["param"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["rand"] ?? null) : null)), "id" => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [(("cb_checkall_col_" .                     // line 148
$context["col_name"]) . (($__internal_compile_34 = ($context["param"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["rand"] ?? null) : null))]), "checked" => ((($__internal_compile_35 = (($__internal_compile_36 =                     // line 149
($context["nb_cb_per_col"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[$context["col_name"]] ?? null) : null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["checked"] ?? null) : null) >= (($__internal_compile_37 = (($__internal_compile_38 = ($context["nb_cb_per_col"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[$context["col_name"]] ?? null) : null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["total"] ?? null) : null))]]);
                    // line 151
                    echo "                     ";
                }
                // line 152
                echo "                  </td>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['col_name'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "
               ";
            // line 155
            if ((($__internal_compile_39 = ($context["param"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["row_check_all"] ?? null) : null)) {
                // line 156
                echo "                  <td>
                     ";
                // line 157
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showCheckbox", [["title" => __("Check/uncheck all"), "criterion" => ["tag_for_massive" => ("table_" . (($__internal_compile_40 =                 // line 160
($context["param"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["rand"] ?? null) : null))], "massive_tags" => "", "id" => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [("cb_checkall_table_" . (($__internal_compile_41 =                 // line 163
($context["param"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["rand"] ?? null) : null))])]]);
                // line 165
                echo "                  </td>
               ";
            }
            // line 167
            echo "            </tr>
         ";
        }
        // line 169
        echo "      </tbody>
   </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/checkbox_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 169,  336 => 167,  332 => 165,  330 => 163,  329 => 160,  328 => 157,  325 => 156,  323 => 155,  320 => 154,  313 => 152,  310 => 151,  308 => 149,  307 => 148,  306 => 147,  305 => 145,  303 => 142,  301 => 141,  298 => 140,  294 => 139,  290 => 138,  287 => 137,  285 => 136,  282 => 135,  275 => 133,  272 => 132,  268 => 130,  266 => 128,  265 => 127,  264 => 126,  263 => 124,  262 => 121,  259 => 120,  257 => 119,  254 => 118,  247 => 116,  244 => 115,  238 => 113,  235 => 112,  231 => 110,  228 => 109,  226 => 107,  224 => 106,  221 => 105,  219 => 103,  217 => 102,  214 => 101,  211 => 100,  209 => 98,  207 => 97,  204 => 96,  201 => 95,  199 => 93,  197 => 92,  194 => 91,  191 => 90,  189 => 88,  188 => 87,  186 => 86,  183 => 85,  180 => 84,  177 => 83,  175 => 82,  172 => 81,  169 => 80,  165 => 79,  159 => 76,  152 => 75,  149 => 74,  141 => 72,  139 => 71,  136 => 70,  132 => 69,  127 => 66,  121 => 63,  116 => 62,  113 => 61,  111 => 60,  108 => 59,  101 => 57,  98 => 56,  92 => 54,  89 => 53,  87 => 52,  82 => 51,  79 => 50,  73 => 48,  71 => 47,  66 => 46,  63 => 45,  59 => 44,  55 => 43,  48 => 39,  44 => 38,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/checkbox_matrix.html.twig", "/var/www/html/glpi/templates/components/checkbox_matrix.html.twig");
    }
}
