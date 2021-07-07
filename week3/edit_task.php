<!DOCTYPE html>
<html>
<head>
    <title> Todo</title>


        <style>
body{
    padding-top:20%;
    background:navajowhite;
    text-align:center;
}

.form-group{
    margin:10px;
}


        </style>
</head>
<body>
    <form action="index.php" method="post">
        <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" value="<?php echo $row['title']; ?>" id="title" name="title" required>
</div>

<div class="form-group">
        <label for="description">Description:</label>
        <input type="text" value="<?php echo $row['description']; ?>" id="description" name="description" required>
</div>

<div class="form-group">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
</div>

<div class="form-group">
        <label for="deadline">Deadline:</label>
        <input type="date" value="<?php echo $row['deadline']; ?>" id="deadline" name="deadline" required>
</div>


        <button name="edit" type="submit">Add</button>
    </form>





</body>

</html>