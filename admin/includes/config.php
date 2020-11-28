<?php
define('DB_SERVER','database-2.c0ioknt4akb6.us-east-1.rds.amazonaws.com');
define('DB_USER','shweta');
define('DB_PASS' ,'12345678');
define('DB_NAME', 'onlinecourse');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
