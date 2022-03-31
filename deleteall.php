<?php
session_start();
    unset($_SESSION['todo']);
    header("location: index.php");
?>