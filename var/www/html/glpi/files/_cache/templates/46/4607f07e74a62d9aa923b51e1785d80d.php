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

/* components/itilobject/answer.html.twig */
class __TwigTemplate_8f604d21f4a8fce4abec1d4dae732a5a extends Template
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
<div id=\"new-itilobject-form\" class=\"ms-auto ps-3\">
   ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timeline_itemtypes"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["timeline_itemtype"]) {
            // line 36
            echo "      ";
            $context["show_kb_sol"] = ((($context["load_kb_sol"] ?? null) > 0) && (twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "type", [], "any", false, false, false, 36) == "ITILSolution"));
            // line 37
            echo "      <div class=\"timeline-item mb-3  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "type", [], "any", false, false, false, 37), "html", null, true);
            echo " collapse ";
            echo ((($context["show_kb_sol"] ?? null)) ? ("show") : (""));
            echo "\"
        id=\"new-";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 38), "html", null, true);
            echo "-block\" aria-expanded=\"false\" data-bs-parent=\"#new-itilobject-form\">
         <div class=\"row\">
            <div class=\"col-auto order-last d-none d-md-block\">
               ";
            // line 41
            echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")], false);
            echo "
            </div>
            <div class=\"col\">
               <div class=\"row timeline-content t-right card mt-4\">
                  <div class=\"card-body\">
                     <div class=\"clearfix\">
                        <button class=\"btn btn-sm btn-ghost-secondary float-end mb-1 close-itil-answer\"
                              data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 48), "html", null, true);
            echo "-block\">
                           <i class=\"fa-lg ti ti-x\"></i>
                        </button>
                     </div>
                     <div>
                        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "template", [], "any", true, true, false, 53)) {
                // line 54
                echo "                           ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "template", [], "any", false, false, false, 54), ["item" =>                 // line 55
($context["item"] ?? null), "subitem" => twig_get_attribute($this->env, $this->source,                 // line 56
$context["timeline_itemtype"], "item", [], "any", false, false, false, 56), "kb_id_toload" =>                 // line 57
($context["load_kb_sol"] ?? null)]);
                // line 58
                echo "
                        ";
            } else {
                // line 60
                echo "                           ";
                $context["sf_options"] = ["parent" => ($context["item"] ?? null)];
                // line 61
                echo "                           ";
                if (($context["show_kb_sol"] ?? null)) {
                    // line 62
                    echo "                              ";
                    $context["sf_options"] = twig_array_merge(($context["sf_options"] ?? null), ["kb_id_toload" =>                     // line 63
($context["load_kb_sol"] ?? null)]);
                    // line 65
                    echo "                           ";
                }
                // line 66
                echo "                           ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "item", [], "any", false, false, false, 66), "showForm", [ -1, ($context["sf_options"] ?? null)], "method", false, false, false, 66), "html", null, true);
                echo "
                        ";
            }
            // line 68
            echo "                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/answer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 75,  123 => 68,  117 => 66,  114 => 65,  112 => 63,  110 => 62,  107 => 61,  104 => 60,  100 => 58,  98 => 57,  97 => 56,  96 => 55,  94 => 54,  92 => 53,  84 => 48,  74 => 41,  68 => 38,  61 => 37,  58 => 36,  41 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/answer.html.twig", "/var/www/html/glpi/templates/components/itilobject/answer.html.twig");
    }
}
