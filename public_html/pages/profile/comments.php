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
<? Ulogin(1);  ?>

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
  						<li id="child"><i class="fa fa-check"></i> Мои комментарии</li>
  						<li><a href="/profile/edit" style="text-decoration: none;"><i class="fa fa-gear"></i> Редактировать профиль </a></li>
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
            Комментарии
          </div>
  			</div>
  		</section>
  	</div>
  </div>
</header>
