<?php

   include 'connect.php';

   setcookie('teacher_id', '', time() - 1, '/');

   header('location:../admin/login.php');

?>