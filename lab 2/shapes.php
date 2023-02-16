<?php
$rows = 3;

for ($i = 0; $i < $rows; $i++) {
  for ($j = 0; $j < $rows - $i; $j++) {
    echo "&nbsp;&nbsp;";
  }
  for ($j = 0; $j <= $i; $j++) {
    echo "*&nbsp;&nbsp;";
  }
  echo "<br>";
}
?>