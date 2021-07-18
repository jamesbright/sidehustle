<?php 
require_once('DB.class.php');

class User{


      // Properties
  private $name;
  private $email;
  private $password;
  private $confirm_password;
  private $con;
 
  function __construct(){
  $this->con = new DB();
  }

  //create a new task
  function create($name,$email,$password,$confirm_password) {
     $con = $this->con->openConnection();
      $this->name =  mysqli_real_escape_string($con, $name);
      $this->email =  mysqli_real_escape_string($con, $email);
      $this->password =  mysqli_real_escape_string($con, $password);
      $this->confirm_password =  mysqli_real_escape_string($con, $confirm_password);
     
      if($this->password != $this->confirm_password):
        echo "passwords do not match";
        exit();
      endif;

      $this->password = password_hash($this->password, PASSWORD_BCRYPT, array('cost'=>12));

    $query = "INSERT INTO user(name,email,password)
VALUES('$this->name','$this->email','$this->password')";
 mysqli_query($con,$query) or die(mysqli_error($con));
 echo "Successfully registered, you can now login";
   $this->con->closeConnection();
 
  }


  function login($email, $password){
$con = $this->con->openConnection();

$this->email = mysqli_escape_string($con,$email);
$this->password= mysqli_escape_string($con,$password);

$query=mysqli_query($con,"select * from user where email='$this->email'")or die(mysqli_error($con));
$row = mysqli_fetch_assoc($query);

        if(!password_verify($this->password,$row['password'])){
          echo 'Wrong password';
          exit();
    }
    session_start();
    $_SESSION['_id'] = $row['id'];
    return $_SESSION['_id'];
  
   $this->con->closeConnection();

  }

  function getUser($id){
    $con = $this->con->openConnection();
$query=mysqli_query($con,"select * from user where id='$id'")or die(mysqli_error($con));
  $row = mysqli_fetch_assoc($query);
   $this->con->closeConnection();
  return $row;
  }



//reset password
function resetPassword($current_password,$new_password, $confirm_password,$user_id){
     $con = $this->con->openConnection();
      $current_password =  mysqli_real_escape_string($con, $current_password);
      $user_id =  mysqli_real_escape_string($con, $user_id);
      $new_password =  mysqli_real_escape_string($con, $new_password);
      $confirm_password =  mysqli_real_escape_string($con, $confirm_password);
      $user_id = (int)$user_id;
      if($this->password != $this->confirm_password):
        echo "passwords do not match";
        exit();
      endif;
$query=mysqli_query($con,"select * from user where id='$user_id'")or die(mysqli_error($con));
$row = mysqli_fetch_assoc($query);

        if(!password_verify($current_password,$row['password'])):
          echo 'Wrong password';
          exit();
        endif;
      $password = password_hash($new_password, PASSWORD_BCRYPT, array('cost'=>12));
$query=mysqli_query($con,"update user set password = '$password' where id='$user_id'")or die(mysqli_error($con));
echo "password changed successfully";

}
}
?>