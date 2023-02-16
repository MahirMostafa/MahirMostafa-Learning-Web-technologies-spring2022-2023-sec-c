<?php
$Array = array(10, 20, 30, 40, 50); 
$searchElement = 30; 

if (in_array($searchElement, $Array)) {
  echo $searchElement . "Element found";
} else {
  echo $searchElement . "Element Not Found !!";
}
?>
