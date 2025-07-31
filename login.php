<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/Logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Login </title>
</head>
<body>
<div class="flex-container">
  <div class="d1-maroon">
    <div class="ispsc-logo">
        <img src="assets/img/ISPSC-logo.png" alt="">
    </div>
  </div>

  <div class="d2-yellow">
    <div class="login-container">
  <form class="login-form" action="login.php" method="POST">
    <h2>Welcome!</h2>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required placeholder="Enter username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required placeholder="Enter password">
    </div>
    <button type="submit">Sign In</button>
  </form>
</div>

  </div>

</div>

</body>
</html>