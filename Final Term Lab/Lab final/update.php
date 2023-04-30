<?php 
 $uname = $_GET['uname'] ;
 require_once('registration_db.php');
 $status = view_employee1($uname) ;
 $result = mysqli_fetch_assoc($status);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="regiForm" method="post" action="update_control.php" onsubmit="return validateForm()">
                        <fieldset>
                            <legend align="center"><h3><b>Update Info</b></h3></legend>
                        
                        <table align ="center">
                            <tr>
                                <th align="right">Employee Name :</th>
                                <td><input type="text" name="ename" value="<?php echo $result['ename']; ?>"></td>
                            </tr>
                            <tr>
                                <th align="right">User Name :</th>
                                <td><input type="text" name="uname" value="<?php echo $result['uname']; ?>"></td>
                            </tr>
                            <tr>
                               <th align="right">Contact :</th>
                               <td><input type="number" name="contact" value="<?php echo $result['contact']; ?>"></td> 
                            </tr>
                            <tr>
                               <th align="right">Password :</th>
                               <td><input type="password" name="password" value="<?php echo $result['password']; ?>"></td> 
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