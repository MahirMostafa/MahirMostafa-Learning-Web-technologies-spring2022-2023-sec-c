<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operation</title>
    <style>
          .update
          {
            background-color :  lightgreen ;
            border: 0;
            outline: none;
            cursor: pointer;
          }  
          .delete
          {
            background-color : red ;
            border: 0;
            outline: none;
            cursor: pointer;
          } 
        </style>
</head>
<body>
<table border="1" align="center" style="border-collapse: collapse;" width ="500px">
                        <center>
                        <tr>
                            <th width="25%">Employee Name: </th>
                            <th width="25%">User Name: </th>
                            <th width="25%">Contact: </th>
                            <th width="25%">Password:</th>
                            <th width="25%" colspan ="2">Action</th>
                        </tr>
                        <?php 
                 require_once('registration_db.php');
                 $status = view_employee();
                 if ($status->num_rows > 0) 
                 {
                    
                    while($row = $status->fetch_assoc()) {
                        $ename = $row["ename"];
                        $uname = $row["uname"];
                        $contact = $row["contact"];
                        $password =$row["password"];
                        echo "<tr><td>$ename</td><td>$uname</td><td>$contact</td><td>$password</td>
                        <td><a href='update.php?uname=$uname'><input type='submit' value='Update' class='update'></a></td><td>
                        <a href='delete_report.php?uname=$uname'><input type='submit' value='Delete' class='delete'></a></td>
                        </tr>";
                    }
                 } else {
                    echo "No results found";
                 }


                    ?>

                         
                      </center>    
                      </table> 
</body>
</html>