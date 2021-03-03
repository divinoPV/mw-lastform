<?php

namespace App\Rules;

final class MwLastformRuleDateAnterieure
{
    public static function dateAnterieureTemplate($position, $form_id)/*: void*/
    {
        if ($position === -1):
            ?>
            <li class="date_anterieure_setting field_setting">
                <label for="field_admin_label" class="section_label">
                    <?php esc_html_e('Dates antérieure', 'gravityforms'); ?>
                    <?php gform_tooltip('form_field_date_anterieure_value') ?>
                </label>
                <input type="checkbox" id="field_date_anterieure_value"
                       onclick="SetFieldProperty('dateAnterieure', this.checked);"
                />
                Ne pas autoriser les dates antérieure à la date du jour
            </li>
        <?php
        endif;
    }

    public static function dateAnterieureScript()/*: void*/
    {
        ?>
        <script type='text/javascript'>
            //adding setting to fields of type "text"
            fieldSettings.date += ', .date_anterieure_setting';

            //binding to the load field settings event to initialize the checkbox
            jQuery(document).on('gform_load_field_settings', function (event, field, form) {
                jQuery('#field_date_anterieur_value').attr('checked', field.dateAnterieure === true);
                // jQuery("#input_" + form.id + '-' + field.id).datepicker({ minDate: 0});
            });
        </script>
        <?php
    }

    public static function dateAnterieureTooltips()/*: array*/
    {
        $tooltips['form_field_date_anterieure_value'] = "
            <h6>Dates antérieure</h6>
            Cocher cette case pour enlever les dates antérieure à la date du jour
        ";

        return $tooltips;
    }

    /*jQuery(document).ready(function() {
        gform.addFilter('gform_datepicker_options_pre_init', function (optionsObj, formId, fieldId) {
            // Apply to field 2 only
            if (formId === 1 && fieldId === 4) {
                optionsObj.minDate = 0;
                console.log(formId, fieldId, optionsObj.minDate)
            }

            return optionsObj;
        });
    });*/
    /*jQuery(document).ready(function ($) {
        HandleUnsavedChanges('#gform_form_settings');
        jQuery('.datepicker').datepicker({showOn: 'both', changeMonth: true, changeYear: true, buttonImage: "<?php echo GFCommon::get_base_url() ?>/images/calendar.png", buttonImageOnly: true, dateFormat: 'mm/dd/yy'});
        ToggleConditionalLogic(true, 'form_button');
        jQuery('tr:hidden .gf_animate_sub_settings').hide();
        jQuery(document).trigger('gform_load_form_settings', [form]);
    });*/
}