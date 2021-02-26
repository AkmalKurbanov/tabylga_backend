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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/partials/site/inner_banner.htm */
class __TwigTemplate_0fd18cb4473a11e0a9fa758dcac4ad071e2a5823e4368e450bbb985c46d1d65e extends \Twig\Template
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
        $tags = array("if" => 5, "for" => 28);
        $filters = array("escape" => 30);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"breadcrumb-inner padding-top-240\">
        ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "url", [], "any", false, false, true, 5) == "/search")) {
            // line 6
            echo "        <h1 class=\"page-title\">Результаты поиска</h1>
        ";
        } else {
            // line 8
            echo "        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "url", [], "any", false, false, true, 10) == "/blog/:page?")) {
            // line 11
            echo "        <h1 class=\"page-title\">Блог</h1>
        ";
        } else {
            // line 13
            echo "        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 15), "url", [], "any", false, false, true, 15) == "/blog/post/:slug")) {
            // line 16
            echo "        <h1 class=\"page-title\">Блог пост</h1>
        ";
        } else {
            // line 18
            echo "        ";
        }
        // line 19
        echo "
        ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 20), "url", [], "any", false, false, true, 20) == "/blog/category/:slug/:page?")) {
            // line 21
            echo "        <h1 class=\"page-title\">Блог категории</h1>
        ";
        } else {
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        ";
        // line 25
        if (($context["breadcrumbs"] ?? null)) {
            // line 26
            echo "        <ul class=\"page-list\">
          <li><a href=\"index.html\">Главная</a></li>
          ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 29
                echo "          <li class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 29)) ? ("active") : (""));
                echo "\">
            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "title", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo " </a>
          </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </ul>
        ";
        }
        // line 35
        echo "      </div>
    </div>
  </div>
</div>
<div class=\"breadcrumb-icon\">
  <i class=\"flaticon-fireworks\"></i>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/inner_banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 35,  142 => 33,  131 => 30,  126 => 29,  122 => 28,  118 => 26,  116 => 25,  113 => 24,  110 => 23,  106 => 21,  104 => 20,  101 => 19,  98 => 18,  94 => 16,  92 => 15,  89 => 14,  86 => 13,  82 => 11,  80 => 10,  77 => 9,  74 => 8,  70 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"breadcrumb-inner padding-top-240\">
        {% if this.page.url == '/search' %}
        <h1 class=\"page-title\">Результаты поиска</h1>
        {% else %}
        {% endif %}

        {% if this.page.url == '/blog/:page?' %}
        <h1 class=\"page-title\">Блог</h1>
        {% else %}
        {% endif %}

        {% if this.page.url == '/blog/post/:slug' %}
        <h1 class=\"page-title\">Блог пост</h1>
        {% else %}
        {% endif %}

        {% if this.page.url == '/blog/category/:slug/:page?' %}
        <h1 class=\"page-title\">Блог категории</h1>
        {% else %}
        {% endif %}

        {% if breadcrumbs %}
        <ul class=\"page-list\">
          <li><a href=\"index.html\">Главная</a></li>
          {% for breadcrumb in breadcrumbs %}
          <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
            <a href=\"{{ breadcrumb.url }}\">{{ breadcrumb.title }} </a>
          </li>
          {% endfor %}
        </ul>
        {% endif %}
      </div>
    </div>
  </div>
</div>
<div class=\"breadcrumb-icon\">
  <i class=\"flaticon-fireworks\"></i>
</div>", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/inner_banner.htm", "");
    }
}
