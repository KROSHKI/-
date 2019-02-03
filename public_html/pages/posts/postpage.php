<meta name="theme-color" content="#6054eb" >

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
<header class="hero" style="height:30vh;" id="home">
  <div class="content">
    <div class="row">
        <div class="container-4" style="margin-top: 10vh;">
          <input type="search" id="search" name="search" placeholder="Что? Где? Когда?"  />
          <button class="icon"><i class="fa fa-search"></i></button>
        </div>
    </div>
  </div>
</header>


<?php
  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Ошибка ".mysqli_error($connection));
  if($Page == 'places_page'){
    $Param1 = 'SELECT `id`, `name`, `description`,`comment_api`,`map_api`, `image_name`, `gd_from`, `gd_to` FROM `places` WHERE `id`='.$Module;
  }else if($Page == 'history_page'){
    $Param1 = 'SELECT `id`, `name`, `description`,`comment_api`,`map_api`, `image_name`, `gd_from`, `gd_to` FROM `history` WHERE `id`='.$Module;
  }else if($Page == 'ivents_page'){
    $Param1 = 'SELECT `id`, `name`, `description`,`comment_api`,`map_api`, `image_name`, `gd_from`, `gd_to` FROM `ivents` WHERE `id`='.$Module;
  }else if($Page == 'posts'){
    $Param1 = 'SELECT `id`, `name`, `description`,`comment_api`,`map_api`, `image_name`, `gd_from`, `gd_to` FROM `posts` WHERE `id`='.$Module;
  }
  $Result = mysqli_query($connection, $Param1);
  //_from: #032201;
  //_to: #006f6f;
  while($Row = mysqli_fetch_assoc($Result)) echo '
  <div class="feature" id="content'.$Row['id'].'">
    <style media="screen">
    #content'.$Row['id'].' {
      --gradient_var_from: '.$Row['gd_from'].';
      --gradient_var_to: '.$Row['gd_to'].';
      --photo_adress: url(/assets/content_images/background/'.$Row['image_name'].');
    }
    .feature {
      background-image: var(--photo_adress);
    }
    .feature:after {
      background: -webkit-linear-gradient(top left, var(--gradient_var_from), var(--gradient_var_to));
      background: -o-linear-gradient(top left, var(--gradient_var_from), var(--gradient_var_to));
      background: linear-gradient(to bottom right, var(--gradient_var_from), var(--gradient_var_to));
    }
    .fbutton{
      background: -webkit-linear-gradient(top left, var(--gradient_var_from), var(--gradient_var_from));
    }
    button:hover{
      -webkit-box-shadow: 0px 0px 10px var(--gradient_var_from);
      box-shadow: 0px 0px 10px var(--gradient_var_from);
    }
    button:focus{
      background: -webkit-linear-gradient(top left, var(--gradient_var_to), var(--gradient_var_to));
    }
    input[type="subs"] {
      background: var(--gradient_var_from);
    }
    </style>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 toppad">
        <div class="row">
        <img style="max-width: 100%; border-radius: 10px;" src="/assets/content_images/trimmed/'.$Row['image_name'].'">
        <div class="col-md-12 social" style="margin-top: -60px;"><div class="row">
          <div class="col-md-4"> <button type="button" id="toggle_map'.$Row['id'].'" class="fbutton"><p class="fa fa-map-marker"></p></button>  </div>
          <div class="col-md-4"> <button type="button" id="toggle_vk'.$Row['id'].'" class="fbutton"><p class="fa fa-comments"></p></button> </div>
          <div class="col-md-4"> <button type="button" id="toggle_add'.$Row['id'].'" class="fbutton"><p class="fa fa-plus"></p></button>  </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-6 toppad">
            <div class="row">
            <div  style = "overflow: hidden;  width: 440px;  height: 80px;"class="col-md-12 nametag"><h3 style="padding-top: 30px; font-size: 22px;">'.$Row['name'].'</h3></div>
            <div class="col-md-12 announce">
              <p style = "max-width: 100%;">'.$Row['description'].'</p>
              </div>
          </div>
        </div>
      </div>
      <div class="row" style="color: #ffffff">
        <div class="col-md-12">
        <div id="hidden_map'.$Row['id'].'">
        <iframe src="'.$Row['map_api'].'" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br>
        </div>
        <div id="hidden_vk'.$Row['id'].'">

        <div class="row">
          <div class="col-md 12">
            <div class="c_review">
              <div class="row">
                <div class="col-md-10" style="padding-left: 5px;padding-right: 0px;padding-top: 5px;padding-bottom: 5px;"><input autocomplete="new-password" class="textinput" type="text" placeholder="Ваш комментарий"/></div>
                <div class="col-md-2" style="padding-right: 5px;padding-left: 0px;padding-top: 5px;padding-bottom: 5px;"><input type="subs" disabled value="Отправить"/></div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md 12">
            <div class="reviews">
              <div class="comment">
                <img src="https://пермьонлайн.рф/assets/images/userphoto.png">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s. </p>
                <h7>Автор комментария</h7>
              </div>
            </div>
          </div>
        </div>

        </div>
        <div id="hidden_add'.$Row['id'].'">
            Для добавления в избранное необходима авторизация
          <br>
        </div>
      </div>
    </div>
    </div>
  </div>
  <script type="text/javascript">
  hmap'.$Row['id'].' = "false";hvk'.$Row['id'].' = "false";hadd'.$Row['id'].' = "false";
    $("#toggle_map'.$Row['id'].'").click(function()
    {
      $("#hidden_map'.$Row['id'].'").slideToggle();
      if (hmap'.$Row['id'].' == "true") {hmap'.$Row['id'].' = "false"} else {hmap'.$Row['id'].' = "true"}
      if (hadd'.$Row['id'].' == "true") {$("#hidden_add'.$Row['id'].'").slideToggle(); hadd'.$Row['id'].' = "false";}
      if (hvk'.$Row['id'].' == "true") {$("#hidden_vk'.$Row['id'].'").slideToggle(); hvk'.$Row['id'].' = "false";}
    });
    $("#toggle_vk'.$Row['id'].'").click(function()
    {
      $("#hidden_vk'.$Row['id'].'").slideToggle();
      if (hvk'.$Row['id'].' == "true") {hvk'.$Row['id'].' = "false"} else {hvk'.$Row['id'].' = "true"}
      if (hmap'.$Row['id'].' == "true") {$("#hidden_map'.$Row['id'].'").slideToggle(); hmap'.$Row['id'].' = "false";}
      if (hadd'.$Row['id'].' == "true") {$("#hidden_add'.$Row['id'].'").slideToggle(); hadd'.$Row['id'].' = "false";}
    });
    $("#toggle_add'.$Row['id'].'").click(function()
    {
      $("#hidden_add'.$Row['id'].'").slideToggle();
      if (hadd'.$Row['id'].' == "true") {hadd'.$Row['id'].' = "false"} else {hadd'.$Row['id'].' = "true"}
      if (hmap'.$Row['id'].' == "true") {$("#hidden_map'.$Row['id'].'").slideToggle(); hmap'.$Row['id'].' = "false";}
      if (hvk'.$Row['id'].' == "true") {$("#hidden_vk'.$Row['id'].'").slideToggle(); hvk'.$Row['id'].' = "false";}
    });
  </script>
  ';
?>
