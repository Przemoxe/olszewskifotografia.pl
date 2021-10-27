<?= get_header();
$template = new Theme();
?>
<section>
    <header>
        <section >
        <div class="container-fluid content_banner d-flex justify-content-center d-flex align-items-center d-none d-sm-block" style="background-size: cover!important; background-repeat: no-repeat!important; background:url(<?php $frontBanner_image = get_field('banner_image'); echo $frontBanner_image['url'] ?>); ">
            <div class="row  contain_banner  text-light d-flex justify-content-end pt-4" >
              <div class="col-sm-9 col-md-7 	col-lg-5 col-xl-4 text-end px-sm-5 pt-5 px-4">
                  <p><?php the_field('banner_text'); ?></p>
                  <!-- <a href="#omnie" class="btn-fotograf ">Czytaj więcej</a> -->
              </div>
            </div>
        </div>
        <div class="container-fluid content_banner d-flex justify-content-center d-flex align-items-center d-block d-sm-none" style="background-size: cover!important; background-repeat: no-repeat!important; background:linear-gradient(0deg,rgba(0,0,0,0.1),rgba(0,0,0,0.35)),url(<?php $frontBanner_image = get_field('banner_image'); echo $frontBanner_image['url'] ?>); ">
            <div class="row  contain_banner  text-light d-flex justify-content-end pt-4 " >
              <div class="col-sm-9 col-md-7 	col-lg-5 col-xxl-5 text-end px-sm-5 pt-5 px-4">
                  <p><?php the_field('banner_text'); ?></p>
                  <!-- <a href="#omnie" class="btn-fotograf ">Czytaj więcej</a> -->
              </div>
            </div>
        </div>
        </section>
    </header>
</section>

<section id="omnie">
    <div class="container-fluid front_about">
      <div class="row">
        <div class="col-md-4 p-5 m" style=" background-color:black;">
            <div class="d-flex justify-content-center">
              <div class=" bg-success rounded-circle" style="height:200px; width:200px; border-radius:50%; overflow:hidden;">
                 <!-- <img src="http://fotografia.test/wp-content/uploads/2021/10/pexels-engin-akyurt-1559286-scaled.jpg" style="height:100%;"> -->
                 <img src="<?php $frontBanner_image = get_field('avatar'); echo $frontBanner_image['url'] ?>" style="height: 250px; width:100%; object-fit: cover; overflow:hidden;" alt="">
              </div>
            </div>
            <div class="d-flex justify-content-center text-light pt-5">
              <h1><?php the_field('autor'); ?></h1>
            </div>
            <div class="d-flex w-75 justify-content-center text-light p-1">
              <p>fotograf</p>
            </div>
        </div>
        <div class="col-md-8 d-flex flex-column ">
          <div class="px-4 py-3 d-flex align-content-center flex-wrap py-5" style="height:50%;">
            <h1 >O mnie</h1>
            <p><?php the_field('o_mnie') ?></p>
          </div>
          <div class="px-4 py-3 d-flex align-content-center flex-wrap py-5" style="background-color: #a0b9bd;height:50%">
             <h1 style="color:white;">Co robię</h1>
             <p style="color:white;"><?php the_field('co_robie') ?></p>
          </div>
        </div>

      </div>
    </div>
</section>
<section>
    <?php $images = get_field('galeria'); ?>

      <?php if($images):?>
        <div class="galeria_front">
          <div class="row">

            <?php foreach($images as $image): ?>

              <div class=" col-md-4 col-sm-6">

                <a href="<?php echo $image['sizes']['large']; ?>" title="<?php echo $image['caption']; ?>">
                   <img src="<?php echo $image['url']; ?> " style="z-index:0;">
                </a>
                 
              </div>

            <?php endforeach; ?>

          </div>

        </div>

      <?php endif; ?>
</section>
<section id="oferta">
            <div class="container-fluid corobie py-5">
              <div class="row w-75 m-auto py-4">
                <div class="col py-4 d-flex justify-content-center">
                  <h1><?php the_field('naglowek_oferta'); ?></h1>
                </div>
              </div>
              <div class="row m-auto py-4">
                <div class="col-md-6 d-flex justify-content-center  p-md-4">
                  <ul>
                    <li><?php the_field('realizacja1'); ?></li>
                    <li><?php the_field('realizacja2'); ?></li>
                  </ul>
                </div>
                <div class="col-md-6 d-flex justify-content-center  p-md-4">
                  <ul>
                    <li><?php the_field('realizacja3'); ?></li>
                    <li><?php the_field('realizacja4'); ?></li>
                  </ul>
                </div>
              </div>
             <div class="col12 d-flex justify-content-center">
               <a href="https://olszewskifotografia.pl/galeria_kat/" class="btn-fotograf_2">Nasze Realizacje</a>
             </div>
               

            </div>
</section>


<section>
  <div class="container-fluid corobie" style=" background-color:#a0b9bd;">
    <div class="row">
      <div class="col-sm-5 col-md-3" >
        <img src="<?php $frontBanner_image = get_field('nowoczesny_styl_fot1'); echo $frontBanner_image['url'] ?>" style="width:100%; height:700px; object-fit:cover; object-position: 50% 50%;" alt="">
      </div>
      <div class="col-sm-7 col-md-5 " >
        <img src="<?php $frontBanner_image = get_field('nowoczesny_styl_fot2'); echo $frontBanner_image['url'] ?>" style="width:100%; height:700px; object-fit:cover; object-position: 50% 50%;" alt="">
      </div>
      <div class="col-md-4 mt-auto mb-auto p-4">
         <h2><span style=" font-weight:800;">Nowoczesny </span> Styl</h2>
          <img src="<?php $frontBanner_image = get_field('nowoczesny_styl_fot3'); echo $frontBanner_image['url'] ?>" style="height: 350px; width:100%; object-fit: cover; object-position: 50% 0%;">
         <p><?php the_field('ns_paragraf') ?></p>
      </div>
    </div>
  </div>
</section>
<section>

<section>
  <!-- desktop -->
  <div class="container-fluid d-flex justify-content-center studiofot px-sm-5 d-none d-sm-flex" style="width:100%; height:800px; background-size: cover!important; background-repeat: no-repeat!important; background-image:url(<?php $frontBanner_image = get_field('tlo_witamy'); echo $frontBanner_image['url'] ?>); ">
    <div class="row ">
      <div class="col-sm-9 col-md-6 col-xl-4 px-4 py-4" style="height:65%; background-color:#a0b9bd; ;">
        <h1><span style="font-size:2.6rem; font-weight:800;">Witamy Studio </span> Fotograficzne</h1>
        <p><?php the_field('witamy_paragraf') ?></p>
        <a href="#kontakt" class="btn-fotograf">Złap Kontakt</a>
      </div>
    </div>
  </div>
  <!-- mobile -->
  <div class="container-fluid d-flex justify-content-center studiofot px-sm-5 d-sm-none" style="width:100%;">
    <div class="row ">
      <div class="col-sm-9 col-md-6 col-xl-4 px-4 py-4" style=" background-color:#a0b9bd; ;">
        <h1><span style="font-size:2.6rem; font-weight:800;">Witamy Studio </span> Fotograficzne</h1>
        <p><?php the_field('witamy_paragraf') ?></p>
        <a href="#kontakt" class="btn-fotograf">Złap Kontakt</a>
      </div>
    </div>
  </div>

</section>


<div class="fixed-bg" style="background-image: url(<?php $frontBanner_image = get_field('przewijane_tlo_nad_stopka'); echo $frontBanner_image['url'] ?>);"></div>




<?php
get_footer(); ?>