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

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>There are several online grocery stores in Bangladesh. However, why should you choose Try Basket for your online grocery purchases? For online shoppers in Bangladesh, Try Basket is the greatest option since it provides the finest supermarket deals at the best prices with same-day delivery..</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Try Basket is redefining the process of getting food from beautiful fields to your table by working directly with farmers, butchers, and fishermen to offer you that real, fresh flavour. We offer fresh meat, fishes, veggies, and fruits. Our devoted food safety and nutrition staff ensure that the food you bring home for your family is wholesome, safe, and nutritious. Try Basket has also played a significant role in the campaign against unhealthy food and to encourage healthy lifestyles.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Reivews and rating of clients </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/new pic-1.jpg" alt="">
         <p>Instead of waiting in traffic and traveling i prefer online grocery shop and I was looking for a trusted site. Try Basket is definitely the one that can be trusted.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Asif Akbar</h3>
      </div>

      <div class="box">
         <img src="images/new pic 2.jpg" alt="">
         <p>I usually don't prefer online shopping for groceries but Try Basket just changed my perspective. They are simply the best in online shopping for groceries.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Kamruzaman Kamal</h3>
      </div>

      <div class="box">
         <img src="images/new pic 4.jpg" alt="">
         <p>Try Basket definitely doing something wonderful.They provide the best prices and deals for groceries.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
         </div>
         <h3>Sraboni Sneha</h3>
      </div>

      <div class="box">
         <img src="images/new pic 5.jpg" alt="">
         <p>I would recommend Try Basket any day. Very good service and trusted.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Tahnia Meem</h3>
      </div>

      <div class="box">
         <img src="images/new pic 3.jpg" alt="">
         <p>Try Basket recently joined the competition in online shopping and I bet they will definitely be one of the best online shop in our country within short time.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Tahsan Kabir</h3>
      </div>

      <div class="box">
         <img src="images/new pic 6.jpg" alt="">
         <p>Try Basket made my life so easy, I can focus working on other things instead of going to grocery shop. They always deliver fresh groceries. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shazada Ria</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>