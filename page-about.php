<?php get_header(); ?>

        <div class="container-fluid">
            <div class="row paragraph">
              <div class="col-lg-8 col-md-7 col-xs-12">
                <h3><?php the_field('main_title');?></h3>
								<?php
									if ( have_posts() ) : while ( have_posts() ) : the_post();

									 the_content();

								 endwhile;

					 else :

						 echo '<p>No content found</p>';

					 endif;
								?>

            </div>

            <div class=" col-lg-4 col-md-5 col-xs-12">
										<h4 id="caption"><?php the_field('caption');?></h4>
									  <img class="photos" id="adoptme" src="<?php the_field('sidebar_image');?>"/>
              </div>

            </div>
        </div>

        <div class="container-fluid middle">
          <div class="row">
            <div class="col-md-6">
						<h3><?php the_field('heading');?></h3>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-3">
							  <img class="photos" src="<?php bloginfo('template_url'); ?>/css/images/cat.jpg">
								<h4><?php the_field('subheading1');?></h4>
								<p><?php the_field('subtext1');?></p>
            </div>

            <div class="col-md-3">
							  <img class="photos" src="<?php bloginfo('template_url'); ?>/css/images/puppy.jpg">
								<h4><?php the_field('subheading2');?></h4>
               	<p><?php the_field('subtext2');?></p>
            </div>
            <div class="col-md-3">

                  <img class="photos" src="<?php bloginfo('template_url'); ?>/css/images/fosterhome.jpg">
									<h4><?php the_field('subheading3');?></h4>
                  <p><?php the_field('subtext3');?></p>
            </div>

            <div class="col-md-3">
              <img class="photos" src="<?php bloginfo('template_url'); ?>/css/images/bird.jpg">
									<h4><?php the_field('subheading4');?></h4>
                  <p><?php the_field('subtext4');?></p>
            </div>


            </div>
          </div>



<?php get_footer(); ?>
