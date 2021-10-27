
<footer>

    <div class="d-none d-xl-block" style="min-height:10vh; background-color:black">
    </div>

    <section id="kontakt">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 col-xl-4 p-5 text-white" style="background: black">
            <div class="d-flex flex-column align-items-center align-items-xl-start">
                    <div class="contact ">
                        <h1>
                            Skontaktuj się z Nami
                        </h1>
                    <div class="social_icons">
                        <ul class="d-flex justify-content-xl-start justify-content-center px-0 py-4 ">
                            <li>
                            <a href="<?php echo get_theme_mod('link_do_facebook'); ?>" class="social-color-facebook"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                            </li>
                            <li>
                            <a href="<?php echo get_theme_mod('link_do_instagram'); ?>" class="social-color-instagram"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <div class="social_phones ">
                        <div>
                            <a href="tel:<?php echo get_theme_mod('nr_kontaktowy_1'); ?>"><i class="fa fa-phone " aria-hidden="true"></i> <?php echo get_theme_mod('nr_kontaktowy_1'); ?></a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 d-none d-md-flex d-flex ">
            <img src="<?php echo get_theme_mod('image_footer'); ?>" style="min-height: 50vh; width:100%; object-fit: cover;" alt="">
        </div>
        <div class="col-md-6 col-xl-4 d-flex flex-column align-items-center justify-content-around" style="background-color:black">
                <h1 style="color:white; font-size: 2.5rem;"><?php echo get_theme_mod('text_footer'); ?></h1>
                <div class="footer_menu">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'footerMenuLocation',
                            'container' => ''
                        ));
                    ?>
                </div>
                <div class="d-flex flex-column align-items-center pt-4 pt-sm-0">
                    <span style="color:#a0b9bd">• © 2021 </span>
                    <span style="color:#a0b9bd">• All right reserved</span>
                </div>
               
        </div>
        
        </div>
        
    </section>
</footer>


<?php wp_footer(); ?>
</body>
</html>