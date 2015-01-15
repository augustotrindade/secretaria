<div class="cidades index">
<h1 class="title"><b>Cadastros</b> >> Cidades</h1>
<?php $session->flash(); ?>
<? echo $form->create('Cidade',array('action'=>'index')); ?>
		<?php echo $form->input('nome', array('size'=>'40','maxlength'=>'255')); ?>
		<input type="submit" value="Pesquisar"> <input type="button" value="Novo" onclick="javascript:window.location.href='<?= $html->url(array('controller'=>'cidades','action'=>'add')) ?>'">
<? echo $form->end() ?>
<?= $paginator->options(array('url' => array('nome'=>$nome)));?>
<table cellpadding="0" cellspacing="0">
<tr>
	<th width="50px"><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('nome');?></th>
	<th><?php echo $paginator->sort('uf');?></th>
	<th width="160px" class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($cidades as $cidade):
	$class = null;
	if ($i++ % 2 != 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $cidade['Cidade']['id']; ?>
		</td>
		<td>
			<?php echo $cidade['Cidade']['nome']; ?>
		</td>
		<td style="text-align:center">
			<?php echo $cidade['Cidade']['uf']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Editar', true), array('action'=>'edit', $cidade['Cidade']['id'])); ?>
			<?php echo $html->link(__('Excluir', true), array('action'=>'delete', $cidade['Cidade']['id']), null, sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $cidade['Cidade']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>

<div class="paging">
	<?php echo $paginator->prev('<< '.__('Anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('Próximo', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>

