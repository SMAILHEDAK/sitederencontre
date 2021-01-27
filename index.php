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
                                       <input type="submit" name="submit_button" value="S'enregistrer!">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</section>




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
        <p class="globalFooterSubText">
         Notre but est de permettre aux fans de jazz et de cookies de trouver l'amour et s'épanouir dans leur vie d'artiste fan de cookies.
         Qu'ils s'identifient en tant qu'Homme, Femme, ou bien Cookie, rien ne les empêchera de trouver saxophone à leur guitare.
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase globalFooterText">MENTIONS LEGALES</h5>
        <ul class="list-unstyled mb-0">
          <li>
            <button type="button" class="btn globalFooterSubText" data-toggle="modal" data-target="#exampleModal">
            Accéder aux mentions légales
            </button>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0 globalFooterText">NOUS CONTACTER</h5>
        <ul class="list-unstyled">
          <li>
            <a href="mailto:someone@yoursite.com" target="_blank" rel="noopener noreferrer" class="globalFooterSubText">Contacter nous via email</a>
          </li>
          <li>
              <p class="globalFooterSubText">Ou bien retrouvez nous à cette adresse : Frafjordstraen 22, 4335 Dirdal, Norway </p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="text-center p-3 globalFooterSubText">
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
