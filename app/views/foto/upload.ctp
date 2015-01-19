<style>
img {
	max-width: none;
}
</style>
<?php 
echo $this->Html->css('imgareaselect-animated.css');
if(isset($javascript)){
	echo $javascript->link('jquery.imgareaselect.js');
}
$width = 150;
$height = 150;

echo $this->Form->create('', array('action' => 'finalizar',"enctype" => "multipart/form-data"));
echo $this->Form->input('membro',array('type'=>'hidden'));
echo $this->Form->hidden('name');
echo $this->Cropimage->createJavaScript($uploaded['imageWidth'],$uploaded['imageHeight'],$width,$height);
echo $this->Cropimage->createForm($uploaded["imagePath"], $width, $height);
echo $this->Form->submit('Salvar', array("id"=>"save_thumb"));
echo $this->Form->end();

?> 
