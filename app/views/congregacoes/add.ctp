<?php echo $this->element('page_header', array('title' => 'Secretaria', 'sub_title'=>'Cadastro de congregações')); ?>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->FormAce->create('Congregacao',array('action'=>'salvar'));?>
		<?php echo $this->FormAce->input('id'); ?>
		<?php echo $this->FormAce->input('nome', array('size'=>'40','maxlength'=>'255')); ?>
		<?php echo $this->FormAce->input('endereco', array('size'=>'40','maxlength'=>'255','label'=>array('text'=>'Endereço'))); ?>
		<div class="form-actions">
			<input type="submit" value="Salvar" class="btn btn-success"> 
			<input type="button" value="Voltar" class="btn btn-info" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'congregacoes','action'=>'index')) ?>'">
		</div>
		<?php echo $this->FormAce->end();?>
	</div>
</div>
