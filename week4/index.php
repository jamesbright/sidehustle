<?php

require_once('Item.class.php');
require_once('User.class.php');

if(isset($_POST['add'])){
$item = $_POST['item'];
$price = $_POST['price'];
$user_id= $_POST['user_id'];
$new_item = new Item();
$new_item->create($item,$price,$user_id);
$items = $new_item->index();
include('items.php');
exit();
}
if(isset($_GET['add'])){
include('new_item.php');
exit();
}

if(isset($_GET['reset_password'])){
include('reset_password.php');
exit();
}


if(isset($_POST['password_reset'])){
$user = new User();
$user->resetPassword($_POST['current_password'],$_POST['new_password'],$_POST['confirm_password'],$_POST['user_id']);
$item  = new Item();
$items = $item->getUserItems($_POST['user_id']);
$user = $user->getUser($_POST['user_id']);
include('dashboard.php');
exit();
}

if(isset($_GET['logout'])){
    session_start();
    if(isset($_SESSION['_id'])):
    session_destroy();
    endif;
    $new_item = new Item();
$items = $new_item->index();
include('items.php');
exit();
}

if(isset($_POST['login'])){
     $email = $_POST['email'];
    $password = $_POST['password'];
    $user= new User();
    $id = $user->login($email,$password);
    $item  = new Item();
    $items = $item->getUserItems($id);
    $user = $user->getUser($id);
    include("dashboard.php");
    exit();    
}


if(isset($_GET['login'])){
include('login.php');
exit();
}

if(isset($_GET['register'])){
include('register.php');
exit();
}
if(isset($_GET['dashboard'])){
  $item  = new Item();
  $user = new User();
    $items = $item->getUserItems($_GET['dashboard']);
    $user = $user->getUser($_GET['dashboard']);
    include("dashboard.php");
    exit();  
}

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $user= new User();
    $user->create($name,$email,$password,$confirm_password);
    include("login.php");
    exit();
}


if(isset($_GET['edit'])){
$id = $_GET['edit'];
$item = new Item();
$row = $item->edit($id);
include('edit_item.php');
exit();
}


if(isset($_GET['new_item'])){
include('new_item.php');
exit();
}

if(isset($_POST['update'])){
$id = $_POST['id'];
$item = $_POST['item'];
$price = $_POST['price'];
$new_item = new Item();
$new_item->update($id, $item,$price);
 $user= new User();
    $items = $new_item->getUserItems($_POST['user_id']);
    $user = $user->getUser($_POST['user_id']);
    include("dashboard.php");
exit();
}

if(isset($_GET['delete'])){
$id = $_GET['delete'];
$item = new Item();
$item->destroy($id);
$user = new User();
$items = $item->getUserItems($_GET['user']);
$user = $user->getUser($_GET['user']);
include("dashboard.php");
exit();
}


if(isset($_GET['mark_done'])){
$id = $_GET['mark_done'];
$item = new Item();
$item->markDone($id);
$Items = $item->index();
include('Items.php');
exit();
}

$item = new Item();
$items = $item->index();
include('items.php');
exit();


?>