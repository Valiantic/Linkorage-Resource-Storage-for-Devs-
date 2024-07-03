<?php

$link_id = $_REQUEST["id"]; // achor tag of update 


include("connections.php"); // add database access 

$get_record = mysqli_query($connections, "SELECT * FROM tbl_aihelpersrecord WHERE id='$link_id'"); // get id of a certain account



while($row_edit = mysqli_fetch_assoc($get_record)) {  // fetch data 


    $db_link = $row_edit["link"];  
    $db_detail = $row_edit["detail"];
    
}

?>

<!-- pass the argument action to another update file  -->
<form method="POST" action="updated_aihelpers.php"> 

<input type="hidden" name="link_id" value="<?php echo $link_id; ?>">
<input type="text" name="new_link" value="<?php echo $db_link; ?>">
<Br>
<input type="text" name="new_detail" value="<?php echo $db_detail; ?>">
<Br>

<input type="submit" value="Update">

</form>
