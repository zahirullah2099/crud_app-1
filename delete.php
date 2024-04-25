<?php

include 'connect.php';
if(isset($_GET['id'])){
$id = $_GET['id'];
    $sql = "DELETE FROM crud3 WHERE id = $id";
    $result = mysqli_query($con,$sql);
    header("location:index.php");
}else{
 echo mysqli_error($con);
}

?>