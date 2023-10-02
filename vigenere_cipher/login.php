<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* CSS untuk posisikan form di tengah */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            text-align: center;
        }
        label {
            display: block;
        }
        /* Pesan penjelasan password */
        .password-info {
            color: #999;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="process_login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <p class="password-info">Password yang anda masukan akan di enkripsi!</p><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
