<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<style>
#CatLoader {
    position: fixed;
    left: 0;
    top: 0;
    opacity: 1;
    z-index: 999;
    width: 100%;
    height: 100%;
    overflow: visible;
    /* background: #6f64d7; */
    text-align: center;
    margin-left:10vh;
}

.cat {
  position: relative;
  width: 100%;
  max-width: 20em;
  overflow: hidden;
  background-color: #e6dcdc;
}
.cat::before {
  content: '';
  display: block;
  padding-bottom: 100%;
}
.cat:hover > * {
  -webkit-animation-play-state: paused;
          animation-play-state: paused;
}
.cat:active > * {
  -webkit-animation-play-state: running;
          animation-play-state: running;
}

.cat__head, .cat__tail, .cat__body {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  -webkit-animation: rotating 2.79s cubic-bezier(0.65, 0.54, 0.12, 0.93) infinite;
          animation: rotating 2.79s cubic-bezier(0.65, 0.54, 0.12, 0.93) infinite;
}
.cat__head::before, .cat__tail::before, .cat__body::before {
  content: '';
  position: absolute;
  width: 50%;
  height: 50%;
  background-size: 200%;
  background-repeat: no-repeat;
  background-image: url("https://images.weserv.nl/?url=i.imgur.com/M1raXX3.png&il");
}

.cat__head::before {
  top: 0;
  right: 0;
  background-position: 100% 0%;
  -webkit-transform-origin: 0% 100%;
          transform-origin: 0% 100%;
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

.cat__tail {
  -webkit-animation-delay: .2s;
          animation-delay: .2s;
}
.cat__tail::before {
  left: 0;
  bottom: 0;
  background-position: 0% 100%;
  -webkit-transform-origin: 100% 0%;
          transform-origin: 100% 0%;
  -webkit-transform: rotate(-30deg);
          transform: rotate(-30deg);
}

.cat__body {
  -webkit-animation-delay: .1s;
          animation-delay: .1s;
}
.cat__body:nth-of-type(2) {
  -webkit-animation-delay: .2s;
          animation-delay: .2s;
}
.cat__body::before {
  right: 0;
  bottom: 0;
  background-position: 100% 100%;
  -webkit-transform-origin: 0% 0%;
          transform-origin: 0% 0%;
}

@-webkit-keyframes rotating {
  from {
    -webkit-transform: rotate(720deg);
            transform: rotate(720deg);
  }
  to {
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes rotating {
  from {
    -webkit-transform: rotate(720deg);
            transform: rotate(720deg);
  }
  to {
    -webkit-transform: none;
            transform: none;
  }
}
.box {
  display: flex;
  flex: 1;
  flex-direction: column;
  justify-content: flex-start;
  justify-content: center;
  align-items: center;
  background-color: #e6dcdc;
}
</style>


    <div class="box" id = "CatLoader">
      <div class="cat">
        <div class="cat__body"></div>
        <div class="cat__body"></div>
        <div class="cat__tail"></div>
        <div class="cat__head"></div>
      </div>
    </div>
    

<script type="text/javascript">
jQuery(document).ready(function($){
  $(window).load(function(){
    setTimeout(function(){
      $('#CatLoader').fadeOut('slow', function() {});
    }, 500); //Вообще тут должно стоять 6к на пустой странице чтобы лоадер успел загрузиться
  });
});
</script>
