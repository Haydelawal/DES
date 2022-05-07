<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
      $id = $_GET['deleteid'];

      $sql = "delete from `decisions` where id=$id";
      $result = mysqli_query($con, $sql);
      if($result){
        echo '<script>alert("Data Deletion Successful")</script>';  
         header('Location: http://localhost/motun/dashboard/delete.php');
    }else {
        die(mysqli_error($con));

      }


}

?>