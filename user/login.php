<!DOCTYPE html>
<html>

<head>
    <title>Register - Bloomy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>

<body class="register-page">

    <div class="auth-wrapper">
        <div class="glass-card">

            <div class="auth-header">
                <h2>Create Account</h2>
                <p>Join Bloomy and start your floral journey</p>
            </div>

            <form action="process_register.php" method="POST">

                <div class="form-group">
                    <input type="text" name="name" required>
                    <label>Full Name</label>
                </div>

                <div class="form-group">
                    <input type="email" name="email" required>
                    <label>Email Address</label>
                </div>

                <div class="form-group">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>

                <button type="submit" class="btn-auth">
                    Create Account
                </button>

            </form>

            <div class="auth-footer">
                Not already have an account?
                <a href="register.php">Register</a>
            </div>

        </div>
    </div>

</body>

</html>