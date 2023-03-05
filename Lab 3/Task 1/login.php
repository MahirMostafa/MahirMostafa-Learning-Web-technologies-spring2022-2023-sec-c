<httml>
    <head>
        <title>Login</title>
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
        <form method="post" action="login_check.php" enctype="">
        <fieldset>
            <legend><b>LOGIN</b></legend>
            User Name: <input type="text" id="uname" name="uname" > <br>
            password: <input type="password" id="pass" name="pass"> <br>
            <input type ="checkbox" name="check" value="check" > Remmember me <br> <br>
            <input type="submit" value="submit" > <a href="forget_pass.php">Forget password?</a> <br>

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