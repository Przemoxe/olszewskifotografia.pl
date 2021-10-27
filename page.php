<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>

<section>
    <header>
        <section>
        <div class="container-fluid content_banner d-flex justify-content-center d-flex align-items-center " style="url(<?php $pageBanner_image = get_field('page_banner_background_image'); echo $pageBanner_image['url'] ?>); ">
            <div class="row  w-75 contain_banner  text-light d-flex justify-content-end" >
              <div class="col-sm-9 col-md-7 	col-lg-5 col-xxl-4 text-end p-5 ">
                  <p ><?php the_field('page_banner_subtitle') ?></p>
                  <a href="" class="btn-fotograf ">Czytaj więcej</a>
              </div>
            </div>
        </div>
        </section>
    </header>
</section>

<section>
    <div class="container-fluid front_about">
      <div class="row">
        <div class="col-md-4 p-5 m" style=" background-color:black;">
            <div class="d-flex justify-content-center">
              <div class=" bg-success rounded-circle" style="height:200px; width:200px; border-radius:50%; overflow:hidden;">
                 <!-- <img src="http://fotografia.test/wp-content/uploads/2021/10/pexels-engin-akyurt-1559286-scaled.jpg" style="height:100%;"> -->
                 <img src="http://fotografia.test/wp-content/uploads/2021/10/pexels-photo-5207249.jpeg" style="height: 350px; width:100%; object-fit: cover; overflow:hidden;" alt="">
              </div>
            </div>
            <div class="d-flex justify-content-center text-light pt-5">
              <h1>Mark Zacker</h1>
            </div>
            <div class="d-flex w-75 justify-content-center text-light p-1">
              <p>fotograf</p>
            </div>
        </div>
        <div class="col-md-8 d-flex flex-column ">
          <div class="px-4 py-3 d-flex align-content-center flex-wrap py-5" style="height:50%;">
            <h1 >O mnie</h1>
            <p>Podcasting zarządzania zmianami operacyjnymi w przepływach pracy w celu ustalenia struktury. Bezproblemowe przełączanie kluczowych wskaźników wydajności w tryb offline w celu maksymalizacji wydłużenia Miej oko na piłkę podczas głębokiego nurkowania w mentalności start-upów, aby uzyskać konwergencję w integracji międzyplatformowej. Obiektywnie wprowadzaj innowacyjne produkty wytwarzane z większą mocą w przypadku platform równoległych. Holistycznie przeważaj rozszerzalne procedury testowe dla niezawodnych łańcuchów dostaw. Zdecydowanie łącz najlepsze usługi internetowe z najnowocześniejszymi produktami.</p>
          </div>
          <div class="px-4 py-3 d-flex align-content-center flex-wrap py-5"" style="background-color: #a0b9bd;height:50%">
             <h1 style="color:white;">Co robię</h1>
             <p style="color:white;">Podcasting zarządzania zmianami operacyjnymi w przepływach pracy w celu ustalenia struktury. Bezproblemowe przełączanie kluczowych wskaźników wydajności w tryb offline w celu maksymalizacji wydłużenia Miej oko na piłkę podczas głębokiego nurkowania w mentalności start-upów, aby uzyskać konwergencję w integracji międzyplatformowej. Obiektywnie wprowadzaj innowacyjne produkty wytwarzane z większą mocą w przypadku platform równoległych. Holistycznie przeważaj rozszerzalne procedury testowe dla niezawodnych łańcuchów dostaw. Zdecydowanie łącz najlepsze usługi internetowe z najnowocześniejszymi produktami.</p>
          </div>
        </div>

      </div>
    </div>
</section>



<section>



<div class="fixed-bg"></div>


  <?php }

  get_footer();

?>
