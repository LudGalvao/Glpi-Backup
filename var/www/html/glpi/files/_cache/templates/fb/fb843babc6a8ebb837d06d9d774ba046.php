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

/* components/itilobject/timeline/timeline_item_header.html.twig */
class __TwigTemplate_dbe49921db27e8148b8cae6e71249b61 extends Template
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
        $context["anchor"] = (((($__internal_compile_0 = ($context["entry"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) . "_") . (($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null));
        // line 35
        echo "
<div class=\"d-flex timeline-header\" id=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["anchor"] ?? null), "html", null, true);
        echo "\">
   <div class=\"d-flex creator\">
      ";
        // line 38
        echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 39
($context["users_id"] ?? null), "user_object" =>         // line 40
($context["user_object"] ?? null), "date_creation" =>         // line 41
($context["date_creation"] ?? null), "date_mod" =>         // line 42
($context["date_mod"] ?? null), "users_id_editor" => (($__internal_compile_2 =         // line 43
($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["users_id_editor"] ?? null) : null), "anchor" =>         // line 44
($context["anchor"] ?? null), "anonym_user" =>         // line 45
($context["anonym_user"] ?? null)], false);
        // line 46
        echo "
   </div>

   <div class=\"d-flex ms-auto timeline-item-buttons\">
      ";
        // line 50
        $context["actions"] = [];
        // line 51
        echo "      ";
        if ((((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["can_edit"] ?? null) : null) &&  !($context["status_closed"] ?? null)) &&  !twig_in_filter((($__internal_compile_4 = ($context["entry"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null), ["Document_Item", "Assign"]))) {
            // line 52
            echo "         ";
            ob_start(function () { return ''; });
            // line 53
            echo "            <li>
               <a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                  <i class=\"fa-fw ti ti-edit\"></i>
                  <span>";
            // line 56
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</span>
               </a>
            </li>
         ";
            $context["edit_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            echo "         ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["edit_btn" => ($context["edit_btn"] ?? null)]);
            // line 61
            echo "      ";
        }
        // line 62
        echo "
      ";
        // line 63
        if (($context["is_private"] ?? null)) {
            // line 64
            echo "         <span class=\"is-private ms-2\" title=\"";
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"ti ti-lock\" aria-label=\"";
            // line 66
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"></i>
         </span>
      ";
        }
        // line 69
        echo "
      ";
        // line 70
        if ((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["can_promote"] ?? null) : null)) {
            // line 71
            echo "         ";
            if (((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["sourceof_items_id"] ?? null) : null) > 0)) {
                // line 72
                echo "            ";
                ob_start(function () { return ''; });
                // line 73
                echo "               <li>
                  <a class=\"dropdown-item text-warning\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["sourceof_items_id"] ?? null) : null)), "html", null, true);
                echo "\">
                     <i class=\"fa-fw ti ti-git-branch\"></i>
                     <span>";
                // line 76
                echo twig_escape_filter($this->env, twig_sprintf(__("%s was already promoted"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_8 = ($context["entry"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["type"] ?? null) : null))), "html", null, true);
                echo "</span>
                  </a>
               </li>
            ";
                $context["promoted_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 80
                echo "            ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["promoted_btn" => ($context["promoted_btn"] ?? null)]);
                // line 81
                echo "         ";
            } else {
                // line 82
                echo "            ";
                $context["promote_url"] = ("?_promoted_fup_id=" . (($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null));
                // line 83
                echo "            ";
                if (((($__internal_compile_10 = ($context["entry"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null) === "TicketTask")) {
                    // line 84
                    echo "               ";
                    $context["promote_url"] = ("?_promoted_task_id=" . (($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null));
                    // line 85
                    echo "            ";
                }
                // line 86
                echo "
            ";
                // line 87
                ob_start(function () { return ''; });
                // line 88
                echo "               <li>
                  <a class=\"dropdown-item\" href=\"";
                // line 89
                echo twig_escape_filter($this->env, ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket") . ($context["promote_url"] ?? null)), "html", null, true);
                echo "\">
                     <i class=\"fa-fw ti ti-git-branch\"></i>
                     <span>";
                // line 91
                echo twig_escape_filter($this->env, __("Promote to Ticket"), "html", null, true);
                echo "</span>
                  </a>
               </li>
            ";
                $context["promote_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 95
                echo "            ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["promote_btn" => ($context["promote_btn"] ?? null)]);
                // line 96
                echo "         ";
            }
            // line 97
            echo "      ";
        }
        // line 98
        echo "
      ";
        // line 99
        if (twig_length_filter($this->env, ($context["actions"] ?? null))) {
            // line 100
            echo "         <div class=\"dropdown ms-2\">
            <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
            // line 101
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
               <i class=\"ti ti-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
            // line 104
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\">
               ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 106
                echo "                  ";
                echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                echo "
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "            </ul>
         </div>
      ";
        }
        // line 111
        echo "   </div>

   <button class=\"btn btn-sm btn-ghost-secondary close-edit-content d-none ms-auto\">
      <i class=\"ti ti-x\"></i>
   </button>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 111,  212 => 108,  203 => 106,  199 => 105,  195 => 104,  189 => 101,  186 => 100,  184 => 99,  181 => 98,  178 => 97,  175 => 96,  172 => 95,  165 => 91,  160 => 89,  157 => 88,  155 => 87,  152 => 86,  149 => 85,  146 => 84,  143 => 83,  140 => 82,  137 => 81,  134 => 80,  127 => 76,  122 => 74,  119 => 73,  116 => 72,  113 => 71,  111 => 70,  108 => 69,  102 => 66,  96 => 64,  94 => 63,  91 => 62,  88 => 61,  85 => 60,  78 => 56,  73 => 53,  70 => 52,  67 => 51,  65 => 50,  59 => 46,  57 => 45,  56 => 44,  55 => 43,  54 => 42,  53 => 41,  52 => 40,  51 => 39,  50 => 38,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/timeline_item_header.html.twig");
    }
}
