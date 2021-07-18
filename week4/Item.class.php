<?php
require_once('DB.class.php');

class Item {
  // Properties
  private $item;
  private $price;
  private $user_id;
  private $con;

  function __construct(){
  $this->con = new DB();
  }
  // retrieve all market
   function index() { 
    $con = $this->con->openConnection();
   $query = "SELECT * FROM market order by id desc";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $this->con->closeConnection();
   return $result;
  }

  //create a new task
  function create($item,$price,$user_id) {
     $con = $this->con->openConnection();
      $this->item =  mysqli_real_escape_string($con, $item);
      $this->price =  mysqli_real_escape_string($con, $price);
      $this->user_id =  mysqli_real_escape_string($con, $user_id);
     
    $query = "INSERT INTO market(item,price,user_id)
VALUES('$this->item','$this->price','$this->user_id')";
 mysqli_query($con,$query) or die(mysqli_error($con));
   $this->con->closeConnection();
 
  }
  //show full details of a selected task
  function edit($id){
session_start();
$id = (int)$id;
$con = $this->con->openConnection();

$query = "SELECT * from market WHERE `id` = '". (int)$id ."'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);

if($row['user_id'] == $_SESSION['_id']):
  $query = "SELECT * FROM market WHERE `id` = $id";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
   $row = mysqli_fetch_assoc($result);
   $this->con->closeConnection();
   return $row;
else:
  echo "you are not authorised to perform this action";
endif;

  }
//edit a task using the task id
  function update($id,$item,$price){
session_start();
$con = $this->con->openConnection();
$id = (int)$id;

$this->item =  mysqli_real_escape_string($con, $item);
$this->price =  mysqli_real_escape_string($con, $price);
  
$this->con->openConnection();
$query = "SELECT * from market WHERE `id` = '". (int)$id ."'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);

if($row['user_id'] == $_SESSION['_id']):
    $query = "UPDATE market SET `item` = '$this->item',`price` = '$this->price' WHERE `id` = '$id'";
 mysqli_query($con,$query) or die(mysqli_error($con));
else:
  echo "you are not authorised to perform this action";
endif;
   $this->con->closeConnection();

  }

function getUserItems($id){
  $con = $this->con->openConnection();
  $query = "SELECT * FROM market WHERE `user_id` = '". (int)$id ."'";
  $result = mysqli_query($con,$query) or die(mysqli_error($this->con));
  $this->con->closeConnection();
  return $result;
}

  //delete a task using the task id
 function destroy($id){
   session_start();
$con = $this->con->openConnection();
$query = "SELECT * from market WHERE `id` = '". (int)$id ."'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);

if($row['user_id'] == $_SESSION['_id']):
$query = "DELETE FROM market WHERE `id` = '". (int)$id ."'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
else:
  echo "you don't have authorization to perform this operation";
endif;
   $this->con->closeConnection();
 }
 
}
?>