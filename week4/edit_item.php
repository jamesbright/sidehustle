<?php include('header.php'); ?>
        <div class="flex items-center h-screen w-full bg-teal-lighter">
  <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
    <h1 class="block w-full text-center text-grey-darkest mb-6">Edit</h1>
    <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="index.php" method="post">
  

      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="item">Item</label>
        <input class="border py-2 px-3 text-grey-darkest" type="text" value="<?php echo $row['item']; ?>" id="item" name="item" required>
      </div>
      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="price">Price</label>
        <input class="border py-2 px-3 text-grey-darkest" type="number" value="<?php echo $row['price']; ?>" id="price" name="price" required>
      </div>
    <div class="form-group">
<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>" />
</div>
<div class="form-group">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
</div>
      <button class="block ring-2 ring-green bg-teal hover:bg-teal-dark text-blue uppercase text-lg mx-auto p-2 rounded" name="update" type="submit">Update</button>
    </form>
     </div>

<?php include('footer.php'); ?>
