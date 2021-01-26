<!-- faudra surement que tu changes la source du require -->
<?php
    require "controllers/index_controller.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" >
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="assets/img/logo.png">
    <title>Made with "LOVE"</title>
</head>
<body>
    <header class="container-fluid row" id="welcome">
    <i class="fas fa-cookie-bite fa-3x iconColor col align-left pt-2 pr-2" alt="BITEME"></i>
    </header>
    <div id="formcard" class="parallax container-fluid align-items-center border d-flex justify-content-center w-50">
        <form action="index.php" method="post">
            <div class="row mb-3">
           <label for="lastname">Nom :</label>
           <div class="col-auto">
           <input type="text" name="lastname" id="lastname">
           </div>
           </div>
           <div class="row mb-3">
           <label for="surname">Prénom :</label>
           <div class="col-auto">
           <input type="text" name="surname" id="surname">
           </div>
           </div>
           <div class="row mb-3">
           <label for="age">Age :</label>
           <div class="col-auto">
           <input type="text" name="age" id="age">
           </div>
           </div>
           <div class="row mb-3">
           <label for="genre">Genre :</label>
           <div class="col-auto">
           <select name="genre" id="genre" class="form-select">
               <option value="genre">genre</option>
               <option value="homme">homme</option>
               <option value="femme">femme</option>
               <option value="cookie">cookie</option>
           </select>
           </div>
           </div>
           <div class="row mb-3">
           <label for="postcode">Code Postal :</label>
           <div class="col-auto">
           <input type="text" name="postcode" id="postcode" class="row">
           </div>
           </div>
           <div class="row mb-3">
           <label for="mail">Adresse Mail :</label>
           <div class="col-auto">
           <input type="email" name="mail" id="mail" class="row">
           </div>
           </div>
           <div class="row mb-3">
           <label for="searchingFor">Vous recherchez :</label>
           <div class="col-auto">
           <select name="searchingFor" id="searchingFor" class="form-select">
               <option value="genre">genre</option>
               <option value="homme">homme</option>
               <option value="femme">femme</option>
               <option value="cookie">cookie</option>
           </select>
           </div>
           </div>
           <input type="submit" name="submit_button" value="S'enregistrer!">
        </form>
    </div>
    <a href="views/lovers.php">LOVERS</a>
    <script src="assets/js/script.js"></script>
</body>
</html>
