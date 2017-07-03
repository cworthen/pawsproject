
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PAWS Project</title>
        	<?php wp_head();?>

          <style type="text/css">
          .header-img{
            background:url('<?php header_image(); ?>') no-repeat center center;
            background-size: cover;
            height:400px;
            color: white;
          }
</style>
  </head>
  <body>

<!--nav bar -->

    <nav class="navbar navbar-light bg-faded">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-xs-12">
   <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
  <div class="collapse navbar-toggleable-md" id="navbarResponsive">


    <!--?php wp_nav_menu(array( 'theme_location' => 'primary', 'container-class' =>'fullmenu' )); ?-->

    <?php wp_nav_menu(array(
    'theme_location' => 'primary',
    'menu_class' =>'nav-menu'

  )); ?>

</div>
<div>
</div>
<!--closes navbar -->
</nav>



<!--top section -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-xs-12 header-img">
          <div class="text-center">
          <h1>The Paws Project</h1>
          <h3>Helping our fur friends find forever homes</h3>
        <button type="button" class="btn btn-secondary">
        <i class="fa fa-paw" aria-hidden="true"></i> Get Started!</button>
      </div>
        </div>

      </div>

      <!--closes top section -->
    </div>
