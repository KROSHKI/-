<html><head><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script></head><body>

    <script>
    function Rotator(start_from){
   var phrases = ["#ПермьОнлайн","#ПермьЧто?","#ПермьГде?","#ПермьКогда?"];
   var total = phrases.length;
   var interval = 3000;
   if(void 0 === start_from){
       start_from = 0;
   }

   $(".textrotator").text(phrases[start_from]).animate({"opacity":"1"}, 1000, function(){
               if(start_from >= (total-1)){
                   setTimeout(function(){
                       $(".textrotator").animate({"opacity":"0"}, 1000, function(){
                           Rotator();
                       });
                   }, interval);
               }else{
                   start_from++;
                   setTimeout(function(){
                       $(".textrotator").animate({"opacity":"0"}, 1000,function(){
                           Rotator(start_from);
                       });
                   }, interval);

               }

   })
}
    </script>
    <script type="text/javascript">
$(document).ready(function(){
    Rotator();
})
</script>

</body></html>
