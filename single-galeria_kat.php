<?php



?>

<?= get_header();
$template = new Theme();
?>
<section>
    <header>
        <section>
        <div class="container-fluid d-flex justify-content-center d-flex align-items-center contain_about_banner" style=" background-position: top; background-size: cover; background-image:url(<?php $frontBanner_image = get_field('banner'); echo $frontBanner_image['url'] ?>); ">
            <div class="row text-light content_about_banner " >
              <div class="col p-5 d-flex justify-content-center align-items-center">
                <h1> Jesteś w <span style="font-size:2rem; font-weight:800;"> portfolio </span></h1>
              </div>
            </div>
        </div>
        </section>
    </header>
</section>

<section>
            <div class="container-fluid intro_portfolio d-flex align-items-center flex-column justify-content-center">
              <div class="row w-75 mx-auto">
                <div class="col ">
                  <h1 style="text-align:center;"><span style="font-size:2.6rem; font-weight:800;">Zdjęcia</span><br><?php the_title(); ?><br></h1>
                  <p><?php the_field('opis');?></p>
                  <p></p>
                </div>
              </div>

               <a href="https://olszewskifotografia.pl/galeria_kat/" class="btn-fotograf_2">Powrót do kategorii</a>

            </div>
</section>

<section>
    <?php $images = get_field('galeria_kategorie'); ?>

      <?php if($images):?>
        <div class="galeria">
          <div class="row d-flex justify-content-center " style="background:#a0b9bd;">

            <?php foreach($images as $image): ?>

              <div class="col-sm-6 col-xl-4 col-xxl-3 " >

                <a href="<?php echo $image['sizes']['large']; ?>" title="<?php echo $image['caption']; ?>">
                   <img src="<?php echo $image['url']; ?>">
                </a>
                 
              </div>

            <?php endforeach; ?>
            

          </div>

        </div>

      <?php endif; ?>
</section>







<?php
get_footer(); ?>