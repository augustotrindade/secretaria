<?php $logado = $session->read('logado')?>
<center>
<br>
<br>
<?php echo $boasVindas ?>
<b><?php echo $logado['tipo']=='Usuario'? $logado['nome'] : ''?></b>

<p>&nbsp;</p>
<p>&nbsp;</p>

</center>
