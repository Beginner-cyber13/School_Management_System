<?php
session_start();
if (isset($_SESSION['user_id'])) {
    if (isset($_SESSION['role'])) {
        $dashboard = $_SESSION['role'] . "/dashboard.php";
        header("Location: $dashboard");
        exit();
    } else {
        session_unset();
        session_destroy();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - School Management System</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%234f46e5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M22 10v6M2 10l10-5 10 5-10 5z'></path><path d='M6 12v5c3 3 9 3 12 0v-5'></path></svg>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h1>SMS Portal</h1>
                <p>Welcome back! Please enter your details.</p>
            </div>
            
            <?php if (isset($_GET['error'])): ?>
                <div class="error-message" style="display: block;">
                    Invalid username or password.
                </div>
            <?php endif; ?>

            <form action="auth/login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-wrapper">
                        <input type="text" id="username" name="username" required placeholder="Enter your username">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" required placeholder="••••••••">
                    </div>
                </div>

                <button type="submit" class="login-btn">Sign In</button>
            </form>

            <div class="footer-text">
                <p>Forgot password? Contact Administrator</p>
            </div>
        </div>
    </div>
</body>
</html>

