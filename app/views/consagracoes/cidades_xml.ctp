<cidades>
<?php 
pr($cidades);
if (count($cidades)>0) {
	foreach ($cidades as $id => $cidade){
?>
	<cidade>
		<id><?php echo $id ?></id>
		<nome><?php echo $cidade ?></nome>
	</cidade>
<?
	}
}
?>
</cidades>