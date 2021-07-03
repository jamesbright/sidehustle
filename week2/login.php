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
<div class="form-container">
    <form action="?" method="post">
        
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" required>
</div>

        <div class="form-group">
        <label for="pssword">Password:</label>
        <input type="text" name="password" required>
</div>
        <button name="login" type="submit">Login</button>
    </form>
</div>

<?php
if(isset($_POST['login'])):
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    //check if user is registered
    if(isset($_SESSION['name']) and $email == $_SESSION['email'] and $password == $_SESSION['password']):
        header('location: profile.php');
    else:
echo "you need to register first";
    header('location: index.php');
    endif;
    endif;

?>
</body>

</html>