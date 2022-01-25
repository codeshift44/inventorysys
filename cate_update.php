<?php include("inc/header.php");
 include("inc/config.php");

$student_id = $_POST["id"];



$sql = "SELECT * FROM invensys_category WHERE id = {$student_id}";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){

  while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
      <td width='90px'>category</td>
      <td><input class='form-control' type='text' id='edit-name' value='{$row["cate_name"]}'>
            <input class='hidden' type='text' id='edit-id' hidden value='{$row["id"]}'>
      </td>
    </tr>
    <tr>
    <td width='90px'>status</td>
      <td><input type='text' class='form-control' id='edit-status' value='{$row["cate_status"]}'></td>
    </tr>
    <tr>
      <td></td>
      <td><input class='btn btn-success' type='submit' id='edit-submit' value='save'></td>
    </tr>";

  }

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>