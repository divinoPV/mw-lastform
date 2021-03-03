<?php

namespace App;

use App\Rules\MwLastformRuleDateAnterieure;

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
final class MwLastformRules extends MwLastformMaster
{
    public static function standardSettings($position, $form_id)/*: void*/
    {
        MwLastformRuleDateAnterieure::dateAnterieureTemplate($position, $form_id);
    }

    public static function editorJs()/*: void*/
    {
        MwLastformRuleDateAnterieure::dateAnterieureScript();
    }

    public static function tooltips()/*: void*/
    {
        MwLastformRuleDateAnterieure::dateAnterieureTooltips();
    }
}