<?php

@include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/c7.png" alt="">
         <h3>why choose us?</h3>
         <p>When it comes to choosing an agricultural product shopping website, we understand that you have several options available. However, we firmly believe that [Agroshop] stands out from the res</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/What-We-Can-Provide_1.png" alt="">
         <h3>what we provide?</h3>
         <p>At Agroshop, we provide: Comprehensive Product Range, High-Quality Products, Convenient Shopping Experience, Customer Satisfaction & Commitment to Sustainability</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/profile1.png" alt="">
         <p>"I've been using Fertilizer for my crops, and the results have been outstanding! My plants are healthier, and I've noticed a significant increase in yields."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> Saurabh Mahdhik</h3>
      </div>

      <div class="box">
         <img src="images/profile2.png" alt="">
         <p>"I had a serious pest problem in my garden, and Pesticide  from Agroshop came to the rescue. It effectively eliminated the pests without harming the environment."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Riya Kulkarni</h3>
      </div>

      <div class="box">
         <img src="images/profile3.png" alt="">
         <p>"I purchased a variety of vegetable seeds from Agroshop, and I'm impressed with the germination rate and the quality of the plants. The taste of the harvested produce is fantastic!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rutuja Maheshwari</h3>
      </div>

      <div class="box">
         <img src="images/profile4.png" alt="">
         <p>"I was struggling with fungal diseases on my plants, but the Fungicide I bought from Agroshop effectively controlled the spread and saved my crops."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Komal lande</h3>
      </div>

      <div class="box">
         <img src="images/profile5.png" alt="">
         <p>"I was skeptical about using pesticides, but the organic option I found on Agroshop was a game-changer".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kartik Bunjkar</h3>
      </div>

      <div class="box">
         <img src="images/profile6.png" alt="">
         <p>"The [Fungicide Brand] fungicide proved to be highly effective in preventing and treating fungal infections. My plants are healthier, and the disease symptoms have disappeared."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Gaurav Deshamane</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>