<?php include 'scripts/brand.php';?>
<body>
<meta name="theme-color" content="#6054eb">
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
      <li><a href="#home"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a href="/places">#МЕСТА</a></li>
      <li><a href="/ivents">#СОБЫТИЯ</a></li>
      <li><a href="/history">#ИСТОРИЯ</a></li>
      <li><? Menu(); ?></li>
    </ul>
    <style media="screen">
    </style>
    <div class="md-modal" id="modal-1">
      <div class="lform">
        <form action="/account/login" id="form" method="Post" class="login-form">
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
