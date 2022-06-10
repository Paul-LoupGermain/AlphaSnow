<?php

    /**
     * @file      edit_article.php
     * @brief     This view is designed to edit product
     * @author    Created by Paul-Loup GERMAIN
     * @version   09-JUIN-2022
     */

    ob_start();
    $title = "AlphaSnow - Edit article";
?>

<?php if (isset($article_error_message)) : ?>
    <h5><span style="color: #ff0000"><?= $article_error_message ?></span></h5>
<?php endif; ?>
<?php foreach($details as $detail) :?>
    <div class="text_align">
        <div class="main">
            <div class="shop_top">
                <div class="container">
                    <div class="col-md-6">
                    </div>
                    <div class="edit_article">
                        <img class="imgarticle" width="400px" height="400px" src="<?= $detail['photo']; ?>">
                        <div class="login-title">
                            <br>
                            <h4 "class="title">Article Edit</h4>
                            <div id="loginbox" class="loginbox">
                                <form action="../index.php?action=edit_article&code=<?=$_GET['code']?>" method="post" name="edit" id="login-form" enctype="multipart/form-data">
                                    <fieldset class="input">
                                        <p id="login-form-username">
                                            <label for="marque">Marque</label>
                                            <input type="text" class="form-control" value="<?= $detail['marque']; ?>" id="marque" name="edit_article-marque" aria-describedby="marqueHelp" required>
                                        </p>
                                        <p id="login-form-username">
                                            <label for="model">Model</label>
                                            <input type="text" class="form-control" value="<?= $detail['model']; ?>" id="model" name="edit_article-model" aria-describedby="modelHelp" required>
                                        </p>
                                        <p id="login-form-username">
                                            <label for="price">Price</label><?php if (isset($error_message)){
                                                echo $error_message;
                                            }?>
                                            <input type="text" class="form-control" value="<?= $detail['price']; ?>" id="price" name="edit_article-price" aria-describedby="priceHelp" required>
                                        </p>
                                        <p id="login-form-username">
                                            <label for="description">Description</label>
                                            <input type="text" class="form-control" value="<?= $detail['description']; ?>" id="description" name="edit_article-description" aria-describedby="descriptionHelp" required>
                                        </p>
                                        <p id="login-form-username">
                                            <label for="grande_description">Grande Description</label>
                                            <input type="text" class="form-control" value="<?= $detail['description_grande']; ?>" id="grande_description" name="edit_article-grande_description" aria-describedby="grande_descriptionHelp" required>
                                        </p>


                                        <div class="bo4 of-hidden size15 m-b-10">
                                            <!--<input class="sizefull s-text7 p-l-22 p-r-22" type="file" name="add_article-photo" id="photo" style="display:none;"/>-->
                                            <label class="s-text7 p-l-22 p-r-22" for="photo" style="padding-left:20px;padding-top:12px;">Ajouter photo</label>
                                            <input class="sizefull s-text7 p-l-22 p-r-22" style="padding-top:12px;padding-left:20px" type="file" name="edit_article-photo" id="photo" required/>
                                        </div>

                                        <!--
                                        <p id="login-form-username">
                                            <label for="photo1">photo</label>
                                            <input type="text" class="form-control" value=" //$detail['photo']; " id="photo1" name="edit_article-photo" aria-describedby="photo1Help" required>
                                        </p>-->

                                        <input type="submit" value="Edit">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
<?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

<?php

    $content = ob_get_clean();
    require "gabarit.php";
