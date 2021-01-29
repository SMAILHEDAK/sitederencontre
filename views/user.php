<?php
  require "../controllers/global_controller.php";
  require "../controllers/user_controller.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!-- CDN AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <!-- CDN font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 

    <!-- self style + icon tab -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/img/logo.png">
    <title>Munch</title>

</head>
<body class="usersBody">

  <?php 
    require "../assets/html/navbar.html";
    require "../assets/html/navbar2user.html";
    require "../assets/html/navbar3.html"; ?>

  <div class="container-fluid indexParallax">
    <div class="text-center mx-auto mb-3 usersTitleDiv w-auto">
      <h1 class="usersTitle">Votre profil</h1>
    </div>

    <!-- Display cookie's informations -->
    <div class="row justify-content-center">
      <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2 mb-3 usersInfoTitle">Nom</div>
      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-3 usersInfoData"><?= $_COOKIE["lastname"] ?></div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2 mb-3 usersInfoTitle">Prénom</div>
      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-3 usersInfoData"><?= $_COOKIE["surname"] ?></div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2 mb-3 usersInfoTitle">Age</div>
      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-3 usersInfoData"><?= $_COOKIE["age"] ?> ans</div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2 mb-3 usersInfoTitle">Genre</div>
      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-3 usersInfoData"><?= $_COOKIE["gender"] ?></div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2 mb-3 usersInfoTitle">Code Postal</div>
      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-3 usersInfoData"><?= $_COOKIE["postcode"] ?></div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2 mb-3 usersInfoTitle">Email</div>
      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-3 usersInfoData"><?= $_COOKIE["email"] ?></div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2 mb-3 usersInfoTitle">Vous recherchez</div>
      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-3 usersInfoData"><?= $_COOKIE["searchingFor"] ?></div>
    </div>
    <div class="row justify-content-center text-center usersBtnDiv">
      <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2 align-self-center">
        <a href="user.php?clickBtnRaz=true" class="usersBtnRaz">Effacer le profil</a>
      </div>
      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 align-self-center">
        <a href="http://www.meetic.fr" class="usersBtnMeetic" target="_blank">Aller sur le site de Meetic</a>
      </div>
    </div>

  </div>

  <!-- footer -->
  <?php require "../assets/html/footer1.html"; ?>
  <?php require "../assets/html/footer2.html"; ?>
  <?php require "../assets/html/footer3.html"; ?>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>

</body>
</html>
