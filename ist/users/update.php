<?php
/**
 * Created by PhpStorm.
 * User: techno.com
 * Date: 3/31/2018
 * Time: 6:04 PM
 */

include_once ('../com/connection.php');

if (isset($_REQUEST['update'])){
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['cell'];
    $id=$_REQUEST['id'];

    $sql="UPDATE users SET `name`='".$name."', `email`='".$email."', `cell`='".$phone."' WHERE id=$id";
    echo $sql;
    if (mysqli_query($conn,$sql)){
        header('Location:index.php');
    }


}