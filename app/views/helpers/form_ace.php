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
	
// 	function checkbox($fieldName, $options = array()) {
// 		$output = parent::input($fieldName, array('label'=>false,'div'=>false));
// 		$output = $this->Html->tag('label',$output);
// 		$output = $this->Html->tag('div',$output,array('class'=>'controls'));
// 		$output = $this->Html->tag('div',$output,array('class'=>'control-group'));
// 		return $output;
// 	}
}

?>