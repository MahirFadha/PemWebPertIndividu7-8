    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_button'])) {
    $email = "bernardbear@gmail.com"; // Email statis (atau ambil dari input jika dinamis)
    
    // Simpan ke Cookie (expire dalam 30 hari)
    setcookie("user_email", $email, time() + (86400 * 7), "/");
    sleep(2); // Delay 2 detik
    header("Location: ../Profil/profil.html");
    exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php
    include 'login.html'
    ?>
</body>

    <!-- <script>
        localStorage.setItem("user_email", "$email");
        alert("Email disimpan di Cookies & Local Storage!");
    </script> -->

</html>