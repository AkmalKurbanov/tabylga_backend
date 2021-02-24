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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/partials/site/header.htm */
class __TwigTemplate_67ef8db4e369560854ecf9c00c5908a878c502c72248ec6cd4363e0e96f3b588 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 18, "partial" => 20);
        $filters = array("escape" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- navbar start -->
<div class=\"politix-navbar\">
  <nav class=\"navbar navbar-area navbar-expand-lg nav-style-02\">
    <div class=\"container nav-container\">
      <div class=\"responsive-mobile-menu\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#billatrail_main_menu\"
          aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"bar1\"></span>
          <span class=\"bar2\"></span>
          <span class=\"bar3\"></span>
        </button>
      </div>
      <div class=\"logo\">
        <a href=\"index.html\"> <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 15), "logoHeader", [], "any", false, false, true, 15), "path", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "\" alt=\"logo\"></a>
      </div>
      <div class=\"collapse navbar-collapse\" id=\"billatrail_main_menu\">
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 18)) {
            // line 19
            echo "        <ul class=\"navbar-nav menu-open\">
          ";
            // line 20
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 20)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 21
            echo "        </ul>
        ";
        }
        // line 23
        echo "      </div>
      <div class=\"nav-right-part\">
        <ul>
          <li class=\"search\" id=\"search\">
            <a href=\"#\"><i class=\"fa fa-search\"></i></a>
          </li>
          <li class=\"menubar d-none d-lg-block\" id=\"navigation-button\">
            <a><i class=\"flaticon-menu-button\"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- navbar end -->";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 23,  94 => 21,  89 => 20,  86 => 19,  84 => 18,  78 => 15,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- navbar start -->
<div class=\"politix-navbar\">
  <nav class=\"navbar navbar-area navbar-expand-lg nav-style-02\">
    <div class=\"container nav-container\">
      <div class=\"responsive-mobile-menu\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#billatrail_main_menu\"
          aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"bar1\"></span>
          <span class=\"bar2\"></span>
          <span class=\"bar3\"></span>
        </button>
      </div>
      <div class=\"logo\">
        <a href=\"index.html\"> <img src=\"{{this.theme.logoHeader.path}}\" alt=\"logo\"></a>
      </div>
      <div class=\"collapse navbar-collapse\" id=\"billatrail_main_menu\">
        {% if staticMenu.menuItems %}
        <ul class=\"navbar-nav menu-open\">
          {% partial staticMenu ~ \"::items\" items=staticMenu.menuItems %}
        </ul>
        {% endif %}
      </div>
      <div class=\"nav-right-part\">
        <ul>
          <li class=\"search\" id=\"search\">
            <a href=\"#\"><i class=\"fa fa-search\"></i></a>
          </li>
          <li class=\"menubar d-none d-lg-block\" id=\"navigation-button\">
            <a><i class=\"flaticon-menu-button\"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- navbar end -->", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/header.htm", "");
    }
}
