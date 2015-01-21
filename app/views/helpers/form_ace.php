<?php
App::import('Helper','Form');
class FormAceHelper extends FormHelper {

	function create($model = null, $options = array()) {
		$options = array_merge(
			array('class'=>'form-horizontal'),
			$options
		);
		return parent::create($model, $options);
	}
	
	function input($fieldName, $options = array()) {
		$options = array_merge(
			array('div'=>array('class'=>'control-group'),'label'=>array('class'=>'control-label')),
			$options
		);
		
		if(!is_array($options['label'])){
			$options['label'] = array('text'=>$options['label']);
		}
		
		if(!isset($options['label']['class']) ){
			$options['label']['class'] = 'control-label';
		}
		
		return parent::input($fieldName, $options);
	}
	
	function checkbox($fieldName, $options = array()) {
		$options = array_merge(
			array('type'=>'checkbox'),
			$options
		);
		$label = null;
		if (isset($options['label'])) {
			$label = $options['label'];
			unset($options['label']);
		}
		$label = $this->_inputLabel($fieldName, $label, $options);
		$output = parent::checkbox($fieldName, array('label'=>false,'div'=>false));
		$output .= '<label class="lbl"></label>';
		$output = $this->Html->tag('div',$output,array('class'=>'controls'));
		$output = '<label class="control-label" for="form-input-readonly">'.$label.'</label>' . $output;
		$output = $this->Html->tag('div',$output,array('class'=>'control-group'));
		return $output;
	}
}

?>