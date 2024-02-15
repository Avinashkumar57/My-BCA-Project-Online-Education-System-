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
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<section class="teachers">

   <h1 class="heading">Expert teachers</h1>

   <form action="" method="post" class="search-teacher">
      <input type="text" name="search_teacher"  placeholder="search teacher..." required maxlength="100">
      <button type="submit" name="search_teacher_btn" class="fas fa-search"></button>
   </form>

   <div class="box-container">

      <?php
         if(isset($_POST['search_teacher']) or isset($_POST['search_teacher_btn'])){
            $search_teacher = $_POST['search_teacher'];
            $select_teachers = $conn->prepare("SELECT * FROM `teachers` WHERE name LIKE '%{$search_teacher}%'");
            $select_teachers->execute();
            if($select_teachers->rowCount() > 0){
               while($fetch_teacher = $select_teachers->fetch(PDO::FETCH_ASSOC)){

                  $teacher_id = $fetch_teacher['id'];

                  $count_playlists = $conn->prepare("SELECT * FROM `playlist` WHERE teacher_id = ?");
                  $count_playlists->execute([$teacher_id]);
                  $total_playlists = $count_playlists->rowCount();

                  $count_contents = $conn->prepare("SELECT * FROM `content` WHERE teacher_id = ?");
                  $count_contents->execute([$teacher_id]);
                  $total_contents = $count_contents->rowCount();

                  $count_likes = $conn->prepare("SELECT * FROM `likes` WHERE teacher_id = ?");
                  $count_likes->execute([$teacher_id]);
                  $total_likes = $count_likes->rowCount();

                  $count_comments = $conn->prepare("SELECT * FROM `comments` WHERE teacher_id = ?");
                  $count_comments->execute([$teacher_id]);
                  $total_comments = $count_comments->rowCount();
      ?>
      <div class="box">
         <div class="teacher">
            <img src="uploaded_files/<?= $fetch_teacher['image']; ?>" alt="">
            <div>
               <h3><?= $fetch_teacher['name']; ?></h3>
               <span><?= $fetch_teacher['profession']; ?></span>
            </div>
         </div>
         <p>playlists : <span><?= $total_playlists; ?></span></p>
         <p>total videos : <span><?= $total_contents ?></span></p>
         <p>total likes : <span><?= $total_likes ?></span></p>
         <p>total comments : <span><?= $total_comments ?></span></p>
         <form action="teacher_profile.php" method="post">
            <input type="hidden" name="teacher_email" value="<?= $fetch_teacher['email']; ?>">
            <input type="submit" value="view profile" name="teacher_fetch" class="inline-btn">
         </form>
      </div>
      <?php
               }
            }else{
               echo '<p class="empty">No results found!</p>';
            }
         }else{
            echo '<p class="empty">Please search something!</p>';
         }
      ?>

   </div>

</section>

<!-- teachers section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>