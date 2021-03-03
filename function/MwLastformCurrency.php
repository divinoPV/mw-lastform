<?php

namespace App;

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
final class MwLastformCurrency extends MwLastformMaster
{
    public static function initCurrencies(/*array*/ $currencies)/*: array*/
    {
        $currencies['USD'] = [
            "name"                  => __("Dollar US", parent::TRAD),
            "symbol_left"           => '$',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['GBP'] = array(
            "name"                  => __("Livre sterling", parent::TRAD),
            "symbol_left"           => '£',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        );
        $currencies['EUR'] = array(
            "name"                  => __("Euro", parent::TRAD),
            "symbol_left"           => '',
            "symbol_right"          => '€',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        );
        $currencies['AUD'] = [
            "name"                  => __("Dollar australien", parent::TRAD),
            "symbol_left"           => '$',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['BRL'] = [
            "name"                  => __("Réal brésilien", parent::TRAD),
            "symbol_left"           => 'R$',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => '.',
            "decimal_separator"     => ',',
            "decimals"              => 2
        ];
        $currencies['CAD'] = [
            "name"                  => __("Dollar Canadien", parent::TRAD),
            "symbol_left"           => '$',
            "symbol_right"          => 'CAD',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['CZK'] = [
            "name"                  => __("Couronne tchèque", parent::TRAD),
            "symbol_left"           => '',
            "symbol_right"          => 'Kč',
            "symbol_padding"        => '',
            "thousand_separator"    => ' ',
            "decimal_separator"     => ',',
            "decimals"              => 2
        ];
        $currencies['DKK'] = [
            "name"                  => __("Couronne danoise", parent::TRAD),
            "symbol_left"           => '',
            "symbol_right"          => 'kr.',
            "symbol_padding"        => '',
            "thousand_separator"    => '.',
            "decimal_separator"     => ',',
            "decimals"              => 2
        ];
        $currencies['HKD'] = [
            "name"                  => __("Dollar de Hong Kong", parent::TRAD),
            "symbol_left"           => 'HK$',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['HUF'] = [
            "name"                  => __("Florin hongrois", parent::TRAD),
            "symbol_left"           => '',
            "symbol_right"          => 'Ft',
            "symbol_padding"        => '',
            "thousand_separator"    => '.',
            "decimal_separator"     => ',',
            "decimals"              => 2
        ];
        $currencies['ILS'] = [
            "name"                  => __("Nouveau Sheqel israëlien", parent::TRAD),
            "symbol_left"           => '₪',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['JPY'] = [
            "name"                  => __("Yen japonais", parent::TRAD),
            "symbol_left"           => '¥',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['MYR'] = [
            "name"                  => __("Ringgit malaisien", parent::TRAD),
            "symbol_left"           => 'RM',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['MXN'] = [
            "name"                  => __("Peso mexicain", parent::TRAD),
            "symbol_left"           => '$',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['NOK'] = [
            "name"                  => __("Couronne norvégienne", parent::TRAD),
            "symbol_left"           => 'Kr',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => '.',
            "decimal_separator"     => ',',
            "decimals"              => 2
        ];
        $currencies['NZD'] = [
            "name"                  => __("Dollar néo-zélandais", parent::TRAD),
            "symbol_left"           => '$',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['PHP'] = [
            "name"                  => __("Peso philippin", parent::TRAD),
            "symbol_left"           => 'Php',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['PLN'] = [
            "name"                  => __("Zloty polonais", parent::TRAD),
            "symbol_left"           => 'zł',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => '.',
            "decimal_separator"     => ',',
            "decimals"              => 2
        ];
        $currencies['RUB'] = [
            "name"                  => __("Rouble russe", parent::TRAD),
            "symbol_left"           => '',
            "symbol_right"          => 'pyб',
            "symbol_padding"        => '',
            "thousand_separator"    => '',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['SGD'] = [
            "name"                  => __("Dollar singapourien", parent::TRAD),
            "symbol_left"           => '$',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['ZAR'] = [
            "name"                  => __("Rand Sud africain", parent::TRAD),
            "symbol_left"           => 'R',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['SEK'] = [
            "name"                  => __("Couronne suédoise", parent::TRAD),
            "symbol_left"           => '',
            "symbol_right"          => 'Kr',
            "symbol_padding"        => '',
            "thousand_separator"    => ' ',
            "decimal_separator"     => '.',
            "decimals"              => 2
        ];
        $currencies['CHF'] = [
            "name"                  => __("Franc suisse", parent::TRAD),
            "symbol_left"           => 'CHF',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => '\'',
            "decimal_separator"     => '.',
            "decimals"              => 2,
            'symbol_old'            => 'Fr.'
        ];
        $currencies['TWD'] = [
            "name"                  => __("Nouveau dollar de Taiwan", parent::TRAD),
            "symbol_left"           => '$',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2,
        ];
        $currencies['THB'] = [
            "name"                  => __("Baht thaïlandais", parent::TRAD),
            "symbol_left"           => '฿',
            "symbol_right"          => '',
            "symbol_padding"        => '',
            "thousand_separator"    => ',',
            "decimal_separator"     => '.',
            "decimals"              => 2,
        ];

        return $currencies;
    }
}