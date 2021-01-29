<?php

  function changeCookieGender($namePage){
    if (isset($_GET["genderChoice"])){
      setcookie("searchingFor", $_GET["genderChoice"], time() + 86400, "/");
      
      header( "Location:" . $namePage. ".php");
      exit();
    }
  }

?>