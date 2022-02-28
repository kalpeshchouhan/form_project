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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>View-Form</title>
</head>
<style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    body {
        background-color: silver;

    


    }
    .container {
        height: 860px;
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
        margin-left: 250px;

    }

    .name3 {
        margin-left: 80px;
    }

    .name4 {
        margin-left: 245px;
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
        margin-left: 330px;
    }

    .name11 {
        margin-left: 70px;
    }
    .name12{
        margin-left: 300px
        
    }

    .name13 {
        margin-left: 70px;
    }
    
    .name14{
        margin-left: 300px
        
    }
    

    .name15 {
        margin-left: 70px;
    }
    .name16{
        margin-left: 300px
        
    }

    .name17 {
        margin-left: 70px;
    }
    .name18{
        margin-left: 300px
        
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
        margin-top: 30px;
    }

    .form {
        padding-top: 20px;
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

    

    
    .form1 {
        padding-top: 10px;
    }

    .form2 {
        margin-top: 30px;
    }
    .size{
        font-size: 20px;
    
    }
    .formone{
        display: flex;
    }
    .sem_form{ 
        margin-left: 100px;
        margin-top: 20px;
    }
    .sem_form1{ 
        margin-left: 200px;
        margin-top: 20px;
    }
    .form{
        display: flex;
        margin-top: 50px;
    }
    .sem_formone{
        margin-left: 100px
    }
    .sem_formtwo{
        margin-left: 230px;
    }
    .formfour{
        margin-left: 100px;
        margin-top:  50px
    }
    .cont{
        display: flex;s
    }
    .formfive{
        margin-left: 100px;
        margin-top:  50px
        
        
    }
    .formsix{
        margin-left: 100px;
        margin-top:  50px

    }
    .formfive a{
        text-decoration: none;
    }
</style>


<body>
    <div class="container">
     <h1>Exam ragistration form</h1>
        <hr>
        <div class="form">
        <div class="sem_formone">
            
                    <lable class="size"> Enrollment no:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['enrollment']; ?>
                    <br>
                    <br>
                    <lable  class="size">Student name:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['stud_name']; ?>
                   
                    <br>
                           <br>
                   <lable  class="size">Student mobile no:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['studnet_mobileno']; ?>
                    <br>
                           <br>
                    <lable  class="size">Roll no:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['roll_no']; ?>
                    
                    <br>
                           <br>
                    <lable  class="size">Branch:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['branch']; ?>  
                    </div>
                    <div class="sem_formtwo">
                    <lable  class="size">Date:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['date']; ?>
                    <br>
                           <br>
                    <lable  class="size">Father name:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['fath_name']; ?>
                    <br>
                           <br>
                    <lable  class="size">Father mobile no:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['father_mobileno']; ?>
                    <br>
                           <br>
                    <lable class="size">Course:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['cource']; ?>
                    <br>
                           <br>                
                    <lable  class="size"> Semester:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['semester']; ?>
    
                </div>
                </div>
                
                <h3> Back log</h2>
                    <div class="formone">
                       <div class="sem_form">
                           <lable class="size">Semester 1:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['backsem_1']; ?>
                           <br>
                           <br>
                           <lable  class="size">Semester 2:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['backsem_2']; ?>
                           <br>
                           <br>
                           <lable  class="size">Semester 3:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['backsem_3']; ?>
                           <br>
                           <br>
                           <lable class="size">Semester 4:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['backsem_4']; ?>
                           </div>
                           <div class="sem_form1">
                           <lable  class="size">Semester 5:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['backsem_5']; ?>
                           <br>
                           <br>
                           <lable class="size">Semester 6:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['backsem_6']; ?>
                           <br>
                           <br>
                           <lable  class="size">Semester 7:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['backsem_7']; ?>
                           <br>
                           <br>
                           <lable  class="size">Semester 8:</lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['backsem_8']; ?>
                            </div>
                    </div>
                    <h3 class="heading">Fess Recipt photo</h3>
                    <div class="cont">
                    <div class="formfour">

                               <lable class="size">Fee-Recipt no:</lable></lable>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['fee_recipt_no']; ?>
                               </div>
                               <div class="formfive">
                               <lable class="size">Recipt-photo:</lable><a href="viewphoto.php?id=<?php echo $row['id']; ?>">&nbsp;&nbsp;&nbsp;ViewPhoto</a>
                                </div>
                                <div class="formsix">
                               <lable class="size">signature:</lable>
                               <br>
                               <img src="<?php echo "upload/".$row['signature']; ?>" width="170" height="50" >
                                </div>
                        </div>
                        

                    </div>
            </form>
            <?php
?>