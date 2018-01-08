<?php 
     /*
    Template Name: Library
    */
    get_header(); ?>
    
<!-- //library// -->
<article class="main">
    <section class="wrapper margin-bottom">
        <h1><?php echo get_the_title($page->ID) ?></h1>
            <div class="library">
            <?php
            global $post;
            $args = array('posts_per_page' => 100,'post_type' => 'library', 'order' => 'ASC' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){ setup_postdata($post);
                ?>
                <div class="library-wrapper">
                    <div class="library_img" >
                        <img class="library_img_img" src=" <?php echo get_the_post_thumbnail_url($post->ID, 'medium'); ?> " alt="<?php
                    echo get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);?>">
                    </div>

                    <h4><?php echo get_post_meta( $post->ID, 'level', true ); ?></h4>
                    <!-- <p class="library_annotation"> -->
                        <?php the_content(); ?>
                    <!-- </p> -->
                    <div style="height: 100%"></div>
                    <div>
                        
                        <?php
                        $file = get_field('book');
                        if( $file ) {
                            $url = wp_get_attachment_url( $file );
                            ?><a target="blank" class="library_button-download" href="<?php echo $url; ?>" ><?php echo LangDicts::$dict['download']; ?></a><?php
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </section>
</article>
</main>
<?php get_footer(); ?>
