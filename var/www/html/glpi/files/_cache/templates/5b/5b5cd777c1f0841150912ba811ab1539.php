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

/* components/itilobject/timeline/pending_reasons_messages.html.twig */
class __TwigTemplate_ff609985898af1336c90972e02c5e616 extends Template
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
        $context["pending_reason_item_parent"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["item"] ?? null)]);
        // line 35
        $context["pending_item"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(((($__internal_compile_0 = ($context["entry"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) . "::getById"), [(($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null)]);
        // line 36
        $context["pending_reason_item"] = ((($context["pending_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["pending_item"] ?? null)])) : (false));
        // line 37
        $context["pending_reason"] = ((($context["pending_reason_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [(($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["pendingreasons_id"] ?? null) : null)])) : (false));
        // line 38
        echo "
";
        // line 39
        if (($context["pending_reason"] ?? null)) {
            // line 40
            echo "   <span class=\"badge bg-blue-lt\">
      <i class=\"fas fa-pause me-1\"></i>
      ";
            // line 42
            echo twig_sprintf(__("Pending: %s"), twig_get_attribute($this->env, $this->source, ($context["pending_reason"] ?? null), "getLink", [], "method", false, false, false, 42));
            echo "

      ";
            // line 44
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastPendingForItem", [            // line 45
($context["item"] ?? null),             // line 46
($context["pending_item"] ?? null)])) {
                // line 48
                echo "         ";
                $context["next_bump"] = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getNextFollowupDate", [], "method", false, false, false, 48);
                // line 49
                echo "         ";
                if (($context["next_bump"] ?? null)) {
                    // line 50
                    echo "
            <i class=\"fas fa-clock ms-2\" title=\"";
                    // line 51
                    echo twig_escape_filter($this->env, twig_sprintf(__("Next automatic follow-up scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [($context["next_bump"] ?? null)])), "html", null, true);
                    echo "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 54
                echo "
         ";
                // line 55
                $context["resolve"] = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getAutoResolvedate", [], "method", false, false, false, 55);
                // line 56
                echo "         ";
                if (($context["resolve"] ?? null)) {
                    // line 57
                    echo "            <i class=\"fas fa-stop ms-2\" title=\"";
                    echo twig_escape_filter($this->env, twig_sprintf(__("Automatic resolution scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [($context["resolve"] ?? null)])), "html", null, true);
                    echo "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 60
                echo "      ";
            }
            // line 61
            echo "   </span>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/pending_reasons_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 61,  96 => 60,  89 => 57,  86 => 56,  84 => 55,  81 => 54,  75 => 51,  72 => 50,  69 => 49,  66 => 48,  64 => 46,  63 => 45,  62 => 44,  57 => 42,  53 => 40,  51 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/pending_reasons_messages.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/pending_reasons_messages.html.twig");
    }
}
