<?php echo $this->element('page_header', array('title' => 'Secretaria', 'sub_title'=>'Aniversariantes')); ?>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->FormAce->create('Membro',array('action'=>'aniversariantes'));?>
		<?php echo $this->FormAce->input('data', array('type'=>'date','dateFormat' => 'M','empty'=>'.:: SELECIONE ::.','label'=>'Mês')); ?>
		<?php echo $this->FormAce->input('congregacao_id',array('empty'=>'.:: SELECIONE ::.','label'=>'Congregação')); ?>
		<div class="form-actions">
			<input class="btn btn-success" type="submit" value="Pesquisar"> 
			<?php if ($this->data){ ?> <input class="btn btn-info" type="button" value="Imprimir Cartas" style="width:180px" onclick="javascript: window.location.href='<?php echo $this->Html->url(array('controller'=>'membros','action'=>'aniversariantesCarta','mes'=>$this->data['Membro']['data']['month'],'congregacao_id'=>$this->data['Membro']['congregacao_id'])) ?>'">  <?php }?>
		</div>
		<?php echo $this->FormAce->end();?>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<table class="table table-striped table-bordered table-hover" >
			<tr>
				<th width="50px">ID</th>
				<th>NOME</th>
				<th width="100px">IDADE</th>
				<th width="110px">DATA NASC.</th>
				<th width="200px">CONGREGAÇÃO</th>
			</tr>
			<?php
			foreach ($membros as $membro) {
			?>
				<tr>
					<td style="text-align:center">
						<?php echo str_pad($membro['Membro']['id'],4,0,STR_PAD_LEFT); ?>
					</td>
					<td>
						<?php echo $membro['Membro']['nome']; ?>
					</td>
					<td style="text-align:center">
						<?php echo $this->Idade->idade($membro['Membro']['data_nascimento']); ?> ANOS
					</td>
					<td style="text-align:center">
						<?php echo $this->Formatacao->data($membro['Membro']['data_nascimento']); ?>
					</td>
					<td style="text-align:center">
						<?php echo $membro['Congregacao']['nome']; ?>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>