<?php

/**
 * A field type for displaying a range slider
 *
 * @package default
 * @author Nils Mielke, FEUERWASSER
 * @version v0.2 - 2021-06-03
 */
class PerchFieldType_frwssr_rangeslider extends PerchAPI_FieldType
{

    /**
     * Form fields for the edit page
     *
     * @param array $details
     * @return string
     */

    public function render_inputs($details=array())
    {

        $id = $this->Tag->input_id();
        $min = $this->Tag->min() ? $this->Tag->min() : 0;
        $max = $this->Tag->max() ? $this->Tag->max() : 10;
        $step = $this->Tag->step() ? $this->Tag->step() : 1;
        $separator = $this->Tag->separator() ? $this->Tag->separator() : '-';
        $value = $this->Form->get($details, $id, $this->Tag->default(), $this->Tag->post_prefix());
        $values = $value ? explode($separator, $value) : [$this->Tag->from() ? $this->Tag->from() : 4, $this->Tag->to() ? $this->Tag->to() : 6];
        $from = $values[0]; 
        $to = $values[1]; 

        $attributes = 'data-type="double" ';
        $attributes .= 'data-min="' . $min . '" ';
        $attributes .= 'data-max="' . $max . '" ';
        $attributes .= 'data-from="' . $from . '" ';
        $attributes .= 'data-to="' . $to . '" ';
        $attributes .= 'data-step="' . $step . '"';
        $attributes .= 'data-input-values-separator="' . $separator . '"';

        $s = $this->Form->text($id, $value, 'js-range-slider', '', false, $attributes);
        return $s;

    }
	public function add_page_resources() {
		$Perch = Perch::fetch();
        $ftPath = PERCH_LOGINPATH . '/addons/fieldtypes/frwssr_rangeslider/';
        $Perch->add_head_content('<link rel="stylesheet" type="text/css" href="' . $ftPath . '/ion.rangeSlider.min.css?v=2.3.1">');
		$Perch->add_foot_content('<script type="text/javascript" src="' . $ftPath . '/ion.rangeSlider.min.js?v=2.3.1"></script>');
		$Perch->add_foot_content('<script type="text/javascript" src="' . $ftPath . '/init.js?v=0.2"></script>');
	}

}