<?php
session_start();

include 'db_connect.php';

$error_message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM members WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $error_message = "Wrong password."; 
        }
    } else {
        $error_message = "User not found."; 
    }
}
?>

<!DOCTYPE html>
<html lang="English">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchenary - Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="authentication-body">
<div class="authentication-wrapper">

		<div class="authentication-brand">
            <div class="authentication-logo">🍳 Kitchenary</div>
            <p class="authentication-subtitle">Cook the World Your Way!</p>
        </div>
    <div class="authentication-container">
        <h1 class="authentication-title">Login</h1>
        
        <?php if (!empty($error_message)): ?>
            <p style="color: #ff6b6b; text-align: center; margin-bottom: 15px; font-weight: bold;">
                <?php echo $error_message; ?>
            </p>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required placeholder="Enter username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required placeholder="Enter password">
            </div>

            <button type="submit" class="btn-authentication">Login</button>
        </form>

        <p class="authentication-switch">Don't have an account? <a href="register.php">Sign Up</a></p>
    </div>

</div></body>
</html>
