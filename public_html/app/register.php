<?php
//https://xn--80ajngegddgl7k.xn--p1ai/app/register.php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$reg_name = $_POST['name'];
	$reg_email = $_POST['email'];
	$reg_password = $_POST['password'];

	$sql1 = "INSERT INTO `users` VALUES('', '$reg_name', '$reg_email', '$reg_password', NOW(), 0, 'https://пермьонлайн.рф/assets/images/userphoto.png', '')";

	//mysqli_query($connection, "INSERT INTO `users` VALUES('', '$_POST[name]', '$_POST[login]', '$_POST[password]', NOW(), 0)");

	if(mysqli_query($connection, $sql1)){
		$result1["success"] = "1";
		$result1["message"] = "success";

		echo json_encode($result1);
	}else{
		$result1["success"] = "0";
		$result1["message"] = "error";

		echo json_encode($result1);
	}
}

?>