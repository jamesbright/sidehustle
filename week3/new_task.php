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
        <input type="text" id="title" name="title" required>
</div>

<div class="form-group">
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required>
</div>

<div class="form-group">
        <label for="deadline">Deadline:</label>
        <input type="date" id="deadline" name="deadline" required>
</div>


        <button name="add" type="submit">Add</button>
    </form>





</body>

</html>