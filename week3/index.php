<?php

require_once('Task.class.php');

if(isset($_POST['add'])){
$title = $_POST['title'];
$description = $_POST['description'];
$deadline= $_POST['deadline'];
$task = new Tasks();
$task->create($title,$description,$deadline);
$tasks = $task->index();
include('tasks.php');
exit();
}

if(isset($_GET['edit'])){
$id = $_GET['edit'];
$task = new Tasks();
$row = $task->edit($id);
include('edit_task.php');
exit();
}


if(isset($_GET['new_task'])){
include('new_task.php');
exit();
}

if(isset($_POST['edit'])){
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$deadline= $_POST['deadline'];
$task = new Tasks();
$task->update($id, $title,$description,$deadline);
$tasks = $task->index();
include('tasks.php');
exit();
}

if(isset($_GET['delete'])){
$id = $_GET['delete'];
$task = new Tasks();
$task->destroy($id);
$tasks = $task->index();
include('tasks.php');
exit();
}


if(isset($_GET['mark_done'])){
$id = $_GET['mark_done'];
$task = new Tasks();
$task->markDone($id);
$tasks = $task->index();
include('tasks.php');
exit();
}

$task = new Tasks();
$tasks = $task->index();
include('tasks.php');



?>