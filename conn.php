<?php

try{
    $conn=mysqli_connect("localhost","root","","Ajaxcalls");

}catch(Exception $e){
    echo $e->getMessage();

}
