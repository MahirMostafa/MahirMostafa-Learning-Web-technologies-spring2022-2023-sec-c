<?php
  session_start();
  $username = $_REQUEST['uname'];
  $password = $_REQUEST['pass'];
  $valid = false;

  $file = fopen('userinfo.txt', 'r');
  while (($data = fgets($file)) !== false) {
    $temp = explode(',', $data);
    if ($username === trim($temp[1]) && $password === trim($temp[3])) {
      $valid = true;
      $_SESSION['uname'] = $username ;
      break;
    }
  }
  fclose($file);

  if ($valid) {
    echo "<p>Login successful</p>";
     header('Location: dashboard.php');
  } else {
    echo "<p>Invalid username or password</p>";
  }
?>
