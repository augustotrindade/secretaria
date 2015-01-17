<?php echo $this->element('page_header', array('title' => 'Usuários', 'sub_title'=>'Cadastro de usuários')); ?>

<div class="usuarios form">
<?php echo $this->FormAce->create('Usuario',array('action'=>'salvar','class'=>'form-horizontal'));?>
<?php echo $this->FormAce->input('id'); ?>
<?php echo $this->FormAce->input('nome', array('size'=>'40','maxlength'=>'255')); ?>
<?php echo $this->FormAce->input('login', array('size'=>'20','maxlength'=>'40')); ?>
<?php echo $this->FormAce->input('senha', array('size'=>'20','maxlength'=>'40','type'=>'password')); ?>
<?php echo $this->FormAce->checkbox('admin', array('label'=>'Admin')); ?>
<input type="submit" value="Salvar"> <input type="button" value="Voltar" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'usuarios','action'=>'index')) ?>'">
<?php echo $this->FormAce->end();?>
</div>
