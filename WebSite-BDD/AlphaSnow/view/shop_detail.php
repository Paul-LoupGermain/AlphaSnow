<?php

    ob_start();
    $title = "AlphaSnow - Shop";
?>
<div class="main">
    <div class="shop_top">
        <div class="container">
            <div class="row">
                <?php if(isset($article_error_message)) : ?>
                    <h5><span style="color: #ff0000"><?=$article_error_message?></span></h5>
                <?php endif; ?>
                <?php foreach($article_details as $article) :?>
                <div class="col-md-9 single_left">
                    <div class="single_image">
                        <img class="img-responsive" src="<?=$article['photo']; ?>" />
                    </div>
                    <!-- end product_slider -->
                    <div class="single_right">
                        <h3><?=$article['marque']; ?> <?=$article['model']; ?> #<?=$article['code']; ?></h3>
                        <p class="m_10"><?=$article['description']; ?></p>
                        <div class="btn_form">
                            <form>
                                <input type="submit" value="buy now" title="">
                            </form>
                        </div>
                        <ul class="add-to-links">
                            <li><img src="view/content/images/wish.png" alt=""><a href="#">Add to wishlist</a></li>
                        </ul>
                        <div class="social_buttons">
                            <!--<h4>95 Items</h4>-->
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
                        <p class="price2">CHF <?=$article['price']; ?>.-</p>
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
                <br>
                <h4>Description</h4>
                <p><?=$article['description_grande']; ?></p>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php

    $content = ob_get_clean();
    require "gabarit.php";