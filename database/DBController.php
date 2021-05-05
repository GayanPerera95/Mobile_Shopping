<?php


class DBController
{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "shopee";

    public $con = null;

    public function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if ($this->con->connect_error){
            echo "Fail".$this->con->connect_error;
        }
        //echo 'Connection Successful..!!';

    }

    public function __destruct(){
        $this->closeConnection();

    }

    //closing connection
    protected function closeConnection(){
        if($this->con!=null){
            $this->con->close();
            $this->con = null;
        }
    }

}
