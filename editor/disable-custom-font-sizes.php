add_action('after_setup_theme', function () {

    /**
     * Disabling custom font sizes
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-font-sizes
     */
    add_theme_support( 'disable-custom-font-sizes' );

}, 20);