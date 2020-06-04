<?php 
include '../db/connect.php';

$get_id=$_GET['id'];

$delete=  mysql_query("DELETE FROM registration WHERE reg_id='$get_id'");
if($delete){
    header("Location:view_user.php");
}

?>
