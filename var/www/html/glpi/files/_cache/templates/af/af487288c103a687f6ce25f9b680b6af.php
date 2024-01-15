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

/* components/dates_timeline.html.twig */
class __TwigTemplate_817a71567d101ffc641982f4a31b0d9f extends Template
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
<div class=\"dates_timelines\">
   ";
        // line 35
        if ((twig_length_filter($this->env, ($context["title"] ?? null)) > 0)) {
            // line 36
            echo "      <h2 class=\"header\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h2>
   ";
        }
        // line 38
        echo "
   <ul>
      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 41
            echo "         ";
            if (((($__internal_compile_0 = $context["data"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["timestamp"] ?? null) : null) != 0)) {
                // line 42
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["data"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["class"] ?? null) : null), "html", null, true);
                echo "\">
               &nbsp;
               <time title=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_2 = $context["data"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["date"] ?? null) : null)), "html", null, true);
                echo "\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
                  ";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime((($__internal_compile_3 = $context["data"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["date"] ?? null) : null)), "html", null, true);
                echo "
               </time>
               <span class=\"dot\"></span>
               <label>";
                // line 49
                echo (($__internal_compile_4 = $context["data"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["label"] ?? null) : null);
                echo "</label>
            </li>
         ";
            }
            // line 52
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "   </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/dates_timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 53,  83 => 52,  77 => 49,  71 => 46,  66 => 44,  60 => 42,  57 => 41,  53 => 40,  49 => 38,  43 => 36,  41 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/dates_timeline.html.twig", "/var/www/html/glpi/templates/components/dates_timeline.html.twig");
    }
}
