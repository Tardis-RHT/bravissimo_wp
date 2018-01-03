<?php
/*
Template Name: single-news
*/
?>
<?php get_header(); ?>
<section class="wrapper">
    <p class="news-single_date"><?php echo get_the_date('j.n.Y'); ?></p>
    <h1 class="news_title"><?php the_title(); ?></h1>
    <img class="news-title_img alignleft" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
    <div class="content  margin-bottom">
        <?php the_post(); the_content(); ?>
    </div>
</section>
<?php get_footer(); ?>