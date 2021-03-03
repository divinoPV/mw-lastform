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
class MwLastformMaster
{
    /*public*/ const /*string*/ TRAD = "lastform";

    public static function register()/*: void*/
    {
        add_action("gform_field_standard_settings", [MwLastformRules::class, "standardSettings"], 10, 2);
        add_action("gform_editor_js", [MwLastformRules::class, "editorJs"], 10);
        add_filter("gform_tooltips", [MwLastformRules::class, "tooltips"], 10);

        add_filter("gform_currencies", [MwLastformCurrency::class, "initCurrencies"]);
    }
}