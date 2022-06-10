<?php

    /**
     * @file      add_article.php
     * @brief     This view is designed to add product
     * @author    Created by Paul-Loup GERMAIN
     * @version   09-JUIN-2022
     */

    ob_start();
    $title = "AlphaSnow - New article";
?>

    <div class="text_align">
        <div class="main">
            <div class="shop_top">
                <div class="container">
                    <div class="col-md-6">
                    </div>
                    <div class="edit_article">

                        <div class="login-title">
                            <br>
                            <h4 class="title">Add Article</h4>
                            <div id="loginbox" class="loginbox">
                                <form action="../index.php?action=add_article" method="post" name="add" id="login-form" enctype="multipart/form-data">
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
                                            <label for="price">Price</label><?php if (isset($error_message)){
                                                echo $error_message;
                                            }?>
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

                                        <!--<p id="login-form-username">
                                            <label for="photo1">Photo</label>
                                            <input type="text" class="form-control"  id="photo1" name="add_article-photo" aria-describedby="photo1Help" required>
                                        </p>-->

                                            <div class="bo4 of-hidden size15 m-b-10"><?php if (isset($articleErrorMessage)){
                                                    echo $articleErrorMessage;
                                                }?>
                                                <!--<input class="sizefull s-text7 p-l-22 p-r-22" type="file" name="add_article-photo" id="photo" style="display:none;"/>-->
                                                <label class="s-text7 p-l-22 p-r-22" for="photo" style="padding-left:20px;padding-top:12px;">Ajouter photo</label>
                                                <input class="sizefull s-text7 p-l-22 p-r-22" style="padding-top:12px;padding-left:20px" type="file" name="add_article-photo" id="photo" required/>
                                            </div>
                                        </p>

                                        <input type="submit" value="Add">
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
