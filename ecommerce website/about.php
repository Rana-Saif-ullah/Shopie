<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Our delivery boys are fast and Honest. Our product's prices are low. We provide the best available products.<br>
         <h1>Coustomer Care:</h1> 
         <p> Whatsapp/Call: 03036151122 <br>
         Phone: 03306151122 <br>
         Email: Saifullah@gmail.com </p></p>
         <h1>Social media:</h1> 
         <p>Facebook <br> Twitter<br> Instagram<br> Linkedin</p>
         
         
        
      
         <a href="contact.php" class="btn">contact us</a>
      </div>   

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Location</h1>

   <iframe style="width: 100%; height: 250px; flex: 1 1 42rem; -webkit-box-flex: 1; -ms-flex: 1 1 42rem;" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d438.6086464333684!2d70.31288826048576!3d28.423204255562997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39375bafb1bb02c3%3A0x37ab10f422e401aa!2sFine%20Computer!5e0!3m2!1sen!2s!4v1660226806320!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
     
   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>