<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "127.0.0.1";
    $user = "root";
    $dbpassword = "Anglo2003@";
    $dbname = "dtfdb";

    $conexao = new mysqli($host, $user, $dbpassword, $dbname);

    if($conexao->connect_error) {
        die("Erro ao conectar com o banco de dados". $conexao->connect_error);;
    }

    $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = $conexao->query($query);

    if($result->num_rows > 0) {
        header("Location: home.php");
    }else {
        exit();
    }

    $conexao->close();

}

?>
