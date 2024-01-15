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

/* components/table.html.twig */
class __TwigTemplate_dcd4ef89b4049e217d56b83892e1aa6c extends Template
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
<div class=\"table-responsive card-table\">
   <table class=\"";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
      <thead>
      ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["header_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["header_row"]) {
            // line 38
            echo "         <tr>
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["header_row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 40
                echo "               ";
                if ( !twig_test_iterable($context["header"])) {
                    // line 41
                    echo "                  ";
                    $context["header"] = ["content" => $context["header"]];
                    // line 42
                    echo "               ";
                }
                // line 43
                echo "               <th colspan=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["header"], "colspan", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["header"], "colspan", [], "any", false, false, false, 43), 1)) : (1)), "html", null, true);
                echo "\" style=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["header"], "style", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["header"], "style", [], "any", false, false, false, 43), "")) : ("")), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 43);
                echo "</th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "      </thead>
      <tbody>
      ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 50
            echo "         <tr class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "class", [], "any", true, true, false, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "class", [], "any", false, false, false, 50), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "values", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 52
                echo "               ";
                if ( !twig_test_iterable($context["value"])) {
                    // line 53
                    echo "                  ";
                    $context["value"] = ["content" => $context["value"]];
                    // line 54
                    echo "               ";
                }
                // line 55
                echo "               <td colspan=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "colspan", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "colspan", [], "any", false, false, false, 55), 1)) : (1)), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "class", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "class", [], "any", false, false, false, 55), "")) : ("")), "html", null, true);
                echo "\" style=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "style", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "style", [], "any", false, false, false, 55), "")) : ("")), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["value"], "content", [], "any", false, false, false, 55);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "      </tbody>
   </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 59,  127 => 57,  112 => 55,  109 => 54,  106 => 53,  103 => 52,  99 => 51,  94 => 50,  90 => 49,  86 => 47,  79 => 45,  66 => 43,  63 => 42,  60 => 41,  57 => 40,  53 => 39,  50 => 38,  46 => 37,  41 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/table.html.twig", "/var/www/html/glpi/templates/components/table.html.twig");
    }
}
