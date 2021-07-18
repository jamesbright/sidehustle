<?php include('header.php');

?>

<style>


.bg-red{
background:red;
color:white;
}

.bg-green{
background:green;
color:white;
}

.bg-blue{
background:blue;
color:white;
}

a{
  text-decoration:none;
}
.curved{
  padding:3px;
  border-radius:5px;
}
.white{
  color:white;

}
.red{
  color:red;
}
.blue{
  color:blue;
}
.green{
  color:green;
}
.done{
    text-decoration:line-through;
}

table {
  border-collapse: collapse;
  border: 1px solid gray;
 
}

th {
  border: 0;
  padding: 2px 20px;
}

td {
  position: relative;
  border: 1px solid gray;
  padding: 8px 20px;
}

table tr[disabled] td::after {
  position: absolute;
  content: '';
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.2);
}
.text-right{
  margin-bottom:10px;
}

</style>


     <div class="flex items-center  w-full bg-teal-lighter">
  <div class="bg-white rounded shadow-lg p-8   md:mx-auto">


    <div class="py-8 px-8 max-w-sm mx-auto bg-purple-300 rounded-xl shadow-md space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
       <div class="text-right"> 
<button class="bg-indigo-300 rounded-lg p-2 mt-4"><a class="white" href="index.php?reset_password">Reset Password</a> </button>
   <button class=" bg-indigo-300 rounded-lg p-2 mt-6"><a  href="index.php?logout">
      Log Out
        </a></button>
</div>
 

    <div class="text-center space-y-2 sm:text-left">
    <div class="space-y-0.5">
 
      <p class="text-lg text-black font-semibold">
<?php if(isset($user)): echo $user['name']; endif;?>
</p>
    </div>
    <div class="space-y-0.5">
      <p class="text-lg text-black font-semibold">
      <?php if(isset($user)): echo $user['email']; endif;?>
</p>
    </div>
</div>
</div>




<div class="text-right"> 
<button class="bg-green-300 rounded-lg p-2 mt-4"><a class="white" href="index.php?new_item">Add New</a> </button>
</div>
<table class="border-collapse border border-green-800">
<tr>
<th>Item</th>
<th>Price</th>
<th>Added</th>
<th>Actions</th>
</tr>
<?php if(isset($items)): while($row = mysqli_fetch_array($items)): ?>
<tr >

<td><?php echo $row['item']; ?> </td>
<td><?php echo $row['price']; ?> </td>
<td><?php echo $row['created_at']; ?> </td>
<td> 
<a class="bg-blue-500 rounded-md p-1" href="index.php?edit=<?php echo $row['id']; ?>&user=<?php echo $_SESSION['_id']; ?>">Edit</a>
<a class="bg-red-500 rounded-md p-1" href="index.php?delete=<?php echo $row['id']; ?>&user=<?php echo $_SESSION['_id']; ?>">Delete</a>
</td>
</tr>
<?php endwhile;  endif;?>
</table>



</div>
</div>











<?php include('footer.php'); ?>