<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); //Important
} 
if(!isset($_SESSION['username'])) {
    header("Location: /login.php");
}
?>