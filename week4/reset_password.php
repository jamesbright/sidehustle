<?php include('header.php'); ?>

    <div class="flex items-center h-screen w-full bg-teal-lighter">
  <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
    <h1 class="block w-full text-center text-grey-darkest mb-6">Reset Password</h1>
    <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="index.php" method="post">
  


      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="current_password">Current Password</label>
        <input class="border py-2 px-3 text-grey-darkest" type="password" name="current_password" id="current_password">
      </div>
    
      
      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="new_password">New Password</label>
        <input class="border py-2 px-3 text-grey-darkest" type="password" name="new_password" id="new_password">
      </div>

      
      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="confirm_password">Confirm Password</label>
        <input class="border py-2 px-3 text-grey-darkest" type="password" name="confirm_password" id="confirm_password">
      </div>

 
        <input class="border py-2 px-3 text-grey-darkest" type="hidden" name="user_id" value=<?php echo $_SESSION['_id']; ?> id="user_id">
      
      
      <button class="block ring-2 ring-green bg-teal hover:bg-teal-dark text-blue uppercase text-lg mx-auto p-2 rounded" name="password_reset" type="submit">reset</button>
    </form>
  </div>

<?php include('footer.php'); ?>
