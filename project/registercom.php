<?php
session_start();
include('connect.php');

if(isset($_POST['signup']))
{
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
   $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

   if($password == $cpassword)
   {
    //   check Email
      $checkemail = "SELECT email FROM `users` WHERE email='$email'";
      $checkemail_run = mysqli_query($conn, $checkemail);

      if(mysqli_num_rows($checkemail_run) > 0)
      {
        //  Already Email Exist
         $_SESSION['message'] = "Already Email Exist";
       header("Location: register.php");
         exit(0);
      }
      else
       {
         $sql = "INSERT INTO `users` (fname,lname,email,password) VALUES ('$fname', '$lname', '$email', '$password')";
         $user_querry_run = mysqli_query($conn, $sql);

         if($user_querry_run)
         {
             $_SESSION['message'] = "Register Successfully";
             header("Location: login.php");
            exit(0); 
         }
         else 
         {
             
                  $_SESSION['message'] = "Show Something Went Wrong";
                header("Location: register.php");
                  exit(0);
         }
         
      }
   }
   else
    {
        $_SESSION['message'] = "password and confirm password does not match";
       header("Location: register.php");
    exit(0); 
   }
}
else
 {
    header("Location: register.php");
    exit(0);
}






?>