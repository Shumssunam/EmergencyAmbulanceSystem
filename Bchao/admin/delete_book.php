<?php 
include '../db/connect.php';

$get_id=$_GET['id'];

$delete=  mysql_query("DELETE FROM book_ambulance WHERE book_id='$get_id'");
if($delete){
    header("Location:view_notification.php");
}

?>