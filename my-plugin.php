<?php
/*
Plugin Name: My Plugin
Description: Testing Gutenberg stuff.
Version: 1.0.0
*/

function my_plugin_assets() {

    wp_enqueue_script(
        'my-plugin',
        plugins_url( 'my-plugin.js', __FILE__ ),
        array( 'wp-edit-post' )
    );

}
add_action( 'enqueue_block_editor_assets', 'my_plugin_assets' );