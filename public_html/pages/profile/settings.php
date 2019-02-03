<? Ulogin(1);  ?>
<style media="screen">
.hero{
  background-image: url(https://пермьонлайн.рф/assets/images/tsum.jpg);
}
.hero:after {
  --hero_gd_f: #032201;
  --hero_gd_t: #006f6f;
  background: -webkit-linear-gradient(top left, var(--hero_gd_f), var(--hero_gd_t));
  background: -o-linear-gradient(top left, var(--hero_gd_f), var(--hero_gd_t));
  background: linear-gradient(to bottom right, var(--hero_gd_f), var(--hero_gd_t));
}
</style>

<link rel="stylesheet" href="https://пермьонлайн.рф/pages/profile/pstyle.css">
<header class="hero" id="home">
  <div class="p_container">
    <div class="innerwrap">
  		<section class="section1 clearfix">
  			<div>
  				<div class="row grid clearfix">
  					<div class="col2 first">
  						<img src="<? echo ''.$_SESSION['PHOTO'].''; ?>" alt="">
  						<h1 style="text-align: left;"><? echo ''.$_SESSION['USER_NAME'].''; ?></h1>
  						<p style="overflow: hidden; word-wrap: normal;"><? echo ''.$_SESSION['USER_STATUS'].''; ?></p>
  						<span>ID:<? echo ''.$_SESSION['USER_ID'].''; ?></span>
  					</div>
  					<div class="col2 last">
  						<div class="grid clearfix">
  							<div class="col3 first"><h1>1000</h1><span>Постов</span></div>
  							<div class="col3"><h1>1000</h1><span>Комментариев</span></div>
  							<div class="col3 last"><h1>1000</h1><span>В избранном</span></div>
  						</div>
  					</div>
  				</div>
  				<div class="row clearfix">
  					<ul class="row2tab clearfix">
  						<li><a href="/profile/posts" style="text-decoration: none;"><i class="fa fa-list-alt"></i> Мои посты</a></li>
  						<li><a href="/profile/favourites" style="text-decoration: none;"><i class="fa fa-star"></i> Мое избранное</a></li>
  						<li><a href="/profile/comments" style="text-decoration: none;"><i class="fa fa-check"></i> Мои комментарии </a></li>
  						<li id="child"><i class="fa fa-gear"></i> Редактировать профиль</li>
  					</ul>
  				</div>
  			</div>
  			<span class="smalltri">
  			     <a href="/profile/refresh"><i class="fa fa-refresh"></i></a>
  			</span>
  		</section>
  		<section class="section2 clearfix">
  			<div class="grid">
          <div class="row" style="display: -webkit-box;">
            <div class="col-md-6" style="padding-left: 0;">
              <div class="s_wrap">
                <div class="form-header">Настройки аккаунта<i class="fa fa-address-card close"></i></div>
                <form action="/account/profile/edit/<? echo $_SESSION['USER_ID']; ?>" method="POST">
                  <div class="form-grp">
                    <label>Имя</label>
                    <input autocomplete="new-password" class="textinput" type="text" value="<? echo ''.$_SESSION['USER_NAME'].''; ?>" name="name"/>
                  </div>
                  <div class="form-grp">
                    <label>Эл. почта</label>
                    <input autocomplete="new-password" class="textinput" type="text" value="<? echo ''.$_SESSION['EMAIL'].''; ?>" name="email"  />
                  </div>
                  <div class="form-grp">
                    <label>Пароль</label>
                    <input autocomplete="new-password" class="textinput" type="password" placeholder="password" name="password" required />
                  </div>
                  <div class="form-grp">
                    <input type="submit" name="enter1" value="Сохранить"/>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6" style="padding-right: 0;">
              <div class="s_wrap">
                <div class="form-header">Персонализация<i class="fa fa-camera-retro close"></i></div>
                <form action="/account/profile/edit/<? echo $_SESSION['USER_ID']; ?>" method="POST">  
                  <div class="form-grp">
                    <label>Аватар</label>
                    <input autocomplete="new-password" class="textinput" type="text" value="<? echo ''.$_SESSION['PHOTO'].''; ?>" placeholder="Ссылка на изображеие" name="avatar"/>
                  </div>
                  <div class="form-grp">
                    <label>Статус</label>
                    <input autocomplete="new-password" class="textinput" type="text" value="<? echo ''.$_SESSION['USER_STATUS'].''; ?>" title="Не более 110 символов" maxlength="110" name="status"/>
                  </div>
                  <div class="form-grp">
                    <label>Дата рождения</label>
                    <input autocomplete="new-password" class="textinput" value="<? echo ''.$_SESSION['DATE_ROG'].''; ?>" type="date" name="date_r"/>
                  </div>
                  <div class="form-grp">
                    <input type="submit" name="enter2" value="Сохранить"/>
                  </div>
                </form>  
              </div>
            </div>

          </div>
  			</div>
  		</section>
  	</div>
  </div>
</header>
