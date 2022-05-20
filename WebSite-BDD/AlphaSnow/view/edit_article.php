<?php
/**
 * @file      edit_article.php
 * @brief     This view is designed to edit product
 * @author    Mathias Bourqui
 * @version   30-MAR-2022
 */

ob_start();
$title = "AlphaSnow - Gestion";
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
                        <img class="imgarticle" width="400px" height="400px" src="<?= $detail['photo1']; ?>">
                        <div class="login-title">
                            <br>
                            <h4 "class="title">Article Edit</h4>
                            <div id="loginbox" class="loginbox">
                                <form action="../index.php?action=edit_article&code=<?=$_GET['code']?>" method="post" name="edit" id="login-form">
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
                                            <label for="price">Price</label>
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
                                        <p id="login-form-username">
                                            <label for="photo1">photo1</label>
                                            <input type="text" class="form-control" value="<?= $detail['photo']; ?>" id="photo1" name="edit_article-photo" aria-describedby="photo1Help" required>
                                        </p>

                                        <input type="submit" value="Edit">
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
