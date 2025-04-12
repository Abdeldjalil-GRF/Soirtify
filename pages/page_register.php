<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SPORTIFY/assets/css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10" id="card">
                <div class="card custom-card" id="global_card">
                    
                <form id="register_form" method="post">
                        <div class="card-top">
                            <a href="/Sportify/pages/home.php" id="logo-link" ><img src="/assets/images/connexion/Logo_connexion_black.png" id="card-logo" alt="logo"></a>
                            <p class="text">just few steps to become <strong>champion</strong></p>
                        </div>
                        <div class="card-body">
                            <div class="type-container">
                                <div class="triple">
                                    <div class="type">
                                        <p>Last Name : *</p>
                                        <input type="text" placeholder="lastname" name="lastname" id="lastname">
                                    </div>
                                    <div class="type">
                                        <p>First Name : *</p>
                                        <input type="text" placeholder="firstname" name="firstname" id="firstname">
                                         <div>
                                            <span><br/></span>
                                         </div>
                                    </div>
                                    <div class="type">
                                        <p>Birthday : *</p>
                                        <input type="date" placeholder="date" name="birthday" id="birthday">
                                    </div>
                                </div>
                                <div class="triple">
                                     <div class="type">
                                        <p>Email Address: *</p>
                                        <input type="email" placeholder="example@gmail.com" name="email" id="email">
                                    </div> 
                                    <div class="type">
                                        <p>Password :*</p>
                                        <input type="password" placeholder="password" name="password" id="password">
                                        <div id="passwordStrengthContainer">
                                             <progress id="passwordStrength" value="0" max="100"></progress>
                                             <span id="passwordStrengthText"></span>
                                        </div>
                                    </div>
                                    <div class="type">
                                        <p>Confirm Password : *</p>
                                        <input type="password" placeholder="Confirm password" name="cpassword" id="cpassword">
                                    </div>
                                </div>
                            </div>

                            
                            <div class="message-container">
                                <span id="message"></span>
                            </div>
                        </div>
                    
                        <div class="card-footer">
                            <label for="conditions" id="condition_phrase">
                               <input type="checkbox" id="conditions" name="conditions">
                                i accept 
                                <a href="#" id="conditionsLink">the general conditions</a> 
                            </label>
                            <p id="para">Already Signed up ?  <a href="./page_login.php">Login</a></p>
                            <button type="submit" class="btn bkg">Register</button>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>

    <script src="/SPORTIFY/assets/js/register.js"></script>
</body>
</html>
