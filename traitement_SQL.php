<?php
$host = "localhost";
$username = "root";
$pass = "";
$database = "piscine";

$db = mysqli_connect($host, $username, $pass)  or die('Erreur de connexion '.mysqli_error());
mysqli_select_db($db, $database)  or die('Erreur de selection '.mysqli_error());
    

?>