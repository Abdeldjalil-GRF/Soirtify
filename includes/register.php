<?php
require "../config/database_connexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = trim($_POST["firstname"]);
    $last_name = trim($_POST["lastname"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $birthday = trim($_POST["birthday"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);  // les mots de passe sont hachés 
     
    //vérification de l'age 
    $birthDate = new DateTime($birthday);
    $today = new DateTime();
    $age = $birthDate->diff($today)->y;  // Calcul de l'âge

    if ($age < 18) {
        echo "You are not mature";
        exit;
    }
    // vérification si l'email existe déja 
    $sql_email_verif = "Select * from clients where mail = :email";
    $stmt2 = executeQuery($sql_email_verif,['email'=>$email]);
    $user_exist = $stmt2->fetch();
    if($user_exist ){
        echo "Adresse mail already exist";
        exit;
    }else{
        $sql_to_execute = "INSERT INTO clients (`nom`, `prenom`, `mail`, `password`, `date_naissance`) 
                           VALUES (:lastname, :firstname, :email, :password_, :birthday)";
        $params = [
            'lastname' => $last_name,
            'firstname' => $first_name,
            'email' => $email,
            'password_' => $hashed_password, 
            'birthday' => $birthday
        ];
    }
    $stmt = executeQuery($sql_to_execute, $params);

    if ($stmt) {
        echo "Registration successful";
    } else {
        echo "Registration failed!";
    }
}
?>
