<?php

class Connection
{
    //private only available forthe current class
    protected $servername = null;

    protected $username = null;

    protected $password = null;

    protected  $databasename = null;



    public function connect()
    {

        $this->servername = "localhost";
        $this->username = "user";
        $this->password = "";
        $this->databasename = "";

        try {
            $connect = new PDO("mysql:host=$this->servername;dbname=$this->databasename", $this->username, $this->password);
            // set the PDO error mode to exception
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $connect;
    }
}

$connection = new Connection();

$connection->connect();




