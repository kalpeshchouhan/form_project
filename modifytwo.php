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

$ids = $_GET['id'];

$showquery = "SELECT * FROM ragistration_form WHERE id = ($ids)";

$showdata = mysqli_query($connection, $showquery);

$row = mysqli_fetch_assoc($showdata);
if(isset($_POST['mysubmit'])){
    $idupdate = $_GET['id'];
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
     $oldphotos = $_POST['myoldphoto'];
    //  $signature = $_FILES['mysignature']['name'];
    //  $oldsignature = $_POST['myoldsignature'];
     
     if($file != '')
     {
               $upadate_filename = $_FILES['myphoto']['name'];
     }
     else{
     $upadate_filename = $oldphotos;
   }
    
   
       $updatequery = "UPDATE ragistration_form  SET id=$idupdate, enrollment='$enrollment', stud_name='$studentname', fath_name='$fathername', date='$date', studnet_mobileno='$studentmobno', father_mobileno='$fathmobno', roll_no='$roll', cource='$course', branch='$branch', semester='$semester', backsem_1='$semester1', backsem_2='$semester2', backsem_3='$semester3', backsem_4='$semester4', backsem_5='$semester5', backsem_6='$semester6', backsem_7='$semester7',
       backsem_8='$semester8',	fee_recipt_no='$feereciptno', recipt_pic='$upadate_filename' WHERE id=$idupdate";
    
      $query = mysqli_query($connection, $updatequery);
      if($query){
          if($_FILES['myphoto']['name'] !='')
          {
           move_uploaded_file($_FILES["myphoto"]["tmp_name"], "upload/".$_FILES["myphoto"]["name"]);
           unlink("upload/".$oldphotos);
          }
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Edit-Form</title>
</head>
<style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    body {
        background-color: silver;

    


    }
    .container {
        height: 1000px;
        width: 950px;
        background-color: whitesmoke;
        margin: auto;

    }

    .container h1 {
        margin-left: 300px;
        padding-top: 10px;
    }

    .name1 {
        margin-left: 80px;

    }

    .name2 {
        margin-left: 200px;

    }

    .name3 {
        margin-left: 80px;
    }

    .name4 {
        margin-left: 200px;
    }

    .name5 {
        margin-left: 80px;
    }

    .name6 {
        margin-left: 170px;

    }

    .name7 {
        margin-left: 80px;
    }

    .name8 {
        margin-left: 250px;
    }

    .name9 {
        margin-left: 80px;
    }

    .name10 {
        margin-left: 250px;
    }

    .name11 {
        margin-left: 70px;
    }

    .name13 {
        margin-left: 70px;
    }

    .name15 {
        margin-left: 70px;
    }

    .name17 {
        margin-left: 70px;
    }

    .name19 {
        margin-left: 70px;
    }

    .name20 {
        margin-left: 70px;
    }

    .name21 {
        margin-left: 70px;
    }

    .name22 {
        margin-left: 70px;
    }


    h3 {
        margin-left: 50px;
    }

    .form {
        padding-top: 20px;
    }

    .name {
        border: none;
        background-color: whitesmoke;
        border-bottom: 3px solid silver;
        outline: none;
    }

    .name:hover {
        border-bottom: 3px solid rgb(3, 253, 241);
        transition-duration: 2s;
    }

    .img {
        margin-top: 20px;
    }

    .heading {
        margin-top: 70px;
    }

    .img1 {
        margin-top: 30px;
    }

    #recipt2 {
        border: none;
    }

    #recipt4 {
        border: none;
    }

    .subt {
        padding-top: 50px;
        text-align: center;
    }

    #sub {
        height: 40px;
        width: 150px;
        font-size: 20px;
        border-radius: 10px;
        transition: background-color;
        transition-duration: 2s;
        background-color: transparent;
        /* box-shadow: 0px 0px 20px rgb(12, 255, 93); */
        outline: none;
        border: 2px solid black;
    }

    #sub:hover {
        background-color: silver;

    }

    span1 {
        color: red;
        margin-left: 200px;
        font-size: 12px;
    }

    .form1 {
        padding-top: 10px;
    }

    .form2 {
        margin-top: 30px;
    }
    .error3{
         margin-left: 20px;

    }
    .error4{
        margin-left: 260px;
    }
    .error6{
        margin-left: 230px;
    }
    .error8{
        margin-left: 260px;
    }
    
</style>

<body>
    <div class="container">
     <h1>Exam ragistration form</h1>
        <hr>
        <h3>* must be filled</h3>
        <div class="form">
            <form autocomplete="off" onsubmit="return validation()" enctype="multipart/form-data" method="POST">
                <span class="name1">
                    Enrollment no*<input type="text" name="myenroll" class="name" id="enroll" value="<?php echo $row['enrollment']; ?>">

                </span>
                 <span class="name2">
                    Date<input type="date" name="mydate" class="name" id="dt" value="<?php echo $row['date']; ?>">
                </span>
                 <div>
                    <span class="error">
                        <span1 id="eenroll"></span1>
                    </span>
                    <span class="name4">

                    </span>
                </div>
                <div class="form1">
                    <span class="name3">
                        Student name*<input type="text" name="mystudentname" class="name" id="stname" value="<?php echo $row['stud_name']; ?>">
                    </span>
                    <span class="name4">
                        Father name <input type="text" name="myfather" class="name" id="ftnaem" value="<?php echo $row['fath_name']; ?>">
                    </span>
                </div>
                 <div>
                    <span class="error1">
                        <span1 id="studname"></span1>
                    </span>
                    <span class="error2">
                        <span1 id="fathname"></span1>
                    </span>
                </div>
                <div class="form2">
                    <span class="name5">
                        Student mobile no*<input type="tel" name="mystudentmob" class="name" id="stmob" value="<?php echo $row['studnet_mobileno']; ?>">
                    </span>
                    <span class="name6">
                        Father mobile no <input type="tel" name="myfathermob" class="name" id="ftmob" value="<?php echo $row['father_mobileno']; ?>">
                    </span>
                </div>
                <span class="error3">
                    <span1 id="sstmobno"></span1>
                </span>
                <span class="error4">
                    <span1 id="fathmobno"></span1>
                </span>
                <div class="form2">
                    <span class="name7">
                        Roll no*<input type="tel" name="myroll" class="name" id="roll" value="<?php echo $row['roll_no']; ?>">
                    </span>
                    <span class="name8">
                        Course*<input type="text" name="mycourse" class="name" id="cors" value="<?php echo $row['cource']; ?>">
                    </span>
                </div>
                <div>
                    <span class="error5">
                        <span1 id="rroll"></span1>
                    </span>
                    <span class="error6">
                        <span1 id="ccourse"></span1>
                    </span>
                </div>
                <div class="form2">
                    <span class="name9">
                        Branch*<input type="text" name="mybarnch" class="name" id="br" value="<?php echo $row['branch']; ?> ">
                    </span>
                    <span class="name10">
                        Semester*<input type="text" name="mysemester" class="name" id="sen" value="<?php echo $row['semester']; ?>">
                    </span>
                </div>
                                <div>
                    <span class="error7">
                        <span1 id="bbranch"></span1>
                    </span>
                    <span class="error8">
                        <span1 id="ssemester"></span1>
                    </span>
            
                <h3> Back log</h2>
                    <div class="form">
                        <span class="name11">
                            Semester 1: <input type="text" name="mysemester1" class="name" id="sem1" value="<?php echo $row['backsem_1']; ?>">
                        </span>
                        <span class="name12">
                            Semester 2: <input type="number" name="mysemester2" class="name" id="sem2" value="<?php echo $row['backsem_2']; ?>">
                        </span>
                    </div>
                    <div class="form">
                        <span class="name13">
                            Semester 3: <input type="number" name="mysemester3" class="name" id="sem3" value="<?php echo $row['backsem_3']; ?>">
                        </span>
                        <span class="name14">
                            Semester 4: <input type="number" name="mysemester4" class="name" id="sem4" value="<?php echo $row['backsem_4']; ?>">
                        </span>
                    </div>
                    <div class="form">
                        <span class="name15">
                            Semester 5: <input type="number" name="mysemester5" class="name" id="sem5" value="<?php echo $row['backsem_5']; ?>">
                        </span>
                        <span class="name16">
                            Semester 6: <input type="number" name="mysemester6" class="name" id="sem6" value="<?php echo $row['backsem_6']; ?>">
                        </span>
                    </div>
                    <div class="form">
                        <span class="name17">
                            Semester 7: <input type="number" name="mysemester7" class="name" id="sem7" value="<?php echo $row['backsem_7']; ?>">
                        </span>
                        <span class="name18">
                            Semester 8: <input type="number" name="mysemester8" class="name" id="sem8" value="<?php echo $row['backsem_8']; ?>">
                        </span>
                    </div>
                    <h3 class="heading">Fess Recipt photo</h3>
                    <div class="form">
                        <div class="img">
                            <span class="name19">
                                Fee-Recipt no: <input type="text" name="myFeeRecipt" class="name" id="recipt1" value="<?php echo $row['fee_recipt_no']; ?>">
                            </span>
                            <span class="name20">
                                Recipt-photo: <input type="file" name="myphoto" class="name" id="recipt2">
                                <input type="hidden" name="myoldphoto" value="<?php echo $row['recipt_pic']; ?>">
                            </span>
                        </div> 
                        <div class="img1">
                            <!-- <span class="name21">
                                student singnature: <input type="file" name="mysignature" class="nam" id="recipt3">
                                <input type="hidden" name="myoldsignature" value="<?php echo $row['signature']; ?>">
                            </span>   -->
                            <div class="subt">
                            <input type="submit" name="mysubmit" id="sub">
                        </div>
                    </div> 
            </form>
            </div>
            <?php
            ?>