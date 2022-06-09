<?php

    /**
     * @file      home.php
     * @brief
     * @author    Created by Paul-Loup GERMAIN
     * @version   09-JUIN-2022
     */

    ob_start();
    $title = "AlphaSnow - Home";
?>

    <div class="banner">
        <!-- start slider -->
        <div id="fwslider">
            <div class="slider_container">
                <div class="slide">
                    <!-- Slide image -->
                    <img src="view/content/images/slider1.jpg" class="img-responsive" alt=""/>
                    <!-- /Slide image -->
                    <!-- Texts container -->
                    <div class="slide_content">
                        <div class="slide_content_wrap">
                            <!-- Text title -->
                            <h1 class="title">Run Over<br>Everything</h1>
                            <!-- /Text title -->
                            <div class="button"><a href="index.php?action=experience">See Details</a></div>
                        </div>
                    </div>
                    <!-- /Texts container -->
                </div>
                <!-- /Duplicate to create more slides -->
                <div class="slide">
                    <img src="view/content/images/slider2.jpg" class="img-responsive" alt=""/>
                    <div class="slide_content">
                        <div class="slide_content_wrap">
                            <h1 class="title">Run Over<br>Everything</h1>
                            <div class="button"><a href="#">See Details</a></div>
                        </div>
                    </div>
                </div>
                <!--/slide -->
            </div>
            <div class="timers"></div>
            <div class="slidePrev"><span></span></div>
            <div class="slideNext"><span></span></div>
        </div>
        <!--/slider -->
    </div>
    <div class="main">
        <div class="content-top">
            <h2>snowboards</h2>
            <p>New 2022 collections</p>
            <div class="close_but"><i class="close1"> </i></div>
            <ul id="flexiselDemo3">
                <li><img src="view/content/images/board1.jpg"/></li>
                <li><img src="view/content/images/board2.jpg"/></li>
                <li><img src="view/content/images/board3.jpg"/></li>
                <li><img src="view/content/images/board4.jpg"/></li>
                <li><img src="view/content/images/board5.jpg"/></li>
            </ul>
            <h3>SnowBoard Extreme Series</h3>
            <script type="text/javascript">
                $(window).load(function () {
                    $("#flexiselDemo3").flexisel({
                        visibleItems: 5,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="view/content/js/jquery.flexisel.js"></script>
        </div>
    </div>
    <div class="content-bottom">
        <div class="container">
            <div class="row content_bottom-text">
                <div class="col-md-7">
                    <h3>The Mountains<br>Snowboarding</h3>
                    <p class="m_1">We would like to enable and inspire everyone during the winter (many of our
                        products are also usable year round) to lead an active outdoor life.<br> We do this by
                        providing you with top quality snow gear, outdoor gear, clothing and accessories at
                        extremely competitive prices.<br>
                        We offer more than products, we offer passion.<br>
                        If you hit
                        us up, we are always happy to share our expertise, experience and enthusiasm.<br>
                        Our
                        management and service team consists of a few young adventurers who explore the
                        mountains around the world.<br>
                        Our team dreamed of equipment that wouldn't let them down at
                        affordable prices. We now pass it on to you to make YOUR adventures happen without
                        breaking the bank.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="features">
        <div class="container">
            <h3 class="m_3">Features</h3>
            <div class="close_but"><i class="close1"> </i></div>
            <div class="row">
                <div class="col-md-3 top_box">
                    <div class="view view-ninth"><a href="#">
                            <img src="view/content/images/pic1.jpg" class="img-responsive" alt=""/>
                            <div class="mask mask-1"></div>
                            <div class="mask mask-2"></div>
                            <div class="content">
                                <h2>Snow repair</h2>
                                <p>Repair your Snow equipment</p>
                            </div>
                        </a></div
                </div>
                <h4 class="m_4"><a href="#">Snow repair</a></h4>
            </div>
            <div class="col-md-3 top_box">
                <div class="view view-ninth"><a href="#">
                        <img src="view/content/images/pic2.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"></div>
                        <div class="mask mask-2"></div>
                        <div class="content">
                            <h2>Off-Road</h2>
                            <p>discovery Off-Road</p>
                        </div>
                    </a></div>
                <h4 class="m_4"><a href="#">Off-Road</a></h4>
            </div>
            <div class="col-md-3 top_box">
                <div class="view view-ninth"><a href="#">
                        <img src="view/content/images/pic3.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"></div>
                        <div class="mask mask-2"></div>
                        <div class="content">
                            <h2>Snow Freestyle</h2>
                            <p>Discover our Snow Park</p>
                        </div>
                    </a></div>
                <h4 class="m_4"><a href="#">Snow Freestyle</a></h4>
            </div>
            <div class="col-md-3 top_box1">
                <div class="view view-ninth"><a href="#">
                        <img src="view/content/images/pic4.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"></div>
                        <div class="mask mask-2"></div>
                        <div class="content">
                            <h2>Snow output</h2>
                            <p>Snow release on April 12th.</p>
                        </div>
                    </a></div>
                <h4 class="m_4"><a href="#">Snow output</a></h4>
            </div>
        </div>
    </div>

<?php

$content = ob_get_clean();
require "gabarit.php";