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

/* components/photoswipe.html.twig */
class __TwigTemplate_8eee66581d315f6ef293d72eeacbf69d extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/photoswipe.html.twig", 34)->unwrap();
        // line 35
        $context["rand"] = twig_random($this->env);
        // line 36
        $context["field_name"] = ((array_key_exists("field_name", $context)) ? (_twig_default_filter(($context["field_name"] ?? null), ("psgallery" . ($context["rand"] ?? null)))) : (("psgallery" . ($context["rand"] ?? null))));
        // line 37
        echo "
<div id=\"psgallery";
        // line 38
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
   <div class=\"pswp__bg\"></div>
   <div class=\"pswp__scroll-wrap\">
      <div class=\"pswp__container\">
         <div class=\"pswp__item\"></div>
         <div class=\"pswp__item\"></div>
         <div class=\"pswp__item\"></div>
      </div>
      <div class=\"pswp__ui pswp__ui--hidden\">
         <div class=\"pswp__top-bar\">
            <div class=\"pswp__counter\"></div>
            ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["controls"] ?? null), "close", [], "any", false, false, false, 49)) {
            // line 50
            echo "               <button class=\"pswp__button pswp__button--close\" title=\"";
            echo twig_escape_filter($this->env, __("Close (Esc)"), "html", null, true);
            echo "\"></button>
            ";
        }
        // line 52
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["controls"] ?? null), "share", [], "any", false, false, false, 52)) {
            // line 53
            echo "               <button class=\"pswp__button pswp__button--share\" title=\"";
            echo twig_escape_filter($this->env, __("Share"), "html", null, true);
            echo "\"></button>
            ";
        }
        // line 55
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["controls"] ?? null), "fullscreen", [], "any", false, false, false, 55)) {
            // line 56
            echo "               <button class=\"pswp__button pswp__button--fs\" title=\"";
            echo twig_escape_filter($this->env, __("Toggle fullscreen"), "html", null, true);
            echo "\"></button>
            ";
        }
        // line 58
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["controls"] ?? null), "zoom", [], "any", false, false, false, 58)) {
            // line 59
            echo "               <button class=\"pswp__button pswp__button--zoom\" title=\"";
            echo twig_escape_filter($this->env, __("Zoom in/out"), "html", null, true);
            echo "\"></button>
            ";
        }
        // line 61
        echo "
            <div class=\"pswp__preloader\">
               <div class=\"pswp__preloader__icn\">
                  <div class=\"pswp__preloader__cut\">
                     <div class=\"pswp__preloader__donut\"></div>
                  </div>
               </div>
            </div>
         </div>

         <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
            <div class=\"pswp__share-tooltip\"></div>
         </div>

         <button type=\"button\" class=\"pswp__button pswp__button--arrow--left\" title=\"";
        // line 75
        echo twig_escape_filter($this->env, __("Previous (arrow left)"), "html", null, true);
        echo "\">
         </button>

         <button type=\"button\" class=\"pswp__button pswp__button--arrow--right\" title=\"";
        // line 78
        echo twig_escape_filter($this->env, __("Next (arrow right)"), "html", null, true);
        echo "\">
         </button>

         <div class=\"pswp__caption\">
            <div class=\"pswp__caption__center\"></div>
         </div>
      </div>
   </div>
</div>

";
        // line 88
        $context["imgs"] = ((array_key_exists("imgs", $context)) ? (_twig_default_filter(($context["imgs"] ?? null), [])) : ([]));
        // line 89
        $context["galleryclass"] = ((array_key_exists("gallery_class", $context)) ? (_twig_default_filter(($context["gallery_class"] ?? null), "")) : (""));
        // line 90
        $context["gallery_type"] = ((array_key_exists("gallery_type", $context)) ? (_twig_default_filter(($context["gallery_type"] ?? null), "")) : (""));
        // line 91
        echo "
";
        // line 92
        if ((($context["gallery_type"] ?? null) == "horizontal")) {
            // line 93
            echo "   <div class=\"col-12\">
      <div class=\"d-flex flex-row overflow-auto pswp-horizontal-gallery pswp-img";
            // line 94
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["gallery_item_class"] ?? null), "html", null, true);
            echo "\" itemscope itemtype=\"https://schema.org/ImageGallery\">
         ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imgs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 96
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["img"], "gallery_item_class", [], "array", true, true, false, 96)) ? (_twig_default_filter((($__internal_compile_0 = $context["img"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["gallery_item_class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
            ";
                // line 97
                if ((($__internal_compile_1 = $context["img"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["pre_figure_content"] ?? null) : null)) {
                    // line 98
                    echo "               ";
                    echo (($__internal_compile_2 = $context["img"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["pre_figure_content"] ?? null) : null);
                    echo "
            ";
                }
                // line 100
                echo "            <figure itemprop=\"associatedMedia\" itemscope itemtype=\"https://schema.org/ImageObject\" class=\"d-flex flex-column me-2\">
                  ";
                // line 101
                if ((($__internal_compile_3 = $context["img"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["_video"] ?? null) : null)) {
                    // line 102
                    echo "                     <span class=\"bg-black pswp-trigger pointer d-flex justify-content-center align-items-center\">
                        <i class=\"fas fa-video\"></i>
                     </span>
                  ";
                } else {
                    // line 106
                    echo "                     <a href=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["img"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["src"] ?? null) : null));
                    echo "\" itemprop=\"contentUrl\" data-index=\"0\">
                        <img src=\"";
                    // line 107
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["img"], "thumbnail_src", [], "array", true, true, false, 107)) ? (_twig_default_filter((($__internal_compile_5 = $context["img"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["thumbnail_src"] ?? null) : null), (($__internal_compile_6 = $context["img"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["src"] ?? null) : null))) : ((($__internal_compile_7 = $context["img"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["src"] ?? null) : null))), "html", null, true);
                    echo "\"
                             itemprop=\"thumbnail\" alt=\"";
                    // line 108
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["img"], "title", [], "array", true, true, false, 108)) ? (_twig_default_filter((($__internal_compile_8 = $context["img"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["title"] ?? null) : null), "")) : ("")), "html", null, true);
                    echo "\"
                             class=\"";
                    // line 109
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["img"], "img_class", [], "array", true, true, false, 109)) ? (_twig_default_filter((($__internal_compile_9 = $context["img"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["img_class"] ?? null) : null), "")) : ("")), "html", null, true);
                    echo " pointer pswp-trigger\" />
                     </a>
                  ";
                }
                // line 112
                echo "               <figcaption itemprop=\"caption description\" class=\"text-muted fst-italic\">
                  ";
                // line 113
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["img"], "title", [], "array", true, true, false, 113)) ? (_twig_default_filter((($__internal_compile_10 = $context["img"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["title"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "
               </figcaption>
            </figure>
            ";
                // line 116
                if ((($__internal_compile_11 = $context["img"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["post_figure_content"] ?? null) : null)) {
                    // line 117
                    echo "               ";
                    echo (($__internal_compile_12 = $context["img"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["post_figure_content"] ?? null) : null);
                    echo "
            ";
                }
                // line 119
                echo "         </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "      </div>
   </div>
";
        } else {
            // line 124
            echo "   <div class=\"pswp-img";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["gallery_item_class"] ?? null), "html", null, true);
            echo "\" itemscope itemtype=\"https://schema.org/ImageGallery\">
      ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imgs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 126
                echo "         ";
                $context["clearable"] = (($__internal_compile_13 = $context["img"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["clearable"] ?? null) : null);
                // line 127
                echo "         <figure itemprop=\"associatedMedia\" itemscope itemtype=\"https://schema.org/ImageObject\"
                 style=\"width: ";
                // line 128
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["img"], "thumbnail_w", [], "array", true, true, false, 128)) ? (_twig_default_filter((($__internal_compile_14 = $context["img"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["thumbnail_w"] ?? null) : null), "auto")) : ("auto")), "html", null, true);
                echo "; height: ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["img"], "thumbnail_h", [], "array", true, true, false, 128)) ? (_twig_default_filter((($__internal_compile_15 = $context["img"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["thumbnail_h"] ?? null) : null), "auto")) : ("auto")), "html", null, true);
                echo "\">
            ";
                // line 129
                echo twig_call_macro($macros["fields"], "macro_imageField", [((((                // line 130
($context["clearable"] ?? null)) ? ("pictures") : (($context["field_name"] ?? null))) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 130)), ((twig_get_attribute($this->env, $this->source,                 // line 131
$context["img"], "thumbnail_src", [], "array", true, true, false, 131)) ? (_twig_default_filter((($__internal_compile_16 = $context["img"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["thumbnail_src"] ?? null) : null), (($__internal_compile_17 = $context["img"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["src"] ?? null) : null))) : ((($__internal_compile_18 = $context["img"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["src"] ?? null) : null))), "", ["no_label" => true, "full_width" => true, "mb" => "", "clearable" =>                 // line 137
($context["clearable"] ?? null), "class" => "cursor-pointer pswp-trigger", "alt" => ((twig_get_attribute($this->env, $this->source,                 // line 139
$context["img"], "title", [], "array", true, true, false, 139)) ? (_twig_default_filter((($__internal_compile_19 = $context["img"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["title"] ?? null) : null), "")) : ("")), "itemprop" => "thumbnail"], ["itemprop" => "contentUrl", "data-index" => "0"]], 129, $context, $this->getSourceContext());
                // line 146
                echo "
            <figcaption itemprop=\"caption description\" class=\"text-muted fst-italic\">
               ";
                // line 148
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["img"], "title", [], "array", true, true, false, 148)) ? (_twig_default_filter((($__internal_compile_20 = $context["img"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["title"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "
            </figcaption>
         </figure>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "   </div>
";
        }
        // line 154
        echo "
<script>
   ((\$) => {
      const pswp = document.getElementById(\"psgallery";
        // line 157
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\");
      \$(\".pswp-img";
        // line 158
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\").on('click', 'figure .pswp-trigger', function(event) {
         event.preventDefault();
         const options = {
            index: \$(this).closest('figure').parent().index(),
            bgOpacity: 0.7,
            showHideOpacity: true,
            shareButtons: [
               {
                  id: 'download',
                  label: __('Download'),
                  url: '";
        // line 168
        echo twig_escape_filter($this->env, ($context["raw_image_url"] ?? null), "html", null, true);
        echo "',
                  download: true
               }
            ]
         };
         const lightbox = new PhotoSwipe(pswp, PhotoSwipeUI_Default, ";
        // line 173
        echo json_encode(($context["imgs"] ?? null));
        echo ", options);
         \$(pswp).closest('.card-tabs').css('z-index', 50); // Be sure that tabs are displayed above form in vsplit layout
         lightbox.init();

         // Prevent dragging around cusotm HTML slide content
         \$(lightbox.container).find('.pswp__item span').on('pointerdown MSPointerDown touchstart mousedown', function (e) {
            return false;
         });
         lightbox.listen('destroy', function() {
            \$(this.container).closest('.card-tabs').css('z-index', '');
         });
      })
   })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "components/photoswipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 173,  319 => 168,  306 => 158,  302 => 157,  297 => 154,  293 => 152,  275 => 148,  271 => 146,  269 => 139,  268 => 137,  267 => 131,  266 => 130,  265 => 129,  259 => 128,  256 => 127,  253 => 126,  236 => 125,  229 => 124,  224 => 121,  217 => 119,  211 => 117,  209 => 116,  203 => 113,  200 => 112,  194 => 109,  190 => 108,  186 => 107,  181 => 106,  175 => 102,  173 => 101,  170 => 100,  164 => 98,  162 => 97,  157 => 96,  153 => 95,  147 => 94,  144 => 93,  142 => 92,  139 => 91,  137 => 90,  135 => 89,  133 => 88,  120 => 78,  114 => 75,  98 => 61,  92 => 59,  89 => 58,  83 => 56,  80 => 55,  74 => 53,  71 => 52,  65 => 50,  63 => 49,  49 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/photoswipe.html.twig", "/var/www/html/glpi/templates/components/photoswipe.html.twig");
    }
}
