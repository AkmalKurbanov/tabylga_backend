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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/partials/site/sidebar_blog.htm */
class __TwigTemplate_4378df4ed76f6f1a20da36a390675241f6b386e34cf94493350dff7e1d0a5de0 extends \Twig\Template
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
        $tags = array("set" => 14, "for" => 16, "if" => 29, "partial" => 31);
        $filters = array("escape" => 19, "date" => 21, "length" => 29);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'partial'],
                ['escape', 'date', 'length'],
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
        echo "<div class=\"blog-right-content widget-area sidebar\">
  <div class=\"widget widget_search\">
    <form class=\"search-form\">
      <div class=\"form-group\">
        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Type something\">
      </div>
      <button class=\"submit-btn\" type=\"submit\">Search</button>
    </form>
  </div>
  <div class=\"widget latest-post-widget\">
    <div class=\"widget-title\">
      <h4>Последние посты</h4>
    </div>
    ";
        // line 14
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["latestPosts"] ?? null), "posts", [], "any", false, false, true, 14);
        // line 15
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "    <div class=\"latest-item\">
      <div class=\"content-part\">
        <p><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</a>
        </p>
        <span class=\"text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 21), 21, $this->source), "d M Y"), "html", null, true);
            echo "</span>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </div>
  <div class=\"widget widget_categories\">
    <h4 class=\"widget-title\">Категории</h4>
    <ul class=\"cat-menu\">
      ";
        // line 29
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, true, 29)) > 0)) {
            // line 30
            echo "
      ";
            // line 31
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->source,             // line 32
($context["blogCategories"] ?? null), "categories", [], "any", false, false, true, 32)            ;
            $context['__cms_partial_params']['currentCategorySlug'] = twig_get_attribute($this->env, $this->source,             // line 33
($context["blogCategories"] ?? null), "currentCategorySlug", [], "any", false, false, true, 33)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 31
($context["blogCategories"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 35
            echo "
      ";
        } else {
            // line 37
            echo "      <p>No categories were found.</p>
      ";
        }
        // line 39
        echo "    </ul>
  </div>
  <div class=\"widget\">
    <div class=\"blog-sidebar-thumb\">
      <div class=\"thumb\">
        <img src=\"assets/img/blog/sidebar-img.png\" alt=\"\">
      </div>
      <div class=\"thumb-content\">
        <h4>Become a volunteer</h4>
        <div class=\"btn-wrapper align-self-center\">
          <a class=\"btn btn-custom-white\" href=\"#\">Join now</a>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/sidebar_blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  131 => 37,  127 => 35,  124 => 31,  122 => 33,  120 => 32,  118 => 31,  115 => 30,  113 => 29,  107 => 25,  97 => 21,  90 => 19,  86 => 17,  82 => 16,  79 => 15,  77 => 14,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"blog-right-content widget-area sidebar\">
  <div class=\"widget widget_search\">
    <form class=\"search-form\">
      <div class=\"form-group\">
        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Type something\">
      </div>
      <button class=\"submit-btn\" type=\"submit\">Search</button>
    </form>
  </div>
  <div class=\"widget latest-post-widget\">
    <div class=\"widget-title\">
      <h4>Последние посты</h4>
    </div>
    {% set posts = latestPosts.posts %}

    {% for post in posts %}
    <div class=\"latest-item\">
      <div class=\"content-part\">
        <p><a href=\"{{ post.url }}\">{{ post.title }}</a>
        </p>
        <span class=\"text\">{{ post.published_at | date('d M Y') }}</span>
      </div>
    </div>
    {% endfor %}
  </div>
  <div class=\"widget widget_categories\">
    <h4 class=\"widget-title\">Категории</h4>
    <ul class=\"cat-menu\">
      {% if blogCategories.categories|length > 0 %}

      {% partial blogCategories ~ \"::items\"
      categories = blogCategories.categories
      currentCategorySlug = blogCategories.currentCategorySlug
  %}

      {% else %}
      <p>No categories were found.</p>
      {% endif %}
    </ul>
  </div>
  <div class=\"widget\">
    <div class=\"blog-sidebar-thumb\">
      <div class=\"thumb\">
        <img src=\"assets/img/blog/sidebar-img.png\" alt=\"\">
      </div>
      <div class=\"thumb-content\">
        <h4>Become a volunteer</h4>
        <div class=\"btn-wrapper align-self-center\">
          <a class=\"btn btn-custom-white\" href=\"#\">Join now</a>
        </div>
      </div>
    </div>
  </div>
</div>", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/sidebar_blog.htm", "");
    }
}
