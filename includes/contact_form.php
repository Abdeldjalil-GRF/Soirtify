<?php
session_start();
header("Content-Type: application/json");

include 'C:/xampp/htdocs/SPORTIFY/config/database_connexion.php';
require 'C:/xampp/htdocs/SPORTIFY/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/SPORTIFY/PHPMailer/src/SMTP.php';
require 'C:/xampp/htdocs/SPORTIFY/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the database connection is established
if (!isset($connexion)) {
    echo json_encode(["status" => "error", "message" => "Failed to connect to the database."]);
    exit;
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST["nom"] ?? ""));
    $prenom = htmlspecialchars(trim($_POST["prenom"] ?? ""));
    $num_tel = htmlspecialchars(trim($_POST["num_tel"] ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));
    $message = htmlspecialchars(trim($_POST["message"] ?? ""));

    try {
        // Insert data into the database
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

        // Send confirmation email to the user using PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sportify.contact.87@gmail.com'; // Your Gmail address
            $mail->Password = 'chjf walg rzgh lrwl'; // App password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Sender's email
            $mail->setFrom('sportify.contact.87@gmail.com', 'Sportify Contact');

            // Recipient's email
            $mail->addAddress($email); // User's email

            $mail->isHTML(false);
            $mail->Subject = "Confirmation of receipt of your message";
            $mail->Body = "Hello $prenom $nom,\n\nThank you for contacting us. Here is a summary of your message:\n\n"
                . "Last Name: $nom\nFirst Name: $prenom\nPhone: $num_tel\nEmail: $email\nMessage:\n$message\n\nWe will get back to you as soon as possible.\n\nBest regards,\nThe Sportify Team";

            if ($mail->send()) {
                echo json_encode(["status" => "success", "message" => "Your message has been sent and saved. A confirmation email has been sent to your address."]);
            } else {
                echo json_encode(["status" => "error", "message" => "Message saved, but confirmation email could not be sent."]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "Email could not be sent: {$mail->ErrorInfo}"]);
        }
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Error while saving your message: " . $e->getMessage()]);
    }
}
?>
