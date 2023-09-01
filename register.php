



<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="style_sign-up.css">
</head>
<body class="bg-register">

<div class="container">
  <section class="intro-login">
    <img class="logo-login" src="img/logo.png" alt="">
    <h1>Sign-up to dashboard<br>digital. </h1>

    <div>
      <img class="vector" src="img/vector.png" alt="">
    </div>
  </section>

    <section class="form">
        <div class="box-form">
          <div class="input-form">
            <form action="sign-up.php" method="post">
                <h2>Sign-up</h2>

              <div class="input-box">
                <span class="material-symbols-outlined">account_circle</span>
                  <input name="username" type="text" required>
                  <label for="">Username</label>
              </div>

              <div class="input-box">
                <span class="material-symbols-outlined">email</span>
                  <input name="email" type="text" required>
                  <label for="">Email</label>
              </div>

              <div class="input-box">
                <span class="material-symbols-outlined">lock</span>
                  <input name="password" type="password" required>
                  <label for="">Password</label>
              </div>
            </form>
              <div class="google">
              <button type="submit" name="submit" >
                <a class="h1"  href="dashboard.html">DAFTAR</a>
              </button>
              </div>
          </div>
      </section>
    </div>
</body>
</html>