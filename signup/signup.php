<?php
include 'connection.php'; //connection established
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$con_pass=$_POST['Confirmpassword'];   // values get cheythu

$obj=new Signup($dtabase);
$obj->insertion($name,$email,$password,$con_pass);



class Signup{
    private $db;
    public function __construct($dtabase){
         $this->db=$dtabase;
    }

    public function insertion($name,$email,$password,$con_pass){
        $check = $this->db->getConnection()->prepare("SELECT COUNT(*) AS count FROM tbl_users WHERE u_email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $x=$check->get_result();
        $data=mysqli_fetch_assoc($x);

        if($data['count']>0){
            echo "email already exist";
        }else{
         $stmt=$this->db->getConnection()->prepare("INSERT INTO  tbl_users(u_name,u_email,u_password,c_password)VALUES(?,?,?,?)");
         $stmt->bind_param("ssss",$name,$email,$password,$con_pass);
         $stmt->execute();
         echo "Registration successful";
        }
    }
}




?>