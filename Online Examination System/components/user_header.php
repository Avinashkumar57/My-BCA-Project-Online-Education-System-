<?php
$message = array();
if(isset($message)){
   foreach($message as $msg){
      echo '
      <div class="message">
         <span>'.$msg.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">

   <section class="flex">

      <a href="home.php" class="logo">R.S.Coaching Centre</a>

      <form action="search_course.php" method="post" class="search-form">
         <input type="text" name="search_course" placeholder="search courses..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_course_btn"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
      <?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      if($select_profile->rowCount() > 0){
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      if($fetch_profile['is_verified'] == 1){
?>
      <img src="uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
      <h3><?= $fetch_profile['name']; ?></h3>
      <span>student</span>
      <a href="profile.php" class="btn">view profile</a>
      <div class="flex-btn">
     
      </div>
      <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
<?php
   } else {
      // If the user is not verified, display an error message
      $message[] = 'Your account is not verified yet. Please check your email and verify your account.';
?>
      <h2>Please login or register</h2>
      <div class="flex-btn">
         <a href="login.php" class="option-btn">Login</a>
         <a href="register.php" class="option-btn">Register</a>
      </div>
     
<?php
   }
      }
?>

      </div>

   </section>

</header>


<!-- header section ends -->

<!-- side bar section starts  -->

<div class="side-bar">

   <div class="close-side-bar">
      <i class="fas fa-times"></i>
   </div>
   <div class="profile">
      <?php
         $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_profile->execute([$user_id]);
         if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            if($fetch_profile['is_verified'] == 1){
      ?>
            <img src="uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
            <h3><?= $fetch_profile['name']; ?></h3>
            <span>student</span>
            <a href="profile.php" class="btn">view profile</a>
            <nav class="navbar">
               <a href="courses.php"> <i class="fas fa-graduation-cap"></i><span> View Courses</span></a>
            </nav>
      <?php
            }
         }
         else {
            // If the user is not verified, display an error message
            $message[] = 'Your account is not verified yet. Please check your email and verify your account.';
      ?>
            <h2>Please login or Register First</h2>
            <div class="flex-btn" style="padding-top: .5rem;">
               <a href="login.php" class="option-btn">Login</a>
               <a href="register.php" class="option-btn">Register</a>
            </div>
            
             <h1>Admin Login</h1>
      <div class="flex-btn" style="padding-top: .5rem;">
         <a href="admin/login.php" class="option-btn">Login</a>
         </div>
      <?php
         }
      ?>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact us</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>About us</span></a>
   </nav>

</div>


<!-- side bar section ends -->