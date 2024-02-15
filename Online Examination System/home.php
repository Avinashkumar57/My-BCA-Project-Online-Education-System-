<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- quick select section starts  -->

<section class="quick-select">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

      <?php
         if($user_id != ''){
      ?>
      <div class="box">
         <h3 class="title">likes and comments</h3>
         <p>total likes : <span><?= $total_likes; ?></span></p>
         <a href="likes.php" class="inline-btn">view likes</a>
         <p>total comments : <span><?= $total_comments; ?></span></p>
         <a href="comments.php" class="inline-btn">view comments</a>
         <p>saved playlist : <span><?= $total_bookmarked; ?></span></p>
         <a href="bookmark.php" class="inline-btn">view bookmark</a>
      </div>
      <?php
         }else{ 
      ?>
      <div class="box" style="text-align: center;">
         <h1 class="title">Please login or Register First</h1>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>
      <?php
      }
      ?>

      <div class="box">
         <h3 class="title">Top categories</h3>
         <div class="flex">
             <a href="search_course.php?"><i class="fas fa-plus-minus fa-spin fa-pulse"></i><span>Mathematics</span></a>
            <a href="#"><i class="fas fa-globe-asia fa-spin fa-pulse"></i><span>Social Science</span></a>
            <a href="#"><i class="fas fa-vial fa-spin fa-pulse"></i><span>science</span></a>
            <a href="#"><i class="fas fa-laptop fa-spin fa-pulse"></i><span>Computer</span></a>
            <a href="#"><i class="fas fa-atom fa-spin fa-pulse"></i><span>Sanskrit</span></a>
            <a href="#"><i class="fas fa-book-open fa-spin fa-pulse"></i><span>Hindi</span></a>
            <a href="#"><i class="fas fa-a fa-spin fa-pulse"></i><span>English</span></a>
             <a href="#"><i class="fas fa-baseball-ball fa-spin fa-pulse"></i><span>Sports</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">popular topics</h3>
         <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#"><i class="fab fa-js"></i><span>javascript</span></a>
            <a href="#"><i class="fab fa-react"></i><span>react</span></a>
            <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
         </div>
      </div>

      <div class="box Teacher">
         <h3 class="title">How to Become an Instructor</h3>
         <p>
            <h2><li>Select a topic of your interest and design a curriculum prior to recording your videos.</li> 
<li>Start recording your new course or you can publish your pre-existing courses as well.</li>
<li>Simply contact us with us to access your author dashboard.</li>
<li>Create your course draft, add the course information, upload the videos and submit it for moderation. (Note: adding through information about the course help the students to get a better understanding).</li>
<li>Your Author Profile is the key to attracting more students. Do upload your profile picture and write a bio about yourself.</li>
<li>Feel free to contact us at rsc7634@gmail.com in case of any queries</h2></li></p>
         </*a href="admin/register.php" class="inline-btn"> </*a>
         <a> <h2 </h2></a>Contact administrator for admin registration</h2></a>
      </div>

   </div>

</section>

<!-- quick select section ends -->

<!-- courses section starts  -->

<section class="courses">

   <h1 class="heading">Latest Updates</h1>

   <div class="box-container">

      

  
</section>

<!-- courses section ends -->












<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>