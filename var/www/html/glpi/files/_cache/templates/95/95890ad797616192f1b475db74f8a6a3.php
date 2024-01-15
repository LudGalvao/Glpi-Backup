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

/* @formcreator/pages/userform.html.twig */
class __TwigTemplate_abacd8f06c7feab8ea9fc5e1f7f95a46 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/pages/userform.html.twig", 31)->unwrap();
        // line 32
        echo "
<style>
\t";
        // line 34
        $context["widthPercent"] = (100 / twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, false, 34));
        // line 35
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, false, 35)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "\t\t";
            $context["width"] = ($context["i"] * ($context["widthPercent"] ?? null));
            // line 37
            echo "            #plugin_formcreator_form.plugin_formcreator_form [data-itemtype = \"PluginFormcreatorQuestion\"][gs-w=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"],
            #plugin_formcreator_form.plugin_formcreator_form .plugin_formcreator_gap[gs-w=\"";
            // line 38
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"] {
                min-width: ";
            // line 39
            echo twig_escape_filter($this->env, ($context["widthPercent"] ?? null), "html", null, true);
            echo "%;
                width: ";
            // line 40
            echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
            echo "%;
                margin-left: -0.25em;
            }
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</style>

<div class=\"asset\">
    ";
        // line 47
        $context["formName"] = "plugin_formcreator_form";
        // line 48
        echo "\t<form name=\"";
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "\" method=\"post\" role=\"form\" enctype=\"multipart/form-data\" class=\"plugin_formcreator_form\" onsubmit=\"return plugin_formcreator.submitUserForm(event)\" onkeypress=\"return plugin_formcreator.submitUserFormByKeyPress(event);\" id=\"plugin_formcreator_form\" data-itemtype=\"PluginFormcreatorForm\" data-id=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        echo "\" data-submit-once=\"true\">
\t\t<h1 class='form-title'>
\t\t        ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Toolbox\\Sanitizer::unsanitize", [__((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "domain", [], "any", false, false, false, 50))]), "html", null, true);
        echo "
\t\t\t<i class=\"fas fa-print\" style=\"cursor: pointer;\" onclick=\"window.print();\"></i>
\t\t</h1>
        ";
        // line 53
        if ((((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["content"] ?? null) : null) != "") || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtraHeader", [], "method", false, false, false, 53) != ""))) {
            // line 54
            echo "            <div class=\"form_header\">
            ";
            // line 55
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(__((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["content"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "domain", [], "any", false, false, false, 55)));
            echo "
            ";
            // line 56
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtraHeader", [], "method", false, false, false, 56));
            echo "
            </div>
        ";
        }
        // line 59
        echo "        <ol>
        ";
        // line 60
        $context["sections"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorSection::getSectionsFromForm", [(($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 61
($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null)]);
        // line 63
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 64
            echo "            ";
            $context["sectionId"] = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["section"], "fields", [], "any", false, false, false, 64)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null);
            // line 65
            echo "            <li class=\"card plugin_formcreator_section\" data-itemtype=\"PluginFormcreatorSection\" data-id=";
            echo twig_escape_filter($this->env, ($context["sectionId"] ?? null), "html", null, true);
            echo ">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">
                        ";
            // line 68
            if (((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["section"], "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null) == "")) {
                // line 69
                echo "                            (";
                echo twig_escape_filter($this->env, ($context["sectionId"] ?? null), "html", null, true);
                echo ")
                        ";
            } else {
                // line 71
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Toolbox\\Sanitizer::unsanitize", [__((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["section"], "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "domain", [], "any", false, false, false, 71))]), "html", null, true);
                echo "
                        ";
            }
            // line 73
            echo "                    </h2>
                </div>
                <div class=\"card-body\">
                    ";
            // line 76
            $context["lastQuestion"] = null;
            // line 77
            echo "                    ";
            $context["questions"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorQuestion::getQuestionsFromSection", [            // line 78
($context["sectionId"] ?? null)]);
            // line 80
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 81
                echo "                        ";
                if ( !(null === ($context["lastQuestion"] ?? null))) {
                    // line 82
                    echo "                            ";
                    if (((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["lastQuestion"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["row"] ?? null) : null) < (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, $context["question"], "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["row"] ?? null) : null))) {
                        // line 83
                        echo "                                <div class=\"plugin_formcreator_newRow\"></div>
                                ";
                        // line 84
                        if (((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, $context["question"], "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["col"] ?? null) : null) > 0)) {
                            // line 85
                            echo "                                    ";
                            // line 86
                            echo "                                    ";
                            $context["x"] = 0;
                            // line 87
                            echo "                                    ";
                            $context["width"] = (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, $context["question"], "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["col"] ?? null) : null);
                            // line 88
                            echo "                                    <div class=\"plugin_formcreator_gap\" gs-x=\"";
                            echo twig_escape_filter($this->env, ($context["x"] ?? null), "html", null, true);
                            echo "\" gs-w=\"";
                            echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
                            echo "\"></div>
                                ";
                        }
                        // line 90
                        echo "                            ";
                    } else {
                        // line 91
                        echo "                                ";
                        $context["x"] = ((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["lastQuestion"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["col"] ?? null) : null) + (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["lastQuestion"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["width"] ?? null) : null));
                        // line 92
                        echo "                                ";
                        $context["width"] = ((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, $context["question"], "fields", [], "any", false, false, false, 92)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["col"] ?? null) : null) - ($context["x"] ?? null));
                        // line 93
                        echo "                                ";
                        if ((($context["x"] ?? null) < (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, $context["question"], "fields", [], "any", false, false, false, 93)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["col"] ?? null) : null))) {
                            // line 94
                            echo "                                    ";
                            // line 95
                            echo "                                    <div class=\"plugin_formcreator_gap\" gs-x=\"";
                            echo twig_escape_filter($this->env, ($context["x"] ?? null), "html", null, true);
                            echo "\" gs-w=\"";
                            echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
                            echo "\"></div>
                                ";
                        }
                        // line 97
                        echo "                            ";
                    }
                    // line 98
                    echo "                        ";
                }
                // line 99
                echo "                        ";
                if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "public", [], "any", false, false, false, 99) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "getSubField", [], "method", false, false, false, 99), "isPublicFormCompatible", [], "method", false, false, false, 99))) {
                    // line 100
                    echo "                            ";
                    $context["sessionData"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("formcreator");
                    // line 101
                    echo "                            ";
                    echo twig_get_attribute($this->env, $this->source, $context["question"], "getRenderedHtml", [twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "domain", [], "any", false, false, false, 101), true, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "formanswer", [], "any", false, false, false, 101)], "method", false, false, false, 101);
                    echo "
                        ";
                }
                // line 103
                echo "                        ";
                $context["lastQuestion"] = $context["question"];
                // line 104
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "use_captcha", [], "any", false, false, false, 108)) {
            // line 109
            echo "            ";
            $context["captchaTime"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("time");
            // line 110
            echo "            ";
            $context["catchaId"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("md5", [(($context["captchaTime"] ?? null) . (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 110)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null))]);
            // line 111
            echo "            ";
            $context["captcha"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorCommon::getCaptcha", [($context["captchaId"] ?? null)]);
            // line 112
            echo "            <li class=\"plugin_formcreator_section\" id=\"plugin_formcreator_captcha_section\">
                <div class=\"card-header\">";
            // line 113
            echo twig_escape_filter($this->env, __("Are you a robot ?", "formcreator"), "html", null, true);
            echo "</div>
                <div class=\"card-body\"><label for=\"plugin_formcreator_captcha\">";
            // line 114
            echo twig_escape_filter($this->env, __("Are you a robot ?", "formcreator"), "html", null, true);
            echo "</label>
                    <div><i onclick=\"plugin_formcreator_refreshCaptcha()\" class=\"fas fa-sync-alt\"></i>&nbsp;<img src=\"";
            // line 115
            echo (($__internal_compile_17 = ($context["captcha"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["img"] ?? null) : null);
            echo "\">
                        <div style=\"width: 50%; float: right\" class=\"form_field\"><span class=\"no-wrap\">
                        ";
            // line 117
            echo twig_call_macro($macros["fields"], "macro_textField", ["plugin_formcreator_captcha", "", "", ["no_label" => true]], 117, $context, $this->getSourceContext());
            echo "
                        ";
            // line 118
            echo twig_call_macro($macros["fields"], "macro_hiddenField", ["plugin_formcreator_captcha_id", ($context["captchaId"] ?? null)], 118, $context, $this->getSourceContext());
            echo "
                        </div>
                    </div>
                </div>
            </li>
        ";
        }
        // line 124
        echo "        </ol>
        <script>
           \$(
              function() {
                 plugin_formcreator.showFields(\$(\"form[name='";
        // line 128
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "']\"));
              }
           )
        </script>

        ";
        // line 133
        echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFormcreatorForm_Validator::dropdownValidator", [        // line 134
($context["item"] ?? null)]);
        // line 135
        echo "

        <div class=\"center\">
          ";
        // line 138
        echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::submit", [__("Send"), ["name" => "add"]]);
        // line 141
        echo "
        </div>
        ";
        // line 143
        echo twig_call_macro($macros["fields"], "macro_hiddenField", ["plugin_formcreator_forms_id", (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 143)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["id"] ?? null) : null)], 143, $context, $this->getSourceContext());
        echo "
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@formcreator/pages/userform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 144,  319 => 143,  315 => 141,  313 => 138,  308 => 135,  306 => 134,  305 => 133,  297 => 128,  291 => 124,  282 => 118,  278 => 117,  273 => 115,  269 => 114,  265 => 113,  262 => 112,  259 => 111,  256 => 110,  253 => 109,  250 => 108,  242 => 105,  236 => 104,  233 => 103,  227 => 101,  224 => 100,  221 => 99,  218 => 98,  215 => 97,  207 => 95,  205 => 94,  202 => 93,  199 => 92,  196 => 91,  193 => 90,  185 => 88,  182 => 87,  179 => 86,  177 => 85,  175 => 84,  172 => 83,  169 => 82,  166 => 81,  161 => 80,  159 => 78,  157 => 77,  155 => 76,  150 => 73,  144 => 71,  138 => 69,  136 => 68,  129 => 65,  126 => 64,  121 => 63,  119 => 61,  118 => 60,  115 => 59,  109 => 56,  105 => 55,  102 => 54,  100 => 53,  94 => 50,  86 => 48,  84 => 47,  79 => 44,  69 => 40,  65 => 39,  61 => 38,  56 => 37,  53 => 36,  48 => 35,  46 => 34,  42 => 32,  40 => 31,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/pages/userform.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/pages/userform.html.twig");
    }
}
