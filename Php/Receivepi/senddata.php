<?php

$DB_NAME = "a9817273_SHome";			//change databaseName
$DB_TABLE_NAME = "receivedata";		//change tableName
$DB_HOST = "http://sql5.000webhost.com/";
$DB_USER_NAME = "a9817273_Anvesh";		//change username
$DB_USER_PASSWORD = "qwerty123";	//change password

$dbConnection = mysqli_connect($DB_HOST, $DB_USER_NAME, $DB_USER_PASSWORD, $DB_NAME) or die(mysqli_connect_errno());

mysqli_set_charset($dbConnection, "utf8");

$message = mysqli_real_escape_string($dbConnection, urldecode($_POST['msg']));

mysqli_query($dbConnection, "INSERT INTO $DB_TABLE_NAME(HumidityLevel) VALUES ('$message');");

mysqli_close($dbConnection);

?>
