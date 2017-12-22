<?php 
     /*
    Template Name: Page News
    */
    get_header(); ?>

<main role="main">
    <section class="wrapper margin-bottom">
        <h1><?php echo get_the_title($page->ID) ?></h1>
        <div class="page-news_wrapper">
            <?php
                global $post;
                $args = array('posts_per_page' => 0,'post_type' => 'news', 'order' => 'DESC' );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){ setup_postdata($post);
                    ?>
                <a class="news_single" href="<?php the_permalink(); ?>">
                    <img class="news-single_img" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                    <div class="news-single_about">
                        <p class="news-single_date"><?php echo get_the_date('j.n.Y'); ?></p>
                        <h3 class="news_title"><?php the_title(); ?></h3>
                        <p class="news_content"><?php echo wp_trim_words( get_the_content()); ?></p>
                    </div>
                </a>
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
