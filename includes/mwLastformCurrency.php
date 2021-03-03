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
final class mwLastformCurrency
{
    public static function initCurrencies(/*array*/ $currencies)/*: array*/
    {
        var_dump($currencies);
        die();
        $currencies['EUR'] = array(
            "name" => __("Euro", "gravityforms"),
            "symbol_left" => "",
            "symbol_right" => "€ ",
            "symbol_padding" => " ",
            "thousand_separator" => ',',
            "decimal_separator" => '.',
            "decimals" => 2);

        return $currencies;
    }
}