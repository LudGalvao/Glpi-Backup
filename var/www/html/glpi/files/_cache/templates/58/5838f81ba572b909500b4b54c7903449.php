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

/* pages/setup/setup_notifications.html.twig */
class __TwigTemplate_c5f5ac09d5121c133342e3dec31e01a5 extends Template
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
        if ((($context["can_update_config"] ?? null) || ($context["has_active_mode"] ?? null))) {
            // line 35
            echo "   <div class=\"container\">
      <div class=\"row justify-content-evenly\">
      ";
            // line 37
            if (($context["can_update_config"] ?? null)) {
                // line 38
                echo "         <div class=\"card col-12 col-lg-5\">
            <form method=\"POST\" action=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/setup.notification.php"), "html", null, true);
                echo "\" data-submit-once>
               <div class=\"card-header\">
                  <h3>";
                // line 41
                echo twig_escape_filter($this->env, __("Notifications configuration"), "html", null, true);
                echo "</h3>
               </div>

               ";
                // line 44
                if ((($context["use_notifications"] ?? null) &&  !($context["has_active_mode"] ?? null))) {
                    // line 45
                    echo "                  <div class=\"alert alert-important alert-warning m-3\">
                     <i class=\"fa fa-exclamation-triangle me-2\"></i>
                     ";
                    // line 47
                    echo twig_escape_filter($this->env, __("You must enable at least one notification mode."), "html", null, true);
                    echo "
                  </div>
               ";
                }
                // line 50
                echo "
               <ul class=\"list-group list-group-flush\">
                  <li class=\"list-group-item\">
                     <div class=\"form-check form-switch\">
                        <input name=\"use_notifications\" type=\"hidden\" value=\"0\" />
                        <input name=\"use_notifications\" id=\"use_notifications\"
                              class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                              ";
                // line 57
                echo ((($context["use_notifications"] ?? null)) ? ("checked=\"checked\"") : (""));
                echo " />
                        <label class=\"form-check-label\" for=\"use_notifications\">
                           ";
                // line 59
                echo twig_escape_filter($this->env, __("Enable followup"), "html", null, true);
                echo "
                        </label>
                     </div>
                  </li>
                  ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
                foreach ($context['_seq'] as $context["mode_key"] => $context["mode"]) {
                    // line 64
                    echo "                     ";
                    $context["mode_disabled"] =  !($context["use_notifications"] ?? null);
                    // line 65
                    echo "                     <li class=\"list-group-item ";
                    echo ((($context["mode_disabled"] ?? null)) ? ("disabled") : (""));
                    echo "\">
                        <div class=\"form-check form-switch\">
                           <input name=\"notifications_";
                    // line 67
                    echo twig_escape_filter($this->env, $context["mode_key"], "html", null, true);
                    echo "\" type=\"hidden\" value=\"0\" />
                           <input name=\"notifications_";
                    // line 68
                    echo twig_escape_filter($this->env, $context["mode_key"], "html", null, true);
                    echo "\" id=\"notifications_";
                    echo twig_escape_filter($this->env, $context["mode_key"], "html", null, true);
                    echo "\"
                                 class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                                 ";
                    // line 70
                    echo (((($__internal_compile_0 = $context["mode"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["is_active"] ?? null) : null)) ? ("checked=\"checked\"") : (""));
                    echo "
                                 ";
                    // line 71
                    echo ((($context["mode_disabled"] ?? null)) ? ("disabled") : (""));
                    echo " />
                           <label class=\"form-check-label\" for=\"notifications_";
                    // line 72
                    echo twig_escape_filter($this->env, $context["mode_key"], "html", null, true);
                    echo "\">
                              ";
                    // line 73
                    echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["mode"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["label"] ?? null) : null), "html", null, true);
                    echo "
                           </label>
                        </div>
                     </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode_key'], $context['mode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "               </ul>

               <div class=\"card-footer\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 83
                echo twig_escape_filter($this->env, __("Save"), "html", null, true);
                echo "</span>
                  </button>
               </div>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 87
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
            </form>
         </div>
      ";
            }
            // line 91
            echo "
      ";
            // line 92
            if ((($context["use_notifications"] ?? null) && ($context["has_active_mode"] ?? null))) {
                // line 93
                echo "         <div class=\"card col-12 col-lg-5 mt-4 mt-lg-0\">
            <div class=\"card-header\">
               <h3>";
                // line 95
                echo twig_escape_filter($this->env, _n("Notification", "Notifications", Session::getPluralNumber()), "html", null, true);
                echo "</h3>
            </div>

            <div class=\"list-group list-group-flush\">
               ";
                // line 99
                if (Session::haveRight("config", twig_constant("READ"))) {
                    // line 100
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/notificationtemplate.php"), "html", null, true);
                    echo "\" class=\"list-group-item list-group-item-action\">
                     <i class=\"fa-fw ti ti-template\"></i>
                     <span>";
                    // line 102
                    echo twig_escape_filter($this->env, _n("Notification template", "Notification templates", Session::getPluralNumber()), "html", null, true);
                    echo "</span>
                  </a>
               ";
                }
                // line 105
                echo "
               ";
                // line 106
                if (Session::haveRight("notification", twig_constant("READ"))) {
                    // line 107
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/notification.php"), "html", null, true);
                    echo "\" class=\"list-group-item list-group-item-action\">
                     <i class=\"fa-fw ti ti-bell \"></i>
                     <span>";
                    // line 109
                    echo twig_escape_filter($this->env, _n("Notification", "Notifications", Session::getPluralNumber()), "html", null, true);
                    echo "</span>
                  </a>
               ";
                } else {
                    // line 112
                    echo "                  <div class=\"list-group-item\">
                     <div class=\"alert alert-important alert-warning m-3\">
                        <i class=\"fa-fw ti ti-alert-triangle me-2\"></i>
                        ";
                    // line 115
                    echo twig_escape_filter($this->env, __("Unable to configure notifications: please configure at least one followup type using the above configuration."), "html", null, true);
                    echo "
                     </div>
                  </div>
               ";
                }
                // line 119
                echo "
               ";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                    // line 121
                    echo "                  ";
                    if ((($context["can_update_config"] ?? null) && (($__internal_compile_2 = $context["mode"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["is_active"] ?? null) : null))) {
                        // line 122
                        echo "                     <a href=\"";
                        echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["mode"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["setting_url"] ?? null) : null), "html", null, true);
                        echo "\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fa-fw ";
                        // line 123
                        echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["mode"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["icon"] ?? null) : null), "html", null, true);
                        echo "\"></i>
                        <span>";
                        // line 124
                        echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["mode"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["label_settings"] ?? null) : null), "html", null, true);
                        echo "</span>
                     </a>
                  ";
                    }
                    // line 127
                    echo "               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "            </div>

         </div
      ";
            }
            // line 132
            echo "      </div>
   </div>
";
        }
    }

    public function getTemplateName()
    {
        return "pages/setup/setup_notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 132,  253 => 128,  247 => 127,  241 => 124,  237 => 123,  232 => 122,  229 => 121,  225 => 120,  222 => 119,  215 => 115,  210 => 112,  204 => 109,  198 => 107,  196 => 106,  193 => 105,  187 => 102,  181 => 100,  179 => 99,  172 => 95,  168 => 93,  166 => 92,  163 => 91,  156 => 87,  149 => 83,  142 => 78,  131 => 73,  127 => 72,  123 => 71,  119 => 70,  112 => 68,  108 => 67,  102 => 65,  99 => 64,  95 => 63,  88 => 59,  83 => 57,  74 => 50,  68 => 47,  64 => 45,  62 => 44,  56 => 41,  51 => 39,  48 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/setup/setup_notifications.html.twig", "/var/www/html/glpi/templates/pages/setup/setup_notifications.html.twig");
    }
}
