<?php
$host = "localhost";  
$dbname = "sportify"; 
$username = "root";   
$password = "";       

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    die("Erreur : " . $e->getMessage());
}


function executeQuery($sql_requete, $params = []) {
    global $connexion;
    
    try {
        $stmt = $connexion->prepare($sql_requete);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {
        die("Query execution failed: " . $e->getMessage());
    }
}


?>
