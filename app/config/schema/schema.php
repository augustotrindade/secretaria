<?php 
/* App schema generated on: 2015-02-02 22:37:57 : 1422923877*/
class AppSchema extends CakeSchema {
	var $name = 'App';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $centro_custos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'nome' => array('column' => 'nome', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $cidades = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'uf' => array('type' => 'string', 'null' => false, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $conferentes = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'membro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'entrada_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tesoureiro' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $congregacoes = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'endereco' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $consagracoes = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'membro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'funcao_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'data_consagracao' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'uf' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cidade_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'nome_igreja' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nome_pastor' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $dizimos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'membro_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'entrada_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'valor' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '12,2'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'entrada_id' => array('column' => 'entrada_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $entradas = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'congregacao_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'numero_talao' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'oferta' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '12,2'),
		'dizimo' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '12,2'),
		'data' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'congregacao_id' => array('column' => 'congregacao_id', 'unique' => 0), 'usuario_id' => array('column' => 'usuario_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $fornecedores = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'razao_social' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nome_fantasia' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cpf_cnpj' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 14, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $funcoes = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'abreviacao' => array('type' => 'string', 'null' => false, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'obreiro' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $membros = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'congregacao_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'funcao_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sexo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'data_nascimento' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'uf_nascimento' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cidadenascimento_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'estado_civil' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nome_conjuge' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'data_batismo_aguas' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'data_batismo_espirito' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nome_pai' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nome_mae' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'num_filhos' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'nome_filhos' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cep' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 9, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'endereco' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'quadra' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lote' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'uf_endereco' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cidadeendereco_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'bairro' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telefone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 13, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'celular' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 13, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numero_rg' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'org_exp_rg' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'data_exp_rg' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cpf' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 14, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'foto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'situacao' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'codigo' => array('column' => 'codigo', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $ocorrencias = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'membro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'data_ocorrencia' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'pequena_descricao' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descricao' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $saidas = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'congregacao_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'centro_custo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'fornecedor_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'data' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'valor' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '12,2'),
		'descricao' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numero_nf' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'id' => array('column' => 'id', 'unique' => 0), 'usuario_id' => array('column' => 'usuario_id', 'unique' => 0), 'congregacao_id' => array('column' => 'congregacao_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
	var $usuarios = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'login' => array('type' => 'string', 'null' => false, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'senha' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'admin' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'data_log' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);
}
?>