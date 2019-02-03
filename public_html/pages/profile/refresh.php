<?php 

$Row15 = mysqli_fetch_assoc(mysqli_query($connection,"SELECT `id`,`email`,`name`,`status`,`user_photo` FROM `users` WHERE `email`= '$_SESSION[EMAIL]'"));
unset($_SESSION['USER_ID']);
unset($_SESSION['USER_NAME']);
unset($_SESSION['EMAIL']);
unset($_SESSION['PHOTO']);
unset($_SESSION['USER_STATUS']);

$_SESSION['USER_ID'] = $Row15['id'];
$_SESSION['USER_NAME'] = $Row15['name'];
$_SESSION['EMAIL'] = $Row15['email'];
$_SESSION['PHOTO'] = $Row15['user_photo'];
$_SESSION['USER_STATUS'] = $Row15['status'];
header("Location: https://пермьонлайн.рф/profile/edit");



?>