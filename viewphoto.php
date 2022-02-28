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

$arrdata = mysqli_fetch_assoc($showdata);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View-Photo</title>
</head>
<style>
.container{
    display: flex;
    align-items: center;
    justify-content: center;
}
.img{
    width: 500px;
    height: 700px;
    
    
}
</style>
<body>
<div class="container">
<img class="img" src="<?php echo "upload/".$arrdata['recipt_pic']; ?>" >
    </div>
</body>
</html>
<?php

?>
