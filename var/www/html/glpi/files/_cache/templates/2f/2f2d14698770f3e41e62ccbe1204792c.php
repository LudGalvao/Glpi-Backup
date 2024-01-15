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

/* components/itilobject/timeline/pending_reasons.html.twig */
class __TwigTemplate_2ca8c8813e4c8942282119a087449586 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/pending_reasons.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["pending_item"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["subitem"] ?? null), true]);
        // line 37
        if (((twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "isNewItem", [], "method", false, false, false, 37) || ($context["pending_item"] ?? null)) || $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastTimelineItem", [($context["subitem"] ?? null)]))) {
            // line 38
            echo "   <div class=\"row\">
      <div class=\"col-12 col-sm-4\" title=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("PendingReason"), "html", null, true);
            echo "\"
           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
         ";
            // line 41
            $context["pendingreasons_lbl"] = ('' === $tmp = "            <i class=\"fas fa-tags fa-fw\"></i>
         ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 44
            echo "         ";
            ob_start(function () { return ''; });
            // line 45
            echo "            <script>
               var myCollapsible = \$('#pending-reasons-setup-";
            // line 46
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "')[0];
               myCollapsible.addEventListener('show.bs.collapse', function () {
                  \$('#pending-reasons-control-";
            // line 48
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').addClass('flex-fill');
               });
               myCollapsible.addEventListener('hide.bs.collapse', function () {
                  \$('#pending-reasons-control-";
            // line 51
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').removeClass('flex-fill');
               });
            </script>
         ";
            $context["pending_reasons_id_script"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 55
            echo "         ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["PendingReason", "pendingreasons_id", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,             // line 58
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["pendingreasons_id"] ?? null) : null),             // line 59
($context["pendingreasons_lbl"] ?? null), ["label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 63
($context["rand"] ?? null), "mb" => "", "hide_if_no_elements" => true, "addicon" => false, "comments" => false, "width" => "95%", "field_class" => "flex-nowrap", "add_field_html" =>             // line 70
($context["pending_reasons_id_script"] ?? null)]], 55, $context, $this->getSourceContext());
            // line 72
            echo "
         <script>
            \$('#dropdown_pendingreasons_id";
            // line 74
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').change(function() {
               var pending_val = \$(this).val();
               if (pending_val > 0) {
                  \$('#pending-reasons-more_options_";
            // line 77
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').addClass('show');
                  \$.ajax({
                     url: '";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/pendingreason.php"), "html", null, true);
            echo "',
                     type: 'POST',
                     data: {
                        pendingreasons_id: pending_val
                     }
                  }).done(function(data) {
                     \$('#dropdown_followup_frequency";
            // line 85
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "')
                        .val(data.followup_frequency)
                        .trigger('change');
                     \$('#dropdown_followups_before_resolution";
            // line 88
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "')
                        .val(data.followups_before_resolution)
                        .trigger('change');
                  });
               } else {
                  \$('#pending-reasons-more_options_";
            // line 93
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').removeClass('show');
               }
            });
         </script>
      </div>

      <div class=\"collapse col-12 col-sm-8\" id=\"pending-reasons-more_options_";
            // line 99
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
         <div class=\"row\">
            <div class=\"col-12 col-sm-6\" title=\"";
            // line 101
            echo twig_escape_filter($this->env, __("Automatic follow-up"), "html", null, true);
            echo "\"
                  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
               ";
            // line 103
            $context["pendingreasons_frequency_field"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::displayFollowupFrequencyfield", [(($__internal_compile_1 = twig_get_attribute($this->env, $this->source,             // line 104
($context["pending_item"] ?? null), "fields", [], "any", false, false, false, 104)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["followup_frequency"] ?? null) : null), "", ["rand" =>             // line 107
($context["rand"] ?? null)], false]);
            // line 111
            echo "               ";
            $context["pendingreasons_frequency_lbl"] = ('' === $tmp = "                  <i class=\"fas fa-redo fa-fw\"></i>
               ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 114
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_field", ["followup_frequency",             // line 116
($context["pendingreasons_frequency_field"] ?? null),             // line 117
($context["pendingreasons_frequency_lbl"] ?? null), ["field_class" => "", "label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 122
($context["rand"] ?? null), "mb" => ""]], 114, $context, $this->getSourceContext());
            // line 125
            echo "
            </div>
            <div class=\"col-12 col-sm-6\" title=\"";
            // line 127
            echo twig_escape_filter($this->env, __("Automatic resolution"), "html", null, true);
            echo "\"
                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
               ";
            // line 129
            $context["pendingreasons_resolution_field"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::displayFollowupsNumberBeforeResolutionField", [(($__internal_compile_2 = twig_get_attribute($this->env, $this->source,             // line 130
($context["pending_item"] ?? null), "fields", [], "any", false, false, false, 130)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["followups_before_resolution"] ?? null) : null), "", ["rand" =>             // line 133
($context["rand"] ?? null)], false]);
            // line 137
            echo "               ";
            $context["pendingreasons_resolution_lbl"] = ('' === $tmp = "                  <i class=\"fas fa-check fa-fw\"></i>
               ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 140
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_field", ["followups_before_resolution",             // line 142
($context["pendingreasons_resolution_field"] ?? null),             // line 143
($context["pendingreasons_resolution_lbl"] ?? null), ["field_class" => "", "label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 148
($context["rand"] ?? null), "mb" => ""]], 140, $context, $this->getSourceContext());
            // line 151
            echo "
            </div>
         </div>
      </div>
   </div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/pending_reasons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 151,  183 => 148,  182 => 143,  181 => 142,  179 => 140,  175 => 137,  173 => 133,  172 => 130,  171 => 129,  166 => 127,  162 => 125,  160 => 122,  159 => 117,  158 => 116,  156 => 114,  152 => 111,  150 => 107,  149 => 104,  148 => 103,  143 => 101,  138 => 99,  129 => 93,  121 => 88,  115 => 85,  106 => 79,  101 => 77,  95 => 74,  91 => 72,  89 => 70,  88 => 63,  87 => 59,  86 => 58,  84 => 55,  77 => 51,  71 => 48,  66 => 46,  63 => 45,  60 => 44,  57 => 41,  52 => 39,  49 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/pending_reasons.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/pending_reasons.html.twig");
    }
}
