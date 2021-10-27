<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3KDSWEXGVS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3KDSWEXGVS');
</script>
</head>
<body>

<!-- desktop menu  hamburger --> 
     <div class="burger_desktop d-none d-md-block">
        <i class="fa fa-bars show" aria-hidden="true"></i>
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <aside>
        <div class="naw_2 d-flex justify-content-center flex-column">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation',
                    'container' => '',
                ));
            ?>
        </div>
    </aside>


<!-- mobile menu hamburger --> 
    <div>
        <div class="burger_mobile d-block d-md-none">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <i class="fa fa-angle-up off" aria-hidden="true"></i>
        </div>
        <div class="naw off">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation',
                    'container' => '',
                ));
            ?>   
        </div>
    </div>




