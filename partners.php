<?php 
     /*
    Template Name: Partners
    */
    get_header(); ?>

<main role="main">

<header class="partners_img-container">
    <img src="<?php echo get_template_directory_uri() ?>/img/partners.png" alt="partners page">
    <div class="partners-title-container">
        <h1 class="partners-title">
            Наши клиенты
        </h1>
    </div> 
</header>
<section class="partners-container wrapper">

<?php
                global $post;
                $args = array('posts_per_page' => 0,'post_type' => 'clients', 'order' => 'DESC' );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){ setup_postdata($post);
                    ?>

            <div class="single-partner">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="partner1">
                <div class="single-partner-info">
                    <a href="<?php echo get_post_meta( $post->ID, 'link', true ); ?>" title="<?php the_title(); ?>" target="_blank">
                        <h3 class="single-partner-name"><?php the_title(); ?></h3>
                    </a>
                    <h4 class="single-partner-job"><?php echo get_post_meta( $post->ID, 'job', true ); ?></h4>
                    <?php echo get_the_content(); ?>
                    <!-- <a href="#" class="button">link</a> -->
                </div>
            </div>

            <?php
                }
                wp_reset_postdata();
            ?>


    <div class="partners_logo-container">
    <?php
                global $post;
                $args = array('posts_per_page' => 0,'post_type' => 'clients', 'order' => 'DESC' );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){ setup_postdata($post);
                    ?>
                    <img src="<?php 
                        $image = get_field('logo');
                        $url = $image['url'];
                        echo $url; 
                    ?>" alt="<?php the_title(); ?>">
            <?php
                }
                wp_reset_postdata();
            ?>
    </div>
    <!-- <div class="partners_logo-container">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/001.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/002.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/003.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/004.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/001.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/002.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/003.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/004.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/001.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/002.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/003.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/004.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/001.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/002.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/003.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/004.png" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/001.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/002.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/003.jpg" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/clients/004.png" alt="">
    </div> -->
</section>
</main>
<?php get_footer(); ?>
