<?php get_header(); ?>
<!-- //italian picture// -->

<section class="bg_wrapper margin-bottom">
    <div class="section_first-img">
        <h1 class="section1_italy"><?php echo get_post_meta( $post->ID, 'main_title', true ); ?></h1>
        <button class="button popup"><?php echo LangDicts::$dict['submit']; ?></button>
    </div>

    <!-- MODAL WINDOW -->
    <div class="modal_wrap" id="modal_form">
    <div role="form" class="wpcf7" id="wpcf7-f240-o1" dir="ltr" lang="en-US">
        <div class="screen-reader-response"></div>

        <form action="/#wpcf7-f240-o1" method="post" class="wpcf7-form" novalidate="novalidate">
            <div style="display: none;">
                <input name="_wpcf7" value="240" type="hidden">
                <input name="_wpcf7_version" value="4.8.1" type="hidden">
                <input name="_wpcf7_locale" value="en_US" type="hidden">
                <input name="_wpcf7_unit_tag" value="wpcf7-f240-o1" type="hidden">
                <input name="_wpcf7_container_post" value="0" type="hidden">
                <input name="_wpcf7_nonce" value="d933b485eb" type="hidden">
            </div>
            <span id="modal_close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/test-wrong.svg">
            </span>
                    <span class="wpcf7-form-control-wrap your-name"></span>
                    <input name="your-name" value="" size="40" 
                        class="wpcf7-form-control wpcf7-text name" 
                        aria-invalid="false" type="text" placeholder="<?php echo LangDicts::$dict['name']; ?>">
                    <span class="wpcf7-form-control-wrap tel-124"></span>
                    <input name="tel-124" value="" size="40" 
                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required 
                        wpcf7-validates-as-tel tel" aria-required="true" aria-invalid="false" type="tel" 
                        placeholder="<?php echo LangDicts::$dict['phone']; ?>">
                    <span class="wpcf7-form-control-wrap your-email"></span>
                    <input name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text 
                        wpcf7-email wpcf7-validates-as-email email" 
                        aria-invalid="false" type="email" placeholder="<?php echo LangDicts::$dict['email']; ?>">
                    <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control 
                        wpcf7-textarea" aria-invalid="false" placeholder="<?php echo LangDicts::$dict['comments']; ?>"></textarea>
                    <input value="<?php echo LangDicts::$dict['submit']; ?>" class="modal_submit wpcf7-form-control wpcf7-submit button_submit" 
                    type="submit">
            <!-- <div class="wpcf7-response-output wpcf7-display-none"></div> -->
        </form>

        </div>
        <div class="thankyou modal_hidden">
            <h2><?php echo LangDicts::$dict['thankyou']; ?>!</h2>
            <p class="thankyou_p"><?php echo LangDicts::$dict['accepted_txt']; ?>.</p>
            <p class="thankyou_p"><?php echo LangDicts::$dict['connect_txt']; ?>!</p>
            <button class="thankyou_btn" name="button" value="OK" type="button">OK</button>
        </div>
    </div>
<div id="overlay"></div>
  <!-- END OF MODAL WINDOW -->
</section>
<!-- //end of italian picture// -->

<!-- //test & skype// -->
<section class="wrapper">
    <div class="tech_wrapper">
        <a href="/italian-test" class="tech">
            <img class="tech_img" src="<?php echo get_template_directory_uri(); ?>/img/writing.svg">
            <p class="tech_button">Пройти тест</p>
        </a>
        <a href="/skype_lessons" class="tech">
            <img class="tech_img" src="<?php echo get_template_directory_uri(); ?>/img/video-chat.svg">
            <p class="tech_text">Уроки по скайпу</p>
        </a>
    </div>
</section>
<!-- //end of test & skype// -->

<!-- //programs section// -->
<section class="wrapper margin-bottom">
    <h2 class="programs_h2"><?php echo LangDicts::$dict['programs']; ?></h2>
    <div class="programs_wrapper">
        <?php
        global $post;
        $args = array('posts_per_page' => 10,'post_type' => 'html5-levels', 'order' => 'ASC' );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ){ setup_postdata($post);
            ?>
        <?php echo '<a class="program-single" href="programs-and-schedules#programs_'.get_the_title().'">' ?>
            <img class="program-single_img" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
            <div class="program-single_about">
                <?php if( $post->ID == 153) {
                    echo '<div class="program-single_circle_small">';}
                    else {echo '<div class="program-single_circle">';}
                ?>
                <?php the_title(); ?>
                </div>
                <h3 class="program-single_h3"><?php echo get_post_meta( $post->ID, 'program_level', true ); ?></h3>
                <h4 class="program-single_price"><?php echo get_post_meta( $post->ID, 'program_cost', true ); ?></h4>
                <p class="program-single_desc"><?php echo get_the_content(); ?></p>
                <span class="program-single_time"><?php echo get_post_meta( $post->ID, 'program_time', true ); ?></span>
            </div>
        </a>
        <?php
            }
            wp_reset_postdata();
        ?>
    </div>
    </section>
<!-- //end of programs section// -->

<!-- //italian for// -->
<section class="wrapper margin-bottom">
    <div class="italian_wraper">
    <div class="italian_container">
        <div class="italian-for">
            <h2 class="italian_p"><?php echo LangDicts::$dict['ital_for_txt']; ?>...</h2>
            <div class="italian-logs">
                <div class="italian_logo">
                    <img class="italian_logo-single" src="<?php echo get_template_directory_uri(); ?>/img/family.svg" alt="family">
                    <p class="italian_icon-text"><?php echo LangDicts::$dict['family']; ?></p>
                </div>
                <div class="italian_logo">
                    <img class="italian_logo-single" src="<?php echo get_template_directory_uri(); ?>/img/money.svg" alt="business">
                    <p class="italian_icon-text"><?php echo LangDicts::$dict['business']; ?></p>
                </div>
                <div class="italian_logo">
                    <img class="italian_logo-single" src="<?php echo get_template_directory_uri(); ?>/img/college-graduation.svg" alt="exam">
                    <p class="italian_icon-text"><?php echo LangDicts::$dict['edu']; ?></p>
                </div>
                <div class="italian_logo">
                    <img class="italian_logo-single" src="<?php echo get_template_directory_uri(); ?>/img/airplane.svg" alt="travel">
                    <p class="italian_icon-text"><?php echo LangDicts::$dict['travel']; ?></p>
                </div>
                <div class="italian_logo">
                    <img class="italian_logo-single" src="<?php echo get_template_directory_uri(); ?>/img/heart (1).svg" alt="relocation">
                    <p class="italian_icon-text"><?php echo LangDicts::$dict['love']; ?></p>
                </div>
                <div class="italian_logo">
                    <img class="italian_logo-single" src="<?php echo get_template_directory_uri(); ?>/img/roman-coliseum.svg" alt="professionals">
                    <p class="italian_icon-text"><?php echo LangDicts::$dict['culture']; ?></p>
                </div>
            </div>  
        </div>
    </div>
</div>
</section>
<!-- //end of italian for// -->

<!-- //education types// -->
<section class="education-types wrapper margin-bottom">
    <h2 class="education-types-title"><?php echo LangDicts::$dict['we_offer']; ?></h2>
    <div class="education-types-container">
        <div class="education-types_flex">
         <?php
            global $post;
            $args = array('posts_per_page' => 10,'post_type' => 'html5-offers', 'order' => 'ASC' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){ setup_postdata($post);
                ?>
                <div class="education-type_single">
                <div class="education-type-bg">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h3 class="education-type-title"><?php the_title(); ?></h3>
                <h4 class="education-type-price"><?php echo get_post_meta( $post->ID, 'price', true ); ?></h4>
                <p class="education-type-duration"><?php echo get_post_meta( $post->ID, 'duration', true ); ?></p>
                <ul class="education-type-benefits">
                   <?php the_content(); ?>
                </ul>
            </div>
                <?php
            }
            wp_reset_postdata();
            ?>
        </div>    
    </div>
</section>
<!-- //end of education types// -->

<!-- //section news// -->
<section class="wrapper margin-bottom">
    <h2>Новости</h2>
    <div class="news_wrapper">
        <?php
            global $post;
            $args = array('posts_per_page' => 3,'post_type' => 'html5-news', 'order' => 'DESC' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){ setup_postdata($post);
                ?>
            <a class="news_single" href="#">
                <img class="news-single_img" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <div class="news-single_about">
                    <p class="news-single_date"><?php echo get_the_date('n.j.Y'); ?></p>
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
<!-- //end of section news// -->

<!-- //learning section// -->
<section>
        <h2 class="learning_h2"><?php echo LangDicts::$dict['learning_ital']; ?>...</h2>
        <div class="learning_wrapper-big_right">
            <div class="learning_wrapper-small_01">
                <div class="learning_text_left">
                <h3 class="learning_h3">...<?php echo LangDicts::$dict['easy']; ?></h3>
                <p><?php echo get_post_meta( $post->ID, 'easy', true ); ?></p>
                </div>
            </div>
        </div>
        <div class="learning_wrapper-big_left">
            <div class="learning_wrapper-small_02">
                <div class="learning_text_right">
                    <h3 class="learning_h3">...<?php echo LangDicts::$dict['hard']; ?></h3>
                    <p><?php echo get_post_meta( $post->ID, 'hard', true ); ?></p>
                </div>
            </div>
        </div>
    </section>
<!-- //end of learning section// -->

<!-- //section flags// -->
<section class="margin-bottom">
    <div class="section_wrapper-flag">
        <h2><?php echo LangDicts::$dict['talk_ital']; ?></h2>
        <div class="wrapper">
            <div class="flags_wrapper">
                <div class="flag_wrpapper">
                    <img class="section-flag" src="<?php echo get_template_directory_uri(); ?>/img/italy.svg">
                    <span><?php echo LangDicts::$dict['italy']; ?></span>
                </div>
                <div class="flag_wrpapper">
                    <img class="section-flag" src="<?php echo get_template_directory_uri(); ?>/img/vatican-city.svg">
                    <span><?php echo LangDicts::$dict['vatican']; ?></span>
                </div>
                <div class="flag_wrpapper">
                    <img class="section-flag" src="<?php echo get_template_directory_uri(); ?>/img/san-marino.svg">
                    <span><?php echo LangDicts::$dict['san-marino']; ?></span>
                </div>
                <div class="flag_wrpapper">
                    <img class="section-flag" src="<?php echo get_template_directory_uri(); ?>/img/switzerland.svg">
                    <span><?php echo LangDicts::$dict['switzerland']; ?></span>
                </div>
                <div class="flag_wrpapper">
                    <img class="section-flag" src="<?php echo get_template_directory_uri(); ?>/img/slovenia.svg">
                    <span><?php echo LangDicts::$dict['slovenia']; ?></span>
                </div>
                <div class="flag_wrpapper">
                    <img class="section-flag" src="<?php echo get_template_directory_uri(); ?>/img/croatia.svg">
                    <span><?php echo LangDicts::$dict['croatia']; ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //end of section flags// -->



<!-- //beautiful picture at bottom// -->
<section class="bg_wrapper">
    <div class="sectionlust">
        <h3 class="sectionlust_text"><?php echo LangDicts::$dict['ready_to_learn_txt']; ?></h3>
        <button class="sectionlust_button popup"><?php echo LangDicts::$dict['submit']; ?></button>
    </div>
</section>
<!-- //end of beautiful picture at bottom// -->
</main>
<?php get_footer(); ?>
