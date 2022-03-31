<?php
session_start();
    $_SESSION['todo'][$_GET['id']]['deleted'] = ','; 
    header("location: index.php");
?>