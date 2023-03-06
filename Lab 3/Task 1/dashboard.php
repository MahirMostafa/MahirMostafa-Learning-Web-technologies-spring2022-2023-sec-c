<?php    session_start() ; ?>

<httml>
    <head>
        <title> Public home</title>
    </head>
    <style>
        table,th,td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <body>
        <center>
<table border="1" width="600px" height="">
<tr> 
    <td width="40%"><h2><b> XCompany </b></h2></td>

     <th> <?php 
     echo"Logged In as " ;
     echo $_SESSION['uname'] ;
      ?> </th>
    <th><a href="public_home.php">Logout</a></th>   
   
</tr>
<tr>
    <td colspan="1" height="300px">
        <table width="100%" height="300px">
            <tr>
                <td><h4><b>Account</b></h4></td>
            </tr>
            <tr>
               <td>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="view_profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="change_profile_picture.php">Change Profile Picture</a></li>
                    <li><a href="change_pass.php">Change Password</a></li>
                    <li><a href="public_home.php">LogOut</a></li>

                </ul>
               </td> 
            </tr>
        </table>
    </td>
<th colspan="3"><h3> <?php echo "<b> Welcome "  .  $_SESSION['uname'] . "<b>";   ?></h3></th>
</tr>
<tr>
    <td colspan="4"><p><center>Copyright (c) 2017</center></p></td>
</tr>
</table>
            
        </center>
    </body>
</httml>
