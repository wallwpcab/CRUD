<?php
/**
 * Created by PhpStorm.
 * User: techno.com
 * Date: 3/28/2018
 * Time: 6:51 PM
 */
$server_name = "localhost";
$user_name = "root";
$password = "";
$database='ist';

// Create connection
$conn = mysqli_connect($server_name, $user_name, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";