<style media="screen">
.hero{
  background-image: url(https://пермьонлайн.рф/assets/images/kama.jpg);
}
.hero:after {
  --hero_gd_f: #d94b17;
  --hero_gd_t: #242882;
  background: -webkit-linear-gradient(top left, var(--hero_gd_f), var(--hero_gd_t));
  background: -o-linear-gradient(top left, var(--hero_gd_f), var(--hero_gd_t));
  background: linear-gradient(to bottom right, var(--hero_gd_f), var(--hero_gd_t));
}
</style>
<header class="hero" id="home">
  <div class="content">
    <style media="screen">
    .wrapper {
      position: relative;
      background-color: rgba(255, 255, 255, 0.42);
      margin: 60px auto;
      padding: 20px;
      padding-top: 10px;
      width: 45%;
      border-radius: 8px;
      }
      #signform hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #fff;
        padding-bottom: 15px;
      }
      h1 {
      text-align: center;
      color: #6e3d5f;
      font-size: 36px !important;
      line-height: 0;
      font-weight: 600;
      padding-bottom: 20px;
      }
      input {
      width: 100%;
      padding: 16px;
      font-size: 14px;
      font-weight: 400;
      background-color: white;
      color: #3B3B3D;
      border: 1px solid white;
      border-radius: 4px;
      margin: 6px 0;
      }
      input:focus {
        border: 1px solid #881097;
        outline: none;
      }
      input::placeholder {
        color: #aaa;
      }
      .button {
        display: inline-block;
        font-size: 16px;
        padding: 20px 50px;
        margin: 20px 0;
        position: relative;
        color: #ecf0f1;
        background-color: #b96445;
        overflow: hidden;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        border: 0 !important;
      }
      .button:hover {
        -webkit-box-shadow: 0px 0px 10px #34495e;
        box-shadow: 0px 0px 10px #34495e;
        background-color: #5357ac;
      }
      @media screen and (max-width: 1130px) {
      .wrapper{
        width: 40%;
      }
      }
      @media screen and (max-width: 920px) {
      .wrapper{
        width: 50%;
      }
      }
      @media screen and (max-width: 720px) {
      .wrapper{
        width: 60%;
      }
      }
      @media screen and (max-width: 600px) {
      .wrapper{
        margin: 60px 0px;
        width: 100%;
      }
      }
    </style>
    <form class="wrapper" method="POST" action="/account/join" id="signform">
      <h1>Регистрация</h1>
      <hr>
      <input type="text" name="name" id="input-10" placeholder="Ваше имя">
      <input type="email" name="login" id="input-11" placeholder="Email" required>
      <input name="password" type="password" id="input-12" placeholder="Пароль" required>
      <input type="submit" name="enter" class = "button" value="Зарегистрироваться">
    </form>

  </div>
</header>
