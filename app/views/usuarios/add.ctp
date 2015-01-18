<?php echo $this->element('page_header', array('title' => 'Secretaria', 'sub_title'=>'Cadastro de usuários')); ?>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->FormAce->create('Usuario',array('action'=>'salvar','class'=>'form-horizontal'));?>
		<?php echo $this->FormAce->input('id'); ?>
		<?php echo $this->FormAce->input('nome', array('size'=>'40','maxlength'=>'255')); ?>
		<?php echo $this->FormAce->input('login', array('size'=>'20','maxlength'=>'40')); ?>
		<?php echo $this->FormAce->input('senha', array('size'=>'20','maxlength'=>'40','type'=>'password')); ?>
		<?php echo $this->FormAce->checkbox('admin', array('label'=>'Admin')); ?>
		
		<div class="form-actions">
			<input type="submit" value="Salvar" class="btn btn-success"> 
			<input type="button" value="Voltar" class="btn btn-info" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'usuarios','action'=>'index')) ?>'">
		</div>
		<?php echo $this->FormAce->end();?>
	</div>
</div>
