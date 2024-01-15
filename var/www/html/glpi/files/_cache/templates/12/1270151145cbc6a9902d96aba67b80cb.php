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

/* pages/setup/authentication.html.twig */
class __TwigTemplate_41581964a30152e297ca38a47597c891 extends Template
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
<div class=\"container\">
   <div class=\"row justify-content-evenly\">
      <div class=\"col-12 col-xxl-4\">
         <div class=\"card\">
            <div class=\"card-header\">
               <h3>";
        // line 39
        echo twig_escape_filter($this->env, __("External authentications"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"list-group list-group-flush\">
               ";
        // line 42
        if (Session::haveRight("config", twig_constant("UPDATE"))) {
            // line 43
            echo "                  <a class=\"list-group-item list-group-item-action\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/auth.settings.php"), "html", null, true);
            echo "\">
                     <i class=\"fa-fw ti ti-adjustments me-1\"></i>
                     <span>";
            // line 45
            echo twig_escape_filter($this->env, __("Setup"), "html", null, true);
            echo "</span>
                  </a>
               ";
        }
        // line 48
        echo "
               ";
        // line 49
        if (($context["can_use_ldap"] ?? null)) {
            // line 50
            echo "                  <a class=\"list-group-item list-group-item-action\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/authldap.php"), "html", null, true);
            echo "\">
                     <i class=\"fa-fw ";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("AuthLDAP::getIcon"), "html", null, true);
            echo " me-1\"></i>
                     <span>";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AuthLDAP"), "html", null, true);
            echo "</span>
                  </a>
               ";
        } else {
            // line 55
            echo "                  <div class=\"alert alert-important alert-warning m-3\">
                    <i class=\"fa-fw fa fa-exclamation-triangle me-2\"></i>
                    ";
            // line 57
            echo twig_escape_filter($this->env, __("The LDAP extension of your PHP parser isn’t installed"), "html", null, true);
            echo "
                  </div>
               ";
        }
        // line 60
        echo "
               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/authmail.php"), "html", null, true);
        echo "\">
                  <i class=\"fa-fw ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("AuthMail::getIcon"), "html", null, true);
        echo " me-1\"></i>
                  <span>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AuthMail"), "html", null, true);
        echo "</span>
               </a>

               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/auth.others.php"), "html", null, true);
        echo "\">
                  <i class=\"fa-fw ti ti-login me-1\"></i>
                  <span>";
        // line 68
        echo twig_escape_filter($this->env, __("Others authentication methods"), "html", null, true);
        echo "</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/setup/authentication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 68,  112 => 66,  106 => 63,  102 => 62,  98 => 61,  95 => 60,  89 => 57,  85 => 55,  79 => 52,  75 => 51,  70 => 50,  68 => 49,  65 => 48,  59 => 45,  53 => 43,  51 => 42,  45 => 39,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/setup/authentication.html.twig", "/var/www/html/glpi/templates/pages/setup/authentication.html.twig");
    }
}
