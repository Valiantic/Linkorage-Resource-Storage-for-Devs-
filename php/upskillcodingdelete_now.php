<?php

include("connections.php");

$link_id = $_POST["link_id"];

mysqli_query($connections, "DELETE FROM tbl_upskillcoding WHERE id = '$link_id' ");

echo "<script language='javascript'>alert('Link has been Deleted!')</script>";
echo "<script>window.location.href='../php/editupskillcoding.php';</script>";

?>