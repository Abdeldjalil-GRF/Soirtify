<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/SPORTIFY/assets/css/contact.css">

    <title>Contact</title>
</head>
<body>
    
    <div class="container">

    <div class="logo">
        <img src="/SPORTIFY/assets/images/contact/logo.png" alt="logo">
    </div>

        <h2 class="text-center mt-4">Contactez-nous</h2>
        <p class="text-center">Une question ? Remplissez ce formulaire et nous vous répondrons rapidement.</p>
        
        <form id="contact-form" action="/SPORTIFY/includes/contact_form.php" method="POST">

            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" >
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" >
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="text" class="form-control" id="email" name="email" >
            </div>

            <div class="mb-3">
                <label for="num_tel" class="form-label">Téléphone :</label>
                <input type="tel" class="form-control" id="num_tel" name="num_tel" >
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message :</label>
                <textarea class="form-control" id="message" name="message" rows="4" ></textarea>
            </div>

            <button type="submit" class="btn w-100" id="btn_contact">Envoyer</button>
        </form>

        <p id="response-message" class="mt-3 text-center"></p>
        
    </div>

    <script src="/SPORTIFY/assets/js/contact.js"></script>

</body>
</html>

