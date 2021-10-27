<?php

/* Template Name: About-me */

?>

<?= get_header();
$template = new Theme();
?>

<section>
    <header>
        <section>
        <div class="container-fluid d-flex justify-content-center d-flex align-items-center contain_about_banner" style="background-position: center;  background-image:url(<?php $frontBanner_image = get_field('banner'); echo $frontBanner_image['url'] ?>); ">
            <div class="row text-light content_about_banner " >
              <div class="col p-5 d-flex justify-content-center align-items-center">
                <h1> poznaj <span style="font-size:2rem; font-weight:800;"> mnię </span></h1>
              </div>
            </div>
        </div>
        </section>
    </header>
</section>

<section>
            <div class="container-fluid d-flex justify-content-center flex-wrap" style="padding-top:10px;background-color:#a0b9bd">
              <div class="row px-md-5 px-2 pt-5 d-flex justify-content-center flex-wrap">
                <div class="col-12 col-md-6 col-lg-5 px-2">
                  <h1 style="color:white;font-size: 1.875rem"><?php the_field('.autor') ?><br></h1>
                  <p style="font-size: 4.5rem;line-height:1.3;"><?php the_field('naglowek1') ?></p>
                </div>
                <div class="col-12 col-md-6 col-lg-5 px-md-5 px-2 d-flex align-items-center">
                  <p style="font-weight:500;font-size:1rem;"><?php the_field('paragraf1') ?></p>
                </div>
              </div>
            </div>
            <div class="containet-fluid d-flex justify-content-center flex-wrap px-lg-5" style="background-color:#a0b9bd">
              <div class="row pt-5 d-flex  justify-content-between  flex-wrap">
                <div class="col-md-6 col-xl-3 pb-5 px-2 px-md-5 d-flex align-items-center flex-wrap">
                  <div>
                    <h1 style="color:white;font-weight: 400;font-size: 1.25rem;"><?php the_field('naglowek2') ?></h1>
                    <p style="font-weight: 400;font-size: 2.25rem;line-height: 1.1;"><?php the_field('paragraf2') ?></p>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4 px-md-5">
                  <img src="<?php $frontBanner_image = get_field('foto_omnie'); echo $frontBanner_image['url'] ?>" style=" width:100%; object-fit: cover;  ">
                </div>
                <div class=" col-md-12 col-xl-4 px-md-5 px-3 py-5 d-flex align-items-center flex-wrap">
                  <p style="font-size:1.1rem;font-weight:500;"><?php the_field('paragraf3') ?></p>
                </div>
              </div>
            </div>
</section>









<?php
get_footer(); ?>