<?php
require_once "conn.php";
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $sql="DELETE from products where id=$id";
    $result=mysqli_query($conn,$sql);
   $data=mysqli_affected_rows($conn);
   if($data){
        echo json_encode(['status'=>'success','message'=>'Data deleted successfully.']);
    }else{
        echo json_encode(['status'=>'error','message'=>'Can not delete data']);
    }
}