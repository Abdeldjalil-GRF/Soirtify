<?php
session_start();
session_unset();
session_destroy();

// redirection 
header("Location: /SPORTIFY/pages/home.php");
exit();
?>