<?php

session_start();
if(!isset($_SESSION['firstname'])){
header('location:teacherlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    body {
        background-color: silver;




    }



    .navbar {
        background-color: white;
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

    .navbar li a:hover {
        color: rgb(241, 7, 54);
    }

    .button {
        float: right;
        padding-top: 5px;
        padding-right: 50px;


    }

    .bttn {
        height: 40px;
        width: 100px;
        border-radius: 20px;
        outline: none;
        background-color: white;
    }

    .bttn:hover {
        background-color: silver;
    }

    .bttnn {

        height: 50px;
        width: 200px;
        border-radius: 20px;
        outline: none;
        background-color: white;
        font-size: 20px;
        font-family: initial;
    }

    .bttnn:hover {
        background-color: rgb(0, 255, 64);
        transition-duration: 2s;
    }

    .operation {
        margin-top: 10%;
        margin-left: 20%;
        display: inline-block;
       position: relative;


    }
    .operation div a{
        display: block;
        text-decoration: none;
        padding: 8px;
        color: #000;
    }
    .operation div{
        background-color: white;
        box-shadow: 2px 4px 8px black;`
        z-index: 1;
        visibility: hidden;
        position: absolute;
        min-width: 100%;
        opacity: 0;
        transition: .3s;

    }
    .operation:hover div{
        visibility: visible;
        opacity: 1;
    }
    .operation div a:hover{
        background-color: blue;
        color: white;
    }


    .container {
        height: 150px;
        width: 100%;
        background-color: rgba(14, 5, 5, 0.842);
        margin-top: 250px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;



    }
    

    .footer {
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
</style>

<body>



    <nav class="navbar">
    
        <ul>
            <li><a href="#" target="_blank">Dashboard</a></li>
            <li><a href="#" target="_blank">About us</a></li>
            <li><a href="#" target="_blank">Contact us</a></li>
            <li><a href="#" target="_blank">Privacy and policy</a></li>
            <span class="button">
                <a href="adminlogout.php" target="_blank"><button type="button" name="mybtn" id="bt1" class="bttn">Log
                        out</button></a>
                </div>
        </ul>
    </nav>
    <div class="session">
    <h2>Welcome <?php echo $_SESSION['firstname']; ?> </h2>
    <h2 hidden >Welcome <?php echo $_SESSION['departments']; ?> </h2>
    </div>

    <div class="operation">
        <button type="button" name="btnone" id="bt2" class="bttnn">View-form</button></a>
        <div>
        <a href="viewsemone.php">Semester-1</a>
        <a href="viewsemtwo.php">Semester-2</a>
        <a href="viewsemthree.php">Semester-3</a>
        <a href="#viewsemfour.php#">Semester-4</a>
        <a href="viewsemofive.php">Semester-5</a>
        <a href="viewsemsix.php">Semester-6</a>
        <a href="viewsemsevem.php">Semester-7</a>
        <a href="viewsemeight.php">Semester-8</a>
        </div>
        </div>
        <a href="#" target="_blank"><button type="button" name="mybtn" id="bt3" class="bttnn">Modify form</button></a>
        <a href="#" target="_blank"><button type="button" name="mybtn" id="bt4" class="bttnn">Delete form</button></a>
        <a href="#" target="_blank"><button type="button" name="mybtn" id="bt5" class="bttnn">Log out</button></a>

    <div class="container">
        <div class="footer">
            <p>@Student Ragistration | Copyright</p>
        </div>

    </div>


</body>

</html>