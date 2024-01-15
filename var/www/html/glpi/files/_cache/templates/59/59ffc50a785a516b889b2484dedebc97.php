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

/* pages/admin/rules_list.html.twig */
class __TwigTemplate_847115c297d8fd1840242ae566ea76f9 extends Template
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
<div class=\"center mb-3\">
   <a class=\"btn btn-primary me-2\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/rule.backup.php?action=import"), "html", null, true);
        echo "\">
      <i class=\"fas fa-upload\"></i>
      <span>";
        // line 37
        echo twig_escape_filter($this->env, _x("button", "Import"), "html", null, true);
        echo "</span>
   </a>
   <a class=\"btn btn-primary me-2\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/rule.backup.php?action=export"), "html", null, true);
        echo "\">
      <i class=\"fas fa-download\"></i>
      <span>";
        // line 41
        echo twig_escape_filter($this->env, _x("button", "Export"), "html", null, true);
        echo "</span>
   </a>
</div>

<div class=\"container px-4\">
   <div class=\"row g-3 justify-content-evenly\">
      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rules_group"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rules_block"]) {
            // line 48
            echo "         <div class=\"col-12 ";
            echo (((twig_length_filter($this->env, ($context["rules_group"] ?? null)) > 2)) ? ("col-xxl-3") : ("col-xxl-5"));
            echo "\">
            <div class=\"card\">
               <div class=\"card-header\">
                  <h3>";
            // line 51
            echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["rules_block"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null), "html", null, true);
            echo "</h3>
               </div>
               <div class=\"list-group list-group-flush\">
                  ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = $context["rules_block"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["entries"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 55
                echo "                     <a class=\"list-group-item list-group-item-action\" href=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["rule"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["link"] ?? null) : null), "html", null, true);
                echo "\">
                        <i class=\"fa-fw ";
                // line 56
                echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["rule"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["icon"] ?? null) : null), "html", null, true);
                echo " me-1\"></i>
                        <span>";
                // line 57
                echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["rule"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["label"] ?? null) : null), "html", null, true);
                echo "</span>
                     </a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "               </div>
            </div>
         </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/rules_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 64,  104 => 60,  95 => 57,  91 => 56,  86 => 55,  82 => 54,  76 => 51,  69 => 48,  65 => 47,  56 => 41,  51 => 39,  46 => 37,  41 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/admin/rules_list.html.twig", "/var/www/html/glpi/templates/pages/admin/rules_list.html.twig");
    }
}
