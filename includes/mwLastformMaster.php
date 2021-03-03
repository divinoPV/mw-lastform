<?php

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    MW Lastform
 * @subpackage Lastform/includes
 * @author     Hugo Monteiro <hugomonteiro6021@gmail.com>
 */
final class mwLastformMaster
{
    public static function register()
    {
        add_filter("gform_currencies", [mwLastformCurrency::class, "initCurrencies"]);
    }
}