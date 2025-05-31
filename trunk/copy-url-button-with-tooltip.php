<?php
/**
 * Plugin Name: Copy URL Button with Tooltip
 * Plugin URI: https://wordpress.org/plugins/copy-url-button-with-tooltip/
 * Description: Adds a shortcode [copy_url_button] to copy the current page URL with a tooltip.
 * Version: 1.0.0
 * Author: Sujon Madbors
 * Author URI: https://sujonmadbor8.com/
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: copy-url-button-with-tooltip
 */


if (!defined('ABSPATH')) exit;

// Enqueue scripts and styles
function cubt_enqueue_assets() {
    wp_enqueue_script('cubt-script', plugin_dir_url(__FILE__) . 'copy-url.js', array(), '1.0', true);
    wp_enqueue_style('cubt-style', plugin_dir_url(__FILE__) . 'copy-url.css', array(), '1.0', 'all');

}
add_action('wp_enqueue_scripts', 'cubt_enqueue_assets');

// Render the copy URL button via shortcode
function cubt_render_button() {
    ob_start();
    ?>
<div style="position: relative; display: inline-block;">
    <button id="copyURL">Copy URL</button>
    <span id="copyTooltip" class="tooltip-text">Copied!</span>
</div>
<?php
    return ob_get_clean();
}
add_shortcode('copy_url_button', 'cubt_render_button');