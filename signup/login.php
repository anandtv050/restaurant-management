 <?php

include 'connection.php';

$mail=$_POST['Eemail'];
$pass=$_POST['Epassword'];

// echo $mail,$pass;
$logbj=new login($dtabase);
$logbj->Loginfun($mail,$pass);

class login{
    private $db;
    public function __construct($dtabase){
        $this->db=$dtabase;
    }


    public function Loginfun($mail,$pass){

      if($mail=="admin@gmail.com" && $pass=="admin@123"){
        echo "admin login";
      }
      else{
      $stmt=$this->db->getConnection()->prepare("SELECT * FROM tbl_users WHERE u_email=? AND u_password =?");
      $stmt->bind_param("ss",$mail,$pass);

      if($stmt->execute()){
        $result=$stmt->get_result();
        if($result->num_rows>0){
          echo "login user success";
        }else{
          echo "invalid mail or password";
        }
      }
    }

}
}

 ?> 


