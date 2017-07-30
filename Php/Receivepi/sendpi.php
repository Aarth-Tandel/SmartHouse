<?php

$DB_NAME = "a9817273_SHome";			//change databaseName
$DB_TABLE_NAME = "receivedata";		//change tableName
$DB_HOST = "http://sql5.000webhost.com/";
$DB_USER_NAME = "a9817273_Anvesh";		//change username
$DB_USER_PASSWORD = "qwerty123";	//change password

$dbConnection = mysqli_connect($DB_HOST, $DB_USER_NAME, $DB_USER_PASSWORD, $DB_NAME) or die(mysqli_connect_errno());

mysqli_set_charset($dbConnection, "utf8");

//$message = mysqli_real_escape_string($dbConnection, urldecode($_POST['msg']));

//mysqli_query($dbConnection, "INSERT INTO $DB_TABLE_NAME(Message) VALUES ('$message');");

$response = array();

$result = mysqli_query($dbConnection, "SELECT * FROM $DB_TABLE_NAME ORDER BY Time DESC LIMIT 1");

$result = mysqli_fetch_array($result);
$string=$result['Message'];
$response['msg'] = $result['Message'];
//$response['time'] = $result['Time'];

$string=preg_replace("/[^a-zA-Z0-9`_.,;@#%~'\"\+\*\?\[\^\]\$\(\)\{\}\=\!\<\>\|\:\-\s\\\\]+/", "", $string);

echo json_encode($string);

mysqli_close($dbConnection);

?>
