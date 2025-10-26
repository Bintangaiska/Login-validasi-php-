<?php
$valid_username = "admin";
$valid_password = "12345";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$login_berhasil = ($username === $valid_username && $password === $valid_password);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Login</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #ffe0f0, #ffc2d4);
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .result-container {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
            color: #555;
        }

        .success {
            color: #ff4f81;
        }

        .failed {
            color: #c2185b;
        }

        a {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #ff4f81;
            color: white;
            border-radius: 8px;
            transition: 0.3s;
            font-weight: bold;
        }

        a:hover {
            background-color: #ff79a8;
        }

        .icon {
            font-size: 60px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php if ($login_berhasil): ?>
            <div class="icon">💗</div>
            <h2 class="success">Login Berhasil!</h2>
            <p>Selamat datang, <b><?php echo htmlspecialchars($username); ?></b>.</p>
        <?php else: ?>
            <div class="icon">💔</div>
            <h2 class="failed">Login Gagal!</h2>
            <p>Username atau password salah, coba lagi ya Bibin.</p>
            <a href="login.html">Kembali</a>
        <?php endif; ?>
    </div>
</body>
</html>
