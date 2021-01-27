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
    <link rel="shortcut icon" href="../assets/img/logo.png">
    <title>Made with "LOVE"</title>
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
    <div class="container-fluid">
      <div class="text-center loversTitleDiv">
        <h1 class="loversTitleCards">Nos candidats à conquête</h1>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4 justify-content-around">
        <?php 
          for ($i = 0 ; $i < count($tabSingles) ; $i++){ 
            if (($_COOKIE["searchingFor"] == $tabSingles[$i]["gender"])||($_COOKIE["searchingFor"]=="cookie")){?>

            <!-- if gender searching = gender of the table's row OR gender searching = "cookie", creation of the card -->
              <div class="col">
                <div class="card border-dark shadow-lg p-3 mb-5 rounded loversCardSingle">
                  <div class="mx-auto">
                    <img src="../assets/img/<?= $tabSingles[$i]["picture"] ?>" alt="Img profil 0" class="card-img-top loversCardImg">
                  </div>
                  <div class="card-header text-center">
                    <h2 class="card-title loversCardTitle"><?= $tabSingles[$i]["firstname"] . " " . $tabSingles[$i]["lastname"] ?></h2>
                  </div>
                  <div class="card-body">
                    <p class="loversCardText">Age : <?= $tabSingles[$i]["age"]?></p>
                    <div class="mx-auto">
                        <a href="" class="loversCardBtnLike">Mangez-moi</a>
                    </div>
                  </div>
                  <div class="card-footer loversCardFooter">
                    <div class="card-text text-center">
                      <p class="loversCardFooterPart">Code postal</p>
                      <p> <?= $tabSingles[$i]["zipcode"] ?></p>
                    </div>
                    <div class="card-text text-center"><p class="loversCardFooterPart">Description </p></div>
                    
                    <p><?= $tabSingles[$i]["description"] ?></p>
                  </div>
                </div>
              </div>
            <?php  }
           } ?>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Mentions Légales</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×</span>
                    </button>
                </div>

                <div class="modal-body text-center">
                    <div>

                        <p>Nom du site web : Munch
                        <p>
                        <p>Adresse : www.munch.com</p>
                        <p>Propriétaire : MunchInc</p>
                        <p>Responsable de publication : Smaïl/Catherine @LAMANU</p>
                    </div>

                    <div>Conception et réalisation : MunchInc</p>
                        <p>Animation : MunchInc </p>
                        <p>Hébergement : LesCookiesDeBrigittes</p>

                        <p> MunchInc – SAS au capital de 235 cookies – RCS 3.4.5.6 –
                            Frafjordstraen 22, 4335 Dirdal, Norway
                            </p>
                        <p> webmaster@munchme.com </p>

                    </div>

                    <div>
                        <p>Conditions d’utilisation</p>
                        <p>
                            L’utilisation du présent site implique l’acceptation pleine et entière des conditions
                            générales
                            d’utilisation décrites ci-après. Ces conditions d’utilisation sont susceptibles d’être
                            modifiées ou
                            complétées à tout moment.

                            Les informations et documents du site sont présentés à titre indicatif, ne revêtent pas un
                            caractère
                            exhaustif, et ne peuvent engager la responsabilité du propriétaire du site.

                            Le propriétaire du site ne peut être tenu responsable des dommages directs et indirects
                            consécutifs à
                            l’accès au site.
                            Interactivité

                            Les utilisateurs du site peuvent éventuellement y déposer du contenu, apparaissant sur le
                            site dans des
                            espaces dédiés (notamment via les commentaires). Le contenu déposé reste sous la
                            responsabilité de leurs
                            auteurs, qui en assument pleinement l’entière responsabilité juridique.

                            Le propriétaire du site se réserve le droit de retirer sans préavis et sans justification
                            tout contenu
                            déposé par les utilisateurs qui ne satisferait pas à la charte déontologique du site ou à la
                            législation en
                            vigueur.

                            Sauf mention contraire, tous les éléments accessibles sur le site (textes, images,
                            graphismes, logo, icônes,
                            sons, logiciels, etc.) restent la propriété exclusive de leurs auteurs, en ce qui concerne
                            les droits de
                            propriété intellectuelle ou les droits d’usage.
                        <ol>

                            <li>Toute reproduction, représentation, modification, publication, adaptation de tout ou
                                partie des éléments du
                                site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation
                                écrite préalable de
                                l’auteur.</li>
                            <li>
                                Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il
                                contient est considérée
                                comme constitutive d’une contrefaçon et peut être poursuivie en justice.</li>
                            <li>
                                Les marques et logos reproduits sur le site sont déposés par les sociétés qui en sont
                                propriétaires.</li>
                        </ol>
                        <p>

                        <p>
                            Le propriétaire du site décline toute responsabilité et n’est pas engagé par le
                            référencement via des liens
                            hypertextes, de ressources tierces présentes sur le réseau Internet, tant en ce qui concerne
                            leur contenu
                            que leur pertinence.

                            Le propriétaire du site autorise les liens hypertextes vers l’une des pages de ce site, à
                            condition que
                            ceux-ci ouvrent une nouvelle fenêtre et soient présentés de manière non équivoque afin
                            d’éviter :

                            tout risque de confusion entre le site citant et le propriétaire du site
                            ainsi que toute présentation tendancieuse, ou contraire aux lois en vigueur.

                            Le propriétaire du site se réserve le droit de demander la suppression d’un lien s’il estime
                            que le site
                            source ne respecte pas les règles ainsi définies.
                            Tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données
                            personnelles le
                            concernant, en effectuant sa demande écrite et signée, accompagnée d’une preuve d’identité.
                            5 6 7 8

                            Le site ne recueille pas d’informations personnelles, et n’est pas assujetti à déclaration à
                            la CNIL. 9
                        </p>
                    </div>
                    <p>
                    Crédit photos : Photos royalty free de chez pexels.com
                    </p>
                    <p>CDN utilisés : Bootstrap 5, Font Awesome.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Fermer</button>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div>
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
