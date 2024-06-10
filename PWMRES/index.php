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
        <form action="fu_login.php" method="post">
            <h1>Login</h1>
            <!-- Element untuk menampilkan pesan error -->
            <div id="error-message" style="display: none; color: red; text-align: center;"></div>
            <div class="input-box">
                <label for="username"><i class='bx bxs-user'></i></label>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <label for="password"><i class='bx bxs-lock-alt'></i></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <!-- Span untuk menampilkan pesan error -->
            <button type="submit" class="btn" name="login">Login</button>
            <div class="register-link">
                <p>Belum Punya Akun? <a href="daftar.php">Daftar</a></p>
            </div>
        </form>
    </div>
</body>

<script>
    // Pengecekan Error
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const error = urlParams.get('error');

        function displayErrorMessage(message) {
            const errorMessageElement = document.getElementById('error-message');
            errorMessageElement.textContent = message;
            errorMessageElement.style.display = 'block';
        }

        if (error === 'username') {
            displayErrorMessage('Username Tidak Ditemukan.');
        } else if (error === 'password') {
            displayErrorMessage('Password salah.');
        }
    });
</script>


</html>