<?php
session_start();
$_SESSION['firstname'];
$_SESSION['departments'];

$connection = mysqli_connect('localhost', 'root');
// if($connection){
//     echo "succes";

// }
// else{
//     echo "faild";
// }

mysqli_select_db($connection, 'stud_details');

$depart = $_SESSION['departments'];
$email_search = "SELECT * FROM ragistration_form WHERE branch = '$depart'";

$query1 = mysqli_query($connection, $email_search);

    $email_count = mysqli_num_rows($query1);

    //  if($email_count){

        $email_pass = mysqli_fetch_assoc($query1);
        $id = $email_pass['semester'];
        $sem = 8;

$email_search = "SELECT * FROM ragistration_form WHERE semester = '$sem'";
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
    <title>View-Form</title>
</head>
<style>
body{
     background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,9,51,1) 0%, rgba(12,103,121,1) 98%);
}
    .table {
         display: flex;
    align-items: center;
    justify-content: center; 
    margin-top: 20px;
    border-collapse : collapse;
    border-spacing: 0;
    /* background: #fafafa; */
    /* position: absolute;
         z-index: 2;
         left: 50%;
         top: 50%;
         transform: translate(-50%, -50%);
         width: 60%;
         height: 480px;
         background: #fafafa; 
         text-align: center; */

    

    }

    .effect {
        font-size: 20px;
        font-weight: bold;
        color: white;
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,9,51,1) 0%, rgba(49,184,60,1) 98%);
        box-shadow: 0 40px 20px rgba(32,32,32,.3);
    
    }

    .effect td {
        width: 200px;
        height: 35px;
        text-align: center;
        
    }

    .td {
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }

    .tdd {
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    .effects{
        font-size: 15px;
        font-weight: bold;
        color: black;
        background: #fafafa; 
        box-shadow: 0 40px 20px rgba(32,32,32,.3);
        
    }
    .effects td{
        width: 200px;
        height: 35px;
        text-align: center;
    }

    .para{
    display: flex;
    align-items: center;
    justify-content: center; 
    font-size: 30px;
    background-color: yellow;
    margin: 0px;
    height: 70px;
    font-style: italic;
    font-weight: bold;
    border-top-right-radius: 30px;
    border-top-left-radius: 30px;
    }
    a{
        text-decoration: none;
    }
    
</style>


<body>
    <table class="table" >
        <tr class="effect">
            <td class="td">Name</td>
            <td>Roll no</td>
            <td>Semester</td>
            <td>Submited Date</td>
            <td>Viewform</td>
            <td class="tdd">Editform</td>
        </tr>
</table>
<?php
         for($i=1;$i<=$email_count1;$i++)
{
   $row =  mysqli_fetch_assoc($query);

?>
<table class="table">
 <tr class="effects">
 <td class="td"><?php echo $row['stud_name'] ?></td>
 <td><?php echo $row['roll_no'] ?></td>
 <td><?php echo $row['semester'] ?></td>
<td><?php echo $row['date'] ?></td>
<td><a href="viewformtwo.php?id=<?php echo $row['id']; ?>" title="click to view form">viewform</a></td>
<td class="tdd"><a href="delete.php?id=<?php echo $row['id']; ?>" title="click to view form">Delete-form</a></td>
</tr>
</table>
</body>
</html>

<?php
}
     }
     else{
         ?>
         <script>
          alert("NO form submitted");
          location.replace("admindashboard.php");
          </script>
          <?php
        
     }
?>
