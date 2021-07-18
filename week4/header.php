<?php 
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Market</title>
 <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/tailwind.css" rel="stylesheet">

        <style>


.form-group{
    margin:10px;
}


        </style>
</head>
<body>
<header class="border-b md:flex md:items-center md:justify-between p-4 pb-0 shadow-lg md:pb-4">
  
  <!-- Logo text or image -->
  <div class="flex items-center justify-between mb-4 md:mb-0">
    <h1 class="leading-none text-2xl text-grey-darkest">
      <a class="no-underline text-grey-darkest hover:text-black" href="index.php">
       Market Hub
      </a>
    </h1>

    <a class="text-black hover:text-orange md:hidden" href="#">
      <i class="fa fa-2x fa-bars"></i>
    </a>
  </div>
  <!-- END Logo text or image -->
  

  
  <!-- Global navigation -->
  <nav>
    <ul class="list-reset md:flex md:items-center">
      <li class="md:ml-4">
        <a class="block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="index.php">
          Products
        </a>
      </li>
      <li class="md:ml-4">
          <?php if(isset($_SESSION['_id'])):?>
        <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="index.php?dashboard=<?php echo $_SESSION['_id']; ?>">
        Dashoard
        </a>
            <?php else: ?>

             <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="index.php?login">
      Login
        </a> 
        
        <? endif; ?>
      </li>
      <li class="md:ml-4">
        <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="index.php?add">
          Add product
        </a>
      </li>
    </ul>
  </nav>
  <!-- END Global navigation -->

</header>
  <div class="mt-20 container mx-auto bg-purple-600 bg-opacity-75 shadow-lg rounded-lg ">
    <div class="rounded-lg shadow-xs ">
      <div class="p-2">