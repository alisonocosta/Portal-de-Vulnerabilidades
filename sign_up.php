<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/static/css/skeleton.css">
    <link rel="stylesheet" href="/static/css/normalize.css">
    <meta charset="utf-8">
    <script src="/static/js/validations/validations.js"></script>
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="docs-example docs-example-form">
        <form autocomplete="off" action="register.php" method="post" onsubmit="return !!(validateEmail(document.getElementsByName('email_reg_input')[0].value) & validatePasswordsMatch(document.getElementsByName('password_reg_choose_input')[0].value, document.getElementsByName('password_reg_confirm_input')[0].value))">
          <div class="row">
            <div class="five columns" style="margin-top: 15%">
              <label for="login_input">Please, inform your name</label>
              <input class="u-full-width" type="text" name="name_reg_input">
            </div>
          </div>
          <div class="row">
            <div class="five columns">
              <label for="email_reg_input">Please, inform your email</label>
              <input class="u-full-width" type="text" name="email_reg_input" value="">
            </div>
          </div>
          <div class="row">
            <div class="five columns">
              <label for="password_reg_choose_input">Choose a password</label>
              <input class="u-full-width" type="password" name="password_reg_choose_input" value="">
            </div>
          </div>
          <div class="row">
            <div class="five columns">
              <label for="password_reg_confirm_input">Confirm password</label>
              <input class="u-full-width" type="password" name="password_reg_confirm_input" value="">
            </div>
          </div>
          <input class="button-primary" type="submit" value="Create Account" style="margin-top: 2%">
        </form>
      </div>
    </div>
  </body>
</html>
