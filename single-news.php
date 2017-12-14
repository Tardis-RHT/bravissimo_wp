<?php
/*
Template Name: single-news
*/
?>
<?php get_header(); ?>
<section class="wrapper">
    <img class="news-title_img" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
    <p class="news-single_date"><?php echo get_the_date('n.j.Y'); ?></p>
    <h3 class="news_title"><?php the_title(); ?></h3>
    <div class="content  margin-bottom">
        <?php the_post(); the_content(); ?>
    </div>
</section>
<?php get_footer(); ?>