<?php
class EntradasController extends AppController {

	var $name = 'Entradas';
	var $helpers = array('CakePtbr.Formatacao');

	public function index() {
		$array = $this->montarFiltro();
		$this->set('array',$array);
		$this->set('entradas', $this->paginate('Entrada',$this->definirFiltroLike($array)));
	}

	function add() {
		$congregacoes = $this->Entrada->Congregacao->find('list');
		$this->set(compact('congregacoes'));
	}
	
}
?>