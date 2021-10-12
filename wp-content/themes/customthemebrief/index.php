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
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    


        
<?php
    }
}
?>
</div>
<?php get_footer(); ?>