<?php

    session_start();
    session_unset();
    session_destroy();

    // If there are cookies for the admin, delete them
if (isset($_COOKIE['adminEmail'])) {
    setcookie("adminEmail", "", time() - 3600, "/");  // Expire the adminEmail cookie
}
if (isset($_COOKIE['adminRole'])) {
    setcookie("adminRole", "", time() - 3600, "/");  // Expire the adminRole cookie
}
    
    // REDIRECTING TO THE USER LOGIN PAGE.
    header("Location: login.php");
    // exit();
?>