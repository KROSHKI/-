<?
// Ulogin(0);

if ($Module == 'login' and $_POST['enter']) {
	if(isset($_POST['login']) and isset($_POST['password'])){
		 $Row = mysqli_fetch_assoc(mysqli_query($connection,"SELECT `email`,`password` FROM `users` WHERE `email`='$_POST[login]'"));
		 if($Row['password'] != $_POST['password']) exit("Неверный логин или пароль");
		 $Row = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM `users` WHERE `email`='$_POST[login]'"));
		$_SESSION['USER_ID'] = $Row['id'];
		$_SESSION['USER_NAME'] = $Row['name'];
		$_SESSION['EMAIL'] = $Row['email'];
		$_SESSION['PHOTO'] = $Row['user_photo'];
		$_SESSION['DATE_ROG'] = $Row['date_r'];
		$_SESSION['USER_STATUS'] = $Row['status'];
		$_SESSION['USER_LOGIN_IN'] = 1;
		header("Location: https://пермьонлайн.рф/profile");
		//echo "Логин=".$_POST['login']."<br>"."Пароль=" . $_POST['password'];
	}
} else if($Module == 'join' and $_POST['enter']){
	if(isset($_POST['login']) and isset($_POST['password'])){
		$Row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT `email` FROM `users` WHERE `email` = '$_POST[login]'"));
		if($Row['email']) exit('Email <b>'.$_POST['login'].'</b> уже используется.');

		mysqli_query($connection, "INSERT INTO `users` VALUES('', '$_POST[name]', '$_POST[login]', '$_POST[password]', NOW(), 0, 'https://пермьонлайн.рф/assets/images/userphoto.png', '', '')");
		header('Location: https://пермьонлайн.рф/');
	}else{exit('Заполните все поля');}
//https://xn--80ajngegddgl7k.xn--p1ai
} else if ($Module == 'logout' and $_SESSION['USER_LOGIN_IN'] == 1) {
	session_unset();
	exit(header('Location: /'));
} else if ($Module == 'profile' and $_SESSION['USER_LOGIN_IN'] == 1) {
	if($_POST['enter1']){
		$email14 = FormChars($_POST['email']);
		$password14 = FormChars($_POST['password']);
		$name14 = FormChars($_POST['name']);
		mysqli_query($connection, "UPDATE `users` SET `email` = '$email14', `password` = '$password14', `name` = '$name14' WHERE `id` = $_SESSION[USER_ID]");
		$_SESSION['USER_NAME'] = $_POST['name'];
		$_SESSION['EMAIL'] = $_POST['email'];
		header("Location: https://пермьонлайн.рф/profile/edit");
	}else if($_POST['enter2']){
		$status = FormChars($_POST['status']);
		$user_photo = FormChars($_POST['avatar']);
		$date_r = FormChars($_POST['date_r']);
		mysqli_query($connection, "UPDATE `users` SET `user_photo` = '$user_photo', `status` = '$status', `date_r` = '$date_r' WHERE `id` = $_SESSION[USER_ID]");
		$_SESSION['PHOTO'] = $_POST['avatar'];
		$_SESSION['USER_STATUS'] = $_POST['status'];
		$_SESSION['DATE_ROG'] = $_POST['date_r'];
		header("Location: https://пермьонлайн.рф/profile/edit");
	}
}	
// } else if($Module == 'favorites' and $_SESSION['USER_LOGIN_IN'] == 1){
//  mysqli_query($connection, "INSERT INTO `favorites` VALUES('', $_SESSION[USER_ID], $URL_Parts[1])");
// }

?>
