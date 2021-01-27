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
    <title>Munch</title>
</head>
<body class="container-fluid wh-100 m-0 p-0">

    <header class="container-fluid d-flex justify-content-center align-items-center" id="welcome">
    <i class="fas fa-cookie-bite fa-3x iconColor" alt="BITEME">MUNCH</i>
    </header>
      <!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------   BLOC IMAGE   --------------------------------------------------------------->
        <!-------------------------------------------------------------------------------------------------------------------------------------------->


    <section class="indexParallax" id="welcomeForm">
        <section class="container-fluid w-75 h-auto d-flex indexWelcomeFormImage justify-content-center">
            <div class="row welcomeFormImage align-items-center">
                <div class="col-md-6">
                    <div class="row pt-4">
                        <div class="col-md-12">
                        </div>
                    </div>
                    <div class="row p-5">
                        <div class="col-md-12">
                            <div>
                                <img src="assets/img/imageform.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                


                <!--------------------------------------------------------------------------------------------------------------------------------------------->
                <!---------------------------------------------------   BLOC FORMULAIRE   ----------------------------------------------------------->
                <!--------------------------------------------------------------------------------------------------------------------------------------------->

                <div id="info" class="indexWelcomeForm col-md-6">
                    <div class="align-items-center row pt-4">
                        <div class="col-md-12">
                        </div>
                    </div>
                    <div class="row p-5">
                        <div class="col-md-12 text-center fw-bold">
                            <div class="text-center">
                                <div id="formcard" class="container-fluid">
                                    <form action="index.php" method="post">
                                        <div class="row mb-3">
                                       <label for="lastname">Nom :</label>
                                       <div class="col">
                                       <input type="text" name="lastname" id="lastname" required>
                                       </div>
                                       </div>
                                       <div class="row mb-3">
                                       <label for="surname">Prénom :</label>
                                       <div class="col">
                                       <input type="text" name="surname" id="surname" required>
                                       </div>
                                       </div>
                                       <div class="row mb-3">
                                       <label for="age">Age :</label>
                                       <div class="col">
                                       <input type="text" name="age" id="age" required>
                                       </div>
                                       </div>
                                       <div class="row mb-3">
                                       <label for="gender">Genre :</label>
                                       <div class="col d-flex justify-content-center">
                                       <select name="gender" id="gender" class="form-select w-auto" required>
                                           <option value="gender">genre</option>
                                           <option value="homme">homme</option>
                                           <option value="femme">femme</option>
                                           <option value="cookie">cookie</option>
                                       </select>
                                       </div>
                                       </div>
                                       <div class="row mb-3">
                                       <label for="postcode">Code Postal :</label>
                                       <div class="col">
                                       <input type="text" name="postcode" id="postcode"required>
                                       </div>
                                       </div>
                                       <div class="row mb-3">
                                       <label for="mail">Adresse Mail :</label>
                                       <div class="col">
                                       <input type="email" name="mail" id="mail" required>
                                       </div>
                                       </div>
                                       <div class="row mb-3">
                                       <label for="searchingFor">Vous recherchez :</label>
                                       <div class="col d-flex justify-content-center">
                                       <select name="searchingFor" id="searchingFor" class="form-select w-auto" required>
                                           <option value="genre">genre</option>
                                           <option value="homme">homme</option>
                                           <option value="femme">femme</option>
                                           <option value="cookie">cookie</option>
                                       </select>
                                       </div>
                                       </div>
                                       <input type="submit" name="submit_button" value="S'enregistrer!" class="indexBtnSubmit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</section>

    <?php require "controllers/footer.html"; ?>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
