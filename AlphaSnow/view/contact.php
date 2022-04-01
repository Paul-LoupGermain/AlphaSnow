<?php

ob_start();
$title = "AlphaSnow . Contact";
?>
<div class="main">
    <div class="shop_top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="map">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2730.118854871473!2d6.498011115858474!3d46.82166054986135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478db876b925cce3%3A0xc43383adf22945c2!2sCPNV%2C%20Centre%20professionnel%20du%20Nord%20vaudois!5e0!3m2!1sfr!2sch!4v1648712092685!5m2!1sfr!2sch"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                style="color:#666;text-align:left;font-size:12px"></a></small></iframe>
                    </div>
                </div>
                <div class="col-md-5">
                    <p class="m_8">We also have a physical store. You can come if you want to repair your Snow, try on
                        items or ask for advice and help from our staff. We will be very happy to meet you there.</p>
                    <div class="address">
                        <p></p>
                        <p>Av. de la Gare 14, 1450 Sainte-Croix</p>
                        <p>SWISS</p>
                        <p>Phone:(+41) 79 320 47 29</p>
                        <p>Fax: (+41) 21 825 13 59</p>
                        <p>Email: <span>contact@alphasnow.ch</span></p>
                        <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 contact">
                    <form method="post" action="contact-post.html">
                        <div class="to">
                            <input type="text" class="text" value="Name" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Name';}">
                            <input type="text" class="text" value="Email" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Email';}">
                            <input type="text" class="text" value="Subject" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Subject';}">
                        </div>
                        <div class="text">
                            <textarea value="Message:" onfocus="this.value = '';"
                                      onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
                            <div class="form-submit">
                                <input name="submit" type="submit" id="submit" value="Submit"><br>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

$content = ob_get_clean();
require "gabarit.php";