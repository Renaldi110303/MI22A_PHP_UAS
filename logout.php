<?php
     /**
     * NIM : 2257401065
     * NAMA : renaldi
     * KELAS MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>