<?php

function crTbIndexSinglesRandom($nbSingles){
  // Creation of a table with the index of singles table mixed
  for ($i = 1 ; $i <= $nbSingles ;  $i++){
    $tabIndex[$i-1] = $i-1;
  }
  shuffle($tabIndex);
  return $tabIndex;
}

function crTbSingles (){
  // Creation of the singles table
  $tb = [["lastname"=>"Hancock", "firstname"=> "Herbie", "age"=>"33 ans", "gender"=>"homme", "mail"=>"JohnDoe@gmail.com", "zipcode"=>"36400", "picture"=>"HancockH19.jpg", "description"=>"Bel homme de 33 ans, sportif, aime le cinéma et les ballades et ... le piano !"],
  ["lastname"=>"Grapelli", "firstname"=>"Stéphane", "age"=>"35", "gender"=>"homme", "mail"=>"stephgrappelli@laposte.net", "zipcode"=>"62420", "picture"=>"GrappelliS12.jpg", "description"=>"Avec mon pote Django nous avons fait les 400 coups, mais maintenant j'aimerais me poser un peu !"],
  ["lastname"=>"Reinhardt", "firstname"=>"Django", "age"=>"28", "gender"=>"homme", "mail"=>"djreinhardt@yahoo.fr", "zipcode"=>"32000", "picture"=>"ReinhardtD13.jpg", "description"=>"Mon ami Stéphane veut à tout prix me caser, je préfère prendre les devants !"],
  ["lastname"=>"Ellington", "firstname"=>"Duke", "age"=>"36", "gender"=>"homme", "mail"=>"dellington@gmail.com", "zipcode"=>"432600", "picture"=>"EllingtonD14.jpg", "description"=>"Mes copains sont ma famille, j'aimerais l'agrandir"],
  ["lastname"=>"Davis", "firstname"=>"Miles", "age"=>"36", "gender"=>"homme", "mail"=>"mildavis@live.com", "zipcode"=>"648890", "picture"=>"DavisM15.jpg", "description"=>"Mon incroyable sensibilité vous séduira"],
  ["lastname"=>"Shorty", "firstname"=>"Trombone", "age"=>"24", "gender"=>"homme", "mail"=>"TromboneShorty@theposte.net", "zipcode"=>"564200", "picture"=>"ShortyT16.jpg", "description"=>"GlobeTrotter dans l'âme pour partager ma musique avec un maximum de personnes"],
  ["lastname"=>"Maalouf", "firstname"=>"Ibrahim", "age"=>"42", "gender"=>"homme", "mail"=>"IMaalouf@laposte.net", "zipcode"=>"93180", "picture"=>"MaaloufI17.jpg", "description"=>"La trompette à 4 pistons, c'est moi !"],
  ["lastname"=>"Brown", "firstname"=>"James", "age"=>"26", "gender"=>"cookie", "mail"=>"brownjam@hotmail.com", "zipcode"=>"078650", "picture"=>"BrownJ18.jpg", "description"=>"Je suis quelque peu hyper actif, j'adore danser"],
  ["lastname"=>"Tatum", "firstname"=>"Art", "age"=>"34", "gender"=>"cookie", "mail"=>"arttatum@live.fr", "zipcode"=>"958670", "picture"=>"TatumA10.jpg", "description"=>"Je suis tellement habile de mes doigts ..."],
  ["lastname"=>"Legrand", "firstname"=>"Michel", "age"=>"56", "gender"=>"homme", "mail"=>"mikethegreat@hotmail.com", "zipcode"=>"75100", "picture"=>"LegrandM11.jpg", "description"=>"Grand poête, je saurai vous charmer"],
  ["lastname"=>"Fitzgerald", "firstname"=>"Ella", "age"=>"45", "gender"=>"cookie", "mail"=>"ellafitz@hotmail.com", "zipcode"=>"85720", "picture"=>"FitzgeraldE0.jpg", "description"=>"Femme de 45 ans, chanteuse de jazz, j'adore le scatt"],
  ["lastname"=>"Bley", "firstname"=>"Carla", "age"=>"27", "gender"=>"cookie", "mail"=>"cbley@theposte.net", "zipcode"=>"05200", "picture"=>"BleyC1.jpg", "description"=>"Jeune femme pianiste principalement dans le jazz, mais j'aime aussi le rock et la pop !"],
  ["lastname"=>"Jones", "firstname"=>"Norah", "age"=>"24", "gender"=>"femme", "mail"=>"jonesnorah@gmail.com", "zipcode"=>"74610", "picture"=>"JonesN2.jpg", "description"=>"Je suis quelqu'un de très ouvert et j'ai une magnifique voix. Mes animaux de compagnie sont d'accord !"],
  ["lastname"=>"Simone", "firstname"=>"Nina", "age"=>"32", "gender"=>"femme", "mail"=>"simonen@yahoo.fr", "zipcode"=>"73750", "picture"=>"SimoneN3.jpg", "description"=>"J'aime me faire entendre, mais je n'aime pas qu'on me dise monsieur Simon..."],
  ["lastname"=>"Paceo", "firstname"=>"Anne", "age"=>"37", "gender"=>"femme", "mail"=>"anpaceo@yahoo.fr", "zipcode"=>"71150", "picture"=>"PaceoA4.jpg", "description"=>"Je suis une furieuse, j'aime taper, mais sous la carapace, un tendre coeur bat !"],
  ["lastname"=>"Morrow", "firstname"=>"Sarah", "age"=>"28", "gender"=>"femme", "mail"=>"smorrow@live.fr", "zipcode"=>"04290", "picture"=>"MorrowS5.jpg", "description"=>"Exercer un métier de mec n'est pas pour me déplaire"],
  ["lastname"=>"Schneider", "firstname"=>"Maria", "age"=>"41", "gender"=>"femme", "mail"=>"schneidermaria@gmail.com", "zipcode"=>"05820", "picture"=>"SchneiderM6.jpg", "description"=>"Je suis très curieuse et j'ai du caractère, un peu touche à tout"],
  ["lastname"=>"Renaudin", "firstname"=>"Lucienne", "age"=>"22", "gender"=>"femme", "mail"=>"lucienRenaud@laposte.net", "zipcode"=>"44380", "picture"=>"RenaudinL7.jpg", "description"=>"Même avec un vieux prénom on peut être moderne. "],
  ["lastname"=>"Holiday", "firstname"=>"Billie", "age"=>"44", "gender"=>"femme", "mail"=>"holidaybill@theposte.net", "zipcode"=>"06640", "picture"=>"HolidayB8.jpg", "description"=>"Hyper sensible, je n'aime pas les machos"],
  ["lastname"=>"Baker", "firstname"=>"Joséphine", "age"=>"32", "gender"=>"femme", "mail"=>"jbaker@aol.com", "zipcode"=>"39540", "picture"=>"BakerJ9.jpg", "description"=>"Contrairement à ce que mon nom indique, je ne suis pas très bonne cuisinière, mais je saurai vous séduire autrement..."]];

  // line type
  // ["lastname"=>"", "firstname"=>"", "age"=>"", "gender"=>"", "mail"=>"@", "zipcode"=>"", "picture"=>"", "description"=>""]
  return $tb;
}


?>
