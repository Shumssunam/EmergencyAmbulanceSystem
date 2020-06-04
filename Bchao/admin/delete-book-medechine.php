<?php 
include '../db/connect.php';

$get_id=$_GET['id'];

$delete=  mysql_query("DELETE FROM order_medicine WHERE med_id='$get_id'");
if($delete){
    header("Location:medicine_view_msg.php");
}

?>