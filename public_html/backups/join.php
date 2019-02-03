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
    <div style="width:100%;height:350px;background-color:#2f3238;padding-top:100px;font-size:23px;color:#fff;opacity: 0.8">
      <form action="/account/join" method="POST">
        <span class="input input--jiro">
          <input class="input__field input__field--jiro" name="name" type="text" id="input-10" />
          <label class="input__label input__label--jiro" for="input-10">
            <span class="input__label-content input__label-content--jiro">Как вас зовут?</span>
          </label>
        </span>
        <span class="input input--jiro">
          <input class="input__field input__field--jiro" name="email" type="Email" id="input-11" />
          <label class="input__label input__label--jiro" for="input-11">
            <span class="input__label-content input__label-content--jiro">Email</span>
          </label>
        </span>
        <span class="input input--jiro">
          <input class="input__field input__field--jiro" name="password" type="password" id="input-12" />
          <label class="input__label input__label--jiro" for="input-12">
            <span class="input__label-content input__label-content--jiro">Пароль</span>
          </label>
        </span>
        <br>
        <style type="text/css">
          .reg{
            width:180px;height:40px;border-radius: 3px;border:1px solid #000;background:#6A5ACD;
          }
          .reg:hover{
            cursor: pointer;
            opacity:0.7;
            font-weight: 600;
            border:1px solid #fff;
            font-size:16px;
          }

        </style>
        <br>
        <input type="submit" name="enter" value="Зарегистрироваться" class="reg" />

        <!--Это по popup-->
        <!-- <a class="popup-with-zoom-anim" href="#text-popup-anim">Модальное окно</a>
        <div id="text-popup-anim" class="zoom-anim-dialog white-popup mfp-hide">
          <p>Вы зарегистрированы</p>
        </div> -->
      </form>
    </div>
  </div>
  <script>
      (function() {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
          (function() {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function() {
              return this.replace(rtrim, '');
            };
          })();
        }

        [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
          // in case the input is already filled..
          if( inputEl.value.trim() !== '' ) {
            classie.add( inputEl.parentNode, 'input--filled' );
          }

          // events:
          inputEl.addEventListener( 'focus', onInputFocus );
          inputEl.addEventListener( 'blur', onInputBlur );
        } );

        function onInputFocus( ev ) {
          classie.add( ev.target.parentNode, 'input--filled' );
        }

        function onInputBlur( ev ) {
          if( ev.target.value.trim() === '' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
          }
        }
      })();

      // Модальное окно с эффектом ZoomIn
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        removalDelay: 1000,
        mainClass: 'my-mfp-zoom-in'
      });

    </script>
</header>
