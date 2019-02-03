<?php
//https://xn--80ajngegddgl7k.xn--p1ai/app/login.php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql2 = "SELECT * FROM users WHERE email='$email'";

	$response1 = mysqli_query($connection, $sql2);
	
	$result2 = array();
	$result2['login'] = array();

	if(mysqli_num_rows($response1) === 1){

		$row1 = mysqli_fetch_assoc($response1);

		if($password == $row1['password']){

			$index1['name'] = $row1['name'];
			$index1['email'] = $row1['email'];


			array_push($result2['login'], $index1);

			$result2['success'] = "1";
			$result2['message'] = "success";
			echo json_encode($result2);
		}else{
			$result2['success'] = "0";
			$result2['message'] = "error";
			echo json_encode($result2);
		}
	}
}

?>