<?php

    ob_start();
    $title = "AlphaSnow - Shop";
?>

<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <?php if(isset($article_error_message)) : ?>
            <h5><span style="color: #ff0000"><?=$article_error_message?></span></h5>
        <?php else : ?>
            <?php foreach($articles as $article) :?>
        <div class="col-md-3 shop_box">
            <a href="index.php?action=single&code=<?=$article['code']; ?>">

                <?php if(is_file($article['photo'])) :?>
                    <img src="<?=$article['photo']?>" class="img-responsive" alt="">
                <?php else :?>
                    <img src="" class="img-responsive" alt="">
                <?php endif; ?>

                <span class="new-box">
                    <span class="new-label">New</span>
                </span>
                <!--
                <span class="sale-box">
                    <span class="sale-label">Sale!</span>
                </span>-->
                <div class="shop_desc">
                    <h3><?=$article['marque']; ?> <?=$article['model']; ?></h3>
                    <!--<span class="reducedfrom">$66.00</span>-->
                    <span class="actual"><?='CHF ' . $article['price'] . '.-' ; ?></span><br>
                    <ul class="buttons">
                        <li class="cart"><a href="#">Add To Cart</a></li>
                        <li class="shop_btn"><a href="#">Read More</a></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<br>
<br>
<br>
<br>

<?php

    $content = ob_get_clean();
    require "gabarit.php";