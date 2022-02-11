<?php

    /**
     * @file      register.php
     * @brief     This file is used to register.
     * @author    Created by Mathias BOURQUI / Arlindo TAVARES-VARELA
     * @update    Update Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    ob_start();
    $title = "AlphaSnow . Register";
?>

<div class="main">
    <div class="shop_top">
        <div class="container">
            <form method="post" name="formRegister" action="../index.php?action=register">
                <div class="register-top-grid">
                    <h3>PERSONAL INFORMATION</h3>
                    <div class="form-group">
                        <label for="firstName">First Name *</label>
                        <input type="text" class="form-control" id="firstName" name="inputFirstName" aria-describedby="firstNameHelp" placeholder="Enter first name" required>
                        <small id="firstNameHelp" class="form-text text-muted">First Name will not be shared.</small>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name *</label>
                        <input type="text" class="form-control" id="lastName" name="inputLastName" aria-describedby="lastNameHelp" placeholder="Enter last name" required>
                        <small id="lastNameHelp" class="form-text text-muted">Last Name will not be shared.</small>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address *</label>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmailAddress" aria-describedby="emailHelp" placeholder="firstname@domain.ch" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="clear"> </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkNewsLetter" name="inputNewsLetter" required>
                        <label class="form-check-label" for="checkNewsLetter">Newsletter wanted</label>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="clear"> </div>
                <div class="register-bottom-grid">
                    <h3>LOGIN INFORMATION</h3>
                    <div class="form-group">
                        <label for="inputPassword">Password *</label>
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword2">Password *</label>
                        <input type="password" class="form-control" id="inputPassword2" name="inputPassword2" placeholder="Password" required>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="clear"> </div>
                <input type="submit" value="submit">
            </form>
        </div>
    </div>
</div>

<?php

    $content = ob_get_clean();
    require "gabarit.php";