<?php echo $this->element('page_header', array('title' => 'Tesouraria', 'sub_title'=>'Cadastro de Dízimos/Ofertas')); ?>

<div class="row-fluid">
	<div class="span12">
		<?php echo $this->FormAce->create('Entrada',array('action'=>'save'));?>
		<?php echo $this->FormAce->input('id'); ?>
		<?php echo $this->FormAce->input('congregacao_id',array('label'=>'Congregação')); ?>
		<?php echo $this->FormAce->input('data', array('dateFormat' => 'DMY','separator' =>' / ','maxlength'=>'10','class'=>'input-small')); ?>
		<?php echo $this->FormAce->input('numero_talao', array('maxlength'=>'10','label'=>'Número do talão')); ?>
		<?php echo $this->FormAce->input('oferta'); ?>

		<h2>Dizimistas <button id="btn_add_dizimista" class="btn btn-info btn-mini" type="button"><i class="fa fa-plus"></i></button></h2>

		<div id="ajax_dizimistas">
			<?php
			if(isset($this->data['Dizimo']) && count($this->data['Dizimo'])>0){
				foreach ($this->data['Dizimo'] as $key => $value) {
					echo $this->element('dizimos/add',array('pos'=>$key));
				}
			}
			?>
		</div>
		<div class="form-actions">
			<input type="submit" value="Salvar" class="btn btn-success">
			<input type="button" value="Voltar" class="btn btn-info" onclick="javascript:window.location.href='<?php echo $this->Html->url(array('controller'=>'entradas','action'=>'index')) ?>'">
		</div>
		<?php echo $this->FormAce->end();?>
	</div>
</div>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#btn_add_dizimista').on('click',function(){
		var url = '<?php echo $this->Html->url(array('controller'=>'dizimos','action'=>'add')); ?>';
		var pos = jQuery('#ajax_dizimistas').children().length;
		var dados = {pos: pos};
		jQuery.ajax({
			url: url,
			data: dados,
			success: function(data){
				jQuery('#ajax_dizimistas').append(data);
			}
		});
	});
});
</script>
