<footer>
<div class="container-fluid">
  <div class="row footer-padding">

<div class="offset-md-2 col-md-4 offset-sm-1 col-sm-4 col-xs-12">
<?php  if(is_active_sidebar('footer-1')){
  dynamic_sidebar('footer-1');
} ?>

  <i class="fa fa-twitter" aria-hidden="true"></i>
  <i class="fa fa-facebook" aria-hidden="true"></i>
  <i class="fa fa-instagram" aria-hidden="true"></i>
  <i class="fa fa-snapchat-ghost" aria-hidden="true"></i>

  <?php  if(is_active_sidebar('footer-2')){
    dynamic_sidebar('footer-2');
  } ?>

</div>




<div class="col-md-4 offset-sm-1  col-sm-4 col-xs-12">

  <?php  if(is_active_sidebar('footer-3')){
    dynamic_sidebar('footer-3');
  } ?>


<p class="credit">Built by Candace Worthen</p>
<a href="https://github.com/cworthen">
<i class="fa fa-github-alt" aria-hidden="true"></i></a>
<a href="https://www.linkedin.com/in/candaceworthen">
  <i class="fa fa-linkedin socialmedia" aria-hidden="true"></i></a>

</div>


</div>
</div>
</footer>

<?php wp_footer(); ?>
  </body>
</html>
