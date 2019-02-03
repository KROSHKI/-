hposts'.$Row['id'].' = "true";
hfav'.$Row['id'].' = "false";
hcomm'.$Row['id'].' = "false";
hedit'.$Row['id'].' = "false";

  $("#toggle_hposts").click(function()
  {
    if (hposts == "false"){
      $("#hposts").slideToggle();
      hposts = "true"
      if (hfav == "true") {$("#hfav").slideToggle(); hfav = "false";}
      if (hcomm == "true") {$("#hcomm").slideToggle(); hcomm = "false";}
      if (hedit == "true") {$("#hedit").slideToggle(); hedit = "false";}
    }
  });

  $("#toggle_hfav").click(function()
  {
    if (hfav == "false"){
      $("#hfav").slideToggle();
      hfav = "true"
      if (hposts == "true") {$("#hposts").slideToggle(); hposts = "false";}
      if (hcomm == "true") {$("#hcomm").slideToggle(); hcomm = "false";}
      if (hedit == "true") {$("#hedit").slideToggle(); hedit = "false";}
    }
  });
