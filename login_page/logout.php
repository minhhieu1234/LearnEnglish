<?php
include("../login_php/connect_db.php");
unset($_SESSION['user']);
header('Location: ../home_page/home.php');
?>