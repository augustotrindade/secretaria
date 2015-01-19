<?php
class AppController extends Controller {

	var $helpers = array('Javascript','Html','Session','FormAce');
	var $paginate = array('limit' => 50);
	
	function checkAdminSession() {
		if (!$this->Session->check('logado')) {
			$this->Session->write('url_r',$this->params['url']['url']);
			$this->Session->setFlash('Você não tem acesso a essa área');
			$this->redirect('/login/');
			exit;
		}
	}
	
	function beforeFilter() {
		if (!($this->params['controller']=='login' && ($this->params['action']=='index' || $this->params['action']=='logar'))) {
			$this->checkAdminSession();
		}
	}
	
	function montarFiltro(){
		$retorno = array();
		if(isset($this->data)){
			if(count($this->data)>0){
				foreach ($this->data as $key => $value){
					if(count($value)>0){
						foreach ($value as $k => $v){
							$retorno[$key.'.'.$k]=$v;
						}
					}
				}
			}
		} elseif(isset($this->params['named'])) {
			$params = $this->params['named'];
			if(isset($params['sort'])){
				unset($params['sort']);
			}
			if(isset($params['direction'])){
				unset($params['direction']);
			}
			if(isset($params['page'])){
				unset($params['page']);
				if(count($params)>0){
					foreach ($params as $k => $v){
						if(substr($k,0,7)=="update_") {
							continue;
						}
						$retorno[$k]=$v;
						$aux = explode('.',$k);
						$this->data[$aux[0]][$aux[1]]=$v;
					}
				}
			}
		}
		return $retorno;
	}
	
	function definirFiltroLike($array){
		$aux = array();
		$between = array();
		if (is_array($array)){
			foreach ($array as $k => $v ){
				if($v!=''){
					if(substr($k,-4)=='_ini'){
						$between[$k] = $v;
					}elseif(substr($k,-4)=='_fim'){
						$between[$k] = $v;
					}elseif(substr($k,-3)=='_id'){
						$aux[$k] = $v;
					}elseif(substr($k,-5)=='_data'){
						$aux[substr($k,0,-5)]=$this->formataData($v);
					}else{
						$aux[$k.' LIKE'] = '%'.$v.'%';
					}
				}
			}
			$aux = array_merge($aux, $this->filtroBetween($between));
		}
		return $aux;
	}
	
	function filtroBetween($array){
		$aux = array();
		$between = array();
		if(is_array($array)){
			foreach ($array as $k=>$v){
				$aux[substr($k,0,-4)][substr($k,-3)]=$v;
			}
			foreach ($aux as $k=>$v){
				$between[$k .' >= '] = $this->verificaTipo($k, $v['ini'],'ini');
				$between[$k .' <= '] = $this->verificaTipo($k, $v['fim'],'fim');
			}
		}
		return $between;
	}
	
	function verificaTipo($campo,$valor,$bw=null){
		$t = explode('.', $campo);
		switch ($t[1]){
			case 'data_hora':
				$valor = $this->formataDataHora($valor,$bw);
				break;
			case 'data':
			case 'created':
				$valor = $this->formataData($valor);
				break;
			default:
				if(substr($t[1],0,4)=='data'){
					$valor = $this->formataData($valor);
				}
		}
		return $valor;
	}
	
	function formataDataHora($dataHora,$bw){
		$aux = explode(' ', $dataHora);
		$hora='';
		if(count($aux)==1){
			list($data) = $aux;
			$hora = ($bw=='ini' ? '00:00:00' : '23:59:59');
		} else {
			list($data, $hora) = $aux;
		}
		if(strpos($data, "-")){
			$aux = explode("-", $data);
			$data = $aux[2].'/'.$aux[1].'/'.$aux[0];
		} elseif (strpos($data, "/")){
			$aux = explode("/", $data);
			$data = $aux[2].'-'.$aux[1].'-'.$aux[0];
		}
		return $data.' '.$hora;
	}
	
	function formataData($data){
		if(strpos($data, "-")){
			$aux = explode("-", $data);
			$data = $aux[2].'/'.$aux[1].'/'.$aux[0];
		} elseif (strpos($data, "/")){
			$aux = explode("/", $data);
			$data = $aux[2].'-'.$aux[1].'-'.$aux[0];
		}
		return $data;
	}

}
?>