<!DOCTYPE html>
<html>
<head>
    <title> Session login</title>


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
    <form action="?" method="post">
        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
</div>
<div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
</div>

<div class="form-group">
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required>
</div>
        <button name="register" type="submit">register</button>
    </form>



<?php
if(isset($_POST['register'])):
    //store user details in session variables
    session_start();
     if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)):
    echo "please provide a valid email";
    else:
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
echo "successfully registered, you can now login";
    //send user to login page
          header('location: login.php');
endif;
endif;
?>

</body>

</html>