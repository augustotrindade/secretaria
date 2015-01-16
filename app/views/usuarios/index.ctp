<div class="page-header position-relative">
	<h1>
		Usuários 
		<small>
			<i class="icon-double-angle-right"></i>
			Lista de usuários
		</small>
	</h1>
</div>

<div class="row-fluid">
	<div class="span12">
		<?php 
			echo $this->FormAce->create('Usuario',array('action'=>'index','class'=>'form-horizontal'));
			echo $this->FormAce->input('nome', array('size'=>'40','maxlength'=>'255'));
		?>
		<div class="form-actions">
			<?php echo $this->FormAce->submit('Pesquisar',array('class'=>'btn btn-success','div'=>false));?>
			&nbsp;&nbsp;&nbsp;
			<input class="btn btn-info" type="button" value="Novo" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'usuarios','action'=>'add')) ?>'">
		</div>
		<?php 
			echo $this->FormAce->end(); 
			echo $this->Paginator->options(array('url' => array('nome'=>$nome)));
		?>
	</div>
</div>

<table class="table table-striped" >
<tr>
	<th width="50px"><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('nome');?></th>
	<th width="60px" class="actions"><?php __('Actions');?></th>
</tr>
<?php
foreach ($usuarios as $usuario) {
?>
	<tr>
		<td>
			<?php echo $usuario['Usuario']['id']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['nome']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link('', array('action'=>'edit', $usuario['Usuario']['id']),array('class'=>'glyphicon glyphicon-pencil')); ?>
			<?php echo $html->link('', array('action'=>'delete', $usuario['Usuario']['id']),array('class'=>'glyphicon glyphicon-remove'), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $usuario['Usuario']['id'])); ?>
		</td>
	</tr>
<?php } ?>
</table>
</div>

<div class="paging">
	<?php echo $paginator->prev('<< '.__('Anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('Próximo', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>

