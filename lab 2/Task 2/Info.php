<?php
 $fname =  $_REQUEST['fname'];
 $email =  $_REQUEST['email'];
 $day = $_REQUEST['day'];
 $month = $_REQUEST['month'];
 $year = $_REQUEST['year'];
 $gender = $_REQUEST['gender'] ;
 $degree1 = $_REQUEST['degree_1'];
 $degree2 = $_REQUEST['degree_2'];
 $degree3 = $_REQUEST['degree_3'];
 $degree4 = $_REQUEST['degree_4'];
 $blood_group = $_REQUEST['blood_group'];
 echo"<center>" ;
 echo "<h3>Name:"." &nbsp;" . $fname . "</h3>" ;
 echo "<h3>Email :" . " &nbsp;" . $email . "</h3>" ;
 echo "<h3>Date Of Birth:" . " &nbsp;" .$day ."-" . $month . "-" . $year . "</h3>" ;
 echo "<h3>Gender:"." &nbsp;" . $gender . "</h3>" ;
 echo "<h3>Degree:" . "&nbsp" . $degree1 . "," . $degree2 ."," . $degree3 . "," . $degree4 .  "</h3>";
 echo "<h3>Blood Group:"." &nbsp;" . $blood_group . "</h3>" ;
 echo "</center>";
?>