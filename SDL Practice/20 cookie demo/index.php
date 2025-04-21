<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PHP Cookie Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f2f5;
    }
    .container {
      margin-top: 70px;
      max-width: 600px;
    }
    .cookie-box {
      margin-top: 30px;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <div class="container text-center">
    <h2>🍪 PHP Cookie Example</h2>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["username"])) {
          $username = htmlspecialchars($_POST["username"]);
          setcookie("username", $username, time() + (86400 * 7), "/"); // 7 days
          echo "<div class='alert alert-success mt-4'>Cookie has been set for <strong>$username</strong>.</div>";
      }
    ?>

    <form method="post" action="" class="mt-4">
      <div class="mb-3">
        <label for="username" class="form-label">Enter your name:</label>
        <input type="text" name="username" id="username" class="form-control" required />
      </div>
      <button type="submit" class="btn btn-primary">Save Name in Cookie</button>
    </form>

    <div class="cookie-box mt-4">
      <h5>Stored Cookie:</h5>
      <p class="text-success">
        <?php
          if (isset($_COOKIE["username"])) {
              echo "Hello, <strong>" . $_COOKIE["username"] . "</strong>!";
          } else {
              echo "No cookie found. Please enter your name.";
          }
        ?>
      </p>
    </div>
  </div>
</body>
</html>
