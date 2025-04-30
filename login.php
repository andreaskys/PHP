<?php

require('conexao.php'); // Include the database connection file
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        // Use prepared statements to prevent SQL injection
        $stmt = $conexao->prepare("SELECT * FROM login WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid username or password.";
            exit();
        }
    } catch (PDOException $e) {
        die("Erro ao executar a consulta: " . $e->getMessage());
    }
}
?>


