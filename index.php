<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>University</title>
</head>
<body>
<nav class="sidebar close">
    <div class="menu-bar">
      <div class="bottom-content">
        <ul>
          <li class="mode">
            <div class="toggle-switch">
              <span class="switch"></span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="index">
    <form action="login.php" method="post">
      <div class="loging">
        <img src="img/logo_tec.png" class="imagen">
        <input type="email" name="user" id="user" placeholder="Usuario">
        <input type="password" name="pass" id="pass" placeholder="Contraseña">
        <button type="submit">
          <i class="bi bi-box-arrow-in-right icon"></i>
          <span class="text nav-text">Log in</span>
        </button>
      </div>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>