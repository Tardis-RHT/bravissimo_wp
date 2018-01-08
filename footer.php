<!-- footer -->
<footer class="wraper footer">
    <div class="footer_content wrapper">
        <div class="footer_icons-wraper">
            <a href="https://www.facebook.com/studiobravissimo/" target="_blank" class="footer_facebook-icons"></a>
            <a href="https://www.instagram.com/studiobravissimo/" target="_blank" class="footer_instagram-icons"></a>
        </div>
        <div class="footer_contacts">
            <div class="footer_wraper-contacts">
                <a href="tel:'<?php echo str_replace(" ","",get_post_meta(69, 'tel1', true)); ?>'" class="footer_phone-number"><?php echo get_post_meta( 69, 'tel1', true ); ?></a>
                <a href="tel:'<?php echo str_replace(" ","",get_post_meta(69, 'tel2', true)); ?>'" class="footer_phone-number"><?php echo get_post_meta( 69, 'tel2', true ); ?></a>
                <a href="mailto:'<?php echo get_post_meta( 69, 'e-mail', true ); ?>'" class="footer_email"><?php echo get_post_meta( 69, 'e-mail', true ); ?></a>
                <a href="/contacts" class="footer_addres"><?php echo get_post_meta( 69, 'adress-2', true ); ?></a>
            </div>
        </div>
        <div class="footer_logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-1.png" alt="Bravissimo Studio" class="footer_links-logo"></a>
        </div>
    </div>
    <p class="footer_copywrite">&#169; 2012 - <?php echo date('Y'); ?>. <?php echo get_post_meta( 69, 'copyright', true ); ?></p>
</footer>
<!-- /footer -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php if(is_page('italian-test')): ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/test.js"></script>
<?php endif; ?>
	</body>
</html>
