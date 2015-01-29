<?php echo $this->element('page_header', array('title' => 'Secretaria', 'sub_title'=>'Cadastro de membros')); ?>

<script>
jQuery(document).ready(function(){
	jQuery(function($){
		$('.input-mask-phone').mask('(99) 9999-9999');
		$(".cpf").mask("999.999.999-99");
	});
	jQuery(".uf").change(function(){
		var SelcCidade = this.id;
		jQuery.post("<?php echo $this->Html->url(array('action'=>'cidadesXml')); ?>", {uf: jQuery("#"+SelcCidade).val()}, function(xml){
			jQuery("."+SelcCidade).html('');
			var opt = '';
			opt += '<option value="">.:: SELECIONE ::.</option>';
			jQuery('cidade',xml).each(function(){
				opt += '<option value="'+jQuery('id',this).text()+'">'+jQuery('nome',this).text()+'</option>';
			});
			jQuery("."+SelcCidade).html(opt);
		});
	});
});
</script>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->FormAce->create('Membro',array('action'=>'salvar','enctype'=>'multipart/form-data'));?>
		<?php echo $this->FormAce->input('id'); ?>
		<?php echo $this->FormAce->input('foto', array('type'=>'hidden','id'=>'foto')); ?>
		<?php echo $this->FormAce->input('upload', array('type'=>'hidden','id'=>'upload','value'=>'false')); ?>
		<div onclick="window.open('<?php echo $this->Html->url(array('controller'=>'foto','action'=>'index',(isset($this->data['Membro']['id']) ? $this->data['Membro']['id'] : '' ))); ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=800,height=600');return false;">
			<?php echo $this->Html->image('/fotos_cartao/'.($this->data['Membro']['foto'] ? $this->data['Membro']['foto'] : 'sem_foto.gif'),array('width'=>'100px','border'=>'1px','id'=>'imgFoto')); ?>
		</div>

<fieldset>
	<legend>Dados pessoais</legend>
	<?php echo $this->FormAce->input('codigo', array('maxlength'=>'10','class'=>'input-small')); ?>
	<?php echo $this->FormAce->input('nome', array('size'=>'40','maxlength'=>'255','class'=>'input-xxlarge')); ?>
	<?php echo $this->FormAce->input('sexo',array('type'=>'select','empty'=>'.:: SELECIONE ::.','options'=>array('M'=>'Masculino','F'=>'Femenino'))); ?>
	<?php echo $this->FormAce->input('data_nascimento', array('dateFormat' => 'DMY','minYear' => 1900, 'maxYear' => date('Y')-10,'separator' =>' / ','class'=>'input-small')); ?>
	<?php echo $this->FormAce->input('uf_nascimento',array('type'=>'select','empty'=>'.:: SELECIONE ::.','options'=>$estados,'label'=>'UF','class'=>'uf')); ?>
	<?php echo $this->FormAce->input('cidadenascimento_id',array('empty'=>'.:: SELECIONE ::.','options'=>$cidades,'label'=>'Cidade','class'=>'MembroUfNascimento')); ?>
	<?php echo $this->FormAce->input('estado_civil',array('type'=>'select','empty'=>'.:: SELECIONE ::.','options'=>array('S'=>'Solteiro','C'=>'Casado','D'=>'Divorciado','V'=>'Viúvo'))); ?>
	<?php echo $this->FormAce->input('nome_conjuge', array('size'=>'40','maxlength'=>'255')); ?>
	<?php echo $this->FormAce->input('nome_pai', array('size'=>'40','maxlength'=>'255','class'=>'input-xxlarge')); ?>
	<?php echo $this->FormAce->input('nome_mae', array('size'=>'40','maxlength'=>'255','label'=>'Nome Mãe','class'=>'input-xxlarge')); ?>
	<?php echo $this->FormAce->input('num_filhos', array('size'=>'5','maxlength'=>'2','label'=>'Numero de Filhos','class'=>'input-small')); ?>
	<?php echo $this->FormAce->input('nome_filhos', array('label'=>'Nome dos Filhos','rows'=>'3','cols'=>'40','class'=>'input-xxlarge')); ?>
</fieldset>
<fieldset>
	<legend>Endereço Residencial</legend>
	<?php echo $this->FormAce->input('cep', array('size'=>'15','maxlength'=>'10','class'=>'cep')); ?>
	<?php echo $this->FormAce->input('endereco', array('size'=>'60','maxlength'=>'255','label'=>'Endereço','class'=>'input-xxlarge')); ?>
	<?php echo $this->FormAce->input('quadra', array('size'=>'20','maxlength'=>'50')); ?>
	<?php echo $this->FormAce->input('lote', array('size'=>'20','maxlength'=>'50')); ?>
	<?php echo $this->FormAce->input('uf_endereco',array('type'=>'select','empty'=>'.:: SELECIONE ::.','options'=>$estados,'label'=>'UF','class'=>'uf')); ?>
	<?php echo $this->FormAce->input('cidadeendereco_id',array('empty'=>'.:: SELECIONE ::.','options'=>$cidadesendereco,'label'=>'Cidade','class'=>'MembroUfEndereco')); ?>
	<?php echo $this->FormAce->input('bairro',array('size'=>'30','maxlength'=>'100')); ?>
</fieldset>
<fieldset>
	<legend>Contato</legend>
	<?php echo $this->FormAce->input('telefone', array('size'=>'15','maxlength'=>'13','class'=>'telefone input-mask-phone')); ?>
	<?php echo $this->FormAce->input('celular', array('size'=>'15','maxlength'=>'13','class'=>'telefone input-mask-phone')); ?>
</fieldset>
<fieldset>
	<legend>Documentos</legend>
	<?php echo $this->FormAce->input('numero_rg', array('size'=>'20','maxlength'=>'50','label'=>'Identidade')); ?>
	<?php echo $this->FormAce->input('org_exp_rg', array('size'=>'20','maxlength'=>'50','label'=>'Órgão Expedidor')); ?>
	<?php echo $this->FormAce->input('data_exp_rg', array('size'=>'20','maxlength'=>'50','label'=>'Data de Emissão')); ?>
	<?php echo $this->FormAce->input('cpf', array('size'=>'20','maxlength'=>'14','class'=>'cpf')); ?>
</fieldset>
<fieldset>
	<legend>Igreja</legend>
	<?php echo $this->FormAce->input('congregacao_id',array('label'=>'Congregação','empty'=>'.:: SELECIONE ::.')); ?>
	<?php echo $this->FormAce->input('funcao_id',array('label'=>'Função','empty'=>'.:: SELECIONE ::.')); ?>
	<?php echo $this->FormAce->input('data_batismo_aguas', array('size'=>'20','maxlength'=>'10','label'=>'Data Batismo Águas')); ?>
	<?php echo $this->FormAce->input('data_batismo_espirito', array('size'=>'20','maxlength'=>'10','label'=>'Data Batismo Espírito')); ?>
	<?php echo $this->FormAce->input('situacao',array('type'=>'hidden')); ?>
</fieldset>
<?php if (isset($this->data['Membro']['id'])){ ?>
<!-- <fieldset> -->
<!-- 	<legend>Histórico</legend> -->
	<?php //echo $this->Html->link('Consagrações',array('controller'=>'consagracoes','action'=>'index','id'=>$this->data['Membro']['id']),array('onclick'=>"window.open(this.href,'page','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=600,height=400');return false;")); ?><br>
	<?php //echo $this->Html->link('Ocorrencias',array('controller'=>'ocorrencias','action'=>'index','id'=>$this->data['Membro']['id']),array('onclick'=>"window.open(this.href,'page2','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=600,height=400');return false;")); ?>
<!-- </fieldset> -->
<?php } ?>
<div class="form-actions">
	<input class="btn btn-success" type="submit" value="Salvar">
	<input class="btn btn-info" type="button" value="Voltar" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'membros','action'=>'index')) ?>'">
</div>
<?php echo $this->FormAce->end();?>
	</div>
</div>
