<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
    <title><?= $title ?></title>
    <link href="view/content/css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="view/content/css/style.css" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="view/content/images/favicon.png" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <script src="view/content/js/jquery.min.js"></script>
    <!--<script src="js/jquery.easydropdown.js"></script>-->
    <!--start slider -->
    <link rel="stylesheet" href="view/content/css/fwslider.css" media="all">
    <script src="view/content/js/jquery-ui.min.js"></script>
    <script src="view/content/js/fwslider.js"></script>
    <!--end slider -->
    <script type="text/javascript">
        $(document).ready(function () {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function () {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function () {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function (e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function () {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-left">
                    <div class="logo">
                        <a href="../index.php"><img align="center" width="75px" src="view/content/images/favicon.png"
                                                    alt=""/></a>
                    </div>
                    <div class="menu">
                        <a class="toggleMenu" href="#"><img src="view/content/images/nav.png" alt=""/></a>
                        <ul class="nav" id="nav">
                            <li><a href="../index.php?action=shop">Shop</a></li>
                            <li><a href="../index.php?action=team">Team</a></li>
                            <li><a href="../index.php?action=experience">Experience</a></li>
                            <?php if (isset($_SESSION['user_type'])) : ?>
                                <li>
                                    <a href="../index.php?action=gestion">Gestion</a>
                                </li>
                            <?php endif; ?>
                            <li><a href="../index.php?action=contact">Contact</a></li>
                            <li>
                                <?php if (isset($_SESSION['login_email'])) : ?>
                                    <a href="../index.php?action=logout">Logout</a>
                                <?php else : ?>
                                <a href="../index.php?action=login">Login</a>
                            <li><a href="../index.php?action=register">Register</a></li>
                        <?php endif; ?>
                            </li>
                            <li>
                                <div class="topbar-child2">
                                            <span class="topbar-email text-color">
                                                <?php if (isset($_SESSION['login_email'])) : ?>
                                                    <?= $_SESSION['login_email']; ?>
                                                <?php endif; ?>
                                            </span>
                                </div>
                            </li>
                            <div class="clear"></div>
                        </ul>
                        <script type="text/javascript" src="view/content/js/responsive-nav.js"></script>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="header_right">
                    <!-- start search-->
                    <div class="search-box">
                        <div id="sb-search" class="sb-search">
                            <form>
                                <input class="sb-search-input" placeholder="Enter your search term..." type="search"
                                       name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                    <!----search-scripts---->
                    <script src="view/content/js/classie.js"></script>
                    <script src="view/content/js/uisearch.js"></script>
                    <script>
                        new UISearch(document.getElementById('sb-search'));
                    </script>
                    <!----//search-scripts---->
                    <ul class="icon1 sub-icon1 profile_img">
                        <li><a class="active-icon c1" href="#"> </a>
                            <ul class="sub-icon1 list">
                                <div class="product_control_buttons">
                                    <a href="#"><img src="view/content/images/edit.png" alt=""/></a>
                                    <a href="#"><img src="view/content/images/close_edit.png" alt=""/></a>
                                </div>
                                <div class="clear"></div>
                                <li class="list_img"><img src="view/content/images/1.jpg" alt=""/></li>
                                <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                                            $12.00</span></li>
                                <div class="login_buttons">
                                    <div class="login_button"><a href="../index.php?action=checkout">Check out</a></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </ul>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $content ?>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="footer_box">
                    <h4>Products</h4>
                    <li><a href="../index.php?action=shop">Shop</a></li>
                    <li><a href="#">Mens</a></li>
                    <li><a href="#">Womens</a></li>
                    <li><a href="#">Youth</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="footer_box">
                    <h4>About</h4>
                    <li><a href="#">Careers and internships</a></li>
                    <li><a href="#">Sponserships</a></li>
                    <li><a href="../index.php?action=team">team</a></li>
                    <li><a href="#">Catalog Request/Download</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="footer_box">
                    <h4>Customer Support</h4>
                    <li><a href="../index.php?action=contact">Contact Us</a></li>
                    <li><a href="#">Shipping and Order Tracking</a></li>
                    <li><a href="#">Easy Returns</a></li>
                    <li><a href="#">Warranty</a></li>
                    <li><a href="#">Replacement Binding Parts</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="footer_box">
                    <h4>Newsletter</h4>
                    <div class="footer_search">
                        <form>
                            <input type="text" value="Enter your email" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Enter your email';}">
                            <input type="submit" value="Go">
                        </form>
                    </div>
                    <ul class="social">
                        <li class="facebook"><a href="#"><span> </span></a></li>
                        <li class="twitter"><a href="#"><span> </span></a></li>
                        <li class="instagram"><a href="#"><span> </span></a></li>
                        <li class="pinterest"><a href="#"><span> </span></a></li>
                        <li class="youtube"><a href="#"><span> </span></a></li>
                    </ul>

                </ul>
            </div>
        </div>
        <div class="row footer_bottom">
            <div class="copy">
                <p>© 2022 AlphSnow</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>