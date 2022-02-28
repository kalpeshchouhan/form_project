<?php

  session_start();
  ob_start();
 
$connection = mysqli_connect('localhost', 'root');
if($connection){
    echo "succes";

}
else{
    echo "faild";
}

 mysqli_select_db($connection, 'stud_details');

 $email = $_POST['myemail'];
 $passward = $_POST['mypassword'];
 
 $email_search = "SELECT * FROM teacher_sinup WHERE Email = '$email'";

 $query = mysqli_query($connection, $email_search);

     $email_count = mysqli_num_rows($query);

      if($email_count){

         $email_pass = mysqli_fetch_assoc($query);

         $db_pass = $email_pass['password'];

         $_SESSION['firstname'] = $email_pass['Fname'];

         $_SESSION['departments'] = $email_pass['department'];

         $pass_decode = password_verify($passward, $db_pass);

         if($pass_decode){

           if(isset($_POST['rememberme'])){
             setcookie('emailcookie',$email,time()+86400);
             setcookie('passwordcookie',$passward,time()+86400);

           header('location:admindashboard.php');
           }
           else{
            header('location:admindashboard.php');
           }
          }
          
         else{

          // echo "faild";
          // header("location: login.php?error=Incorrect password");
          // exit();
          $_SESSION['status'] = "Invalid Password";
          header('location: teacherlogin.php');

         }
        }
        else{
          // echo "invalid password";
          // header("location: login.php?error=Invalid Email ID");
          // exit();
          $_SESSION['status'] = "Invalid Emal ID";
          header('location: teacherlogin.php');
        }

      // {
      //     $_SESSION['username'] = $username ;
      //     header('location:dashboard.php');
      // }
      // else{
      //      ?
      //      <script>
      //     alert("invalid");
      //      </script>
      //    <?php
      // }

 ?>