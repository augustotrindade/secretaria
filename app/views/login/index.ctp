<?php
echo $this->Session->flash();
echo $form->create('',array('action'=>'logar','class'=>'form-signin'));
echo $form->input('login',array('maxlength'=>'30','label'=>array('class'=>'sr-only'),'class'=>'form-control','placeholder'=>'Login','div'=>false, 'required'=>true, 'autofocus'=>true));
echo $form->input('senha',array('type'=>'password','label'=>array('class'=>'sr-only'),'class'=>'form-control','placeholder'=>'Senha','div'=>false, 'required'=>true));
echo $form->submit('Logar',array('class'=>'btn btn-lg btn-primary btn-block'));
echo $form->end(); 
?>
