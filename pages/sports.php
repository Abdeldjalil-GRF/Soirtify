<?php
  session_start();
  $isLogged = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sportify - Activities</title>
   <!-- BEBAS Neue Font  -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="/SPORTIFY/assets/css/sports.css">
</head>
<body>
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
  <div id="message-container" class="position-fixed top-0 end-0 p-3" style="z-index: 9999"></div>
    <h1 class="text-center mb-5 display-4 fw-bold">OUR ACTIVITIES</h1>
    <div class="row g-4">
      
      <!-- Jujutsu -->
      <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
          <div class="card-header">
            <h3 class="mb-0">Jujutsu</h3>
          </div>
          <div class="card-body">
            <p>Japanese martial art focused on self-defense and opponent control.</p>
            <h5 class="mt-3 mb-2">Available Levels:</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Beginner
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Jujutsu">
                  <input type="hidden" name="niveau" value="debutant">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermediate
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Jujutsu">
                  <input type="hidden" name="niveau" value="intermediaire ">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Advanced
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Jujutsu">
                  <input type="hidden" name="niveau" value="avance">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
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
            <p>Olympic discipline focused on throws, control, and respect.</p>
            <h5 class="mt-3 mb-2">Available Levels:</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Beginner
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Judo">
                  <input type="hidden" name="niveau" value="debutant">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermediate
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Judo">
                  <input type="hidden" name="niveau" value="intermediaire">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Advanced
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Judo">
                  <input type="hidden" name="niveau" value="avance">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
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

      <!-- Boxing -->
      <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
          <div class="card-header">
            <h3 class="mb-0">Boxing</h3>
          </div>
          <div class="card-body">
            <p>English boxing training to improve your technique, endurance, and mental strength.</p>
            <h5 class="mt-3 mb-2">Available Levels:</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Beginner
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Box">
                  <input type="hidden" name="niveau" value="debutant">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermediate
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Box">
                  <input type="hidden" name="niveau" value="intermediaire">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Advanced
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Box">
                  <input type="hidden" name="niveau" value="avance">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
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
            <p>Complete Thai boxing, using fists, feet, elbows, and knees for an intense workout.</p>
            <h5 class="mt-3 mb-2">Available Levels:</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Beginner
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Muay Thai">
                  <input type="hidden" name="niveau" value="debutant">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermediate
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Muay Thai">
                  <input type="hidden" name="niveau" value="intermediaire">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Advanced
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Muay Thai">
                  <input type="hidden" name="niveau" value="avance">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
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

      <!-- Strength Training -->
      <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
          <div class="card-header">
            <h3 class="mb-0">Strength Training</h3>
          </div>
          <div class="card-body">
            <p>Intensive muscle strengthening with equipment for mass building or toning.</p>
            <h5 class="mt-3 mb-2">Available Levels:</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Beginner
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Musculation">
                  <input type="hidden" name="niveau" value="debutant">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermediate
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Musculation">
                  <input type="hidden" name="niveau" value="intermediaire">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Advanced
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Musculation">
                  <input type="hidden" name="niveau" value="avance">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
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

      <!-- Karate -->
      <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
          <div class="card-header">
            <h3 class="mb-0">Karate</h3>
          </div>
          <div class="card-body">
            <p>Japanese martial art emphasizing precise strikes, balance, and mental discipline.</p>
            <h5 class="mt-3 mb-2">Available Levels:</h5>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Beginner
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Karaté">
                  <input type="hidden" name="niveau" value="debutant">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Intermediate
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Karaté">
                  <input type="hidden" name="niveau" value="intermediaire">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
                <?php } ?>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Advanced
                <?php if($isLogged) { ?>
                  <form action="/SPORTIFY/includes/reservation.php" method="POST" class="d-inline" onsubmit="return false;">
                  <input type="hidden" name="sport" value="Karaté">
                  <input type="hidden" name="niveau" value="avance">
                  <button type="submit" class="btn btn-sm btn-primary">Book</button>
                </form>
                <?php } else { ?>
                <a href="/SPORTIFY/pages/page_login.php" class="btn btn-sm btn-primary">Login</a>
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

    <?php if($isLogged) { ?>
      <div class="text-center mt-4">
        <a href="/SPORTIFY/pages/my_reservations.php" class="btn btn-lg btn-primary">see your reservation</a>
      </div>
      <?php } else { ?>
        <div class="text-center mt-4">
          <a href="/SPORTIFY/pages/page_login.php" class="btn btn-lg btn-primary">Login</a>
        </div>
        <?php } ?>
  </main>
  
  

  <script src="/SPORTIFY/assets/js/sports.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer class="bg-dark text-white py-4 " id="footer">
    <div class="container">
      <div class="row-footer">
        <div class="col-md-4">
          <h5><i class="fas fa-dumbbell me-2"></i>Sportify</h5>
          <p>Online sports activity booking platform. Stay fit wherever you are. 💪🌍!</p>
        </div>
        <div class="col-md-4">
          <h5>Liens rapides</h5>
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
</html>
