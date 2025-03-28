<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'Sportify/config/database_connexion.php';

    $email = $_POST["email"];
    $password = $_POST["password"];
    
}

?>