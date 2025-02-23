<?php
/**
 * Dark Academia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dark Academia
 * @since Dark Academia 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'dark_academia_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Dark Academia 1.0
	 *
	 * @return void
	 */
	function dark_academia_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'dark-academia' );
	}

endif;

add_action( 'after_setup_theme', 'dark_academia_support' );

if ( ! function_exists( 'dark_academia_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Dark Academia 1.0
	 *
	 * @return void
	 */
	function dark_academia_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'dark-academia-style',
			get_stylesheet_directory_uri() . '/css/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'dark-academia-style' );

		// Register theme stylesheet override.
		wp_register_style(
			'dark-academia-style-custom',
			get_stylesheet_directory_uri() . '/css/style-custom.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'dark-academia-style-custom' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'dark_academia_styles' );

function header_bg_display() {
	?>
        <input id="upload_image" type="text" size="36" name="header_bg" value="<?php echo get_option('header_bg'); ?>" />
	<?php
}

function header_bg_button() {
	?>
	    <input id="upload_image_button" class="button" type="button" value="Choose Image" />
	<?php
}

function theme_settings_page() {
	?>
		<div class="wrap">
		<h1>Theme Panel</h1>
		<form method="post" action="options.php">
			<?php
				settings_fields('section');
				do_settings_sections('theme-options');
				submit_button();
			?>
		</form>
		</div>
	<?php
}

function add_theme_menu_item() {
	add_menu_page( 'Theme Panel', 'Theme Panel', 'manage_options', 'theme-panel', 'theme_settings_page', null, 99 );
}

add_action('admin_menu', 'add_theme_menu_item');

function display_theme_panel_fields() {
	add_settings_section('section', 'All Settings', null, 'theme-options');

	add_settings_field('header_bg', 'Header Background Image', 'header_bg_display', 'theme-options', 'section');
	add_settings_field('header_bg_button', '', 'header_bg_button', 'theme-options', 'section');

    register_setting('section', 'header_bg', 'esc_attr');
}

add_action('admin_init', 'display_theme_panel_fields');

function my_admin_scripts() {
    wp_enqueue_media();
    wp_register_script('theme-admin-js', get_template_directory_uri() . '/js/theme-admin.js', array('jquery'));
    wp_enqueue_script('theme-admin-js');
}
add_action('admin_enqueue_scripts', 'my_admin_scripts');
