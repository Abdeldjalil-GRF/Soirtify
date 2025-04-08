<?php
session_start();
require ("/SPORTIFY/config/database_connexion.php");
require '/SPORTIFY/PHPMailer/src/PHPMailer.php';
require '/SPORTIFY/PHPMailer/src/SMTP.php';
require '/SPORTIFY/PHPMailer/src/Exception.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données
    $cours_nom = isset($_POST['sport']) ? trim($_POST['sport']) : '';
    $niveau = isset($_POST['niveau']) ? trim($_POST['niveau']) : '';

    try {
        // 1. Récupérer l'ID du cours correspondant
        $stmt = $connexion->prepare("SELECT id FROM cours WHERE nom = :nom AND niveau = :niveau");
        $stmt->execute([':nom' => $cours_nom, ':niveau' => $niveau]);
        $cours = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$cours) {
            throw new Exception("Ce cours/niveau n'existe pas");
        }

        $cours_id = $cours['id'];
        $user_id = $_SESSION['user_id'];

        // 2. Vérifier si l'inscription existe déjà
        $stmt = $connexion->prepare("SELECT * FROM cours_client WHERE client_id = :user_id AND cours_id = :cours_id");
        $stmt->execute([':user_id' => $user_id, ':cours_id' => $cours_id]);
        
        if ($stmt->fetch()) {
            throw new Exception("Vous êtes déjà inscrit à ce cours");
        }

        // 3. Insérer dans la table de liaison
        $stmt = $connexion->prepare("INSERT INTO cours_client (client_id, cours_id) VALUES (:user_id, :cours_id)");
        $stmt->execute([':user_id' => $user_id, ':cours_id' => $cours_id]);

        echo "Inscription réussie au cours $cours_nom (niveau $niveau)";
        
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "Méthode non autorisée";
}
?>