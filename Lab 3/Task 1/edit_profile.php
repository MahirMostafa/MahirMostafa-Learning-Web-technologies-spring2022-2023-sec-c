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

    <th>Logged in as<a href="">Bob</a></th>
    <th><a href="public_home.html">Logout</a></th>   
   
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

    <td colspan="2">
        <form method="post" action ="handler.php" enctype="">
            <fieldset>
                <legend><b>EDIT PROFILE</b></legend>
                Name: <input type ="text" id="name" name="name"> <br><br>
                Email: <input type="email" id="email" name="email"> <br> <br>
                
                
                Gender :<input type="radio"  name="gender" value="Male"/>Male
                <input type="radio"  name="gender" value="Female"/>Female
                <input type="radio"  name="gender"value="Others"/>Others<br> <br>
                    
                Date of Birth: <input type="date" id="dob" name="dob"> <br> <br>
                <input type="submit" value="Submit"> 
            </fieldset>
            </form>
        </td>
   
</tr>
<tr>
    <td colspan="4"><p><center>Copyright (c) 2017</center></p></td>
</tr>
</table>
            
        </center>
    </body>
</httml>