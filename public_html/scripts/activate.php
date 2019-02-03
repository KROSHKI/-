<?
if(!$_SESSION['USER_ACTIVE_EMAIL']){
	$Email = base64.decode(substr($Param['code']), 5).substr($Param['code'], 0, 5));
	if(strpos($Email, '@') !== false){
		mysqli_query($connection, "UPDATE `users` SET `protected` = 1 WHERE `email`='$Email'");
		$_SESSION['USER_ACTIVE_EMAIL'] = $Email;
	}
}	
?>