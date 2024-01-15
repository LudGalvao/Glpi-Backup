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

/* pages/self-service/home.html.twig */
class __TwigTemplate_56c0e206caeeda264d6e5cb9d43dc53b extends Template
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
        if (twig_length_filter($this->env, ($context["password_alert"] ?? null))) {
            // line 35
            echo "   <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
      <div class=\"d-flex mb-2\">
         <div>
            <i class=\"fas fa-exclamation-triangle me-1\"></i>
         </div>
         <div>
            ";
            // line 41
            echo twig_escape_filter($this->env, ($context["password_alert"] ?? null), "html", null, true);
            echo "
         </div>
      </div>

      <div class=\"btn-list\">
         <a class=\"btn btn-outline-warning\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/updatepassword.php"), "html", null, true);
            echo " \">
            ";
            // line 47
            echo twig_escape_filter($this->env, __("Update my password"), "html", null, true);
            echo "
         </a>
      </div>
   </div>
";
        }
        // line 52
        echo "
<table class=\"central\">
   ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::DISPLAY_CENTRAL")), "html", null, true);
        echo "
</table>

";
        // line 57
        $context["optional_grid_item_keys"] = ["survey_list", "reminder_list", "rss_feed", "kb_popular", "kb_recent", "kb_lastupdate"];
        // line 60
        $context["grid_items"] = [        // line 61
($context["ticket_summary"] ?? null)];
        // line 63
        echo "
";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["optional_grid_item_keys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["optional_grid_item_key"]) {
            // line 65
            echo "   ";
            $context["item_content"] = (($__internal_compile_0 = $context) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["optional_grid_item_key"]] ?? null) : null);
            // line 66
            echo "   ";
            if ( !twig_test_empty(($context["item_content"] ?? null))) {
                // line 67
                echo "      ";
                $context["grid_items"] = twig_array_merge(($context["grid_items"] ?? null), [(("<div class=\"card\">" .                 // line 68
($context["item_content"] ?? null)) . "</div>")]);
                // line 70
                echo "   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optional_grid_item_key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
";
        // line 73
        echo twig_include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 74
($context["grid_items"] ?? null)], false);
        // line 75
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/self-service/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 75,  113 => 74,  112 => 73,  109 => 72,  102 => 70,  100 => 68,  98 => 67,  95 => 66,  92 => 65,  88 => 64,  85 => 63,  83 => 61,  82 => 60,  80 => 57,  74 => 54,  70 => 52,  62 => 47,  58 => 46,  50 => 41,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/self-service/home.html.twig", "/var/www/html/glpi/templates/pages/self-service/home.html.twig");
    }
}
