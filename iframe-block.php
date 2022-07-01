<?php
/**
 * Plugin Name:       iFrame Block
 * Plugin URI:        https://websolutionideas.com/iframe-block/
 * Description:       iFrame Block lets you insert iframes in the block editor.
 * Requires at least: 5.2
 * Requires PHP:      5.6
 * Version:           0.1.0
 * Author:            Vikas Sharma
 * Author URI:        https://websolutionideas.com/vikas/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       iframe-block
 *
 * @package           wsi
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function wsi_iframe_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'wsi_iframe_block_block_init' );
