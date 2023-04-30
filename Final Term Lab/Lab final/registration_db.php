<?php
require_once('database.php');

function user_add($ename, $uname, $contact ,$password )
{
    $con = getConnection() ;
    $insert_query = "INSERT INTO employee (ename, uname,contact, password) 
    VALUES('$ename', '$uname', '$contact' , '$password')";
    $status = mysqli_query($con, $insert_query);
    return $status;
}

function view_employee()
{
    $con = getConnection() ;
    $view_query = "SELECT * FROM employee";
    $status = mysqli_query($con, $view_query);
    return $status;
}


function view_employee1($uname)
{
    $con = getConnection() ;
    $view_query = "SELECT * FROM employee WHERE uname = '$uname'" ;
    $status = mysqli_query($con, $view_query);
    return $status;
}

function user_update($ename, $uname, $contact ,$password )
{
    $con = getConnection() ;
    $update_query = "UPDATE employee SET ename = '$ename', uname = '$uname', contact = '$contact' , password = '$password' WHERE uname = '$uname'"  ;
    $status = mysqli_query($con, $update_query);
    return $status;
}

function info_delete($uname)
{
    $con = getConnection() ;
    $delete_query = "DELETE FROM employee WHERE uname = '$uname' ";
    $status = mysqli_query($con, $delete_query);
    return $status; 
}

?>