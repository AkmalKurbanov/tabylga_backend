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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/pages/post.htm */
class __TwigTemplate_df12d23db29013c5a36994a289093f446f105659e8a3fdc4602b3206ce570261 extends \Twig\Template
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
        $tags = array("set" => 6, "for" => 12, "partial" => 141);
        $filters = array("resize" => 13, "escape" => 16, "date" => 16, "raw" => 27);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
                ['resize', 'escape', 'date', 'raw'],
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
        echo "<div class=\"blog-area margin-top-120\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">

        ";
        // line 6
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, true, 6);
        // line 7
        echo "


        <div class=\"blog-details-style-01 margin-bottom-100\">
          <div class=\"b-img\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "            <img src=\"";
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 13), 13, $this->source), 810, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "\" alt=\"\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            <div class=\"blog-date-box\">
              <h4>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 16), 16, $this->source), "d"), "html", null, true);
        echo "<br><span>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 16), 16, $this->source), "M"), "html", null, true);
        echo "</span></h4>
            </div>
          </div>
          <div class=\"b-content\">
            <div class=\"blog-meta\">
              <span class=\"causes-tag mr-3\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 23
            echo "                <a href=\"/blog/category/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</span>
            </div>
            <h4 class=\"section-title\">";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "</h4>
            ";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 27), 27, $this->source);
        echo "
          </div>
        </div>
        <div id=\"comments\" class=\"comments-area comments-area-wrapper\">
          <h4 class=\"comments-title\">5 Comments</h4>
          <ul class=\"comment-list\">
            <li class=\"comment\">
              <div class=\"single-comment justify-content-between d-flex\">
                <div class=\"user justify-content-between d-flex\">
                  <div class=\"thumb\">
                    <img alt=\"\" src=\"assets/img/blog/c1.png\" class=\"avatar\">
                  </div>
                  <div class=\"desc\">
                    <div class=\"d-flex justify-content-between comment_title\">
                      <div class=\"d-flex align-items-center\">
                        <h5>Monalisa Khatun <br><span>5 June 2019</span></h5>
                      </div>
                      <div class=\"c-action\">
                        <ul>
                          <li><a href=\"\"><i class=\"fa fa-heart\"></i></a></li>
                          <li><a href=\"\"><i class=\"fa fa-reply\"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"comment-content\">
                      <p>Sometimes ‘short and sweet’ workouts are all you need. If you've done a HIIT workout before you
                        would agree. Prepared do an dissuade be so whatever steepest.</p>
                    </div>
                  </div>
                </div>
              </div>
              <ul class=\"children\">
                <li class=\"comment\">
                  <div class=\"single-comment justify-content-between d-flex\">
                    <div class=\"user justify-content-between d-flex\">
                      <div class=\"thumb\">
                        <img alt=\"\" src=\"assets/img/blog/c2.png\" class=\"avatar\">
                      </div>
                      <div class=\"desc\">
                        <div class=\"d-flex justify-content-between comment_title\">
                          <div class=\"d-flex align-items-center\">
                            <h5>Naeem <br><span>23 Dec 2019</span></h5>
                          </div>
                          <div class=\"c-action\">
                            <ul>
                              <li><a href=\"\"><i class=\"fa fa-heart\"></i></a></li>
                              <li><a href=\"\"><i class=\"fa fa-reply\"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class=\"comment-content\">
                          <p>Sometimes ‘short and sweet’ workouts are all you need. If you've done a HIIT workout before
                            you would agree. Prepared do an dissuade be so whatever steepest.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class=\"comment\">
              <div class=\"single-comment justify-content-between d-flex\">
                <div class=\"user justify-content-between d-flex\">
                  <div class=\"thumb\">
                    <img alt=\"\" src=\"assets/img/blog/c3.png\" class=\"avatar\">
                  </div>
                  <div class=\"desc\">
                    <div class=\"d-flex justify-content-between comment_title\">
                      <div class=\"d-flex align-items-center\">
                        <h5>Asade <br><span>9 May 2019</span></h5>
                      </div>
                      <div class=\"c-action\">
                        <ul>
                          <li><a href=\"\"><i class=\"fa fa-heart\"></i></a></li>
                          <li><a href=\"\"><i class=\"fa fa-reply\"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"comment-content\">
                      <p>Sometimes ‘short and sweet’ workouts are all you need. If you've done a HIIT workout before you
                        would agree. Prepared do an dissuade be so whatever steepest.</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div id=\"respond\" class=\"comment-respond\">
            <h3 class=\"comment-reply-title\">Write a comment</h3>
            <form id=\"comment_form\" class=\"commentform\">
              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                    <input type=\"text\" id=\"author\" name=\"author\" value=\"\" class=\"form-control\" placeholder=\"Your name\">
                  </div>
                </div>
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" value=\"\" placeholder=\"Your email\">
                  </div>
                </div>
              </div>
              <div class=\"form-group margin-bottom-30\">
                <textarea name=\"comment\" id=\"comment\" class=\"form-control w-100\" cols=\"30\" rows=\"9\"
                  placeholder=\"Type Your Comment*\"></textarea>
              </div>
              <div class=\"form-submit\">
                <button type=\"submit\" class=\"btn btn-custom-primary\">Post comment</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        ";
        // line 141
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 142
        echo "      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 142,  245 => 141,  128 => 27,  124 => 26,  120 => 24,  109 => 23,  105 => 22,  94 => 16,  91 => 15,  82 => 13,  78 => 12,  71 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"blog-area margin-top-120\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">

        {% set post = blogPost.post %}



        <div class=\"blog-details-style-01 margin-bottom-100\">
          <div class=\"b-img\">
            {% for image in post.featured_images %}
            <img src=\"{{image.path | resize(810, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}\" alt=\"\">
            {% endfor %}
            <div class=\"blog-date-box\">
              <h4>{{ post.published_at |date('d') }}<br><span>{{ post.published_at |date('M') }}</span></h4>
            </div>
          </div>
          <div class=\"b-content\">
            <div class=\"blog-meta\">
              <span class=\"causes-tag mr-3\">
                {% for cat in post.categories %}
                <a href=\"/blog/category/{{cat.slug}}\">{{cat.name}}</a>
                {%endfor %}</span>
            </div>
            <h4 class=\"section-title\">{{post.title}}</h4>
            {{post.content_html | raw }}
          </div>
        </div>
        <div id=\"comments\" class=\"comments-area comments-area-wrapper\">
          <h4 class=\"comments-title\">5 Comments</h4>
          <ul class=\"comment-list\">
            <li class=\"comment\">
              <div class=\"single-comment justify-content-between d-flex\">
                <div class=\"user justify-content-between d-flex\">
                  <div class=\"thumb\">
                    <img alt=\"\" src=\"assets/img/blog/c1.png\" class=\"avatar\">
                  </div>
                  <div class=\"desc\">
                    <div class=\"d-flex justify-content-between comment_title\">
                      <div class=\"d-flex align-items-center\">
                        <h5>Monalisa Khatun <br><span>5 June 2019</span></h5>
                      </div>
                      <div class=\"c-action\">
                        <ul>
                          <li><a href=\"\"><i class=\"fa fa-heart\"></i></a></li>
                          <li><a href=\"\"><i class=\"fa fa-reply\"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"comment-content\">
                      <p>Sometimes ‘short and sweet’ workouts are all you need. If you've done a HIIT workout before you
                        would agree. Prepared do an dissuade be so whatever steepest.</p>
                    </div>
                  </div>
                </div>
              </div>
              <ul class=\"children\">
                <li class=\"comment\">
                  <div class=\"single-comment justify-content-between d-flex\">
                    <div class=\"user justify-content-between d-flex\">
                      <div class=\"thumb\">
                        <img alt=\"\" src=\"assets/img/blog/c2.png\" class=\"avatar\">
                      </div>
                      <div class=\"desc\">
                        <div class=\"d-flex justify-content-between comment_title\">
                          <div class=\"d-flex align-items-center\">
                            <h5>Naeem <br><span>23 Dec 2019</span></h5>
                          </div>
                          <div class=\"c-action\">
                            <ul>
                              <li><a href=\"\"><i class=\"fa fa-heart\"></i></a></li>
                              <li><a href=\"\"><i class=\"fa fa-reply\"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class=\"comment-content\">
                          <p>Sometimes ‘short and sweet’ workouts are all you need. If you've done a HIIT workout before
                            you would agree. Prepared do an dissuade be so whatever steepest.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class=\"comment\">
              <div class=\"single-comment justify-content-between d-flex\">
                <div class=\"user justify-content-between d-flex\">
                  <div class=\"thumb\">
                    <img alt=\"\" src=\"assets/img/blog/c3.png\" class=\"avatar\">
                  </div>
                  <div class=\"desc\">
                    <div class=\"d-flex justify-content-between comment_title\">
                      <div class=\"d-flex align-items-center\">
                        <h5>Asade <br><span>9 May 2019</span></h5>
                      </div>
                      <div class=\"c-action\">
                        <ul>
                          <li><a href=\"\"><i class=\"fa fa-heart\"></i></a></li>
                          <li><a href=\"\"><i class=\"fa fa-reply\"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"comment-content\">
                      <p>Sometimes ‘short and sweet’ workouts are all you need. If you've done a HIIT workout before you
                        would agree. Prepared do an dissuade be so whatever steepest.</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div id=\"respond\" class=\"comment-respond\">
            <h3 class=\"comment-reply-title\">Write a comment</h3>
            <form id=\"comment_form\" class=\"commentform\">
              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                    <input type=\"text\" id=\"author\" name=\"author\" value=\"\" class=\"form-control\" placeholder=\"Your name\">
                  </div>
                </div>
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" value=\"\" placeholder=\"Your email\">
                  </div>
                </div>
              </div>
              <div class=\"form-group margin-bottom-30\">
                <textarea name=\"comment\" id=\"comment\" class=\"form-control w-100\" cols=\"30\" rows=\"9\"
                  placeholder=\"Type Your Comment*\"></textarea>
              </div>
              <div class=\"form-submit\">
                <button type=\"submit\" class=\"btn btn-custom-primary\">Post comment</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        {% partial 'site/sidebar_blog' %}
      </div>
    </div>
  </div>
</div>", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/post.htm", "");
    }
}
