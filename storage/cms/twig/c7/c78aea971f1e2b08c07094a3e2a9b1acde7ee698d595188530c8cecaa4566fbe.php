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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/partials/site/footer.htm */
class __TwigTemplate_63d6fa7e990ff8fe986466c01c9d7421b1de755fe069d55679fb59a23d64c29b extends \Twig\Template
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
        $tags = array("if" => 11, "for" => 17, "partial" => 95);
        $filters = array("escape" => 9, "raw" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'partial'],
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
        echo "<!-- footer area start -->
<footer class=\"footer-area footer-style-1 main-bg\">
  <div class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xl-4\">
          <div class=\"footer-widget widget contact-widget\">
            <a href=\"/\" class=\"footer-logo\">
              <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "logoFooter", [], "any", false, false, true, 9), "path", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\" alt=\"footer logo\">
            </a>
            ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 11), "site_description", [], "any", false, false, true, 11) == true)) {
            // line 12
            echo "            ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "site_description", [], "any", false, false, true, 12), 12, $this->source);
            echo "
            ";
        } else {
            // line 14
            echo "            ";
        }
        // line 15
        echo "            <ul class=\"contact_info_list\">

              ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 17), "contacts", [], "any", false, false, true, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 18
            echo "
              ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 19) == true)) {
                // line 20
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-envelope\"></i>
                </div>
                <div class=\"details\">
                  ";
                // line 25
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 29
                echo "              ";
            }
            // line 30
            echo "
              ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 31) == true)) {
                // line 32
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-phone\"></i>
                </div>
                <div class=\"details\">
                  (+996) ";
                // line 37
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 41
                echo "              ";
            }
            // line 42
            echo "
              ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 43) == true)) {
                // line 44
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-phone\"></i>
                </div>
                <div class=\"details\">
                  (+996) ";
                // line 49
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 53
                echo "              ";
            }
            // line 54
            echo "
              ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 55) == true)) {
                // line 56
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-map-marker\"></i>
                </div>
                <div class=\"details\">
                  ";
                // line 61
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 65
                echo "              ";
            }
            // line 66
            echo "
              ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 67) == true)) {
                // line 68
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-map-marker\"></i>
                </div>
                <div class=\"details\">
                  ";
                // line 73
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 77
                echo "              ";
            }
            // line 78
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </ul>
            <ul class=\"footer-social\">
              ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 82), "social", [], "any", false, false, true, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 83
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "\"></i></a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            </ul>
          </div>
        </div>
        <div class=\"col-xl-8 margin-xlt-80\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-xl-3 offset-xl-1\">
              <div class=\"footer-widget widget widget_nav_menu\">
                <h4 class=\"widget-title\">Полезные ссылки</h4>
                ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 93)) {
            // line 94
            echo "                <ul class=\"footer-useful-links\">
                  ";
            // line 95
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 95)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 96
            echo "                </ul>
                ";
        }
        // line 98
        echo "
              </div>
            </div>
            <div class=\"col-lg-3\">
              <div class=\"footer-widget widget widget_nav_menu\">
                <h4 class=\"widget-title\">Take action</h4>
                ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 104)) {
            // line 105
            echo "                <ul class=\"footer-useful-links\">
                  ";
            // line 106
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu2"] ?? null), "menuItems", [], "any", false, false, true, 106)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu2"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 107
            echo "                </ul>
                ";
        }
        // line 109
        echo "              </div>
            </div>
            <div class=\"col-lg-5\">
              <div class=\"footer-widget widget\">
                <h4 class=\"widget-title\">Подписка на рассылку новостей</h4>
                <div class=\"subscribe-form\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Введите Ваш email\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default submit-btn\" type=\"button\"><i
                          class=\"flaticon-sent-mail\"></i></button>
                    </span>
                  </div>
                </div>
                <p class=\"description\">Мы нигде не раскрываем вашу почту..</p>
              </div>
            </div>
            <div class=\"col-xl-11 offset-xl-1\">
              <div class=\"copyright-area-inner copyright-sm margin-top-35\">
                &copy; Политическая партия Табылга
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer area end -->";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 109,  274 => 107,  269 => 106,  266 => 105,  264 => 104,  256 => 98,  252 => 96,  247 => 95,  244 => 94,  242 => 93,  232 => 85,  221 => 83,  217 => 82,  213 => 80,  206 => 78,  203 => 77,  196 => 73,  189 => 68,  187 => 67,  184 => 66,  181 => 65,  174 => 61,  167 => 56,  165 => 55,  162 => 54,  159 => 53,  152 => 49,  145 => 44,  143 => 43,  140 => 42,  137 => 41,  130 => 37,  123 => 32,  121 => 31,  118 => 30,  115 => 29,  108 => 25,  101 => 20,  99 => 19,  96 => 18,  92 => 17,  88 => 15,  85 => 14,  79 => 12,  77 => 11,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- footer area start -->
<footer class=\"footer-area footer-style-1 main-bg\">
  <div class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xl-4\">
          <div class=\"footer-widget widget contact-widget\">
            <a href=\"/\" class=\"footer-logo\">
              <img src=\"{{this.theme.logoFooter.path}}\" alt=\"footer logo\">
            </a>
            {% if this.theme.site_description == true %}
            {{this.theme.site_description | raw}}
            {% else %}
            {% endif %}
            <ul class=\"contact_info_list\">

              {% for contact in this.theme.contacts %}

              {% if contact.address == true %}
              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-envelope\"></i>
                </div>
                <div class=\"details\">
                  {{contact.address}}
                </div>
              </li>
              {% else %}
              {% endif %}

              {% if contact.phone1 == true %}
              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-phone\"></i>
                </div>
                <div class=\"details\">
                  (+996) {{contact.phone1}}
                </div>
              </li>
              {% else %}
              {% endif %}

              {% if contact.phone2 == true %}
              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-phone\"></i>
                </div>
                <div class=\"details\">
                  (+996) {{contact.phone2}}
                </div>
              </li>
              {% else %}
              {% endif %}

              {% if contact.user_email1 == true %}
              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-map-marker\"></i>
                </div>
                <div class=\"details\">
                  {{contact.user_email1}}
                </div>
              </li>
              {% else %}
              {% endif %}

              {% if contact.user_email2 == true %}
              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-map-marker\"></i>
                </div>
                <div class=\"details\">
                  {{contact.user_email2}}
                </div>
              </li>
              {% else %}
              {% endif %}

              {% endfor %}
            </ul>
            <ul class=\"footer-social\">
              {% for item in this.theme.social %}
              <li><a href=\"{{item.url}}\"><i class=\"{{item.awesome_icon}}\"></i></a></li>
              {% endfor %}
            </ul>
          </div>
        </div>
        <div class=\"col-xl-8 margin-xlt-80\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-xl-3 offset-xl-1\">
              <div class=\"footer-widget widget widget_nav_menu\">
                <h4 class=\"widget-title\">Полезные ссылки</h4>
                {% if staticMenu.menuItems %}
                <ul class=\"footer-useful-links\">
                  {% partial staticMenu ~ \"::items\" items=staticMenu.menuItems %}
                </ul>
                {% endif %}

              </div>
            </div>
            <div class=\"col-lg-3\">
              <div class=\"footer-widget widget widget_nav_menu\">
                <h4 class=\"widget-title\">Take action</h4>
                {% if staticMenu.menuItems %}
                <ul class=\"footer-useful-links\">
                  {% partial staticMenu2 ~ \"::items\" items=staticMenu2.menuItems %}
                </ul>
                {% endif %}
              </div>
            </div>
            <div class=\"col-lg-5\">
              <div class=\"footer-widget widget\">
                <h4 class=\"widget-title\">Подписка на рассылку новостей</h4>
                <div class=\"subscribe-form\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Введите Ваш email\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default submit-btn\" type=\"button\"><i
                          class=\"flaticon-sent-mail\"></i></button>
                    </span>
                  </div>
                </div>
                <p class=\"description\">Мы нигде не раскрываем вашу почту..</p>
              </div>
            </div>
            <div class=\"col-xl-11 offset-xl-1\">
              <div class=\"copyright-area-inner copyright-sm margin-top-35\">
                &copy; Политическая партия Табылга
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer area end -->", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/footer.htm", "");
    }
}
