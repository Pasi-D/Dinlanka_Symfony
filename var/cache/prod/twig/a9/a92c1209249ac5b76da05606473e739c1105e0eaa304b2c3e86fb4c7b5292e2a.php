<?php

/* base.html.twig */
class __TwigTemplate_ad4f70b84e5b678b20061e0ec1f425b5c47729c35bf65074e8bdd1d2173eca7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 54
        echo "        <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\"/>

    </head>

    <body id=\"page-top\">
        <div id=\"st-container\" class=\"st-container\">
            <div class=\"st-pusher\">
                <div class=\"st-content\">
                    <header class=\"header\">
                        <div id=\"search\">
                            <button type=\"button\" class=\"close\">×</button>
                            <form>
                                <input type=\"search\" value=\"\" placeholder=\"type keyword(s) here\" />
                                <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                            </form>
                        </div>

                        <nav class=\"navbar navbar-default\" role=\"navigation\">

                            <div class=\"container mainnav\">
                                <div class=\"navbar-header\">
                                    <h1 class=\"logo\"><a class=\"navbar-brand\" href=\"/\"><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a></h1>

                                    <!-- offcanvas-trigger -->
                                    <button type=\"button\" class=\"navbar-toggle collapsed pull-right\" >
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <i class=\"fa fa-bars\"></i>
                                    </button>

                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class=\"collapse navbar-collapse navbar-collapse\">

                                    <span class=\"search-button pull-right\"><a href=\"#search\"><i class=\"fa fa-search\"></i></a></span>

                                    <ul class=\"nav navbar-nav navbar-right\">
                                        <!-- Home -->
                                        <li><a href=\"/\">Home</a></li>
                                        <!-- /Home -->

                                        <!-- Pages -->
                                        <li class=\"dropdown\"><a href=\"/about\">About Us <span class=\"fa fa-angle-down\"></span></a>
                                            <!-- submenu-wrapper -->
                                            <div class=\"submenu-wrapper\">
                                                <div class=\"submenu-inner\">
                                                    <ul class=\"dropdown-menu\">
                                                        <li><a href=\"/about\">Our Mission</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /submenu-wrapper -->
                                        </li>
                                        <!-- /Pages -->

                                        <!-- Services -->
                                        <li class=\"dropdown\"><a href=\"#\">Key Products<span class=\"fa fa-angle-down\"></span></a>
                                            <!-- submenu-wrapper -->
                                            <div class=\"submenu-wrapper\">
                                                <div class=\"submenu-inner\">
                                                    <ul class=\"dropdown-menu\">
                                                        <li><a href=\"/ior-eor-services\">IOR/EOR Services</a></li>
                                                        <li><a href=\"/ocean-freight\">Ocean Freight</a></li>
                                                        <li><a href=\"/air-freight\">Air Freight</a></li>
                                                        <li><a href=\"/sea-air-service\">Sea-Air Service</a></li>
                                                        <li><a href=\"/dinlanka-cargo-insurance\">Cargo Insurance</a></li>
                                                        <li><a href=\"/new-shipping-containers-for-sale\">New &amp; Used Containers</a></li>
                                                        <li><a href=\"/supply-chain-manegment\">Supply Chain Management</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /submenu-wrapper -->
                                        </li>
                                        <!-- MEGA MENU -->
                                        <li class=\"dropdown mega-fw has-megamenu\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Tools<span class=\"fa fa-angle-down\"></span></a>
                                            <!-- megamenu-wrapper -->
                                            <div class=\"submenu-wrapper megamenu-wrapper\">
                                                <div class=\"submenu-inner megamenu-inner\">

                                                    <ul class=\"dropdown-menu\">
                                                        <li>
                                                            <div class=\"mega-content\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-sm-5 mega-col\">
                                                                        <ul>
                                                                            <li class=\"dropdown-header\">Pages</li>
                                                                            <li><a href=\"/about\">About</a></li>
                                                                            <li><a href=\"/service\">Service</a></li>
                                                                            <li><a href=\"#\">Our people</a></li>
                                                                            <li><a href=\"#\">Career</a></li>
                                                                            <li><a href=\"#\">FAQ Page</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class=\"col-sm-5 mega-col\">
                                                                        <ul>
                                                                            <li class=\"dropdown-header\">Services</li>
                                                                            <li><a href=\"/ior-eor-services\">IOR/EOR Services</a></li>
                                                                            <li><a href=\"/ocean-freight\">Ocean Freight</a></li>
                                                                            <li><a href=\"/air-freight\">Air Freight</a></li>
                                                                            <li><a href=\"/sea-air-service\">Sea-Air Service</a></li>
                                                                            <li><a href=\"/dinlanka-cargo-insurance\">Cargo Insurance</a></li>
                                                                            <li><a href=\"/new-shipping-containers-for-sale\">New &amp; Used Containers</a></li>
                                                                            <li><a href=\"/supply-chain-manegment\">Supply Chain Management</a></li>
                                                                            <li><a href=\"/entrepot-trade\">Entrepot Trade</a></li>
                                                                            <li><a href=\"/freezer-transportation-solutions\">Freezer Transportation & Solutions</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- /.row -->
                                                            </div><!-- /.mega-content -->
                                                        </li>
                                                    </ul><!-- /.dropdown menu -->
                                                </div><!-- /.megamenu-inner -->
                                            </div> <!-- /.megamenu-wrapper -->
                                        </li> <!-- /MEGA MENU -->
                                        <!-- /Pages -->
                                        <!-- Blog -->
                                        <li class=\"dropdown\"><a href=\"#\">UPB Cargo</a>
                                        </li>
                                        <li><a href=\"/contact\">Contact us</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container -->
                        </nav>
                    </header>

                    ";
        // line 179
        $this->displayBlock('body', $context, $blocks);
        // line 180
        echo "
                    <!-- footer-widget-section start -->
                    <section class=\"footer-widget-section section-padding\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-3 col-md-offset-1 col-sm-4\">
                                    <div class=\"footer-widget\">
                                        <h3>Contact Us</h3>

                                        <address>
                                            DinLanka Logistics (Pvt) Ltd,<br>
                                            320/7 -1/2 , Galle Road,<br>
                                            Colombo 03,<br>
                                            Sri Lanka.<br>

                                            <!-- Google Map Modal Trigger -->
                                            <button type=\"button\" class=\"modal-map\" data-toggle=\"modal\" data-target=\"#cssMapModal\">Location  Map</button>

                                            <span class=\"tel\">Telephone: +94 112 370909-10<br>
                                                                            Fax: +94 112 370911</span>
                                            <span class=\"tel\">Contact Person: Dinraj Fernando – (Director/CEO)<br>
                                                                            Mobile: +94777 224704<br>
                                                                            E-mail: dinraj.fernando@dinlanka.com</span>
                                        </address>


                                        <!-- Modal -->
                                        <div class=\"modal fade\" id=\"cssMapModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-lg\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Our Location</h4>
                                                    </div>
                                                    <div class=\"modal-body\">

                                                        <div id=\"googleMap\"></div>

                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- End Modal -->
                                    </div><!-- /.footer-widget -->
                                </div><!-- /.col-md-4 -->

                                <div class=\"col-md-5 col-sm-5\">
                                    <div class=\"footer-widget\">
                                        <h3>Stay in Touch</h3>
                                        <p>Enter your email address to receive news &amp; offers from us</p>

                                        <form class=\"newsletter-form\">
                                            <div class=\"form-group\">
                                                <label class=\"sr-only\" for=\"InputEmail1\">Email address</label>
                                                <input type=\"email\" class=\"form-control\" id=\"InputEmail1\" placeholder=\"Your email address\">
                                                <button type=\"submit\" class=\"\">Send &nbsp;<i class=\"fa fa-angle-right\"></i></button>
                                            </div>
                                        </form>
                                    </div><!-- /.footer-widget -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section><!-- /.cta-section -->
                    <!-- footer-widget-section end -->

                    <!-- copyright-section start -->
                    <footer class=\"copyright-section\">
                        <div class=\"container text-center\">
                            <div class=\"footer-menu\">
                                <ul>
                                    <li><a href=\"#\">Privacy &amp; Cookies</a></li>
                                    <li><a href=\"#\">Terms &amp; Conditions</a></li>
                                    <li><a href=\"#\">Accessibility</a></li>
                                </ul>
                            </div>

                            <div class=\"copyright-info\">
                                <span>Copyright © 2018 DinLanka pvt Ltd. All Rights Reserved. Designed by <a href=\"#\">DinLanka</a><br> Proudly powered by <a href=\"#\">HTML5</a> and <a href=\"#\">Bootstrap3</a></span>
                            </div>
                        </div><!-- /.container -->
                    </footer>
                    <!-- copyright-section end -->
                    </div> <!-- .st-content -->
                    </div> <!-- .st-pusher -->

                    <!-- OFF CANVAS MENU -->
                    <div class=\"offcanvas-menu offcanvas-effect\">
                        <div class=\"offcanvas-wrap\">
                            <div class=\"off-canvas-header\">
                                <button type=\"button\" class=\"close\" aria-hidden=\"true\" data-toggle=\"offcanvas\" id=\"off-canvas-close-btn\">&times;</button>
                            </div>
                            <ul id =\"offcanvasMenu\" class=\"list-unstyled visible-xs visible-sm\">
                                <li class=\"active\"><a href=\"/\">Home<span class=\"sr-only\">(current)</span></a></li>
                                <li>
                                    <a href=\"#\">Pages</a>
                                    <ul>
                                        <li><a href=\"/about\">About</a></li>
                                        <li><a href=\"/service\">Service</a></li>
                                        <li><a href=\"#\">Our people</a></li>
                                        <li><a href=\"#\">Career</a></li>
                                        <li><a href=\"#\">FAQ Page</a></li>
                                    </ul>

                                </li>
                                <li>
                                    <a href=\"#\">Services</a>
                                    <ul>
                                        <li><a href=\"/ior-eor-services\">IOR/EOR Services</a></li>
                                        <li><a href=\"/ocean-freight\">Ocean Freight</a></li>
                                        <li><a href=\"/air-freight\">Air Freight</a></li>
                                        <li><a href=\"/sea-air-service\">Sea-Air Service</a></li>
                                        <li><a href=\"/dinlanka-cargo-insurance\">Cargo Insurance</a></li>
                                        <li><a href=\"/new-shipping-containers-for-sale\">New &amp; Used Containers</a></li>
                                        <li><a href=\"/supply-chain-manegment\">Supply Chain Management</a></li></ul></li>
                                <li><a href=\"#\">Blog</a><ul>
                                        <li><a href=\"#\">Standard blog</a></li>
                                        <li><a href=\"#\">Single blog</a></li> </ul></li>
                                <li><a href=\"/contact\">Contact</a></li>
                                <li><a href=\"#\">Typography</a></li>
                            </ul>
                            <div class=\"offcanvas-widgets hidden-sm hidden-xs\">
                                <div id=\"twitterWidget\">
                                    <h2>Tweeter feed</h2>
                                    <div class=\"twitter-widget\"></div>
                                </div>
                                <div class=\"newsletter-widget\">
                                    <h2>Stay in Touch</h2>
                                    <p>Enter your email address to receive news &amp; offers from us</p>

                                    <form class=\"newsletter-form\">
                                        <div class=\"form-group\">
                                            <label class=\"sr-only\" for=\"InputEmail1\">Email address</label>
                                            <input type=\"email\" class=\"form-control\" id=\"InputEmail2\" placeholder=\"Your email address\">
                                            <button type=\"submit\" class=\"btn\">Send &nbsp;<i class=\"fa fa-angle-right\"></i></button>
                                        </div>
                                    </form>

                                </div><!-- newsletter-widget -->
                            </div>
                        </div>
                    </div><!-- .offcanvas-menu -->
                    </div><!-- /st-container -->



                    <!-- Preloader -->
                    <div id=\"preloader\">
                        <div id=\"status\">
                            <div class=\"status-mes\"></div>
                        </div>
                    </div>

        ";
        // line 331
        $this->displayBlock('javascripts', $context, $blocks);
        // line 361
        echo "    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <!-- Web Fonts -->
            <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>

            <!-- Bootstrap Core CSS -->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Flaticon CSS -->
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/flaticon/flaticon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- font-awesome CSS -->
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Offcanvas CSS -->
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/hippo-off-canvas.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- animate CSS -->
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- language CSS -->
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/language-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- owl.carousel CSS -->
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("owl.carousel/assets/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- magnific-popup -->
            <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Main menu -->
            <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Template Common Styles -->
            <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/template.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Custom CSS -->
            <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Responsive CSS -->
            <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Javascript -->
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/modernizr-2.8.1.min.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    // line 179
    public function block_body($context, array $blocks = array())
    {
    }

    // line 331
    public function block_javascripts($context, array $blocks = array())
    {
        // line 332
        echo "            <!-- jQuery -->
            <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- owl.carousel -->
            <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("owl.carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Magnific-popup -->
            <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Offcanvas Menu -->
            <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hippo-offcanvas.js"), "html", null, true);
        echo "\"></script>
            <!-- inview -->
            <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.inview.min.js"), "html", null, true);
        echo "\"></script>
            <!-- stellar -->
            <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.stellar.js"), "html", null, true);
        echo "\"></script>
            <!-- countTo -->
            <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
            <!-- classie -->
            <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
            <!-- selectFx -->
            <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/selectFx.js"), "html", null, true);
        echo "\"></script>
            <!-- sticky kit -->
            <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Google MAP -->
            <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maps.googleapis.com/maps/api/js"), "html", null, true);
        echo "\"></script>
            <!--TWITTER FETCHER-->
            <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/twitterFetcher_min.js"), "html", null, true);
        echo "\"></script>
            <!-- Custom Script -->
            <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 359,  498 => 357,  493 => 355,  488 => 353,  483 => 351,  478 => 349,  473 => 347,  468 => 345,  463 => 343,  458 => 341,  453 => 339,  448 => 337,  443 => 335,  438 => 333,  435 => 332,  432 => 331,  427 => 179,  420 => 51,  414 => 48,  408 => 45,  402 => 42,  396 => 39,  390 => 36,  384 => 33,  378 => 30,  372 => 27,  366 => 24,  360 => 21,  354 => 18,  348 => 15,  342 => 11,  339 => 10,  334 => 9,  328 => 361,  326 => 331,  173 => 180,  171 => 179,  64 => 75,  39 => 54,  37 => 10,  33 => 9,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "F:\\WebDevelopment\\Dinlanka Project\\Symfony Project\\dinlanka_symfony\\app\\Resources\\views\\base.html.twig");
    }
}
