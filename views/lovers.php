<?php
  require "../controllers/lovers_controller.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 
    <title>Made with "LOVE"</title>
</head>

<body class="loversBody">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Bonjour (insérer le cookie nom d'utilisateur) <3</a>
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

    <!-- Creation of singles table -->
    <?php $tabSingles = crTbSingles()?>
    <!-- Card management -->
    <div class="container">
      <h1 class="loversTitleCards">Voici nos candidats à conquête</h1>
      <div class="card loversCardSingle">
        <img src="../assets/img/<?= $tabSingles[1]["picture"] ?>" alt="Img profil 0" class="card-img-top loversCardImg">
        <div class="card-header">
          <h2 class="card-title loversCardTitle"><?= $tabSingles[1]["firstname"] . " " . $tabSingles[1]["lastname"] ?></h2>
        </div>
        <div class="card-body">
          <p class="loversCardText">Age : <?= $tabSingles[1]["age"]?></p>
          <a href="" class="loversCardBtnLike">Mangez-moi</a>
        </div>
        <div class="card-footer loversCardFooter">
          Footer
        </div>
      </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>
