<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activités sportives - Sportify</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  
  <!-- Style personnalisé -->
  <link rel="stylesheet" href="/SPORTIFY/assets/css/sports.css">
</head>
<body>
  
  <!-- Nouvelle barre de navigation avec icônes et boutons -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white" id="Navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="/pages/home.php">
        <img src="/Sportify/assets/images/Navbar/sporty_logo_icon.png" alt="Logo" class="logo">
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link me-3" href="/pages/home.php">
            <img src="/Sportify/assets/images/Navbar/home_icon.png" alt="Home Icon">
          </a>
          <a class="nav-item nav-link me-3" href="#">
            <img src="/Sportify/assets/images/Navbar/about_us_icon.png" alt="About Us">
          </a>
          <a class="nav-item nav-link me-3" href="#">
            <img src="/Sportify/assets/images/Navbar/feedback_icon.png" alt="Feedback">
          </a>
          <a href="page_connexion.php">
            <button class="btn btn-danger custom-button me-3">Connexion</button>
          </a>
          <button type="button" class="btn btn-danger custom-button">Inscription</button>
        </div>
      </div>
    </div>
  </nav>
  
  <!-- Conteneur principal -->
  <div class="container mt-4">
    <div class="container my-5">
      <h1 class="mb-4">Nos activités sportives</h1>
      
      <div class="row mb-4">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h5 class="mb-0">Trouvez l'activité qui vous convient</h5>
            </div>
            <div class="card-body">
              <p>Sportify vous propose une variété d'activités sportives encadrées par des coachs professionnels. Chaque cours est limité à un nombre restreint de participants pour garantir un suivi personnalisé.</p>
              <div class="alert alert-info">
                <i class="fas fa-info-circle me-2"></i> Vous devez être connecté pour réserver un cours. <a href="login.html" class="alert-link">Connectez-vous ici</a>.
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <!-- Yoga -->
        <div class="col-md-4 mb-4">
          <div class="card course-card h-100">
            <div class="card-header">
              <h3 class="mb-0">Yoga</h3>
            </div>
            <div class="card-body">
              <p>Cours collectif de yoga pour améliorer votre flexibilité et votre bien-être mental.</p>
              <h5 class="mt-3 mb-2">Niveaux disponibles :</h5>
              <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Débutant
                  <a href="login.html" class="btn btn-sm btn-primary">Réserver</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Intermédiaire
                  <a href="login.html" class="btn btn-sm btn-primary">Réserver</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Avancé
                  <a href="login.html" class="btn btn-sm btn-primary">Réserver</a>
                </li>
              </ul>
            </div>
            <div class="card-footer text-muted">
              <div><i class="fas fa-clock me-2"></i> 60 min</div>
              <div><i class="fas fa-users me-2"></i> Max 5 participants</div>
              <div><i class="fas fa-user-tie me-2"></i> Coach: Michelle Legrand</div>
            </div>
          </div>
        </div>
        
        <!-- Pilates -->
        <div class="col-md-4 mb-4">
          <div class="card course-card h-100">
            <div class="card-header">
              <h3 class="mb-0">Pilates</h3>
            </div>
            <div class="card-body">
              <p>Cours collectif de Pilates pour renforcer votre corps et améliorer votre posture.</p>
              <h5 class="mt-3 mb-2">Niveaux disponibles :</h5>
              <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Débutant
                  <a href="login.html" class="btn btn-sm btn-primary">Réserver</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Intermédiaire
                  <a href="login.html" class="btn btn-sm btn-primary">Réserver</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Avancé
                  <a href="login.html" class="btn btn-sm btn-primary">Réserver</a>
                </li>
              </ul>
            </div>
            <div class="card-footer text-muted">
              <div><i class="fas fa-clock me-2"></i> 60 min</div>
              <div><i class="fas fa-users me-2"></i> Max 3 participants</div>
              <div><i class="fas fa-user-tie me-2"></i> Coach: Marion May</div>
            </div>
          </div>
        </div>
        
        <!-- Renforcement musculaire -->
        <div class="col-md-4 mb-4">
          <div class="card course-card h-100">
            <div class="card-header">
              <h3 class="mb-0">Renforcement musculaire</h3>
            </div>
            <div class="card-body">
              <p>Cours collectif de renforcement musculaire pour améliorer votre force et votre endurance.</p>
              <div class="mt-3">
                <a href="login.html" class="btn btn-primary">Réserver</a>
              </div>
            </div>
            <div class="card-footer text-muted">
              <div><i class="fas fa-clock me-2"></i> 45 min</div>
              <div><i class="fas fa-users me-2"></i> Max 5 participants</div>
              <div><i class="fas fa-user-tie me-2"></i> Coach: Camille Lemont</div>
            </div>
          </div>
        </div>
        
        <!-- Cycling -->
        <div class="col-md-4 mb-4">
          <div class="card course-card h-100">
            <div class="card-header">
              <h3 class="mb-0">Cycling</h3>
            </div>
            <div class="card-body">
              <p>Cours collectif de cycling nécessitant un vélo d'appartement pour améliorer votre endurance cardiovasculaire.</p>
              <div class="mt-3">
                <a href="login.html" class="btn btn-primary">Réserver</a>
              </div>
            </div>
            <div class="card-footer text-muted">
              <div><i class="fas fa-clock me-2"></i> 45 min</div>
              <div><i class="fas fa-users me-2"></i> Max 3 participants</div>
              <div><i class="fas fa-user-tie me-2"></i> Coach: Amy Taylor</div>
            </div>
          </div>
        </div>
        
        <!-- Fitness -->
        <div class="col-md-4 mb-4">
          <div class="card course-card h-100">
            <div class="card-header">
              <h3 class="mb-0">Fitness</h3>
            </div>
            <div class="card-body">
              <p>Cours collectif de fitness pour améliorer votre condition physique globale.</p>
              <div class="mt-3">
                <a href="login.html" class="btn btn-primary">Réserver</a>
              </div>
            </div>
            <div class="card-footer text-muted">
              <div><i class="fas fa-clock me-2"></i> 45 min</div>
              <div><i class="fas fa-users me-2"></i> Max 5 participants</div>
              <div><i class="fas fa-user-tie me-2"></i> Coach: Laura Jones</div>
            </div>
          </div>
        </div>
        
        <!-- Programme personnalisé -->
        <div class="col-md-4 mb-4">
          <div class="card course-card h-100">
            <div class="card-header">
              <h3 class="mb-0">Programme personnalisé</h3>
            </div>
            <div class="card-body">
              <p>Coaching individuel avec suivi hebdomadaire pour atteindre vos objectifs personnels.</p>
              <div class="mt-3">
                <a href="login.html" class="btn btn-primary">Réserver</a>
              </div>
            </div>
            <div class="card-footer text-muted">
              <div><i class="fas fa-clock me-2"></i> 60 min</div>
              <div><i class="fas fa-users me-2"></i> Max 1 participant</div>
              <div><i class="fas fa-user-tie me-2"></i> Coach: Laura Marins</div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-4">
        <a href="login.html" class="btn btn-lg btn-primary">Se connecter pour réserver</a>
      </div>
    </div>
  </div> <!-- Fin du conteneur principal -->
  
  <!-- Footer -->
  <footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5><i class="fas fa-dumbbell me-2"></i>Sportify</h5>
          <p>Plateforme de réservation d'activités sportives en ligne. Restez en forme où que vous soyez !</p>
        </div>
        <div class="col-md-4">
          <h5>Liens rapides</h5>
          <ul class="list-unstyled">
            <li><a href="home.html" class="text-white">Accueil</a></li>
            <li><a href="courses.html" class="text-white">Activités</a></li>
            <li><a href="login.html" class="text-white">Connexion</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Contact</h5>
          <address>
            <i class="fas fa-map-marker-alt me-2"></i>123 Rue du Sport<br>
            75001 Paris, France<br>
            <i class="fas fa-phone me-2"></i>+33 1 23 45 67 89<br>
            <i class="fas fa-envelope me-2"></i>contact@sportify.fr
          </address>
        </div>
      </div>
      <hr>
      <div class="text-center">
        <p>&copy; 2024 Sportify. Tous droits réservés.</p>
        <div class="social-icons">
          <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Bootstrap JavaScript Bundle avec Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Script personnalisé -->
  <script src="/SPORTIFY/assets/js/sports.js"></script>
</body>
</html>
