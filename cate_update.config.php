<?php
include("inc/config.php");
$student_id = $_POST["id"];
$firstName = $_POST["name"];
$lastName = $_POST["cateStatus"];



$sql = " UPDATE `invensys_category` SET `cate_name`='$firstName',`cate_status`='$lastName' WHERE id = {$student_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
