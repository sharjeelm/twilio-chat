

<?php
  $link = '/home/sharjeel/Documents/twilio-helper/twilio-php-master/config.php';
  include ($link);
   session_start();

   if(!isset($_SESSION['login_user'])){
    header("location:admin-panel.php");
    die();
 }
   

   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from agent_account where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];

   echo $_SESSION['login_user'];
   
  
?>