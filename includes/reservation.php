<?php
session_start();
require "../config/database_connexion.php";
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

header('Content-Type: application/json'); 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Not authenticated']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sport_nom = trim($_POST['sport']);
    $categorie = trim($_POST['niveau']);

    try {
        //retrieve the sport ID
        $sql_get_sport = "SELECT id_sport FROM sports WHERE nom = :nom";
        $stmt1 = executeQuery($sql_get_sport,[':nom' => $sport_nom]);
        
        $sport = $stmt1->fetch(PDO::FETCH_ASSOC);
        
        if (!$sport) throw new Exception("Sport not found");

        //rRetrieve the course ID
        $sql_get_course = "SELECT id_cour FROM cours WHERE id_sport = :id_sport AND categorie = :categorie";
        $stmt2 = executeQuery($sql_get_course,[':id_sport' => $sport['id_sport'],':categorie' => $categorie]);
       
        
        $cours = $stmt2->fetch(PDO::FETCH_ASSOC);
        
        if (!$cours) throw new Exception("Course not available for this level");

        //check for existing registration
        $sql_get_user = "SELECT * FROM cours_clients WHERE id_client = :id_client AND id_cour = :id_cour" ; 
        $stmt3 = executeQuery($sql_get_user,[
            ':id_client' => $_SESSION['user_id'],
            ':id_cour' => $cours['id_cour']
        ]);
        
        if ($stmt3->fetch()) {
            throw new Exception("Registration already exists");
        }

        //insert the reservation
        $sql_to_insert = "INSERT INTO cours_clients (id_client, id_cour) VALUES (:id_client, :id_cour)";
        $stmt4 = executeQuery($sql_to_insert,[':id_client' => $_SESSION['user_id'],':id_cour' => $cours['id_cour']]);
        

        //retrieve user info
        $sql_retrieve_user  = "SELECT nom, prenom, mail FROM clients WHERE id_client = :user_id";
        $stmt5= executeQuery($sql_retrieve_user,[':user_id' => $_SESSION['user_id']]);
        
        $user = $stmt5->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            throw new Exception("User not found");
        }

        //email configuration
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sportify.contact.87@gmail.com'; 
            $mail->Password = 'chjf walg rzgh lrwl'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('sportify.contact.87@gmail.com', 'Sportify');
            $mail->addAddress($user['mail'], $user['prenom'].' '.$user['nom']);

            $mail->isHTML(true);
            $mail->Subject = "Course registration confirmation";
            $mail->Body = "
                <h1>Thank you for registering!</h1>
                <p>Hello {$user['prenom']},</p>
                <p>Your registration for the <strong>$sport_nom</strong> course (level $categorie) has been successfully recorded.</p>
                <h3>Reservation details:</h3>
                <ul>
                    <li>Sport: $sport_nom</li>
                    <li>Level: $categorie</li>
                    <li>Registration date: ".date('d/m/Y H:i')."</li>
                </ul>
                <p>See you soon at our center!</p>
                <p>The Sportify Team</p>
            ";

            $mail->send();
            echo json_encode([
                'status' => 'success',
                'message' => "Successfully registered for $sport_nom (level $categorie). An email has been sent to {$user['mail']}"
            ]);

        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => "Database error: " . $e->getMessage()]);
        }

    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);    
    }
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
}
?>
