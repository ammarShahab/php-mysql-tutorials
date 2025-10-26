<!-- Get Method -->
 <?php 
 /* if (isset($_GET['submit'])) {
   echo $_GET['email'];
   echo $_GET['title'];
   echo $_GET['ingredient'];
 } */

// Note: we should not use the get method because the data is visible in the url. instead we should use the post method

   if (isset($_POST['submit'])) {//isset is a function that checks if the variable is set or not. the data will save in the $_POST variable which is a associative array i.e the key is the name of the input field and the value is the value of the input field
     echo $_POST['email'];
     echo $_POST['title'];
     echo $_POST['ingredient'];
   }
 ?>
 

<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php'); ?>

    <section>
        <!-- component -->
<div class="flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
  <div class="py-3 px-10 sm:w-full mx-auto text-center">
    <span class="text-2xl font-light ">Add Pizza</span>
    <div class="mt-4 bg-white shadow-md rounded-lg text-left">
      <div class="h-2 bg-orange-300 rounded-t-md"></div>
      <form class="px-8 py-6 " action="add.php" method="POST">
        <label name="email" class="block font-semibold"> Username or Email </label>
        <input type="email" name="email" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
        <label class="block mt-3 font-semibold"> Pizza Title </label>
        <input type="text" name="title" placeholder="Pizza Title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
        <label class="block mt-3 font-semibold">Ingredients </label>
        <input type="text" placeholder="Ingredients" name="ingredient" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
          <div class="flex justify-between items-baseline">
            <button type="submit" name="submit" value="submit" class="mt-4 bg-orange-300 text-white py-2 px-6 rounded-md hover:bg-orange-500">Submit</button>
            <!-- <a href="#" class="text-sm hover:underline">Forgot password?</a> -->
          </div>
      </form>
      
  </div>
</div>
    </section>
    <?php include('template/footer.php'); ?>
</html>