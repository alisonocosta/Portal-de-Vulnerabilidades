<?php
require_once('database/mysqli_connection.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if($dbc) {
    $_SESSION['name'] = $_POST['name_reg_input'];
    $_SESSION['email'] = $_POST['email_reg_input'];


    if($_POST['password_reg_choose_input'] != $_POST['password_reg_confirm_input']){
      echo "<p>Passwords do not match. <a href='/sign_up.php'>Go back</a></p>";
      die;
    }

    //Scaping all input data to prevent SQL injections
    $name = mysqli_real_escape_string($dbc,$_POST['name_reg_input']);
    $email = mysqli_real_escape_string($dbc,$_POST['email_reg_input']);
    $pass = mysqli_real_escape_string($dbc, password_hash($_POST['password_reg_choose_input'], PASSWORD_BCRYPT));
    $hash = mysqli_real_escape_string($dbc, md5(rand(0,1000)));

    $query="SELECT * FROM users WHERE user_email='$email'";
    $db_resp=mysqli_query($dbc,$query);
    if($db_resp->num_rows > 0){
      echo "<p>User already registered. Please use another email. <a href='/sign_up.php'>Go back</a></p>";
    } else {

      $insert_query="INSERT INTO users (user_name, user_email, user_password, uniq_hash) VALUES ('$name','$email','$pass','$hash')";
      if($db_user_reg = mysqli_query($dbc, $insert_query)){
        echo "<p>User registered successfully! Please, <a href='/'>log in</a></p>";
      } else {
        echo "<p>Error!". mysqli_error($dbc) ."</p>";
      }

    }

  } else {
    echo "Database connection was not successfull. Try later.";
  }
} else {
    echo "<p>Please, stop trying to hack my site.</p>";
}
  mysqli_close($dbc);
 ?>
