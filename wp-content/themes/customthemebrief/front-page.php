<?php get_header(); ?>

<div class="main-container">
<?php
if (have_posts()){
    while (have_posts()){
        the_post();?>
        <div class="main-title">
        <?php the_title();
        ?>
        </div>
      <div class="main_content">
        <?php the_content();
        ?>
      </div>


        
<?php
    }
}
?>
</div>
<?php get_footer(); ?>