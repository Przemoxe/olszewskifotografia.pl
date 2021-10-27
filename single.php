<?php

/* Template Name: Contact */

?>

<?= get_header();
$template = new Theme();
?>
single
<section>
    <header>
        <section>
        <div class="container-fluid d-flex justify-content-center d-flex align-items-center contain_about_banner" style=" background-image:url(<?php $frontBanner_image = get_field('banner'); echo $frontBanner_image['url'] ?>); ">
            <div class="row text-light content_about_banner " >
              <div class="col p-5 d-flex justify-content-center align-items-center">
                <h1> Masz <span style="font-size:2rem; font-weight:800;"> pytanie? </span></h1>
              </div>
            </div>
        </div>
        </section>
    </header>
</section>

<section>
            <div class="container-fluid d-flex justify-content-center flex-wrap contain_contact_1" style=" ">
                <div class="row">
                 <div class="col-xl-6 px-2 py-4 p-md-5 d-flex align-content-center flex-wrap">
                        <h5><?php the_field("naglowek1") ?></h5>
                        <h2 ><?php the_field("naglowek2") ?></h2>
                        <p style="font-weight: 500;"><?php the_field("paragraf1") ?></p>
                    </div>
                    <div class="col-xl-6">
                        <img src="<?php $frontBanner_image = get_field('foto_kontakt'); echo $frontBanner_image['url'] ?>" style=" width:100%; object-fit: cover;  " alt="">  
                    </div>

                </div>
            </div>
            <div class="container-fluid contain_contact_2 d-flex justify-content-center align-items-center " style="background-color:#a0b9bd; padding-bottom:100px; padding-top:100px;">
                <div class="row d-flex justify-content-center ">
                    <div class="col-md-6 col-lg-5 px-2 px-sm-3 px-md-3">
                        <h2 ><?php the_field("naglowek3") ?></h2>
                        <p><?php the_field("paragraf2") ?></p>
                    </div>
                    <div class="col-md-6 col-lg-5 px-2 px-sm-3 px-md-3 pt-5 pt-md-1 d-flex justify-content-center align-items-center ">
                      <div>
                        <h2>Skontaktuj się z nami</h2>
                            <ul>
                                <li class="fa fa-map-marker fa"> <?php the_field("adres") ?></li><br>
                                <li class="fa fa-envelope fa"> <?php the_field("email") ?></li><br>
                            </ul>
                            <h2>Podążaj za nami</h2>
                            <div class="social_icons_contact" >
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
                    </div>
                </div>
            </div>
</section>









<?php
get_footer(); ?>