<?php echo $this->element('page_header', array('title' => 'Secretaria', 'sub_title'=>'Relatório de Membros/Congregação')); ?>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->FormAce->create('Congregacao',array('action'=>'membrosCongregacao'));?>
		<?php echo $this->FormAce->input('congregacao_id',array('empty'=>'.:: SELECIONE ::.','label'=>'Congregações')); ?>
		<div class="form-actions">
			<input class="btn btn-success" type="submit" value="Imprimir">
		</div> 
		<?php echo $this->FormAce->end();?>
	</div>
</div>