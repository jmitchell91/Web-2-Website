<?php
/**
 * Created by PhpStorm.
 * User: Skhan
 * Date: 9/26/2018
 * Time: 12:42 AM
 */

define('DB_SERVER', 'mydbinstance.cpyjhidve2xq.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'proj1');
define('DB_PASSWORD', '325p1TeamDB');
define('DB_DATABASE', 'Web2DB');

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();


?>