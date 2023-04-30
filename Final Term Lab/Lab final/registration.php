<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="regiForm" method="post" action="registration_control.php" onsubmit="return validateForm()">
                        <fieldset>
                            <legend align="center"><h3><b>Registration</b></h3></legend>
                        
                        <table align ="center">
                            <tr>
                                <th align="right">Employee Name :</th>
                                <td><input type="text" name="ename"></td>
                            </tr>
                            <tr>
                                <th align="right">User Name :</th>
                                <td><input type="text" name="uname"></td>
                            </tr>
                            <tr>
                               <th align="right">Contact :</th>
                               <td><input type="number" name="contact"></td> 
                            </tr>
                            <tr>
                               <th align="right">Password :</th>
                               <td><input type="password" name="password"></td> 
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" >
                                    <input type="reset" id="" name="" value="Erase all">
                                </td>
                            </tr>
                          
                        </table>
                        </form>

                       </fieldset>
                       
</body>
</html>

<script>
    function validateForm() {
        var ename = document.forms["regiForm"]["ename"].value;
        var uname = document.forms["regiForm"]["uname"].value;
        var contact = document.forms["regiForm"]["contact"].value;
        var password = document.forms["regiForm"]["password"].value;

        if (ename == "") {
            alert("Please enter Employee name");
            return false;
        }
        if (uname == "") {
            alert("Please enter User name");
            return false;
        }
        if (contact == "") {
            alert("Please enter Contact number");
            return false;
        }
        if (password == "") {
            alert("Please enter Password");
            return false;
        }
    }
</script>