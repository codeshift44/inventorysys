<?php
include("inc/config.php"); 
if(empty($_POST['product_id'])){
    echo 3;
}else{
    $pid = mysqli_real_escape_string($conn, $_POST['product_id']); 
    $pname = mysqli_real_escape_string($conn, $_POST['product_name']); 
    $pcate = mysqli_real_escape_string($conn, $_POST['product_cate']); 
    $psubcate = mysqli_real_escape_string($conn, $_POST['product_subcate']); 
    $pbrand = mysqli_real_escape_string($conn, $_POST['product_brand']); 
    $pstock = mysqli_real_escape_string($conn, $_POST['product_stock']); 
    $prate = mysqli_real_escape_string($conn, $_POST['product_price']); 
    $pstatus = mysqli_real_escape_string($conn, $_POST['product_status']); 
   

    $sql = "SELECT  `product_id` FROM products WHERE `product_id`='$pid'";
    $data = mysqli_query($conn, $sql);
    
    if ($row = mysqli_num_rows($data)>0){
        
        echo 2;
    }
    else{
            $ins = "INSERT INTO `products`(`name`, `product_id`, `product_cate`, `product_subcate`, `product_brand`, `product_stock`, `product_rate`, `product_status`) VALUES('$pname','$pid', '$pcate', '$psubcate', '$pbrand', '$pstock', '$prate', '$pstatus')";
            $sel = mysqli_query($conn, $ins);
            if($sel){
                echo 0;
            }else{
                echo 1;
            }
            
    }
}




?> 