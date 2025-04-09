<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- BEBAS nueue Font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  
  <!-- Style personnalisé -->
  <link rel="stylesheet" href="/SPORTIFY/assets/css/home.css">
</head>
<body>
  <div class="banner">
    <video autoplay loop muted plays-inline>
      <source src="/Sportify/assets/videos/video_sport_web.mp4" type="video/mp4">
    </video>

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
   
  <?php if(!isset($_SESSION["user_id"])) : ?>
  <div class="content">
      <h1>Be Champion</h1>
      <div>
        <a href="/SPORTIFY/pages/page_devis.php"><button id="btn_explore" type="button">Check Prices</button></a>
      </div>
    </div>
  </div>
   <?php else :  ?>
   <div class="content">
      <h1>Be Champion</h1>
      <div>
        <a href="/SPORTIFY/pages/home.php#aboutus"><button id="btn_explore" type="button">Know-More</button></a>
      </div>
    </div>
  </div>
  <?php endif ?>
  <!-- About us   -->
  <div class="about-section" id="aboutus">
    <h1>About Us</h1>
    <p>Welcome to <strong class="highlight">SPORTIFY</strong>, where martial arts meet fitness. We offer dynamic classes in 
        <strong class="highlight">Judo</strong>, 
        <strong class="highlight">BJJ</strong>, 
        <strong class="highlight">Karate</strong>, 
        <strong class="highlight">Boxing</strong>, 
        <strong class="highlight">Muay Thai</strong>, and more—designed for all levels. Whether you’re a beginner or an advanced athlete, our expert instructors will help you grow, push your limits, and achieve your fitness goals.
    </p>
    <p>Join us today and become part of a community that values strength, discipline, and personal growth. Resize the window to see how responsive we are!</p>
    <?php if (!isset($_SESSION['user_id'])) : ?>
    <a href="/SPORTIFY/pages/page_register.php"><button class="highlight">Join Us</button></a>
    <?php endif; ?>
  </div>


  <h2 id="text-head">Our HEAD COACHS </h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="/Sportify/assets/images/home/floyd.jpg" alt="Floyd Mayweather">
        <div class="container">
          <h2>Floyd Mayweather 🇺🇸</h2>
          <p class="title">Boxing World Champion</p>
          <p>Undefeated with a 50-0 record, including 27 knockouts, and a five-division world champion.</p>
          <p>floyd.mayweather@sportify.fr</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="/Sportify/assets/images/home/yacine.jpg" alt="Yacine Kharrouba">
        <div class="container">
          <h2>Yacine Kharrouba 🇩🇿</h2>
          <p class="title">BJJ World Champion</p>
          <p>World BJJ Champion 2023.</p>
          <p>yacine.kharrouba@sportify.fr</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="/Sportify/assets/images/home/inoue.jpg" alt="Kosei Inoue">
        <div class="container">
          <h2>Kosei Inoue 🇯🇵</h2>
          <p class="title">Judo Olympic Champion</p>
          <p>Gold medalist in the under 100kg category at the 2000 Sydney Olympics.</p>
          <p>kosei.inoue@sportify.fr</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Second Row -->
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="/Sportify/assets/images/home/takashi.jpg" alt="Takashi Yamamoto">
        <div class="container">
          <h2>Takashi Yamamoto 🇯🇵</h2>
          <p class="title">Karate Master</p>
          <p>Renowned for his expertise in traditional Shotokan karate and multiple national championships.</p>
          <p>takashi.yamamoto@sportify.fr</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="/Sportify/assets/images/home/gae.jpg" alt="Somsak Prasert">
        <div class="container">
          <h2>Somsak Prasert 🇹🇭</h2>
          <p class="title">Muay Thai Champion</p>
          <p>Former Lumpinee Stadium Champion with over 200 professional fights.</p>
          <p>somsak.prasert@sportify.fr</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="/Sportify/assets/images/home/coach.jpg" alt="John Doe">
        <div class="container">
          <h2>John Doe 🇺🇸</h2>
          <p class="title">Musculation Expert</p>
          <p>Certified strength and conditioning coach with over 15 years of experience.</p>
          <p>john.doe@sportify.fr</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Section Feedbacks -->
  
  <section class="testimonials-section" id="feedback">
      <h1 id="title-feedback">FeedBacks</h1>
      <div class="container-feedback container">
        <div class="row row-feedback text-center">
          <div class="col-md-4 mb-4">
            <div class="card-feedback p-4">
              <div class="feedback-stars mb-2">⭐⭐⭐⭐⭐</div>
              <p class="feedback-text">"Super expérience, je recommande vivement!"</p>
              <h5 class="feedback-name mt-3">Lina Martin</h5>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card-feedback p-4">
              <div class="feedback-stars mb-2">⭐⭐⭐⭐⭐</div>
              <p class="feedback-text">"Très professionnel et à l’écoute."</p>
              <h5 class="feedback-name mt-3">Yassine Belkacem</h5>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card-feedback p-4">
              <div class="feedback-stars mb-2">⭐⭐⭐⭐</div>
              <p class="feedback-text">"Une équipe au top, merci pour tout."</p>
              <h5 class="feedback-name mt-3">Julie Robert</h5>
            </div>
          </div>
        </div>
        

        <!-- Carte + Ajouter un feedback  if i had time it's on discord  --> 
      </div>
    </section>

   

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/SPORTIFY/assets/js/home.js"></script>
</body>

<!-- Footer -->
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

