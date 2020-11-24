/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {

	/**
	 * Register custom image sizes
	 * @link https://developer.wordpress.org/reference/functions/add_image_size/
	 */
	add_image_size( '650x250', 650, 250 ); // 650 pixels wide by 250 pixels tall, soft proportional crop mode
	add_image_size( '900x250', 900, 250 ); // 900 pixels wide by 250 pixels tall, soft proportional crop mode
	add_image_size( '500x250', 500, 250 ); // 500 pixels wide by 250 pixels tall, soft proportional crop mode
	add_image_size( '80x80', 80, 80 ); // 80 pixels wide by 80 pixels tall, soft proportional crop mode
}, 20);