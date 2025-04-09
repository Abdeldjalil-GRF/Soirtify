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
    echo json_encode(["status" => "error", "message" => "Database connection failed."]);
    exit;
}

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Retrieve the chosen sports and total price from the POST request
        if (!isset($_POST['added_sports']) || !isset($_POST['total_price'])) {
            echo json_encode(["status" => "error", "message" => "Missing necessary data (sports and price)."]);
            exit;
        }

        $addedSports = json_decode($_POST['added_sports']);  // List of sports
        $totalPrice = htmlspecialchars($_POST['total_price']);  // Total price

        // Retrieve the user's email, first name, and last name
        $sql = "SELECT mail, prenom, nom FROM clients WHERE id_client = :user_id";
        $stmt = executeQuery($sql, [':user_id' => $_SESSION['user_id']]);
        $client = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$client) {
            echo json_encode(["status" => "error", "message" => "User not found."]);
            exit;
        }

        $email = $client['mail'];
        $prenom = $client['prenom'];
        $nom = $client['nom'];

        // Prepare the list of selected sports
        $sportsListHTML = "<ul>";
        foreach ($addedSports as $sport) {
            $sportsListHTML .= "<li>" . htmlspecialchars($sport) . "</li>";
        }
        $sportsListHTML .= "</ul>";

        // Sending the summary email to the user with PHPMailer with the data for our app
         $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sportify.contact.87@gmail.com'; 
            $mail->Password = 'chjf walg rzgh lrwl'; 
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // The sender's email
            $mail->setFrom('sportify.contact.87@gmail.com', 'Sportify Contact');

            // The user's email (recipient)
            $mail->addAddress($email); // User's email

            $mail->isHTML(true);
            $mail->Subject = "Summary of your selection - SPORTIFY";
            $mail->Body = "
                <html>
                <head>
                    <title>Your Selection Summary</title>
                </head>
                <body>
                    <h2>Hello $prenom $nom,</h2>
                    <p>Thank you for choosing Sportify. Below is a summary of the sports you have selected:</p>
                    $sportsListHTML
                    <h3>Total to pay: $totalPrice €</h3>
                    <p>We thank you for your trust and wish you a wonderful sporting experience!</p>
                    <p>Best regards, <br> The Sportify Team</p>
                </body>
                </html>
            ";

            if ($mail->send()) {
                echo json_encode(["status" => "success", "message" => "Your summary has been sent to your email address. Redirecting to Home ..."]);
            } else {
                echo json_encode(["status" => "error", "message" => "The email could not be sent."]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "The email could not be sent: {$mail->ErrorInfo}"]);
        }
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Error during the operation: " . $e->getMessage()]);
    }
}
?>
