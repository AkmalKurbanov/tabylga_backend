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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/layouts/default.htm */
class __TwigTemplate_ab59db3e2fbe3df6022b4a1b4378a99c105602027243b0cc60b92b301a9753fe extends \Twig\Template
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
        $tags = array("styles" => 34, "component" => 35, "if" => 70, "for" => 82, "partial" => 132, "page" => 151, "framework" => 261, "scripts" => 262);
        $filters = array("theme" => 8, "page" => 54, "escape" => 68, "raw" => 72);
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
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
        // line 54
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
        // line 68
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 68), "logoFooter", [], "any", false, false, true, 68), "path", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "\" alt=\"logo\" />
      </div>
      ";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 70), "site_description", [], "any", false, false, true, 70) == true)) {
            // line 71
            echo "      <div class=\"sidemenu-text\">
        ";
            // line 72
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 72), "site_description", [], "any", false, false, true, 72), 72, $this->source);
            echo "
      </div>
      ";
        } else {
            // line 75
            echo "      ";
        }
        // line 76
        echo "

      <div class=\"sidebar-contact\">
        <h4>Связаться с нами</h4>
        <ul>

          ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 82), "contacts", [], "any", false, false, true, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 83
            echo "
          ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 84) == true)) {
                // line 85
                echo "          <li><i class=\"fa fa-map-marker\"></i>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "</li>
          ";
            } else {
                // line 87
                echo "          ";
            }
            // line 88
            echo "
          ";
            // line 89
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 89) == true)) {
                // line 90
                echo "          <li><i class=\"fa fa-phone\"></i>(+996) ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                echo "</li>
          ";
            } else {
                // line 92
                echo "          ";
            }
            // line 93
            echo "
          ";
            // line 94
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 94) == true)) {
                // line 95
                echo "          <li><i class=\"fa fa-phone\"></i>(+996) ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                echo "</li>
          ";
            } else {
                // line 97
                echo "          ";
            }
            // line 98
            echo "
          ";
            // line 99
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 99) == true)) {
                // line 100
                echo "          <li><i class=\"fa fa-envelope\"></i>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                echo "</li>
          ";
            } else {
                // line 102
                echo "          ";
            }
            // line 103
            echo "
          ";
            // line 104
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 104) == true)) {
                // line 105
                echo "          <li><i class=\"fa fa-envelope\"></i>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                echo "</li>
          ";
            } else {
                // line 107
                echo "          ";
            }
            // line 108
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
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
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 121), "social", [], "any", false, false, true, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 122
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "\"></i></a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        </ul>
      </div>
    </div>
  </div>
  <!--sidebar menu end-->

  <!-- Header -->
  <header id=\"layout-header\">
    ";
        // line 132
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 133
        echo "  </header>

  <!-- banner start -->
  ";
        // line 136
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 136), "url", [], "any", false, false, true, 136) == "/")) {
            // line 137
            echo "  <div class=\"banner-style-5 d-flex align-items-center\">
    ";
            // line 138
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/banner_mine"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 139
            echo "  </div>
  <!-- breadcrumb-area end -->
  ";
        } else {
            // line 142
            echo "  <div class=\"breadcrumb-area breadcrumb-style-02 main-bg\">
    ";
            // line 143
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/inner_banner"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 144
            echo "  </div>

  ";
        }
        // line 147
        echo "  <!-- banner end  -->

  <!-- Content -->
  <section id=\"layout-content\">
    ";
        // line 151
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 152
        echo "  </section>

  <!-- party-box-area start -->
  <div class=\"party-box-area padding-top-80\">
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
        // line 216
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 217
        echo "  </footer>

  <!-- back to top area start -->
  <div class=\"back-to-top\">
    <span class=\"back-top\"><i class=\"fa fa-angle-up\"></i></span>
  </div>
  <!-- back to top area end -->

  <!-- Scripts -->
  <!-- jquery -->
  <script src=\"";
        // line 227
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-2.2.4.min.js");
        echo "\"></script>
  <!-- popper -->
  <script src=\"";
        // line 229
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/popper.min.js");
        echo "\"></script>
  <!-- bootstrap -->
  <script src=\"";
        // line 231
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.min.js");
        echo "\"></script>
  <!-- magnific popup -->
  <script src=\"";
        // line 233
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.magnific-popup.js");
        echo "\"></script>
  <!-- wow -->
  <script src=\"";
        // line 235
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/wow.min.js");
        echo "\"></script>
  <!-- animated slider -->
  <script src=\"";
        // line 237
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/animated-slider.js");
        echo "\"></script>
  <!-- nice select -->
  <script src=\"";
        // line 239
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/nice-select.js");
        echo "\"></script>
  <!-- owl carousel -->
  <script src=\"";
        // line 241
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel.min.js");
        echo "\"></script>
  <!-- Slick -->
  <script src=\"";
        // line 243
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick.min.js");
        echo "\"></script>
  <!-- Slick Animation -->
  <script src=\"";
        // line 245
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick-animation.js");
        echo "\"></script>
  <!-- counterup -->
  <script src=\"";
        // line 247
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.counterup.min.js");
        echo "\"></script>
  <!-- waypoint -->
  <script src=\"";
        // line 249
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/waypoints.min.js");
        echo "\"></script>
  <!-- imageloaded -->
  <script src=\"";
        // line 251
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/imagesloaded.pkgd.min.js");
        echo "\"></script>
  <!-- swiper -->
  <script src=\"";
        // line 253
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/swiper.min.js");
        echo "\"></script>
  <!-- isotope -->
  <script src=\"";
        // line 255
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/isotope.pkgd.min.js");
        echo "\"></script>

  <script src=\"";
        // line 257
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.classyloader.js");
        echo "\"></script>

  <script src=\"";
        // line 259
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/script.js");
        echo "\"></script>
  <script src=\"";
        // line 260
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/main.js");
        echo "\"></script>
  ";
        // line 261
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
        // line 262
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 263
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 263,  554 => 262,  543 => 261,  539 => 260,  535 => 259,  530 => 257,  525 => 255,  520 => 253,  515 => 251,  510 => 249,  505 => 247,  500 => 245,  495 => 243,  490 => 241,  485 => 239,  480 => 237,  475 => 235,  470 => 233,  465 => 231,  460 => 229,  455 => 227,  443 => 217,  439 => 216,  373 => 152,  371 => 151,  365 => 147,  360 => 144,  356 => 143,  353 => 142,  348 => 139,  344 => 138,  341 => 137,  339 => 136,  334 => 133,  330 => 132,  320 => 124,  309 => 122,  305 => 121,  292 => 110,  285 => 108,  282 => 107,  276 => 105,  274 => 104,  271 => 103,  268 => 102,  262 => 100,  260 => 99,  257 => 98,  254 => 97,  248 => 95,  246 => 94,  243 => 93,  240 => 92,  234 => 90,  232 => 89,  229 => 88,  226 => 87,  220 => 85,  218 => 84,  215 => 83,  211 => 82,  203 => 76,  200 => 75,  194 => 72,  191 => 71,  189 => 70,  184 => 68,  167 => 54,  147 => 36,  142 => 35,  139 => 34,  135 => 33,  130 => 31,  125 => 29,  120 => 27,  115 => 25,  110 => 23,  105 => 21,  100 => 19,  95 => 17,  91 => 16,  86 => 14,  81 => 12,  76 => 10,  71 => 8,  62 => 1,);
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
  {% component 'SeoCmsPage' %}
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

  <!-- banner start -->
  {% if this.page.url == '/' %}
  <div class=\"banner-style-5 d-flex align-items-center\">
    {% partial 'site/banner_mine' %}
  </div>
  <!-- breadcrumb-area end -->
  {% else %}
  <div class=\"breadcrumb-area breadcrumb-style-02 main-bg\">
    {% partial 'site/inner_banner' %}
  </div>

  {% endif %}
  <!-- banner end  -->

  <!-- Content -->
  <section id=\"layout-content\">
    {% page %}
  </section>

  <!-- party-box-area start -->
  <div class=\"party-box-area padding-top-80\">
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

</html>", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/layouts/default.htm", "");
    }
}
