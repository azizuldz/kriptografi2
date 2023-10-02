<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* CSS untuk posisikan elemen tengah (centered) */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .menu {
            text-align: center;
        }
        .menu a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .menu a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Selamat Datang</h2>
    <div class="menu">
        <a href="login.php">Login</a>
        <a href="register.php">Registrasi</a>
    </div>
</body>
</html>
