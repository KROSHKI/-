<style media="screen">
.hero{
  background-image: url(https://пермьонлайн.рф/assets/images/happy.jpg);
}
.hero:after {
  --hero_gd_f: #2417d9;
  --hero_gd_t: #d494da;
  background: -webkit-linear-gradient(top left, var(--hero_gd_f), var(--hero_gd_t));
  background: -o-linear-gradient(top left, var(--hero_gd_f), var(--hero_gd_t));
  background: linear-gradient(to bottom right, var(--hero_gd_f), var(--hero_gd_t));
}

</style>
<header class="hero" id="home">
  <div class="content">
    <div class="row">
        <div class="container-4">
          <form method="POST" action="/search/">
            <input type="search" id="search" name="text" placeholder="Что? Где? Когда?" required />
            <!--  value="<? //echo $_SESSION['SEARCH']; ?>" -->
            <button type="submit" name="enter" class="icon"><i class="fa fa-search"></i></button>
            <!-- <input type="submit" name="enter"> -->
            <a class="smoothScroll" href="#down">
              <div class="scroll-down"></div>
            </a>
          </form>
        </div>
    </div>
  </div>
</header>
