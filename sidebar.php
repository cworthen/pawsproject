<div class="offset-md-1 col-md-3 col-sm-12 col-xs-12 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <?php dynamic_sidebar('default-sidebar'); ?>
  </div>

  <div class="sidebar-module">
      <?php dynamic_sidebar('other-sidebar'); ?>
    <h4 id="archives">Archives</h4>
    <ol class="list-unstyled">
      	<?php wp_get_archives( 'type=monthly' ); ?>
    </ol>
  </div>

</div><!-- /.blog-sidebar -->
