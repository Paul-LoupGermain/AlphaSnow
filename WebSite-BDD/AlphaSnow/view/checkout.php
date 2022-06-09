<?php

    /**
     * @file      checkout.php
     * @brief     This view is designed to check product
     * @author    Created by Paul-Loup GERMAIN
     * @version   09-JUIN-2022
     */

    ob_start();
    $title = "AlphaSnow - Checkout";
?>

<div class="main">
    <div class="shop_top">
        <div class="container">
            <h4 class="title">Shopping cart is empty</h4>
            <p class="cart">You have no items in your shopping cart.<br>Click<a href="../index.php?action=shop"> here</a> to continue shopping</p>
        </div>
    </div>
</div>
<?php

    $content = ob_get_clean();
    require "gabarit.php";