<?php

session_start();
if(!isset($_SESSION['firstname'])){

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>form</title>
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
            <form action="backform.php" autocomplete="off" onsubmit="return validation()" enctype="multipart/form-data" method="POST">
                <span class="name1">
                    Enrollment no*<input type="text" name="myenroll" class="name" id="enroll">

                </span>
                <span class="name2">
                    Date<input type="date" name="mydate" class="name" id="dt">
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
                        Student name*<input type="text" name="mystudentname" class="name" id="stname">
                    </span>
                    <span class="name4">
                        Father name <input type="text" name="myfather" class="name" id="ftnaem">
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
                        Student mobile no*<input type="tel" name="mystudentmob" class="name" id="stmob">
                    </span>
                    <span class="name6">
                        Father mobile no <input type="tel" name="myfathermob" class="name" id="ftmob">
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
                        Roll no*<input type="tel" name="myroll" class="name" id="roll">
                    </span>
                    <span class="name8">
                        Course*<input type="text" name="mycourse" class="name" id="cors">
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
                        Branch*<input type="text" name="mybarnch" class="name" id="br">
                    </span>
                    <span class="name10">
                        Semester*<input type="text" name="mysemester" class="name" id="sen">
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
                            Semester 1: <input type="number" name="mysemester1" class="name" id="sem1">
                        </span>
                        <span class="name12">
                            Semester 2: <input type="number" name="mysemester2" class="name" id="sem2">
                        </span>
                    </div>
                    <div class="form">
                        <span class="name13">
                            Semester 3: <input type="number" name="mysemester3" class="name" id="sem3">
                        </span>
                        <span class="name14">
                            Semester 4: <input type="number" name="mysemester4" class="name" id="sem4">
                        </span>
                    </div>
                    <div class="form">
                        <span class="name15">
                            Semester 5: <input type="number" name="mysemester5" class="name" id="sem5">
                        </span>
                        <span class="name16">
                            Semester 6: <input type="number" name="mysemester6" class="name" id="sem6">
                        </span>
                    </div>
                    <div class="form">
                        <span class="name17">
                            Semester 7: <input type="number" name="mysemester7" class="name" id="sem7">
                        </span>
                        <span class="name18">
                            Semester 8: <input type="number" name="mysemester8" class="name" id="sem8">
                        </span>
                    </div>
                    <h3 class="heading">Fess Recipt photo</h3>
                    <div class="form">
                        <div class="img">
                            <span class="name19">
                                Fee-Recipt no: <input type="text" name="myFeeRecipt" class="name" id="recipt1">
                            </span>
                            <span class="name20">
                                Recipt-photo: <input type="file" name="myphoto" class="name" id="recipt2">
                            </span>
                        </div>
                        <div class="img1">
                            <span class="name21">
                                student singnature: <input type="file" name="mysignature" class="nam" id="recipt3">
                            </span> 
                            <div class="subt">
                            <input type="submit" name="mysubmit" id="sub">
                        </div>
                    </div>
            </form>
            </div>
            <script>
                function validation() {
                    var Enrollment = document.getElementById('enroll').value;
                    var Studentname = document.getElementById('stname').value;
                    var Fathername = document.getElementById('ftnaem').value;
                    var Studentmobno = document.getElementById('stmob').value;
                    var Fathermobno = document.getElementById('ftmob').value;
                    var Rollno = document.getElementById('roll').value;
                    var Course = document.getElementById('cors').value;
                    var Branch = document.getElementById('br').value;
                    var Semester = document.getElementById('sen').value;
                    // var backsem1 = document.getElementById('sem1').value;
                    // var backsem2 = document.getElementById('sem2').value;
                    // var backsem3 = document.getElementById('sem3').value;
                    // var backsem4 = document.getElementById('sem4').value;
                    // var backsem5 = document.getElementById('sem5').value;
                    // var backsem6 = document.getElementById('sem6').value;
                    // var backsem7 = document.getElementById('sem7').value;
                    // var backsem8 = document.getElementById('sem8').value;
                    var reciptno = document.getElementById('recipt1').value;
                    var hostelreciptno = document.getElementById('recipt3').value;

                    if (Enrollment == "") {
                        document.getElementById('eenroll').innerHTML = "**Enter Enrollment**";
                        return false;
                    }
                    if ((Enrollment.length < 2) || (Enrollment.length > 20)) {
                        document.getElementById('eenroll').innerHTML = "**length must be between 2 and 20**";
                        return false;
                    }
                    // if (!isNaN(Enrollment))  {
                    //     document.getElementById('eenroll').innerHTML = "**Number not allow**";
                    //     return false;
                    // }
                    else {
                        document.getElementById('eenroll').innerHTML = "";
                    }
                    if (Studentname == "") {
                        document.getElementById('studname').innerHTML = "**Enter your name**";
                        return false;
                    }
                    //  if (Studentname.length < 2) {
                    //      document.getElementById('ffname').innerHTML = "**Enter one or more char**";
                    //      return false;
                    //  }
                    if ((Studentname.length < 2) || (Studentname.length > 20)) {
                        document.getElementById('studname').innerHTML = "**length must be between 2 and 20**";
                        return false;
                    }
                    if (!isNaN(Studentname)) {
                        document.getElementById('studname').innerHTML = "**Number not allow**";
                        return false;
                    }
                    else {
                        document.getElementById('studname').innerHTML = "";
                    }

                    // if (Fathername == "") {
                    //     document.getElementById('fathname').innerHTML = "**Enter your last name**";
                    //     return false;
                    // }
                    // if (lastname.length < 2) {
                    //     document.getElementById('llname').innerHTML = "**Enter one or more char**";
                    //     return false;
                    // }
                    // if ((Fathername.length < 2) || (Fathername.length > 20)) {
                    //     document.getElementById('fathname').innerHTML = "**length must be between 2 and 20**";
                    //     return false;
                    // } 
                    // if (!isNaN(Fathername)) {
                    //      document.getElementById('fathname').innerHTML = "**Number not allow**";
                    //      return false;
                    //  }
                    //  else {
                    //      document.getElementById('fathname').innerHTML = "";
                    //  }
                    if (Studentmobno == "") {
                        document.getElementById('sstmobno').innerHTML = "**please enter your phone no**";
                        return false;
                    }
                    if (isNaN(Studentmobno)) {
                        document.getElementById('sstmobno').innerHTML = "**please enter number only**";
                        return false;
                    }
                    if (Studentmobno.length < 10 || Studentmobno.length > 10) {
                        document.getElementById('sstmobno').innerHTML = "**Enter 10-digit mobile no**";
                        return false;
                    }
                    else {
                        document.getElementById('sstmobno').innerHTML = "";
                    }
                    if (Fathermobno == "") {
                        document.getElementById('fathmobno').innerHTML = "**please enter your phone no**";
                        return false;
                    }
                    if (isNaN(Fathermobno)) {
                        document.getElementById('fathmobno').innerHTML = "**please enter number only**";
                        return false;
                    }
                    if (Fathermobno.length < 10 || Fathermobno.length > 10) {
                        document.getElementById('fathmobno').innerHTML = "**Enter 10-digit mobile no**";
                        return false;
                    }
                    else {
                        document.getElementById('fathmobno').innerHTML = "";
                    }
                    if (Rollno == "") {
                        document.getElementById('rroll').innerHTML = "**please enter your phone no**";
                        return false;
                    }
                    if (isNaN(Rollno)) {
                        document.getElementById('rroll').innerHTML = "**please enter number only**";
                        return false;
                    }
                    if (Rollno.length < 12 || Rollno.length > 12) {
                        document.getElementById('rroll').innerHTML = "**Enter 10-digit mobile no**";
                        return false;
                    }
                    else {
                        document.getElementById('rroll').innerHTML = "";
                    }
                    if (Course == "") {
                        document.getElementById('ccourse').innerHTML = "**Enter course**";
                        return false;
                    }
                    if ((Course.length < 2) || (Course.length > 10)) {
                        document.getElementById('ccourse').innerHTML = "**Enter valid course**";
                        return false;
                    }
                    if (!isNaN(Course)) {
                        document.getElementById('ccourse').innerHTML = "**Number not allow**";
                        return false;
                    }
                    else {
                        document.getElementById('ccourse').innerHTML = "";
                    }
                    if (Branch == "") {
                        document.getElementById('bbranch').innerHTML = "**Enter branch**";
                        return false;
                    }
                    if ((Branch.length < 2) || (Branch.length > 20)) {
                        document.getElementById('bbranch').innerHTML = "**lenght btw 2 and 20**";
                        return false;
                    }
                    if (!isNaN(Branch)) {
                        document.getElementById('bbranch').innerHTML = "**Number not allow**";
                        return false;
                    }
                    else {
                        document.getElementById('bbranch').innerHTML = "";
                    }
                    if (Semester == "") {
                        document.getElementById('ssemester').innerHTML = "**Enter semester**";
                        return false;
                    }
                    if (isNaN(Semester)) {
                        document.getElementById('ssemester').innerHTML = "**Enter number only**";
                        return false;
                    }
                    else {
                        document.getElementById('ssemester').innerHTML = "";
                    }

                }



            </script>


</body>

</html>