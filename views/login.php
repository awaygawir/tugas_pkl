<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projek PKL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <div class="card" style="width: 20rem;">
      <div class="mb-3">
      <form action="/proses_login" method="post">
      <?php
          if (isset($_SESSION["pesan_error"])){
            echo '<div class="pesan_error">' . $_SESSION["pesan_error"] . '</div>';
            unset($_SESSION["pesan_error"]);
          }
          ?>
        <label for="usernameInput" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="usernameInput" placeholder="Username...">
        <label for="passwordInput" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password...">
      </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>