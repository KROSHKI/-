<script type="text/javascript">

hmap1 = 'false';hvk1 = 'false';hadd1 = 'false';
hmap2 = 'false';hvk2 = 'false';hadd2 = 'false';
hmap3 = 'false';hvk3 = 'false';hadd3 = 'false';
hmap4 = 'false';hvk4 = 'false';hadd4 = 'false';
hmap5 = 'false';hvk5 = 'false';hadd5 = 'false';
hmap6 = 'false';hvk6 = 'false';hadd6 = 'false';

//------------------------------[Block-1]------------------------
  $("#toggle_map1").click(function()
  {
    $("#hidden_map1").slideToggle();
    if (hmap1 == 'true') {hmap1 = 'false'} else {hmap1 = 'true'}
    if (hadd1 == 'true') {$("#hidden_add1").slideToggle(); hadd1 = 'false';}
    if (hvk1 == 'true') {$("#hidden_vk1").slideToggle(); hvk1 = 'false';}
  });
  $("#toggle_vk1").click(function()
  {
    $("#hidden_vk1").slideToggle();
    if (hvk1 == 'true') {hvk1 = 'false'} else {hvk1 = 'true'}
    if (hmap1 == 'true') {$("#hidden_map1").slideToggle(); hmap1 = 'false';}
    if (hadd1 == 'true') {$("#hidden_add1").slideToggle(); hadd1 = 'false';}
  });
  $("#toggle_add1").click(function()
  {
    $("#hidden_add1").slideToggle();
    if (hadd1 == 'true') {hadd1 = 'false'} else {hadd1 = 'true'}
    if (hmap1 == 'true') {$("#hidden_map1").slideToggle(); hmap1 = 'false';}
    if (hvk1 == 'true') {$("#hidden_vk1").slideToggle(); hvk1 = 'false';}
  });

  //------------------------------[Block-2]------------------------
    $("#toggle_map2").click(function()
    {
      $("#hidden_map2").slideToggle();
      if (hmap2 == 'true') {hmap2 = 'false'} else {hmap2 = 'true'}
      if (hadd2 == 'true') {$("#hidden_add2").slideToggle(); hadd2 = 'false';}
      if (hvk2 == 'true') {$("#hidden_vk2").slideToggle(); hvk2 = 'false';}
    });
    $("#toggle_vk2").click(function()
    {
      $("#hidden_vk2").slideToggle();
      if (hvk2 == 'true') {hvk2 = 'false'} else {hvk2 = 'true'}
      if (hmap2 == 'true') {$("#hidden_map2").slideToggle(); hmap2 = 'false';}
      if (hadd2 == 'true') {$("#hidden_add2").slideToggle(); hadd2 = 'false';}
    });
    $("#toggle_add2").click(function()
    {
      $("#hidden_add2").slideToggle();
      if (hadd2 == 'true') {hadd2 = 'false'} else {hadd2 = 'true'}
      if (hmap2 == 'true') {$("#hidden_map2").slideToggle(); hmap2 = 'false';}
      if (hvk2 == 'true') {$("#hidden_vk2").slideToggle(); hvk2 = 'false';}
    });
    //------------------------------[Block-3]------------------------
      $("#toggle_map3").click(function()
      {
        $("#hidden_map3").slideToggle();
        if (hmap3 == 'true') {hmap3 = 'false'} else {hmap3 = 'true'}
        if (hadd3 == 'true') {$("#hidden_add3").slideToggle(); hadd3 = 'false';}
        if (hvk3 == 'true') {$("#hidden_vk3").slideToggle(); hvk3 = 'false';}
      });
      $("#toggle_vk3").click(function()
      {
        $("#hidden_vk3").slideToggle();
        if (hvk3 == 'true') {hvk3 = 'false'} else {hvk3 = 'true'}
        if (hmap3 == 'true') {$("#hidden_map3").slideToggle(); hmap3 = 'false';}
        if (hadd3 == 'true') {$("#hidden_add3").slideToggle(); hadd3 = 'false';}
      });
      $("#toggle_add3").click(function()
      {
        $("#hidden_add3").slideToggle();
        if (hadd3 == 'true') {hadd3 = 'false'} else {hadd3 = 'true'}
        if (hmap3 == 'true') {$("#hidden_map3").slideToggle(); hmap3 = 'false';}
        if (hvk3 == 'true') {$("#hidden_vk3").slideToggle(); hvk3 = 'false';}
      });
      //------------------------------[Block-4]------------------------
        $("#toggle_map4").click(function()
        {
          $("#hidden_map4").slideToggle();
          if (hmap4 == 'true') {hmap4 = 'false'} else {hmap4 = 'true'}
          if (hadd4 == 'true') {$("#hidden_add4").slideToggle(); hadd4 = 'false';}
          if (hvk4 == 'true') {$("#hidden_vk4").slideToggle(); hvk4 = 'false';}
        });
        $("#toggle_vk4").click(function()
        {
          $("#hidden_vk4").slideToggle();
          if (hvk4 == 'true') {hvk4 = 'false'} else {hvk4 = 'true'}
          if (hmap4 == 'true') {$("#hidden_map4").slideToggle(); hmap4 = 'false';}
          if (hadd4 == 'true') {$("#hidden_add4").slideToggle(); hadd4 = 'false';}
        });
        $("#toggle_add4").click(function()
        {
          $("#hidden_add4").slideToggle();
          if (hadd4 == 'true') {hadd4 = 'false'} else {hadd4 = 'true'}
          if (hmap4 == 'true') {$("#hidden_map4").slideToggle(); hmap4 = 'false';}
          if (hvk4 == 'true') {$("#hidden_vk4").slideToggle(); hvk4 = 'false';}
        });
        //------------------------------[Block-5]------------------------
          $("#toggle_map5").click(function()
          {
            $("#hidden_map5").slideToggle();
            if (hmap5 == 'true') {hmap5 = 'false'} else {hmap5 = 'true'}
            if (hadd5 == 'true') {$("#hidden_add5").slideToggle(); hadd5 = 'false';}
            if (hvk5 == 'true') {$("#hidden_vk5").slideToggle(); hvk5 = 'false';}
          });
          $("#toggle_vk5").click(function()
          {
            $("#hidden_vk5").slideToggle();
            if (hvk5 == 'true') {hvk5 = 'false'} else {hvk5 = 'true'}
            if (hmap5 == 'true') {$("#hidden_map5").slideToggle(); hmap5 = 'false';}
            if (hadd5 == 'true') {$("#hidden_add5").slideToggle(); hadd5 = 'false';}
          });
          $("#toggle_add5").click(function()
          {
            $("#hidden_add5").slideToggle();
            if (hadd5 == 'true') {hadd5 = 'false'} else {hadd5 = 'true'}
            if (hmap5 == 'true') {$("#hidden_map5").slideToggle(); hmap5 = 'false';}
            if (hvk5 == 'true') {$("#hidden_vk5").slideToggle(); hvk5 = 'false';}
          });
          //------------------------------[Block-6]------------------------
            $("#toggle_map6").click(function()
            {
              $("#hidden_map6").slideToggle();
              if (hmap6 == 'true') {hmap6 = 'false'} else {hmap6 = 'true'}
              if (hadd6 == 'true') {$("#hidden_add6").slideToggle(); hadd6 = 'false';}
              if (hvk6 == 'true') {$("#hidden_vk6").slideToggle(); hvk6 = 'false';}
            });
            $("#toggle_vk6").click(function()
            {
              $("#hidden_vk6").slideToggle();
              if (hvk6 == 'true') {hvk6 = 'false'} else {hvk6 = 'true'}
              if (hmap6 == 'true') {$("#hidden_map6").slideToggle(); hmap6 = 'false';}
              if (hadd6 == 'true') {$("#hidden_add6").slideToggle(); hadd6 = 'false';}
            });
            $("#toggle_add6").click(function()
            {
              $("#hidden_add6").slideToggle();
              if (hadd6 == 'true') {hadd6 = 'false'} else {hadd6 = 'true'}
              if (hmap6 == 'true') {$("#hidden_map6").slideToggle(); hmap6 = 'false';}
              if (hvk6 == 'true') {$("#hidden_vk6").slideToggle(); hvk6 = 'false';}
            });
</script>
