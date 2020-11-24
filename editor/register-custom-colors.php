add_action('after_setup_theme', function () {

    /**
     * Enable theme color palette support
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
     */
    add_theme_support('editor-color-palette', [
        [
            'name' => __('Gelb', 'sage'),
            'slug' => 'yellow',
            'color' => '#ffd600',
        ],
        [
            'name' => __('Schwarz', 'sage'),
            'slug' => 'black',
            'color' => '#22211f',
        ],
        [
            'name' => __('Weiß', 'sage'),
            'slug' => 'white',
            'color' => '#fff',
        ],
    ]);

}, 20);