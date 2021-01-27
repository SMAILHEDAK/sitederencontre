<?php
  require "../controllers/user_controller.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="/var/www/html/sitederencontre/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Made with "LOVE"</title>

</head>

<body class="usersBody">
<nav class="navStyle navbar navbar-expand-sm sticky-top navStyle">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <p class="nav-link navTxtUser" href="#">Bonjour <?= $_COOKIE["surname"]?> <i class="far fa-heart"></i></p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lovers.php">Nos célibataires</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php">Profil</a>
      </li>    
    </ul>
  </div>  
</nav>

  <div class="container-fluid">
    <div class="text-center usersTitleDiv">
      <h1 class="usersTitle align-self-center ">Votre profil</h1>
    </div>

    <!-- Display cookie's informations -->
    <div class="row justify-content-center">
      <div class="col col-md-1 usersInfoTitle">Nom</div>
      <div class="col col-md-1 usersInfoData"><?= $_COOKIE["lastname"] ?></div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-md-1 usersInfoTitle">Prénom</div>
      <div class="col col-md-1 usersInfoData"><?= $_COOKIE["surname"] ?></div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-md-1 usersInfoTitle">Age</div>
      <div class="col col-md-1 usersInfoData"><?= $_COOKIE["age"] ?></div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-md-1 usersInfoTitle">Genre</div>
      <div class="col col-md-1 usersInfoData"><?= $_COOKIE["gender"] ?></div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-md-1 usersInfoTitle">Code Postal</div>
      <div class="col col-md-1 usersInfoData"><?= $_COOKIE["postcode"] ?></div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-md-1 usersInfoTitle">Email</div>
      <div class="col col-md-1 usersInfoData"><?= $_COOKIE["email"] ?></div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-md-1 usersInfoTitle">Vous recherchez</div>
      <div class="col col-md-1 usersInfoData"><?= $_COOKIE["searchingFor"] ?></div>
    </div>
    <div class="row justify-content-center text-center usersBtnDiv">
      <div class="col col-md-2 align-self-center">
        <a href="user.php?clickBtnRaz=true" class="usersBtnRaz">Effacer le profil</a>
      </div>
      <div class="col col-md-3 align-self-center">
        <a href="http://www.meetic.fr" class="usersBtnMeetic" target="_blank">Aller sur le site de Meetic</a>
      </div>
    </div>

</div>



    <script src="/assets/js/script.js"></script>
</body>
</html>
