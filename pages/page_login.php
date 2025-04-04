<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>LogIn</title>
</head>
<body>
<div class="container">
            <div class="logo">
                <img id="logo_white" src="/assets/images/connexion/logo_connexion.png" alt="logo">
                <p id="sentences"> Log in, push your limits, and unleash your potential!</p>
            </div>
        

            <div class="form_log_in" >
                <img id="black_logo" src="/assets/images/connexion/Logo_connexion_black.png" alt="logo black">
                <form action="/includes/login.php" method="post" id="form_input">
                   
                    <div class="type">
                        <p>Email : *</p>
                        <input type="email" placeholder="example@gmail.com" name="email" id="email">
                    </div>

                    <div class="type">
                        <p>Password : *</p>
                        <input type="password" placeholder="**********" name="password" id="password">
                    </div>
                    
                    <button id="submit" class="btn bkg">Log In</button>

                    <div class="message-container">
                        <span id="message"></span>
                    </div>
                </form>
                <p id="para">No Account ! <a href="./page_register.php"> Sign in </a></p>
            </div>       
    </div>
    

    <script src="/assets/js/login.js"></script>
</body>
</html>