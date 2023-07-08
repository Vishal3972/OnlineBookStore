<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
</div>

<section class="about">
    

</section>

<section class="reviews">

   <h1 class="title">Group Members</h1>

   <div class="box-container">

      <div class="box">
         
         <h3>Abhishek Suryawanshi</h3>
         <h4>Roll no : C34445</h4>
      </div>

      <div class="box">
         
         <h3>Vishal Jadhav</h3>
         <h4>Roll no : C34457</h4>
      </div>

      

      <div class="box">
         
         <h3>Prasad Jadhav</h3>
         <h4>Roll no : C34459</h4>
      </div>

   

      <div class="box">
         
         <h3>Rohan Kadam</h3>
         <h4>Roll no : C34460</h4>
      </div>

   </div>

</section> 







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>