<?php
require('connect.php');
session_start();
echo 'login page';
 if(isset($_POST['login_submit']))
 {
     $email=$_POST['login_email'];
     $pass=$_POST['login_pw'];

     $login_query="SELECT * FROM user_login WHERE `email`='$email' AND `password`='$pass'";
     $login_result=mysqli_query($dbc,$login_query) or die("login query not executed");
     if(mysqli_num_rows($login_result)>0)
     {
         echo 'login sucessfull';
         $_SESSION['user_profile']=$email;
         header('refresh: 5; url=http://localhost/globalshala/DIGIBADGE-3(latest)/template/ankit/profile.php');
     }
     else
     {
         echo 'login unsucessfull';
         header('refresh: 5; url=http://localhost/globalshala/DIGIBADGE-3(latest)/template/ankit/login.php');
     }
 }

?>