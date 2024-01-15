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

/* @formcreator/pages/form.formanswer.html.twig */
class __TwigTemplate_5c0870df74bcc2f2196dc3da14b9f4ac extends Template
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
        // line 30
        echo "
";
        // line 31
        if ((($context["total_count"] ?? null) < 1)) {
            // line 32
            echo "   <div class=\"alert alert-info\">
      ";
            // line 33
            echo twig_escape_filter($this->env, __("No form answer yet", "formcreator"), "html", null, true);
            echo "
   </div>
";
        } else {
            // line 36
            echo "   ";
            $context["criteria"] = (("?criteria[0][field]=3&criteria[0][searchtype]=equals&criteria[0][value]=" . twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getID", [], "method", false, false, false, 36)) . "");
            // line 37
            echo "   <div class=\"center my-4\">
      ";
            // line 38
            echo twig_escape_filter($this->env, twig_sprintf(__("%s latest items", "formcreator"), ($context["total_count"] ?? null)), "html", null, true);
            echo "
      <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath("PluginFormcreatorFormAnswer") . ($context["criteria"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, __("See all", "formcreator"), "html", null, true);
            echo "</a>
   </div>
   <div class=\"table-responsive\">
      <table class=\"table table-hover\">
         <thead>
            <tr>
               <th>";
            // line 45
            echo twig_escape_filter($this->env, __("ID"), "html", null, true);
            echo "</th>
               <th>";
            // line 46
            echo twig_escape_filter($this->env, __("Name"), "html", null, true);
            echo "</th>
               <th>";
            // line 47
            echo twig_escape_filter($this->env, __("Form"), "html", null, true);
            echo "</th>
               <th>";
            // line 48
            echo twig_escape_filter($this->env, __("Requester", "Requesters", 1), "html", null, true);
            echo "</th>
               <th>";
            // line 49
            echo twig_escape_filter($this->env, __("Creation date"), "html", null, true);
            echo "</th>
            </tr>
         </thead>
         <tbody>
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form_answers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 54
                echo "               <tr>
                  <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                  <td>";
                // line 56
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("PluginFormcreatorFormAnswer", twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 56));
                echo "</a></td>
                  <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "form_name", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                  <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "requester_name", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                  <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "request_date", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
               </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "         </tbody>
      </table>
   </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@formcreator/pages/form.formanswer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 62,  118 => 59,  114 => 58,  110 => 57,  106 => 56,  102 => 55,  99 => 54,  95 => 53,  88 => 49,  84 => 48,  80 => 47,  76 => 46,  72 => 45,  61 => 39,  57 => 38,  54 => 37,  51 => 36,  45 => 33,  42 => 32,  40 => 31,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/pages/form.formanswer.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/pages/form.formanswer.html.twig");
    }
}
