<?php echo $this->element('page_header', array('title' => 'Tesouraria', 'sub_title'=>'Cadastro de Dízimos/Ofertas')); ?>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->FormAce->create('Entrada',array('action'=>'salvar'));?>
		<?php echo $this->FormAce->input('id'); ?>
		<?php echo $this->FormAce->input('congregacao_id',array('label'=>'Congregação')); ?>
		<?php echo $this->FormAce->input('data', array('dateFormat' => 'DMY','separator' =>' / ','maxlength'=>'10','class'=>'input-small')); ?>
		<?php echo $this->FormAce->input('numero_talao', array('maxlength'=>'10','label'=>'Número do talão')); ?>
		<?php echo $this->FormAce->input('oferta'); ?>
		<div class="form-actions">
			<input type="submit" value="Salvar" class="btn btn-success"> 
			<input type="button" value="Voltar" class="btn btn-info" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'entradas','action'=>'index')) ?>'">
		</div>
		<?php echo $this->FormAce->end();?>
	</div>
</div>