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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/pages/blog.htm */
class __TwigTemplate_5411ad22754a038942aece1ae2627d5ea1fbaeb89cde7694a18c7f393359df6a extends \Twig\Template
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
        $tags = array("set" => 8, "for" => 10);
        $filters = array("escape" => 15, "slice" => 16, "resize" => 17, "date" => 22);
        $functions = array("str_words" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'slice', 'resize', 'date'],
                ['str_words']
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
        echo "<!-- blog area start -->
<div class=\"blog-area margin-top-120\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <div class=\"row\">

          ";
        // line 8
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 8);
        // line 9
        echo "
          ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "
          <div class=\"col-md-12\">
            <div class=\"blog-item-style-01 margin-bottom-30\">
              <div class=\"b-img\">
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">
                  ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 16), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 17
                echo "                  <img src=\"";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 17), 17, $this->source), 810, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "\"
                    alt=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\">
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                </a>
                <div class=\"blog-date-box\">
                  <h4>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 22), 22, $this->source), "d"), "html", null, true);
            echo "<br><span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 22), 22, $this->source), "M"), "html", null, true);
            echo "</span></h4>
                </div>
                <div class=\"small-thumb\">
                  <img src=\"assets/img/blog/sm1.png\" alt=\"small thumb\">
                </div>
              </div>
              <div class=\"b-content\">
                <div class=\"blog-meta flex-column flex-lg-row\">
                  <span class=\"causes-tag mr-3\"><a href=\"#\">Politics</a></span>
                  <ul>
                    <li><span>Поделиться</span></li>
                    <li>
                      <script src=\"https://yastatic.net/share2/share.js\"></script>
                      <div class=\"ya-share2\" data-curtain data-size=\"s\" data-shape=\"round\" data-limit=\"0\"
                        data-more-button-type=\"short\"
                        data-services=\"vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp,skype\"></div>
                    </li>
                  </ul>
                </div>
                <h4 class=\"section-title\"><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</a>
                </h4>
                <p>";
            // line 43
            echo call_user_func_array($this->env->getFunction('str_words')->getCallable(), ["words", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 43), 43, $this->source), 30]);
            echo "</p>
                <div class=\"btn-wrapper\">
                  <a href=\"#\">Подробнее</a> ➝
                </div>
              </div>
            </div>
          </div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"blog-right-content widget-area sidebar\">
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
              <h4>Latest posts</h4>
            </div>
            <div class=\"latest-item\">
              <div class=\"content-part\">
                <p><a href=\"blog-details.html\">Breakfast suffering one who all otherwise lorem ispum suspected</a>
                </p>
                <span class=\"text\">25 April 2020</span>
              </div>
            </div>
            <div class=\"latest-item\">
              <div class=\"content-part\">
                <p><a href=\"blog-details.html\">Breakfast suffering one who all otherwise lorem ispum suspected</a>
                </p>
                <span class=\"text\">25 April 2020</span>
              </div>
            </div>
            <div class=\"latest-item\">
              <div class=\"content-part\">
                <p><a href=\"blog-details.html\">Breakfast suffering one who all otherwise lorem ispum suspected</a>
                </p>
                <span class=\"text\">25 April 2020</span>
              </div>
            </div>
          </div>
          <div class=\"widget widget_categories\">
            <h4 class=\"widget-title\">Categories</h4>
            <ul class=\"cat-menu\">
              <li><a href=\"#\">Political party news <span class=\"text-right\">(52)</span></a></li>
              <li><a href=\"#\">2020 Election <span class=\"text-right\">(52)</span></a></li>
              <li><a href=\"#\"> Campaign <span class=\"text-right\">(52)</span></a></li>
              <li><a href=\"#\">Event & Seminar <span class=\"text-right\">(52)</span></a></li>
              <li><a href=\"#\">Web Development <span class=\"text-right\">(52)</span></a></li>
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
        </div>
      </div>
    </div>
  </div>
</div>
<!-- blog area end -->";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 52,  142 => 43,  135 => 41,  111 => 22,  107 => 20,  99 => 18,  94 => 17,  90 => 16,  86 => 15,  80 => 11,  76 => 10,  73 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- blog area start -->
<div class=\"blog-area margin-top-120\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <div class=\"row\">

          {% set posts = blogPosts.posts %}

          {% for post in posts %}

          <div class=\"col-md-12\">
            <div class=\"blog-item-style-01 margin-bottom-30\">
              <div class=\"b-img\">
                <a href=\"{{ post.url }}\">
                  {% for image in post.featured_images|slice(0,1) %}
                  <img src=\"{{image.path | resize(810, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}\"
                    alt=\"{{ post.title }}\">
                  {% endfor %}
                </a>
                <div class=\"blog-date-box\">
                  <h4>{{ post.published_at |date('d') }}<br><span>{{ post.published_at |date('M') }}</span></h4>
                </div>
                <div class=\"small-thumb\">
                  <img src=\"assets/img/blog/sm1.png\" alt=\"small thumb\">
                </div>
              </div>
              <div class=\"b-content\">
                <div class=\"blog-meta flex-column flex-lg-row\">
                  <span class=\"causes-tag mr-3\"><a href=\"#\">Politics</a></span>
                  <ul>
                    <li><span>Поделиться</span></li>
                    <li>
                      <script src=\"https://yastatic.net/share2/share.js\"></script>
                      <div class=\"ya-share2\" data-curtain data-size=\"s\" data-shape=\"round\" data-limit=\"0\"
                        data-more-button-type=\"short\"
                        data-services=\"vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp,skype\"></div>
                    </li>
                  </ul>
                </div>
                <h4 class=\"section-title\"><a href=\"{{ post.url }}\">{{ post.title }}</a>
                </h4>
                <p>{{ str_words(post.excerpt, 30) }}</p>
                <div class=\"btn-wrapper\">
                  <a href=\"#\">Подробнее</a> ➝
                </div>
              </div>
            </div>
          </div>

          {% endfor %}

        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"blog-right-content widget-area sidebar\">
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
              <h4>Latest posts</h4>
            </div>
            <div class=\"latest-item\">
              <div class=\"content-part\">
                <p><a href=\"blog-details.html\">Breakfast suffering one who all otherwise lorem ispum suspected</a>
                </p>
                <span class=\"text\">25 April 2020</span>
              </div>
            </div>
            <div class=\"latest-item\">
              <div class=\"content-part\">
                <p><a href=\"blog-details.html\">Breakfast suffering one who all otherwise lorem ispum suspected</a>
                </p>
                <span class=\"text\">25 April 2020</span>
              </div>
            </div>
            <div class=\"latest-item\">
              <div class=\"content-part\">
                <p><a href=\"blog-details.html\">Breakfast suffering one who all otherwise lorem ispum suspected</a>
                </p>
                <span class=\"text\">25 April 2020</span>
              </div>
            </div>
          </div>
          <div class=\"widget widget_categories\">
            <h4 class=\"widget-title\">Categories</h4>
            <ul class=\"cat-menu\">
              <li><a href=\"#\">Political party news <span class=\"text-right\">(52)</span></a></li>
              <li><a href=\"#\">2020 Election <span class=\"text-right\">(52)</span></a></li>
              <li><a href=\"#\"> Campaign <span class=\"text-right\">(52)</span></a></li>
              <li><a href=\"#\">Event & Seminar <span class=\"text-right\">(52)</span></a></li>
              <li><a href=\"#\">Web Development <span class=\"text-right\">(52)</span></a></li>
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
        </div>
      </div>
    </div>
  </div>
</div>
<!-- blog area end -->", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/blog.htm", "");
    }
}
