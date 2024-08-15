<?php
require_once 'conn.php'; // Make sure this file sets up the $conn variable

header('Content-Type: application/json'); // Set content type to JSON

if(isset($_POST['id'])){
    $id=$_POST['id'];
    $sql="SELECT * FROM products where id=$id";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
    echo json_encode(['pid'=>$data['id'],'pname'=>$data['pname'],'pprice'=>$data['pprice']]);
}

