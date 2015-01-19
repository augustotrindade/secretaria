<?php echo $this->element('page_header', array('title' => 'Secretaria', 'sub_title'=>'Lista de usuários')); ?>

<div class="row-fluid">
	<div class="span12">
		<?php
			echo $this->FormAce->create('Usuario',array('action'=>'index'));
			echo $this->FormAce->input('nome', array('size'=>'40','maxlength'=>'255'));
		?>
		<div class="form-actions">
			<?php echo $this->FormAce->submit('Pesquisar',array('class'=>'btn btn-success','div'=>false));?>
			<input class="btn btn-info" type="button" value="Novo" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'usuarios','action'=>'add')) ?>'">
		</div>
		<?php
			echo $this->FormAce->end();
			echo $this->Paginator->options(array('url' => array('nome'=>$nome)));
		?>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<table class="table table-striped table-bordered table-hover" >
			<thead>
				<tr>
					<th width="50px"><?php echo $this->Paginator->sort('id');?></th>
					<th><?php echo $this->Paginator->sort('nome');?></th>
					<th width="90px" class="actions"><?php __('Actions');?></th>
				</tr>
			</thead>
			<tbody>
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
						<ul class="inline">
							<?php echo $this->Html->link('<i class="icon-edit"></i>', array('controller'=>'usuarios','action'=>'edit', $usuario['Usuario']['id']),array('class'=>'btn btn-mini btn-info','escape'=>false)); ?>
							<?php echo $this->Html->link('<i class="icon-trash"></i>', array('controller'=>'usuarios','action'=>'delete', $usuario['Usuario']['id']),array('class'=>'btn btn-mini btn-danger','escape'=>false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $usuario['Usuario']['id'])); ?>
						</ul>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('Anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('Próximo', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>

