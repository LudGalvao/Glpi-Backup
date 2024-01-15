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

/* components/itilobject/timeline/todo-list-summary.html.twig */
class __TwigTemplate_60490fe3e05b04dc45cf4e190dbb9542 extends Template
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
        $context["timeline_stats"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTimelineStats", [], "method", false, false, false, 34);
        // line 35
        $context["total_duration"] = (((twig_get_attribute($this->env, $this->source, ($context["timeline_stats"] ?? null), "total_duration", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_0 = ($context["timeline_stats"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["total_duration"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["timeline_stats"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["total_duration"] ?? null) : null)) : (0));
        // line 36
        $context["todo_percent"] = (((twig_get_attribute($this->env, $this->source, ($context["timeline_stats"] ?? null), "percent_done", [], "array", true, true, false, 36) &&  !(null === (($__internal_compile_2 = ($context["timeline_stats"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["percent_done"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["timeline_stats"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["percent_done"] ?? null) : null)) : (0));
        // line 37
        echo "
<div class=\"timeline-item timeline_stats pb-3\">
   <div class=\"mb-2 ms-1 text-muted\">
      ";
        // line 40
        echo twig_escape_filter($this->env, twig_sprintf(__("Total duration: %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration(($context["total_duration"] ?? null))), "html", null, true);
        echo "
   </div>
   <div class=\"d-flex\">
      <span class=\"task-progress-label mx-2\">
         ";
        // line 44
        echo twig_escape_filter($this->env, ($context["todo_percent"] ?? null), "html", null, true);
        echo "%
      </span>
      <div class=\"progress mt-1\" style=\"max-width: 260px\">
         <div class=\"progress-bar progress-bar-striped timeline-progress\" role=\"progressbar\" style=\"width: ";
        // line 47
        echo twig_escape_filter($this->env, ($context["todo_percent"] ?? null), "html", null, true);
        echo "%;\"
              aria-valuenow=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["todo_percent"] ?? null), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/todo-list-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 48,  64 => 47,  58 => 44,  51 => 40,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/todo-list-summary.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/todo-list-summary.html.twig");
    }
}
