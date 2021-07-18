<?php include('header.php');

?>



    <div class="flex items-center h-screen w-full bg-teal-lighter">
  <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
    <h1 class="block w-full text-center text-grey-darkest mb-6">Sign Up</h1>
    <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="index.php" method="post">
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="name">Full Name</label>
        <input class="border py-2 px-3 text-grey-darkest" type="text" name="name" id="name">
      </div>

      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="email">Email</label>
        <input class="border py-2 px-3 text-grey-darkest" type="email" name="email" id="email">
      </div>
      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="password">Password</label>
        <input class="border py-2 px-3 text-grey-darkest" type="password" name="password" id="password">
      </div>
        <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="confirm_password">Confirm Password</label>
        <input class="border py-2 px-3 text-grey-darkest" type="password" name="confirm_password" id="confirm_password">
      </div>
      <button class="block bg-teal ring-2 ring-green hover:bg-teal-dark text-blue uppercase text-lg mx-auto p-2 rounded" name="register" type="submit">Create Account</button>
    </form>
    <a class="block w-full text-center no-underline text-sm text-grey-dark hover:text-grey-darker" href="login.php">Already have an account?</a>
  </div>
</div>
<?php include('footer.php'); ?>
