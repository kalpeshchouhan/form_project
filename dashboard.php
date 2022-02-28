<?php

session_start();
if(!isset($_SESSION['firstname'])){
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Dashboard</title>
</head>

<style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    body {
        background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,9,51,1) 0%, rgba(12,103,121,1) 98%);




    }



    .navbar {
        /* background-color: white; */
        background: rgb(245,0,46);
        background: linear-gradient(90deg, rgba(245,0,46,1) 0%, rgba(62,13,30,1) 100%);
        box-shadow: 0 20px 20px rgba(32,32,32,.3);
        height: 50px;
        border-top-left-radius: 25px;
        border-top-right-radius: 25px;


    }

    .navbar ul {
        overflow: auto;

    }

    .navbar li {
        float: left;
        list-style: none;
        padding: 15px 1px 10px 25px;


    }

    .navbar li a {
        text-decoration: none;
        color: black;
        font-weight: bold;
        font-size: 18px;

    }
    .navbar li a:hover{
        color: rgb(241, 7, 54);
    }
    .button{
        float: right;
        padding-top: 5px;
        padding-right: 50px;
        

    }
    .bttn{
        height: 40px;
        width: 100px;
        border-radius: 20px;
        outline: none;
        /* background-color: white; */
        background: rgb(212,63,91);
        background: linear-gradient(90deg, rgba(212,63,91,1) 0%, rgba(37,172,150,1) 100%);
        
    }
    .bttn:hover{
        /* background-color: silver; */
        background: rgb(212,63,91);
        background: linear-gradient(90deg, rgba(212,63,91,1) 0%, rgba(37,172,150,1) 0%);

    }
    .bttnn{

        height: 50px;
        width: 200px;
        border-radius: 20px;
        outline: none;
        /* background-color: white; */
        background: rgb(212,63,91);
        background: linear-gradient(90deg, rgba(212,63,91,1) 0%, rgba(37,172,150,1) 100%);
        font-size: 20px;
        font-family: initial;
        box-shadow: 0 20px 15px rgba(32,32,32,.3);
    }
    .bttnn:hover{
        /* background-color: rgb(0, 255, 64); */
        background: rgb(212,63,91);
        background: linear-gradient(90deg, rgba(212,63,91,1) 0%, rgba(37,172,150,1) 0%);
        transition-duration: 10s;
    } 
    .operation{
         margin-top: 15%;
       /* margin-left: 20%; */
        display: flex;
    align-items: center;
    justify-content: center; 
    /* display: wrap; */
    
        
    }
    .operation a{
        padding-left: 20px;
    }
    .container{
        height: 150px;
        width: 100%;
        background-color: rgba(14, 5, 5, 0.842);
        margin-top: 100px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        
    

    }
    .footer{
        color: white;
        font-weight: bold;
        font-style: italic;
        text-align: center;
        padding-top: 50px;
        
    }
    .session{
         /* text-align: center; */
         display: flex;
    align-items: center;
    justify-content: center; 
    margin-top: 20px;    
    }
    .sociallink a{
        padding-left:70px;
        font-size: 20px;
        color: white;
    }
    .sociallink a:hover{
        color: blue;
    }

    


</style>

<body>



    <nav class="navbar">
        <ul>
            <li><a href="#" target="_blank">Dashboard</a></li>
            <li><a href="#" target="_blank">About us</a></li>
            <li><a href="#" target="_blank">Contact us</a></li>
            <li><a href="#" target="_blank">Privacy and policy</a></li>
            <div class="button">
                <a href="logout.php"><button type="button" name="mybtn" id="bt1" class="bttn">Log out</button></a>

            </div>
           </ul>
    </nav>

    <div class="session">
    <h2>Welcome <?php echo $_SESSION['firstname']; ?> </h2>
    </div>

<div class="operation">
    <a href="form.php"><button type="button" name="mybtn" id="bt2" class="bttnn">Add form</button></a>
    <a href="view.php" target="_blank"><button type="button" name="mybtn" id="bt4" class="bttnn">View form</button></a>
    <a href="editprofile.php" target="_blank"><button type="button" name="mybtn" id="bt3" class="bttnn">Edit Profile</button></a>
    <a href="#" target="_blank"><button type="button" name="mybtn" id="bt5" class="bttnn">Log out</button></a>
</div>
<div class="container">
    <div class="footer">
        <div class="sociallink">
    <a href="#">
        <i class="fab fa-facebook">Facebook</i>
</a>
<a href="#">
    <i class="fab fa-twitter">Twitter</i>
</a>
<a href="#">
    <i class="fab fa-telegram">Telegram</i>
</a>
<a href="#">
    <i class="fab fa-youtube">You-tube</i>
</a>
</div>
        <p>@Student Ragistration | Copyright</p>
    </div>

</div>

</body>
</html>