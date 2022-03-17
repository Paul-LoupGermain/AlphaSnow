<?php

ob_start();
$title = "AlphaSnow . Single";
?>
<div class="main">
    <div class="shop_top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 single_left">
                    <div class="single_image">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="img-responsive" src="view/content/images/3.jpg" />
                                    <img class="img-responsive" src="view/content/images/3.jpg" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end product_slider -->
                    <div class="single_right">
                        <h3>hendrerit in vulputate velit </h3>
                        <p class="m_10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse</p>
                        <ul class="options">
                            <h4 class="m_12">Select a Size(cm)</h4>
                            <li><a href="#">151</a></li>
                            <li><a href="#">148</a></li>
                            <li><a href="#">156</a></li>
                            <li><a href="#">145</a></li>
                            <li><a href="#">162(w)</a></li>
                            <li><a href="#">163</a></li>
                        </ul>
                        <div class="btn_form">
                            <form>
                                <input type="submit" value="buy now" title="">
                            </form>
                        </div>
                        <ul class="add-to-links">
                            <li><img src="view/content/images/wish.png" alt=""><a href="#">Add to wishlist</a></li>
                        </ul>
                        <div class="social_buttons">
                            <h4>95 Items</h4>
                            <button type="button" class="btn1 btn1-default1 btn1-twitter" onclick="">
                                <i class="icon-twitter"></i> Tweet
                            </button>
                            <button type="button" class="btn1 btn1-default1 btn1-facebook" onclick="">
                                <i class="icon-facebook"></i> Share
                            </button>
                            <button type="button" class="btn1 btn1-default1 btn1-google" onclick="">
                                <i class="icon-google"></i> Google+
                            </button>
                            <button type="button" class="btn1 btn1-default1 btn1-pinterest" onclick="">
                                <i class="icon-pinterest"></i> Pinterest
                            </button>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="col-md-3">
                    <div class="box-info-product">
                        <p class="price2">$130.25</p>
                        <ul class="prosuct-qty">
                            <span>Quantity:</span>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </ul>
                        <button type="submit" name="Submit" class="exclusive">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="desc">
                <h4>Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores</p>
            </div>
        </div>
    </div>
</div>
<?php

$content = ob_get_clean();
require "gabarit.php";