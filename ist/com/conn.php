<?php

/**
 * Created by PhpStorm.
 * User: techno.com
 * Date: 4/4/2018
 * Time: 6:02 PM
 */
class conn
{
    private $servername='localhost';
    private $username='root';
    private $password='';
    private $database='ist';
    public $conn;

    public function __construct()
    {
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

// Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
//        echo "Connected successfully";
        return $this->conn;
    }
}