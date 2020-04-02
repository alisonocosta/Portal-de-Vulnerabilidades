<?php
DEFINE('DB_HOST','localhost');
DEFINE('DB_USER', 'www-data');
DEFINE('DB_PASSWORD', 'alison44366603');
DEFINE('DB_NAME', 'Vulnerabilities_database');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to the database '.mysqli_connect_error());

 ?>
