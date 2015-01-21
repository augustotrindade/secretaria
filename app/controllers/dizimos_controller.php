<?php
class DizimosController extends AppController {

	var $name = 'Dizimos';
	var $helpers = array('Form');
	
	public function add(){
		$this->layout = 'ajax';
		$pos = $this->params['url']['pos'];
		$this->set(compact('pos'));
	}

}
