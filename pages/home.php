<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  
  <!-- Style personnalisé -->
  <link rel="stylesheet" href="/SPORTIFY/assets/css/home.css">
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
      
      <div class="collapse navbar-collapse justify-content-end text-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link me-3" href="/pages/home.php">
            <img class="nav-icon" src="/Sportify/assets/images/Navbar/home_icon.png" alt="Home Icon">
            <span class="nav-text">Home</span>
          </a>
          <a class="nav-item nav-link me-3" href="#">
            <img class="nav-icon" src="/Sportify/assets/images/Navbar/about_us_icon.png" alt="About Us">
            <span class="nav-text">About us</span>
          </a>
          <a class="nav-item nav-link me-3" href="#">
            <img class="nav-icon" src="/Sportify/assets/images/Navbar/feedback_icon.png" alt="Feedback">
            <span class="nav-text">Feedback</span>
          </a>
          <a href="page_connexion.php">
            <button class="btn btn-danger custom-button me-3">Connexion</button>
          </a>
          <a>
          <button type="button" class="btn btn-danger custom-button me-3">Inscription</button>
          </a>
        </div>
      </div>
    </div>
  </nav>

 <!-- Bootstrap JavaScript Bundle avec Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="/SPORTIFY/assets/js/home.js"></script>
   
</body>
</html>

<?php





?>