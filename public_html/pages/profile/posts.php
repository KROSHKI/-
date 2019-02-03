<? ULogin(1);  ?>
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
  						<li id="child"><i class="fa fa-list-alt"></i> Мои посты</li>
  						<li><a href="/profile/favourites" style="text-decoration: none;"><i class="fa fa-star"></i> Мое избранное</a></li>
  						<li><a href="/profile/comments" style="text-decoration: none;"><i class="fa fa-check"></i> Мои комментарии </a></li>
  						<li><a href="/profile/edit" style="text-decoration: none;"><i class="fa fa-gear"></i> Редактировать профиль</a></li>
  					</ul>
  				</div>
  			</div>
  			<span class="smalltri">
  			     <a href="/profile/refresh"><i class="fa fa-refresh"></i></a>
  			</span>
  		</section>
  		<section class="section2 clearfix">
  			<div class="grid">
          <div class="row">
            <?php
              $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Ошибка ".mysqli_error($connection));
              $Param1 = 'SELECT `id`, `name`, `description`,`comment_api`,`map_api`,`image_name`, `gd_from`, `gd_to` FROM `posts`';
              $Result = mysqli_query($connection, $Param1);
              while($Row = mysqli_fetch_assoc($Result)) echo '

              <div class="col-md-4 col3 content-col" style="padding: 0px">
      					<div class="postcont"><img src="/assets/content_images/trimmed/'.$Row['image_name'].'" alt="">
      					</div>
      					<div class="profileinfo">
                <img src="'.$_SESSION['PHOTO'].'" alt="">
                <p style="height: 75px; overflow: hidden;">'.$Row['description'].'</p>
                <a href = "/posts/'.$Row['id'].'/"><span>Перейти к записи<i class="fa fa-angle-right"></i></span></a>
      					</div>
      				</div>
          ';?>
          </div>
  			</div>
  		</section>
  	</div>
    <? echo 'Ваш логин: '.$_SESSION['EMAIL'].'<br>'; ?>
  </div>
</header>
<!-- /account/profile/edit/$_SESSION['USER_ID'];  -->
<!-- /account/favorites/delete/$URL_Parts[1] JQuery UI - перетаскивание элементов -->
<!-- /account/favorites/add/$URL_Parts[1] JQuery UI - перетаскивание элементов -->
