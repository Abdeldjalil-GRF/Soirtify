<?php
  session_start();
  $isLogged = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sportify - Activités</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="/SPORTIFY/assets/css/sports.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark py-4">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="Sportify" width="140" class="d-inline-block">
      </a>
    </div>
  </nav>

  <main class="container my-5">
    <h1 class="text-center mb-5 display-4 fw-bold">NOS ACTIVITÉS</h1>
    <div class="row g-4">
      
      <!-- Jujutsu -->
      <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
          <div class="card-header">
            <h3 class="mb-0">Jujutsu</h3>
          </div>
          <div class="card-body">
            <p>Art martial japonais axé sur la self-défense et le contrôle de l’adversaire.</p>
            <h5 class="mt-3 mb-2">Niveaux disponibles :</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Débutant
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Jujutsu">
                  <input type="hidden" name="niveau" value="Débutant">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermédiaire
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Jujutsu">
                  <input type="hidden" name="niveau" value="Intermédiaire">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Avancé
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Jujutsu">
                  <input type="hidden" name="niveau" value="Avancé">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
            </ul>
          </div>
          <div class="card-footer text-muted">
            <div><i class="fas fa-clock me-2"></i> 60 min</div>
            <div><i class="fas fa-users me-2"></i> Max 6 participants</div>
            <div><i class="fas fa-user-tie me-2"></i> Coach: Sensei Yamada</div>
          </div>
        </div>
      </div>

      <!-- Judo -->
      <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
          <div class="card-header">
            <h3 class="mb-0">Judo</h3>
          </div>
          <div class="card-body">
            <p>Discipline olympique axée sur les projections, le contrôle et le respect.</p>
            <h5 class="mt-3 mb-2">Niveaux disponibles :</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Débutant
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Judo">
                  <input type="hidden" name="niveau" value="Débutant">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermédiaire
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Judo">
                  <input type="hidden" name="niveau" value="Intermédiaire">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Avancé
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Judo">
                  <input type="hidden" name="niveau" value="Avancé">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
            </ul>
          </div>
          <div class="card-footer text-muted">
            <div><i class="fas fa-clock me-2"></i> 60 min</div>
            <div><i class="fas fa-users me-2"></i> Max 6 participants</div>
            <div><i class="fas fa-user-tie me-2"></i> Coach: Jean Dupuis</div>
          </div>
        </div>
      </div>

      <!-- Boxe -->
      <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
          <div class="card-header">
            <h3 class="mb-0">Boxe</h3>
          </div>
          <div class="card-body">
            <p>Entraînement de boxe anglaise pour améliorer votre technique, votre endurance et votre mental.</p>
            <h5 class="mt-3 mb-2">Niveaux disponibles :</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Débutant
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Boxe">
                  <input type="hidden" name="niveau" value="Débutant">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermédiaire
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Boxe">
                  <input type="hidden" name="niveau" value="Intermédiaire">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Avancé
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Boxe">
                  <input type="hidden" name="niveau" value="Avancé">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
            </ul>
          </div>
          <div class="card-footer text-muted">
            <div><i class="fas fa-clock me-2"></i> 45 min</div>
            <div><i class="fas fa-users me-2"></i> Max 4 participants</div>
            <div><i class="fas fa-user-tie me-2"></i> Coach: Malik Koné</div>
          </div>
        </div>
      </div>

      <!-- Muay Thai -->
      <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
          <div class="card-header">
            <h3 class="mb-0">Muay Thai</h3>
          </div>
          <div class="card-body">
            <p>Boxe thaïlandaise complète, utilisant poings, pieds, coudes et genoux pour un entraînement intense.</p>
            <h5 class="mt-3 mb-2">Niveaux disponibles :</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Débutant
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Muay Thai">
                  <input type="hidden" name="niveau" value="Débutant">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermédiaire
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Muay Thai">
                  <input type="hidden" name="niveau" value="Intermédiaire">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Avancé
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Muay Thai">
                  <input type="hidden" name="niveau" value="Avancé">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
            </ul>
          </div>
          <div class="card-footer text-muted">
            <div><i class="fas fa-clock me-2"></i> 60 min</div>
            <div><i class="fas fa-users me-2"></i> Max 5 participants</div>
            <div><i class="fas fa-user-tie me-2"></i> Coach: Somchai Prasert</div>
          </div>
        </div>
      </div>

      <!-- Musculation -->
      <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
          <div class="card-header">
            <h3 class="mb-0">Musculation</h3>
          </div>
          <div class="card-body">
            <p>Renforcement musculaire intensif avec matériel pour prise de masse ou tonification.</p>
            <h5 class="mt-3 mb-2">Niveaux disponibles :</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Débutant
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Musculation">
                  <input type="hidden" name="niveau" value="Débutant">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermédiaire
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Musculation">
                  <input type="hidden" name="niveau" value="Intermédiaire">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Avancé
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Musculation">
                  <input type="hidden" name="niveau" value="Avancé">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
            </ul>
          </div>
          <div class="card-footer text-muted">
            <div><i class="fas fa-clock me-2"></i> 50 min</div>
            <div><i class="fas fa-users me-2"></i> Max 6 participants</div>
            <div><i class="fas fa-user-tie me-2"></i> Coach: Romain Lefèvre</div>
          </div>
        </div>
      </div>

      <!-- Karaté -->
      <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
          <div class="card-header">
            <h3 class="mb-0">Karaté</h3>
          </div>
          <div class="card-body">
            <p>Discipline martiale japonaise mettant l'accent sur les coups précis, l’équilibre et la discipline mentale.</p>
            <h5 class="mt-3 mb-2">Niveaux disponibles :</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Débutant
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Karaté">
                  <input type="hidden" name="niveau" value="Débutant">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermédiaire
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Karaté">
                  <input type="hidden" name="niveau" value="Intermédiaire">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Avancé
                <?php if($isLogged) { ?>
                <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline">
                  <input type="hidden" name="sport" value="Karaté">
                  <input type="hidden" name="niveau" value="Avancé">
                  <button type="submit" class="btn btn-sm btn-primary">Réserver</button>
                </form>
                <?php } else { ?>
                <a href="login.html" class="btn btn-sm btn-primary">Connecter</a>
                <?php } ?>
              </li>
            </ul>
          </div>
          <div class="card-footer text-muted">
            <div><i class="fas fa-clock me-2"></i> 60 min</div>
            <div><i class="fas fa-users me-2"></i> Max 5 participants</div>
            <div><i class="fas fa-user-tie me-2"></i> Coach: Aiko Tanaka</div>
          </div>
        </div>
      </div>

    </div>

    <div class="text-center mt-4">
      <a href="login.html" class="btn btn-lg btn-primary">Se connecter pour réserver</a>
    </div>
  </main>
  
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

  <script src="/SPORTIFY/assets/js/sports.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
