<?php
class Tasks {
  // Properties
  private $title;
  private $description;
  private $deadline;
  private $con;
  

  // retrieve all tasks
   function index() {
    $this->openConnection();
   $query = "SELECT * FROM tasks";
   $result = mysqli_query($this->con,$query) or die(mysqli_error($this->con));
   $this->closeConnection();
   return $result;
  }

  //create a new task
  function create($title,$description,$deadline) {
     $this->openConnection();
      $this->title =  mysqli_real_escape_string($this->con, $title);
      $this->description =  mysqli_real_escape_string($this->con, $description);
      $this->deadline =  mysqli_real_escape_string($this->con, $deadline);
     
    $query = "INSERT INTO tasks(title,description,deadline)
VALUES('$this->title','$this->description','$this->deadline')";
 mysqli_query($this->con,$query) or die(mysqli_error($this->con));
   $this->closeConnection();
 
  }
  //show full details of a selected task
  function edit($id){
      $id = (int)$id;
       $this->openConnection();
  $query = "SELECT * FROM tasks WHERE `id` = $id";
   $result = mysqli_query($this->con,$query) or die(mysqli_error($this->con));
   $row = mysqli_fetch_assoc($result);
   $this->closeConnection();
   return $row;

  }
//edit a task using the task id
  function update($id,$title,$description,$deadline){
    
   $this->openConnection();

      $id = (int)$id;
      $this->title =  mysqli_real_escape_string($this->con, $title);
      $this->description =  mysqli_real_escape_string($this->con, $description);
      $this->deadline =  mysqli_real_escape_string($this->con, $deadline);
$date = new DateTime();
$now = $date->format('Y-m-d H:i:s');
    $query = "UPDATE tasks SET `title` = '$this->title',`description` = '$this->description', `deadline` = '$this->deadline', `updated` = '$now' WHERE `id` = '$id'";
 mysqli_query($this->con,$query) or die(mysqli_error($this->con));
   $this->closeConnection();

  }

  //mark a task as done using the task id
  function markDone($id){
      $id = (int)$id;
   $this->openConnection();
    $query = "UPDATE tasks SET `done` = true  WHERE `id` = '$id'";
 mysqli_query($this->con,$query) or die(mysqli_error($this->con));
   $this->closeConnection();

  }

  //delete a task using the task id
 function destroy($id){
$this->openConnection();
$query = "DELETE FROM tasks WHERE `id` = '". (int)$id ."'";
$result = mysqli_query($this->con,$query) or die(mysqli_error($this->con));
   $this->closeConnection();

 }
 
 // check if the task deadline is passed
 function expired($id){
   $this->openConnection();
  $query = "SELECT * FROM tasks WHERE `id` ='".(int)$id."'";
   $result = mysqli_query($this->con,$query) or die(mysqli_error($this->con));
$row = mysqli_fetch_assoc($result);
 $this->closeConnection();

 $date_now = date("Y-m-d"); // this format is string comparable

if ($date_now > $row['deadline']) {
    return true;
}else{
    return false;
}
 }

 //open a database connection
 function openConnection(){
     $this->con = mysqli_connect("localhost", "root", "", "sidehustle_tasks");
 
if (!$this->con) {
    echo "Error No: " . mysqli_connect_errno();
    echo "Error Description: " . mysqli_connect_error();
    exit;
}
 }


 //close a database connection
 function closeConnection(){
     if($this->con){
         mysqli_close($this->con);
     }
 }
}
?>