<?php
/* 102
- Session Is Stored On The Server
    - Session Store Only A User Key In Cookie To Know Its You
    - Key Are Generated By PHP Engine So Its Almost Impossible To Guess
    - You Need To Add It Before Any Output
 */

session_start();
$_SESSION['name']="ahmed";
$_SESSION['id']="1005";
echo '<pre>';
print_r($_SESSION);
echo '</pre>';


echo '<a href="test.php"> TEST</a>';














?>