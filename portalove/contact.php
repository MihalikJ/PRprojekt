<?php
include_once "config.php";
?>

<li>
    <div class="cd-full-width">
        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="5">
            <div class="tm-contact-page">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tm-flex tm-contact-container">
                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                <h2 class="tm-contact-info">Feel free to say Hi!</h2>
                                <p class="tm-text">Nulla sed urna at ligula maximus blandit. Mauris nisi ligula, ultricies ac diam id, hendrerit tincidunt ipsum. Maecenas non massa justo.</p>

                                <!-- contact form -->
                                <form action="index.php" method="post" class="tm-contact-form">

                                    <div class="form-group">
                                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" id="contact_surname" name="contact_surname" class="form-control" placeholder="Surname"  required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" id="contact_username" name="contact_username" class="form-control" placeholder="Username"  required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" id="contact_pw" name="contact_pw" class="form-control" placeholder="Password"  required/>
                                    </div>

                                    <button type="submit" id="but_register" name="but_register" class="pull-xs-right tm-submit-btn">Register</button>

                                </form>
                            </div>

                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                <!--  <h2 class="tm-contact-info">4466 Old New St 28290, SF, California</h2>
                                 google map goes here
                                <div id="google-map"></div>-->

                                <form action="" method="post" class="tm-contact-form">

                                <div class="form-group">
                                    <input type="text" id="contact_uname" name="contact_uname" class="form-control" placeholder="Username"  required/>
                                </div>

                                <div class="form-group">
                                    <input type="password" id="contact_psw" name="contact_psw" class="form-control" placeholder="Password"  required/>
                                </div>

                                <button type="submit" id="but_login" name="but_login" class="pull-xs-right tm-submit-btn">Login</button>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div> <!-- .cd-full-width -->
</li>