
<?php
/*
Plugin Name: Remove Empty Lines
GitHub Plugin URI: https://github.com/nwcybersolutions/remove-empty-line/
Description: Removes "/&nbsp;/" when using the Visual Editor
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Remove Empty Lines
Domain Path: /languages
*/

function remove_empty_lines( $content ){

  // replace empty lines
  $content = preg_replace("/&nbsp;/", "", $content);

  return $content;
}
add_action('content_save_pre', 'remove_empty_lines');
