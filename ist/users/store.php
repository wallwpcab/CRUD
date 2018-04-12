<?php
include_once ('../com/connection.php');

if (isset($_REQUEST['submit'])){
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['cell'];
    $password=$_REQUEST['pwd'];

    $sql="INSERT INTO users (name,email,cell,password) VALUE ('".$name."','".$email."','".$phone."','".$password."')";

    if (mysqli_query($conn,$sql)){
        header('Location:index.php');
    }


}