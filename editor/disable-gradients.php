add_action('after_setup_theme', function () {

    /**
     * Disabling custom gradients
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-gradients
     */
    add_theme_support( 'disable-custom-gradients' );

}, 20);