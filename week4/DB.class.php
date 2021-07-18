<?php 
class DB{
    public $con;
//open a database connection
 function openConnection(){
     $this->con = mysqli_connect("localhost", "root", "", "sidehustle_market");
 
if (!$this->con) {
    echo "Error No: " . mysqli_connect_errno();
    echo "Error Description: " . mysqli_connect_error();
    exit;
}
return $this->con;
 }
  
 //close a database connection
 function closeConnection(){
     if($this->con){
         mysqli_close($this->con);
     }
 }
}

?>