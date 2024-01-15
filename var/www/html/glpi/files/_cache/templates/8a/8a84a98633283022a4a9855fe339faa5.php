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

/* components/itilobject/selfservice.html.twig */
class __TwigTemplate_35a44e5e6211858220028cfdebc069f0 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/selfservice.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["rand"] = twig_random($this->env);
        // line 37
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "full_width_adapt_column" => false, "fields_template" =>         // line 41
($context["itiltemplate"] ?? null), "rand" =>         // line 42
($context["rand"] ?? null)];
        // line 44
        $context["right_field_options"] = twig_array_merge(($context["base_field_options"] ?? null), ["is_horizontal" => true, "label_class" => "col-lg-3", "input_class" => "col-lg-9"]);
        // line 49
        echo "
<div class=\"container-lg\">

    ";
        // line 52
        if ((($context["has_tickets_to_validate"] ?? null) &&  !twig_test_empty(($context["url_validate"] ?? null)))) {
            // line 53
            echo "        <div class=\"alert alert-warning\" role=\"alert\">
            ";
            // line 54
            echo twig_escape_filter($this->env, __("There are some tickets awaiting approval"), "html", null, true);
            echo " — <a href=\"";
            echo twig_escape_filter($this->env, ($context["url_validate"] ?? null), "html", null, true);
            echo "\" class=\"alert-link\">";
            echo twig_escape_filter($this->env, __("check it out!"), "html", null, true);
            echo "</a>
        </div>
    ";
        }
        // line 57
        echo "
   ";
        // line 58
        echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
        echo "

   ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

   <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">
                ";
        // line 65
        echo twig_escape_filter($this->env, __("Describe the incident or request"), "html", null, true);
        echo "
            </h3>
        </div>

        <div class=\"card-body bg-secondary-lt pt-0\">
            ";
        // line 70
        if (twig_length_filter($this->env, ($context["delegating"] ?? null))) {
            // line 71
            echo "                <div class=\"row align-items-end w-100\">
                    <div class=\"col-sm-6\">

                        ";
            // line 74
            ob_start(function () { return ''; });
            // line 75
            echo "                            <div id=\"delegate_other";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" class=\"card mt-2\">
                                <div class=\"card-body\">
                                    ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "showActorAddFormOnCreate", [twig_constant("CommonITILActor::REQUESTER"),             // line 79
($context["params"] ?? null)], "method", false, false, false, 77)), "truncate", [0], "method", false, false, false, 80), "html", null, true);
            // line 80
            echo "
                                </div>
                            </div>
                        ";
            $context["actor_add_form"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 84
            echo "
                        ";
            // line 85
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["nodelegate", (($__internal_compile_0 =             // line 87
($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nodelegate"] ?? null) : null), __("This ticket concerns me"), twig_array_merge(            // line 89
($context["base_field_options"] ?? null), ["add_field_html" =>             // line 90
($context["actor_add_form"] ?? null)])], 85, $context, $this->getSourceContext());
            // line 92
            echo "
                    </div>
                    <div class=\"col-sm-6 ";
            // line 94
            echo ((($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_check_pref") && (($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["nodelegate"] ?? null) : null))) ? ("") : ("d-none"));
            echo "\" id=\"user-info";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "-block\">
                        ";
            // line 95
            ob_start(function () { return ''; });
            // line 96
            echo "                        <div class=\"d-inline-flex\">
                            <div class=\"card mb-0\" id=\"user-info";
            // line 97
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
                                <div class=\"card-body\">
                                    ";
            // line 99
            $context["user"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser();
            // line 100
            echo "                                    ";
            $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 100);
            // line 101
            echo "                                    ";
            $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFriendlyName", [], "method", false, false, false, 101))]);
            // line 102
            echo "                                    ";
            $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 102)]);
            // line 103
            echo "                                    ";
            echo twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>             // line 104
($context["user_fields"] ?? null), "can_edit" => true], false);
            // line 106
            echo "
                                </div>
                            </div>
                        </div>
                        ";
            $context["personal_information"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 111
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_field", ["",             // line 113
($context["personal_information"] ?? null), __("Check your personnal information"),             // line 115
($context["base_field_options"] ?? null)], 111, $context, $this->getSourceContext());
            // line 116
            echo "
                    </div>
                </div>

            ";
        } else {
            // line 121
            echo "                <input type=\"hidden\" name=\"_users_id_requester\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"), "html", null, true);
            echo "\">
            ";
        }
        // line 123
        echo "        </div>
        <div class=\"card-body row mx-0\">
            <div class=\"offset-md-1 col-md-8 col-xxl-6\">
               ";
        // line 126
        echo twig_call_macro($macros["fields"], "macro_field", ["type", twig_get_attribute($this->env, $this->source,         // line 128
($context["item"] ?? null), "dropdownType", ["type", twig_array_merge(["value" => (($__internal_compile_2 =         // line 129
($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["type"] ?? null) : null), "width" => "100%", "display" => false, "on_change" => "this.form.submit()"],         // line 133
($context["right_field_options"] ?? null))], "method", false, false, false, 128), _n("Type", "Types", 1),         // line 135
($context["right_field_options"] ?? null)], 126, $context, $this->getSourceContext());
        // line 136
        echo "

               ";
        // line 138
        $context["cat_params"] = twig_array_merge(($context["right_field_options"] ?? null), ["on_change" => "this.form.submit()"]);
        // line 141
        echo "               ";
        $context["condition"] = ["is_helpdeskvisible" => 1];
        // line 144
        echo "               ";
        if (((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["type"] ?? null) : null) == twig_constant("Ticket::INCIDENT_TYPE"))) {
            // line 145
            echo "                  ";
            $context["condition"] = twig_array_merge(($context["condition"] ?? null), ["is_incident" => 1]);
            // line 146
            echo "               ";
        } elseif (((($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null) == twig_constant("Ticket::DEMAND_TYPE"))) {
            // line 147
            echo "                  ";
            $context["condition"] = twig_array_merge(($context["condition"] ?? null), ["is_request" => 1]);
            // line 148
            echo "               ";
        }
        // line 149
        echo "               ";
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_5 =         // line 152
($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1), twig_array_merge(        // line 154
($context["cat_params"] ?? null), ["condition" => ($context["condition"] ?? null)])], 149, $context, $this->getSourceContext());
        // line 155
        echo "

               ";
        // line 157
        echo twig_call_macro($macros["fields"], "macro_field", ["urgency", twig_get_attribute($this->env, $this->source,         // line 159
($context["item"] ?? null), "dropdownUrgency", [["value" => (($__internal_compile_6 =         // line 160
($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["urgency"] ?? null) : null), "width" => "100%", "display" => false, "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 163
($context["right_field_options"] ?? null), "fields_template", [], "any", false, false, false, 163), "isMandatoryField", ["urgency"], "method", false, false, false, 163)]], "method", false, false, false, 159), __("Urgency"),         // line 166
($context["right_field_options"] ?? null)], 157, $context, $this->getSourceContext());
        // line 167
        echo "

               ";
        // line 169
        if (((($__internal_compile_7 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["helpdesk_hardware"] ?? null) : null) && twig_length_filter($this->env, (($__internal_compile_8 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["helpdesk_item_type"] ?? null) : null)))) {
            // line 170
            echo "                  ";
            ob_start(function () { return ''; });
            // line 171
            echo "                     <a class=\"btn btn-sm btn-ghost-secondary mt-2\" role=\"button\"
                        id=\"btn-collapse-items";
            // line 172
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                        aria-expanded=\"false\" aria-controls=\"collapse-items";
            // line 173
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                        data-bs-toggle=\"collapse\" href=\"#collapse-items";
            // line 174
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" >
                        <i class=\"fas fa-plus\"></i>
                     </a>
                     <div class=\"collapse\" id=\"collapse-items";
            // line 177
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 178
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Item_Ticket::itemAddForm", [($context["item"] ?? null), twig_array_merge(($context["params"] ?? null), ["_canupdate" => Session::haveRight("ticket", twig_constant("CREATE")), "_tickettemplate" =>             // line 180
($context["itiltemplate"] ?? null)])]);
            // line 182
            echo "                     </div>
                  ";
            $context["associated_items"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 184
            echo "
                  ";
            // line 185
            echo twig_call_macro($macros["fields"], "macro_field", ["items_id",             // line 187
($context["associated_items"] ?? null), _n("Associated element", "Associated elements", Session::getPluralNumber()),             // line 189
($context["right_field_options"] ?? null)], 185, $context, $this->getSourceContext());
            // line 190
            echo "
               ";
        }
        // line 192
        echo "
               ";
        // line 193
        if (( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_observer"], "method", false, false, false, 193) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_observer"], "method", false, false, false, 193))) {
            // line 194
            echo "                  ";
            ob_start(function () { return ''; });
            // line 195
            echo "
                     ";
            // line 196
            echo twig_include($this->env, $context, "components/itilobject/actors/main.html.twig", ["item" =>             // line 197
($context["item"] ?? null), "entities_id" =>             // line 198
($context["entities_id"] ?? null), "itiltemplate" =>             // line 199
($context["itiltemplate"] ?? null), "field_options" =>             // line 200
($context["right_field_options"] ?? null), "canupdate" => true, "returned_itemtypes" => ["User"], "display_actortypes" => ["observer"], "display_labels" => false, "canassigntome" => false]);
            // line 206
            echo "
                  ";
            $context["observer_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 208
            echo "                  ";
            echo twig_call_macro($macros["fields"], "macro_field", ["observer",             // line 210
($context["observer_field"] ?? null), _n("Watcher", "Watchers", Session::getPluralNumber()), twig_array_merge(            // line 212
($context["right_field_options"] ?? null), ["required" => (twig_get_attribute($this->env, $this->source,             // line 213
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_observer"], "method", false, false, false, 213) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_observer"], "method", false, false, false, 213))])], 208, $context, $this->getSourceContext());
            // line 215
            echo "
               ";
        }
        // line 217
        echo "
               ";
        // line 218
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_9 =         // line 221
($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(        // line 223
($context["right_field_options"] ?? null), ["hide_if_no_elements" => true])], 218, $context, $this->getSourceContext());
        // line 226
        echo "

               ";
        // line 228
        echo twig_call_macro($macros["fields"], "macro_textField", ["name", (($__internal_compile_10 =         // line 230
($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["name"] ?? null) : null), __("Title"),         // line 232
($context["right_field_options"] ?? null)], 228, $context, $this->getSourceContext());
        // line 233
        echo "

               ";
        // line 235
        $context["uploads"] = [];
        // line 236
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_content", [], "any", true, true, false, 236)) {
            // line 237
            echo "                  ";
            $context["uploads"] = twig_array_merge(($context["uploads"] ?? null), ["_content" => twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_content", [], "any", false, false, false, 237), "_tag_content" => twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_tag_content", [], "any", false, false, false, 237)]);
            // line 238
            echo "               ";
        }
        // line 239
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_filename", [], "any", true, true, false, 239)) {
            // line 240
            echo "                  ";
            $context["uploads"] = twig_array_merge(($context["uploads"] ?? null), ["_filename" => twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_filename", [], "any", false, false, false, 240), "_tag_filename" => twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_tag_filename", [], "any", false, false, false, 240)]);
            // line 241
            echo "               ";
        }
        // line 242
        echo "
               ";
        // line 243
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_11 =         // line 245
($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["content"] ?? null) : null), __("Description"), twig_array_merge(        // line 247
($context["right_field_options"] ?? null), ["enable_richtext" => true, "enable_fileupload" => ((twig_get_attribute($this->env, $this->source,         // line 249
($context["itiltemplate"] ?? null), "isHiddenField", ["_documents_id"], "method", false, false, false, 249)) ? (false) : (true)), "uploads" =>         // line 250
($context["uploads"] ?? null)])], 243, $context, $this->getSourceContext());
        // line 252
        echo "
            </div>
        </div>

      ";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

        <div class=\"card-footer text-center\">
            <input type=\"hidden\" name=\"entities_id\" value=\"";
        // line 259
        echo twig_escape_filter($this->env, ($context["entities_id"] ?? null), "html", null, true);
        echo "\" />
            <button type=\"submit\" class=\"btn btn-primary\" name=\"add\">
                <i class=\"fas fa-plus\"></i>
                <span>";
        // line 262
        echo twig_escape_filter($this->env, __("Submit message"), "html", null, true);
        echo "</span>
            </button>
        </div>
    </div>

   ";
        // line 267
        echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
        echo "
</div>

<script type=\"text/javascript\">
\$(function () {
    \$('#btn-collapse-items";
        // line 272
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('click', function() {
        \$(this).hide();
    });

    \$('#dropdown_nodelegate";
        // line 276
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('change', function() {
        var is_for_me = (\$(this).val() == '1');
        \$('#user-info";
        // line 278
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "-block').toggleClass('d-none', !is_for_me);
        \$('#delegate_other";
        // line 279
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .card-body')
            .html(\"\")
            .load('";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownDelegationUsers.php"), "html", null, true);
        echo "', {
                'right': \"delegate\",
                'nodelegate': (is_for_me ? 1 : 0),
                '_users_id_requester': ";
        // line 284
        echo twig_escape_filter($this->env, (($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_users_id_requester"] ?? null) : null), "html", null, true);
        echo ",
                '_users_id_requester_notif': ";
        // line 285
        echo json_encode((($__internal_compile_13 = ($context["params"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_users_id_requester_notif"] ?? null) : null));
        echo ",
                'use_notification': ";
        // line 286
        echo twig_escape_filter($this->env, (($__internal_compile_14 = (($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_users_id_requester_notif"] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["use_notification"] ?? null) : null), "html", null, true);
        echo ",
                'entity_restrict':  ";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "html", null, true);
        echo "
            });
    })

    saveActorsToDom();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/selfservice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 287,  435 => 286,  431 => 285,  427 => 284,  421 => 281,  416 => 279,  412 => 278,  407 => 276,  400 => 272,  392 => 267,  384 => 262,  378 => 259,  372 => 256,  366 => 252,  364 => 250,  363 => 249,  362 => 247,  361 => 245,  360 => 243,  357 => 242,  354 => 241,  351 => 240,  348 => 239,  345 => 238,  342 => 237,  339 => 236,  337 => 235,  333 => 233,  331 => 232,  330 => 230,  329 => 228,  325 => 226,  323 => 223,  322 => 221,  321 => 218,  318 => 217,  314 => 215,  312 => 213,  311 => 212,  310 => 210,  308 => 208,  304 => 206,  302 => 200,  301 => 199,  300 => 198,  299 => 197,  298 => 196,  295 => 195,  292 => 194,  290 => 193,  287 => 192,  283 => 190,  281 => 189,  280 => 187,  279 => 185,  276 => 184,  272 => 182,  270 => 180,  269 => 178,  265 => 177,  259 => 174,  255 => 173,  251 => 172,  248 => 171,  245 => 170,  243 => 169,  239 => 167,  237 => 166,  236 => 163,  235 => 160,  234 => 159,  233 => 157,  229 => 155,  227 => 154,  226 => 152,  224 => 149,  221 => 148,  218 => 147,  215 => 146,  212 => 145,  209 => 144,  206 => 141,  204 => 138,  200 => 136,  198 => 135,  197 => 133,  196 => 129,  195 => 128,  194 => 126,  189 => 123,  183 => 121,  176 => 116,  174 => 115,  173 => 113,  171 => 111,  164 => 106,  162 => 104,  160 => 103,  157 => 102,  154 => 101,  151 => 100,  149 => 99,  144 => 97,  141 => 96,  139 => 95,  133 => 94,  129 => 92,  127 => 90,  126 => 89,  125 => 87,  124 => 85,  121 => 84,  115 => 80,  113 => 79,  112 => 77,  106 => 75,  104 => 74,  99 => 71,  97 => 70,  89 => 65,  81 => 60,  76 => 58,  73 => 57,  63 => 54,  60 => 53,  58 => 52,  53 => 49,  51 => 44,  49 => 42,  48 => 41,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/selfservice.html.twig", "/var/www/html/glpi/templates/components/itilobject/selfservice.html.twig");
    }
}
