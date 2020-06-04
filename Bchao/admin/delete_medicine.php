<?php 
include '../db/connect.php';

$get_id=$_GET['id'];

$delete=  mysql_query("DELETE FROM add_medicine WHERE medi_id='$get_id'");
if($delete){
    header("Location:view_medicine.php");
}

?>