<?php


/**
 * @file      gestion.php
 * @brief     This view is designed to display the articles managment page
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

ob_start();
$title = "AlphaSnow - Gestion";
?>


    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">
                            <th class="column-1"></th>
                            <th class="column-2">Produit</th>
                            <th class="column-3">Prix</th>
                            <th class="column-4 p-l-70">Quantité</th>
                            <th class="column-5"><a href="#" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    Ajouter
                                </a></th>
                        </tr>

                        <?php if(isset($article_error_message)) : ?>
                            <h5><span style="color: #ff0000"><?=$article_error_message?></span></h5>
                        <?php else : ?>
                            <?php foreach($articles as $article) :?>
                                <tr class="table-row">
                                    <td class="column-1">
                                        <div class="cart-img-product b-rad-4 o-f-hidden">
                                            <img src="<?=$article['photo1']?>" alt="IMG-PRODUCT">
                                        </div>
                                    </td>
                                    <td class="column-2"><?=$article['marque']; ?> <?=$article['model']; ?></td>
                                    <td class="column-3"><?='CHF ' . $article['price'] . '.-' ; ?></td>
                                    <td class="column-4">
                                        <div class="flex-w bo5 of-hidden w-size17">
                                            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                            </button>

                                            <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="">

                                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="column-5"><a href="#" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                            <img src="view/content/images/icons/bin2.png" alt="delete">
                                        </a>
                                        <br>
                                        <a href="#" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                            <img src="view/content/images/icons/pencil2.png" alt="delete">
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </table>
                </div>
            </div>



        </div>
    </section>

<?php
$content = ob_get_clean();
require "gabarit.php";

