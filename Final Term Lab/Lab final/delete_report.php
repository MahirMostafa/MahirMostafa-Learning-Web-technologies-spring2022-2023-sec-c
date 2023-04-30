<?php

    require_once('registration_db.php');
    $uname = $_GET['uname'];
     $status = info_delete($uname);
     if($status)
     {
      echo"<h3 align ='center'>INFO DELETED</h3>";
      echo '<a href="operation.php">Go back</a>';
     }
    

?>