<?php
    require "/var/www/html/sitederencontre/controllers/index_controller.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="assets/img/logo.png">
    <title>Made with "LOVE"</title>
</head>
<body>
    <header class="container-fluid row" id="welcome">
    <i class="fas fa-cookie-bite fa-4x iconColor col align-left pt-2 pr-2" alt="BITEME"></i>
    </header>

    <div id="herobanner" class="parallax container-fluid">
        <form action="index.php" method="post" class="col-12">
           <label for="lastname">Nom :</label>
           <input type="text" name="lastname" id="lastname" class="row">
           <label for="surname">Prénom :</label>
           <input type="text" name="surname" id="surname" class="row">
           <label for="age">Age :</label>
           <input type="text" name="age" id="age" class="row">
           <label for="genre">Genre :</label>
           <select name="genre" id="genre" class="row mb-2">
               <option value="genre">genre</option>
               <option value="homme">homme</option>
               <option value="femme">femme</option>
               <option value="cookie">cookie</option>
           </select>
           <label for="postcode">Code Postal :</label>
           <input type="text" name="postcode" id="postcode" class="row">
           <label for="mail">Adresse Mail :</label>
           <input type="email" name="mail" id="mail" class="row">
           <label for="searchingFor">Vous recherchez :</label>
           <select name="searchingFor" id="searchingFor" class="row">
               <option value="genre">genre</option>
               <option value="homme">homme</option>
               <option value="femme">femme</option>
               <option value="fookie">cookie</option>
           </select>
           <input type="submit" name="submit_button" namevalue="S'enregistrer!">
        </form>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>
