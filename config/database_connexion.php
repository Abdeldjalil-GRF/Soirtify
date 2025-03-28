<?php
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "sportify"; 

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion successful ";
} catch(PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

?>
