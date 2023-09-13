<?php
global $conn;
$conn = new PDO("mysql:host=localhost;dbname=ratjetoe", 'root', '');
session_start();

require_once "../private/autoloader.php";
require_once "../private/settings.php";

$filename = substr($_SERVER['REDIRECT_URL'], 1);
if ($filename == '' or !isset($_SESSION['user'])) {
    $filename = 'home';
}

if (file_exists($filename . '.php')) {
    include($filename . '.php');
} elseif (file_exists($filename . '.html')) {
    include($filename . '.html');
} else {
    include('404.php');
}