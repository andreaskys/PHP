<?php

session_start();
$errors = [
        'login' => $_SESSION['login_eror'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm){
    return $formName === $activeForm ? 'active' : '';
}

?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>


<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="form-box <?= isActiveForm('login', $activeForm);?> " id="login-form">
        <form action="login_register.php" method="POST">
            <h2>Login</h2>
            <?= showError($error['login']); ?>
            <div class="pb-3">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="pb-3">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login">Login</button>
            <p>Create Account <a href="#" onclick="showForm('register-form')">Register</a></p>
        </form>
    </div>

    <div class="form-box <?= isActiveForm('register', $activeForm);?> " id="register-form">
        <form action="login_register.php" method="POST">
            <h2>Register</h2>
            <?= showError($error['register']); ?>
            <div class="pb-3">
                <input type="text" name="name" placeholder="name" required>
            </div>
            <div class="pb-3">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="pb-3">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="pb-3">
                <select name="role" required>
                    <option value="">Select Role</option>
                    <option value="user">user</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit" name="register">Register</button>
            <p>Already have an Account <a href="#" onclick="showForm('login-form')">login</a></p>
        </form>
    </div>
</div>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>