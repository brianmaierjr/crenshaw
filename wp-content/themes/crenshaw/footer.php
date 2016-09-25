			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div class="bottom-cta">
					<div class="wrap cta">
						<h2><?php the_field('bottom_cta_heading', 2); ?></h2>
						<a class="button formTrigger" href="/contact"><?php the_field('bottom_cta_btn_text', 2); ?></a>
					</div>
				</div>

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<div id="form">
			<div class="form-container">
				<span class="formTrigger">&times;</span>
				<h2>Let's Work Together</h2>
				<?php echo do_shortcode('[contact-form-7 id="37" title="Contact form 1"]'); ?>
			</div>
		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<script type='text/javascript' id="__bs_script__">
				//<![CDATA[
				document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.10.1.js'><\/script>".replace("HOST", location.hostname));
				//]]>
		</script>

		<?php if ( is_single() ) { ?>
			<script>
				setTimeout(function(){
					jQuery('.single .intro').css('max-height', '100vh');
					console.log('2000');
					jQuery('html,body').animate({ scrollTop: 0 }, 'slow');
				}, 2000);


				function popIn_scroll() {

					var window_height	= jQuery( window ).height();
					var actual_scroll = jQuery( document ).scrollTop();
					var popIn = jQuery('.intro');
					var content = jQuery('#content');

					if ( actual_scroll >= window_height ) {

						jQuery( document ).scrollTop( actual_scroll - window_height );
						popIn.remove();
					}
				}

				jQuery( window ).scroll( popIn_scroll );
			</script>
		<?php } ?>

	</body>

</html> <!-- end of site. what a ride! -->
