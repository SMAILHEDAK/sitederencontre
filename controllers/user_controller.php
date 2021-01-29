<?php

  changeCookieGender("user");

  if (isset($_GET["clickBtnRaz"])){
    eraseCookie();
    header( "Location:../index.php");
    exit();
  }

  // Functions
  function eraseCookie(){
    setcookie("lastname", "", time()-3600, "/", "", false, false);
    setcookie("surname", "", time()-3600, "/", "", false, false);
    setcookie("age", "", time()-3600, "/", "", false, false);
    setcookie("gender", "", time()-3600, "/", "", false, false);
    setcookie("postcode", "", time()-3600, "/", "", false, false);
    setcookie("email", "", time()-3600, "/", "", false, false);
    setcookie("searchingFor", "", time()-3600, "/", "", false, false);
  }
?>
