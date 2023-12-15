<?php
class Database{
    private $con;
    public function __construct($servername, $username, $password, $dbname) {
        $this->con=new mysqli($servername, $username, $password, $dbname);

        if($this->con->connect_error){
            die("error".$this->con->connect_error);
        }
        else{
           // echo "connection success in php";
        }
    }public function getConnection(){
        return $this->con;
    }
}
$dtabase=new Database("localhost","root","","management");
?>