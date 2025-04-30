<?php

require('conexao.php'); // Include the database connection file
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the connection is successful
    if (!$conexao) {
        die("Erro ao conectar com o banco de dados: " . mysqli_connect_error());
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conexao->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid username or password.";
        exit();
    }

    $stmt->close();
    $conexao->close();
}
?>


