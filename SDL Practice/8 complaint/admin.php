<?php include 'config.php'; ?>
<h2>Admin Panel – All Complaints</h2>
<?php
$res = mysqli_query($conn, "SELECT * FROM complaints");
while ($row = mysqli_fetch_assoc($res)) {
    echo "<hr><b>{$row['title']}</b><br>User: {$row['username']}<br>
          {$row['description']}<br>Status: {$row['status']}<br>
          <form method='POST'>
              <input type='hidden' name='id' value='{$row['id']}'>
              <select name='status'>
                  <option ".($row['status']=="Pending"?"selected":"").">Pending</option>
                  <option ".($row['status']=="In Progress"?"selected":"").">In Progress</option>
                  <option ".($row['status']=="Resolved"?"selected":"").">Resolved</option>
              </select>
              <button name='update'>Update</button>
          </form>";
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    mysqli_query($conn, "UPDATE complaints SET status='$status' WHERE id=$id");
    header("Location: admin.php");
}
?>
