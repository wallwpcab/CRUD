<?php
/**
 * Created by PhpStorm.
 * User: techno.com
 * Date: 3/31/2018
 * Time: 6:13 PM
 */
$id=$_REQUEST['nssl'];

include_once ('../com/connection.php');

$sql="DELETE FROM users WHERE id=$id ";
if (mysqli_query($conn,$sql)){
    header('Location:index.php');
}