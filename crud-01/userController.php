<?php

include_once ('../com/Model.php');
$obj_model= new Model();

$obj_model->table='users';

if (isset($_REQUEST['submit'])) {
    $data_array=[
        'name'=>$_REQUEST['name'],
        'email'=>$_REQUEST['email'],
        'cell'=>$_REQUEST['cell'],
        'password'=>$_REQUEST['pwd']
    ];

    $obj_model->store($data_array);
}


function edit($id){
    $obj_model= new Model();
    $obj_model->table='users';
    $qResult=$obj_model->edit($id);
    $row=mysqli_fetch_assoc($qResult);
    return $row;
}

if (isset($_REQUEST['update'])) {
    $id=$_REQUEST['id'];
    $update_array=[
        'name'=>$_REQUEST['name'],
        'email'=>$_REQUEST['email'],
        'cell'=>$_REQUEST['cell']
    ];

    $obj_model->update($update_array,$id);
}

if (isset($_REQUEST['nssl'])){
    $id=$_REQUEST['nssl'];
    $obj_model->destroy($id);
}

function index(){

    $obj_model= new Model();
    $obj_model->table='users';
    return $obj_model->index();


}