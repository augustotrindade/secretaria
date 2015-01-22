<?php $div_id = uniqid('dizimo_i_') ?>
<div class="row-fluid" style="padding-bottom: 5px;" id="<?php echo $div_id ?>">
  <?php echo $this->Form->input('Dizimo.'.$pos.'.excluir',array('type'=>'hidden','data-del-dizimo'=>'true')); ?>
  <?php echo $this->Form->input('Dizimo.'.$pos.'.id',array('type'=>'hidden')); ?>
  <?php echo $this->Form->input('Dizimo.'.$pos.'.membro_id',array('type'=>'hidden')); ?>
	<div class="span1">
		<button type="button" class="btn btn-danger btn-mini del-dizimo">
			<i class="icon-trash"></i>
		</button>
	</div>
  <?php echo $this->Form->input('Dizimo.'.$pos.'.nome',array('placeholder'=>'Nome','label'=>false,'class'=>'span12','div'=>array('class'=>'span8'))); ?>
  <?php echo $this->Form->input('Dizimo.'.$pos.'.valor',array('placeholder'=>'Valor','label'=>false,'class'=>'span12','div'=>array('class'=>'span2'))); ?>
  <script type="text/javascript">
  jQuery('#<?php echo $div_id; ?> .del-dizimo').on('click',function(){
	  var div = '<?php echo $div_id; ?>';
	  jQuery('#'+div).hide();
  });
  </script>
</div>
