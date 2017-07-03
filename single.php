<?php get_header(); ?>
<div class="container-fluid">
<div class="row">
	<div class="offset-md-1 col-md-10 col-sm-12 col-xs-12">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; endif;
			?>
</div>
</div>
</div>
<?php get_footer(); ?>
