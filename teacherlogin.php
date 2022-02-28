<?php
session_start();
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
    <title>Log in</title>
</head>
<style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    body {
        background-color: silver;
    }

    .container {
        /* position: absolute;
        top: 20%;
        left: 40%; */
        height: 480px;
        width: 300px;
        background: white;
        border-radius: 20px;
        margin: auto;
        box-shadow: 0px 0px 18px black;
        margin-top: 100px;
        
        /* box-shadow: 0px 0px 18px rgb(10, 229, 245); */

    }

    .urname {
        padding-top: 1px;
        font-size: 20px;
    }

    .passs {
        padding-top: 30px;
        font-size: 20px;
    }


    .container form {
        margin: 40px;
    }

    .subt {
        /* padding-top: 50px; */
        margin-left: 30px;
    }

    #sub {
        height: 40px;
        width: 150px;
        font-size: 20px;
        border-radius: 20px;
        transition: background-color;
        transition-duration: 2s;
        background-color: rgb(247, 137, 11); ;
        /* box-shadow: 0px 0px 20px rgb(12, 255, 93); */
        outline: none;
        border: none;
        
    }

    #sub:hover {
        background-color: rgb(60, 255, 0);

    }

    .container h1 {
        margin-left: 80px;
        padding-top: 10px;
    }

    #nme {
        
        border: 2px solid black;
        width: 200px;
        height: 30px;
        outline: none;
        font-size: 17px;
        text-align: center;
        border-radius: 20px;

    }

    #nme:hover {
        border: 2px solid rgb(7, 255, 214);
        transition-duration: 2s;
    }

    #pass {
    
        border: 2px solid black;
        width: 200px;
        height: 30px;
        outline: none;
        font-size: 20px;
        font-size:17px;
        text-align: center;
        border-radius: 20px;
        margin-top: 15px;

    }

    #pass:hover {
        border: 2px solid rgb(8, 245, 0);
        transition-duration: 2s;

    }
    .error{
         font-size: 15px;
        color: red;
        text-align: center;
        margin-top: 2px;
        font-weight: bold;
        font-style: italic;
    }
    a{
        text-decoration: none;
    }
    
</style>

<body>

    <div class="container">
        <h1>Log in</h1>
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
         <form action="backtechlogin.php" method="POST">
            <div class="urname">
                <input type="text" required="required" name="myemail" id="nme" placeholder="Email ID" value="<?php if(isset($_COOKIE['emailcookie'])) { echo $_COOKIE['emailcookie']; }?>" autocomplete="off" >
                <span1 id="eeemail"></span1>
                
            </div>
            <div class="passs">
                
                <input type="password" required="required" name="mypassword" id="pass" placeholder="Password" value="<?php if(isset($_COOKIE['passwordcookie'])) { echo $_COOKIE['passwordcookie']; }?>" autocomplete="off" >
            </div>
            <br>
            <br>
            <input type="checkbox" name="rememberme"> Remember Me
            <p class="recover">Forget password ? <a href="passwordrecover.php">Click here</a></p>
           
            <div class="subt">
                <input type="submit" name="mysubmit" id="sub">
                </div>

           
    </form>
</body>

</html>