<?php get_header(); ?>

		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Упс!', 'html5blank' ); ?></h1>
				<h3> <?php echo LangDicts::$dict['404_text']; ?>
					
				</h3>
				
				<h2 class="h2"><a href="<?php echo home_url(); ?>"><?php _e( LangDicts::$dict['404_question'], 'html5blank' ); ?></a></h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
</main>

<?php get_footer(); ?>
