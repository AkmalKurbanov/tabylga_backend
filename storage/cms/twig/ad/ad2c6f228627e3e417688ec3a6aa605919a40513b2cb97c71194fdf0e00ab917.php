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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/pages/home.htm */
class __TwigTemplate_6be8a56cf1f8d06f3326909cd0d5e44a276d502f6c704b9a816305e330fa9f5f extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<!-- service start -->
\t<div class=\"our-service-area position-relative padding-top-115 padding-bottom-120\">
\t  <div class=\"donate-wrapper\">
\t    <a href=\"donate.html\"><i class=\"fa fa-heart\"></i> Donate Now</a>
\t  </div>
\t  <div class=\"container\">
\t    <div class=\"row justify-content-center\">
\t      <div class=\"col-lg-12\">
\t        <div class=\"text-center padding-bottom-55\">
\t          <h2 class=\"section-title\">We are for the people</h2>
\t        </div>
\t      </div>
\t    </div>
\t    <div class=\"row\">
\t      <div class=\"col-lg-4 col-md-6\">
\t        <div class=\"icon-box-style-01 hover-style-01 text-center margin-bottom-30\">
\t          <div class=\"sb-icon\">
\t            <a href=\"#\"><i class=\"flaticon-financial\"></i></a>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4>Our Political History</h4>
\t            <p>Lorem ipsum dummy text are used in section so replace your orginal text he Lorem ipsum dummy text</p>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-4 col-md-6\">
\t        <div class=\"icon-box-style-01 hover-style-01 text-center margin-bottom-30\">
\t          <div class=\"sb-icon\">
\t            <a href=\"#\"><i class=\"flaticon-hospital\"></i></a>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4>Our mission & Goal</h4>
\t            <p>Lorem ipsum dummy text are used in section so replace your orginal text he Lorem ipsum dummy text</p>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-4 col-md-6\">
\t        <div class=\"icon-box-style-01 hover-style-01 text-center margin-bottom-30\">
\t          <div class=\"sb-icon\">
\t            <a href=\"#\"><i class=\"flaticon-network\"></i></a>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4>We stand for</h4>
\t            <p>Lorem ipsum dummy text are used in section so replace your orginal text he Lorem ipsum dummy text</p>
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- service end -->

\t<!-- politx-content-area start -->
\t<div class=\"politx-content-area margin-bottom-120 margin-top-60\">
\t  <div class=\"container\">
\t    <div class=\"row\">
\t      <div class=\"col-lg-6 align-self-center order-2 order-lg-1\">
\t        <div class=\"content-box-style-01\">
\t          <p class=\"section-subtitle\">About us</p>
\t          <h2 class=\"title\">Organization for action</h2>
\t          <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt
\t            ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex
\t            ea commodo consequat. exercitation ullamco laboris nisi aliquip ex ea commodo consequat. turnkey
\t            applications lorem dummy. Ut enim minim veniam, exercitation ullamco laboris.</p>
\t          <div class=\"btn-wrapper padding-top-33\">
\t            <a class=\"btn btn-custom-primary\" href=\"#\">Learn more</a>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-5 offset-lg-1 order-1 order-lg-2\">
\t        <div class=\"image-box-style-06\">
\t          <img src=\"assets/img/action/4.png\" alt=\"\">
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- politx-content-area end -->

\t<!-- vote area start -->
\t<div class=\"vote-area2 padding-top-125 padding-bottom-115\">
\t  <div class=\"container\">
\t    <div class=\"row\">
\t      <div class=\"col-lg-8\">
\t        <div class=\"content-box-style-08\">
\t          <p class=\"subtitle\">Vote for</p>
\t          <h2 class=\"title\">Top issues that voters<br> consider important</h2>
\t          <div class=\"loader-area flex-md-row flex-column d-flex justify-content-md-between margin-top-50\">
\t            <div class=\"d-flex flex-column align-items-center\">
\t              <canvas class=\"loader2\"></canvas>
\t              <h4>Resident plan</h4>
\t            </div>
\t            <div class=\"d-flex flex-column align-items-center\">
\t              <canvas class=\"loader3\"></canvas>
\t              <h4>Education system</h4>
\t            </div>
\t            <div class=\"d-flex flex-column align-items-center\">
\t              <canvas class=\"loader4\"></canvas>
\t              <h4>Food</h4>
\t            </div>
\t            <div class=\"d-flex flex-column align-items-center\">
\t              <canvas class=\"loader5\"></canvas>
\t              <h4>Healthcare</h4>
\t            </div>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"image-box-style-07\">
\t        <img src=\"assets/img/vote.png\" alt=\"\">
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- vote area end -->

\t<div class=\"up-event-two margin-bottom-115 padding-top-115\">
\t  <div class=\"container\">
\t    <div class=\"row\">
\t      <div class=\"col-lg-12\">
\t        <div class=\"text-center margin-bottom-55\">
\t          <h2 class=\"section-title\">Upcoming events</h2>
\t        </div>
\t      </div>
\t    </div>
\t    <div class=\"row\">
\t      <div class=\"col-lg-6\">
\t        <div class=\"row\">
\t          <div class=\"col-md-6\">
\t            <div class=\"thumb\">
\t              <img src=\"assets/img/event/u1.png\" alt=\"\">
\t            </div>
\t          </div>
\t          <div class=\"col-md-5\">
\t            <div class=\"up-content-style-01\">
\t              <div class=\"date-month\">
\t                <span class=\"date\">18</span>
\t                <span class=\"month\">Nov</span>
\t              </div>
\t              <h6>Orphan children's educational campaign</h6>
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> British King's College Canada</a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-bell\"></i> 10AM- 5PM</a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-user\"></i> 547 People are going</a></li>
\t              </ul>
\t              <div class=\"btn-wrapper\">
\t                <a href=\"#\">Book your seat ➞</a>
\t              </div>
\t            </div>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-6\">
\t        <div class=\"row\">
\t          <div class=\"col-md-6\">
\t            <div class=\"thumb\">
\t              <img src=\"assets/img/event/u2.png\" alt=\"\">
\t            </div>
\t          </div>
\t          <div class=\"col-md-5\">
\t            <div class=\"up-content-style-01\">
\t              <div class=\"date-month\">
\t                <span class=\"date\">18</span>
\t                <span class=\"month\">Nov</span>
\t              </div>
\t              <h6>Orphan children's educational campaign</h6>
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> British King's College Canada</a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-bell\"></i> 10AM- 5PM</a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-user\"></i> 547 People are going</a></li>
\t              </ul>
\t              <div class=\"btn-wrapper\">
\t                <a href=\"#\">Book your seat ➞</a>
\t              </div>
\t            </div>
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>

\t<!-- team area start  -->
\t<div class=\"guest-area padding-bottom-90\">
\t  <div class=\"container\">
\t    <div class=\"row\">
\t      <div class=\"col-lg-12\">
\t        <div class=\"text-center margin-bottom-55\">
\t          <h2 class=\"section-title\">Meet with board</h2>
\t        </div>
\t      </div>
\t    </div>
\t    <div class=\"row about-member-count\">
\t      <div class=\"col-lg-3 col-sm-6\">
\t        <div class=\"icon-box-style-03 text-center margin-bottom-30 margin-top-50\">
\t          <div class=\"memeber-img\">
\t            <img src=\"assets/img/team/1.png\" alt=\"\">
\t            <div class=\"member-social-style-1\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-share-alt\"></i></a></li>
\t              </ul>
\t            </div>
\t            <div class=\"member-social\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t              </ul>
\t            </div>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4 class=\"title\">Charif Barrani</h4>
\t            <p>Chairman</p>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-3 col-sm-6\">
\t        <div class=\"icon-box-style-03 text-center margin-bottom-30\">
\t          <div class=\"memeber-img\">
\t            <img src=\"assets/img/team/2.png\" alt=\"\">
\t            <div class=\"member-social-style-1\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-share-alt\"></i></a></li>
\t              </ul>
\t            </div>
\t            <div class=\"member-social\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t              </ul>
\t            </div>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4 class=\"title\">Sharifur Robin</h4>
\t            <p>Project Manager</p>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-3 col-sm-6\">
\t        <div class=\"icon-box-style-03 text-center margin-bottom-30 margin-top-50\">
\t          <div class=\"memeber-img\">
\t            <img src=\"assets/img/team/3.png\" alt=\"\">
\t            <div class=\"member-social-style-1\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-share-alt\"></i></a></li>
\t              </ul>
\t            </div>
\t            <div class=\"member-social\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t              </ul>
\t            </div>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4 class=\"title\">Jane smith</h4>
\t            <p>Designer</p>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-3 col-sm-6\">
\t        <div class=\"icon-box-style-03 text-center margin-bottom-30\">
\t          <div class=\"memeber-img\">
\t            <img src=\"assets/img/team/4.png\" alt=\"\">
\t            <div class=\"member-social-style-1\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-share-alt\"></i></a></li>
\t              </ul>
\t            </div>
\t            <div class=\"member-social\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t              </ul>
\t            </div>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4 class=\"title\">Farhad hossain</h4>
\t            <p>Admin</p>
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- team area end  -->

\t<div class=\"testimonial-area padding-top-100 margin-bottom-75\">
\t  <div class=\"container\">
\t    <div class=\"row\">
\t      <div class=\"col-md-12\">
\t        <div class=\"text-center\">
\t          <h2 class=\"section-title color-white\">What people say</h2>
\t        </div>
\t      </div>
\t    </div>
\t    <div class=\"row\">
\t      <div class=\"col-md-8 offset-md-2\">
\t        <div class=\"testimonial-slider\">
\t          <div class=\"single-testimonial-item\">
\t            <div class=\"d-flex\">
\t              <div class=\"thumb\">
\t                <img src=\"assets/img/testimonial/1.png\" alt=\"\">
\t              </div>
\t              <div class=\"content\">
\t                <h4>Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi ut aliquip ex
\t                  eaist Met dolore magna aliqua. Ut enim</h4>
\t                <span class=\"title\">Salman Khan</span>
\t                <p class=\"address\">West newyork area, NewYork city, USA</p>
\t              </div>
\t            </div>
\t            <div class=\"quote\">
\t              <img src=\"assets/img/quote.png\" alt=\"\">
\t            </div>
\t          </div>
\t          <div class=\"single-testimonial-item\">
\t            <div class=\"d-flex\">
\t              <div class=\"thumb\">
\t                <img src=\"assets/img/testimonial/1.png\" alt=\"\">
\t              </div>
\t              <div class=\"content\">
\t                <h4>Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi ut aliquip ex
\t                  eaist Met dolore magna aliqua. Ut enim</h4>
\t                <span class=\"title\">Salman Khan</span>
\t                <p class=\"address\">West newyork area, NewYork city, USA</p>
\t              </div>
\t            </div>
\t            <div class=\"quote\">
\t              <img src=\"assets/img/quote.png\" alt=\"\">
\t            </div>
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>

\t<!-- blog area Start -->
\t<div class=\"home-news-area padding-top-115\">
\t  <div class=\"container\">
\t    <div class=\"row justify-content-center\">
\t      <div class=\"col-lg-12\">
\t        <div class=\"text-center padding-bottom-55\">
\t          <h2 class=\"section-title\">Read latest blog</h2>
\t        </div>
\t      </div>
\t    </div>
\t    <div class=\"row\">
\t      <div class=\"col-lg-4\">
\t        <div class=\"news-item-style-03\">
\t          <div class=\"thumb\">
\t            <img src=\"assets/img/blog/1.png\" alt=\"news\">
\t            <div class=\"small-thumb\">
\t              <img src=\"assets/img/blog/sm1.png\" alt=\"small thumb\">
\t            </div>
\t          </div>
\t          <div class=\"content\">
\t            <p class=\"subtitle\">Politics</p>
\t            <h4 class=\"title\"><a href=\"blog-details.html\">Key chairs call to cancel press conference on</a></h4>
\t            <ul class=\"blog-meta d-flex flex-column flex-lg-row\">
\t              <li><a href=\"#\">25 September 2019</a></li>
\t              <li><a href=\"#\">Read 4576</a></li>
\t            </ul>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-4\">
\t        <div class=\"news-item-style-03\">
\t          <div class=\"thumb\">
\t            <img src=\"assets/img/blog/2.png\" alt=\"news\">
\t            <div class=\"small-thumb\">
\t              <img src=\"assets/img/blog/sm2.png\" alt=\"small thumb\">
\t            </div>
\t          </div>
\t          <div class=\"content\">
\t            <p class=\"subtitle\">World economy</p>
\t            <h4 class=\"title\"><a href=\"blog-details.html\">International Peace Conference Attended</a></h4>
\t            <ul class=\"blog-meta d-flex flex-column flex-lg-row\">
\t              <li><a href=\"#\">05 December 2019</a></li>
\t              <li><a href=\"#\">Read 876</a></li>
\t            </ul>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-4\">
\t        <div class=\"news-item-style-03\">
\t          <div class=\"thumb\">
\t            <img src=\"assets/img/blog/3.png\" alt=\"news\">
\t            <div class=\"small-thumb\">
\t              <img src=\"assets/img/blog/sm3.png\" alt=\"small thumb\">
\t            </div>
\t          </div>
\t          <div class=\"content\">
\t            <p class=\"subtitle\">Education</p>
\t            <h4 class=\"title\"><a href=\"blog-details.html\">Trump paints Democrats as fixated on impeachment...</a></h4>
\t            <ul class=\"blog-meta d-flex flex-column flex-lg-row\">
\t              <li><a href=\"#\">27 November 2019</a></li>
\t              <li><a href=\"#\">Read 7664</a></li>
\t            </ul>
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- blog area End -->";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- service start -->
\t<div class=\"our-service-area position-relative padding-top-115 padding-bottom-120\">
\t  <div class=\"donate-wrapper\">
\t    <a href=\"donate.html\"><i class=\"fa fa-heart\"></i> Donate Now</a>
\t  </div>
\t  <div class=\"container\">
\t    <div class=\"row justify-content-center\">
\t      <div class=\"col-lg-12\">
\t        <div class=\"text-center padding-bottom-55\">
\t          <h2 class=\"section-title\">We are for the people</h2>
\t        </div>
\t      </div>
\t    </div>
\t    <div class=\"row\">
\t      <div class=\"col-lg-4 col-md-6\">
\t        <div class=\"icon-box-style-01 hover-style-01 text-center margin-bottom-30\">
\t          <div class=\"sb-icon\">
\t            <a href=\"#\"><i class=\"flaticon-financial\"></i></a>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4>Our Political History</h4>
\t            <p>Lorem ipsum dummy text are used in section so replace your orginal text he Lorem ipsum dummy text</p>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-4 col-md-6\">
\t        <div class=\"icon-box-style-01 hover-style-01 text-center margin-bottom-30\">
\t          <div class=\"sb-icon\">
\t            <a href=\"#\"><i class=\"flaticon-hospital\"></i></a>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4>Our mission & Goal</h4>
\t            <p>Lorem ipsum dummy text are used in section so replace your orginal text he Lorem ipsum dummy text</p>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-4 col-md-6\">
\t        <div class=\"icon-box-style-01 hover-style-01 text-center margin-bottom-30\">
\t          <div class=\"sb-icon\">
\t            <a href=\"#\"><i class=\"flaticon-network\"></i></a>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4>We stand for</h4>
\t            <p>Lorem ipsum dummy text are used in section so replace your orginal text he Lorem ipsum dummy text</p>
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- service end -->

\t<!-- politx-content-area start -->
\t<div class=\"politx-content-area margin-bottom-120 margin-top-60\">
\t  <div class=\"container\">
\t    <div class=\"row\">
\t      <div class=\"col-lg-6 align-self-center order-2 order-lg-1\">
\t        <div class=\"content-box-style-01\">
\t          <p class=\"section-subtitle\">About us</p>
\t          <h2 class=\"title\">Organization for action</h2>
\t          <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt
\t            ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex
\t            ea commodo consequat. exercitation ullamco laboris nisi aliquip ex ea commodo consequat. turnkey
\t            applications lorem dummy. Ut enim minim veniam, exercitation ullamco laboris.</p>
\t          <div class=\"btn-wrapper padding-top-33\">
\t            <a class=\"btn btn-custom-primary\" href=\"#\">Learn more</a>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-5 offset-lg-1 order-1 order-lg-2\">
\t        <div class=\"image-box-style-06\">
\t          <img src=\"assets/img/action/4.png\" alt=\"\">
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- politx-content-area end -->

\t<!-- vote area start -->
\t<div class=\"vote-area2 padding-top-125 padding-bottom-115\">
\t  <div class=\"container\">
\t    <div class=\"row\">
\t      <div class=\"col-lg-8\">
\t        <div class=\"content-box-style-08\">
\t          <p class=\"subtitle\">Vote for</p>
\t          <h2 class=\"title\">Top issues that voters<br> consider important</h2>
\t          <div class=\"loader-area flex-md-row flex-column d-flex justify-content-md-between margin-top-50\">
\t            <div class=\"d-flex flex-column align-items-center\">
\t              <canvas class=\"loader2\"></canvas>
\t              <h4>Resident plan</h4>
\t            </div>
\t            <div class=\"d-flex flex-column align-items-center\">
\t              <canvas class=\"loader3\"></canvas>
\t              <h4>Education system</h4>
\t            </div>
\t            <div class=\"d-flex flex-column align-items-center\">
\t              <canvas class=\"loader4\"></canvas>
\t              <h4>Food</h4>
\t            </div>
\t            <div class=\"d-flex flex-column align-items-center\">
\t              <canvas class=\"loader5\"></canvas>
\t              <h4>Healthcare</h4>
\t            </div>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"image-box-style-07\">
\t        <img src=\"assets/img/vote.png\" alt=\"\">
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- vote area end -->

\t<div class=\"up-event-two margin-bottom-115 padding-top-115\">
\t  <div class=\"container\">
\t    <div class=\"row\">
\t      <div class=\"col-lg-12\">
\t        <div class=\"text-center margin-bottom-55\">
\t          <h2 class=\"section-title\">Upcoming events</h2>
\t        </div>
\t      </div>
\t    </div>
\t    <div class=\"row\">
\t      <div class=\"col-lg-6\">
\t        <div class=\"row\">
\t          <div class=\"col-md-6\">
\t            <div class=\"thumb\">
\t              <img src=\"assets/img/event/u1.png\" alt=\"\">
\t            </div>
\t          </div>
\t          <div class=\"col-md-5\">
\t            <div class=\"up-content-style-01\">
\t              <div class=\"date-month\">
\t                <span class=\"date\">18</span>
\t                <span class=\"month\">Nov</span>
\t              </div>
\t              <h6>Orphan children's educational campaign</h6>
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> British King's College Canada</a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-bell\"></i> 10AM- 5PM</a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-user\"></i> 547 People are going</a></li>
\t              </ul>
\t              <div class=\"btn-wrapper\">
\t                <a href=\"#\">Book your seat ➞</a>
\t              </div>
\t            </div>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-6\">
\t        <div class=\"row\">
\t          <div class=\"col-md-6\">
\t            <div class=\"thumb\">
\t              <img src=\"assets/img/event/u2.png\" alt=\"\">
\t            </div>
\t          </div>
\t          <div class=\"col-md-5\">
\t            <div class=\"up-content-style-01\">
\t              <div class=\"date-month\">
\t                <span class=\"date\">18</span>
\t                <span class=\"month\">Nov</span>
\t              </div>
\t              <h6>Orphan children's educational campaign</h6>
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> British King's College Canada</a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-bell\"></i> 10AM- 5PM</a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-user\"></i> 547 People are going</a></li>
\t              </ul>
\t              <div class=\"btn-wrapper\">
\t                <a href=\"#\">Book your seat ➞</a>
\t              </div>
\t            </div>
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>

\t<!-- team area start  -->
\t<div class=\"guest-area padding-bottom-90\">
\t  <div class=\"container\">
\t    <div class=\"row\">
\t      <div class=\"col-lg-12\">
\t        <div class=\"text-center margin-bottom-55\">
\t          <h2 class=\"section-title\">Meet with board</h2>
\t        </div>
\t      </div>
\t    </div>
\t    <div class=\"row about-member-count\">
\t      <div class=\"col-lg-3 col-sm-6\">
\t        <div class=\"icon-box-style-03 text-center margin-bottom-30 margin-top-50\">
\t          <div class=\"memeber-img\">
\t            <img src=\"assets/img/team/1.png\" alt=\"\">
\t            <div class=\"member-social-style-1\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-share-alt\"></i></a></li>
\t              </ul>
\t            </div>
\t            <div class=\"member-social\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t              </ul>
\t            </div>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4 class=\"title\">Charif Barrani</h4>
\t            <p>Chairman</p>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-3 col-sm-6\">
\t        <div class=\"icon-box-style-03 text-center margin-bottom-30\">
\t          <div class=\"memeber-img\">
\t            <img src=\"assets/img/team/2.png\" alt=\"\">
\t            <div class=\"member-social-style-1\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-share-alt\"></i></a></li>
\t              </ul>
\t            </div>
\t            <div class=\"member-social\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t              </ul>
\t            </div>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4 class=\"title\">Sharifur Robin</h4>
\t            <p>Project Manager</p>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-3 col-sm-6\">
\t        <div class=\"icon-box-style-03 text-center margin-bottom-30 margin-top-50\">
\t          <div class=\"memeber-img\">
\t            <img src=\"assets/img/team/3.png\" alt=\"\">
\t            <div class=\"member-social-style-1\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-share-alt\"></i></a></li>
\t              </ul>
\t            </div>
\t            <div class=\"member-social\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t              </ul>
\t            </div>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4 class=\"title\">Jane smith</h4>
\t            <p>Designer</p>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-3 col-sm-6\">
\t        <div class=\"icon-box-style-03 text-center margin-bottom-30\">
\t          <div class=\"memeber-img\">
\t            <img src=\"assets/img/team/4.png\" alt=\"\">
\t            <div class=\"member-social-style-1\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-share-alt\"></i></a></li>
\t              </ul>
\t            </div>
\t            <div class=\"member-social\">
\t              <ul>
\t                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t              </ul>
\t            </div>
\t          </div>
\t          <div class=\"sb-content\">
\t            <h4 class=\"title\">Farhad hossain</h4>
\t            <p>Admin</p>
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- team area end  -->

\t<div class=\"testimonial-area padding-top-100 margin-bottom-75\">
\t  <div class=\"container\">
\t    <div class=\"row\">
\t      <div class=\"col-md-12\">
\t        <div class=\"text-center\">
\t          <h2 class=\"section-title color-white\">What people say</h2>
\t        </div>
\t      </div>
\t    </div>
\t    <div class=\"row\">
\t      <div class=\"col-md-8 offset-md-2\">
\t        <div class=\"testimonial-slider\">
\t          <div class=\"single-testimonial-item\">
\t            <div class=\"d-flex\">
\t              <div class=\"thumb\">
\t                <img src=\"assets/img/testimonial/1.png\" alt=\"\">
\t              </div>
\t              <div class=\"content\">
\t                <h4>Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi ut aliquip ex
\t                  eaist Met dolore magna aliqua. Ut enim</h4>
\t                <span class=\"title\">Salman Khan</span>
\t                <p class=\"address\">West newyork area, NewYork city, USA</p>
\t              </div>
\t            </div>
\t            <div class=\"quote\">
\t              <img src=\"assets/img/quote.png\" alt=\"\">
\t            </div>
\t          </div>
\t          <div class=\"single-testimonial-item\">
\t            <div class=\"d-flex\">
\t              <div class=\"thumb\">
\t                <img src=\"assets/img/testimonial/1.png\" alt=\"\">
\t              </div>
\t              <div class=\"content\">
\t                <h4>Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi ut aliquip ex
\t                  eaist Met dolore magna aliqua. Ut enim</h4>
\t                <span class=\"title\">Salman Khan</span>
\t                <p class=\"address\">West newyork area, NewYork city, USA</p>
\t              </div>
\t            </div>
\t            <div class=\"quote\">
\t              <img src=\"assets/img/quote.png\" alt=\"\">
\t            </div>
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>

\t<!-- blog area Start -->
\t<div class=\"home-news-area padding-top-115\">
\t  <div class=\"container\">
\t    <div class=\"row justify-content-center\">
\t      <div class=\"col-lg-12\">
\t        <div class=\"text-center padding-bottom-55\">
\t          <h2 class=\"section-title\">Read latest blog</h2>
\t        </div>
\t      </div>
\t    </div>
\t    <div class=\"row\">
\t      <div class=\"col-lg-4\">
\t        <div class=\"news-item-style-03\">
\t          <div class=\"thumb\">
\t            <img src=\"assets/img/blog/1.png\" alt=\"news\">
\t            <div class=\"small-thumb\">
\t              <img src=\"assets/img/blog/sm1.png\" alt=\"small thumb\">
\t            </div>
\t          </div>
\t          <div class=\"content\">
\t            <p class=\"subtitle\">Politics</p>
\t            <h4 class=\"title\"><a href=\"blog-details.html\">Key chairs call to cancel press conference on</a></h4>
\t            <ul class=\"blog-meta d-flex flex-column flex-lg-row\">
\t              <li><a href=\"#\">25 September 2019</a></li>
\t              <li><a href=\"#\">Read 4576</a></li>
\t            </ul>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-4\">
\t        <div class=\"news-item-style-03\">
\t          <div class=\"thumb\">
\t            <img src=\"assets/img/blog/2.png\" alt=\"news\">
\t            <div class=\"small-thumb\">
\t              <img src=\"assets/img/blog/sm2.png\" alt=\"small thumb\">
\t            </div>
\t          </div>
\t          <div class=\"content\">
\t            <p class=\"subtitle\">World economy</p>
\t            <h4 class=\"title\"><a href=\"blog-details.html\">International Peace Conference Attended</a></h4>
\t            <ul class=\"blog-meta d-flex flex-column flex-lg-row\">
\t              <li><a href=\"#\">05 December 2019</a></li>
\t              <li><a href=\"#\">Read 876</a></li>
\t            </ul>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-lg-4\">
\t        <div class=\"news-item-style-03\">
\t          <div class=\"thumb\">
\t            <img src=\"assets/img/blog/3.png\" alt=\"news\">
\t            <div class=\"small-thumb\">
\t              <img src=\"assets/img/blog/sm3.png\" alt=\"small thumb\">
\t            </div>
\t          </div>
\t          <div class=\"content\">
\t            <p class=\"subtitle\">Education</p>
\t            <h4 class=\"title\"><a href=\"blog-details.html\">Trump paints Democrats as fixated on impeachment...</a></h4>
\t            <ul class=\"blog-meta d-flex flex-column flex-lg-row\">
\t              <li><a href=\"#\">27 November 2019</a></li>
\t              <li><a href=\"#\">Read 7664</a></li>
\t            </ul>
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- blog area End -->", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/home.htm", "");
    }
}
