<?php
  require "../controllers/lovers_controller.php"
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

<body class="loversBody">
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
        <a class="nav-link navTxtLink" href="lovers.php">Nos célibataires</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navTxtLink" href="user.php">Profil</a>
      </li>    
    </ul>
  </div>  
</nav>

    <!-- Creation of singles table -->
    <?php $tabSingles = crTbSingles()?>

    <!-- Card management -->
    <div class="container-fluid indexParallax loversContainer">
      <div class="text-center mx-auto mb-3 loversTitleDiv w-auto">
        <h1 class="loversTitleCards">Nos candidats à conquête</h1>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4 d-flex justify-content-center">
        <?php
          $tabIndexSingles = crTbIndexSinglesRandom(count($tabSingles));
          for ($i = 0 ; $i < count($tabSingles) ; $i++){ 
            $ind = $tabIndexSingles[$i];
            if ($_COOKIE["searchingFor"] == $tabSingles[$ind]["gender"]){?>

            <!-- if gender searching = gender of the table's row OR gender searching = "cookie", creation of the card -->
              <div class="col loversCardCol d-flex justify-content-center mx-3">
                <div data-aos="zoom-out" data-aos-duration="2000">
                  <div class="card border-dark shadow-lg rounded loversCardSingle d-flex align-self-center my-3">
                    <div class="mx-auto mt-3">
                      <img src="../assets/img/<?= $tabSingles[$ind]["picture"] ?>" alt="Img profil 0" class="card-img-top loversCardImg">
                    </div>
                    <div class="card-header text-center">
                      <h2 class="card-title loversCardTitle"><?= $tabSingles[$ind]["firstname"] . " " . $tabSingles[$ind]["lastname"] ?></h2>
                    </div>
                    <div class="card-body">
                      <div class="loversCardBody">
                        <p class="loversCardText">Age : <?= $tabSingles[$ind]["age"]?></p>
                        <?php
                          switch ($tabSingles[$ind]["gender"]){
                            case "homme" : ?> <i class="fas fa-mars fa-2x loversColMars"></i> <?php ; break;
                            case "femme" : ?> <i class="fas fa-venus fa-2x loversColVenus"></i> <?php ; break;
                            case "cookie" : ?> <i class="fas fa-venus-mars fa-2x loversColCookie"></i> <?php ; break;
                          }
                        ?>
                      </div>
                      <div class="mx-auto">
                          <a href="" class="loversCardBtnLike"><i class="fas fa-cookie-bite"></i> Mangez-moi</a>
                      </div>
                    </div>
                    <div class="card-footer loversCardFooter">
                      <div class="card-text text-center">
                        <p class="loversCardFooterPart">Code postal</p>
                        <p> <?= $tabSingles[$ind]["zipcode"] ?></p>
                      </div>
                      <div class="card-text text-center"><p class="loversCardFooterPart">Description </p></div>
                      
                      <p><?= $tabSingles[$ind]["description"] ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php  }
           } ?>
        </div>
    </div>

    <!-- footer -->
    <?php require "../assets/html/footer1.html"; ?>
    <?php require "../assets/html/footer2.html"; ?>
    <?php require "../assets/html/footer3.html"; ?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>

    <!-- JS pour AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>
