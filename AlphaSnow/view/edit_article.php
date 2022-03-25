<?php
/**
 * @file      edit.php
 * @brief     This view is designed to display the articles managment page
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

ob_start();
$title = "AlphaSnow - Gestion";
?>

<?php if (isset($article_error_message)) : ?>
    <h5><span style="color: #ff0000"><?= $article_error_message ?></span></h5>
<?php endif; ?>
    <div class="main">
        <div class="shop_top">
            <div class="container">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="login-title">
                        <h4 "class="title">Article Edit</h4>
                        <div id="loginbox" class="loginbox">
                            <form action="../index.php?action=login" method="post" name="login" id="login-form">
                                <fieldset class="input">
                                    <p id="login-form-username">
                                        <label for="input_email">Marque</label>
                                        <input value="<?= $detail['marque']; ?>" type="text"
                                               name="login_email" class="inputbox" size="18" autocomplete="off">
                                    </p>
                                    <p id="login-form-password">
                                        <label for="input_password">Model</label>
                                        <input value="<?= $detail['model']; ?>" type="text" name="login_password"
                                        class="inputbox" size="18" autocomplete="off">
                                    </p>
                                    <p>
                                        <label for="input_password">Price</label>
                                        <input value="<?= $detail['price']; ?>" type="text" name="login_password"
                                               class="inputbox" size="18" autocomplete="off">
                                    </p>
                                    <p>
                                        <label for="input_password">Description</label>
                                        <input value="<?= $detail['description']; ?>" type="text" name="login_password"
                                               class="inputbox" size="18" autocomplete="off">
                                    </p>
                                    <p>
                                        <label for="input_password">Grande Description</label>
                                        <textarea value="<?= $detail['description_grande']; ?>">
                                    </p>
                                    <div class="remember">
                                        <input type="submit" name="Submit" class="button" value="Edit">
                                        <div class="clear"></div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";
