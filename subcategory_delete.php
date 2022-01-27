<?php
include("inc/config.php");
$student_id = $_POST["id"];



$sql = "DELETE FROM sub_category WHERE id = {$student_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
