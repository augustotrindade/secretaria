<?php echo $this->element('page_header', array('title' => 'Secretaria', 'sub_title'=>'Lista de funções')); ?>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->FormAce->create('Funcao',array('action'=>'index')); ?>
		<?php echo $this->FormAce->input('nome', array('size'=>'40','maxlength'=>'255')); ?>
		<div class="form-actions">
			<input class="btn btn-success" type="submit" value="Pesquisar">
			<input class="btn btn-info" type="button" value="Novo" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'funcoes','action'=>'add')) ?>'">
		</div>
		<?php echo $this->FormAce->end() ?>
	</div>
</div>

<?php echo $this->Paginator->options(array('url' => array('nome'=>$nome)));?>
<div class="row-fluid">
	<div class="span12">
		<table class="table table-striped table-bordered table-hover" >
			<tr>
				<th width="50px"><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('nome');?></th>
				<th><?php echo $this->Paginator->sort('Abreviação','abreviacao');?></th>
				<th width="160px" class="actions"><?php __('Actions');?></th>
			</tr>
			<?php
			foreach ($funcoes as $funcao) {
			?>
			<tr>
				<td>
					<?php echo $funcao['Funcao']['id']; ?>
				</td>
				<td>
					<?php echo $funcao['Funcao']['nome']; ?>
				</td>
				<td>
					<?php echo $funcao['Funcao']['abreviacao']; ?>
				</td>
				<td class="actions">
					<ul class="inline">
						<li><?php echo $this->Html->link('<i class="icon-edit"></i>', array('action'=>'edit', $funcao['Funcao']['id']),array('class'=>'btn btn-mini btn-info','escape'=>false)); ?></li>
						<li><?php echo $this->Html->link('<i class="icon-trash"></i>', array('action'=>'delete', $funcao['Funcao']['id']),array('class'=>'btn btn-mini btn-danger','escape'=>false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $funcao['Funcao']['id'])); ?></li>
					</ul>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('Anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('Próximo', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>

