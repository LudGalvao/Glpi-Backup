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

/* components/itilobject/timeline/timeline_item_header_badges.html.twig */
class __TwigTemplate_134df585a57297fad4a3a0b47f034fde extends Template
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
        $context["timeline_display_date"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_date_format");
        // line 35
        echo "<span class=\"badge user-select-auto text-wrap d-none d-md-block\">
   ";
        // line 36
        ob_start(function () { return ''; });
        // line 37
        echo "      <span
         ";
        // line 38
        if ((($context["timeline_display_date"] ?? null) == twig_constant("Config::TIMELINE_RELATIVE_DATE"))) {
            // line 39
            echo "            title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null)), "html", null, true);
            echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
         ";
        }
        // line 42
        echo "      >
         <i class=\"far fa-clock me-1\"></i>
         <a href=\"#";
        // line 44
        echo twig_escape_filter($this->env, ($context["anchor"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 45
        if ((($context["timeline_display_date"] ?? null) == twig_constant("Config::TIMELINE_RELATIVE_DATE"))) {
            // line 46
            echo "               ";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_creation"] ?? null)), "html", null, true);
            echo "
            ";
        } else {
            // line 48
            echo "               ";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null)), "html", null, true);
            echo "
            ";
        }
        // line 50
        echo "         </a>
      </span>
   ";
        $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "
   ";
        // line 54
        if ((($context["users_id"] ?? null) > 0)) {
            // line 55
            echo "      ";
            ob_start(function () { return ''; });
            // line 56
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 57
($context["users_id"] ?? null), "user_object" =>             // line 58
($context["user_object"] ?? null), "enable_anonymization" =>             // line 59
($context["anonym_user"] ?? null)], false);
            // line 60
            echo "
      ";
            $context["creator_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            echo "
      ";
            // line 63
            echo twig_sprintf(__("Created: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["creator_span"] ?? null));
            echo "
   ";
        } else {
            // line 65
            echo "      ";
            echo twig_sprintf(__("Created: %1\$s"), ($context["date_span"] ?? null));
            echo "
   ";
        }
        // line 67
        echo "</span>

";
        // line 69
        if (((($context["users_id_editor"] ?? null) > 0) && (($context["date_creation"] ?? null) != ($context["date_mod"] ?? null)))) {
            // line 70
            echo "   <span class=\"badge user-select-auto text-wrap ms-1 d-none d-md-block\">
      ";
            // line 71
            ob_start(function () { return ''; });
            // line 72
            echo "         <span
            ";
            // line 73
            if ((($context["timeline_display_date"] ?? null) == twig_constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 74
                echo "               title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null)), "html", null, true);
                echo "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
            ";
            }
            // line 77
            echo "         >
            <i class=\"far fa-clock me-1\"></i>
            ";
            // line 79
            if ((($context["timeline_display_date"] ?? null) == twig_constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 80
                echo "               ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_mod"] ?? null)), "html", null, true);
                echo "
            ";
            } else {
                // line 82
                echo "               ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null)), "html", null, true);
                echo "
            ";
            }
            // line 84
            echo "         </span>
      ";
            $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 86
            echo "
      ";
            // line 87
            $context["is_current_editor"] = (($context["users_id_editor"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 88
            echo "      ";
            $context["anonym_editor"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_editor"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
            // line 89
            echo "      ";
            ob_start(function () { return ''; });
            // line 90
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 91
($context["users_id_editor"] ?? null), "user_object" => (((            // line 92
($context["users_id"] ?? null) == ($context["users_id_editor"] ?? null))) ? (($context["user_object"] ?? null)) : (null)), "enable_anonymization" =>             // line 93
($context["anonym_editor"] ?? null)], false);
            // line 94
            echo "
      ";
            $context["editor_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 96
            echo "
      ";
            // line 97
            echo twig_sprintf(__("Last update: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["editor_span"] ?? null));
            echo "
   </span>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header_badges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 97,  184 => 96,  180 => 94,  178 => 93,  177 => 92,  176 => 91,  174 => 90,  171 => 89,  168 => 88,  166 => 87,  163 => 86,  159 => 84,  153 => 82,  147 => 80,  145 => 79,  141 => 77,  134 => 74,  132 => 73,  129 => 72,  127 => 71,  124 => 70,  122 => 69,  118 => 67,  112 => 65,  107 => 63,  104 => 62,  100 => 60,  98 => 59,  97 => 58,  96 => 57,  94 => 56,  91 => 55,  89 => 54,  86 => 53,  81 => 50,  75 => 48,  69 => 46,  67 => 45,  63 => 44,  59 => 42,  52 => 39,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header_badges.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/timeline_item_header_badges.html.twig");
    }
}
