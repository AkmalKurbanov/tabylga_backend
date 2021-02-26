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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/partials/site/banner_mine.htm */
class __TwigTemplate_7d74c6736bb7b25a7810b0eae8033d705c235781a65613b8de42b5e6c8c902b4 extends \Twig\Template
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
        $tags = array("set" => 3, "for" => 11);
        $filters = array("escape" => 15, "raw" => 20);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'raw'],
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
        echo "<div class=\"container-fluid\">
  <div class=\"banner-slider-5\">
    ";
        // line 3
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 3);
        // line 4
        echo "    ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 4);
        // line 5
        echo "    ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 5);
        // line 6
        echo "    ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 6);
        // line 7
        echo "    ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 7);
        // line 8
        echo "    ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 8);
        // line 9
        echo "

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 12
            echo "    <div class=\"banner-content-style-5\">
      <div class=\"row\">
        <div class=\"thumb col-lg-6\">
          <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "img", [], "any", false, false, true, 15), "path", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" alt=\"\">
        </div>
        <div class=\"content align-self-center col-lg-5\">
          <h2 class=\"title\" data-animation-in=\"fadeInLeft\">";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</h2>
          <div class=\"description\" data-animation-in=\"fadeInDown\">
            ";
            // line 20
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 20), 20, $this->source);
            echo "
          </div>
          <div class=\"margin-top-50\">
            <div class=\"btn-wrapper mr-3\" data-animation-in=\"fadeInDown\">
              <a class=\"btn btn-custom-default\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "link", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
  </div>
</div>
<div class=\"banner5-sm-slider\">
  <div class=\"sm-slider-item\">
    <div class=\"thumb\">
      <div class=\"content\">
        <h3>My presentation</h3>
      </div>
      <img src=\"assets/img/banner/8.png\" alt=\"\">
    </div>
  </div>
  <div class=\"sm-slider-item\">
    <div class=\"thumb\">
      <div class=\"content\">
        <h3>My presentation</h3>
      </div>
      <img src=\"assets/img/banner/8.png\" alt=\"\">
    </div>
  </div>
</div>
<div class=\"banner5-social\">
  <ul>
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 54), "social", [], "any", false, false, true, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "social_name", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "  </ul>
</div>
<div class=\"controler-wrapper-style-04\">
  <span class=\"active-controler\">01</span>
  <div class=\"progressbar\">
    <span class=\"home-slider-progress\"></span>
    <span class=\"home-slider-progress-active\"></span>
  </div>
  <span class=\"total-controler\">04</span>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/banner_mine.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 57,  156 => 55,  152 => 54,  127 => 31,  114 => 24,  107 => 20,  102 => 18,  96 => 15,  91 => 12,  87 => 11,  83 => 9,  80 => 8,  77 => 7,  74 => 6,  71 => 5,  68 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
  <div class=\"banner-slider-5\">
    {% set records = builderList.records %}
    {% set displayColumn = builderList.displayColumn %}
    {% set noRecordsMessage = builderList.noRecordsMessage %}
    {% set detailsPage = builderList.detailsPage %}
    {% set detailsKeyColumn = builderList.detailsKeyColumn %}
    {% set detailsUrlParameter = builderList.detailsUrlParameter %}


    {% for record in records %}
    <div class=\"banner-content-style-5\">
      <div class=\"row\">
        <div class=\"thumb col-lg-6\">
          <img src=\"{{record.img.path}}\" alt=\"\">
        </div>
        <div class=\"content align-self-center col-lg-5\">
          <h2 class=\"title\" data-animation-in=\"fadeInLeft\">{{record.title}}</h2>
          <div class=\"description\" data-animation-in=\"fadeInDown\">
            {{ record.description | raw }}
          </div>
          <div class=\"margin-top-50\">
            <div class=\"btn-wrapper mr-3\" data-animation-in=\"fadeInDown\">
              <a class=\"btn btn-custom-default\" href=\"{{record.link}}\">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {% endfor %}

  </div>
</div>
<div class=\"banner5-sm-slider\">
  <div class=\"sm-slider-item\">
    <div class=\"thumb\">
      <div class=\"content\">
        <h3>My presentation</h3>
      </div>
      <img src=\"assets/img/banner/8.png\" alt=\"\">
    </div>
  </div>
  <div class=\"sm-slider-item\">
    <div class=\"thumb\">
      <div class=\"content\">
        <h3>My presentation</h3>
      </div>
      <img src=\"assets/img/banner/8.png\" alt=\"\">
    </div>
  </div>
</div>
<div class=\"banner5-social\">
  <ul>
    {% for item in this.theme.social %}
    <li><a href=\"{{item.url}}\">{{item.social_name}}</a></li>
    {% endfor %}
  </ul>
</div>
<div class=\"controler-wrapper-style-04\">
  <span class=\"active-controler\">01</span>
  <div class=\"progressbar\">
    <span class=\"home-slider-progress\"></span>
    <span class=\"home-slider-progress-active\"></span>
  </div>
  <span class=\"total-controler\">04</span>
</div>", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/banner_mine.htm", "");
    }
}
