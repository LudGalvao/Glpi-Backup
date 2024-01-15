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

/* components/itilobject/timeline/form_task.html.twig */
class __TwigTemplate_80d40dab306c69f93a84851cc7087e95 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_task.html.twig", 35)->unwrap();
        // line 37
        $context["params"] = twig_array_merge(["parent" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])));
        // line 39
        $context["candedit"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 39);
        // line 40
        $context["can_read_kb"] = (Session::haveRight("knowbase", twig_constant("READ")) || Session::haveRight("knowbase", twig_constant("KnowbaseItem::READFAQ")));
        // line 41
        $context["can_update_kb"] = Session::haveRight("knowbase", twig_constant("UPDATE"));
        // line 42
        $context["nokb"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 42) || ((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null) == true));
        // line 43
        $context["rand"] = twig_random($this->env);
        // line 44
        $context["formoptions"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 44) &&  !(null === (($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["formoptions"] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["formoptions"] ?? null) : null)) : (""));
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_task.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 48
            echo "      <div class=\"read-only-content ";
            echo ((((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["state"] ?? null) : null) === constant("Planning::DONE"))) ? ("done") : (""));
            echo "\">
         <div class=\"rich_text_container text-content\" data-bs-html=\"true\" data-bs-custom-class=\"todo-list-tooltip\"
              title=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["content"] ?? null) : null)), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            ";
            // line 51
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 54
            echo "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 58
            if ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["users_id_tech"] ?? null) : null)) {
                // line 59
                echo "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 60
                $context["is_current_tech"] = ((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["users_id_tech"] ?? null) : null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
                // line 61
                echo "                  ";
                $context["anonym_tech"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_tech"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
                // line 62
                echo "                  ";
                echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" => (($__internal_compile_8 =                 // line 63
($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["users_id_tech"] ?? null) : null), "enable_anonymization" =>                 // line 64
($context["anonym_tech"] ?? null)], false);
                // line 65
                echo "
               </span>
            ";
            }
            // line 68
            echo "
            ";
            // line 69
            if ((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["groups_id_tech"] ?? null) : null)) {
                // line 70
                echo "               <span class=\"badge bg-orange-lt\">
                  <i class=\"fas fa-users me-1\"></i>
                  ";
                // line 72
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Group", (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["groups_id_tech"] ?? null) : null), ["enable_anonymization" => true]);
                echo "
               </span>
            ";
            }
            // line 75
            echo "
            ";
            // line 76
            if ((($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["taskcategories_id"] ?? null) : null)) {
                // line 77
                echo "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("TaskCategory", (($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["taskcategories_id"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 81
            echo "
            ";
            // line 82
            if ((($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["actiontime"] ?? null) : null)) {
                // line 83
                echo "               <span class=\"actiontime badge bg-orange-lt\">
                  <i class=\"fas fa-stopwatch me-1\"></i>
                  ";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["actiontime"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 88
            echo "
            ";
            // line 89
            if ((($__internal_compile_15 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["begin"] ?? null) : null)) {
                // line 90
                echo "               <span class=\"planification badge bg-orange-lt\">
                  <i class=\"fas fa-calendar me-1\"></i>
                  ";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_16 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["begin"] ?? null) : null)), "html", null, true);
                echo "
                  &rArr;
                  ";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["end"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 97
            echo "
            ";
            // line 98
            if ((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["sourceitems_id"] ?? null) : null)) {
                // line 99
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 101
                ob_start(function () { return ''; });
                // line 102
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 103
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["sourceitems_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["merged_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 106
                echo "                  ";
                echo twig_sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 109
            echo "
            ";
            // line 110
            if ((($__internal_compile_20 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["sourceof_items_id"] ?? null) : null)) {
                // line 111
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 113
                ob_start(function () { return ''; });
                // line 114
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 115
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_21 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["sourceof_items_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["promoted_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 118
                echo "                  ";
                echo twig_sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 121
            echo "
            ";
            // line 122
            echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            echo "
         </div>
      </div>

      <script type=\"text/javascript\">
         function change_task_state(tasks_id, target) {
            \$.post('";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
            echo "',
               {'action':     'change_task_state',
                  'tasks_id':   tasks_id,
                  'parenttype': '";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 131), "html", null, true);
            echo "',
                  '";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 132), "html", null, true);
            echo "': ";
            echo twig_escape_filter($this->env, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["id"] ?? null) : null), "html", null, true);
            echo "
               })
               .done(function(response) {
                  \$(target).closest('.timeline-item').find('.state')
                     .removeClass('state_1 state_2')
                     .addClass('state_'+response.state)
                     .attr('title', response.label);

                  \$(target).closest('.timeline-item').find('.read-only-content')
                     .toggleClass('done');

                  var todo_tasks   = \$('.todo-list-state .state.state_1').length;
                  var done_tasks   = \$('.todo-list-state .state.state_2').length;
                  var total_tasks  = todo_tasks + done_tasks;
                  var percent_done = Math.floor(100 * done_tasks / total_tasks);

                  \$('.timeline-progress')
                     .css('width', percent_done + '%')
                     .attr('aria-valuenow', percent_done);
                  \$('.task-progress-label').html(percent_done + '%');
               });
         }
      </script>
   ";
        } else {
            // line 156
            echo "      <div class=\"itiltask\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 158), "html", null, true);
            echo "\"  enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once ";
            echo ($context["formoptions"] ?? null);
            echo ">
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 159), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 160), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 160)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["id"] ?? null) : null), "html", null, true);
            echo "\" />
            ";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            <div class=\"row mx-n3 mx-xxl-auto\">
               <div class=\"col-12 col-xl-7 col-xxl-8\">
                  ";
            // line 165
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,             // line 167
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 167)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "entities_id" => (($__internal_compile_25 = twig_get_attribute($this->env, $this->source,             // line 175
($context["item"] ?? null), "fields", [], "any", false, false, false, 175)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["entities_id"] ?? null) : null), "rand" =>             // line 176
($context["rand"] ?? null)]], 165, $context, $this->getSourceContext());
            // line 178
            echo "
               </div>
               <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-o pe-xxl-auto\">
                  <div class=\"row\">

                     ";
            // line 183
            ob_start(function () { return ''; });
            // line 184
            echo "                        <i class=\"fas fa-reply fa-fw me-1\"
                           title=\"";
            // line 185
            echo twig_escape_filter($this->env, _n("Task template", "Task templates", Session::getPluralNumber()), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 187
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["TaskTemplate", "tasktemplates_id", (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 190
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 190)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["tasktemplates_id"] ?? null) : null),             // line 191
($context["task_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itiltasktemplate_update" .             // line 195
($context["rand"] ?? null)) . "(this.value)"), "entity" => (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 196
($context["item"] ?? null), "fields", [], "any", false, false, false, 196)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["entities_id"] ?? null) : null), "rand" =>             // line 197
($context["rand"] ?? null)]], 187, $context, $this->getSourceContext());
            // line 199
            echo "

                     ";
            // line 201
            ob_start(function () { return ''; });
            // line 202
            echo "                        <i class=\"fas fa-calendar fa-fw me-1\"
                           title=\"";
            // line 203
            echo twig_escape_filter($this->env, _n("Date", "Dates", 1), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_date_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 205
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 207
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 207)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["date"] ?? null) : null),             // line 208
($context["task_date_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 212
($context["rand"] ?? null)]], 205, $context, $this->getSourceContext());
            // line 214
            echo "

                     ";
            // line 217
            echo "                     ";
            ob_start(function () { return ''; });
            // line 218
            echo "                        <i class=\"fas fa-tag fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, _n("Category", "Categories", 1), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_category_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 220
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["TaskCategory", "taskcategories_id", (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 223
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 223)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["taskcategories_id"] ?? null) : null),             // line 224
($context["task_category_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 228
($context["item"] ?? null), "fields", [], "any", false, false, false, 228)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["entities_id"] ?? null) : null), "condition" => ["is_active" => 1], "rand" =>             // line 232
($context["rand"] ?? null)]], 220, $context, $this->getSourceContext());
            // line 234
            echo "

                     ";
            // line 237
            echo "                     ";
            ob_start(function () { return ''; });
            // line 238
            echo "                        <i class=\"fas fa-tasks fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Status"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_state_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 240
            echo "
                     ";
            // line 241
            ob_start(function () { return ''; });
            // line 242
            echo "                        ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Planning::dropdownState", ["state", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 242)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["state"] ?? null) : null), true, []]);
            // line 243
            echo "                     ";
            $context["task_state"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 244
            echo "
                     ";
            // line 245
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["state",             // line 247
($context["task_state"] ?? null),             // line 248
($context["task_state_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 252
($context["rand"] ?? null)]], 245, $context, $this->getSourceContext());
            // line 254
            echo "

                     ";
            // line 256
            ob_start(function () { return ''; });
            // line 257
            echo "                        <i class=\"ti ti-lock fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_private_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 259
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 261
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 261)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["is_private"] ?? null) : null),             // line 262
($context["task_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 266
($context["rand"] ?? null)]], 259, $context, $this->getSourceContext());
            // line 268
            echo "

                     ";
            // line 270
            if ((($context["can_read_kb"] ?? null) && (($context["kb_id_toload"] ?? null) > 0))) {
                // line 271
                echo "                        ";
                ob_start(function () { return ''; });
                // line 272
                echo "                           <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 273
                echo twig_escape_filter($this->env, twig_replace_filter(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                echo "\"></i>
                        ";
                $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 275
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id", 1,                 // line 278
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 282
($context["rand"] ?? null), "yes_value" =>                 // line 283
($context["kb_id_toload"] ?? null)]], 275, $context, $this->getSourceContext());
                // line 285
                echo "
                     ";
            }
            // line 287
            echo "
                     ";
            // line 288
            if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                // line 289
                echo "                        ";
                ob_start(function () { return ''; });
                // line 290
                echo "                           <i class=\"far fa-save fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                $context["task_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 293
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["_task_to_kb", 0,                 // line 296
($context["task_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 300
($context["rand"] ?? null)]], 293, $context, $this->getSourceContext());
                // line 302
                echo "
                     ";
            }
            // line 304
            echo "
                     ";
            // line 306
            echo "                     ";
            ob_start(function () { return ''; });
            // line 307
            echo "                        <i class=\"fas fa-stopwatch fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Duration"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_actiontime_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 309
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 309)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["actiontime"] ?? null) : null), ($context["task_actiontime_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 312
($context["rand"] ?? null), "min" => 0, "max" => (8 * twig_constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true, "toadd" => twig_array_map($this->env, range(9, 100),             // line 317
function ($__i__) use ($context, $macros) { $context["i"] = $__i__; return (($context["i"] ?? null) * twig_constant("HOUR_TIMESTAMP")); })]], 309, $context, $this->getSourceContext());
            // line 318
            echo "

                     ";
            // line 321
            echo "                     ";
            ob_start(function () { return ''; });
            // line 322
            echo "                        <i class=\"fas fa-user fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_user_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 324
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_tech", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 327
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 327), "users_id_tech", [], "array", true, true, false, 327)) ? (_twig_default_filter((($__internal_compile_34 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 327)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["users_id_tech"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))),             // line 328
($context["task_user_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 332
($context["item"] ?? null), "fields", [], "any", false, false, false, 332)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["entities_id"] ?? null) : null), "right" => "own_ticket", "rand" =>             // line 334
($context["rand"] ?? null)]], 324, $context, $this->getSourceContext());
            // line 336
            echo "

                     ";
            // line 339
            echo "                     ";
            ob_start(function () { return ''; });
            // line 340
            echo "                        <i class=\"fas fa-users fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_group_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 342
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id_tech", (($__internal_compile_36 = twig_get_attribute($this->env, $this->source,             // line 345
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 345)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["groups_id_tech"] ?? null) : null),             // line 346
($context["task_group_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_37 = twig_get_attribute($this->env, $this->source,             // line 350
($context["item"] ?? null), "fields", [], "any", false, false, false, 350)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["entities_id"] ?? null) : null), "condition" => ["is_task" => 1], "rand" =>             // line 352
($context["rand"] ?? null)]], 342, $context, $this->getSourceContext());
            // line 354
            echo "

                     <script type=\"text/javascript\">
                        function showPlanUpdate";
            // line 357
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(e) {
                           \$('#plan";
            // line 358
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').hide();
                           \$('#viewplan";
            // line 359
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').load('";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/planning.php"), "html", null, true);
            echo "', {
                              action: \"add_event_classic_form\",
                              form: \"followups\", // Was followups for tasks before. Can't find where this is used.
                              entity: ";
            // line 362
            echo twig_escape_filter($this->env, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 362)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["entities_id"] ?? null) : null), "html", null, true);
            echo ",
                              rand_user: ";
            // line 363
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo ",
                              rand_group: ";
            // line 364
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo ",
                              itemtype: \"";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "type", [], "any", false, false, false, 365), "html", null, true);
            echo "\",
                              items_id: ";
            // line 366
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 366), "id", [], "array", true, true, false, 366)) ? (_twig_default_filter((($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 366)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["id"] ?? null) : null),  -1)) : ( -1)), "html", null, true);
            echo ",
                              parent_itemtype: \"";
            // line 367
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 367), "html", null, true);
            echo "\",
                              parent_items_id: ";
            // line 368
            echo twig_escape_filter($this->env, (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 368)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["id"] ?? null) : null), "html", null, true);
            echo ",
                              parent_fk_field: \"";
            // line 369
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 369), "html", null, true);
            echo "\",
                              begin: \"";
            // line 370
            echo twig_escape_filter($this->env, (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 370)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["begin"] ?? null) : null), "html", null, true);
            echo "\",
                              end: \"";
            // line 371
            echo twig_escape_filter($this->env, (($__internal_compile_42 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 371)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["end"] ?? null) : null), "html", null, true);
            echo "\",
                           });
                        }
                     </script>
                     <div class=\"col-12\">
                        ";
            // line 376
            if ((twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($__internal_compile_43 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 376)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["id"] ?? null) : null), twig_constant("UPDATE")], "method", false, false, false, 376) && (($__internal_compile_44 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 376)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["begin"] ?? null) : null))) {
                // line 377
                echo "                           <script type=\"text/javascript\">
                              showPlanUpdate";
                // line 378
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "();
                           </script>
                           <button id=\"unplan";
                // line 380
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-outline-warning\" type=\"submit\" name=\"unplan\"
                                 onclick=\"return confirm('";
                // line 381
                echo twig_escape_filter($this->env, __("Confirm the deletion of planning?"), "html", null, true);
                echo "');\">
                              <i class=\"fas ti ti-calendar-off\"></i>
                              <span>";
                // line 383
                echo twig_escape_filter($this->env, __("Unplan"), "html", null, true);
                echo "</span>
                           </button>
                        ";
            } else {
                // line 386
                echo "                           <button id=\"plan";
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-outline-secondary text-truncate\" onclick=\"showPlanUpdate";
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "()\" type=\"button\">
                              <i class=\"fas fa-calendar\"></i>
                              <span>";
                // line 388
                echo twig_escape_filter($this->env, __("Plan this task"), "html", null, true);
                echo "</span>
                           </button>
                        ";
            }
            // line 391
            echo "                        <div id=\"viewplan";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"></div>
                     </div>
                  </div>
               </div>
            </div>

            ";
            // line 397
            ob_start(function () { return ''; });
            // line 398
            echo "               ";
            $context["show_pending_reasons_actions"] = (((($__internal_compile_45 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 398)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["status"] ?? null) : null) == twig_constant("CommonITILObject::WAITING")) &&  !($context["has_pending_reason"] ?? null));
            // line 399
            echo "               <span
                  class=\"input-group-text bg-yellow-lt py-0 pe-0 ";
            // line 400
            echo ((($context["show_pending_reasons_actions"] ?? null)) ? ("flex-fill") : (""));
            echo "\"
                  id=\"pending-reasons-control-";
            // line 401
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
               >
                  <span class=\"d-inline-flex align-items-center\" title=\"";
            // line 403
            echo twig_escape_filter($this->env, __("Set the status to pending"), "html", null, true);
            echo "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                     <i class=\"fas fa-pause me-2\"></i>
                     <label class=\"form-check form-switch mt-2\">
                        <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                        <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                              id=\"enable-pending-reasons-";
            // line 409
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                              role=\"button\"
                              ";
            // line 411
            echo ((((($__internal_compile_46 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 411)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["status"] ?? null) : null) == twig_constant("CommonITILObject::WAITING"))) ? ("checked") : (""));
            echo "
                              data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
            // line 412
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" />
                     </label>
                  </span>

                  ";
            // line 416
            if ( !($context["has_pending_reason"] ?? null)) {
                // line 417
                echo "                     <div
                        class=\"collapse ps-2 py-1 flex-fill ";
                // line 418
                echo ((($context["show_pending_reasons_actions"] ?? null)) ? ("show") : (""));
                echo "\"
                        aria-expanded=\"";
                // line 419
                echo ((($context["show_pending_reasons_actions"] ?? null)) ? ("true") : ("false"));
                echo "\"
                        id=\"pending-reasons-setup-";
                // line 420
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                     >
                        ";
                // line 422
                echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                echo "
                     </div>
                  ";
            }
            // line 425
            echo "               </span>
            ";
            $context["pending_reasons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 427
            echo "
            ";
            // line 428
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "
            ";
            // line 430
            echo "            <div class=\"d-flex card-footer mx-n3 mb-n3 flex-wrap\" style=\"row-gap: 10px; min-height: 79px\">
               ";
            // line 431
            if (((($__internal_compile_47 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 431)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["id"] ?? null) : null) <= 0)) {
                // line 432
                echo "                  ";
                // line 433
                echo "                  <div class=\"input-group flex-nowrap\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 436
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                     </button>
                     ";
                // line 438
                echo ($context["pending_reasons"] ?? null);
                echo "
                  </div>
               ";
            } else {
                // line 441
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_48 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 441)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 444
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 447
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($__internal_compile_49 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 447)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["id"] ?? null) : null), twig_constant("PURGE")], "method", false, false, false, 447)) {
                    // line 448
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 449
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 451
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 454
                echo "                  ";
                echo ($context["pending_reasons"] ?? null);
                echo "
               ";
            }
            // line 456
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 458
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itiltasktemplate_update";
            // line 463
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 465
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/task.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  tasktemplates_id: value,
                  items_id: '";
            // line 469
            echo twig_escape_filter($this->env, (($__internal_compile_50 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 469)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 470
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 470), "html", null, true);
            echo "'
               }
            }).done(function (data) {
                if (data.content !== undefined) {
                    // set textarea content
                    setRichTextEditorContent(\"content_";
            // line 475
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\", data.content);
                }

                if (data.taskcategories_id !== undefined) {
                    // set category
                    const taskcategories_id = isNaN(parseInt(data.taskcategories_id))
                        ? 0
                        : parseInt(data.taskcategories_id);

                     //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
                     //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
                     var newOption = new Option(data.taskcategories_name, taskcategories_id, true, true);
                     \$(\"#dropdown_taskcategories_id";
            // line 487
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").append(newOption).trigger('change');
                }

                if (data.is_private !== undefined) {
                    // set is_private
                    \$(\"#is_private_";
            // line 492
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")
                        .prop(\"checked\", data.is_private == \"0\"
                            ? false
                            : true);
                }

                if (data.state !== undefined) {
                    // Set state
                    \$(\"#dropdown_state";
            // line 500
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.state);
                }

                if (data.actiontime !== undefined) {
                    // Set duration
                    \$(\"#dropdown_actiontime";
            // line 505
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.actiontime);
                }

                if (data.users_id_tech !== undefined) {
                    // Set user
                    \$(\"#dropdown_users_id_tech";
            // line 510
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.users_id_tech);
                }

               if (data.groups_id_tech !== undefined) {
                   // Set group
                   \$(\"#dropdown_groups_id_tech";
            // line 515
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.groups_id_tech);
               }
            });
         }
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  875 => 515,  867 => 510,  859 => 505,  851 => 500,  840 => 492,  832 => 487,  817 => 475,  809 => 470,  805 => 469,  798 => 465,  793 => 463,  785 => 458,  781 => 456,  775 => 454,  769 => 451,  764 => 449,  761 => 448,  759 => 447,  753 => 444,  746 => 441,  740 => 438,  735 => 436,  730 => 433,  728 => 432,  726 => 431,  723 => 430,  719 => 428,  716 => 427,  712 => 425,  706 => 422,  701 => 420,  697 => 419,  693 => 418,  690 => 417,  688 => 416,  681 => 412,  677 => 411,  672 => 409,  663 => 403,  658 => 401,  654 => 400,  651 => 399,  648 => 398,  646 => 397,  636 => 391,  630 => 388,  622 => 386,  616 => 383,  611 => 381,  607 => 380,  602 => 378,  599 => 377,  597 => 376,  589 => 371,  585 => 370,  581 => 369,  577 => 368,  573 => 367,  569 => 366,  565 => 365,  561 => 364,  557 => 363,  553 => 362,  545 => 359,  541 => 358,  537 => 357,  532 => 354,  530 => 352,  529 => 350,  528 => 346,  527 => 345,  525 => 342,  519 => 340,  516 => 339,  512 => 336,  510 => 334,  509 => 332,  508 => 328,  507 => 327,  505 => 324,  499 => 322,  496 => 321,  492 => 318,  490 => 317,  489 => 312,  487 => 309,  481 => 307,  478 => 306,  475 => 304,  471 => 302,  469 => 300,  468 => 296,  466 => 293,  459 => 290,  456 => 289,  454 => 288,  451 => 287,  447 => 285,  445 => 283,  444 => 282,  443 => 278,  441 => 275,  436 => 273,  433 => 272,  430 => 271,  428 => 270,  424 => 268,  422 => 266,  421 => 262,  420 => 261,  418 => 259,  412 => 257,  410 => 256,  406 => 254,  404 => 252,  403 => 248,  402 => 247,  401 => 245,  398 => 244,  395 => 243,  392 => 242,  390 => 241,  387 => 240,  381 => 238,  378 => 237,  374 => 234,  372 => 232,  371 => 228,  370 => 224,  369 => 223,  367 => 220,  361 => 218,  358 => 217,  354 => 214,  352 => 212,  351 => 208,  350 => 207,  348 => 205,  343 => 203,  340 => 202,  338 => 201,  334 => 199,  332 => 197,  331 => 196,  330 => 195,  329 => 191,  328 => 190,  326 => 187,  321 => 185,  318 => 184,  316 => 183,  309 => 178,  307 => 176,  306 => 175,  305 => 167,  304 => 165,  297 => 161,  291 => 160,  287 => 159,  281 => 158,  277 => 156,  248 => 132,  244 => 131,  238 => 128,  229 => 122,  226 => 121,  219 => 118,  213 => 115,  210 => 114,  208 => 113,  204 => 111,  202 => 110,  199 => 109,  192 => 106,  186 => 103,  183 => 102,  181 => 101,  177 => 99,  175 => 98,  172 => 97,  166 => 94,  161 => 92,  157 => 90,  155 => 89,  152 => 88,  146 => 85,  142 => 83,  140 => 82,  137 => 81,  131 => 78,  128 => 77,  126 => 76,  123 => 75,  117 => 72,  113 => 70,  111 => 69,  108 => 68,  103 => 65,  101 => 64,  100 => 63,  98 => 62,  95 => 61,  93 => 60,  90 => 59,  88 => 58,  82 => 54,  80 => 51,  76 => 50,  70 => 48,  67 => 47,  63 => 46,  58 => 34,  56 => 44,  54 => 43,  52 => 42,  50 => 41,  48 => 40,  46 => 39,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_task.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_task.html.twig");
    }
}
