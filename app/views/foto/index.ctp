<?php
echo $this->Form->create('', array('action' => 'upload', "enctype" => "multipart/form-data"));
echo $this->Form->input('membro',array('type'=>'hidden'));
echo $this->Form->input('image',array("type" => "file", 'accept'=>"image/*"));  
echo $this->Form->end('Editar'); 
echo $this->Form->end();
?>
