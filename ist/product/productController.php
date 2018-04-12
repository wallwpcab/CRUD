<?php

include_once ('../com/Model.php');
$obj_model= new Model();

$obj_model->table='products';

if (isset($_REQUEST['submit'])) {
    $data_array=[
        'name'=>$_REQUEST['name'],
        'qty'=>$_REQUEST['qty']
    ];

    $obj_model->store($data_array);
}


function edit($id){
    $obj_model= new Model();
    $obj_model->table='products';
    $qResult=$obj_model->edit($id);
    $row=mysqli_fetch_assoc($qResult);
    return $row;
}

if (isset($_REQUEST['update'])) {
    $id=$_REQUEST['id'];
    $update_array=[
        'name'=>$_REQUEST['name'],
        'qty'=>$_REQUEST['qty']
    ];

    $obj_model->update($update_array,$id);
}

if (isset($_REQUEST['nssl'])){
    $id=$_REQUEST['nssl'];
    $obj_model->destroy($id);
}

function index(){

    $obj_model= new Model();
    $obj_model->table='products';
    return $obj_model->index();


}