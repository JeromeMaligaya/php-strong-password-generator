<?php
// session
session_start();
var_dump($_SESSION);
$user_random_password = $_SESSION['user_random_password'];
