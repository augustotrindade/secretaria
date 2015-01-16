<?php
App::import('Helper','Form');
class FormAceHelper extends FormHelper {
	
	function input($fieldName, $options = array()) {
		
		$options = array_merge(
			array('div'=>array('class'=>'control-group'),'label'=>array('class'=>'control-label')),
			$options
		);
		
		return parent::input($fieldName, $options);
	}
}

?>