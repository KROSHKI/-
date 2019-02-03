
<div id="Gayloader">
  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 154 188" enable-background="new 0 0 574.558 120" xml:space="preserve"><defs><style>.cls-1,.cls-2{fill:#999;}</style></defs><title>perm-preloader</title>
    <pattern id="water" width=".25" height="1.1" patternContentUnits="objectBoundingBox">

    <path fill="#ff0000" class="water" d="M0.25,1H0c0,0,0-0.659,0-0.916c0.083-0.303,0.158,0.334,0.25,0C0.25,0.327,0.25,1,0.25,1z"/>
    </pattern>

    <path id="text" d=" M 0.61 0.51 C 51.57 0.52 102.52 0.52 153.48 0.52 C 153.38 53.68 153.47 106.84 153.44 160.00 C 153.37 163.37 153.80 166.83 152.90 170.12 C 150.97 175.83 145.08 179.93 139.06 179.77 C 123.70 179.85 108.33 179.75 92.97 179.80 C 86.99 179.94 80.28 182.22 77.57 188.00 L 76.73 188.00 C 74.03 182.51 67.81 180.12 62.00 179.91 C 45.86 179.67 29.70 179.96 13.56 179.69 C 6.68 179.19 0.40 173.04 0.64 165.97 C 0.63 110.82 0.69 55.66 0.61 0.51 Z"/>
    <path id="logo_bg" d=" M 0.61 0.51 C 51.57 0.52 102.52 0.52 153.48 0.52 C 153.38 53.68 153.47 106.84 153.44 160.00 C 153.37 163.37 153.80 166.83 152.90 170.12 C 150.97 175.83 145.08 179.93 139.06 179.77 C 123.70 179.85 108.33 179.75 92.97 179.80 C 86.99 179.94 80.28 182.22 77.57 188.00 L 76.73 188.00 C 74.03 182.51 67.81 180.12 62.00 179.91 C 45.86 179.67 29.70 179.96 13.56 179.69 C 6.68 179.19 0.40 173.04 0.64 165.97 C 0.63 110.82 0.69 55.66 0.61 0.51 Z"/>

    <mask id="text_mask"><use x="0" y="0" xlink:href="#text" opacity="100" id="logo_gay"/></mask>
    <rect class="water-fill" mask="url(#text_mask)" fill="url(#water)" x="-180" y="-30" width="570" height="1000"/>
  </svg>
  <br>
<img src="/assets/images/medved.png" height="150px" style="position: relative; top: -210px; left: -6px;  z-index: 2;">
</div>


<script type="text/javascript">
jQuery(document).ready(function($){
  $(window).load(function(){
    setTimeout(function(){
      $('#Gayloader').fadeOut('slow', function() {});
    }, 1500); //Вообще тут должно стоять 6к на пустой странице чтобы лоадер успел загрузиться
  });
});
</script>
