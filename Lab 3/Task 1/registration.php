<httml>
    <head>
        <title>Registration</title>
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
    <td><h2><b> XCompany </b></h2></td>

     <th><a href="public_home.php">Home</a></th>
    <th><a href="login.php">Login</a></th>
    <th><a href="registration.php">Registration</a></th>   
   
</tr>
<tr>
    <td colspan="4" height="200px">
        <form method="post" action ="register.php" enctype="">
            <fieldset>
                <legend><b>REGISTRATION</b></legend>
                Name: <input type ="text" id="name" name="name"> <br>
                Email: <input type="email" id="email" name="email"> <br>
                User Name: <input type="text" id="uname" name="uname" > <br>
                Password : <input type ="password" id="pass" name="pass" > <br>
                Confirm Password : <input type ="password" id="cpass" name="cpass" > <br>
                <fieldset>
                <legend>Gender</legend>
                <input type="radio"  name="gender" value="Male"/>Male
                <input type="radio"  name="gender" value="Female"/>Female
                <input type="radio"  name="gender"value="Others"/>Others<br>
                </fieldset>
                <fieldset>
                    <legend>Date Of Birth</legend>
                    <input type="date" id="dob" name="dob">
                </fieldset><br>
                <input type="submit" value="Submit"> 
                <input type="reset"  value="reset">
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