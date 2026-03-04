<?php include '../config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login - Bloomy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="login d-flex align-items-center vh-100 bg-soft">

    <div class="container d-flex justify-content-center">
        <div class="glass-card col-md-4 shadow">
            <h3 class="text-center text-gold mb-4">Login</h3>

            <form action="process_login.php" method="POST">
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <button class="btn btn-gold w-100">Login</button>
            </form>

            <p class="text-center mt-3">
                Don't have account? <a href="register.php">Sign Up</a>
            </p>
        </div>
    </div>

</body>

</html>