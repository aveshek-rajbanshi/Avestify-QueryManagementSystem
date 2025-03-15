<?php

    session_start();
    session_unset();
    session_destroy();
 
    // REDIRECTING TO THE USER LOGIN PAGE.
    header("Location: landingpage.php");
     exit();
?>