<?php
if(isset($_POST['submit_button'])) {
    $lastname = $_POST["lastname"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    $genre = $_POST["genre"];
    $postcode = $_POST["postcode"];
    $email = $_POST["mail"];
    $searchingFor = $_POST["searchingFor"];
    if($lastname && $surname && $age && $genre && $email && $postcode && $searchingFor){
        setcookie("lastname", $lastname, time()+86400,"/");
        setcookie("surname", $surname, time()+86400,"/");
        setcookie("age", $age, time()+86400,"/");
        setcookie("genre", $genre, time()+86400,"/");
        setcookie("postcode", $postcode, time()+86400);
        setcookie("email", $email, time()+86400,"/");
        setcookie("searchingFor", $searchingFor, time()+86400,"/");
        header( "Location:views/lovers.php");
		exit();
}
}
?>
