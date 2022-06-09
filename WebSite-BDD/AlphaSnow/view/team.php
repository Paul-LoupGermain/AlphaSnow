<?php

ob_start();
$title = "AlphaSnow - Team";
?>
    <div class="main">
        <div class="shop_top">
            <div class="container">
                <h3 class="m_2">Our Team</h3>
                <div class="row team_box">
                    <div class="col-md-3 team1">
                        <a class="popup-with-zoom-anim" href="#small-dialog3"><img src="view/content/images/team1.jpg"
                                                                                   class="img-responsive"
                                                                                   title="continue" alt=""/></a>
                        <div id="small-dialog3" class="mfp-hide">
                            <div class="pop_up2">
                                <h2>Paul-Loup</h2>
                                <p>The best things that happen in the corporate world are not the result of one man's work.
                                    the work of one man. It's the work of a whole team.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 team1">
                        <a class="popup-with-zoom-anim" href="#small-dialog3"><img src="view/content/images/team2.jpg"
                                                                                   class="img-responsive"
                                                                                   title="continue" alt=""/></a>
                        <div id="small-dialog3" class="mfp-hide">
                            <div class="pop_up2">
                                <h2>Mathias</h2>
                                <p>Coming together is a start, staying together is progress, working together is
                                    success.<br>
                                    Everyone knew it was impossible to do. Then one day someone came along
                                    who didn't know, and he did it.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 team1">
                        <a class="popup-with-zoom-anim" href="#small-dialog3"><img src="view/content/images/team3.jpg"
                                                                                   class="img-responsive"
                                                                                   title="continue" alt=""/></a>
                        <div id="small-dialog3" class="mfp-hide">
                            <div class="pop_up2">
                                <h2>Arlindo</h2>
                                <p>The greatest glory is not to never fall, but to get up after every
                                    fall.<br>Some want it to happen, some would like it to happen, and some make it happen.
                                    some make it happen.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 team_bottom">
                        <ul class="team_list">
                            <h4>Advantages</h4>
                            <li><a href="#">FREE DELIVERY</a>
                                <p>For a purchase of more than 100 CHF, the delivery is offered to you!</p></li>
                            <li><a href="#">CUSTOMER SERVICE 24/7</a>
                                <p>Our customer service is available 24/7 to answer your questions or solve your order
                                    problems.</p></li>
                            <li><a href="#">30-DAY GUARANTEE</a>
                                <p>you have a 30 days deadline satisfied or refund.
                                    The return of the article is free.</p></li>
                            <li><a href="#">QUALITY</a>
                                <p>In our store you can find a wide variety of high quality products.</p></li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <ul class="team_list">
                            <h4>Vision Statement</h4>
                            <p class="m_7">We would like to enable and inspire everyone during the winter (many of our
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
                            <img src="view/content/images/team5.jpg" class="img-responsive" alt=""/>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

$content = ob_get_clean();
require "gabarit.php";
