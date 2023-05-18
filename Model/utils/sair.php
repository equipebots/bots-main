<?php 

require_once("../../Model/connection/conn.php");

unset($_SESSION['id']);
header("Location: ../../View/html/index-login.html ");