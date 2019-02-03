<?
  if(isset($_POST['login']) and isset($_POST['password'])){
	if(($_POST['password'] == ADMIN_PASSWORD) and ($_POST['login'] == 'admin')){
	  $_SESSION['ADMIN_VERIFY'] = 1;	
	  exit(header("Location: https://пермьонлайн.рф/admin/posts"));
	}else{ exit('Ты чё забыл пароль?'); }	
  }

?>