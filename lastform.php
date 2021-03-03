<?php

/**
 *  The plugin bootstrap file
 *
 *  This file is read by WordPress to generate the plugin information in the plugin
 *  admin area. This file also includes all of the dependencies used by the plugin,
 *  registers the activation and deactivation functions, and defines a function
 *  that starts the plugin.
 *
 * @link                   https://www.mentalworks.fr/
 * @since                  1.0.1
 * @package                MW Lastform
 *
 * @wordpress-plugin
 *  Plugin Name:            MW Lastform
 *  Description:            L'addon Gravityform dépressé reprit par Mentalworks
 *  Version:                1.0.0
 *  Requires at least:      5.2
 *  Requires PHP:           5.6
 *  Author:                 Mentalworks | Hugo Monteiro
 *  Author URI:             https://www.mentalworks.fr/
 *  License:                GPL v2 or later
 *  License URI:            https://www.gnu.org/licenses/gpl-2.0.html
 *  Text Domain:            lastform
 *  Domain Path:            /languages
 *
 *  ------------------------------------------------------------------------
 *
 *  This plugin is comprised of two parts.
 *
 *  (1) The PHP code and integrated HTML are licensed under the General Public
 *  License (GPL). Visit https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 *  (2) All other parts, but not limited to the CSS code, images, and design are
 *  licensed according to the license purchased from Envato.
 *
 *  Read more about licensing here: http://codecanyon.net/licenses
 */

// If this file is called directly, abort.
if (!defined('WPINC')) die;

require_once "autoloader.php";

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-lastform-activator.php
 */
register_activation_hook(__FILE__, function ()/*: void*/ {
    Lastform_Activator::activate();
});

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-lastform-deactivator.php
 */
register_deactivation_hook(__FILE__, function ()/*: void*/ {
    Lastform_Deactivator::deactivate();
});

function lastformAddon()/*: Lastform*/
{
    return Lastform::get_instance();
}

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
function lastform_bootstrap()/*: void*/
{
    if (method_exists('GFForms', 'include_addon_framework')):
        GFForms::include_addon_framework();
        GFAddOn::register('Lastform');
        lastformAddon()->run();
    endif;
}

add_action('gform_loaded', 'lastform_bootstrap', 5);

use App\MwLastformMaster;
MwLastformMaster::register();

