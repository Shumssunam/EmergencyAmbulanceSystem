<?php 
include '../db/connect.php';

$get_id=$_GET['id'];

$delete=  mysql_query("DELETE FROM add_district WHERE district_id='$get_id'");
if($delete){
    header("Location:add_district.php");
}

?>