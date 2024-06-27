<?php

session_start();

if (isset($_SESSION["auth"])) {
  header("Location: ../me");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../styles/components.css" />
    <link rel="stylesheet" href="../styles/resets.css" />
    <link rel="stylesheet" href="../styles/variables.css" />
    <link rel="stylesheet" href="../styles/icons/css/all.css" />
    <link rel="stylesheet" href="./index.css" />

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <title>Universe One | Login</title>
  </head>
  <body>
    <nav id="nav">
      <div class="container">
        <div class="wrapper">
          <div class="logo">
            <h1>Universe One</h1>
          </div>
          <div id="nav-links" class="links">
            <a href="../#mission">Mission</a>
            <a href="../#exploration">Exploration</a>
            <a href="../#about">About</a>
            <a href="../login">Login</a>
            <a href="../register">Register</a>
          </div>
          <div class="burger">
            <i id="toggle-nav-links" class="fas fa-bars"></i>
          </div>
        </div>
      </div>
    </nav>

    <div id="auth">
      <div class="container">
        <div class="wrapper">
          <div class="auth-box">
            <div class="left">
              <img
                src="../images/exploration/charting-the-cosmos.png"
                alt="universe" />
            </div>
            <form id="login-form" class="right" onsubmit="return false;">
              <?php 
                if (isset($_SESSION["registered"])) {
                  echo "<p class='green-highlight'>You are now registered.</p>";
                  unset($_SESSION["registered"]);
                }
              ?>
              <div id="response-container"></div>
              <h1>Universe One Login</h1>
              <div class="input">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" />
              </div>
              <div class="input">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" />
              </div>
              <button id="login-btn" class="button">Login</button>
              <hr />
              <a href="../register" class="button">Register</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script src="../js/navbar.js"></script>
<script src="./index.js"></script>
