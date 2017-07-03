
<?php get_header(); ?>
<!--image-grid-->
<div class="container-fluid">
 <div class="row">
   <div class="offset-md-1 col-md-6 col-sm-12">
   <?php
      			if ( have_posts() ) : while ( have_posts() ) : the_post();

      				get_template_part( 'content', get_post_format() );

      			endwhile; ?>
            <nav>
    	<ul class="pager">
    		<li><?php next_posts_link( 'Previous' ); ?></li>
    		<li><?php previous_posts_link( 'Next' ); ?></li>
    	</ul>
    </nav>

  <?php  endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
</div>

      <?php get_footer(); ?>
