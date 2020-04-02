<?php
ini_set('session.cookie_secure', '1');
ini_set('session.cookie_httponly', '1');
require_once('database/mysqli_connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="data:,">
    <link rel="stylesheet" href="/static/css/skeleton.css">
    <link rel="stylesheet" href="/static/css/normalize.css">
    <script src="/static/js/validations/validations.js"></script>
    <meta charset="utf-8">
    <title>Portal</title>
  </head>
  <body>
    <div class="container">
      <div class="docs-example docs-example-form">
        <form autocomplete="off" action="login.php" method="post" onsubmit="return !!(validateEmail(document.getElementsByName('login_input')[0].value))">
          <div class="row">
            <div class="five columns" style="margin-top: 15%">
              <h1>Vulnerabilities Portal</h1>
              <label for='login_input'>Login</label>
              <input class="u-full-width" type="text" name="login_input" value="">
            </div>
          </div>
          <div class="row">
            <div class="five columns">
              <label for="password_input">Password</label>
              <input class="u-full-width" type="password" name="password_input" value="">
              <label class="example-send-yourself-copy" style="text-align: right">
                <a href="forgot_password.php">Forgot your password?</a>
              </label>
            </div>
          </div>
          <input class="button-primary" type="submit" value="Submit">
        </form>
        <p>If you do not have an account, please <a href="sign_up.php">sign up</a>.</p>
      </div>
    </div>
  </body>
</html>
