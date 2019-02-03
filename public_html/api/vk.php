<?php
require_once "config.php";

use arku/Vk;
$vk = new Vk();

if(empty($_GET['code'])){
	echo "<a href='".$vk->autorizeUp()."'Я такой-то такой-то, в в полном сознании разрешаю делать всё что хочешь!</a>";
}else{
	$data = $vk->accessToken($_GET['code']);

	echo '<pre>';
	print_r($data);
	die();
}

?>