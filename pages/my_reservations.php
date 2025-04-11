<?php
session_start();
require "../config/database_connexion.php";

if (!isset($_SESSION['user_id'])) {
    header('Location: /SPORTIFY/pages/page_login.html');
    exit;
}

try {

    $sql_rqt ="SELECT 
            cc.id_cours_clients AS id_reservation,
            s.nom AS sport, 
            c.categorie, 
            c.jour,
            c.heure,
            co.nom AS coach_nom,
            co.prenom AS coach_prenom
        FROM cours_clients cc
        JOIN cours c ON cc.id_cour = c.id_cour
        JOIN sports s ON c.id_sport = s.id_sport
        JOIN coachs co ON c.id_coach = co.id_coach
        WHERE cc.id_client = :user_id
    ";
 
    $stmt = executeQuery($sql_rqt,[':user_id' => $_SESSION['user_id']]);
    $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    $error = "Database error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- BEBAS Neue Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="/SPORTIFY/assets/css/my_reservations.css">
    <title>My reservations</title>
</head>
<body>
    <!-- Navbar original -->
    <div class="navbar">
      <a href="/SPORTIFY/pages/home.php">
        <img class="logo" src="/Sportify/assets/images/connexion/Logo_connexion_black.png">
      </a>

      <!-- Menu toggle button for mobile -->
      <button class="menu-toggle" id="menu-toggle">&#9776;</button>

      <?php if (isset($_SESSION['user_id'])) : ?>
        <ul class="nav-links" id="nav-links">
          <li><a href="/Sportify/pages/home.php">Home</a></li>
          <li><a href="/Sportify/pages/sports.php">Sports</a></li>
          <li><a href="/Sportify/pages/my_reservations.php">My Trainings</a></li>
          <li><a onclick="confirmLogout(event)"><button  id="btn_logout">Logout</button></a></li>
        </ul>
      <?php else : ?>
        <ul class="nav-links" id="nav-links">
          <li><a href="/Sportify/pages/sports.php">Our Sports</a></li>
          <li><a href="#aboutus">About Us</a></li>
          <li><a href="#feedback">FeedBacks</a></li>
          <li><a href="/SPORTIFY/pages/page_login.php">Connexion</a></li>
        </ul>
      <?php endif; ?>
    </div>

    <main class="container my-5">
        <h1 class="text-center mb-5 display-4 fw-bold">MY RESERVATIONS</h1>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php elseif (empty($reservations)): ?>
            <div class="alert alert-info text-center">
                No reservations found. <a href="/SPORTIFY/pages/sports.php" class="alert-link">Book now</a>
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Sport</th>
                            <th>Level</th>
                            <th>Date</th>
                            <th>Coach</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reservations as $reservation): ?>
                        <tr>
                            <td><?= htmlspecialchars($reservation['sport']) ?></td>
                            <td><?= htmlspecialchars(ucfirst($reservation['categorie'])) ?></td>
                            <td>
                                <?= htmlspecialchars($reservation['jour']) ?> 
                                at <?= date('H:i', strtotime($reservation['heure'])) ?>
                            </td>
                            <td><?= htmlspecialchars($reservation['coach_prenom'] . ' ' . $reservation['coach_nom']) ?></td>
                            <td>
                                <button class="btn btn-sm btn-danger annuler-btn" 
                                        data-id="<?= $reservation['id_reservation'] ?>">
                                    Cancel
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </main>

    <!-- Footer original -->
    <footer class="bg-dark text-white py-4 " id="footer">
        <div class="container">
            <div class="row-footer">
                <div class="col-md-4">
                    <h5><i class="fas fa-dumbbell me-2"></i>Sportify</h5>
                    <p>Online sports activity booking platform. Stay fit wherever you are. 💪🌍!</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/Sportify/pages/home.php" class="text-white">Home</a></li>
                        <li><a href="/Sportify/pages/sports.php" class="text-white">Sports</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <address>
                        <i class="fas fa-map-marker-alt me-2"></i><a href="/Sportify/pages/contact.php" id="lien">Contact form</a><br>
                        <i class="fas fa-phone me-2"></i>+33 1 23 45 67 89<br>
                        <i class="fas fa-envelope me-2"></i>contact@sportify.fr
                    </address>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2025 Sportify. All rights are reserved</p>
                <div class="social-icons">
                    <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="/SPORTIFY/assets/js/my_reservations.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>