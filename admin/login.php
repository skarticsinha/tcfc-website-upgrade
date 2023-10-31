<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form method="post" action="check_login.php">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <label for="captcha">Captcha:</label>
        <input type="text" name="captcha" required>
        <img src="captcha.php" alt="Captcha"><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>