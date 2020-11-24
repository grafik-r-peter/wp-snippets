add_action('after_setup_theme', function () {

    /**
     * Disabling custom colors in block Color Palettes
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-colors-in-block-color-palettes
     */
    add_theme_support( 'disable-custom-colors' );

}, 20);