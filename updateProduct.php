<?php
require_once 'conn.php';
if(isset($_POST['pname']) || isset($_POST['pprice'])){

    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $id=$_POST['id'];
  
     $sql="UPDATE products SET pname='$pname',pprice='$pprice' where id='$id'";
    //    $sql="UPDATE `products` SET `pname` = '$pname', `pprice` = '$pprice' WHERE `products`.`id` = '$id'";
        $result=mysqli_query($conn,$sql);
        
        if($result){
            echo json_encode(['status'=>'success','message'=>'Data Updated successfully.']);
        }else{
            echo json_encode(['status'=>'error','message'=>'Can not Update data']);
        }
} else {
    // Return a JSON response indicating missing parameters
    echo json_encode(['status' => 'error', 'message' => 'Missing parameters']);
}