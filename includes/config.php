<?php
define('DB_SERVER','eu-cdbr-west-03.cleardb.net');
define('DB_USER','b9c72709b9d01d');
define('DB_PASS' ,'49fc95a9');
define('DB_NAME', 'heroku_c681359cea13677');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
