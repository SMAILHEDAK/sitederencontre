<?php
if (isset($_COOKIE["lastname"], $_COOKIE["surname"], $_COOKIE["age"], $_COOKIE["gender"], $_COOKIE["postcode"], $_COOKIE["email"], $_COOKIE["searchingFor"])){
    header( "Location:views/lovers.php");
    exit();
}
else{
if(isset($_POST['submit_button'])) {
    $lastname = $_POST["lastname"];
    $lastname = htmlentities($lastname);
    $surname = $_POST["surname"];
    $surname = htmlentities($surname);
    $age = $_POST["age"];
    $age = htmlentities($age);
    $gender = $_POST["gender"];
    $gender = htmlentities($gender);
    $postcode = $_POST["postcode"];
    $postcode = htmlentities($postcode);
    $email = $_POST["mail"];
    $email = htmlentities($email);
    $searchingFor = $_POST["searchingFor"];
    $searchingFor = htmlentities($searchingFor);
    if($lastname && $surname && $age && $gender && $email && $postcode && $searchingFor){
        setcookie("lastname", $lastname, time()+86400,"/");
        setcookie("surname", $surname, time()+86400,"/");
        setcookie("age", $age, time()+86400,"/");
        setcookie("gender", $genre, time()+86400,"/");
        setcookie("postcode", $postcode, time()+86400);
        setcookie("email", $email, time()+86400,"/");
        setcookie("searchingFor", $searchingFor, time()+86400,"/");
        header( "Location:views/lovers.php");
		exit();
}
}
}

?>
