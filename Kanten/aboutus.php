<?php 
/**
 * Template Name: About Us
 */
get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-area">


    <div id="box1">
    <?php 
      the_content(  );    
    ?>
    </div>

  </main>
</div>

<?php get_footer(); ?>

<?php echo do_shortcode('[metaslider id="486"]'); ?>
<?php echo do_shortcode('[metaslider id="500"]'); ?>
