<?php
/*
Plugin Name: Remove Empty Lines
GitHub Plugin URI: https://github.com/nwcybersolutions/remove-empty-line/
Description: Removes "/& n b s p ;/" when using the Visual Editor
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.0.1
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Remove Empty Lines
Domain Path: /languages
*/
function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);
