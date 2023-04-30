<?php
$ename = $uname = $contact = $password = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $ename = $_POST['ename']  ;
  $uname = $_POST['uname'] ;
  $contact = $_POST['contact'] ;
  $password = $_POST['password'] ;
}

if(isset($_POST['submit']))
{
    require_once('registration_db.php');
     $status = user_update($ename, $uname, $contact ,$password );
     if($status)
     {
      echo"<h3 align ='center'>Info Updated</h3>";
      echo '<a href="operation.php">Go back</a>';
     }
    
}

?>