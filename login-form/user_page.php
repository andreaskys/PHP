<?php

session_start();
if(!isset($_SESSION['email'])){
    header("location:index.php");
    exit();
}

?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user_page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="background: #fff;">

<div class="box">
    <h1>Welcome, <span<?= $_SESSION['name']?>></span></h1>
    <p>This is an <span>user</span>page</p>
    <button onclick="window.location.href'logout.php">Logout</button>
</div>


</body>
</html>
