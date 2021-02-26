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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/layouts/static-layout.htm */
class __TwigTemplate_d9b0bb12296a3b144b0e27d951ca668cfc5e1da3ccd230fddcf0871bb3b0d65e extends \Twig\Template
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
        $tags = array("styles" => 34, "component" => 35, "if" => 69, "for" => 81, "partial" => 131, "page" => 198, "framework" => 309, "scripts" => 310);
        $filters = array("theme" => 8, "page" => 53, "escape" => 67, "raw" => 71);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'component', 'if', 'for', 'partial', 'page', 'framework', 'scripts'],
                ['theme', 'page', 'escape', 'raw'],
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
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <!-- favicon -->
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\">
  <!-- animate -->
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
  <!-- bootstrap -->
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
  <!-- magnific popup -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">
  <!-- Slick -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick-theme.css");
        echo "\">
  <!-- nice select -->
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/nice-select.css");
        echo "\">
  <!-- swiper -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/swiper.min.css");
        echo "\">
  <!-- animated css -->
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animated-slider.css");
        echo "\">
  <!-- owl carousel -->
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.min.css");
        echo "\">
  <!-- fontawesome -->
  <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\">
  <!-- flaticon -->
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/flaticon.css");
        echo "\">
  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
  <!-- responsive Stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">
  ";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 35
        echo "  ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoStaticPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        echo "</head>

<body>
  <!-- preloader area start -->
  <div class=\"preloader\" id=\"preloader\">
    <div class=\"preloader-inner\">
      <div class=\"spinner\">
        <div class=\"dot1\"></div>
        <div class=\"dot2\"></div>
      </div>
    </div>
  </div>
  <!-- preloader area end -->

  <!-- search Popup -->
  <div class=\"body-overlay\" id=\"body-overlay\"></div>
  <div class=\"search-popup\" id=\"search-popup\">
    <form action=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "\" method=\"get\" class=\"search-form\">
      <div class=\"form-group\">
        <input name=\"q\" type=\"text\" class=\"form-control\" placeholder=\"Поиск.....\" autocomplete=\"off\">
      </div>
      <button type=\"submit\" class=\"submit-btn\"><i class=\"fa fa-search\"></i></button>
    </form>
  </div>
  <!-- //. search Popup -->

  <!--sidebar menu start-->
  <div class=\"sidebar-menu\" id=\"sidebar-menu\">
    <button class=\"sidebar-menu-close\"><i class=\"flaticon-close\"></i></button>
    <div class=\"sidebar-inner\">
      <div class=\"sidebar-logo\">
        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 67), "logoFooter", [], "any", false, false, true, 67), "path", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "\" alt=\"logo\" />
      </div>
      ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 69), "site_description", [], "any", false, false, true, 69) == true)) {
            // line 70
            echo "      <div class=\"sidemenu-text\">
        ";
            // line 71
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 71), "site_description", [], "any", false, false, true, 71), 71, $this->source);
            echo "
      </div>
      ";
        } else {
            // line 74
            echo "      ";
        }
        // line 75
        echo "

      <div class=\"sidebar-contact\">
        <h4>Связаться с нами</h4>
        <ul>

          ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 81), "contacts", [], "any", false, false, true, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 82
            echo "
          ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 83) == true)) {
                // line 84
                echo "          <li><i class=\"fa fa-map-marker\"></i>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "</li>
          ";
            } else {
                // line 86
                echo "          ";
            }
            // line 87
            echo "
          ";
            // line 88
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 88) == true)) {
                // line 89
                echo "          <li><i class=\"fa fa-phone\"></i>(+996) ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo "</li>
          ";
            } else {
                // line 91
                echo "          ";
            }
            // line 92
            echo "
          ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 93) == true)) {
                // line 94
                echo "          <li><i class=\"fa fa-phone\"></i>(+996) ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                echo "</li>
          ";
            } else {
                // line 96
                echo "          ";
            }
            // line 97
            echo "
          ";
            // line 98
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 98) == true)) {
                // line 99
                echo "          <li><i class=\"fa fa-envelope\"></i>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "</li>
          ";
            } else {
                // line 101
                echo "          ";
            }
            // line 102
            echo "
          ";
            // line 103
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 103) == true)) {
                // line 104
                echo "          <li><i class=\"fa fa-envelope\"></i>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                echo "</li>
          ";
            } else {
                // line 106
                echo "          ";
            }
            // line 107
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
        </ul>
      </div>


      <div class=\"sidebar-subscribe\">
        <input type=\"text\" placeholder=\"Email\">
        <button><i class=\"fa fa-long-arrow-right\"></i></button>
      </div>
      <div class=\"social-link\">
        <ul>
          ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 120), "social", [], "any", false, false, true, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 121
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "\"></i></a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "        </ul>
      </div>
    </div>
  </div>
  <!--sidebar menu end-->

  <!-- Header -->
  <header id=\"layout-header\">
    ";
        // line 131
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 132
        echo "  </header>
  <!-- breadcrumb-area start -->
  <div class=\"breadcrumb-area breadcrumb-style-02 main-bg\">
    ";
        // line 135
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/inner_banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 136
        echo "  </div>
  <!-- breadcrumb-area end -->

  <!-- member start -->
  ";
        // line 140
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 140), "url", [], "any", false, false, true, 140) == "/search")) {
            // line 141
            echo "  ";
        } else {
            // line 142
            echo "  <div class=\"about-member-count margin-top-120 padding-bottom-90\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"icon-box-style-02 text-center margin-bottom-30 margin-top-50\">
            <div class=\"sb-icon\">
              <a href=\"#\"><i class=\"flaticon-notes\"></i></a>
            </div>
            <div class=\"sb-content\">
              <h4 class=\"title countdown\">5643</h4>
              <p>Registered Members</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"icon-box-style-02 text-center margin-bottom-30\">
            <div class=\"sb-icon\">
              <a href=\"#\"><i class=\"flaticon-volunteer\"></i></a>
            </div>
            <div class=\"sb-content\">
              <h4 class=\"title countdown\">4567</h4>
              <p>Registered Members</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"icon-box-style-02 text-center margin-bottom-30 margin-top-75\">
            <div class=\"sb-icon\">
              <a href=\"#\"><i class=\"flaticon-seo\"></i></a>
            </div>
            <div class=\"sb-content\">
              <h4 class=\"title countdown\">2345</h4>
              <p>Registered Members</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"icon-box-style-02 text-center margin-bottom-30 margin-top-25\">
            <div class=\"sb-icon\">
              <a href=\"#\"><i class=\"flaticon-place\"></i></a>
            </div>
            <div class=\"sb-content\">
              <h4 class=\"title countdown\">7854</h4>
              <p>Registered Members</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 193
        echo "  <!-- member end -->

  <!-- Content -->
  <section id=\"layout-content\">
    <div class=\"container\">
      ";
        // line 198
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 199
        echo "    </div>
  </section>

  <!-- party-box-area start -->
  <div class=\"party-box-area padding-top-120\">
    <div class=\"container\">
      <div
        class=\"col-lg-12 party-box-wrapper d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center text-lg-left text-center\">
        <div class=\"party-box-content\">
          <h4>Be the part<br> of our party success....</h4>
          <p>Met dolore magna aliqua. Ut enim ad minim veniam exercitation</p>
        </div>
        <div class=\"btn-wrapper align-self-center\">
          <a class=\"btn btn-custom-primary\" href=\"#\">Be a Volunteer</a>
        </div>
      </div>
    </div>
  </div>
  <!-- party-box-area end -->

  <!-- brand-area start -->
  <div class=\"brand-area margin-top-105 margin-bottom-165\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"brand-slider grey-bg\">
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand1.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand2.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand3.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand4.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand5.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand1.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand2.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand3.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand4.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand5.png\" alt=\"brand\">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- brand-area end -->

  <!-- Footer -->
  <footer id=\"layout-footer\">
    ";
        // line 264
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 265
        echo "  </footer>

  <!-- back to top area start -->
  <div class=\"back-to-top\">
    <span class=\"back-top\"><i class=\"fa fa-angle-up\"></i></span>
  </div>
  <!-- back to top area end -->

  <!-- Scripts -->
  <!-- jquery -->
  <script src=\"";
        // line 275
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-2.2.4.min.js");
        echo "\"></script>
  <!-- popper -->
  <script src=\"";
        // line 277
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/popper.min.js");
        echo "\"></script>
  <!-- bootstrap -->
  <script src=\"";
        // line 279
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.min.js");
        echo "\"></script>
  <!-- magnific popup -->
  <script src=\"";
        // line 281
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.magnific-popup.js");
        echo "\"></script>
  <!-- wow -->
  <script src=\"";
        // line 283
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/wow.min.js");
        echo "\"></script>
  <!-- animated slider -->
  <script src=\"";
        // line 285
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/animated-slider.js");
        echo "\"></script>
  <!-- nice select -->
  <script src=\"";
        // line 287
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/nice-select.js");
        echo "\"></script>
  <!-- owl carousel -->
  <script src=\"";
        // line 289
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel.min.js");
        echo "\"></script>
  <!-- Slick -->
  <script src=\"";
        // line 291
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick.min.js");
        echo "\"></script>
  <!-- Slick Animation -->
  <script src=\"";
        // line 293
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick-animation.js");
        echo "\"></script>
  <!-- counterup -->
  <script src=\"";
        // line 295
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.counterup.min.js");
        echo "\"></script>
  <!-- waypoint -->
  <script src=\"";
        // line 297
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/waypoints.min.js");
        echo "\"></script>
  <!-- imageloaded -->
  <script src=\"";
        // line 299
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/imagesloaded.pkgd.min.js");
        echo "\"></script>
  <!-- swiper -->
  <script src=\"";
        // line 301
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/swiper.min.js");
        echo "\"></script>
  <!-- isotope -->
  <script src=\"";
        // line 303
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/isotope.pkgd.min.js");
        echo "\"></script>

  <script src=\"";
        // line 305
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.classyloader.js");
        echo "\"></script>

  <script src=\"";
        // line 307
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/script.js");
        echo "\"></script>
  <script src=\"";
        // line 308
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/main.js");
        echo "\"></script>
  ";
        // line 309
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 310
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 311
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/layouts/static-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  601 => 311,  597 => 310,  586 => 309,  582 => 308,  578 => 307,  573 => 305,  568 => 303,  563 => 301,  558 => 299,  553 => 297,  548 => 295,  543 => 293,  538 => 291,  533 => 289,  528 => 287,  523 => 285,  518 => 283,  513 => 281,  508 => 279,  503 => 277,  498 => 275,  486 => 265,  482 => 264,  415 => 199,  413 => 198,  406 => 193,  353 => 142,  350 => 141,  348 => 140,  342 => 136,  338 => 135,  333 => 132,  329 => 131,  319 => 123,  308 => 121,  304 => 120,  291 => 109,  284 => 107,  281 => 106,  275 => 104,  273 => 103,  270 => 102,  267 => 101,  261 => 99,  259 => 98,  256 => 97,  253 => 96,  247 => 94,  245 => 93,  242 => 92,  239 => 91,  233 => 89,  231 => 88,  228 => 87,  225 => 86,  219 => 84,  217 => 83,  214 => 82,  210 => 81,  202 => 75,  199 => 74,  193 => 71,  190 => 70,  188 => 69,  183 => 67,  166 => 53,  147 => 36,  142 => 35,  139 => 34,  135 => 33,  130 => 31,  125 => 29,  120 => 27,  115 => 25,  110 => 23,  105 => 21,  100 => 19,  95 => 17,  91 => 16,  86 => 14,  81 => 12,  76 => 10,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <!-- favicon -->
  <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon.png'|theme }}\">
  <!-- animate -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css' | theme }}\">
  <!-- bootstrap -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css' | theme }}\">
  <!-- magnific popup -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/magnific-popup.css' | theme }}\">
  <!-- Slick -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick.css' | theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick-theme.css' | theme }}\">
  <!-- nice select -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/nice-select.css' | theme }}\">
  <!-- swiper -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/swiper.min.css' | theme }}\">
  <!-- animated css -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/animated-slider.css' | theme }}\">
  <!-- owl carousel -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel.min.css' | theme }}\">
  <!-- fontawesome -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/font-awesome.min.css' | theme }}\">
  <!-- flaticon -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/flaticon.css' | theme }}\">
  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css' | theme }}\">
  <!-- responsive Stylesheet -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/responsive.css' | theme }}\">
  {% styles %}
  {% component 'SeoStaticPage' %}
</head>

<body>
  <!-- preloader area start -->
  <div class=\"preloader\" id=\"preloader\">
    <div class=\"preloader-inner\">
      <div class=\"spinner\">
        <div class=\"dot1\"></div>
        <div class=\"dot2\"></div>
      </div>
    </div>
  </div>
  <!-- preloader area end -->

  <!-- search Popup -->
  <div class=\"body-overlay\" id=\"body-overlay\"></div>
  <div class=\"search-popup\" id=\"search-popup\">
    <form action=\"{{ 'search' | page }}\" method=\"get\" class=\"search-form\">
      <div class=\"form-group\">
        <input name=\"q\" type=\"text\" class=\"form-control\" placeholder=\"Поиск.....\" autocomplete=\"off\">
      </div>
      <button type=\"submit\" class=\"submit-btn\"><i class=\"fa fa-search\"></i></button>
    </form>
  </div>
  <!-- //. search Popup -->

  <!--sidebar menu start-->
  <div class=\"sidebar-menu\" id=\"sidebar-menu\">
    <button class=\"sidebar-menu-close\"><i class=\"flaticon-close\"></i></button>
    <div class=\"sidebar-inner\">
      <div class=\"sidebar-logo\">
        <img src=\"{{this.theme.logoFooter.path}}\" alt=\"logo\" />
      </div>
      {% if this.theme.site_description == true %}
      <div class=\"sidemenu-text\">
        {{this.theme.site_description | raw}}
      </div>
      {% else %}
      {% endif %}


      <div class=\"sidebar-contact\">
        <h4>Связаться с нами</h4>
        <ul>

          {% for contact in this.theme.contacts %}

          {% if contact.address == true %}
          <li><i class=\"fa fa-map-marker\"></i>{{contact.address}}</li>
          {% else %}
          {% endif %}

          {% if contact.phone1 == true %}
          <li><i class=\"fa fa-phone\"></i>(+996) {{contact.phone1}}</li>
          {% else %}
          {% endif %}

          {% if contact.phone2 == true %}
          <li><i class=\"fa fa-phone\"></i>(+996) {{contact.phone2}}</li>
          {% else %}
          {% endif %}

          {% if contact.user_email1 == true %}
          <li><i class=\"fa fa-envelope\"></i>{{contact.user_email1}}</li>
          {% else %}
          {% endif %}

          {% if contact.user_email2 == true %}
          <li><i class=\"fa fa-envelope\"></i>{{contact.user_email2}}</li>
          {% else %}
          {% endif %}

          {% endfor %}

        </ul>
      </div>


      <div class=\"sidebar-subscribe\">
        <input type=\"text\" placeholder=\"Email\">
        <button><i class=\"fa fa-long-arrow-right\"></i></button>
      </div>
      <div class=\"social-link\">
        <ul>
          {% for item in this.theme.social %}
          <li><a href=\"{{item.url}}\"><i class=\"{{item.awesome_icon}}\"></i></a></li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </div>
  <!--sidebar menu end-->

  <!-- Header -->
  <header id=\"layout-header\">
    {% partial 'site/header' %}
  </header>
  <!-- breadcrumb-area start -->
  <div class=\"breadcrumb-area breadcrumb-style-02 main-bg\">
    {% partial 'site/inner_banner' %}
  </div>
  <!-- breadcrumb-area end -->

  <!-- member start -->
  {% if this.page.url == '/search' %}
  {% else %}
  <div class=\"about-member-count margin-top-120 padding-bottom-90\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"icon-box-style-02 text-center margin-bottom-30 margin-top-50\">
            <div class=\"sb-icon\">
              <a href=\"#\"><i class=\"flaticon-notes\"></i></a>
            </div>
            <div class=\"sb-content\">
              <h4 class=\"title countdown\">5643</h4>
              <p>Registered Members</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"icon-box-style-02 text-center margin-bottom-30\">
            <div class=\"sb-icon\">
              <a href=\"#\"><i class=\"flaticon-volunteer\"></i></a>
            </div>
            <div class=\"sb-content\">
              <h4 class=\"title countdown\">4567</h4>
              <p>Registered Members</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"icon-box-style-02 text-center margin-bottom-30 margin-top-75\">
            <div class=\"sb-icon\">
              <a href=\"#\"><i class=\"flaticon-seo\"></i></a>
            </div>
            <div class=\"sb-content\">
              <h4 class=\"title countdown\">2345</h4>
              <p>Registered Members</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"icon-box-style-02 text-center margin-bottom-30 margin-top-25\">
            <div class=\"sb-icon\">
              <a href=\"#\"><i class=\"flaticon-place\"></i></a>
            </div>
            <div class=\"sb-content\">
              <h4 class=\"title countdown\">7854</h4>
              <p>Registered Members</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {% endif %}
  <!-- member end -->

  <!-- Content -->
  <section id=\"layout-content\">
    <div class=\"container\">
      {% page %}
    </div>
  </section>

  <!-- party-box-area start -->
  <div class=\"party-box-area padding-top-120\">
    <div class=\"container\">
      <div
        class=\"col-lg-12 party-box-wrapper d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center text-lg-left text-center\">
        <div class=\"party-box-content\">
          <h4>Be the part<br> of our party success....</h4>
          <p>Met dolore magna aliqua. Ut enim ad minim veniam exercitation</p>
        </div>
        <div class=\"btn-wrapper align-self-center\">
          <a class=\"btn btn-custom-primary\" href=\"#\">Be a Volunteer</a>
        </div>
      </div>
    </div>
  </div>
  <!-- party-box-area end -->

  <!-- brand-area start -->
  <div class=\"brand-area margin-top-105 margin-bottom-165\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"brand-slider grey-bg\">
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand1.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand2.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand3.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand4.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand5.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand1.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand2.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand3.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand4.png\" alt=\"brand\">
            </div>
            <div class=\"brant-item\">
              <img src=\"assets/img/brand/brand5.png\" alt=\"brand\">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- brand-area end -->

  <!-- Footer -->
  <footer id=\"layout-footer\">
    {% partial 'site/footer' %}
  </footer>

  <!-- back to top area start -->
  <div class=\"back-to-top\">
    <span class=\"back-top\"><i class=\"fa fa-angle-up\"></i></span>
  </div>
  <!-- back to top area end -->

  <!-- Scripts -->
  <!-- jquery -->
  <script src=\"{{ 'assets/vendor/jquery-2.2.4.min.js'|theme }}\"></script>
  <!-- popper -->
  <script src=\"{{ 'assets/vendor/popper.min.js'|theme }}\"></script>
  <!-- bootstrap -->
  <script src=\"{{ 'assets/vendor/bootstrap.min.js'|theme }}\"></script>
  <!-- magnific popup -->
  <script src=\"{{ 'assets/vendor/jquery.magnific-popup.js'|theme }}\"></script>
  <!-- wow -->
  <script src=\"{{ 'assets/vendor/wow.min.js'|theme }}\"></script>
  <!-- animated slider -->
  <script src=\"{{ 'assets/vendor/animated-slider.js'|theme }}\"></script>
  <!-- nice select -->
  <script src=\"{{ 'assets/vendor/nice-select.js'|theme }}\"></script>
  <!-- owl carousel -->
  <script src=\"{{ 'assets/vendor/owl.carousel.min.js'|theme }}\"></script>
  <!-- Slick -->
  <script src=\"{{ 'assets/vendor/slick.min.js'|theme }}\"></script>
  <!-- Slick Animation -->
  <script src=\"{{ 'assets/vendor/slick-animation.js'|theme }}\"></script>
  <!-- counterup -->
  <script src=\"{{ 'assets/vendor/jquery.counterup.min.js'|theme }}\"></script>
  <!-- waypoint -->
  <script src=\"{{ 'assets/vendor/waypoints.min.js'|theme }}\"></script>
  <!-- imageloaded -->
  <script src=\"{{ 'assets/vendor/imagesloaded.pkgd.min.js'|theme }}\"></script>
  <!-- swiper -->
  <script src=\"{{ 'assets/vendor/swiper.min.js'|theme }}\"></script>
  <!-- isotope -->
  <script src=\"{{ 'assets/vendor/isotope.pkgd.min.js'|theme }}\"></script>

  <script src=\"{{ 'assets/vendor/jquery.classyloader.js'|theme }}\"></script>

  <script src=\"{{ 'assets/javascript/script.js'|theme }}\"></script>
  <script src=\"{{ 'assets/javascript/main.js'|theme }}\"></script>
  {% framework extras %}
  {% scripts %}

</body>

</html>", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/layouts/static-layout.htm", "");
    }
}
