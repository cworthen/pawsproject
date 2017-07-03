<?php get_header(); ?>


<div class="container-fluid">
  <div class="row icons">
    <div class=" offset-md-2 col-md-2 col-sm-3 col-xs-12">

<i class="fa fa-paw" aria-hidden="true"></i>
<p>Adoption</p>
</div>

    <div class="col-md-2 col-sm-3 col-xs-12">
<i class="fa fa-user-md" aria-hidden="true"></i>
<p>Consultation</p>
</div>

    <div class="col-md-2 col-sm-3 col-xs-12">
<i class="fa fa-medkit" aria-hidden="true"></i>
<p>Health</p>
</div>
    <div class="col-md-2 col-sm-3 col-xs-12">
<i class="fa fa-home" aria-hidden="true"></i>
<p>Rescue</p>

</div>
  </div>
</div>

<div class="container-fluid grey">
    <div class="row paragraph">
      <div class="offset-lg-1 col-lg-10 col-xs-12">
        <!--subtitle-->
        	<h3><?php the_field('main_title');?></h3>

           			<?php
           				if ( have_posts() ) : while ( have_posts() ) : the_post();

           				 the_content();

           				endwhile; endif;
           			?>
<button type="button" id="about-btn" class="btn btn-secondary">Learn More</button>
                </div>
                </div>
              </div>

<!--flip form and image-->
<div class="container-fluid">
<div class="row second">
       <div class=" offset-lg-1 col-lg-5 col-md-6 gutter col-xs-12">
          <div class="overlay">
              <img class="photos" src="<?php the_field('image1');?>"/>
            <div class="img-text">

        <h3><?php the_field('image_title'); ?></h3>
        <p>Learn more</p>
        <p class="moreinfo"><?php the_field('image_block_text'); ?></p>
      </div>

    </div>
   </div>


<div class="col-lg-5 col-md-6 col-xs-12">

  <?php  if(get_field('donate_info_box'))
  {
    echo '<div id="donate">';
    echo '<h4>' . get_field('info_title') . '</h4>';
    the_field('donate_info_box');
    echo '<button type="button" class="btn btn-secondary" id="donatebtn">Give Today!</button>';
    echo '</div>';
  }
  ?>

</div>
</div>


<!--closes container --->
</div>

<div class="container-fluid">
<div class="row newsletter">
  <div class="offset-lg-3 col-lg-6 offset-sm-1 col-sm-10 col-xs-12">
<h3>Sign up for our newsletter</h3>
<p>To get the lastest news and updates</p>


<div class="input-group">
  <input type="text" class="form-control" placeholder="Enter email here" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">Submit</span>
</div>


     </div>
   </div>



<!--closes container -->
</div>

      <?php get_footer(); ?>
