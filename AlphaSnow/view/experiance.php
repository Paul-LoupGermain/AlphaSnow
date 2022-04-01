<?php

ob_start();
$title = "AlphaSnow . Experiance";
?>
    <div class="main">
        <div class="shop_top">
            <div class="container">
                <h3 class="m_2">Our Experiance</h3>
                <div class="row ex_box">
                    <div class="col-md-4 team1">
                        <div class="img_section magnifier2">
                            <a class="fancybox" href="view/content/images/e1.jpg" data-fancybox-group="gallery"
                               title="Lorem ipsum dolor sit amet"><img src="view/content/images/e1.jpg"
                                                                       class="img-responsive" alt=""><span> </span>
                                <div class="img_section_txt">
                                    Snow Beginner Course
                                </div>
                            </a></div>
                    </div>
                    <div class="col-md-4 team1">
                        <div class="img_section magnifier2">
                            <a class="fancybox" href="view/content/images/e2.jpg" data-fancybox-group="gallery"
                               title="Lorem ipsum dolor sit amet"><img src="view/content/images/e2.jpg"
                                                                       class="img-responsive" alt=""><span> </span>
                                <div class="img_section_txt">
                                    Snow Advanced Course
                                </div>
                            </a></div>
                    </div>
                    <div class="col-md-4 team1">
                        <div class="img_section magnifier2">
                            <a class="fancybox" href="view/content/images/e3.jpg" data-fancybox-group="gallery"
                               title="Lorem ipsum dolor sit amet"><img src="view/content/images/e3.jpg"
                                                                       class="img-responsive" alt=""><span> </span>
                                <div class="img_section_txt">
                                    Snow Pro Course
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="row ex_box">
                    <div class="col-md-4 team1">
                        <div class="img_section magnifier2">
                            <a class="fancybox" href="view/content/images/e4.jpg" data-fancybox-group="gallery"
                               title="Lorem ipsum dolor sit amet"><img src="view/content/images/e4.jpg"
                                                                       class="img-responsive" alt=""><span> </span>
                                <div class="img_section_txt">
                                    Off-Piste Snow Course
                                </div>
                            </a></div>
                    </div>
                    <div class="col-md-4 team1">
                        <div class="img_section magnifier2">
                            <a class="fancybox" href="view/content/images/e5.jpg" data-fancybox-group="gallery"
                               title="Lorem ipsum dolor sit amet"><img src="view/content/images/e5.jpg"
                                                                       class="img-responsive" alt=""><span> </span>
                                <div class="img_section_txt">
                                    Snow Competition Course
                                </div>
                            </a></div>
                    </div>
                    <div class="col-md-4 team1">
                        <div class="img_section magnifier2">
                            <a class="fancybox" href="view/content/images/e6.jpg" data-fancybox-group="gallery"
                               title="Lorem ipsum dolor sit amet"><img src="view/content/images/e6.jpg"
                                                                       class="img-responsive" alt=""><span> </span>
                                <div class="img_section_txt">
                                    Cours Snow Famille
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php

$content = ob_get_clean();
require "gabarit.php";