 <?php 

session_start();
include('connect.php');



if(isset($_POST['login']))
{
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);

   $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password' LIMIT 1";
   // $login_query_run = mysqli_query($conn, $sql);
     $result=mysqli_query($conn,$sql);

        

        
        if($result){
            $num=mysqli_num_rows($result);

            if($num>0){
                // echo "login successful";
                $login=1;
            $_SESSION['email']=$email;
            header('location:welcome.php');
            }else{
                // echo "invalid credentials";
                $invalid=1;
            }
        }
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> 
    <title>Document</title>
</head>
<body>
    <?php
    if($login == 1){
      echo "<div class ='alert-danger'role='alert'>login succesful</div>";
  }else{
      if($invalid == 1){
          echo "<div class ='alert-success'role='alert'>invalid credentials</div>";
      
      }
    }

    ?>
</body>
</html>

   
