<?php include('header.php'); ?>

    <div class="flex items-center h-screen w-full bg-teal-lighter">
  <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
    <h1 class="block w-full text-center text-grey-darkest mb-6">Sign In</h1>
    <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="index.php" method="post">
  

      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="email">Email</label>
        <input class="border py-2 px-3 text-grey-darkest" type="email" name="email" id="email">
      </div>
      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="password">Password</label>
        <input class="border py-2 px-3 text-grey-darkest" type="password" name="password" id="password">
      </div>
    
      <button class="block ring-2 ring-green bg-teal hover:bg-teal-dark text-blue uppercase text-lg mx-auto p-2 rounded" name="login" type="submit">Log In</button>
    </form>
    <a class="block w-full  ring-green text-center no-underline text-sm text-grey-dark hover:text-grey-darker" href="register.php">Don't have an account?</a>
  </div>

<?php include('footer.php'); ?>
