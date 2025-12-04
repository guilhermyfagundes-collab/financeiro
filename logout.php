<?php
require_once 'config.php';

// Fazer Logout
session_unset();
session_destroy();

// Redireciona para Login
header('location: login.php');
exit;
?>