<?php


/**
 * @file      gestion.php
 * @brief     This view is designed to edit product
 * @author    Mathias Bourqui
 * @version   28-MAR-2022
 */

ob_start();
$title = "AlphaSnow - Gestion";
?>
    <div class="main">
        <div class="shop_top">
            <div class="container">

                <?php if(isset($article_error_message)) : ?>
                    <h5><span style="color: #ff0000"><?=$article_error_message?></span></h5>
                <?php else : ?>
                    <?php foreach($articles as $article) :?>

                <div class="col-md-6">
                    <div class="login-page">
                        <img src="<?=$article['photo1']?>" class="img_gestion">
                        <?=$article['marque']?> <?=$article['model']?> #<?=$article['code']?>
                        <div class="button1">
                            <a href="../index.php?action=edit_article&code=<?=$article['code']?>"><input type="submit" name="Submit" value="Edit"></a>
                            <a href="../index.php?action=gestion_delete&code=<?=$article['code']?>"><input type="submit" name="Submit" value="Delete"></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <?php endforeach; ?>
                <?php endif; ?>
                <div class="button1">
                    <a href="../index.php?action=add_article"><input type="submit" name="Submit" value="Add"></a>
                </div>
            </div>
        </div>
    </div>



<?php
$content = ob_get_clean();
require "gabarit.php";

