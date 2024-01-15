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

/* components/itilobject/timeline/sub_documents.html.twig */
class __TwigTemplate_e4a22983498093801b3dd09d5f384f93 extends Template
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
        $context["documents"] = (((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "documents", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["entry"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["documents"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["entry"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["documents"] ?? null) : null)) : ([]));
        // line 35
        echo "<div class=\"list-group list-group-hoverable sub-documents\">
   ";
        // line 36
        $context["media_docs"] = twig_array_filter($this->env, ($context["documents"] ?? null), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return ((($__internal_compile_2 = ($context["d"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["_is_image"] ?? null) : null) || (is_string($__internal_compile_3 = (($__internal_compile_5 = (($__internal_compile_6 = ($context["d"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["item"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["mime"] ?? null) : null)) && is_string($__internal_compile_4 = "video") && ('' === $__internal_compile_4 || 0 === strpos($__internal_compile_3, $__internal_compile_4)))); });
        // line 37
        echo "   ";
        $context["other_docs"] = twig_array_filter($this->env, ($context["documents"] ?? null), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return  !((($__internal_compile_7 = ($context["d"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["_is_image"] ?? null) : null) || (is_string($__internal_compile_8 = (($__internal_compile_10 = (($__internal_compile_11 = ($context["d"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["item"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["mime"] ?? null) : null)) && is_string($__internal_compile_9 = "video") && ('' === $__internal_compile_9 || 0 === strpos($__internal_compile_8, $__internal_compile_9)))); });
        // line 38
        echo "
   ";
        // line 39
        if ((twig_length_filter($this->env, ($context["media_docs"] ?? null)) > 0)) {
            // line 40
            echo "      ";
            $context["imgs"] = [];
            // line 41
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["media_docs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 42
                echo "         ";
                $context["fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 42);
                // line 43
                echo "         ";
                $context["docpath"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(((((("front/document.send.php?docid=" . (($__internal_compile_12 = (($__internal_compile_13 = $context["document"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["item"] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["id"] ?? null) : null)) . "&") . ($context["fk"] ?? null)) . "=") . (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null)));
                // line 44
                echo "         ";
                $context["delete_link"] = ((((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 44) . "?delete_document&documents_id=") . (($__internal_compile_15 = (($__internal_compile_16 = $context["document"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["item"] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null)) . "&") . ($context["fk"] ?? null)) . "=") . (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["id"] ?? null) : null));
                // line 45
                echo "
         ";
                // line 46
                ob_start(function () { return ''; });
                // line 47
                echo "            <div class=\"col-auto\">
               <div class=\"list-group-item-actions d-flex flex-column\">
                  ";
                // line 49
                if ((($__internal_compile_18 = (($__internal_compile_19 = $context["document"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["item"] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["_can_edit"] ?? null) : null)) {
                    // line 50
                    echo "                     <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Document", (($__internal_compile_20 = (($__internal_compile_21 = $context["document"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["item"] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null)), "html", null, true);
                    echo "\"
                        class=\"btn btn-sm btn-ghost-secondary\" title=\"";
                    // line 51
                    echo twig_escape_filter($this->env, _x("button", "Edit"), "html", null, true);
                    echo "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-edit\"></i>
                     </a>
                  ";
                }
                // line 56
                echo "
                  ";
                // line 57
                if ((($__internal_compile_22 = (($__internal_compile_23 = $context["document"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["item"] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["_can_delete"] ?? null) : null)) {
                    // line 58
                    echo "                     <form class=\"d-inline\" method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 58), "html", null, true);
                    echo "\">
                        <input type=\"hidden\" name=\"";
                    // line 59
                    echo twig_escape_filter($this->env, ($context["fk"] ?? null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["id"] ?? null) : null), "html", null, true);
                    echo "\">
                        <input type=\"hidden\" name=\"documents_id\" value=\"";
                    // line 60
                    echo twig_escape_filter($this->env, (($__internal_compile_25 = (($__internal_compile_26 = $context["document"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["item"] ?? null) : null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null), "html", null, true);
                    echo "\">
                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                    // line 61
                    echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                    echo "\" />
                        <button type=\"submit\" class=\"btn btn-sm btn-ghost-secondary\" name=\"delete_document\"
                                title=\"";
                    // line 63
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "\"
                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                           <i class=\"ti ti-trash\"></i>
                        </button>
                     </form>
                  ";
                }
                // line 69
                echo "               </div>
            </div>
         ";
                $context["post_figure_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 72
                echo "
         ";
                // line 73
                if ((($__internal_compile_27 = $context["document"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["_is_image"] ?? null) : null)) {
                    // line 74
                    echo "            ";
                    $context["imgs"] = twig_array_merge(($context["imgs"] ?? null), [["title" => "", "thumbnail_src" => (                    // line 76
($context["docpath"] ?? null) . "&context=timeline"), "thumbnail_w" => "auto", "thumbnail_h" => "auto", "src" =>                     // line 79
($context["docpath"] ?? null), "w" => (($__internal_compile_28 = (($__internal_compile_29 =                     // line 80
$context["document"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["_size"] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[0] ?? null) : null), "h" => (($__internal_compile_30 = (($__internal_compile_31 =                     // line 81
$context["document"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["_size"] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[1] ?? null) : null), "img_class" => "shadow ", "gallery_item_class" => "list-group-item border-0 d-flex", "post_figure_content" =>                     // line 84
($context["post_figure_content"] ?? null)]]);
                    // line 86
                    echo "         ";
                } else {
                    // line 87
                    echo "            ";
                    ob_start(function () { return ''; });
                    // line 88
                    echo "               <span class=\"d-flex justify-content-center align-items-center mt-5\">
                  <video controls=\"controls\" width=\"90%\" src=\"";
                    // line 89
                    echo twig_escape_filter($this->env, ($context["docpath"] ?? null), "html", null, true);
                    echo "\"></video>
               </span>
            ";
                    $context["video_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 92
                    echo "            ";
                    $context["imgs"] = twig_array_merge(($context["imgs"] ?? null), [["title" => "", "_video" => true, "html" =>                     // line 95
($context["video_html"] ?? null), "img_class" => "shadow", "gallery_item_class" => "list-group-item border-0 d-flex", "post_figure_content" =>                     // line 98
($context["post_figure_content"] ?? null)]]);
                    // line 100
                    echo "         ";
                }
                // line 101
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "      ";
            $this->loadTemplate("components/photoswipe.html.twig", "components/itilobject/timeline/sub_documents.html.twig", 102)->display(twig_array_merge($context, ["imgs" =>             // line 103
($context["imgs"] ?? null), "gallery_type" => "horizontal", "controls" => ["close" => true, "share" => true, "fullscreen" => true, "zoom" => true]]));
            // line 107
            echo "   ";
        }
        // line 108
        echo "
   ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["other_docs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 110
            echo "      <div class=\"list-group-item border-0\">
         ";
            // line 111
            echo twig_include($this->env, $context, "components/itilobject/timeline/form_document_item.html.twig", ["form_mode" => "view", "entry_i" => (($__internal_compile_32 =             // line 113
$context["document"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["item"] ?? null) : null)]);
            // line 114
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/sub_documents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 117,  210 => 114,  208 => 113,  207 => 111,  204 => 110,  187 => 109,  184 => 108,  181 => 107,  179 => 103,  177 => 102,  171 => 101,  168 => 100,  166 => 98,  165 => 95,  163 => 92,  157 => 89,  154 => 88,  151 => 87,  148 => 86,  146 => 84,  145 => 81,  144 => 80,  143 => 79,  142 => 76,  140 => 74,  138 => 73,  135 => 72,  130 => 69,  121 => 63,  116 => 61,  112 => 60,  106 => 59,  101 => 58,  99 => 57,  96 => 56,  88 => 51,  83 => 50,  81 => 49,  77 => 47,  75 => 46,  72 => 45,  69 => 44,  66 => 43,  63 => 42,  58 => 41,  55 => 40,  53 => 39,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/sub_documents.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/sub_documents.html.twig");
    }
}
