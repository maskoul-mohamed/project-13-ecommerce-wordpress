<?php

add_action( 'admin_menu', 'ecommerce_mega_store_getting_started' );
function ecommerce_mega_store_getting_started() {
	add_theme_page( esc_html__('Get Started', 'ecommerce-mega-store'), esc_html__('Get Started', 'ecommerce-mega-store'), 'edit_theme_options', 'ecommerce-mega-store-guide-page', 'ecommerce_mega_store_test_guide');
}

function ecommerce_mega_store_admin_enqueue_scripts() {
	wp_enqueue_style( 'ecommerce-mega-store-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'ecommerce_mega_store_admin_enqueue_scripts' );

if ( ! defined( 'ECOMMERCE_MEGA_STORE_DOCS_FREE' ) ) {
define('ECOMMERCE_MEGA_STORE_DOCS_FREE',__('https://www.misbahwp.com/docs/ecommerce-mega-store-free-docs/','ecommerce-mega-store'));
}
if ( ! defined( 'ECOMMERCE_MEGA_STORE_DOCS_PRO' ) ) {
define('ECOMMERCE_MEGA_STORE_DOCS_PRO',__('https://www.misbahwp.com/docs/ecommerce-mega-store-pro-docs','ecommerce-mega-store'));
}
if ( ! defined( 'ECOMMERCE_MEGA_STORE_BUY_NOW' ) ) {
define('ECOMMERCE_MEGA_STORE_BUY_NOW',__('https://www.misbahwp.com/themes/ecommerce-mega-store-wordpress-theme/','ecommerce-mega-store'));
}
if ( ! defined( 'ECOMMERCE_MEGA_STORE_SUPPORT_FREE' ) ) {
define('ECOMMERCE_MEGA_STORE_SUPPORT_FREE',__('https://wordpress.org/support/theme/ecommerce-mega-store','ecommerce-mega-store'));
}
if ( ! defined( 'ECOMMERCE_MEGA_STORE_REVIEW_FREE' ) ) {
define('ECOMMERCE_MEGA_STORE_REVIEW_FREE',__('https://wordpress.org/support/theme/ecommerce-mega-store/reviews/#new-post','ecommerce-mega-store'));
}
if ( ! defined( 'ECOMMERCE_MEGA_STORE_DEMO_PRO' ) ) {
define('ECOMMERCE_MEGA_STORE_DEMO_PRO',__('https://www.misbahwp.com/demo/mega-store-ecommerce/','ecommerce-mega-store'));
}
function ecommerce_mega_store_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>
	
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( ECOMMERCE_MEGA_STORE_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'ecommerce-mega-store' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'ecommerce-mega-store' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( ECOMMERCE_MEGA_STORE_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'ecommerce-mega-store' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( ECOMMERCE_MEGA_STORE_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'ecommerce-mega-store' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','ecommerce-mega-store'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'ecommerce-mega-store'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','ecommerce-mega-store'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','ecommerce-mega-store'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','ecommerce-mega-store'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','ecommerce-mega-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'ecommerce-mega-store' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','ecommerce-mega-store'); ?></p>
					<div id="admin_pro_links">			
						<a class="blue-button-2" href="<?php echo esc_url( ECOMMERCE_MEGA_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'ecommerce-mega-store' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( ECOMMERCE_MEGA_STORE_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'ecommerce-mega-store' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( ECOMMERCE_MEGA_STORE_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'ecommerce-mega-store' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
