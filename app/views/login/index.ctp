<div class="row-fluid">
	<div class="span5">
		<div class="widget-box">
			<div class="widget-header">
				<h4>Login</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main no-padding">
				<?php
					echo $this->Session->flash();
					echo $this->Form->create('',array('action'=>'logar','class'=>'form-signin'));
				?>
					<fieldset>
					<?php
						echo $this->Form->input('login',array('maxlength'=>'30','label'=>array('class'=>'sr-only'),'class'=>'form-control','placeholder'=>'Login','div'=>false, 'required'=>true, 'autofocus'=>true));
						echo $this->Form->input('senha',array('type'=>'password','label'=>array('class'=>'sr-only'),'class'=>'form-control','placeholder'=>'Senha','div'=>false, 'required'=>true));
					?>
					</fieldset>
				<div class="form-actions center">
					<?php echo $this->Form->submit('Logar',array('class'=>'btn btn-success')); ?>
				</div>
				<?php
					echo $this->Form->end(); 
				?>
				</div>
			</div>
		</div>
	</div>
</div>