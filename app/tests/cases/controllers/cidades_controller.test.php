<?php 
/* SVN FILE: $Id$ */
/* CidadesController Test cases generated on: 2010-03-25 19:14:50 : 1269555290*/
App::import('Controller', 'Cidades');

class TestCidades extends CidadesController {
	var $autoRender = false;
}

class CidadesControllerTest extends CakeTestCase {
	var $Cidades = null;

	function startTest() {
		$this->Cidades = new TestCidades();
		$this->Cidades->constructClasses();
	}

	function testCidadesControllerInstance() {
		$this->assertTrue(is_a($this->Cidades, 'CidadesController'));
	}

	function endTest() {
		unset($this->Cidades);
	}
}
?>