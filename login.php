<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="assets/logo.png" alt="" />
        </div>

        <div class="list-menu">
          <a href="index.php">Home</a>
          <a href="">Categories</a>
          <a href="" class="btn_login" style="color: white">Login</a>
        </div>
      </div>

      <div class="form-login">
        <h3>Login</h3>
        <form action="login-proses.php" method="post">
          <input
            class="input"
            type="text"
            name="username"
            placeholder="Username"
          />
          <input
            class="input"
            type="password"
            name="password"
            placeholder="Password"
          />
          <button type="submit" class="btn_login" name="login" id="login">
            Login
          </button>
        </form>
      </div>
    </div>
  </body>
</html>
