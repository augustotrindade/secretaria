<?php echo $this->element('page_header', array('title' => 'Tesouraria', 'sub_title'=>'Dízimos/Ofertas')); ?>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->FormAce->create('Entrada',array('action'=>'index')); ?>
		<?php echo $this->FormAce->input('Entrada.data_ini');?>
		<?php echo $this->FormAce->input('Entrada.data_fim');?>
		<div class="form-actions">
			<?php echo $this->FormAce->submit('Pesquisar',array('class'=>'btn btn-success','div'=>false));?>
			<input class="btn btn-info" type="button" value="Novo" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'entradas','action'=>'add')) ?>'">
		</div>
		<?php echo $this->FormAce->end(); ?>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="dataTables_wrapper" role="grid">
			<table class="table table-striped table-bordered table-hover dataTable" >
				<thead>
					<tr>
						<th width="50px"><?php echo $this->Paginator->sort('id');?></th>
						<th><?php echo $this->Paginator->sort('data');?></th>
						<th><?php echo $this->Paginator->sort('oferta');?></th>
						<th><?php echo $this->Paginator->sort('dizimo');?></th>
						<th width="90px" class="actions"><?php __('Actions');?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($entradas as $entrada) { ?>
					<tr>
						<td><?php echo $entrada['Entrada']['id'] ?></td>
						<td><?php echo $this->Formatacao->data($entrada['Entrada']['data']) ?></td>
						<td><?php echo $this->Formatacao->moeda($entrada['Entrada']['oferta']) ?></td>
						<td><?php echo $this->Formatacao->moeda($entrada['Entrada']['dizimo']) ?></td>
						<td></td>
					</tr>
					<?php } ?>
					<?php if (empty($entradas)) { ?>
					<tr>
						<td colspan="5">Não há itens a serem listados.</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php echo $this->element('paginate')?>
		</div>
	</div>
</div>