<div class="usuarios index">
<h1><b>Cadastros</b> >> Usuários</h1>

<?php echo $form->create('Usuario',array('action'=>'index')); ?>
<?php echo $form->input('nome', array('size'=>'40','maxlength'=>'255')); ?>
<input type="submit" value="Pesquisar"> 
<input type="button" value="Novo" onclick="javascript:window.location.href='<?php echo $html->url(array('controller'=>'usuarios','action'=>'add')) ?>'">
<?php echo $form->end() ?>
<?php echo $paginator->options(array('url' => array('nome'=>$nome)));?>
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

