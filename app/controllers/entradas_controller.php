<?php
class EntradasController extends AppController {

	var $name = 'Entradas';
	var $helpers = array('CakePtbr.Formatacao','Form');

	public function index() {
		$array = $this->montarFiltro();
		$this->set('array',$array);
		$this->set('entradas', $this->paginate('Entrada',$this->definirFiltroLike($array)));
	}

	function add() {
		$congregacoes = $this->Entrada->Congregacao->find('list');
		$this->set(compact('congregacoes'));
	}
	
	function save($id = null) {
		if (! $id) {
			if (! empty ( $this->data )) {
				if($this->Entrada->save ( $this->data )){
					$this->Session->setFlash ( __ ( 'Salvo com sucesso!', true ) );
					$this->redirect ( array ('action' => 'index' ) );
				} else {
					$this->Session->setFlash ( __ ( 'Erro ao salvar!', true ) );
					$congregacoes = $this->Entrada->Congregacao->find('list');
					$this->set(compact('congregacoes'));
					$this->render ( 'add' );
				}
			} else {
				$this->redirect ( array ('action' => 'add' ) );
			}
		} else {
			
		}
	}
	
	function edit($id = null) {
		if (! $id && empty ( $this->data )) {
			$this->Session->setFlash ( __ ( 'Inválido', true ) );
			$this->redirect ( array ('action' => 'index' ) );
		}
		if (empty ( $this->data )) {
			$this->data = $this->Entrada->read ( null, $id );
		}
		$congregacoes = $this->Entrada->Congregacao->find('list');
		$this->set(compact('congregacoes'));
		$this->render ( 'add' );
	}
	
}
?>