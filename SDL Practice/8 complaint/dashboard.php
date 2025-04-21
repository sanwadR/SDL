<?php include 'config.php'; session_start();
if (!isset($_SESSION['user'])) header("Location: index.php");
?>

<h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
<a href="logout.php">Logout</a>
<h3>Submit a Complaint</h3>
<form method="POST">
    Title: <input type="text" name="title"><br>
    Description:<br><textarea name="desc"></textarea><br>
    <button name="submit">Submit</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $user = $_SESSION['user'];
    mysqli_query($conn, "INSERT INTO complaints (username, title, description, status) VALUES ('$user', '$title', '$desc', 'Pending')");
    echo "Complaint submitted.";
}
?>

<h3>Your Complaints</h3>
<?php
$user = $_SESSION['user'];
$res = mysqli_query($conn, "SELECT * FROM complaints WHERE username='$user'");
while ($row = mysqli_fetch_assoc($res)) {
    echo "<hr><b>{$row['title']}</b><br>{$row['description']}<br>Status: {$row['status']}<br>";
}
?>
