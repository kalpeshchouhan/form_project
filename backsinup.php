<?php

  session_start();
 
$connection = mysqli_connect('localhost', 'root');
if($connection){
    echo "succes";

}
else{
    echo "faild";
}

 mysqli_select_db($connection, 'stud_details');

 $username = mysqli_real_escape_string($connection, $_POST['myusername']);
 $firstname =  mysqli_real_escape_string($connection, $_POST['myfirstname']);
 $lastname =  mysqli_real_escape_string($connection, $_POST['mylastname']);
 $passward =  mysqli_real_escape_string($connection, $_POST['mypassword']);
 $conpassward = mysqli_real_escape_string($connection, $_POST['confirmpassword']);
 $email =  mysqli_real_escape_string($connection, $_POST['myemail']);
 $phone =  mysqli_real_escape_string($connection, $_POST['myphone']);

 $pass = password_hash($passward, PASSWORD_BCRYPT);
 $cpass = password_hash($conpassward, PASSWORD_BCRYPT);

 $emailquery = "SELECT * FROM studsinup_data WHERE Email = '$email'";       

      $result = mysqli_query($connection, $emailquery);
    
      $num = mysqli_num_rows($result);

      if($num>0)
      {
    
        // $msg = "****Email aready use****";
        // header('location:sinup.php?msg='.$msg);
        $_SESSION['status'] = "Email already use";
        header('location:sinup.php');
      
        
      }
      else{
         $data = "INSERT INTO studsinup_data (username, Fname, Lname, Email, password, conpassword, phone) VALUES ('$username', '$firstname', '$lastname', '$email', '$pass', '$cpass', '$phone')";

         mysqli_query ($connection, $data);
         header('location:login.php');
      }

?>
 <!-- && PASSD = '$passward'"; -->