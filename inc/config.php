<?php 

$conn = mysqli_connect("localhost", "root", "", "invensys");
if ($conn) {
    echo "";
    # code...
}else{
    echo "database error";
}