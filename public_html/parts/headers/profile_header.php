<?  
 ULogin(1);
 include 'scripts/brand.php';
 ?>
<meta name="theme-color" content="#446856" >
<body>
  <style media="screen">
  .scroll {
    background: #446856 !important;
  }
  .scroll .top-menu li a, .scroll .brand {
    color: white !important;
  }
  </style>
<nav class="nav" id="menu" style="display:block;">
  <div class="wrap">
    <div class="brand pull-left">
      <img src="../assets/images/herb.png" alt="" />
      <span class="textrotator">#ПермьОнлайн</span>
    </div>
      <button id="mobile-btn" class="hamburger-btn">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>
    <ul class="top-menu pull-right" id="top-menu">
      <li><a href="https://пермьонлайн.рф/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a href="https://пермьонлайн.рф/places">#МЕСТА</a></li>
      <li><a href="https://пермьонлайн.рф/ivents">#СОБЫТИЯ</a></li>
      <li><a href="https://пермьонлайн.рф/history">#ИСТОРИЯ</a></li>
      <li><a href="https://пермьонлайн.рф/account/logout">ВЫЙТИ</li>
    </ul>
    <style media="screen">
    </style>
    <div class="md-modal" id="modal-1">
      <div class="lform">
        <form action="/account/login" id="form" method="POST" class="login-form">
          <h3>Авторизация</h3>
          <input type="text" placeholder="Логин" name="login"><br>
          <input type="password" placeholder="Пароль(Любимое слово)" name="password"><br>
          <input type="checkbox" id="three5"><label for="three5">Запомнить меня</label>
          <button type="submit" name="enter" value="Войти" class="md-close">Войти</button>
          <p class="message">Не зарегестрированы? <a href="/join">Создать аккаунт</a></p>
        </form>
      </div>
  </div>
    <div class="md-overlay"></div>

  </div>
</nav>
