<?php

   $db_name = 'mysql:host=localhost:3306;dbname=rscoaqdm_course_db';
   $user_name = 'rscoaqdm_rahul';
   $user_password = 'jMJhc?1Cg_ig';

   $conn = new PDO($db_name, $user_name, $user_password);

   function unique_id() {
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();
      $length = strlen($str) - 1;
      for ($i = 0; $i < 20; $i++) {
          $n = mt_rand(0, $length);
          $rand[] = $str[$n];
      }
      return implode($rand);
   }

?>