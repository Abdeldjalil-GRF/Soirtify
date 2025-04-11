<?php
session_start();
require "../config/database_connexion.php";

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Non authentifié']);
    exit;
}

// Récupérer le corps de la requête en JSON
$data = json_decode(file_get_contents('php://input'), true);

// Vérifier la méthode simulée
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($data['_method']) && $data['_method'] === 'DELETE') {
    try {
        $reservationId = $data['id']; // ID depuis le JSON

        // Supprimer la réservation
        $sql_requete_to_delete = "DELETE FROM cours_clients WHERE id_cours_clients = :id AND id_client = :user_id";
        $stmt = executeQuery($sql_requete_to_delete,[':id' => $reservationId,':user_id' => $_SESSION['user_id']]); 
        
        if ($stmt->rowCount() > 0) {
            echo json_encode(['status' => 'success', 'message' => 'Rzservation canceled']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Reservation not found or not allowed']);
        }
        
    } catch (PDOException $e) {
        error_log("Erreur SQL: " . $e->getMessage());
        echo json_encode(['status' => 'error', 'message' => 'error data base']);
    }
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Méthode non autorisée']);
}
?>