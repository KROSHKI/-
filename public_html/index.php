<?
  session_start();
  include 'settings.php';
  //header('Content-type: text/html; charset=UTF-8');
  //подключение к БД
  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Ошибка " . mysqli_error($connection));

  /*---------- Посты на главной странице ----------*/

  $sql = "SELECT * FROM posts";
  $result = mysqli_query($connection, $sql) or die("Ошибка в запросе: " . mysqli_error($connection));

  $emparray = array();
  while($row =mysqli_fetch_assoc($result)){ $emparray[] = $row; }
  $p = json_encode($emparray, JSON_UNESCAPED_UNICODE);
  convert_cyr_string($p,'w','a');
  $p = str_replace("\\","",$p);

  //записываем JSON файл
  $fp = fopen('postinfo.json', 'w');
  fwrite($fp, $p);
  fclose($fp);


	/*
	*	https://пермьонлайн.рф/$Page/$Module/$Param[Array]/*$Select*
	*   *$Select* - не заействованный модуль
	*/

  /*Перенаправление на главную страницу и замена index.php на "/"*/
  if($_SERVER['REQUEST_URI'] == '/'){
    $Page = 'index';
    $Module = 'index';
  } else {
    $URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $URL_Parts = explode('/', trim($URL_Path, ' /'));

    $URL_Array = explode('/', $URL_Path);

    $Page = array_shift($URL_Parts);

    $Module = array_shift($URL_Parts);

    if(!empty($Module)){
      $Param = array();
      for ($i = 0; $i < count($URL_Parts); $i++) {
       $Param[$URL_Parts[$i]] = $URL_Parts[++$i];
      }
    }
  }

if($Page != 'postinfo.json'){
  //Админка
  if($Page == 'admin'){
    if($Module == '') include 'pages/admin/login.php';
    else if($Module == 'login') include 'pages/admin/test/login.php';
    else if($Module == 'add') include 'pages/admin/add.php';
    else if($Module == 'posts') include 'pages/admin/posts.php';
    else if($Module == 'edit') include 'pages/admin/edit.php';
    else if($Module == 'delete') include 'pages/admin/delete.php';
    else if($Module == 'logout') include 'pages/admin/logout.php';
    else if($Module == 'control') include 'pages/admin/control.php';
  //Аккаунт
  }else if($Page == 'account'){
    include 'scripts/account.php';
  //По приложению
  }else if($Page == 'app'){
    if($Module == 'register.php') include 'app/register.php';
    else if($Module == 'login.php') include 'app/login.php';
  //Тестовая страница
  }else if($Page == 'test'){
    header('Location: http://jquery.com');
  }else if($Page == 'download'){
    include 'parts/download.php';  
  //Предзагрузка
  }else if($Page == 'preloader'){
    include 'parts/head.php';
    include 'parts/preloader.php';
  //Профиль
  }else if($Page == 'profile'){
    if($Module == 'posts'){
      include 'parts/head.php';
      include 'parts/headers/profile_header.php';
      include 'pages/profile/posts.php';
      include 'parts/footer.php';
    }else if($Module == 'refresh'){
       include 'pages/profile/refresh.php';
    }else if($Module == 'favorites'){
      include 'parts/head.php';
      include 'parts/headers/profile_header.php';
      include 'pages/profile/favourites.php';
      include 'parts/footer.php';
    }else if($Module == 'comments'){
      include 'parts/head.php';
      include 'parts/headers/profile_header.php';
      include 'pages/profile/comments.php';
      include 'parts/footer.php';
    }else if($Module == 'edit'){
      include 'parts/head.php';

      include 'parts/headers/profile_header.php';

      include 'pages/profile/settings.php';
      include 'parts/footer.php';
    }else{
      include 'parts/head.php';
      include 'parts/headers/profile_header.php';
      include 'pages/profile/posts.php';
      include 'parts/footer.php';
    }
  //События
  }else if($Page == 'ivents'){
    include 'parts/head.php';
    include 'parts/headers/header.php';
    include 'parts/content/ivents.php';
    include 'parts/footer.php';
  //История
  }else if($Page == 'history'){
    include 'parts/head.php';
    include 'parts/headers/header.php';
    include 'parts/content/history.php';
    include 'parts/footer.php';
  //Места
  }else if($Page == 'brand'){
    include 'parts/head.php';
    include 'scripts/brand.php';
  //Места
  }else if($Page == 'places'){
    include 'parts/head.php';
    include 'parts/headers/header.php';
    include 'parts/content/places.php';
    include 'parts/footer.php';
  //Посты
  }else if($Page == 'posts' or $Page == 'history_page' or $Page == 'places_page' or $Page == 'ivents_page'){
    if($Module != ''){
      include 'parts/head.php';
      include 'parts/headers/header.php';
      //include 'parts/hero.php';
      include 'pages/posts/postpage.php';
      include 'parts/footer.php';
    }
  }else{
    include 'parts/head.php';
    //Страница регистрации
    if($Page == 'join'){
      include 'parts/headers/join_header.php';
      include 'pages/join.php';
    //Контент
    }else{
      include 'parts/preloader.php';
      include 'parts/headers/content_header.php';
      include 'parts/hero.php';
      include 'parts/content.php';
    }
    include 'parts/footer.php';
    //include 'parts/buttons.php'; Убрал да
  }
}else{include 'postinfo.json';}


function ULogin($p1){
  if($p1 <= 0 and $_SESSION['USER_LOGIN_IN'] != $p1) exit('Данная страница доступна только для гостей');
  else if($_SESSION['USER_LOGIN_IN'] != $p1) exit('Данная страница доступна только для авторизированных пользователей');
}
function Menu(){
  if($_SESSION['USER_LOGIN_IN'] != 1) $Menu = '<a href="#" class="md-trigger" data-modal="modal-1">ВОЙТИ</a>';
  else $Menu = '<a href="/profile" class="md-trigger">ПРОФИЛЬ</a>';

  echo $Menu;
}
function popup(){

}
function AdminVerify($p){
  if($_SESSION['ADMIN_VERIFY'] != $p) exit(header("Location: https://пермьонлайн.рф/"));
}
function get_url(){
  return "https://пермьонлайн.рф";
  }


/*Защита от html тегов и огромных пробелов в тексте*/
function FormChars($p1) {
  return nl2br(htmlspecialchars(trim($p1), ENT_QUOTES), false);
}

function apk_download($file){
  if(file_exists($file)){
    // Сбрасываем буфер вывода
    if(ob_get_level()){
      ob_end_clean();
    }
    //показываем окно скачивания
    header("Content-Description: File Transfer");
    header('Content-Type: application/vnd.android.package-archive');
    header("Content-Deisposition: attachment; filename=".basename($file));
    header("Content-Transfer-Encoding: binary");
    header("Expires: 0");
    header("Cache-Control: must-revalidate");
    header("Pragma: public");
    header("Content-Length: ".filesize($file));
    // отправка файла
    readfile($file);
    exit;
  }
}

?>
