<?php

include("connections.php"); // add database access 

$link_id = $_POST["link_id"]; // get the id 

$new_link = $_POST["new_link"]; // new email 
$new_detail = $_POST["new_detail"]; // new username


mysqli_query($connections, "UPDATE tbl_aihelpersrecord SET link='$new_link', detail='$new_detail' WHERE id='$link_id'");


echo "<script language='javascript'>alert('Link has been updated!')</script>"; //alert method 
echo "<script>window.location.href='../php/editaihelpers.php';</script>";
?>

