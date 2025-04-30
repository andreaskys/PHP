<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'Anglo2003@');
define('DB', 'dtfdb');

try {
    $conexao = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USUARIO, SENHA);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}
?>




