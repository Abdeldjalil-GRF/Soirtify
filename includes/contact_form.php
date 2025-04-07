<?php
session_start();
header("Content-Type: application/json");

include 'C:/xampp/htdocs/SPORTIFY/config/database_connexion.php';
require 'C:/xampp/htdocs/SPORTIFY/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/SPORTIFY/PHPMailer/src/SMTP.php';
require 'C:/xampp/htdocs/SPORTIFY/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Vérifie que la connexion à la base de données est bien établie
if (!isset($connexion)) {
    echo json_encode(["status" => "error", "message" => "Connexion à la base de données échouée."]);
    exit;
}

// Vérifie que la requête est bien en POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST["nom"] ?? ""));
    $prenom = htmlspecialchars(trim($_POST["prenom"] ?? ""));
    $num_tel = htmlspecialchars(trim($_POST["num_tel"] ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));
    $message = htmlspecialchars(trim($_POST["message"] ?? ""));


    try {
        // Insère les données dans la base
        $sql = "INSERT INTO commentaires (nom, prenom, num_tel, mail, commentaire) 
                VALUES (:nom, :prenom, :num_tel, :mail, :commentaire)";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":num_tel" => $num_tel,
            ":mail" => $email,
            ":commentaire" => $message
        ]);

        // Envoi de l'email de récapitulatif à l'utilisateur avec PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sportify.contact.87@gmail.com'; // Votre adresse Gmail
            $mail->Password = 'chjf walg rzgh lrwl'; // Mot de passe d'application
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // L'email de l'expéditeur
            $mail->setFrom('sportify.contact.87@gmail.com', 'Sportify Contact');

            // L'adresse de l'utilisateur (destinataire)
            $mail->addAddress($email); // L'email de l'utilisateur

            $mail->isHTML(false);
            $mail->Subject = "Confirmation de reception de votre message";
            $mail->Body = "Bonjour $prenom $nom,\n\nMerci d'avoir nous avoir contacté. Voici un récapitulatif de votre message :\n\n"
                . "Nom: $nom\nPrénom: $prenom\nTéléphone: $num_tel\nEmail: $email\nMessage:\n$message\n\nNous reviendrons vers vous dès que possible.\n\nCordialement,\nL'équipe Sportify";

            if ($mail->send()) {
                echo json_encode(["status" => "success", "message" => "Votre message a été envoyé et enregistré. Un email de confirmation a été envoyé à votre adresse."]);
            } else {
                echo json_encode(["status" => "error", "message" => "Le message est enregistré mais l'email de confirmation n'a pas été envoyé."]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "L'email n'a pas pu être envoyé : {$mail->ErrorInfo}"]);
        }
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Erreur lors de l'enregistrement : " . $e->getMessage()]);
    }
}
?>
