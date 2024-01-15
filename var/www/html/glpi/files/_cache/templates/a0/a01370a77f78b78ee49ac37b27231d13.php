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

/* components/user/link_with_tooltip.html.twig */
class __TwigTemplate_be5af1b2d41c2b6be836d0d04ea67643 extends Template
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
        $context["rand"] = twig_random($this->env);
        // line 35
        echo "
<span id=\"user_";
        // line 36
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
    <i class=\"ti ti-user ms-1\"></i>
    ";
        // line 38
        echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", ($context["users_id"] ?? null), ["enable_anonymization" => ($context["enable_anonymization"] ?? null)]);
        echo "
</span>

";
        // line 41
        if ( !($context["enable_anonymization"] ?? null)) {
            // line 42
            echo "    ";
            $context["user"] = (($context["user_object"]) ?? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))));
            // line 43
            echo "    ";
            if (( !(null === ($context["user"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "canView", [], "method", false, false, false, 43))) {
                // line 44
                echo "        ";
                $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 44);
                // line 45
                echo "        ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFriendlyName", [], "method", false, false, false, 45))]);
                // line 46
                echo "        ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 46)]);
                // line 47
                echo "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                 // line 53
($context["user_fields"] ?? null), "user_object" =>                 // line 54
($context["user"] ?? null)], false), ["applyto" => ("user_" .                 // line 59
($context["rand"] ?? null))]]);
                // line 63
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "components/user/link_with_tooltip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 63,  77 => 59,  76 => 54,  75 => 53,  73 => 47,  70 => 46,  67 => 45,  64 => 44,  61 => 43,  58 => 42,  56 => 41,  50 => 38,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/user/link_with_tooltip.html.twig", "/var/www/html/glpi/templates/components/user/link_with_tooltip.html.twig");
    }
}
