<?php

    /**
     * @file      home.php
     * @brief
     * @author    Created by Mathias BOURQUI / Arlindo TAVARES-VARELA
     * @version   10-FEB-2022
     */

    ob_start();
    $title = "AlphaSnow . Home";
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
                        <div class="button"><a href="#">See Details</a></div>
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
        <p>hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
        <div class="close_but"><i class="close1"> </i></div>
        <ul id="flexiselDemo3">
            <li><img src="view/content/images/board1.jpg" /></li>
            <li><img src="view/content/images/board2.jpg" /></li>
            <li><img src="view/content/images/board3.jpg" /></li>
            <li><img src="view/content/images/board4.jpg" /></li>
            <li><img src="view/content/images/board5.jpg" /></li>
        </ul>
        <h3>SnowBoard Extreme Series</h3>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo3").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint:768,
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
                <p class="m_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
                <p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
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
                <div class="view view-ninth"><a href="single.php">
                        <img src="view/content/images/pic1.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                        <div class="content">
                            <h2>Hover Style #9</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                        </div>
                    </a> </div
            </div>
            <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
            <p class="m_5">claritatem insitam</p>
        </div>
        <div class="col-md-3 top_box">
            <div class="view view-ninth"><a href="single.php">
                    <img src="view/content/images/pic2.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                    <div class="content">
                        <h2>Hover Style #9</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                    </div>
                </a> </div>
            <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
            <p class="m_5">claritatem insitam</p>
        </div>
        <div class="col-md-3 top_box">
            <div class="view view-ninth"><a href="single.php">
                    <img src="view/content/images/pic3.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                    <div class="content">
                        <h2>Hover Style #9</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                    </div>
                </a> </div>
            <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
            <p class="m_5">claritatem insitam</p>
        </div>
        <div class="col-md-3 top_box1">
            <div class="view view-ninth"><a href="single.php">
                    <img src="view/content/images/pic4.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                    <div class="content">
                        <h2>Hover Style #9</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                    </div>
                </a> </div>
            <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
            <p class="m_5">claritatem insitam</p>
        </div>
    </div>
</div>

<?php

    $content = ob_get_clean();
    require "gabarit.php";