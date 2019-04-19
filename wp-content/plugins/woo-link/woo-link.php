<?php

/**
 * Plugin Name: Woo Link Products
 * Plugin URI: https://freelancerhcm.com
 * Description: Plugin help WooCommerce Products link to previous products in the same categories
 * Version: 1.0
 * Author: Tuan Dao
 * Author URI: https://freelancerhcm.com
 * License: GPL2
 * Created On: 18-04-2019
 * Updated On: 20-04-2019
 */
// Define WOOLINK_PLUGIN_DIR.
if (!defined('WOOLINK_PLUGIN_DIR')) {
    define('WOOLINK_PLUGIN_DIR', plugin_dir_path(__FILE__));
}

// Define WC_PLUGIN_FILE.
if (!defined('WOOLINK_PLUGIN_URL')) {
    define('WOOLINK_PLUGIN_URL', plugin_dir_url(__FILE__));
}

require_once('autoload.php');

?>