<?php get_header(); ?>

<div class="container">
<?php
if (have_posts()){
    while (have_posts()){
        the_post();?>
        <div class="title">
        <?php the_title();
        ?>
        </div>
      <div class="content">
        <?php the_content();
        ?>
      </div>

        
<?php
    }
}
?>
</div>
<?php get_footer(); ?>