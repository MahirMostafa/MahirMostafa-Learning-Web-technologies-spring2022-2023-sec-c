<?php

$uname =$_REQUEST["uname"] ;
$pass =$_REQUEST["pass"];
if($uname == $pass)
{
    header('Location: dashboard.php');
}



?>