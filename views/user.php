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
<nav class="navbar navbar-expand-sm sticky-top navStyle ">
  <a class="navbar-brand" href="lovers.php"><i class="fas fa-cookie-bite fa-2x iconColor" alt="BITEME">MUNCH</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ms-auto">
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

<!-- footer -->
<footer class="text-center text-lg-start globalFooter">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase globalFooterText">NOTRE MISSION</h5>
        <p class="text-white">
         Notre but est de permettre aux fans de jazz et de cookies de trouver l'amour et s'épanouir dans leur vie d'artiste fan de cookies.
         Qu'ils s'identifient en tant qu'Homme, Femme, ou bien Cookie, rien ne les empêchera de trouver saxophone à leur guitare.
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase globalFooterText">MENTIONS LEGALES</h5>
        <ul class="list-unstyled mb-0">
          <li>
            <button type="button" class="btn text-white" data-toggle="modal" data-target="#exampleModal">
            Accéder aux mentions légales
            </button>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0 globalFooterText">NOUS CONTACTER</h5>
        <ul class="list-unstyled">
          <li>
            <a href="mailto:someone@yoursite.com" target="_blank" rel="noopener noreferrer" class="text-white">Contacter nous via email</a>
          </li>
          <li>
              <p class="text-white">Ou bien retrouvez nous à cette adresse : Frafjordstraen 22, 4335 Dirdal, Norway </p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="text-center p-3 text-white">
    © 2021 Copyright: MunchInc
  </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
