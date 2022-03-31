<?php
session_start();
    unset($_SESSION['todo'][$_GET['id']]);
    header("location: index.php");
?>