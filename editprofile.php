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

    //  if($email_count){

        $email_pass = mysqli_fetch_assoc($query1);
        $id = $email_pass['id'];

$email_search = "SELECT * FROM studsinup_data WHERE id = '$id'";
$query = mysqli_query($connection, $email_search);
   
        $email_count1 = mysqli_num_rows($query);
        if($email_count1){
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>Edit profile</title>
</head>
<style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    body {
        background-color: silver;
        /* background: url(https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-fresh-students-on-the-way-to-school-advertising-background-backgroundstudentgrasslandcloudblue-skygo-image_75858.jpg); */


    }

    .container {
        /* position: absolute;
        top: 10%;
        left: 40%; */
        height: 450px;
        width: 300px;
        background: white;
        border-radius: 20px;
        margin: auto;
        box-shadow: 0px 0px 18px black;
        margin-top: 50px;
        /* box-shadow: 0px 0px 18px rgb(10, 229, 245); */



    }

    .sinup-form {
        padding-top: 0px;

        font-size: 15px;
        font-weight: bold;




    }


    .container form {
        margin: 35px;
    }

    .name3 {
        padding-top: 20px;
        margin-left: 30px;
    }

    #sub {
        height: 40px;
        width: 150px;
        font-size: 20px;
        border-radius: 20px;
        transition: background-color;
        transition-duration: 2s;
        background-color: rgb(247, 137, 11);
        /* box-shadow: 0px 0px 20px rgb(12, 255, 93); */
        outline: none;
        border: none;
    }

    #sub:hover {
        background-color: rgb(43, 255, 0);

    }

    .container h1 {
        margin-left: 80px;
        padding-top: 10px;
        font-size: 25px;
        font-weight: bold;
        /* margin-top: 20px; */
    }

    #fname {
        /* border: none; */
        border: 2px solid rgb(5, 5, 5);
        width: 210px;
        height: 30px;
        outline: none;
        font-size: 15px;
        padding-left: 10px;
        color: rgb(0, 0, 0);
        border-radius: 20px;


    }

    #fname:hover {
        border: 2px solid rgb(3, 255, 200);
        transition-duration: 2s;
    }

    #lname {

        border: 2px solid rgb(5, 5, 5);
        width: 210px;
        height: 30px;
        outline: none;
        font-size: 15px;
        padding-left: 10px;
        color: rgb(0, 0, 0);
        border-radius: 20px;
    }

    #lname:hover {
        border: 2px solid rgb(3, 255, 3);
        transition-duration: 2s;
    }

    #pass {
        border: 2px solid rgb(5, 5, 5);
        width: 210px;
        height: 30px;
        outline: none;
        font-size: 15px;
        padding-left: 10px;
        color: rgb(0, 0, 0);
        border-radius: 20px;

    }

    #pass:hover {
        border: 2px solid rgb(3, 255, 200);
        transition-duration: 2s;

    }

    #conpass {
        border: 2px solid rgb(5, 5, 5);
        width: 210px;
        height: 30px;
        outline: none;
        font-size: 15px;
        padding-left: 10px;
        color: rgb(0, 0, 0);
        border-radius: 20px;


    }

    #conpass:hover {
        border: 2px solid rgb(3, 255, 3);
        transition-duration: 2s;
    }

    #email {
        border: 2px solid rgb(5, 5, 5);
        width: 210px;
        height: 30px;
        outline: none;
        font-size: 15px;
        padding-left: 10px;
        color: rgb(0, 0, 0);
        border-radius: 20px;


    }

    #email:hover {
        border: 2px solid rgb(3, 255, 200);
        transition-duration: 2s;

    }

    #phone {
        border: 2px solid rgb(5, 5, 5);
        width: 210px;
        height: 30px;
        outline: none;
        font-size: 15px;
        padding-left: 10px;
        color: rgb(0, 0, 0);
        border-radius: 20px;

    }

    #phone:hover {
        border: 2px solid rgb(3, 255, 3);
        transition-duration: 2s;

    }
    #uname{
        border: 2px solid rgb(5, 5, 5);
        width: 210px;
        height: 30px;
        outline: none;
        font-size: 15px;
        padding-left: 10px;
        color: rgb(0, 0, 0);
        border-radius: 20px;

    }
    #uname:hover{
        border: 2px solid rgb(3, 255, 3);
        transition-duration: 2s;
    }

    .already-account {
        padding-top: 20px;
    }

    span1 {
        color: rgb(253, 0, 0);
        font-size: 11px;
    }

    .para {
        text-align: center;
        font-size: 25px;
    }
    .msg{
         margin-left: 50px;
         color: red;
         font-weight: bold;
         /* text-align: center; */
    }
</style>

<body>
    <div class="para">
        <!-- <p>Welcome ot student registration if your are new please sin up or already sin up click login.</p> -->
    </div>
    <div class="container">
        <h1>Edit profile</h1>
        <hr>
        <?php
        if(isset($_SESSION['status']))
        {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            unset($_SESSION['status']);

        }
        ?>
        <?php
         for($i=1;$i<=$email_count1;$i++)
{
   $row =  mysqli_fetch_assoc($query);
   if(isset($_POST['mysubmit'])){
    $id = $email_pass['id'];
    $username = mysqli_real_escape_string($connection, $_POST['myusername']);
    $firstname =  mysqli_real_escape_string($connection, $_POST['myfirstname']);
    $lastname =  mysqli_real_escape_string($connection, $_POST['mylastname']);
    // $passward =  mysqli_real_escape_string($connection, $_POST['mypassword']);
    // $conpassward = mysqli_real_escape_string($connection, $_POST['confirmpassword']);
    $email =  mysqli_real_escape_string($connection, $_POST['myemail']);
    $phone =  mysqli_real_escape_string($connection, $_POST['myphone']);

   

    $updatequery = "UPDATE studsinup_data SET id=$id, username='$username', Fname='$firstname', Lname='$lastname', Email='$email', phone='$phone' WHERE id=$id"; 
    $query = mysqli_query($connection, $updatequery);
     if($query){
         ?>
         <script>
           alert("Succesfull update");
           location.replace("dashboard.php");
          </script>
           <?php
        
        
      }
       else{
      echo "faild";
         ?>
         <script>
           alert("Faild to update");
           location.replace("dashboard.php");
           </script>
           <?php
       }
    }


?>
       <!-- <div class="msg">  <?php if(isset($_GET['msg'])) echo $_GET['msg']; ?> </div> -->
        <form autocomplete="off" onsubmit="return validation()" method="POST">
            <div class="sinup-form">


                <input type="text" name="myusername" id="uname" placeholder="Enter username" value="<?php echo $row['username'] ?>">
                <span1 id="uuname"></span1>
            </div>
            <br>
            <div class="sinup-form">


                <input type="text" name="myfirstname" id="fname" placeholder="Enter fisrt name" value="<?php echo $row['Fname'] ?>">
                <span1 id="ffname"></span1>
            </div>
            <br>
            <div class="sinup-form">


                <input type="text" name="mylastname" id="lname" placeholder="Enter last name" value="<?php echo $row['Lname'] ?>">
                <span1 id="llname"></span1>
            </div>
            <!-- <br>
            <div class="sinup-form">

                <input type="password" name="mypassword" id="pass" placeholder="Enter password" value="<?php echo $row['password'] ?>">
                <span1 id="passs"></span1>

            </div>
            <br>
            <div class="sinup-form">

                <input type="password" name="confirmpassword" id="conpass" placeholder="Re-enter password " value="<?php echo $row['conpassword'] ?>">
                <span1 id="conpasss"></span1>
            </div> -->
            <br>
            <div class="sinup-form">

                <input type="Email" name="myemail" id="email" placeholder="Enter email" value="<?php echo $row['Email'] ?>">
                <span1 id="eemail"></span1>
            </div>
            <br>
            <div class="sinup-form">
                <input type="tel" name="myphone" id="phone" placeholder="Enter no (without +91)" value="<?php echo $row['phone'] ?>">
                <span1 id="pphone"></span1>
                <!-- <div class="already-account">
                    <span>Have an account?</span> <span><a href="login.php" target="_blank">login</a></span>
                </div> -->
            </div>
            <div class="name3">
                <input type="submit" name="mysubmit" id="sub">

            </div>
    </div>
    </form>
    

    <script>
        function validation() {
            var username = document.getElementById('uname').value;
            var fistname = document.getElementById('fname').value;
            var lastname = document.getElementById('lname').value;
            var password = document.getElementById('pass').value;
            var conformpassword = document.getElementById('conpass').value;
            var email = document.getElementById('email').value;
            var phoneno = document.getElementById('phone').value;

            if (username == "") {
                document.getElementById('uuname').innerHTML = "**Enter username**";
                return false;
            }
            if ((username.length < 2) || (username.length > 20))  {
                document.getElementById('uuname').innerHTML = "**length must be between 2 and 20**";
                return false;
            }
            if (!isNaN(username)) {
                document.getElementById('uuname').innerHTML = "**Number not allow**";
                return false;
            }
            else {
                document.getElementById('uuname').innerHTML = "";
            }
            if (fistname == "") {
                document.getElementById('ffname').innerHTML = "**Enter your first name**";
                return false;
            }
            if (fistname.length < 2) {
                document.getElementById('ffname').innerHTML = "**Enter one or more char**";
                return false;
            }
            if (!isNaN(fistname)) {
                document.getElementById('ffname').innerHTML = "**Number not allow**";
                return false;
            }
            else {
                document.getElementById('ffname').innerHTML = "";
            }

            if (lastname == "") {
                document.getElementById('llname').innerHTML = "**Enter your last name**";
                return false;
            }
            if (lastname.length < 2) {
                document.getElementById('llname').innerHTML = "**Enter one or more char**";
                return false;
            }
            if (!isNaN(lastname)) {
                document.getElementById('llname').innerHTML = "**Number not allow**";
                return false;
            }
            else {
                document.getElementById('llname').innerHTML = "";
            }
            if (password == "") {
                document.getElementById('passs').innerHTML = "**please enter password**";
                return false;
            }
            if (password.length < 6 || password.length > 6) {
                document.getElementById('passs').innerHTML = "**length must be six**";
                return false;
            }
            if (password.search(/[0-9]/) == -1) {
                document.getElementById('passs').innerHTML = "**password contain one numeric**";
                return false;
            }
            if (password.search(/[a-z]/) == -1) {
                document.getElementById('passs').innerHTML = "**Enter atleast one lowercase**";
                return false;
            }
            if (password.search(/[A-Z]/) == -1) {
                document.getElementById('passs').innerHTML = "**Enter contain atleast one uppercase**";
                return false;
            }
            if (password.search(/[!\@\#\$\%\^\&\*\(\)\+\_\-\<\>\,\.\?\;\=\:]/) == -1) {
                document.getElementById('passs').innerHTML = "**Enter atleast one special char**";
                return false;
            }
            else {
                document.getElementById('passs').innerHTML = "";
            }
            if (conformpassword != password) {
                document.getElementById('conpasss').innerHTML = "**password doesn't match**";
                return false;
            }
            else {
                document.getElementById('conpasss').innerHTML = "";
            }
            if (email == "") {
                document.getElementById('eemail').innerHTML = "**please enter your email**";
                return false;
            }
            if (email.indexOf('@') <= 0) {
                document.getElementById('eemail').innerHTML = "**invalid email**";
                return false;
            }
            else {
                document.getElementById('eemail').innerHTML = "";
            }

            if (phoneno == "") {
                document.getElementById('pphone').innerHTML = "**please enter your phone no**";
                return false;
            }
            if (isNaN(phoneno)) {
                document.getElementById('pphone').innerHTML = "**please enter number only**";
                return false;
            }
            if (phoneno.length < 10 || phoneno.length > 10) {
                document.getElementById('pphone').innerHTML = "**Enter 10-digit mobile no**";
                return false;
            }
            else {
                document.getElementById('pphone').innerHTML = "";
            }
        }
    </script>
</body>

</html>
<?php    
}
        }
?>
