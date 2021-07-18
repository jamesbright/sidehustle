<?php 
include('header.php'); 
require_once('User.class.php');
$user = new User();

?>
    
<div class="grid  gap-2 sm:grid-cols-3 lg:grid-cols-4 md:grid-cols-3">
 <?php if(isset($items)): while($row = mysqli_fetch_assoc($items)): ?>

    <div class="py-8 px-8 max-w-sm  bg-white rounded-xl shadow-md ">
   <div class="text-center space-x-2  ">
    <div class="space-y-0.5">
      <p class="text-lg text-black font-semibold">
    <? echo $row['item']; ?>
      </p>
       <p class="text-gray-500 font-medium">
      <? 
$poster = $user->getUser($row['user_id']);
echo $poster['name'];  ?>
      </p>


       <p class="text-gray-500 text-right font-small">
     <?php  $date_added = date_create($row['created_at']);
$date_added = $date_added->format("d M Y");
echo $date_added; ?>

 </p>
    </div>
    <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">
        
    <del>N</del><? echo $row['price']; ?></button>
  </div>
</div>



<?php endwhile; endif; ?>
</div>
 </div>

 </div>




<?php include('footer.php'); ?>