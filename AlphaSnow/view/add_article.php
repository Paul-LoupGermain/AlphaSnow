<?php
/**
 * @file      add_article.php
 * @brief     This view is designed to add product
 * @author    Mathias Bourqui
 * @version   30-MAR-2022
 */

ob_start();
$title = "AlphaSnow - add_article";
?>
<?php if (isset($article_error_message)) : ?>
    <h5><span style="color: #ff0000"><?= $article_error_message ?></span></h5>
<?php endif; ?>
    <div class="text_align">
        <div class="main">
            <div class="shop_top">
                <div class="container">
                    <div class="col-md-6">
                    </div>
                    <div class="edit_article">
                        <img class="imgarticle" width="400px" height="400px" src="content/images/noimage.png">
                        <div class="login-title">
                            <br>
                            <h4 class="title">Add Article</h4>
                            <div id="loginbox" class="loginbox">
                                <form action="../index.php?action=add_article" method="post" name="add" id="login-form">
                                    <fieldset class="input">
                                        <p id="login-form-username">
                                            <label for="marque">Marque</label>
                                            <input type="text" class="form-control" id="marque" name="add_article-marque" aria-describedby="marqueHelp" placeholder="Marque" required>
                                        </p>
                                        <p id="login-form-username">
                                            <label for="model">Model</label>
                                            <input type="text" class="form-control" id="model" name="add_article-model" aria-describedby="modelHelp" placeholder="Model" required>
                                        </p>
                                        <p id="login-form-username">
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control" id="price" name="add_article-price" aria-describedby="priceHelp" placeholder="Price" required>
                                        </p>
                                        <p id="login-form-username">
                                            <label for="description">Description</label>
                                            <input type="text" class="form-control" id="description" name="add_article-description" aria-describedby="descriptionHelp" placeholder="Description" required>
                                        </p>
                                        <p id="login-form-username">
                                            <label for="grande_description">Grande Description</label>
                                            <input type="text" class="form-control" id="grande_description" name="add_article-grande_description" aria-describedby="grande_descriptionHelp" placeholder="Description" required>
                                        </p>
                                        <p id="login-form-username">
                                            <label for="photo1">photo1</label>
                                            <input type="text" class="form-control" id="photo1" name="add_article-photo1" aria-describedby="photo1Help" placeholder="view/content/img/snow/" required>
                                        </p>

                                        <input type="submit" value="ADD">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
