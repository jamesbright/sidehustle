<?php
function checkExpiry($id){
require_once ('Task.class.php');
$task = new Tasks();
$result = $task->expired($id);
return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tasks</title>


        <style>
body{
    padding-top:10%;
    padding-left:10%;
    background:navajowhite;
  
}


.bg-red{
background:red;
color:white;
}

.bg-green{
background:green;
color:white;
}
.white{
  color:white;

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
</head>
<body>
<div class="text-right"> 
<button class="bg-green"><a class="white" href="index.php?new_task">Create New</a> </button>
</div>
<table>
<tr>
<th>Todo</th>
<th>Description</th>
<th>Created</th>
<th>Updated</th>
<th>Deadline</th>
<th>Actions</th>
</tr>
<?php while($row = mysqli_fetch_array($tasks)): ?>
<tr <?php if($row['done'] == 1): echo "class= 'done'"." disabled"; else: if(checkExpiry($row['id']) == 1): echo "class= 'bg-red' "." disabled"; endif; endif; ?> >

<td><?php echo $row['title']; ?> </td>
<td><?php echo $row['description']; ?> </td>
<td><?php echo $row['created']; ?> </td>
<td><?php echo $row['updated']; ?> </td>
<td><?php echo $row['deadline']; ?> </td>
<td> 
<a href="index.php?edit=<?php echo $row['id']; ?>">Edit</a>
<a href="index.php?delete=<?php echo $row['id']; ?>">Delete</a>
<a href="index.php?mark_done=<?php echo $row['id']; ?>">Mark done</a>
</td>
</tr>
<?php endwhile; ?>
</table>



</body>
</html>