<?php include 'config.php'; session_start(); ?>
<h2>Login or Register</h2>
<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button name="login">Login</button>
    <button name="register">Register</button>
</form>

<?php
if (isset($_POST['register'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];
    mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$u', '$p')");
    echo "Registered!";
}

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];
    $res = mysqli_query($conn, "SELECT * FROM users WHERE username='$u' AND password='$p'");
    if (mysqli_num_rows($res) == 1) {
        $_SESSION['user'] = $u;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>
