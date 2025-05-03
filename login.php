<?php
global $conexao;
require('conexao.php'); // Include the database connection file
$_SESSION['authenticated'] = true;
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    // Replace with real DB validation
    if ($username === "lorena" && $password === "abu") {
        $_SESSION["authenticated"] = true;
        $_SESSION["username"] = $username;
        header("Location: home.php");
        exit();
    } else {
        header("Location: index.html?error=1");
        exit();
    }
} else {
    header("Location: index.html");
    exit();
}





