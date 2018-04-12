<?php

/**
 * Created by PhpStorm.
 * User: techno.com
 * Date: 4/4/2018
 * Time: 5:56 PM
 */
include_once ('conn.php');
class Model extends conn
{
    public $table;

    public function store($data_array){

//        $sql="INSERT INTO ".$this->table." (name,email,cell,password) VALUE ('".$name."','".$email."','".$phone."','".$password."')";

        $sql="";
        $sql.='INSERT INTO '.$this->table;
        $sql.=" ( ".implode(', ',array_keys($data_array))." ) VALUES ( '";
        $sql.=implode("', '",array_values($data_array))."')";
//        echo $sql; die();
        if ($this->conn->query($sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
        header('Location:index.php');

    }

    public function edit($id)
    {
        $sql="SELECT * FROM ".$this->table." WHERE id=$id ";
        $qResult=$this->conn->query($sql);
        return $qResult;
    }

    public function update($update_array,$id){
        //        $sql="UPDATE users SET name='".$name."', email='{$email}', updated_at=CURRENT_TIMESTAMP WHERE id=$id ";
        $sql="";
        foreach ($update_array as $key=>$value){
            $sql .= $key ."= '". $value ."', ";
        }
        $sql=substr($sql, 0, -2);
        $sql ="UPDATE ".$this->table ." SET ". $sql . " WHERE id=". $id;
        $this->conn->query($sql);
        header("Location:index.php");

    }

    public function destroy($id)
    {
        $sql="DELETE FROM ".$this->table." WHERE id=$id";
        $this->conn->query($sql);
        header("Location:index.php");
    }

    public function index(){
        $sql="SELECT * FROM ".$this->table." ORDER BY id DESC ";

        $qResult=$this->conn->query($sql);
        return $qResult;
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }


}