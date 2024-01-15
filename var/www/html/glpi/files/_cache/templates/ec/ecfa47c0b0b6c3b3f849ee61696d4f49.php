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

/* pages/setup/general/base_form.html.twig */
class __TwigTemplate_2c6ebce5eb541ed7ede51ea1067036ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'config_fields' => [$this, 'block_config_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        if (($context["canedit"] ?? null)) {
            // line 35
            echo "    <form name=\"form\"
          action=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Config"), "html", null, true);
            echo "\"
          method=\"post\"
          data-track-changes=\"true\">
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
";
        }
        // line 41
        echo "
<div class=\"row\">
    ";
        // line 43
        $this->displayBlock('config_fields', $context, $blocks);
        // line 45
        echo "</div>

";
        // line 47
        if (($context["canedit"] ?? null)) {
            // line 48
            echo "        <div class=\"card-footer mx-n2 d-flex\">
            <button type=\"submit\" name=\"update\" value=\"1\" class=\"ms-auto btn btn-primary\">
                <i class=\"ti ti-device-floppy\"></i>
                <span>";
            // line 51
            echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
            echo "</span>
            </button>
        </div>
    </form>
";
        }
    }

    // line 43
    public function block_config_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    ";
    }

    public function getTemplateName()
    {
        return "pages/setup/general/base_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 44,  84 => 43,  74 => 51,  69 => 48,  67 => 47,  63 => 45,  61 => 43,  57 => 41,  52 => 39,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/setup/general/base_form.html.twig", "/var/www/html/glpi/templates/pages/setup/general/base_form.html.twig");
    }
}
