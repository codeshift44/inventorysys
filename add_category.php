 <?php
include("inc/config.php"); 
if(empty($_POST['cate_name'])){
    echo 3;
}else{
    $category = mysqli_real_escape_string($conn, $_POST['cate_name']); 
    $category_status = mysqli_real_escape_string($conn, $_POST['cate_status']); 

    $sql = "SELECT  `cate_name` FROM invensys_category WHERE `cate_name`='$category'";
    $data = mysqli_query($conn, $sql);
    
    if ($row = mysqli_num_rows($data)>0){
        
        echo 2;
    }
    else{
            $ins = "INSERT INTO `invensys_category`(`cate_name`, `cate_status`) VALUES('$category','$category_status')";
            $sel = mysqli_query($conn, $ins);
            if($sel){
                echo 0;
            }else{
                echo 1;
            }
            
    }
}




?> 