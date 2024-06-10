<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsi X PWM1</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="script.js" defer></script>
</head>

<body>
    <div class="wrapper">
        <form action="fu_daftar.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <label for="username"><i class='bx bxs-user'></i></label>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <label for="email"><i class='bx bxs-lock-alt'></i></label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <label for="password"><i class='bx bxs-lock-alt'></i></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn" name="daftar">Login</button>
            <div class="register-link">
                <p>Punya Akun? <a href="index.php">Masuk</a></p>
            </div>
        </form>
    </div>
</body>

</html>