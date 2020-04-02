<?php
	session_start();
	include 'working_classes.php';
	require_once('database/mysqli_connection.php');
  //setting user properties..
	//null are informed as some arguments, since we do not have all the informations yet

	$user = new User(null, mysqli_real_escape_string($dbc, $_POST['login_input']), mysqli_real_escape_string($dbc, $_POST['password_input']), null);
	$_SESSION['email'] = addslashes($user->getEmail());

	$query = "SELECT user_email, user_password FROM users WHERE user_email='". $user->getEmail() ."';";

	$db_resp=mysqli_query($dbc, $query);
	if ($db_resp->num_rows == 0 ) {
			echo "Username or password incorrect!";
	} else {
			$row = mysqli_fetch_array($db_resp, MYSQLI_ASSOC);
			if(password_verify($user->getPassword(),$row['user_password'])){
				echo "User logged in!";
				$_SESSION['loggedin'] = True;
				session_regenerate_id();
			} else{
				$_SESSION['loggedin'] = False;

				echo "Username or password incorrect!";
			}
			if($_SESSION['loggedin']) {
				echo "User logado.";
				header('Location: http://'.$_SERVER['SERVER_ADDR'].'/pagina_inicial.php');
			} else {
				echo "Usuário deslogado.";

			}
		//"user is not registered. Please, sign up." .
	}
	mysqli_close($dbc);



?>
