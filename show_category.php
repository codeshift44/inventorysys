<?php

include("inc/config.php");
include("inc/header.php");

$sql = "SELECT * FROM invensys_category";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table class="table" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                
                <th>Name</th>
                <th>Status</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td>{$row["cate_name"]}</td><td>{$row["cate_status"]} <td align='center'><button class='btn btn-warning edit_btn' data-eid='{$row["id"]}'>Edit</button></td><td align='center'><button Class='btn btn-danger delete_btn ' data-id='{$row["id"]}'>Delete</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>

  
