<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cosimo
 */
?>

<?php 
		$facebookURL = get_theme_mod('cosimo_theme_options_facebookurl', '#');
		$twitterURL = get_theme_mod('cosimo_theme_options_twitterurl', '#');
		$googleplusURL = get_theme_mod('cosimo_theme_options_googleplusurl', '#');
		$linkedinURL = get_theme_mod('cosimo_theme_options_linkedinurl', '#');
		$instagramURL = get_theme_mod('cosimo_theme_options_instagramurl', '#');
		$youtubeURL = get_theme_mod('cosimo_theme_options_youtubeurl', '#');
		$pinterestURL = get_theme_mod('cosimo_theme_options_pinteresturl', '#');
		$tumblrURL = get_theme_mod('cosimo_theme_options_tumblrurl', '#');
		$vkURL = get_theme_mod('cosimo_theme_options_vkurl', '#');
		$bloglovinURL = get_theme_mod('cosimo_theme_options_bloglovinurl', '');
		$snapchatURL = get_theme_mod('cosimo_theme_options_snapchaturl', '');
		$telegramURL = get_theme_mod('cosimo_theme_options_telegramurl', '');
		$xingURL = get_theme_mod('cosimo_theme_options_xingurl', '');
		$imdbURL = get_theme_mod('cosimo_theme_options_imdburl', '');
		$redditURL = get_theme_mod('cosimo_theme_options_redditurl', '');
		$twitchURL = get_theme_mod('cosimo_theme_options_twitchurl', '');
	?>
	<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) : ?>
		<footer id="colophon" class="site-footer">
			<div class="site-info smallPart">
				<div class="infoFoo">
					<?php
					$copyrightText = get_theme_mod('cosimo_theme_options_copyrighttext', '&copy; '.date('Y').' '. get_bloginfo('name'));
					if ($copyrightText || is_customize_preview()): ?>
						<span class="custom"><?php echo wp_kses($copyrightText, cosimo_allowed_html()); ?></span>
					<?php endif; ?>
					<span class="sep"> | </span>
					<?php
					/* translators: 1: theme name, 2: theme developer */
					printf( esc_html__( 'WordPress Theme: %1$s by %2$s.', 'cosimo' ), '<a target="_blank" href="https://crestaproject.com/downloads/cosimo/" rel="noopener noreferrer" title="Cosimo Theme">Cosimo</a>', 'CrestaProject' );
					?>
				</div>
				<div class="infoFoo right">
					<div class="socialLine">
						<?php if (!empty($facebookURL)) : ?>
							<a href="<?php echo esc_url($facebookURL); ?>" title="<?php esc_attr_e( 'Facebook', 'cosimo' ); ?>"><i class="fa fa-facebook spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($twitterURL)) : ?>
							<a href="<?php echo esc_url($twitterURL); ?>" title="<?php esc_attr_e( 'Twitter', 'cosimo' ); ?>"><i class="fa fa-twitter spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($googleplusURL)) : ?>
							<a href="<?php echo esc_url($googleplusURL); ?>" title="<?php esc_attr_e( 'Google Plus', 'cosimo' ); ?>"><i class="fa fa-google-plus spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Google Plus', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($linkedinURL)) : ?>
							<a href="<?php echo esc_url($linkedinURL); ?>" title="<?php esc_attr_e( 'Linkedin', 'cosimo' ); ?>"><i class="fa fa-linkedin spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Linkedin', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($instagramURL)) : ?>
							<a href="<?php echo esc_url($instagramURL); ?>" title="<?php esc_attr_e( 'Instagram', 'cosimo' ); ?>"><i class="fa fa-instagram spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Instagram', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($youtubeURL)) : ?>
							<a href="<?php echo esc_url($youtubeURL); ?>" title="<?php esc_attr_e( 'YouTube', 'cosimo' ); ?>"><i class="fa fa-youtube spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'YouTube', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($pinterestURL)) : ?>
							<a href="<?php echo esc_url($pinterestURL); ?>" title="<?php esc_attr_e( 'Pinterest', 'cosimo' ); ?>"><i class="fa fa-pinterest spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Pinterest', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($tumblrURL)) : ?>
							<a href="<?php echo esc_url($tumblrURL); ?>" title="<?php esc_attr_e( 'Tumblr', 'cosimo' ); ?>"><i class="fa fa-tumblr spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Tumblr', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($vkURL)) : ?>
							<a href="<?php echo esc_url($vkURL); ?>" title="<?php esc_attr_e( 'VK', 'cosimo' ); ?>"><i class="fa fa-vk spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'VK', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($bloglovinURL)) : ?>
							<a href="<?php echo esc_url($bloglovinURL); ?>" title="<?php esc_attr_e( 'Bloglovin', 'cosimo' ); ?>"><i class="fa fa-heart spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Bloglovin', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($snapchatURL)) : ?>
							<a href="<?php echo esc_url($snapchatURL); ?>" title="<?php esc_attr_e( 'Snapchat', 'cosimo' ); ?>"><i class="fa fa-snapchat spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Snapchat', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($telegramURL)) : ?>
							<a href="<?php echo esc_url($telegramURL); ?>" title="<?php esc_attr_e( 'Telegram', 'cosimo' ); ?>"><i class="fa fa-telegram spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Telegram', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($xingURL)) : ?>
							<a href="<?php echo esc_url($xingURL); ?>" title="<?php esc_attr_e( 'Xing', 'cosimo' ); ?>"><i class="fa fa-xing spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Xing', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($imdbURL)) : ?>
							<a href="<?php echo esc_url($imdbURL); ?>" title="<?php esc_attr_e( 'Imdb', 'cosimo' ); ?>"><i class="fa fa-imdb spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Imdb', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($redditURL)) : ?>
							<a href="<?php echo esc_url($redditURL); ?>" title="<?php esc_attr_e( 'Reddit', 'cosimo' ); ?>"><i class="fa fa-reddit spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Reddit', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
						<?php if (!empty($twitchURL)) : ?>
							<a href="<?php echo esc_url($twitchURL); ?>" title="<?php esc_attr_e( 'Twitch', 'cosimo' ); ?>"><i class="fa fa-twitch spaceLeftRight" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Twitch', 'cosimo' ); ?></span></i></a>
						<?php endif; ?>
					</div>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	<?php endif; ?>
</div><!-- #content -->
</div><!-- #page -->
<div id="toTop"><i class="fa fa-angle-up fa-lg"></i></div>
<?php wp_footer(); ?>
</body>
</html>
