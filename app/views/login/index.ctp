<?php if ($session->check('Message.flash')){
    $session->flash();
}
?>
<?php echo $form->create('',array('action'=>'logar')); ?>
<?php echo $form->input('login',array('maxlength'=>'30')) ?>
<?php echo $form->input('senha',array('type'=>'password')) ?>
<?php echo $form->submit('Logar') ?>
<?php echo $form->end() ?>
