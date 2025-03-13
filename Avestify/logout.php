<?php

    session_start();
    session_unset();
    
    // REDIRECTING TO THE USER LOGIN PAGE.
    header("Location: login.php");

?>