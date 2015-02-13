<?php echo $this->element('page_header', array('title' => 'Secretaria', 'sub_title'=>'Lista de cidades')); ?>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->FormAce->create('Membro',array('action'=>'index')); ?>
		<?php echo $this->FormAce->input('id', array('size'=>'10','maxlength'=>'5','type'=>'text')); ?>
		<?php echo $this->FormAce->input('nome', array('size'=>'40','maxlength'=>'255')); ?>
		<?php echo $this->FormAce->input('congregacao_id', array('empty'=>'.:: SELECIONE ::.','label'=>array('text'=>'Congregação'))); ?>
		<?php echo $this->FormAce->input('situacao', array('options'=>array(''=>'.:: SELECIONE ::.',true=>'ATIVO',false=>'INATIVO'),'label'=>array('text'=>'Situação'))); ?>
		<div class="form-actions">
			<input class="btn btn-success" type="submit" value="Pesquisar">
			<input class="btn btn-info" type="button" value="Novo" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'membros','action'=>'add')) ?>'">
		</div>
		<?php echo $this->FormAce->end() ?>
	</div>
</div>
<?php echo $this->Paginator->options(array('url' => array('nome'=>$nome,'id'=>$id,'congregacao_id'=>$congregacao,'situacao'=>$situacao)));?>

<?php echo $this->FormAce->create('Membro',array('action'=>'imprime'));?>
<div class="row-fluid">
	<div class="span12">
		<table class="table table-striped table-bordered table-hover" >
			<thead>
				<tr>
					<th width="25px">&nbsp;</th>
					<th width="50px"><?php echo $this->Paginator->sort('codigo');?></th>
					<th><?php echo $this->Paginator->sort('nome');?></th>
					<th width="110px"><?php echo $this->Paginator->sort('Congregação','Congregacao.nome');?></th>
					<th width="110px"><?php echo $this->Paginator->sort('Função','Funcao.nome');?></th>
					<th width="90px" class="actions"><?php __('Opções');?></th>
				</tr>
			</thead>
			<?php
			foreach ($membros as $membro):
			?>
				<tr>
					<td>
						<input type="checkbox" value="<?php echo $membro['Membro']['codigo'] ?>" name="cartao[]">
						<label class="lbl"></label>
					</td>
					<td style="text-align:center">
						<?php echo str_pad($membro['Membro']['codigo'],4,0,STR_PAD_LEFT); ?>
					</td>
					<td title="<?php echo $membro['Membro']['nome'] ?>">
						<?php echo substr($membro['Membro']['nome'],0,20).(strlen($membro['Membro']['nome'])>20?'...':''); ?>
					</td>
					<td style="text-align:center" title="<?php echo $membro['Congregacao']['nome'] ?>">
						<?php echo substr($membro['Congregacao']['nome'],0,8).(strlen($membro['Congregacao']['nome'])>8?'...':''); ?>
					</td>
					<td style="text-align:center" title="<?php echo $membro['Funcao']['nome'] ?>">
						<?php echo substr($membro['Funcao']['nome'],0,8).(strlen($membro['Funcao']['nome'])>8?'...':''); ?>
					</td>
					<td class="actions">
						<?php echo $this->Html->link('<i class="icon-edit"></i>', array('action'=>'edit', $membro['Membro']['id']),array('class'=>'btn btn-mini btn-info','escape'=>false)); ?>
						<?php 
							if ($membro['Membro']['situacao']==true){
								echo $this->Html->link('<i class="icon-trash"></i>', array('action'=>'inativar', $membro['Membro']['id']),array('class'=>'btn btn-mini btn-danger','escape'=>false), sprintf(__('Tem certeza que deseja inativar o item # %s?', true), $membro['Membro']['id']));
							} else {
								echo $this->Html->link('<i class="icon-check"></i>', array('action'=>'ativar', $membro['Membro']['id']),array('class'=>'btn btn-mini btn-primary','escape'=>false), sprintf(__('Tem certeza que deseja ativar o item # %s?', true), $membro['Membro']['id'])); 
							}
						?>
					</td>
				</tr>
			<?php endforeach; ?>
			<tr>
				<th colspan="6"><br><?php echo $this->Paginator->counter('<b>%current%</b> de <b>%count%</b> item(ns) listado(s)'); ?></th>
			</tr>
			<tr>
				<th colspan="6"><?php echo $this->FormAce->submit('Imprimir',array( 'class'=>'btn btn-success')) ?></th>
			</tr>
		</table>
	</div>
</div>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('Anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('Próximo', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>

<?php echo $this->FormAce->end();?>
