<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require "../config/database_connexion.php";

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);


    $sql_to_connect ="Select * from clients where Mail = :mail ";
    
    $stmt = executeQuery($sql_to_connect,['mail' => $email]);

    $user= $stmt->fetch();



    if($user){
        if(password_verify($password,$user['Password'])){
            $_SESSION['user_id'] = $user['Id_Client']; 
            echo "success";
        }else{
            echo "Password Invalid";
        }
    }else{
        
        echo "User not found , check you email !";
    }


}

?>