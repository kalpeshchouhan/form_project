 <?php 

  session_start();
  $_SESSION['firstname'];
 
$connection = mysqli_connect('localhost', 'root');
// if($connection){
//     echo "succes";

// }
// else{
//     echo "faild";
// }

 mysqli_select_db($connection, 'stud_details');
 $user = $_SESSION['firstname'];
    $email_search = "SELECT * FROM studsinup_data WHERE Fname = '$user'";

    $query1 = mysqli_query($connection, $email_search);
   
        $email_count = mysqli_num_rows($query1);
            $email_pass = mysqli_fetch_assoc($query1);
  $id = $email_pass['id'];
 $enrollment =  $_POST['myenroll'];
 $date = date('Y-m-d', strtotime($_POST['mydate']));
 $studentname = $_POST['mystudentname'];
 $fathername =  $_POST['myfather'];
 $studentmobno = $_POST['mystudentmob'];
 $fathmobno =  $_POST['myfathermob'];
 $roll =  $_POST['myroll'];
 $course = $_POST['mycourse'];
 $branch =  $_POST['mybarnch'];
 $semester =  $_POST['mysemester'];
 $semester1 =  $_POST['mysemester1'];
 $semester2 = $_POST['mysemester2'];
 $semester3 =  $_POST['mysemester3'];
 $semester4 =  $_POST['mysemester4'];
 $semester5 = $_POST['mysemester5'];
 $semester6 =  $_POST['mysemester6'];
 $semester7 =  $_POST['mysemester7'];
 $semester8 = $_POST['mysemester8'];
 $feereciptno = $_POST['myFeeRecipt'];
 $file = $_FILES['myphoto']['name'];
 $fileone = $_FILES['mysignature']['name'];

 if(file_exists("upload/".$_FILES['myphoto']['name']))
 {
  ?>
  <script>
    alert("Fee recipit already use");
    location.replace("form.php");
    </script>
    <?php
 }
 else{

   $insetquery = "INSERT INTO ragistration_form (date, stud_name,	fath_name,	enrollment,	roll_no,	cource,	
   branch,	semester,	backsem_1,	backsem_2,	backsem_3,	backsem_4,	backsem_5,	backsem_6,	backsem_7,
   	backsem_8,	fee_recipt_no, recipt_pic, studnet_mobileno, father_mobileno, signature, user_id) VALUES('$date', '$studentname', '$fathername', '$enrollment', '$roll', '$course', '$branch ', '$semester',
      ' $semester1', '$semester2', '$semester3', '$semester4', '$semester5', '$semester6', '$semester7', '$semester8', '$feereciptno', '$file', '$studentmobno', '$fathmobno', '$fileone', '$id')";

      $query = mysqli_query($connection, $insetquery);
      
      if($query){
        move_uploaded_file($_FILES["myphoto"]["tmp_name"], "upload/".$_FILES["myphoto"]["name"]);
        move_uploaded_file($_FILES["mysignature"]["tmp_name"], "upload/".$_FILES["mysignature"]["name"]);
        //  echo "insert";
        ?>
        <script>
          alert("Succesfull Submited");
          location.replace("dashboard.php");
          </script>
          <?php
        
        
      }
      else{
        // echo "faild";
        ?>
        <script>
          alert("Error");
          location.replace("dashboard.php");
          </script>
          <?php
      }
    }
 

  ?>