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

/* components/kanban/kanban.html.twig */
class __TwigTemplate_9d8aa9172950ac2e3252690d7da94690 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/kanban/kanban.html.twig", 34)->unwrap();
        // line 35
        $macros["modals"] = $this->macros["modals"] = $this->loadTemplate("components/form/modals_macros.html.twig", "components/kanban/kanban.html.twig", 35)->unwrap();
        // line 36
        echo "
";
        // line 37
        if ( !array_key_exists("rights", $context)) {
            // line 38
            echo "   ";
            $context["rights"] = ["create_item" => false, "delete_item" => false, "create_column" => false, "modify_view" => false, "order_card" => false, "create_card_limited_columns" => [0]];
        }
        // line 47
        echo "
<div id=\"kanban\" class=\"kanban\"></div>
";
        // line 49
        echo twig_call_macro($macros["modals"], "macro_modal", ["", "", ["id" => "kanban-modal"]], 49, $context, $this->getSourceContext());
        // line 51
        echo "

";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supported_itemtypes"] ?? null));
        foreach ($context['_seq'] as $context["supported_itemtype"] => $context["info"]) {
            // line 54
            echo "   <template id=\"kanban-teammember-item-dropdown-";
            echo twig_escape_filter($this->env, $context["supported_itemtype"], "html", null, true);
            echo "\">
      ";
            // line 55
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["role", null, twig_get_attribute($this->env, $this->source, $context["info"], "team_roles", [], "any", false, false, false, 55), __("Role")], 55, $context, $this->getSourceContext());
            echo "
      ";
            // line 56
            echo twig_call_macro($macros["fields"], "macro_dropdownItemsFromItemtypes", ["add-teammember", "", ["itemtypes" => twig_get_attribute($this->env, $this->source,             // line 57
$context["info"], "team_itemtypes", [], "any", false, false, false, 57)]], 56, $context, $this->getSourceContext());
            // line 58
            echo "
   </template>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['supported_itemtype'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
<script>
   \$(function(){
      // Create Kanban
      var kanban = new GLPIKanban({
         element: \"#";
        // line 66
        echo twig_escape_filter($this->env, ((array_key_exists("kanban_id", $context)) ? (_twig_default_filter(($context["kanban_id"] ?? null), "kanban")) : ("kanban")), "html", null, true);
        echo "\",
         rights: ";
        // line 67
        echo json_encode(($context["rights"] ?? null));
        echo ",
         supported_itemtypes: ";
        // line 68
        echo json_encode(($context["supported_itemtypes"] ?? null));
        echo ",
         max_team_images: 3,
         column_field: ";
        // line 70
        echo json_encode(($context["column_field"] ?? null));
        echo ",
         background_refresh_interval: ";
        // line 71
        echo twig_escape_filter($this->env, ((array_key_exists("background_refresh_interval", $context)) ? (_twig_default_filter(($context["background_refresh_interval"] ?? null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpirefresh_views"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpirefresh_views"))), "html", null, true);
        echo ",
         item: ";
        // line 72
        echo json_encode(($context["item"] ?? null));
        echo ",
         supported_filters: ";
        // line 73
        echo json_encode(($context["supported_filters"] ?? null));
        echo ",
         display_initials: ";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("display_users_initials", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")), "html", null, true);
        echo ",
      });
      // Create kanban elements and add data
      kanban.init();
   });
</script>
";
    }

    public function getTemplateName()
    {
        return "components/kanban/kanban.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 74,  119 => 73,  115 => 72,  111 => 71,  107 => 70,  102 => 68,  98 => 67,  94 => 66,  87 => 61,  79 => 58,  77 => 57,  76 => 56,  72 => 55,  67 => 54,  63 => 53,  59 => 51,  57 => 49,  53 => 47,  49 => 38,  47 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/kanban/kanban.html.twig", "/var/www/html/glpi/templates/components/kanban/kanban.html.twig");
    }
}
