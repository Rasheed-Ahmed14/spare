<?php session_start();
require "includes/connection.php";
        if(!isset($_SESSION['user_email']))
        {
            echo "<script>location.href='index.php';</script>";
        }    
?>