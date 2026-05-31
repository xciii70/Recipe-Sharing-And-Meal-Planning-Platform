<?php
// Here is for the back end // 
?>

<!DOCTYPE html>
<html lang="English">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchenary - Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="authentication-body">

    <div class="authentication-wrapper">
        
        <div class="authentication-brand">
            <div class="authentication-logo">🍳 Kitchenary</div>
            <p class="authentication-subtitle">Cook the World Your Way!</p>
        </div>
        
        <div class="authentication-container">
            <h1 class="authentication-title">Sign Up</h1>
            
            <form action="register_action.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required placeholder="Create your username">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required placeholder="Create a strong password">
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" required placeholder="Repeat your password">
                </div>

                <button type="submit" class="btn-authentication">Sign Up</button>
            </form>

            <p class="authentication-switch">Already have an account? <a href="login.php">Login</a></p>
        </div>

    </div>

</body>
</html>
