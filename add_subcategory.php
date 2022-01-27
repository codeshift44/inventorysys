<?php
include("inc/config.php"); 
if(empty($_POST['subcate_name'])){
    echo 3;
}else{
    $subcategory = mysqli_real_escape_string($conn, $_POST['subcate_name']); 
    $subcategory_status = mysqli_real_escape_string($conn, $_POST['subcate_status']); 
    $category = mysqli_real_escape_string($conn, $_POST['category']); 

    $sql = "SELECT  `name` FROM sub_category WHERE `name`='$subcategory'";
    $data = mysqli_query($conn, $sql);
    
    if ($row = mysqli_num_rows($data)>0){
        
        echo 2;
    }
    else{
            $ins = "INSERT INTO `sub_category`(`name`, `status`, `cate_id`) VALUES('$subcategory','$subcategory_status', '$category')";
            $sel = mysqli_query($conn, $ins);
            if($sel){
                echo 0;
            }else{
                echo 1;
            }
            
    }
}




?> 