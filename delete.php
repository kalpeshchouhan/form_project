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

$deletequery = "DELETE FROM ragistration_form WHERE id = ($ids)";

$query = mysqli_query($connection, $deletequery);

if($query){
    ?>
    <script>
      alert("Delect success");
      location.replace("viewsemsix.php");
      </script>
      <?php
  }
else{
    ?>
    <script>
      alert("Faild to delete");
      location.replace("viewsemsix.php");
      </script>
      <?php
  }

  ?>
