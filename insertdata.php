<?php
require_once 'conn.php';
if(isset($_POST['pname']) || isset($_POST['pprice'])){

    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];

  
        $sql="INSERT into products(pname,pprice) Values('$pname','$pprice')";
        $result=mysqli_query($conn,$sql);

        if($result){
            echo json_encode(['status'=>'success','message'=>'Data added successfully.']);
        }else{
            echo json_encode(['status'=>'error','message'=>'Can not add data']);
        }
   
} else {
    // Return a JSON response indicating missing parameters
    echo json_encode(['status' => 'error', 'message' => 'Missing parameters']);
}