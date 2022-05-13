<?php

    /**
     * @file      login.php
     * @brief     This file is used to lodge or redirect to register.
     * @author    Created by Mathias BOURQUI / Arlindo TAVARES-VARELA
     * @update    Update Paul-Loup GERMAIN
     * @version   13-MAI-2022
     */

    ob_start();
    $title = "AlphaSnow - login";
?>
    <section>
        <img src="content/images/home_title.jpg" class="img-responsive"  alt=""/>
        <h2 class="home_title"><br>
            Login
        </h2>
    </section>
    <div class="main">
        <div class="shop_top">
            <div class="container">
                <div class="col-md-6">
                    <div class="login-page">
                        <h4 class="title">New Customers</h4>
                        <p>Welcome to AlphaSnow. We are delighted to welcome you to our store.<br>If you don't have an
                            account with alphaSnow, you can quickly create one by clicking on the button below.<br>We
                            hope you will find your perfect match in our store.</p>
                        <div class="button1">
                            <a href="../index.php?action=register"><input type="submit" name="Submit"
                                                                          value="Create an Account"></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login-title">
                        <h4 class="title">Registered Customers</h4>
                        <div id="loginbox" class="loginbox">
                            <form action="../index.php?action=login" method="post" name="login" id="login-form">
                                <fieldset class="input">
                                    <p id="login-form-username">
                                        <label for="input_email">Email</label>
                                        <input id="input_email" type="text" name="input_email" class="inputbox"
                                               size="18" autocomplete="off">
                                    </p>
                                    <p id="login-form-password">
                                        <label for="input_password">Password</label>
                                        <input id="input_password" type="password" name="input_password"
                                               class="inputbox" size="18" autocomplete="off">
                                    </p>
                                    <div class="remember">
                                        <p id="login-form-remember">
                                            <label for="modlgn_remember"><a href="index.php?action=contact">Forget Your
                                                    Password ? </a></label>
                                        </p>
                                        <input type="submit" name="Submit" class="button" value="Login">
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