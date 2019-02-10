<?php
  get_header();
?>
<!-- Get the pages primary navigation elements -->
<?php
  get_template_part('menu');
?>


  <div class = "gray-row">
    <h2>Latest At Evergreen</h2>
      <?php
        if (have_posts () ) : while ( have_posts() ) : the_post();
          get_template_part('content',get_post_format() );
        endwhile; endif;
      ?>
  </div>
<?php
  get_footer();
?>