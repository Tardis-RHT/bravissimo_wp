<?php 
     /*
    Template Name: Programms
    */
    get_header(); ?>

    <main role="main">

<!-- //programs and shedule// -->

<section class="programs_page wrapper margin-bottom">
    <h1><?php echo get_the_title() ?></h1>
            <?php
            global $post;
            $args = array('posts_per_page' => 10,'post_type' => 'html5-levels', 'order' => 'ASC' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){ setup_postdata($post);
                ?><?php 
                	echo '<div class="programs programs_a1" id="programs_'.get_the_title().'">';
                	?><?php if( $post->ID == 153) {
	                    echo '<div class="programs_circle_small">';}
	                    else {echo '<div class="programs_circle">';}
	                ?>
					<?php the_title(); ?></div>
					<p class="program_single_length"><?php echo get_post_meta( $post->ID, 'program_time', true ); ?></p>
					<p class="programs-single_price"><?php echo get_post_meta( $post->ID, 'program_cost', true ); ?></p>
					<p class="programs_description"><?php echo get_post_meta( $post->ID, 'description', true ); ?></p>
					<?php 
			            $table = get_field( 'schedule' );
						if ( $table ) {
				            foreach ( $table['body'] as $tr ) {
				                echo '<div class="programs_timetable">';
				                    foreach ( $tr as $td ) {
				                        echo '<div class="programs_timetable_item">';
				                            echo $td['c'];
				                        echo '</div>';
				                    }
				                echo '</div>';
				            }
						}
			        ?>
					<p class="programs_comment">
						<?php echo get_post_meta( $post->ID, 'comment', true ); ?>
					</p>
					<button id="btn_program" class="button_programs popup" value="<?php echo get_the_title(); ?>"><?php echo LangDicts::$dict['submit']; ?></button>
				</div>
                <?php
            }
            wp_reset_postdata();
            ?>
</section>
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

			<input id="program" name="program" value="" size="40" class="wpcf7-form-control wpcf7-text name" aria-invalid="false" type="text" placeholder="Program name">

			<input name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text name" 
				aria-invalid="false" type="text" placeholder="<?php echo LangDicts::$dict['name']; ?>" >
			<span class="wpcf7-form-control-wrap tel-124"></span>
			<input name="tel-124" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel tel" aria-required="true" aria-invalid="false" type="tel" placeholder="<?php echo LangDicts::$dict['phone']; ?>">
			<span class="wpcf7-form-control-wrap your-email"></span>
			<input name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text 
				wpcf7-email wpcf7-validates-as-email email" 
				aria-invalid="false" type="email" placeholder="<?php echo LangDicts::$dict['email']; ?>">
			<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control 
				wpcf7-textarea" aria-invalid="false" placeholder="<?php echo LangDicts::$dict['comments']; ?>"></textarea>
			<input value="<?php echo LangDicts::$dict['submit']; ?>" class="modal_submit wpcf7-form-control wpcf7-submit button_submit" 
			type="submit">
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
<!-- //end of programs and schedule// -->
</main>

<?php get_footer(); ?>
