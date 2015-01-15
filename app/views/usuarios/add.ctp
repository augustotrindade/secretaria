<h1 class="title"><b><?php echo $html->link('Cadastros',array('controller'=>'usuarios','action'=>'index')) ?></b> >> Usuários</h1>
<div class="usuarios form">
<?php echo $form->create('Usuario',array('action'=>'salvar'));?>
<?php echo $form->input('id'); ?>
			<?php echo $form->input('nome', array('size'=>'40','maxlength'=>'255')); ?>
			<?php echo $form->input('login', array('size'=>'20','maxlength'=>'40')); ?>
			<?php echo $form->input('senha', array('size'=>'20','maxlength'=>'40','type'=>'password')); ?>
			<?php echo $form->input('admin'); ?>
			<input type="submit" value="Salvar"> <input type="button" value="Voltar" onclick="javascript:window.location.href='<?php echo $html->url(array('controller'=>'usuarios','action'=>'index')) ?>'">
		</tr>
	</table>
<?php echo $form->end();?>
</div>
