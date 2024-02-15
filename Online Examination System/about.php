<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>R.S. Coaching Centre prepares students for life, helping them develop an informed curiosity and a lasting passion for learning. Schools can shape a R.S. Coaching Centre curriculum around how they want their students to learn, helping them discover new abilities and a wider world. R.S. Coaching Centre students develop the skills they need to achieve at school, university and work.</p>
         <a href="login.php" class="inline-btn">our courses</a>
      </div>

   </div>


   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>10</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+200</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5</h3>
            <span>expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>guaranty for knowledge</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->
<html>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>
</head>
<body>
<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>I attend this school nearly a ago and have only great things to say about my experience. The teachers are amazing, the curriculum is second to none and each child is treated with care.
            If you have any doubts please go and see  and he will put you at ease. I am blessed that some of the same teachers who taught me are teaching </p>
         <div class="student">
            <img src="images/Ayush.jpg" alt="" hight="250" width ="250">
            <div>
               <h3>Ayush Kumar</h3>
               <div class="stars">
                 <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-alt checked"></span>
               </div>
            </div>
         </div>
      </div>

<div class="box">
         <p>Though it is a small school, it allows for a lower student to teacher ratio, giving children more confidence when asking questions, engage in group activities, and opportunities for one-on-one time with the teachers.</p>
         <div class="student">
            <img src="images/Avinash.jpg" alt=""hight="250" width ="250">
            <div>
               <h3>Avinash Kumar</h3>
               <div class="stars">
                  <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-alt checked"></span>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Our experience at has been exceptional. The teachers are truly invested in my brother education and their growth as learners. Adjustments are made as needed to meet the needs of the student. Small class sizes and leveled learning have enabled my brother to gain confidence in their learning abilities.</p>
         <div class="student">
            <img src="images/Ankit.jpg" alt=""hight="256" width ="256">
            <div>
               <h3>Ankit</h3>
               <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-alt checked"></span>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p> I went to this school from 8th grade school through 10th grade.  nowi am in high school. I  so grateful that i was able to be at  for those years. I learned valuable leadership skills while learning at her own pace (no cookie-cutter education there!).</p>
         <div class="student">
            <img src="images/Mayank.jpg" alt=""hight="256" width ="256">
            <div>
               <h3>Mayank</h3>
               <div class="stars">
               <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-alt checked"></span>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p> I feel so comfortable and at ease with taking my daughter to. Its a lovely place. It is sparkling clean and tidy at all times of the day. It smells so plesant. I would be willing to bet that it has the biggest outdoor play yard of any other daycare/preschool in the city.</p>
         <div class="Parents">
            <img src="images/pic-6.jpg" alt=""hight="256" width ="256">
            <div>
               <h3>Rakesh Kumar</h3>
               <div class="stars">
               <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-alt checked"></span>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p> The teachers are super sweet and amazing. I’ve never worried about might son while he’s under their care and guidance.</p>
         <div class="Parents">
            <img src="images/pic-9.jpg" alt=""hight="256" width ="256">
            <div>
               <h3>Sanjeev Mistry</h3>
               <div class="stars">
               <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-alt checked"></span>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>
</body>
</html>
      

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>