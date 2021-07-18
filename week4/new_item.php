<?php 
include('header.php');
if(!isset($_SESSION['_id'])):
    header('location: register.php');
endif;

?>

     <div class="flex items-center h-screen w-full bg-teal-lighter">
  <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
    <h1 class="block w-full text-center text-grey-darkest mb-6">New Product</h1>
    <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="index.php" method="post">
  

      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="item">Item</label>
        <input class="border py-2 px-3 text-grey-darkest" type="text" name="item" id="item">
      </div>
      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="price">Price</label>
        <input class="border py-2 px-3 text-grey-darkest" type="number" name="price" id="price">
      </div>

    <div class="form-group">
        <input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['_id']; ?>" required>
</div>

      <button class="block ring-2 ring-green bg-teal hover:bg-teal-dark text-blue uppercase text-lg mx-auto p-2 rounded" name="add" type="submit">Add</button>
    </form>
     </div>


<?php include('footer.php'); ?>
