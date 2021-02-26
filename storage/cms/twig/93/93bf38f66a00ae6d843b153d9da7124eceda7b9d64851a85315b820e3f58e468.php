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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/pages/search.htm */
class __TwigTemplate_0b16067344484f3c525d49621a090242086afa23520437377ae4afcd165ad017 extends \Twig\Template
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
        $tags = array("set" => 3, "for" => 5, "partial" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
                [],
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
        echo "<div class=\"search-results\">
  <div class=\"container\">
    ";
        // line 3
        $context["results"] = twig_get_attribute($this->env, $this->source, ($context["searchResults"] ?? null), "results", [], "any", false, false, true, 3);
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 6
            echo "    ";
            // line 7
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['result'] = $context["result"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["searchResults"] ?? null) . "::searchresult.htm")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "    ";
            // line 10
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["searchResults"] ?? null) . "::no-results.htm")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['results'] = ($context["results"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["searchResults"] ?? null) . "::pagination.htm")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "
    <div class=\"btn-wrapper align-self-center\">
      <a class=\"btn btn-custom-primary\" href=\"/\">Главная страница</a>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 14,  105 => 13,  102 => 12,  96 => 11,  91 => 10,  89 => 9,  84 => 8,  78 => 7,  76 => 6,  71 => 5,  68 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"search-results\">
  <div class=\"container\">
    {% set results = searchResults.results %}

    {% for result in results %}
    {# Display all results #}
    {% partial searchResults ~ '::searchresult.htm' result = result %}
    {% else %}
    {# No results found #}
    {% partial searchResults ~ '::no-results.htm' %}
    {% endfor %}

    {% partial searchResults ~ '::pagination.htm' results = results %}

    <div class=\"btn-wrapper align-self-center\">
      <a class=\"btn btn-custom-primary\" href=\"/\">Главная страница</a>
    </div>
  </div>
</div>", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/search.htm", "");
    }
}
