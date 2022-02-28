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

 $uniquetext = mysqli_real_escape_string($connection, $_POST['myunique']);
 $firstname =  mysqli_real_escape_string($connection, $_POST['myfirstname']);
 $lastname =  mysqli_real_escape_string($connection, $_POST['mylastname']);
 $passward =  mysqli_real_escape_string($connection, $_POST['mypassword']);
 $conpassward = mysqli_real_escape_string($connection, $_POST['confirmpassword']);
 $email =  mysqli_real_escape_string($connection, $_POST['myemail']);
 $department =  mysqli_real_escape_string($connection, $_POST['mydeparment']);
 $phone =  mysqli_real_escape_string($connection, $_POST['myphone']);

 $pass = password_hash($passward, PASSWORD_BCRYPT);
 $cpass = password_hash($conpassward, PASSWORD_BCRYPT);

 $emailquery = "SELECT * FROM teacher_sinup WHERE Email = '$email'";       

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
         $data = "INSERT INTO teacher_sinup (unique_text, Fname, Lname, Email, department, password, conpassword, phone_no) VALUES ('$uniquetext', '$firstname', '$lastname', '$email', '$department', '$pass', '$cpass', '$phone')";

         mysqli_query ($connection, $data);
         header('location:teacherlogin.php');
      }

?>
 <!-- && PASSD = '$passward'"; -->