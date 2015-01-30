<div class="row-fluid">
	<div class="span6">
		<div class="dataTables_info">
			<?php echo $this->Paginator->counter(); ?>
		</div>
	</div>
	<div class="span6">
		<div class="dataTables_paginate paging_bootstrap pagination">
			<ul>
				<?php echo $this->Paginator->prev('<i class="icon-double-angle-left"></i>', array('tag'=>'li','class'=>'prev','escape'=>false), '<a><i class="icon-double-angle-left"></i></a>', array('class'=>'prev disabled','tag'=>'li','escape'=>false));?>
				<?php echo $this->Paginator->numbers(array('tag'=>'li','separator'=>null));?>
				<?php echo $this->Paginator->next('<i class="icon-double-angle-right"></i>', array('tag'=>'li','class'=>'next','escape'=>false), '<a><i class="icon-double-angle-right"></i></a>', array('class'=>'next disabled','tag'=>'li','escape'=>false));?>
			</ul>
		</div>
	</div>
</div>