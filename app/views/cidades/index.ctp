<?php echo $this->element('page_header', array('title' => 'Secretaria', 'sub_title'=>'Lista de cidades')); ?>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->FormAce->create('Cidade',array('action'=>'index')); ?>
		<?php echo $this->FormAce->input('nome', array('size'=>'40','maxlength'=>'255')); ?>
		<div class="form-actions">
			<input class="btn btn-success" type="submit" value="Pesquisar">
			<input class="btn btn-info" type="button" value="Novo" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'cidades','action'=>'add')) ?>'">
		</div>
		<?php echo $this->Form->end(); ?>
	</div>
</div>
<?php echo $this->Paginator->options(array('url' => array('nome'=>$nome)));?>

<div class="row-fluid">
	<div class="span12">
		<div class="dataTables_wrapper" role="grid">
			<table class="table table-striped table-bordered table-hover" >
				<tr>
					<th width="50px"><?php echo $this->Paginator->sort('id');?></th>
					<th><?php echo $this->Paginator->sort('nome');?></th>
					<th><?php echo $this->Paginator->sort('uf');?></th>
					<th width="90px" class="actions"><?php __('Actions');?></th>
				</tr>
				<?php
				foreach ($cidades as $cidade) {
				?>
				<tr>
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
						<ul class="inline">
							<?php echo $this->Html->link('<i class="icon-edit"></i>', array('action'=>'edit', $cidade['Cidade']['id']),array('class'=>'btn btn-mini btn-info','escape'=>false)); ?>
							<?php echo $this->Html->link('<i class="icon-trash"></i>', array('action'=>'delete', $cidade['Cidade']['id']),array('class'=>'btn btn-mini btn-danger','escape'=>false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $cidade['Cidade']['id'])); ?>
						</ul>
					</td>
				</tr>
				<?php } ?>
			</table>
			<?php echo $this->element('paginate')?>
		</div>
	</div>
</div>